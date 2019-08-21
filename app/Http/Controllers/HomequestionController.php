<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homequestion;

class HomequestionController extends Controller
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
        $homequestions = Homequestion::orderBy('id','desc')->paginate(5);
        return view('admin.homequestions.index')->with('homequestions',$homequestions);
    }

    public function add()
    {   
        $homequestions = Homequestion::orderBy('id','desc')->paginate(5);
        return view('admin.homequestions.add')->with('homequestions',$homequestions);
    }

    public function store(Request $request)
    {
       $this->validate($request,[
                'question' => 'required',
                'answer' => 'required',
        ]);
        
        $b= new Homequestion;
        $b->question = trim($request->question);
        $b->answer = trim($request->answer);

        if($b->save()){
            return redirect('/admin/homequestions')->with('flash_success','Questions & Answers added successfully.');
        }
    }

    public function edit($id)
    {
        $homequestion= Homequestion::find($id);
        return view('admin.homequestions.edit')->with('homequestion',$homequestion);
    }

    public function view($id)
    {
        $homequestion= Homequestion::find($id);
        return view('admin.homequestions.view')->with('homequestion',$homequestion);
    }

    public function update(Request $request,$id)
    {
       $this->validate($request,[
                'question' => 'required',
                'answer' => 'required',
       ]);


        $b=Homequestion::find($id);
        
        $b->question = trim($request->question);
        $b->answer = trim($request->answer);

        if($b->save()){
            return redirect('/admin/homequestions')->with('flash_success','Questions & Answers updated successfully.');
        }
    }

    public function del($id)
    {
        $b= Homequestion::find($id);
        if(count($b) > 0 && $b->delete()){
            return redirect('/admin/homequestions')->with('flash_success','Questions & Answers deleted successfully.');
        }else{
            return redirect('/admin/homequestions');
        }
    }
}
