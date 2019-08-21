<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    { 
        $users= User::orderBy('id','DESC')->paginate(10);
        return view('admin.User.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('admin.User.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        // $image_name =$request->hasFile('profile_img') ? $this->updateFile($request->profile_img) : '';

        $b= new User;
        $b->first_name = trim($request->first_name);
        $b->last_name = trim($request->last_name);
        $b->email = trim($request->email);
        $b->phone_number = trim($request->phone_number);

        if($b->save()){
            return redirect('/admin/users/index')->with('flash_success','User Info added successfully.');
        }
    }

    public function show($id)
    {
        $user= User::find($id);
        return view('admin.User.show',compact('user'));
    }

    public function edit($id)
    {
        $user= User::find($id); 
        return view('admin.User.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);
        
        $b=User::find($id);
        //$image_name =$request->hasFile('profile_img') ? $this->updateFile($request->profile_img) : $b->profile_img;

        $b->first_name = trim($request->first_name);
        $b->last_name = trim($request->last_name);
        $b->email = trim($request->email);
        $b->phone_number = trim($request->phone_number);
        //$b->profile_img = trim($image_name);

        if($b->save()){
            return redirect('/admin/users/index')->with('flash_success','User Info updated successfully.');
        }
    }

    public function updateFile($image)
    { 
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/users');
        $image->move($destinationPath, $name);
        return '/images/users/'.$name;
    }

    public function destroy(Request $request)
    {
        User::find($request->get('id'))->delete();
        return redirect('admin/users/index')
                        ->with('flash_success','User Info deleted successfully');
    }

}


