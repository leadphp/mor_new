<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Questions;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    { 
        $questions= Questions::orderBy('id','DESC')->paginate(10);
        return view('admin.Questions.index',compact('questions'));
    }

    public function create()
    {
        return view('admin.Questions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
        ]);

        $b= new Questions;
        $b->question = trim($request->question);

        if($b->save()){
            return redirect('/admin/questions/index')->with('flash_success','Question added successfully.');
        }
    }

    public function show($id)
    {
        $question= Questions::find($id);
        return view('admin.Questions.show',compact('question'));
    }

    public function edit($id)
    {
        $question= Questions::find($id); 
        return view('admin.Questions.edit',compact('question'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'question' => 'required',
        ]);

        $b=Questions::find($request->id);
        $b->question = trim($request->question);

        if($b->save()){
            return redirect('/admin/questions/index')->with('flash_success','Question updated successfully.');
        }
    }

    public function destroy(Request $request)
    {
        Questions::find($request->get('id'))->delete();
        return redirect('admin/questions/index')
                        ->with('success','Question deleted successfully');
    }
    
}
