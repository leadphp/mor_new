<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Common;

class CommonController extends Controller
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
        $commons = Common::orderBy('id','desc')->paginate(5);
        return view('admin.commons.index')->with('commons',$commons);
    }

    public function add()
    {   
        $common = Common::orderBy('id','desc')->get()->toArray();
        return view('admin.commons.add')->with('common',$common);
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
                'banner_title' => 'required',
                'banner_btn_text1' => 'required',
                'banner_btn_text2' => 'required',
                'purchase_title' => 'required',
                'pur_btn_text1' => 'required',
                'pur_btn_text2' => 'required',
                'report_title' => 'required',
                'report_btn_text1' => 'required',
                'saving_title' => 'required',
                'saving_btn_text1' => 'required',
                'saving_btn_text2' => 'required',
                'title' => 'required',
                'grant_btn_text1' => 'required',
        ]);

        $common = $request->all();  
      	foreach ($common as $key => $data) {


		$check_data = Common::orderBy('id','desc')->where('key', '=', $key)->first();

      	if(!empty($check_data)){

      			$check_data->key = trim($key);
			    $check_data->value = trim($data);
			    $check_data->save();

      	}else{

	      		$b = new Common;
			    $b->key = trim($key);
			    $b->value = trim($data);
			    $b->save();
			}
       	}
            return redirect('/admin/commons/add')->with('flash_success','Home Page Content updated successfully.');
    }

}
