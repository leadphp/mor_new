<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use App\Adminimg;
use App\question_survey;
use App\Clerk;
use App\Banks;
use App\Banks_loans;
use App\Banks_regulation;
use App\Banks_regulation_relation;
use App\Bank_interest;
use App\ReportTable;
use App\Coupons;
use App\Bank_madad;
use App\Bank_prime;
use App\Bank_settings_loans;
use App\AdminCheckboxes;
use App\Best_tree_result;
use Excel;
use Mail;
use Session;


class ReportController extends Controller    {
  public $successStatus = 200;
  /** 
       * login api 
       * 
       * @return \Illuminate\Http\Response 
       */ 
  
  //PMT CALCULATIONS FORMULA
  function pmt_calculation($amount,$time,$interest){

    $start_table_enslavement_mortgage = $amount;
    $term_prime = $time*12;
    $start_table_enslavement_interest = $interest/1200;


    if($interest != 0){
      $mr_prime_enslavement  = $start_table_enslavement_interest * (-$start_table_enslavement_mortgage) * pow((1 + $start_table_enslavement_interest), $term_prime) / (1 - pow((1 + $start_table_enslavement_interest), $term_prime));
    }else{
      $mr_prime_enslavement  = 0;
    }

    return $mr_prime_enslavement;
  }

  function fv(float $rate, int $periods, float $payment, float $present_value, bool $beginning = false): float
    {
        $when = $beginning ? 1 : 0;
        if ($rate == 0) {
            $fv = -($present_value + ($payment * $periods));
            return $fv;
        }
        $initial  = 1 + ($rate * $when);
        $compound = pow(1 + $rate, $periods);
        $fv       = - (($present_value * $compound) + (($payment * $initial * ($compound - 1)) / $rate));
        return $fv;
    }


function ipmt(float $rate, int $period, int $periods, float $present_value, float $future_value = 0.0, bool $beginning = false): float
    {
        if ($period < 1 || $period > $periods) {
         //  print_r($period.'/'.$periods);
         // die();
            return 0;
        }
        if ($rate == 0) {
            return 0;
        }
        if ($beginning && $period == 1) {
            return 0.0;
        }
        $payment = $this->pmt($rate,$periods,$present_value);
        if ($beginning) {
            $interest = ($this->fv($rate, $period - 2, $payment, $present_value, $beginning) - $payment) * $rate;
        } else {
          
            $interest = $this->fv($rate, $period - 1, $payment, $present_value, $beginning) * $rate;
        }
        // $interest = ($interest>=0)?$interest:0;
        return $interest;
    }

    function pmt(float $rate, int $periods, float $present_value, float $future_value = 0.0, bool $beginning = false): float
    {
        $when = $beginning ? 1 : 0;
        if ($rate == 0 || $periods == 0) {
            return 0;
        }
        return - ($future_value + ($present_value * pow(1 + $rate, $periods)))
            /
            ((1 + $rate * $when) / $rate * (pow(1 + $rate, $periods) - 1));
    }




  //CALCULATE THE BEST TREE FORMULA
  public function bestfittree(Request $request) { 
    $validator = Validator::make($request->all(), [ 
      'user_id' => 'required', 
    ]);

    $user_id = $request->user_id;
    $bank_name = $request->bank;
    $funding = $request->funding;
    $h1_year = $request->h1;
    $h2_year = $request->h2;
    $h3_year = $request->h3;
    $h4_year = $request->h4;

    $l1_year = $request->l1;
    $l2_year = $request->l2;
    $l3_year = $request->l3;
    $l4_year = $request->l4;
    $l5_year = $request->l5;
    $clikable = $request->clickable;

    // print_r($request->fourteen);
    // die();

    $fourteen = $request->fourteen;
    $fifteen = $request->fifteen;   

    //Question number 8 registration data

    $ques_eight_reg = question_survey::where('question_id',8)->where('user_id',$user_id)->get();
    if(isset($ques_eight_reg)){
      $ques_eight_reg = $ques_eight_reg[0]->meta_value;
    }else{
      $ques_eight_reg = 'no_value';
    }
     
    //return($ques_eight_reg);


    //question Fourteen
      $fourteen = $this->ques_foutrteen($user_id,$fourteen);
    //question Fifiteen
      $fifteen = $this->ques_fifteen($user_id,$fifteen);
    //Code For 20.2
      $twenty_point_two = $this->twenty_point_two($user_id);
      $total_twenty_point_two = $twenty_point_two + $fourteen['fourteen_total_monthly_refunds'] - $fifteen["total_pmt_amount"];
      if($total_twenty_point_two < 100){
        $total_twenty_point_two = 100;
      }else{
        $total_twenty_point_two = $total_twenty_point_two;
      }
    //Code For 20.1
      $twenty_point_one = $this->twenty_point_one($user_id);
      if($twenty_point_one < 1000){
        $twenty_point_one = 1000;
      }else{
        $twenty_point_one = $twenty_point_one;
      }



      $total_twenty_point_one = $twenty_point_one + $fourteen['fourteen_total_loan_amount'] - $fifteen["total_loan_amount"];
    //Code For 20.3
      $twenty_point_three = $this->twenty_point_three($user_id);
      $total_twenty_point_three = ($total_twenty_point_one / $twenty_point_three) * 100;
    //Code For 20.4
      $twenty_point_four = $this->twenty_point_four($user_id);
      $twenty_point_four = (float)$twenty_point_four;
    //Code For 20.5 and 20.6
      if($total_twenty_point_three > $twenty_point_four ){
        $twenty_point_five = 'yes';
        $twenty_point_six = $total_twenty_point_three - $twenty_point_four;
      }else{
        $twenty_point_five = 'no';
        $twenty_point_six = 0;
      }
    //Code For 20.7 && Code For 20.8
      $twenty_point_seven_and_two_point_eight = $this->twenty_point_seven_and_two_point_eight($user_id);

    //Code For 20.8
      $twenty_point_eights = $this->twenty_point_eight($user_id);

      $smaller_btwn_twnty_point_three_and_twnty_point_four = array($total_twenty_point_three, $twenty_point_four);
      $smlr_btw_twnty_point_three_and_twnty_point_four = min($smaller_btwn_twnty_point_three_and_twnty_point_four);


      $eleven_point_four = $twenty_point_eights["ques_eleven"];

      $total_twenty_point_eight = ($eleven_point_four * $smlr_btw_twnty_point_three_and_twnty_point_four) / 100;

      $total_twenty_point_eight_ratio =($total_twenty_point_eight / $eleven_point_four ) * 100;

    //Code For 20.9
      $twenty_point_nines = $this->twenty_point_nine($user_id);

      $eleven_point_four = $twenty_point_nines["ques_eleven"];

      $total_twenty_point_nine = ($eleven_point_four * $twenty_point_six) / 100;

      $total_twenty_point_nine_ratio =($total_twenty_point_nine / $eleven_point_four ) * 100;


      if($total_twenty_point_three <= $twenty_point_four){

        $twenty_point_seven_ = "No";

      }elseif($twenty_point_seven_and_two_point_eight["owner"] >= $total_twenty_point_nine  && $twenty_point_seven_and_two_point_eight["ques_two_one"] == 'Yes' && $twenty_point_five == 'yes' ){

        $twenty_point_seven_ = "Yes";
      }else{
        $twenty_point_seven_ = "Algo_error";
      }






    //Code For Best Bank Tables
     //$interest_from_bank = $this->getting_interest_from_bank_name($user_id,'AA','A','FA',4);

      $table_one_data = $this->table_data('t1',$user_id,$bank_name,$funding,'A','B','',30,10,"",$total_twenty_point_eight,$total_twenty_point_nine,1,2,'');

      $table_one_final_mr = $table_one_data["final_mr_funding"];

      $table_two_data = $this->table_data('t2',$user_id,$bank_name,$funding,'A','B','E',30,10,$h1_year,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);
      $table_three_data = $this->table_data('t3',$user_id,$bank_name,$funding,'A','E','C',30,30,$h2_year,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);
      $table_four_data = $this->table_data('t4',$user_id,$bank_name,$funding,'A','D','C',30,30,$h3_year,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);
      $table_five_data = $this->table_data('t5',$user_id,$bank_name,$funding,'A','D','B',30,30,$h4_year,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);

      $table_six_data = $this->table_data('t6',$user_id,$bank_name,$funding,'B','A','',10,$l1_year,"",$total_twenty_point_eight,$total_twenty_point_nine,2,1,'');
      $table_seven_data = $this->table_data('t7',$user_id,$bank_name,$funding,'A','B','',25,$l2_year,"",$total_twenty_point_eight,$total_twenty_point_nine,1,2,'');
      $table_eight_data = $this->table_data('t8',$user_id,$bank_name,$funding,'B','A','',8,$l3_year,"",$total_twenty_point_eight,$total_twenty_point_nine,2,1,'');
      $table_nine_data = $this->table_data('t9',$user_id,$bank_name,$funding,'A','B','',20,$l4_year,"",$total_twenty_point_eight,$total_twenty_point_nine,1,2,'');
      $table_ten_data = $this->table_data('t10',$user_id,$bank_name,$funding,'B','A','',4,$l5_year,"",$total_twenty_point_eight,$total_twenty_point_nine,2,1,'');

      if($clikable == 0){
        $best_tree_findings = $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,0,$table_one_final_mr);
      }else{
        $best_tree_findings = array(
            'details'=>$clikable,); 
      }

    //return $table_one_data;

    $data = array (

      //'xhamster_live'=>$table_one_final_mr,
      'fourteen_check' => $fourteen,
      'fourteen_loan' => $fourteen['fourteen_total_loan_amount'],
      'fourteen_return' => $fourteen['fourteen_total_monthly_refunds'] ,
      'fifteen_pmt' => $fifteen["fifteen_pmt"],
      'fifteen_settings_pmt'=> $fifteen["settings_pmt"],
      'fifteen_total_loan_amount' => $fifteen["total_loan_amount"],
      'fifteen_total_pmt_amount' => $fifteen["total_pmt_amount"],

      'total_twenty_point_one' => $total_twenty_point_one,
      'total_twenty_point_two' => $total_twenty_point_two,
      'total_twenty_point_three' => $total_twenty_point_three,
      'total_twenty_point_four' => $twenty_point_four,
      'total_twenty_point_five' => $twenty_point_five,
      'total_twenty_point_six' => $twenty_point_six,
      'total_twenty_point_seven' => $twenty_point_seven_and_two_point_eight["ques_two_one"],
      'total_two_point_eight' =>  $twenty_point_seven_and_two_point_eight["owner"],
      'total_twenty_point_eight' => $total_twenty_point_eight,
      'total_twenty_point_eight_ratio' => $total_twenty_point_eight_ratio,
      'total_twenty_point_nine' => $total_twenty_point_nine,
      'total_twenty_point_nine_ratio' => $total_twenty_point_nine_ratio,
      'twenty_point_seven_' => $twenty_point_seven_,

      'table_1' => $table_one_data,
      'table_2' => $table_two_data,
      'table_3' => $table_three_data,
      'table_4' => $table_four_data,
      'table_5' => $table_five_data,
      'table_6' => $table_six_data,
      'table_7' => $table_seven_data,
      'table_8' => $table_eight_data,
      'table_9' => $table_nine_data,
      'table_10' => $table_ten_data,
      'best_tree_findings' => $best_tree_findings,
      'Question_8_reg' => $ques_eight_reg

      
    );  // final response array


    $best_tree = json_encode($data);

    $result = Best_tree_result::where('user_id',$user_id)->delete();
    $result =  new Best_tree_result(); 
    $result->user_id = $user_id;
    $result->tree_data = $best_tree;
    $result->save();


    $response = array (
      'status'=>true,
      'MessageWhatHappen'=>'Success',
      'data'=>$data
    );

    return response()->json(['success'=>$response], $this-> successStatus);
  }

  /*Calculation for question 14*/

  function ques_foutrteen($user_id,$eligible){
    $ques_fourteen = question_survey::where('question_id',16)->where('user_id',$user_id)->get(); 


    $loan = json_decode($ques_fourteen[1]->meta_value);
    $monthly_refunds = json_decode($ques_fourteen[2]->meta_value); 


    $loan1 = (isset($loan[0]) && $loan[0] != "") ? str_replace(',', '', $loan[0]) : 0;
    $loan2 = (isset($loan[1]) && $loan[1] != "") ? str_replace(',', '', $loan[1]) : 0;
    $loan3 = (isset($loan[2]) && $loan[2] != "") ? str_replace(',', '', $loan[2]) : 0;

    $monthly_refunds1 = (isset($monthly_refunds[0]) && $monthly_refunds[0] != "") ? str_replace(',', '', $monthly_refunds[0]) : 0;
    $monthly_refunds2 = (isset($monthly_refunds[1]) && $monthly_refunds[1] != "") ? str_replace(',', '', $monthly_refunds[1]) : 0;
    $monthly_refunds3 = (isset($monthly_refunds[2]) && $monthly_refunds[2] != "") ? str_replace(',', '', $monthly_refunds[2]) : 0;

    $total_loan_fourteen = $loan1 + $loan2 + $loan3;
    $total_monthly_refunds = $monthly_refunds1 + $monthly_refunds2 + $monthly_refunds3;


      // print_r($eligible);

      // die();


    if($eligible != 'no'){
      $fourteen_data = array (
              'fourteen_total_loan_amount'=> $total_loan_fourteen,
              'fourteen_total_monthly_refunds'=> $total_monthly_refunds
            );  // final response array


    }else{
      $fourteen_data = array (
              'fourteen_total_loan_amount'=> 0,
              'fourteen_total_monthly_refunds'=> 0
            ); 
    }
    return  $fourteen_data;
  }

  /*Calculation for question 15*/

  function ques_fifteen($user_id,$eligible){
    $ques_fifteen = question_survey::where('question_id',17)->where('user_id',$user_id)->get();
    $ques_six= question_survey::where('question_id',6)->where('user_id',$user_id)->get();
    $checks = AdminCheckboxes::where('admin_page', 'settings')->where('meta_value','1')->get();
    $settings_banks = array();
    foreach($checks as $check){
      $settings_banks[] = $check->meta_key;    
    }
     // print_r($settings);
     // die();
    $six = $ques_six[0]->meta_value;
    $six = json_decode($six); 

    $loan = json_decode($ques_fifteen[1]->meta_value);
    $time = json_decode($ques_fifteen[3]->meta_value);
    $interest = json_decode($ques_fifteen[5]->meta_value);

    $loan1 = (isset($loan[0]) && $loan[0] != "") ? str_replace(',', '', $loan[0]) : 0;
    $loan2 = (isset($loan[1]) && $loan[1] != "") ? str_replace(',', '', $loan[1]) : 0;
    $loan3 = (isset($loan[2]) && $loan[2] != "") ? str_replace(',', '', $loan[2]) : 0;

    $time1 = (isset($time[0]) && $time[0] != "") ? str_replace(',', '', $time[0]) : 0;
    $time2 = (isset($time[1]) && $time[1] != "") ? str_replace(',', '', $time[1]) : 0;
    $time3 = (isset($time[2]) && $time[2] != "") ? str_replace(',', '', $time[2]) : 0;

    $interest1 = (isset($interest[0]) && $interest[0] != "") ? str_replace(',', '', $interest[0]) : 0;
    $interest2 = (isset($interest[1]) && $interest[1] != "") ? str_replace(',', '', $interest[1]) : 0;
    $interest3 = (isset($interest[2]) && $interest[2] != "") ? str_replace(',', '', $interest[2]) : 0;

    $pmt1 = $this->pmt_calculation($loan1,$time1,$interest1);
    $pmt2 = $this->pmt_calculation($loan2,$time2,$interest2);
    $pmt3 = $this->pmt_calculation($loan3,$time3,$interest3);

    $fifteen_total_loan = $loan1 + $loan2 + $loan3;
    $fifteen_total_pmt = $pmt1 + $pmt2 + $pmt3;

    //Setting page data
    $settings = Bank_settings_loans::get();

    $settings_loan = [];
    $settings_pmt = [];
    $settings_pmts = [];
    foreach($settings as $sett){

      //print_r($six);
      //die();

      switch ($sett->bank_name) {
      case 'AA':
        $bank_name = 'East';
        $settings_bank_name = 'AA-bank';
      break;
      case 'BB':
        $bank_name = 'Discount';
        $settings_bank_name = 'BB-bank';
      break;
      case 'CC':
        $bank_name = 'Association';
        $settings_bank_name = 'CC-bank';
      break;
      case 'DD':
        $bank_name = 'Workers';
        $settings_bank_name = 'DD-bank';
      break;
      case 'EE':
        $bank_name = 'National';
        $settings_bank_name = 'EE-bank';
      break;
      case 'FF':
        $bank_name = 'Treasure';
        $settings_bank_name = 'FF-bank';
      break;
      case 'GG':
        $bank_name = 'Jeruselam';
        $settings_bank_name = 'GG-bank';
      break;
      case 'HH':
        $bank_name = 'International';
        $settings_bank_name = 'HH-bank';
      break;
      case 'OO':
        $bank_name = 'Other';
        $settings_bank_name = 'OO-bank';
      break;
      default:
        $bank_name = 'East';
        $settings_bank_name = 'AA-bank';
      break;
    }


      if(in_array($bank_name , $six) && in_array($settings_bank_name, $settings_banks)){

        $S_loan = $sett->loan_fee;
        $S_loan = ($S_loan != "") ? str_replace(',', '', $S_loan) : 0;

        $S_loans = $sett->loan_fee;
        $S_loans = ($S_loans != "") ? str_replace(',', '', $S_loans) : 0;

        $S_time = $sett->loan_time;
        $S_time = ($S_time != "") ? str_replace(',', '', $S_time) : 0;
        $S_interest = $sett->loan_interest;
        $S_interest = ($S_interest != "") ? str_replace(',', '', $S_interest) : 0;

      }else{

        $S_loan = 0;
        $S_loans = $sett->loan_fee;
        $S_loans = ($S_loans != "") ? str_replace(',', '', $S_loans) : 0;
        $S_time = $sett->loan_time;
        $S_time = ($S_time != "") ? str_replace(',', '', $S_time) : 0;
        $S_interest = $sett->loan_interest;
        $S_interest = ($S_interest != "") ? str_replace(',', '', $S_interest) : 0;

       

      }

      $S_pmts = $this->pmt_calculation($S_loans,$S_time,$S_interest);

      $S_pmt = $this->pmt_calculation($S_loan,$S_time,$S_interest);

      $settings_loan[] = $S_loan;
      $settings_pmt[] = $S_pmt;

      $settings_pmts[] = $S_pmts;

    }

    //print_r($settings_loan);
    //die();


    $settings_total_loan = array_sum($settings_loan);
    $settings_total_pmt = array_sum($settings_pmt);

    //total Results
    $fifteen_pmt = array($pmt1,$pmt2,$pmt3);
    $total_loan_amount = $fifteen_total_loan + $settings_total_loan;
    $total_pmt_amount = $fifteen_total_pmt + $settings_total_pmt; 

    


    if($eligible != 'no'){
      $fifteen_data = array (
              'fifteen_pmt'=>$fifteen_pmt,
              'settings_pmt'=> $settings_pmts,
              'total_loan_amount'=> $total_loan_amount,
              'total_pmt_amount'=> $total_pmt_amount
            );  // final response array


    }else{
      $fifteen_data = array (
              'fifteen_pmt'=>$fifteen_pmt,
              'settings_pmt'=> $settings_pmt,
              'total_loan_amount'=> 0,
              'total_pmt_amount'=> 0
            ); 
    }

    return  $fifteen_data;
  }


  function twenty_point_two($user_id){

    $ques_twelve = question_survey::where('question_id',14)->where('user_id',$user_id)->where('meta_key','monthly_refund_input')->get();
    $twelve_pmt = $ques_twelve[0]->meta_value;
    $twelve_pmt = ($twelve_pmt != "") ? str_replace(',', '', $twelve_pmt) : 0;
    return $twelve_pmt;

  }

  function twenty_point_one($user_id){

    $ques_eleven = question_survey::where('question_id',11)->where('user_id',$user_id)->where('meta_key','mortgage_fee')->get();
    $ques_eleven = $ques_eleven[0]->meta_value;
    $ques_eleven = ($ques_eleven != "") ? str_replace(',', '', $ques_eleven) : 0;
    return $ques_eleven;

  }

  function twenty_point_three($user_id){

    $ques_eleven = question_survey::where('question_id',11)->where('user_id',$user_id)->get();

    if($ques_eleven[0]->parent_id == 112){
      $ques_eleven = $ques_eleven[1]->meta_value;
      $ques_eleven = ($ques_eleven != "") ? str_replace(',', '', $ques_eleven) : 0;
    }else{
      $ques_eleven = $ques_eleven[0]->meta_value;
      $ques_eleven = ($ques_eleven != "") ? str_replace(',', '', $ques_eleven) : 0;
    }
    return $ques_eleven;
  }


  function twenty_point_four($user_id){

    $ques_one = question_survey::where('question_id',1)->where('user_id',$user_id)->get();
    $ques_one = $ques_one[0]->meta_value;
    $ques_eight = question_survey::where('question_id',8)->where('user_id',$user_id)->get();
    $ques_eight = $ques_eight[0]->meta_value;
    $ques_nine = question_survey::where('question_id',9)->where('user_id',$user_id)->get();
    $ques_nine = $ques_nine[0]->meta_value;

    if($ques_eight == 'any_cause'){
      $twenty_point_four = '50';
    }else if($ques_eight == 'mistaken_program'){
      $twenty_point_four = '75';
    }else{
      if($ques_one == "rental_aprt" || $ques_one == "free_aprt"){
        $twenty_point_four = '75';
      }else{
        if($ques_nine == 'investor'){
          $twenty_point_four = '50';
        }else if($ques_nine == 'asset_improver'){
          $twenty_point_four = '70';
        }else{
          $twenty_point_four = '75';
        }
      }
    }

    return $twenty_point_four;
  }



  function twenty_point_seven_and_two_point_eight($user_id){
    $ques_two = question_survey::where('question_id',2)->where('user_id',$user_id)->get();
    $ques_two_one = $ques_two[0]->meta_value;

    $ques_two_property = question_survey::where('question_id',2)->where('user_id',$user_id)->where('meta_key','property_value')->get();
    $property = json_decode($ques_two_property[0]->meta_value);

    $property1 = (isset($property[0]) && $property[0] != "") ? str_replace(',', '', $property[0]) : 0;
    $property2 = (isset($property[1]) && $property[1] != "") ? str_replace(',', '', $property[1]) : 0;
    $property3 = (isset($property[2]) && $property[2] != "") ? str_replace(',', '', $property[2]) : 0;

    $ques_two_mortgage= question_survey::where('question_id',2)->where('user_id',$user_id)->where('meta_key','monthly_income')->get();
    $mortgage = json_decode($ques_two_mortgage[0]->meta_value);

    $mortgage1 = (isset($mortgage[0]) && $mortgage[0] != "") ? str_replace(',', '', $mortgage[0]) : 0;
    $mortgage2 = (isset($mortgage[1]) && $mortgage[1] != "") ? str_replace(',', '', $mortgage[1]) : 0;
    $mortgage3 = (isset($mortgage[2]) && $mortgage[2] != "") ? str_replace(',', '', $mortgage[2]) : 0;


    $owner_value_1 = $property1 - $mortgage1;
    $owner_value_2 = $property2 - $mortgage2;
    $owner_value_3 = $property3 - $mortgage3;



      $owner = array($owner_value_1, $owner_value_2, $owner_value_3);
      $owner = max($owner);


      $final_data = array(
                'ques_two_one'=>$ques_two_one,
                'owner'=> $owner
              );


    return $final_data;
  }


  function twenty_point_eight($user_id){
    $ques_eight = question_survey::where('question_id',8)->where('user_id',$user_id)->get();
    $ques_eight = $ques_eight[0]->meta_value;

    $ques_eleven = question_survey::where('question_id',11)->where('user_id',$user_id)->get();

    if($ques_eight == 'mistaken_program'){
      $value = 'yes';
      if($ques_eleven[0]->parent_id == 112){
        $ques_eleven = $ques_eleven[1]->meta_value;
        $ques_eleven = ($ques_eleven != "") ? str_replace(',', '', $ques_eleven) : 0;
      }else{
        $ques_eleven = 0;
      }

    }else{
      $value='no';
      $ques_eleven = $ques_eleven[0]->meta_value;
      $ques_eleven = ($ques_eleven != "") ? str_replace(',', '', $ques_eleven) : 0;

    }

    $final_value = array('ques_eleven' => $ques_eleven,
                          'value' => $value
                          ); 
    return $final_value;

  }


  function twenty_point_nine($user_id){

    $ques_eight = question_survey::where('question_id',8)->where('user_id',$user_id)->get();
    $ques_eight = $ques_eight[0]->meta_value;

    $ques_eleven = question_survey::where('question_id',11)->where('user_id',$user_id)->get();

    if($ques_eight == 'mistaken_program'){
      $value = 'yes';
      if($ques_eleven[0]->parent_id == 112){
        $ques_eleven = $ques_eleven[1]->meta_value;
        $ques_eleven = ($ques_eleven != "") ? str_replace(',', '', $ques_eleven) : 0;
      }else{
        $ques_eleven = 0;
      }

    }else{
      $value='no';
      $ques_eleven = $ques_eleven[0]->meta_value;
      $ques_eleven = ($ques_eleven != "") ? str_replace(',', '', $ques_eleven) : 0;

    }

    $final_value = array('ques_eleven' => $ques_eleven,
                          'value' => $value
                          ); 
    return $final_value;

    
  }




  function getting_interest_from_bank_name($user_id,$bank_names,$type,$funding="",$year){

    $ques_six = question_survey::where('question_id',6)->where('user_id',$user_id)->get();
    $ques_six = $ques_six[0]->meta_value;
    $ques_six = json_decode($ques_six);

    switch ($type) {
      case 'A':
        $type = 'prime';
      break;
      case 'B':
        $type = 'const_inter_linked';
      break;
      case 'C':
        $type = 'const_inter_unlinked';
      break;
      case 'D':
        $type = 'var_inter_5year_linked';
      break;
      case 'E':
        $type = 'var_inter_5year_unlinked';
      break;
      default:
        $type = 'prime';
        break;
    }

    switch ($bank_names) {
      case 'AA':
        $bank_name = 'East';
      break;
      case 'BB':
        $bank_name = 'Discount';
      break;
      case 'CC':
        $bank_name = 'Association';
      break;
      case 'DD':
        $bank_name = 'Workers';
      break;
      case 'EE':
        $bank_name = 'National';
      break;
      case 'FF':
        $bank_name = 'Treasure';
      break;
      case 'GG':
        $bank_name = 'Jeruselam';
      break;
      case 'HH':
        $bank_name = 'International';
      break;
      case 'OO':
        $bank_name = 'Other';
      break;
      default:
        $bank_name = 'East';
      break;
    }

    // switch ($funding) {
    //   case 'FA':
    //     $funding = 'FundingA';
    //   break;
    //   case 'FB':
    //     $funding = 'FundingB';
    //   break;
    //   case 'FC':
    //     $funding = 'FundingC';
    //   break;
    //   case 'FD':
    //     $funding = 'Any_Cause';
    //   break;
    //   default:
    //     $funding = 'FundingA';
    //     break;
    // }

    $prime_deltas = Bank_interest::where('bank_name',$bank_names)->where('funding_type',$funding)->where('years', $year)->get();
    if(in_array($bank_name,$ques_six)){
      $prime_delt = Bank_interest::where('bank_name',$bank_names)->where('funding_type','FundingA')->first();
      
      $discount_status = $prime_delt->discount_status;
      $discount = $prime_delt->discount;

      if($discount_status == 1){

        $prime_delta = $prime_deltas[0]->$type;
        $prime_delta = $prime_delta - $discount;

      }else{
        $prime_delta = $prime_deltas[0]->$type;
      }

    }else{


      $prime_delta = $prime_deltas[0]->$type;

    }

  return $prime_delta;
  }




  function table_data($table_id,$user_id,$bank_name,$funding_type,$type1,$type2,$type3="",$year1,$year2,$year3="",$funding_mortgage,$enslavement_mortgage,$split1,$split2,$split3=""){

      //Interest for prime
      $interest_row_1 = $this->getting_interest_from_bank_name($user_id,$bank_name,$type1,$funding_type,$year1);
      $interest_row_2 = $this->getting_interest_from_bank_name($user_id,$bank_name,$type2,$funding_type,$year2);
      if(!empty($year3)){
      $interest_row_3 = $this->getting_interest_from_bank_name($user_id,$bank_name,$type3,$funding_type,$year3);
      }

      //Interest for enslavement
      $e_interest_row_1 = $this->getting_interest_from_bank_name($user_id,$bank_name,$type1,'Enslavement',$year1);
      $e_interest_row_2 = $this->getting_interest_from_bank_name($user_id,$bank_name,$type2,'Enslavement',$year2);
      if(!empty($year3)){
      $e_interest_row_3 = $this->getting_interest_from_bank_name($user_id,$bank_name,$type3,'Enslavement',$year3);
      }


        /* Funding mortgage Starts*/

       if(!empty($year3)){
          $funding_mortgage1 = $split1 * ($funding_mortgage)/3;
          $funding_mortgage2 = $split2 * ($funding_mortgage)/3;
          $funding_mortgage3 = $split3 * ($funding_mortgage)/3;
          $mortgage = array($funding_mortgage1, $funding_mortgage2, $funding_mortgage3); 
        }else{
          $funding_mortgage1 = $split1 * ($funding_mortgage)/3;
          $funding_mortgage2 = $split2 * ($funding_mortgage)/3;
          $mortgage = array($funding_mortgage1, $funding_mortgage2);
        }

        $pmt1  = $this->pmt_calculation($funding_mortgage1,$year1,$interest_row_1);
        $pmt2  = $this->pmt_calculation($funding_mortgage2,$year2,$interest_row_2);
        if(!empty($year3)){
        $pmt3  = $this->pmt_calculation($funding_mortgage3,$year3,$interest_row_3);
        } 


        if(!empty($year3)){
          $total_mr_funding = $pmt1+$pmt2+$pmt3; // total MR funding 
        }else{
          $total_mr_funding = $pmt1+$pmt2; // total MR funding
        }

        /* Funding mortgage Ends*/

        /* Enslavement Mortgage Starts*/

        if(!empty($year3)){
          $enslavement_mortgage1 = $split1 * ($enslavement_mortgage)/3;
          $enslavement_mortgage2 = $split2 * ($enslavement_mortgage)/3;
          $enslavement_mortgage3 = $split3 * ($enslavement_mortgage)/3;
          $e_mortgage = array($enslavement_mortgage1, $enslavement_mortgage2, $enslavement_mortgage3); 
        }else{
          $enslavement_mortgage1 = $split1 * ($enslavement_mortgage)/3;
          $enslavement_mortgage2 = $split2 * ($enslavement_mortgage)/3;
          $e_mortgage = array($enslavement_mortgage1, $enslavement_mortgage2);
        }

        $e_pmt1  = $this->pmt_calculation($enslavement_mortgage1,$year1,$interest_row_1);
        $e_pmt2  = $this->pmt_calculation($enslavement_mortgage2,$year2,$interest_row_2);
        if(!empty($year3)){
        $e_pmt3  = $this->pmt_calculation($enslavement_mortgage3,$year3,$interest_row_3);
        } 


        if(!empty($year3)){
            $total_mr_enslavement = $e_pmt1+$e_pmt2+$e_pmt3;    // Total MR enslavement
        }else{
            $total_mr_enslavement = $e_pmt1+$e_pmt2;    // Total MR enslavement
        }
        
        /* Enslavement mortgage Ends*/

        $final_mr = $total_mr_funding+$total_mr_enslavement; // final MR


        if(!empty($year3)){
          $data =   array (

                    'interest' => array($interest_row_1, $interest_row_2, $interest_row_3),
                    'e_interest' => array($e_interest_row_1, $e_interest_row_2, $e_interest_row_3),
                    'row1'=> $pmt1 ,
                    'row2'=> $pmt2 ,
                    'row3'=> $pmt3 ,
                    'total_mr_funding'=> $total_mr_funding,
                    'final_mr_funding'=> $final_mr,
                    'e_row1'=> $e_pmt1 ,
                    'e_row2'=> $e_pmt2 ,
                    'e_row3'=> $e_pmt3 ,
                    'total_mr_enslavement'=> $total_mr_enslavement,
                    'final_mr_enslavement'=> $final_mr,
                    'mortgage_amount' => $mortgage,
                    'e_mortgage_amount' => $e_mortgage
          );
        }else{
          $data =   array (
                    'interest' => array($interest_row_1, $interest_row_2),
                    'e_interest' => array($e_interest_row_1, $e_interest_row_2),
                    'row1'=> $pmt1 ,
                    'row2'=> $pmt2 ,
                    'total_mr_funding'=> $total_mr_funding,
                    'final_mr_funding'=> $final_mr,
                    'e_row1'=> $e_pmt1 ,
                    'e_row2'=> $e_pmt2 ,
                    'total_mr_enslavement'=> $total_mr_enslavement,
                    'final_mr_enslavement'=> $final_mr,
                    'mortgage_amount' => $mortgage,
                    'e_mortgage_amount' => $e_mortgage
          );
        }

        return $data;
  }



function find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count=0,$table_one_final_mr=0){

  $aa = array();
   switch ($count) {
    case '0':
      for($i=10; $i<=30; $i++){
        $table_two_data = $this->table_data('t2',$user_id,$bank_name,$funding,'A','B','E',30,10,$i,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);
        $dd = $table_two_data["final_mr_funding"];
        $aa[] = $table_two_data["final_mr_funding"];
        $ss = 'H1-'.$i;
        $type= array('A','B','E');
        $years = array(30,10,$i);
        $divide = array(1,1,1);
        $rule = array('B','E','A');

        //print_r($dd);

        //if($dd >= '9158.36010005198' ){
        if($dd < $total_twenty_point_two ){

          $data = array(
            'details'=>$ss,
            'full'=>$table_two_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' => $rule,
          );

          return $data;
          break;
        }else{
          $count++;
          $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
           break;
        }    
      }

    case '1':
    for($i=10; $i<=30; $i++){
     $table_three_data = $this->table_data('t3',$user_id,$bank_name,$funding,'A','E','C',30,30,$i,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);
      $dd = $table_three_data["final_mr_funding"];
      //$aa[] = $table_two_data["final_mr_funding"];
        $ss = 'H2-'.$i;
        $type= array('A','E','C');
        $years = array(30,10,$i);
        $divide = array(1,1,1);


        if($dd < $total_twenty_point_two ){

          $data = array(
            'details'=>$ss,
            'full'=>$table_three_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' =>'',
          );

          return $data;
        break;
      }else{
        $count++;
        $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
         break;
      }    
    }

    case '2':
    for($i=10; $i<=30; $i++){
      $table_four_data = $this->table_data('t4',$user_id,$bank_name,$funding,'A','D','C',30,30,$i,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);
      $dd = $table_four_data["final_mr_funding"];
      //$aa[] = $table_two_data["final_mr_funding"];
      $ss = 'H3-'.$i;

      $type= array('A','D','C');
        $years = array(30,10,$i);
        $divide = array(1,1,1);


        if($dd < $total_twenty_point_two ){

          $data = array(
            'details'=>$ss,
            'full'=>$table_four_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' =>'',
          );
          return $data;
        break;
      }else{
        $count++;
        $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
         break;
      }    
    }

    case '3':
    for($i=10; $i<=30; $i++){
       $table_five_data = $this->table_data('t5',$user_id,$bank_name,$funding,'A','D','B',30,30,$i,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);
      $dd = $table_five_data["final_mr_funding"];
      //$aa[] = $table_two_data["final_mr_funding"];
      $ss = 'H4-'.$i;

      $type= array('A','D','B');
        $years = array(30,10,$i);
        $divide = array(1,1,1);
        $rule = array("B","D","A");


        if($dd < $total_twenty_point_two ){

          $data = array(
            'details'=>$ss,
            'full'=>$table_five_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' => $rule,
          );
          return $data;
        break;
      }else{
        $count++;
        $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
         break;
      }    
    }

    case '4':
    for($i=30; $i>=25; $i--){
      $table_six_data = $this->table_data('t6',$user_id,$bank_name,$funding,'B','A','',10,$i,"",$total_twenty_point_eight,$total_twenty_point_nine,2,1,'');
      $dd = $table_six_data["final_mr_funding"];
      //$aa[] = $table_two_data["final_mr_funding"];
      $ss = 'L1-'.$i;
        $type= array('B','A');
        $years = array(10,$i);
        $divide = array(2,1);


        if($dd < $total_twenty_point_two ){

          $data = array(
            'details'=>$ss,
            'full'=>$table_six_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' =>'',
          );
          return $data;
        break;
      }else{
        $count++;
        $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
         break;
      }    
    }

    case '5':
    for($i=10; $i>=8; $i--){
      $table_seven_data = $this->table_data('t7',$user_id,$bank_name,$funding,'A','B','',25,$i,"",$total_twenty_point_eight,$total_twenty_point_nine,1,2,'');
      $dd = $table_seven_data["final_mr_funding"];
      //$aa[] = $table_two_data["final_mr_funding"];
      $ss = 'L2-'.$i;

      $type= array('A','B');
        $years = array(25,$i);
        $divide = array(1,2);


        if($dd < $total_twenty_point_two ){

          $data = array(
            'details'=>$ss,
            'full'=>$table_seven_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' =>'',
          );
          return $data;
        break;
      }else{
        $count++;
        $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
         break;
      }    
    }

    case '6':
    for($i=25; $i>=20; $i--){
       $table_eight_data = $this->table_data('t8',$user_id,$bank_name,$funding,'B','A','',8,$i,"",$total_twenty_point_eight,$total_twenty_point_nine,2,1,'');
      $dd = $table_eight_data["final_mr_funding"];
      //$aa[] = $table_two_data["final_mr_funding"];
      $ss = 'L3-'.$i;

      $type= array('B','A');
        $years = array(8,$i);
        $divide = array(2,1);


        if($dd < $total_twenty_point_two ){

          $data = array(
            'details'=>$ss,
            'full'=>$table_eight_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' =>'',
          );
          return $data;
        break;
      }else{
        $count++;
        $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
         break;
      }    
    }

    case '7':
    for($i=8; $i>=4; $i--){
     $table_nine_data = $this->table_data('t9',$user_id,$bank_name,$funding,'A','B','',20,$i,"",$total_twenty_point_eight,$total_twenty_point_nine,1,2,'');
      $dd = $table_nine_data["final_mr_funding"];
      //$aa[] = $table_two_data["final_mr_funding"];
      $ss = 'L4-'.$i;

      $type= array('A','B');
        $years = array(20,$i);
        $divide = array(1,2);


        if($dd < $total_twenty_point_two ){

          $data = array(
            'details'=>$ss,
            'full'=>$table_nine_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' =>'',
          );
          return $data;
        break;
      }else{
        $count++;
        $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
         break;
      }    
    }

    case '8':

    

    for($i=20; $i>=4; $i--){
      $table_ten_data = $this->table_data('t10',$user_id,$bank_name,$funding,'B','A','',4,$i,"",$total_twenty_point_eight,$total_twenty_point_nine,2,1,'');
      $dd = $table_ten_data["final_mr_funding"];
      //$aa[] = $table_two_data["final_mr_funding"];
      $ss = 'L5-'.$i;

      $type= array('B','A');
        $years = array(4,$i);
        $divide = array(2,1);


        if($dd < $total_twenty_point_two ){
   

          $data = array(
            'details'=>$ss,
            'full'=>$table_ten_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' =>'',
          );
          return $data;

        break;
      }else{
        $count++;
        $this->find_best_tree($user_id,$bank_name,$funding,$total_twenty_point_eight,$total_twenty_point_nine,$total_twenty_point_two,$count,$table_one_final_mr);
         break;
      }    
    }

    default:
      if($table_one_final_mr < $total_twenty_point_two){

        
        $table_ten_data = $this->table_data('t10',$user_id,$bank_name,$funding,'B','A','',4,4,"",$total_twenty_point_eight,$total_twenty_point_nine,2,1,'');
        $dd = $table_ten_data["final_mr_funding"];
        //$aa[] = $table_two_data["final_mr_funding"];
        $ss = 'L5-Nothing Best Found';

        $type= array('B','A');
        $years = array(4,4);
        $divide = array(2,1);

        // $table_nine_data = $this->table_data('t9',$user_id,$bank_name,$funding,'A','B','',20,4,"",$total_twenty_point_eight,$total_twenty_point_nine,1,2,'');
        // $dd = $table_nine_data["final_mr_funding"];
        // //$aa[] = $table_two_data["final_mr_funding"];
        // $ss = 'L4-';

        // $type= array('A','B');
        // $years = array(20,4);
        // $divide = array(1,2);

          $data = array(
            'details'=>$ss,
            'full'=>$table_ten_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' =>'',
          ); 
      }else{

        $table_five_data = $this->table_data('t5',$user_id,$bank_name,$funding,'A','D','B',30,30,30,$total_twenty_point_eight,$total_twenty_point_nine,1,1,1);
        $dd = $table_five_data["final_mr_funding"];
        //$aa[] = $table_two_data["final_mr_funding"];
        $ss = 'H4-Nothing Found Best';

        $type= array('A','D','B');
        $years = array(30,30,30);
        $divide = array(1,1,1);
        $rule = array('B','D','A');

          $data = array(
            'details'=>$ss,
            'full'=>$table_five_data,
            'link_type'=>$type,
            'years'=>$years,
            'divide'=>$divide,
            'funding' => $funding,
            'bank_name' => $bank_name,
            'rule' => $rule,
          );  
      }

    return $data;
    break;
  }


}

}