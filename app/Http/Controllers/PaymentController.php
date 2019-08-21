<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exreport;
use App\question_survey;
use App\Clerk;
use App\Banks_regulation;
use App\Banks_regulation_relation;
use Auth;
use Mail;
use Session;
use Excel;


class PaymentController extends Controller
{
    //


	public function __construct()
    {
       $this->middleware('auth');
    }

    public function payment_one(){

    	return view('payment_pages.paymentStep1');

    } 


    public function payment_two(){

    	return view('payment_pages.paymentStep2');

    } 


    public function payment_three(){

    	return view('payment_pages.paymentStep3');

    } 


    public function payment_four(){

    	return view('payment_pages.paymentStep4');

    }

/*-----------------------------BANK STEPS FUNCTIONS---------------------------------------------------*/
    public function bankStep_zero(){

    	return view('payment_pages.step_4_0');
    }

    public function bankStep_one(){

    	return view('payment_pages.step_4_1');
    } 

    public function bankStep_two(){

    	return view('payment_pages.step_4_2');
    } 

    public function bankStep_three(){

    	return view('payment_pages.step_4_3');
    } 

    public function bankStep_four(){

    	return view('payment_pages.step_4_4');
    } 

    public function bankStep_five(){

    	return view('payment_pages.step_4_5');
    } 

    public function bankStep_six(){

    	return view('payment_pages.step_4_6');
    } 

    public function bankStep_seven(){

    	return view('payment_pages.step_4_7');
    } 
}
