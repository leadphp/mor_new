<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function register_data(Request $request)
    {
            $v=\Validator($request->all(),[
                    'first_name'    => 'required|string|max:255',
                    'last_name'     => 'required|string|max:255',
                    'email'         => 'required|string|email|max:255|unique:users',
                    'phone_number'  => 'required|string|max:255',
                    'password'      => 'required|string|min:6|confirmed',
             ]);

             if($v->fails()){
                return response()->json(['status'=>0,'errors' => $v->errors()]);
             }else{

            $user               =   new User();
            $user->role         =   $request->role;
            $user->first_name   =   $request->first_name;
            $user->last_name    =   $request->last_name;
            $user->email        =   $request->email;
            $user->phone_number =   $request->phone_number;
            $user->password     =   \Hash::make($request->password);
            $user->save();

            $response = array(
                'status' => 1,
                'msg' => 'User registered successfully',
            );
            \Auth::login($user);

            return response()->json($response);
        }
    }

    public function login_data(Request $request) {
        if (\Auth::attempt ( array (
                'email' => $request->get ( 'email' ),
                'password' => $request->get ( 'password' ) 
        ) )) {
           $response = array(
                'status' => 1,
                'msg' => 'User login successfully',
            );
            return response()->json($response);

        } else {

           $response = array(
                'status' => 0,
                'msg' => 'Invalid credentials.',
            );
            return response()->json($response);
        }
    }

}
