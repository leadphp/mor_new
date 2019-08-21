<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;

class FeatureController extends Controller
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
        $features = Feature::orderBy('id','desc')->paginate(5);
        return view('admin.features.index')->with('features',$features);
    }

    public function add()
    {   
        $features = Feature::orderBy('id','desc')->paginate(5);
        return view('admin.features.add')->with('features',$features);
    }

    public function store(Request $request)
    {
       $this->validate($request,[
                'title' => 'required',
                'description' => 'required',
        ]);
        
        $b= new Feature;
        $b->title = trim($request->title);
        $b->description = trim($request->description);

        if($b->save()){
            return redirect('/admin/features')->with('flash_success','Feature added successfully.');
        }
    }

    public function edit($id)
    {
        $feature= Feature::find($id);
        return view('admin.features.edit')->with('feature',$feature);
    }

    public function view($id)
    {
        $feature= Feature::find($id);
        return view('admin.features.view')->with('feature',$feature);
    }

    public function updateFile($image)
    { 
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/features');
        $image->move($destinationPath, $name);
        return '/images/features/'.$name;
    }

    public function update(Request $request,$id)
    {
       $this->validate($request,[
                'title' => 'required',
                'description' => 'required',
       ]);


        $b=Feature::find($id);
        
        $b->title = trim($request->title);
        $b->description = trim($request->description);

        if($b->save()){
            return redirect('/admin/features')->with('flash_success','Algorithm Feature updated successfully.');
        }
    }

    public function del($id)
    {
        $b= Feature::find($id);
        if(count($b) > 0 && $b->delete()){
            return redirect('/admin/features')->with('flash_success','Algorithm Feature deleted successfully.');
        }else{
            return redirect('/admin/features');
        }
    }
}
