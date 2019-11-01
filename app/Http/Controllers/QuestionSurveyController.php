<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exreport;
use App\question_survey;
use App\Clerk;
use App\Banks_regulation;
use App\Banks_regulation_relation;
use App\AdminCheckboxes;
use App\Bank_interest;
use Auth;
use Mail;
use Session;
use Excel;
class QuestionSurveyController extends Controller
{
   public $user_id_edit;
    public function __construct()
    {
       $this->middleware('auth');

        //$this->auth_checker();
    } 



    public function auth_checker(){
      $user_id_edit = session::get('User_id_edit');

        if($user_id_edit != ""){
            $user_id_edit = session::get('User_id_edit');
        }else{
            $user_id_edit = \Auth::user()->id;

        }
        return $user_id_edit;
    }






    public function latestview(){
        return view('question_latest');
    }

/************************************************************/
    // public function question_flow(){
    //     $sett = AdminCheckboxes::get();
    //   return view('questions_flow')->with('setting',$sett);;
    // }
/***********************************************************/

  public function final_ques(){
     $vv = '';
     $vv .= view('questions.final_result')->render();
     return $vv;
  }



    /*_______________________________________________________________
    |
    |  question Get started post method
    |________________________________________________________________
    */
    public function questionGetstartedPost(Request $request)
    {

        return response()->json([
          'status' => 1,
          //'htmls' => $this->ques1()
        ]);  
    }
  
    /*_______________________________________________________________
    |
    |  question 1 post method
    |________________________________________________________________
    */
    public function questionOnePost(Request $request)
    {


      $user_id_edit = $this->auth_checker();

    	$v = \Validator::make($request->all(),[
           'que1' => 'required',
           'rent' => 'required_if:que1,==,rental_aprt|min:0',
    	],[
            'rent.numeric' => 'חסר ערך מספרי‎',
            'rent.required_if' => 'חסר ערך מספרי‎',
        ]);
    	if($v->fails()){
    		return response()->json([
              'status' => 0,
              'errors' => $v->errors()
    		]);
    	}else{

             $result = question_survey::where('question_id','1')
                      // ->orWhere('meta_key','ques1Option')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            $id = $this->saveAndUpdate('ques1',$request->que1,0,1);
            if($request->que1 == "rental_aprt"){
            	$id = $this->saveAndUpdate('ques1Option',$request->rent,$id,1);
            }

            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques2()
    		]);  
    	}
    }

 	/*_______________________________________________________________
    |
    |  question 2 post method
    |________________________________________________________________
    */
    public function questionTwoPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
    	$v = \Validator::make($request->all(),[
               'que2' => 'required',
               'property_1'=>'required',
               'property_value'=>'required',
               'monthly_income'=>'required',
               'property_value_2'=>'required',
               'mortgage_balance'=>'required',
               'bank'=>'required',
    	],
        [
            'que2.required' => 'חסר ערך מספרי‎',
            'property_1.required' => 'חסר ערך מספרי‎',
            'property_value.required' => 'חסר ערך מספרי‎',
            'monthly_income.required' => 'חסר ערך מספרי‎',
            'property_value_2.required' => 'חסר ערך מספרי‎',
            'mortgage_balance.required' => 'חסר ערך מספרי‎',
            'bank.required' => 'חסר ערך מספרי‎',
        ]);




        $pro_value1 = $request->property_1;
        $pro_value1 =in_array(null, $pro_value1, true);

        $pro_value = $request->property_value;
        $pro_value =in_array(null, $pro_value, true);

        $pro_value2 = $request->property_value_2;
        $pro_value2 =in_array(null, $pro_value2, true);

        $monthly_income = $request->monthly_income;
        $monthly_income =in_array(null, $monthly_income, true);

        $mortgage_balance = $request->mortgage_balance;
        $mortgage_balance =in_array(null, $mortgage_balance, true);

        $bank = $request->bank;
        $bank =in_array(null, $bank, true);



    	if($v->fails()){

    		return response()->json([
          'status' => 0,
          'errors' => $v->errors()
    		]);

    	}elseif($bank == 'false' || $pro_value1 == 'false' || $pro_value == 'false' || $monthly_income == 'false' || $mortgage_balance == 'false' || $pro_value2 == 'false'){

        return response()->json([
          'status' => 2,
        ]);

      }else{
        $result = question_survey::where('question_id','2')->where('user_id',$user_id_edit)->delete();

          if($request->que2 == "No"){
            $ques2 = $this->saveAndUpdate('ques2',$request->que2,0,2);
            $ques2_1 = $this->saveAndUpdate('property_1','[null]',0,2);
            $ques2_2 = $this->saveAndUpdate('property_value','[null]',0,2);
            $ques2_3 = $this->saveAndUpdate('monthly_income','[null]',0,2);
            $ques2_5 = $this->saveAndUpdate('property_value_2','[null]',0,2);
            $ques2_6 = $this->saveAndUpdate('mortgage_balance','[null]',0,2);
            $ques2_9 = $this->saveAndUpdate('bank','[null]',0,2);
          }else{

            $ques2 = $this->saveAndUpdate('ques2',$request->que2,0,2);
            $ques2_1 = $this->saveAndUpdate('property_1',json_encode($request->property_1),0,2);
            $ques2_2 = $this->saveAndUpdate('property_value',json_encode($request->property_value),0,2);
            $ques2_3 = $this->saveAndUpdate('monthly_income',json_encode($request->monthly_income),0,2);
            $ques2_5 = $this->saveAndUpdate('property_value_2',json_encode($request->property_value_2),0,2);
            $ques2_6 = $this->saveAndUpdate('mortgage_balance',json_encode($request->mortgage_balance),0,2);
            $ques2_9 = $this->saveAndUpdate('bank',json_encode($request->bank),0,2);
          }
        return response()->json([
          'status' => 1,
          //'htmls' => $this->ques3()
		    ]);  
    	}
    }


    /*_______________________________________________________________
    |
    |  question 3 post method
    |________________________________________________________________
    */
    public function questionThreePost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
    	$v = \Validator::make($request->all(),[
               'gender' => 'required',
    	],
        [
            'gender.required' => 'חסר ערך מספרי‎',
           
        ]);

    	if($v->fails() ){




    		return response()->json([
              'status' => 0,
              'errors' => $v->errors()
    		]);




    	}else{
        $result = question_survey::where('question_id','3')
                  ->where('user_id',$user_id_edit)
                  ->delete();

        $ques3 = $this->saveAndUpdate('gender',$request->gender,0,3);
        return response()->json([
          'status' => 1,
          //'htmls' => $this->ques4()
    		]);  
    	}
    }

    /*_______________________________________________________________
    |
    |  question 4 post method
    |________________________________________________________________
    */
    public function questionFourPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
    	$v = \Validator::make($request->all(),[
               'net_income' => 'required',
    	],
        [
            'net_income.required' => 'חסר ערך מספרי‎',
           
        ]);

    	if($v->fails()){
    		return response()->json([
              'status' => 0,
              'errors' => $v->errors()
    		]);
    	}else{
            $result = question_survey::where('question_id','4')
                      ->where('user_id',$user_id_edit)
                      ->delete();
            $ques4 = $this->saveAndUpdate('family_income',$request->net_income,0,4);
            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques5()
    		]);  
    	}
    }

    /*_______________________________________________________________
    |
    |  question 5 post method
    |________________________________________________________________
    */
    public function questionFivePost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
    	$v = \Validator::make($request->all(),[
               'stable_status_fee' => 'required',
    	],
        [
            'stable_status_fee.required' => 'חסר ערך מספרי‎',
           
        ]);

    	if($v->fails()){
    		return response()->json([
              'status' => 0,
              'errors' => $v->errors()
    		]);
    	}else{
            $result = question_survey::where('question_id','5')
                      ->where('user_id',$user_id_edit)
                      ->delete();

                      //dd($request->stable_statuss);
            $ques5 = $this->saveAndUpdate('Stable_status_fee',$request->stable_status_fee,0,5);

            $ques5 = $this->saveAndUpdate('Stable_status',$request->stable_status,0,5);

            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques6()
    		]);  
    	}
    }

    /*_______________________________________________________________
    |
    |  question 6 post method
    |________________________________________________________________
    */
    public function questionSixPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
               'bank_name' => 'required',
      ],
        [
            'bank_name.required' => 'חסר ערך מספרי‎',
           
        ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','6')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            $ques5 = $this->saveAndUpdate('bank_name',json_encode($request->bank_name),0,6);
            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques7()
        ]);  
      }
    }

    /*_______________________________________________________________
    |
    |  question 7 post method
    |________________________________________________________________
    */
    public function questionSevenPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
        'other_banks_benifits' => 'required',
         'browser_age' =>'required',
      ],
    [
        'browser_age.required' => 'חסר ערך מספרי‎',
         'other_banks_benifits.required' => 'חסר ערך מספרי‎',
    ]);


      if($v->fails()){
        return response()->json([
          'status' => 0,
          'errors' => $v->errors()    
        ]);
      }elseif($request->browser_age < 18 || $request->browser_age > 120){
        return response()->json([
          'status' => 5,
          //'errors' => 'Check input number',   
        ]);
      }else{
            $result = question_survey::where('question_id','7')
                      ->where('user_id',$user_id_edit)
                      ->delete();

                      //dd($request->browser_age);
            $ques5 = $this->saveAndUpdate('other_banks_benifits',$request->other_banks_benifits,0,7);
            $ques5_1 = $this->saveAndUpdate('browser_age',$request->browser_age,0,7);
            
            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques8()
        ]);  
      }
    }

    /*_______________________________________________________________
    |
    |  question 8 post method
    |________________________________________________________________
    */
    public function questionEightPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
               'why_mortgage' => 'required',
      ],
    [
         'why_mortgage.required' => 'חסר ערך מספרי‎',
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','8')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            $result = question_survey::where('question_id','9')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            $result = question_survey::where('question_id','10')
                      ->where('user_id',$user_id_edit)
                      ->delete();

           // $result = question_survey::where('question_id','11')->where('user_id',\Auth::user()->id)->delete();



            $ques5 = $this->saveAndUpdate('why_mortgage',$request->why_mortgage,0,8);


            if($request->why_mortgage == 'mistaken_program'){
             $ques5 = $this->saveAndUpdate('status_of_mortgage','First apartment',0,9); 
            return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques10()
            ]);
          }elseif($request->why_mortgage == 'any_cause'){
             $ques5 = $this->saveAndUpdate('status_of_mortgage','x',0,9); 
             $ques5 = $this->saveAndUpdate('move_to_appartment_time','0',0,10);

            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques11_3()
            ]);

          } else{
            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques9()
            ]);

          } 
      }
    }

    /*_______________________________________________________________
    |
    |  question 9 post method
    |________________________________________________________________
    */
    public function questionNinePost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
               'status_of_mortgage' => 'required',
      ],
    [
         'status_of_mortgage.required' => 'חסר ערך מספרי‎',
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','9')
                      ->where('user_id',$user_id_edit)
                      ->delete();
            $ques5 = $this->saveAndUpdate('status_of_mortgage',$request->status_of_mortgage,0,9);
            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques10()
        ]);  
      }
    }

    /*_______________________________________________________________
    |
    |  question 10 post method
    |________________________________________________________________
    */
    public function questionTenPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          //'grace' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{

            $result = question_survey::where('question_id','10')
                      ->where('user_id',$user_id_edit)
                      ->delete();



                      $ques5 = $this->saveAndUpdate('Grace_req',$request->grace1,0,10);
            $ques5 = $this->saveAndUpdate('Grace',$request->grace,0,10);
            

            /*question no.8 value*/
            $ques8 = question_survey::where('user_id',$user_id_edit)->where('question_id','8')->get();

            if($ques8[0]->meta_value == "mistaken_program"){
              return response()->json([
              'status' => 1,
              //'htmls' => $this->ques11_2()
              ]);
            }else{
              return response()->json([
              'status' => 1,
              //'htmls' => $this->ques11()
              ]);
            }

            
          
      }
    }
        /*_______________________________________________________________
    |
    |  question 11_1 post method
    |________________________________________________________________
    */
    public function questionElevenOnePost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'incoming_cost' => 'required',
          'equity_cost' => 'required',
      ],
    [
        'incoming_cost.required' => 'חסר ערך מספרי‎',
        'equity_cost.required' => 'חסר ערך מספרי‎'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            // $prop_value = $request->incoming_cost;
            // $self_funding = $request->equity_cost;
            // //dd($prop_value);
            // $mortgage_fee = $prop_value - $self_funding;
            // $morg_ratio = $mortgage_fee/$prop_value * 100;

            $prop_value = $request->incoming_cost;
             $prop_value = str_replace(",","",$prop_value);
            $self_funding = $request->equity_cost;
             $self_funding = str_replace(",","",$self_funding);
            $mortgage_fee = $prop_value - $self_funding;
            $morg_ratio = $mortgage_fee/$prop_value * 100;
                      
            $ques5_0 = $this->saveAndUpdate('property_value',$request->incoming_cost,111,11);
            $ques5_1 = $this->saveAndUpdate('self_funding',$request->equity_cost,111,11);
            $ques5_2 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,111,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,111,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',111,11);


              if(45 < $morg_ratio && $morg_ratio <= 49){
                  return response()->json([
                    'status' => 1,
                  //  'htmls' => $this->ques11()
                  ]); 
              }elseif(60 < $morg_ratio && $morg_ratio <= 64){
                 return response()->json([
                    'status' => 1,
                  //  'htmls' => $this->ques11()
                  ]); 
              }elseif(75 < $morg_ratio && $morg_ratio <= 79){
                  return response()->json([
                    'status' => 1,
                   // 'htmls' => $this->ques11()
                  ]); 
              }else{
                  return response()->json([
                    'status' => 1,
                    //'htmls' => $this->ques13()
                  ]);   
              }



        // return response()->json([
        //   'status' => 1,
        //   'htmls' => $this->ques11()
        // ]);  
      }
    }

    /**FOR YES ANSWER POPUP**/
    public function questionElevenOneTwoPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'incoming_cost' => 'required',
          'equity_cost' => 'required',
      ],
    [
        'incoming_cost.required' => 'חסר ערך מספרי‎',
        'equity_cost.required' => 'חסר ערך מספרי‎'  
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
        $result = question_survey::where('question_id','11')
                  ->where('user_id',$user_id_edit)
                  ->delete();

       $prop_value = $request->incoming_cost;
         $prop_value = str_replace(",","",$prop_value);
        $self_funding = $request->equity_cost;
         $self_funding = str_replace(",","",$self_funding);
        $mortgage_fee = $prop_value - $self_funding;
        $morg_ratio = $mortgage_fee/$prop_value * 100;
        //dd($prop_value);

        if(45 < $morg_ratio && $morg_ratio <= 49){
            $prop_value = $prop_value * 0.45;
        }elseif(60 < $morg_ratio && $morg_ratio <= 64){
            $prop_value = $prop_value * 0.60;
        }elseif(75 < $morg_ratio && $morg_ratio <= 79){
            $prop_value = $prop_value * 0.75;
        }else{
            $prop_value = $prop_value;  
        }
    
        $ques5_0 = $this->saveAndUpdate('property_value',$prop_value,111,11);
        $ques5_1 = $this->saveAndUpdate('self_funding',$request->equity_cost,111,11);
        $ques5_2 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,111,11);
        $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,111,11);
        $ques5_4 = $this->saveAndUpdate('morg_testing1','0',111,11);

        return response()->json([
          'status' => 1,
          //'htmls' => $this->ques13()    
        ]);  
      }
    }
    /**NO ANSWER CLICKED**/
    public function questionElevenOneThreePost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'incoming_cost' => 'required',
          'equity_cost' => 'required',
      ],
    [
        'incoming_cost.required' => 'חסר ערך מספרי‎',
        'equity_cost.required' => 'חסר ערך מספרי‎'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            $prop_value = $request->incoming_cost;
             $prop_value = str_replace(",","",$prop_value);
            $self_funding = $request->equity_cost;
             $self_funding = str_replace(",","",$self_funding);
            $mortgage_fee = $prop_value - $self_funding;
            $morg_ratio = $mortgage_fee/$prop_value * 100;
                      
            $ques5_0 = $this->saveAndUpdate('property_value',$request->incoming_cost,111,11);
            $ques5_1 = $this->saveAndUpdate('self_funding',$request->equity_cost,111,11);
            $ques5_2 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,111,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,111,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',111,11);

            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques13()
               
        ]);  
      }
    }


    /*_______________________________________________________________
    |
    |  question 11_2 (12) post method
    |________________________________________________________________
    */
    public function questionElevenTwoPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'incoming_cost_1' => 'required',
          'required_height' => 'required',
          'property_market_value' => 'required',
      ],
    [
       'incoming_cost_1.required' => 'חסר ערך מספרי‎',
        'required_height.required' => 'חסר ערך מספרי‎',
        'property_market_value.required' => 'חסר ערך מספרי‎'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            $prop_value = $request->incoming_cost_1;
            $prop_value = str_replace(",","",$prop_value);
            $self_funding = $request->property_market_value;
            $self_funding = str_replace(",","",$self_funding);
            $prop_market_value = $request->required_height;
            $prop_market_value = str_replace(",","",$prop_market_value); 
            $mortgage_fee = $prop_value - $self_funding;
            $morg_ratio = $mortgage_fee/$prop_market_value * 100;


            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_1,112,11);
            $ques5_1 = $this->saveAndUpdate('property_market_value',$request->required_height,112,11);
            $ques5_2 = $this->saveAndUpdate('self_funding',$request->property_market_value,112,11);
            $ques5_3 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,112,11);
            $ques5_4 = $this->saveAndUpdate('morg_ratio',$morg_ratio,112,11);


            if(45 < $morg_ratio && $morg_ratio <= 49){
                  return response()->json([
                    'status' => 1,
                   // 'htmls' => $this->ques11_2()
                  ]); 
              }elseif(60 < $morg_ratio && $morg_ratio <= 64){
                 return response()->json([
                    'status' => 1,
                   // 'htmls' => $this->ques11_2()
                  ]); 
              }elseif(75 < $morg_ratio && $morg_ratio <= 79){
                  return response()->json([
                    'status' => 1,
                   // 'htmls' => $this->ques11_2()
                  ]); 
              }else{
                  return response()->json([
                    'status' => 1,
                   // 'htmls' => $this->ques13()
                  ]);   
              }

        //     return response()->json([
        //       'status' => 1,
        //       'htmls' => $this->ques11_2()
        // ]);  
      }
    }


    /*IF POP UP YES*/
    public function questionElevenTwoTwoPost(Request $request)
    {
      $v = \Validator::make($request->all(),[
          'incoming_cost_1' => 'required',
          'required_height' => 'required',
          'property_market_value' => 'required',
      ],
    [
        'incoming_cost_1.required' => 'חסר ערך מספרי‎',
        'required_height.required' => 'חסר ערך מספרי‎',
        'property_market_value.required' => 'חסר ערך מספרי‎'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            // $prop_value = $request->incoming_cost_1;
            // $self_funding = $request->property_market_value;
            // $prop_market_value = $request->required_height; 
            // $mortgage_fee = $prop_value - $self_funding;
            // $morg_ratio = $mortgage_fee/$prop_market_value * 100;


            $prop_value = $request->incoming_cost_1;
            $prop_value = str_replace(",","",$prop_value);
            $self_funding = $request->property_market_value;
            $self_funding = str_replace(",","",$self_funding);
            $prop_market_value = $request->required_height;
            $prop_market_value = str_replace(",","",$prop_market_value); 
            $mortgage_fee = $prop_value - $self_funding;
            $morg_ratio = $mortgage_fee/$prop_market_value * 100;


            if(45 < $morg_ratio && $morg_ratio <= 49){
                $prop_value = $prop_value * 0.45;
            }elseif(60 < $morg_ratio && $morg_ratio <= 64){
                $prop_value = $prop_value * 0.60;
            }elseif(75 < $morg_ratio && $morg_ratio <= 79){
                $prop_value = $prop_value * 0.75;
            }else{
                $prop_value = $prop_value;  
            }


            $ques5 = $this->saveAndUpdate('property_value',$prop_value,112,11);
            $ques5_1 = $this->saveAndUpdate('property_market_value',$request->required_height,112,11);
            $ques5_2 = $this->saveAndUpdate('self_funding',$request->property_market_value,112,11);
            $ques5_3 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,112,11);
            $ques5_4 = $this->saveAndUpdate('morg_ratio',$morg_ratio,112,11);

            return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques13()
        ]);  
      }
    }

    /*IF POP UP NO*/
    public function questionElevenTwoThreePost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'incoming_cost_1' => 'required',
          'required_height' => 'required',
          'property_market_value' => 'required',
      ],
    [
        'incoming_cost_1.required' => 'חסר ערך מספרי‎',
        'required_height.required' => 'חסר ערך מספרי‎',
        'property_market_value.required' => 'חסר ערך מספרי‎'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            // $prop_value = $request->incoming_cost_1;
            // $self_funding = $request->property_market_value;
            // $prop_market_value = $request->required_height; 
            // $mortgage_fee = $prop_value - $self_funding;
            // $morg_ratio = $mortgage_fee/$prop_market_value * 100;


            $prop_value = $request->incoming_cost_1;
            $prop_value = str_replace(",","",$prop_value);
            $self_funding = $request->property_market_value;
            $self_funding = str_replace(",","",$self_funding);
            $prop_market_value = $request->required_height;
            $prop_market_value = str_replace(",","",$prop_market_value); 
            $mortgage_fee = $prop_value - $self_funding;
            $morg_ratio = $mortgage_fee/$prop_market_value * 100;


            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_1,112,11);
            $ques5_1 = $this->saveAndUpdate('property_market_value',$request->required_height,112,11);
            $ques5_2 = $this->saveAndUpdate('self_funding',$request->property_market_value,112,11);
            $ques5_3 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,112,11);
            $ques5_4 = $this->saveAndUpdate('morg_ratio',$morg_ratio,112,11);

            return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques13()
        ]);  
      }
    }



    /*_______________________________________________________________
    |
    |  question 11_3 (13) post method
    |________________________________________________________________
    */
    public function questionthirteenPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'incoming_cost_2' => 'required',
          'equity_height' => 'required',
      ],
    [
         'incoming_cost_2.required' => 'חסר ערך מספרי‎',
        'equity_cost.required' => 'חסר ערך מספרי‎'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            $prop_value = $request->incoming_cost_2;
            $prop_value = str_replace(",","",$prop_value);
            $mortgage_fee = $request->equity_height;
            $mortgage_fee = str_replace(",","",$mortgage_fee);
            $morg_ratio = $mortgage_fee/$prop_value * 100;

            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_2,113,11);
            $ques5_1 = $this->saveAndUpdate('mortgage_fee',$request->equity_height,113,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,113,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',113,11);
            $ques5_5 = $this->saveAndUpdate('morg_testing2','0',113,11);


            if(45 < $morg_ratio && $morg_ratio <= 49){
                  return response()->json([
                    'status' => 1,
                    //'htmls' => $this->ques11_3()
                  ]); 
              }elseif(60 < $morg_ratio && $morg_ratio <= 64){
                 return response()->json([
                    'status' => 1,
                   // 'htmls' => $this->ques11_3()
                  ]); 
              }elseif(75 < $morg_ratio && $morg_ratio <= 79){
                  return response()->json([
                    'status' => 1,
                    //'htmls' => $this->ques11_3()
                  ]); 
              }else{
                  return response()->json([
                    'status' => 1,
                    //'htmls' => $this->ques13()
                  ]);   
              }

        //     return response()->json([
        //       'status' => 1,
        //       'htmls' => $this->ques11_3()
        // ]);  
      }
    }


    public function questionthirteenTwoPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'incoming_cost_2' => 'required',
          'equity_height' => 'required',
      ],
    [
         'incoming_cost_2.required' => 'חסר ערך מספרי‎',
        'equity_cost.required' => 'חסר ערך מספרי‎'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            // $prop_value = $request->incoming_cost_2;
            // $mortgage_fee = $request->equity_height;
            // $morg_ratio = $mortgage_fee/$prop_value * 100;


             $prop_value = $request->incoming_cost_2;
            $prop_value = str_replace(",","",$prop_value);
            $mortgage_fee = $request->equity_height;
            $mortgage_fee = str_replace(",","",$mortgage_fee);
            $morg_ratio = $mortgage_fee/$prop_value * 100;

            if(50 < $morg_ratio && $morg_ratio <= 54){
                $prop_value = $prop_value * 0.50;
            }else{
                $prop_value = $prop_value;  
            }



            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_2,113,11);
            //$ques5_1 = $this->saveAndUpdate('mortgage_fee',$request->equity_height,113,11);

            $ques5_1 = $this->saveAndUpdate('mortgage_fee',$prop_value,113,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,113,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',113,11);
            $ques5_5 = $this->saveAndUpdate('morg_testing2','0',113,11);

            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques13()
        ]);  
      }
    }


    public function questionthirteenThreePost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'incoming_cost_2' => 'required',
          'equity_height' => 'required',
      ],
    [
        'incoming_cost_2.required' => 'חסר ערך מספרי‎',
        'equity_cost.required' => 'חסר ערך מספרי‎'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            // $prop_value = $request->incoming_cost_2;
            // $mortgage_fee = $request->equity_height;
            // $morg_ratio = $mortgage_fee/$prop_value * 100;


             $prop_value = $request->incoming_cost_2;
            $prop_value = str_replace(",","",$prop_value);
            $mortgage_fee = $request->equity_height;
            $mortgage_fee = str_replace(",","",$mortgage_fee);
            $morg_ratio = $mortgage_fee/$prop_value * 100;

            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_2,113,11);
            $ques5_1 = $this->saveAndUpdate('mortgage_fee',$request->equity_height,113,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,113,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',113,11);
            $ques5_5 = $this->saveAndUpdate('morg_testing2','0',113,11);

            return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques13()
        ]);  
      }
    }


          /*_______________________________________________________________
    |
    |  question 14 post method
    |________________________________________________________________
    */
    public function questionfourteenPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'monthly_refund_input' => 'required',
          'lower_mortgage_input' => 'required',
      ],
    [
         'monthly_refund_input.required' => 'חסר ערך מספרי‎',
         'lower_mortgage_input.required' => 'חסר ערך מספרי‎',
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','14')
                      ->where('user_id',$user_id_edit)
                      ->delete();
            $ques7 = question_survey::where('user_id',$user_id_edit)->where('question_id','7')->get();

            $lower_mortgage_input = $request->lower_mortgage_input;
            $lower_mortgage_input = str_replace(",","",$lower_mortgage_input);

            $fix = (int)$ques7[1]->meta_value + (int)$lower_mortgage_input;


            $ques11 = question_survey::where('user_id',$user_id_edit)->where('question_id','11')->where('meta_key','mortgage_fee')->first();


            
            $ques11_value = $ques11->meta_value;
            $ques11_value = str_replace(",","",$ques11_value);

           // print_r($ques11->meta_value);


          $lower_slider = $lower_mortgage_input;

         // print_r($lower_slider);

          switch ($lower_slider) {
              case "4":
                  $val = 1;
                  break;
              case "5":
                  $val = 1.20;
                  break;
              case "6":
                  $val = 1.60;
                  break;
              case "7":
                  $val = 1.80;
                  break;
              case "8":
                  $val = 2;
                  break;
              case "9":
                  $val = 2.50;
                  break;
              case "10":
                  $val = 4;
                  break;
              case "11":
                  $val = 4.50;
                  break;
              case "12":
                  $val = 5;
                  break;
              case "13":
                  $val = 5.50;
                  break;
              case "14":
                  $val = 6;
                  break;
              case "15":
                  $val = 6.50;
                  break;
              case "16":
                  $val = 7;
                  break;
              case "17":
                  $val = 7.50;
                  break;
              case "18":
                  $val = 8;
                  break;
              case "19":
                  $val = 9;
                  break;
              case "20":
                  $val = 10;
                  break;
              case "21":
                  $val = 10.10;
                  break;
              case "22":
                  $val = 10.30;
                  break;
              case "23":
                  $val = 10.50;
                  break;
              case "24":
                  $val = 10.70;
                  break;
              case "25":
                 $val = 13.00;
                  break;
              case "26":
                  $val = 13.50;
                  break;
              case "27":
                  $val = 13.70;
                  break;
              case "28":
                  $val = 13.90;
                  break;
              case "29":
                  $val = 14;
                  break;
              case "30":
                  $val = 14;
                  break;
              default:
                  $val = 0;
            }


            $saving_calculations = $ques11_value*$val/100;

            //dd($saving_calculations);

            $ques5 = $this->saveAndUpdate('monthly_refund_input',$request->monthly_refund_input,0,14);
            $ques5_1 = $this->saveAndUpdate('lower_mortgage_input',$request->lower_mortgage_input,0,14);
            $ques5_2 = $this->saveAndUpdate('monthly_refund_input_slider_value',$request->monthly_refund_input_slider_value,0,14);

            $ques5_3 = $this->saveAndUpdate('saving_calculations',$saving_calculations,0,14);

            if($fix > 80){
              return response()->json([
              'status' => 1,
              //'htmls' => $this->ques13()
              ]);
            }else{
              return response()->json([
              'status' => 1,
              //'htmls' => $this->ques14()
              ]);
            }
          
      }
    }

    public function questionfourteendoublePost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'monthly_refund_input' => 'required',
          'lower_mortgage_input' => 'required',
      ],
    [
         'monthly_refund_input.required' => 'חסר ערך מספרי‎',
         'lower_mortgage_input.required' => 'חסר ערך מספרי‎',
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','14')
                      ->where('user_id',$user_id_edit)
                      ->delete();
            $ques5 = $this->saveAndUpdate('monthly_refund_input',$request->monthly_refund_input,0,14);
            $ques5_1 = $this->saveAndUpdate('lower_mortgage_input',$request->lower_mortgage_input,0,14);
            $ques5_2 = $this->saveAndUpdate('monthly_refund_input_slider_value',$request->monthly_refund_input_slider_value,0,14);

              return response()->json([
              'status' => 1,
              //'htmls' => $this->ques14()
              ]);   
      }
    }


    // public function questionfourteentriplePost(Request $request)
    // {
    //   $v = \Validator::make($request->all(),[
    //       'monthly_refund_input' => 'required',
    //       'lower_mortgage_input' => 'required',
    //   ]);

    //   if($v->fails()){
    //     return response()->json([
    //           'status' => 0,
    //           'errors' => $v->errors()
    //     ]);
    //   }else{
    //         $result = question_survey::where('question_id','14')
    //                   ->where('user_id',\Auth::user()->id)
    //                   ->delete();
    //         $ques5 = $this->saveAndUpdate('monthly_refund_input',$request->monthly_refund_input,0,14);
    //         $ques5_1 = $this->saveAndUpdate('lower_mortgage_input',$request->lower_mortgage_input,0,14);
    //         $ques5_2 = $this->saveAndUpdate('monthly_refund_input_slider_value',$request->monthly_refund_input_slider_value,0,14);

    //           return response()->json([
    //           'status' => 1,
    //           'htmls' => $this->ques14()
    //           ]);   
    //   }
    // }



     /*_______________________________________________________________
    |
    |  question 15 post method
    |________________________________________________________________
    */
    public function questionfifteenPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[

          'ques14' => 'required',
      ],
    [
         'ques14.required' => 'חסר ערך מספרי‎',
    ]);

        $pro_value1 = $request->investment_amount;
        $pro_value1 =in_array(null, $pro_value1, true);

        $pro_value = $request->repay_another;
        $pro_value =in_array(null, $pro_value, true);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }elseif($pro_value1 == 'false' || $pro_value == 'false' ){

        return response()->json([
          'status' => 2,
        ]);

      }else{
            
            $result = question_survey::where('question_id','15')
                      ->where('user_id',$user_id_edit)
                      ->delete();
            $ques13 = $this->saveAndUpdate('money_in_the_future',$request->ques14,0,15);
            $ques13 = $this->saveAndUpdate('investment_amount',json_encode($request->investment_amount),0,15);
            $ques13 = $this->saveAndUpdate('investment_amount_1',json_encode($request->investment_amount_1),0,15);
            $ques13 = $this->saveAndUpdate('repay_another',json_encode($request->repay_another),0,15);
            $ques13 = $this->saveAndUpdate('redeemed',json_encode($request->redeemed),0,15);
            $ques13 = $this->saveAndUpdate('loan_balance_percentage',json_encode($request->loan_balance_percentage),0,15);
            $ques13 = $this->saveAndUpdate('monthly_repayments_percentage',json_encode($request->monthly_repayments_percentage),0,15);

            return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques15()
        ]);  
      }
    }

     /*_______________________________________________________________
    |
    |  question 16 post method
    |________________________________________________________________
    */
    public function questionsixteenPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'other_loan' => 'required',
      ],
    [
         'other_loan.required' => 'חסר ערך מספרי‎',
    ]);


        $pro_value1 = $request->Month_refund;
        $pro_value1 =in_array(null, $pro_value1, true);

        $pro_value = $request->loan_balance_1;
        $pro_value =in_array(null, $pro_value, true);

        $redemmed = $request->redemmed;
        $redemmed =in_array(null, $redemmed, true);





      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }elseif($pro_value1 == 'false' || $pro_value == 'false' || $redemmed == 'false' ){

        return response()->json([
          'status' => 2,
        ]);

      }else{
             
            $result = question_survey::where('question_id','16')
                      ->where('user_id',$user_id_edit)
                      ->delete();
             $ques13 = $this->saveAndUpdate('other_loan',$request->other_loan,0,16);
            $ques13 = $this->saveAndUpdate('loan_balance_1',json_encode($request->loan_balance_1),0,16);
            //$ques13 = $this->saveAndUpdate('loan_balance_2',json_encode($request->loan_balance_2),0,16);
            //$ques13 = $this->saveAndUpdate('termination_of_the_loan_1',json_encode($request->termination_of_the_loan_1),0,16);
            //$ques13 = $this->saveAndUpdate('termination_of_the_loan_2',json_encode($request->termination_of_the_loan_2),0,16);
            $ques13 = $this->saveAndUpdate('Month_refund',json_encode($request->Month_refund),0,16);
             $ques13 = $this->saveAndUpdate('redemmed',json_encode($request->redemmed),0,16);


            return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques16()
        ]);  
      }
    }

         /*_______________________________________________________________
    |
    |  question 17 post method
    |________________________________________________________________
    */
    public function questionseventeenPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
          'additional_loans' => 'required',
      ],
    [
         'additional_loans.required' => 'חסר ערך מספרי‎',
    ]);


        $pro_value1 = $request->loan_balance_1_1;
        $pro_value1 =in_array(null, $pro_value1, true);

        $pro_value = $request->Month_refund_1;
        $pro_value =in_array(null, $pro_value, true);

        $redemmed = $request->termination_of_the_loan_1_1;
        $redemmed =in_array(null, $redemmed, true);




      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }elseif($pro_value1 == 'false' || $pro_value == 'false' || $redemmed == 'false' ){

        return response()->json([
          'status' => 2,
        ]);

      }else{
            $result = question_survey::where('question_id','17')
                      ->where('user_id',$user_id_edit)
                      ->delete();

            $ques2 = question_survey::where('user_id',$user_id_edit)->where('question_id','2')->get();


            // print_r($ques2);
            // die();

            $ques13 = $this->saveAndUpdate('additional_loans',$request->additional_loans,0,17);
            $ques13 = $this->saveAndUpdate('loan_balance_1_1',json_encode($request->loan_balance_1_1),0,17);
            $ques13 = $this->saveAndUpdate('loan_balance_2_1',json_encode($request->loan_balance_2_1),0,17);
            $ques13 = $this->saveAndUpdate('termination_of_the_loan_1_1',json_encode($request->termination_of_the_loan_1_1),0,17);
            $ques13 = $this->saveAndUpdate('termination_of_the_loan_2_1',json_encode($request->termination_of_the_loan_2_1),0,17);
            $ques13 = $this->saveAndUpdate('Month_refund_1',json_encode($request->Month_refund_1),0,17);
             $ques13 = $this->saveAndUpdate('Monthly_repayments_1',json_encode($request->Monthly_repayments_1),0,17);


            if($ques2[0]->meta_value == 'No'){

              return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques17()
              ]);

            }else{

              return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques18()
              ]);  

            }
      }
    }

    /*_______________________________________________________________
    |
    |  question 18 post method
    |________________________________________________________________
    */
    public function questioneightteenPost(Request $request)
    {
      $user_id_edit = $this->auth_checker();
      $v = \Validator::make($request->all(),[
    
          'military_service_time_women' => 'required',
          'national_service_time' => 'required',
          'siblings' => 'required',
          'children' => 'required',
          'current_marriage' => 'required',
          
      ],
    [
         'military_service_time_women.required' => 'חסר ערך מספרי‎',
         'national_service_time.required' => 'חסר ערך מספרי‎',
         'siblings.required' => 'חסר ערך מספרי‎',
         'children.required' => 'חסר ערך מספרי‎',
         'current_marriage.required' => 'חסר ערך מספרי‎',
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','18')
                      ->where('user_id',$user_id_edit)
                      ->delete();


            $a = explode("/",$request->current_marriage);
            $a_calc = $a[0];
            $a_value = $a[1];

            $b = explode("/",$request->children);
            $b_calc = $b[0];
            $b_value = $b[1];

            $c = explode("/",$request->siblings);
            $c_calc = $c[0];
            $c_value = $c[1];

            $d = $request->national_service_time;
            $e = $request->military_service_time_women;

            $sum4and5 = $d + $e;

            $total_points = $a_calc + $b_calc + $c_calc;


            switch ($total_points) {

              case $total_points >= 599 && $total_points <= 999 :
                    $elegibility_score = 54240;
                    break;

              case $total_points >= 1000 && $total_points <= 1399 :
                    $elegibility_score = 62400;
                  break;

              case $total_points >= 1400 && $total_points <= 1499 :
                    $elegibility_score = 74350;
                  break;

              case $total_points >= 1500 && $total_points <= 1599 :
                    $elegibility_score = 85250;
                  break;

              case $total_points >= 1600 && $total_points <= 1699 :
                    $elegibility_score = 96190;
                  break;

              case $total_points >= 1700 && $total_points <= 1799 :
                    $elegibility_score = 107090;
                  break;

              case $total_points >= 1800 && $total_points <= 1899 :
                    $elegibility_score = 117985;
                  break;

              case $total_points >= 1900 && $total_points <= 1999 :
                    $elegibility_score = 128930;
                  break;

              case $total_points >= 2000 && $total_points <= 2099 :
                    $elegibility_score = 139825;
                  break;

              case $total_points >= 2100 && $total_points <= 2199 :
                    $elegibility_score = 150720;
                  break;

              case $total_points >= 2200:
                    $elegibility_score = 161665;
                  break;

              default:
                     $elegibility_score = 0;
            }

           
            $army_score =  $elegibility_score*$sum4and5/100;

            $final_score = $army_score + $elegibility_score;

            $ques18 = $this->saveAndUpdate('current_marriage',$a_value,0,18);
            $ques18 = $this->saveAndUpdate('children',$b_value,0,18);
            $ques18 = $this->saveAndUpdate('siblings',$c_value,0,18);
            $ques18 = $this->saveAndUpdate('military_service_time_men',$request->national_service_time,0,18);
            $ques18 = $this->saveAndUpdate('military_service_time_women',$request->military_service_time_women,0,18);
            $ques18 = $this->saveAndUpdate('total_points',$total_points,0,18);
            $ques18 = $this->saveAndUpdate('elegibility_score',$elegibility_score,0,18);
            $ques18 = $this->saveAndUpdate('army_score',$army_score,0,18);
            $ques18 = $this->saveAndUpdate('final_elegibility_score',$final_score,0,18);

            return response()->json([
              'status' => 1,
              //'htmls' => $this->ques18()
        ]);  
      }
    }



    public function finalPost(Request $request)
    {
      $v = \Validator::make($request->all(),[
          
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            return response()->json([
              'status' => 1,
              //'htmls' => $this->final_ques()
        ]);  
      }
    }



  public function questioneightteen_valuePost(Request $request)
    {
         
      $user_id_edit = $this->auth_checker();

        $ques12 = question_survey::where('user_id',$user_id_edit)->where('question_id','14')->where('meta_key','saving_calculations')->first();

        $saving_calculations = number_format($ques12->meta_value);

        return response()->json([
          'status' => 1,
          'htmls' => $saving_calculations
        ]);  
      
    }
   

/**************************************************************************/
    public function saveAndUpdate($k,$value,$parent,$no)
    {
      $user_id_edit = $this->auth_checker();
      $survey = new question_survey(); 
      $survey->user_id = $user_id_edit;
      $survey->meta_key = $k;
      $survey->question_id = $no;
      $survey->meta_value = $value;
      $survey->parent_id = $parent;
      $survey->save();
      return $survey->id;
    }


/**************************************************************************/

// MAIL FUNCTION

public function emailPost(Request $request){
$email = \Auth::user()->email;
$fname = \Auth::user()->first_name;
$lname = \Auth::user()->last_name;
$phone = \Auth::user()->phone_number;
$email_title = $request->title;
$email_subject = $request->subject;
$email_date = $request->date;
$email_comment = $request->comments;
$email_time = $request->time;

  Mail::send('mails.contact_email', ["data_title"=>$email_title,"data_subject"=>$email_subject,"data_date"=>$email_date, "data_comment"=>$email_comment, "fname"=>$fname, "lname"=>$lname, "phone"=>$phone, "email"=>$email, "time"=>$email_time ], function ($message) use($email_subject) {
      //$message->to('online.mashkanta@gmail.com');
      $message->to('teamphp00@gmail.com');
      $message->subject($email_subject);
  });

  Session::flash('message', 'Email Sent Successfully!!'); 
  return back()->with('status', 'Email Sent Successfully');
}




/**************************Delete User entries****************************/

public function deleteforuser(){
  $user_id_edit = $this->auth_checker();
  $result = question_survey::where('user_id',$user_id_edit)->delete();
  return redirect()->route('get_flow');
}



 public function pmt_slider_ajax(){

        $prime_deltas = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->get();


        return response()->json([
            'status' => 1, 
            'data'=>$prime_deltas
        ]);

    }


}



