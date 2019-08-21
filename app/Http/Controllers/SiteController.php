<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;

class SiteController extends Controller
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
        $sites = Site::orderBy('id','desc')->paginate(5);
        return view('admin.sites.index')->with('sites',$sites);
    }

    public function add()
    {   
        $sites = Site::orderBy('id','desc')->get()->toArray(); 
        return view('admin.sites.add')->with('sites',$sites);
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
                'copyright_text' => 'required',
        ]);

        $site = $request->all();  
      	foreach ($site as $key => $data) {

      		//$image_name =$request->hasFile('image') ? $this->updateFile($request->image) : '';
      		$check_data = Site::orderBy('id','desc')->where('key', '=', $key)->first();

      		if(!empty($check_data)){

      			$check_data->key = trim($key);
			    $check_data->value = trim($data);
			    $check_data->save();

      		}else{

	      		$b = new Site;
			    $b->key = trim($key);
			    $b->value = trim($data);
			    $b->save();
			}
       	}
            return redirect('/admin/sites/add')->with('flash_success','Site Content updated successfully.');
    }

    public function updateFile($image)
    { 
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/logos');
        $image->move($destinationPath, $name);
        return '/images/logos/'.$name;
    }

}
