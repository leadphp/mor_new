<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exreport;

class ExreportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {   
        $exreports = Exreport::orderBy('id','desc')->paginate(5);
        return view('admin.exreports.add')->with('exreports',$exreports);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'pdf' => 'required'
        ]);
       
        $pdf_name =$request->hasFile('pdf') ? $this->updateFile($request->pdf) : '';
        
        $b= new Exreport;
        $b->pdf = trim($pdf_name);

        if($b->save()){
            return redirect('/admin/exreports')->with('flash_success','PDF added successfully.');
        }
    }

    public function edit($id)
    {
        $exreport= Exreport::find($id);
        return view('admin.exreports.edit')->with('exreport',$exreport);
    }

    public function updateFile($pdf)
    { 
        $name = time().'.'.$pdf->getClientOriginalExtension();
        $destinationPath = public_path('/download');
        $pdf->move($destinationPath, $name);
        return '/download/'.$name;
    }

    public function update(Request $request,$id)
    {
       $this->validate($request,[
            'pdf' => 'required'
       ]);

        $b=Exreport::find($id);
       
        $pdf_name =$request->hasFile('pdf') ? $this->updateFile($request->pdf) : $b->pdf;

        $b->pdf = trim($pdf_name);

        if($b->save()){
            return redirect('/admin/exreports/edit/1')->with('flash_success','PDF updated successfully.');
        }
    }
}
