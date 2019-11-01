<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function register_data(Request $request)
    {

        //dd($request->terms_and_condition);


            $v=\Validator($request->all(),[
                    'first_name'    => 'required|string|max:50',
                    'last_name'     => 'required|string|max:50',
                    'email'         => 'required|string|email|max:50|unique:users',
                    'phone_number'  => 'required|string|max:15',
                    'password'      => 'required|string|min:6|confirmed',
                    'terms_and_condition' => 'required',
            ],
            [
                'first_name.required' => 'שדה השם הפרטי נדרש.',
                'first_name.max' => 'ייתכן שהשם הפרטי לא יעלה על 50 תווים.',
                'last_name.required' => 'שדה שם משפחה נדרש.',
                'last_name.max' => 'שם המשפחה עשוי לא להיות גדול מ- 50 תווים.',
                'email.required' => 'שדה הדוא"ל נדרש.',
                'email.max' => 'יתכן שהדוא"ל לא יעלה על 50 תווים.',
                'email.email' => 'כתובת הדוא"ל חייבת להיות כתובת דוא"ל חוקית.',
                // 'email.unique' => 'הדוא"ל כבר נלקח.',
                'email.unique' => 'המייל כבר קיים במערכת',
                'phone_number.required' => 'שדה מספר הטלפון נדרש.',
                'phone_number.max' => 'ייתכן שמספר הטלפון לא יעלה על 15 תווים.',
                'password.required' => 'שדה הסיסמה נדרש.',
                'password.min' => 'הסיסמה חייבת לכלול לפחות 6 תווים',
                'password.confirmed' => 'אישור הסיסמה אינו תואם.',
                'terms_and_condition.required' => 'נדרש שדה התנאים וההגבלות.',


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
