<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exreport;
use App\question_survey;
use App\Clerk;
use App\Banks_regulation;
use App\Banks_regulation_relation;
use App\AdminCheckboxes;
use App\report_two_steps;

use App\Bank_prime;
use App\Bank_settings_loans;
use App\Bank_madad;

use Auth;
use Mail;
use Session;
use Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function thanku(Request $r)
    {
        return json_encode($r->all()); 
    }

    public function questions()
    {
        $exreport = Exreport::orderBy('id','desc')->first(); 
        return view('questions')->with('exreport',$exreport);
    }

    public function login()
    {
        return redirect('/#login');
    }

    public function register()
    {
        return redirect('/#register');
    }

    public function about_us(){

    return view('frontEnd.about_Us');

    }

    public function contact_us(){

    return view('frontEnd.contact_Us');
    
    }
    public function how_it_works(){

    return view('frontEnd.how_it_works');
    
    }
    public function compare_offers(){

    return view('frontEnd.compare_offer');
    
    }
    public function privacy(){

    return view('frontEnd.privacy');
    
    }
    public function terms_and_condition(){

    return view('frontEnd.terms_and_condition');
    
    }
    public function report($id){
        $user_id = $id;
        $step8_1 = report_two_steps::where('user_id',$user_id)->get();
        if(isset($step8_1[0])){
        $step8_2 = $step8_1[0]->step_8;
        $step8 = json_decode($step8_2);


        $step7 = $step8_1[0]->step_7;
        $step6 = $step8_1[0]->step_6;
        $step_6 = json_decode($step6);
        $step_7_val = explode("/",$step7);
        $min_val = $step_7_val[0];
        $year = $step_7_val[1];
        }else{
            $step8= "";
            $step_7_val= "";
            $min_val= "";
            $year = "";
        }
        $constant_banks_AA= Bank_settings_loans::where('bank_name','AA')->get();
        $constant_banks_DD= Bank_settings_loans::where('bank_name','DD')->get();
        $constant_banks_EE= Bank_settings_loans::where('bank_name','EE')->get();
        $maindata_ques_15= question_survey::where('user_id', $id)->where('question_id','17')->get();
        $maindata_ques_6= question_survey::where('user_id', $id)->where('question_id','6')->get();


        $prime = Bank_prime::get();
        $prime_aa = array();
        for ($i=0; $i < 30 ; $i++) { 
            $prime_aa[] = $prime[$i]->prime;
        }
        $madad = Bank_madad::get();
        $madad_aa = array();
        for ($i=0; $i < 30 ; $i++) { 
            $madad_aa[] = $madad[$i]->madad;
        }


    return view('frontEnd.report')->with('user_id', $user_id)->with('step8', $step8)->with('min_val_tab_3',$min_val)->with('year_tab_3',$year)->with('prime',$prime_aa)->with('madad',$madad_aa)->with('step6', $step_6)->with('constant_banks_AA', $constant_banks_AA)->with('constant_banks_DD', $constant_banks_DD)->with('constant_banks_EE', $constant_banks_EE)->with('maindata_ques_15', $maindata_ques_15)->with('maindata_ques_6', $maindata_ques_6);
    
    }
    public function add_route(){

    return view('frontEnd.add_route');
    
    }

     public function question_flow(){

        $user_id_edit = session::get('User_id_edit');
        if($user_id_edit != ""){
            $user_id_edit = session::get('User_id_edit');
        }else{
            $user_id_edit = "";
        }

        $sett = AdminCheckboxes::get();
      return view('questions_flow')->with('setting',$sett)->with('user_to_edit',$user_id_edit);
    }
    


}
