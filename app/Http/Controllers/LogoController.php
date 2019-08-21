<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;

class LogoController extends Controller
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
        $logos = Logo::orderBy('id','desc')->paginate(5);
        return view('admin.logos.index')->with('logos',$logos);
    }

    public function add()
    {   
        $logos = Logo::orderBy('id','desc')->paginate(5);
        return view('admin.logos.add')->with('logos',$logos);
    }

    public function store(Request $request)
    {
       $this->validate($request,[
                'image' => 'image'
       ]);
       
        $image_name =$request->hasFile('image') ? $this->updateFile($request->image) : '';
        
        $b= new Logo;
        $b->image = trim($image_name);

        if($b->save()){
            return redirect('/admin/logos')->with('flash_success','Organization Logo added successfully.');
        }
    }

    public function edit($id)
    {
        $logo= Logo::find($id);
        return view('admin.logos.edit')->with('logo',$logo);
    }

    public function view($id)
    {
        $logo= Logo::find($id);
        return view('admin.logos.view')->with('logo',$logo);
    }

    public function updateFile($image)
    { 
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/logos');
        $image->move($destinationPath, $name);
        return '/images/logos/'.$name;
    }

    public function update(Request $request,$id)
    {
       $this->validate($request,[
                'image' => 'image'
       ]);

        $b=Logo::find($id);
       
        $image_name =$request->hasFile('image') ? $this->updateFile($request->image) : $b->image;

        $b->image = trim($image_name);

        if($b->save()){
            return redirect('/admin/logos')->with('flash_success','Organization Logo updated successfully.');
        }
    }

    public function del($id)
    {
        $b= Logo::find($id);
        if(count($b) > 0 && $b->delete()){
            return redirect('/admin/logos')->with('flash_success','Organization Logo deleted successfully.');
        }else{
            return redirect('/admin/logos');
        }
    }
}
