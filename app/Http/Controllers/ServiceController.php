<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $services = Service::orderBy('id','desc')->paginate(5);
        return view('admin.services.index')->with('services',$services);
    }

    public function add()
    {   
        $services = Service::orderBy('id','desc')->paginate(5);
        return view('admin.services.add')->with('services',$services);
    }

    public function store(Request $request)
    {
       $this->validate($request,[
                'title' => 'required',
                'short_description' => 'required',
                'image' => 'image'
       ]);
       
        $image_name =$request->hasFile('image') ? $this->updateFile($request->image) : '';
        
        $b= new Service;
        $b->title = trim($request->title);
        $b->short_description = trim($request->short_description);
        $b->image = trim($image_name);

        if($b->save()){
            return redirect('/admin/services')->with('flash_success','Service added successfully.');
        }
    }

    public function edit($id)
    {
        $service= Service::find($id);
        return view('admin.services.edit')->with('service',$service);
    }

    public function view($id)
    {
        $service= Service::find($id);
        return view('admin.services.view')->with('service',$service);
    }

    public function updateFile($image)
    { 
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/services');
        $image->move($destinationPath, $name);
        return '/images/services/'.$name;
    }

    public function update(Request $request,$id)
    {
       $this->validate($request,[
                'title' => 'required',
                'short_description' => 'required',
                'image' => 'image'
       ]);


        $b=Service::find($id);
       
        $image_name =$request->hasFile('image') ? $this->updateFile($request->image) : $b->image;
        
        $b->title = trim($request->title);
        $b->short_description = trim($request->short_description);
        $b->image = trim($image_name);

        if($b->save()){
            return redirect('/admin/services')->with('flash_success','Service updated successfully.');
        }
    }

    public function del($id)
    {
        $b= Service::find($id);
        if(count($b) > 0 && $b->delete()){
            return redirect('/admin/services')->with('flash_success','Service deleted successfully.');
        }else{
            return redirect('/admin/services');
        }
    }
    
}
