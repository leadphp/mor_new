<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::orderBy('id','desc')->paginate(5);
        return view('admin.testimonials.index')->with('testimonials',$testimonials);
    }

    public function add()
    {   
        $testimonials = Testimonial::orderBy('id','desc')->paginate(5);
        return view('admin.testimonials.add')->with('testimonials',$testimonials);
    }

    public function store(Request $request)
    {
       $this->validate($request,[
                'title' => 'required',
                'tag' => 'required',
                'short_description' => 'required',
                'image' => 'image'
       ]);
       
        $image_name =$request->hasFile('image') ? $this->updateFile($request->image) : '';
        
        $b= new Testimonial;
        $b->title = trim($request->title);
        $b->tag = trim($request->tag);
        $b->short_description = trim($request->short_description);
        $b->image = trim($image_name);

        if($b->save()){
            return redirect('/admin/testimonials')->with('flash_success','Testimonial added successfully.');
        }
    }

    public function edit($id)
    {
        $testimonial= Testimonial::find($id);
        return view('admin.testimonials.edit')->with('testimonial',$testimonial);
    }

    public function view($id)
    {
        $testimonial= Testimonial::find($id);
        return view('admin.testimonials.view')->with('testimonial',$testimonial);
    }

    public function updateFile($image)
    { 
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/testimonials');
        $image->move($destinationPath, $name);
        return '/images/testimonials/'.$name;
    }

    public function update(Request $request,$id)
    {
       $this->validate($request,[
                'title' => 'required',
                'tag' => 'required',
                'short_description' => 'required',
                'image' => 'image'
       ]);


        $b=Testimonial::find($id);
       
        $image_name =$request->hasFile('image') ? $this->updateFile($request->image) : $b->image;
        
        $b->title = trim($request->title);
        $b->tag = trim($request->tag);
        $b->short_description = trim($request->short_description);
        $b->image = trim($image_name);

        if($b->save()){
            return redirect('/admin/testimonials')->with('flash_success','Testimonial updated successfully.');
        }
    }

    public function del($id)
    {
        $b= Testimonial::find($id);
        if(count($b) > 0 && $b->delete()){
            return redirect('/admin/testimonials')->with('flash_success','Testimonial deleted successfully.');
        }else{
            return redirect('/admin/testimonials');
        }
    }
}
