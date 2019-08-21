<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\MetaTags;

class MetaTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $MetaTags= MetaTags::orderBy('id','DESC')->paginate(10);
        return view('admin.Metatags.index',compact('MetaTags'));
    }

    public function create()
    {
        return view('admin.Metatags.create');
    }

    public function store(Request $request)
    {

       $this->validate($request, [
            'slug'=>'required|unique:meta_tags',
            'meta_title' => 'required',
            
        ]);
       
        MetaTags::create($request->all());
		return redirect('admin/metatags/index')
                       ->with('success','Social Icon created successfully');
    }

    public function show($id)
    {
        $MetaTags= MetaTags::find($id);
        return view('admin.Metatags.show',compact('MetaTags'));
    }

    public function edit($id)
    {
        $MetaTags= MetaTags::find($id);
        return view('admin.Metatags.edit',compact('MetaTags'));
    }

     public function update(Request $request)
    {
          $this->validate($request, [
            'slug'=>'required|unique:meta_tags,slug,'.$request->id,
            'meta_title' => 'required',
            
        ]);

        MetaTags::find($request->get('id'))->update($request->all());
		return redirect('admin/metatags/index/')
                        ->with('success','Meta Tags updated successfully');
    }

    public function destroy(Request $request)
    {
        MetaTags::find($request->get('id'))->delete();
        return redirect('admin/metatags/index')
                        ->with('success','Meta Tags deleted successfully');
    }
}
