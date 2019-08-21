<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pages;

class PagesController extends Controller
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
        $pages = Pages::orderBy('id','desc')->paginate(5);
        return view('admin.pages.index')->with('pages',$pages);
    }

    public function add()
    {   
        $pages = Pages::orderBy('id','desc')->paginate(5);
        return view('admin.pages.add')->with('pages',$pages);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
                'title' => 'required',
                'description' => 'required',
                'image' => 'image'
        ]);
       
        $image_name =$request->hasFile('image') ? $this->updateFile($request->image) : '';
        
        $b= new Pages;
        $b->title = trim($request->title);
        $b->description = trim($request->description);
        $b->image = trim($image_name);

        if($b->save()){
            return redirect('/admin/pages')->with('flash_success','Page added successfully.');
        }
    }

    public function edit($id)
    {
        $page= Pages::find($id);
        return view('admin.pages.edit')->with('page',$page);
    }

    public function view($id)
    {
        $page= Pages::find($id);
        return view('admin.pages.view')->with('page',$page);
    }

    public function updateFile($image)
    { 
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/pages');
        $image->move($destinationPath, $name);
        return '/images/pages/'.$name;
    }

    public function update(Request $request,$id)
    {
       $this->validate($request,[
                'title' => 'required',
                'description' => 'required',
                'image' => 'image'
       ]);


        $b=Pages::find($id);
       
        $image_name =$request->hasFile('image') ? $this->updateFile($request->image) : $b->image;
        
        $b->title = trim($request->title);
        $b->description = trim($request->description);
        $b->image = trim($image_name);

        if($b->save()){
            return redirect('/admin/pages')->with('flash_success','Page updated successfully.');
        }
    }

    public function del($id)
    {
        $b= Pages::find($id);
        if(count($b) > 0 && $b->delete()){
            return redirect('/admin/pages')->with('flash_success','Page deleted successfully.');
        }else{
            return redirect('/admin/pages');
        }
    }
    
}
