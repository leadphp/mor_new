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
class QuestionSurveyController extends Controller
{
    //
    public function __construct()
    {
       $this->middleware('auth');
    } 

    public function latestview(){
        return view('question_latest');
    }

/************************************************************/
    public function question_flow(){
      return view('questions_flow');
    }
/***********************************************************/




//     public function view(){
//      $exreport = Exreport::orderBy('id','desc')->first();
//       $auth = \Auth::user();
//       if(!empty($auth)){
    //   $ques1 = question_survey::where('user_id',\Auth::user()->id)->latest()->first();

    //   if(!empty($ques1)){
    //     $rr = $ques1->question_id;
        
    //     switch ($rr) {
    //       case "1":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','first');
    //           break;
    //       case "2":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','second');
    //           break;
    //       case "3":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','third');
    //           break;
    //       case "4":
    //          return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','fourth') ;
    //           break;
    //       case "5":
    //          return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','fifth');
    //           break;
    //       case "6":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','sixth');
    //           break;
    //       case "7":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','seventh');
    //           break;
    //       case "8":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','eighth bubble_first_filled');
    //           break;
    //       case "9":
    //          return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','ninth bubble_first_filled');
    //           break;
    //       case "10":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','tenth bubble_first_filled');
    //           break;
    //       case "11":
    //          return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','eleventh bubble_first_filled');
    //           break;
    //       case "14":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','twelveth bubble_first_filled bubble_second_filled');
    //           break;
    //       case "15":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','thirteen bubble_first_filled bubble_second_filled');
    //           break;
    //       case "16":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','fourteen bubble_first_filled bubble_second_filled');
    //           break;
    //       case "17":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','fifteen bubble_first_filled bubble_second_filled bubble_third_filled bubble_fourth_filled');
    //           break;
    //       case "18":
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','sixteen bubble_first_filled bubble_second_filled bubble_third_filled bubble_fourth_filled');
    //           break;
    //       default:
    //           return view('question_new')
    //           ->with('exreport',$exreport)
    //           ->with('questions',$this->QuestionHTML())
    //           ->with('class_value','');
    //     }
    //   }else{
    //     return view('question_new')
    //     ->with('exreport',$exreport)
    //     ->with('questions',$this->QuestionHTML());
    //   }
    // }else{ 
    //     return view('question_new')
    //     ->with('exreport',$exreport)
    //     ->with('questions',$this->QuestionHTML());
    // }
//   }

//   public function QuestionHTML()
//   {   
//       $auth = \Auth::user();
//     if(!empty($auth)){
//     //   $ques1 = question_survey::where('user_id',\Auth::user()->id)->latest()->first();

//     //   if(!empty($ques1)){
//     //     $rr = $ques1->question_id;
//     //     switch ($rr) {
//     //     case "1":
//     //         return $this->ques1();
//     //         break;
//     //     case "2":
//     //         return $this->ques2();
//     //         break;
//     //     case "3":
//     //         return $this->ques3();
//     //         break;
//     //     case "4":
//     //         return $this->ques4();
//     //         break;
//     //     case "5":
//     //         return $this->ques5();
//     //         break;
//     //     case "6":
//     //         return $this->ques6();
//     //         break;
//     //     case "7":
//     //         return $this->ques7();
//     //         break;
//     //     case "8":
//     //         return $this->ques8();
//     //         break;
//     //     case "9":
//     //         return $this->ques9();
//     //         break;
//     //     case "10":
//     //         return $this->ques10();
//     //         break;
//     //     case "11":
//     //         return $this->ques11();
//     //         break;
//     //     case "12":
//     //         return $this->ques12();
//     //         break;
//     //     case "13":
//     //         return $this->ques13();
//     //         break;
//     //     case "14":
//     //         return $this->ques14();
//     //         break;
//     //     case "15":
//     //         return $this->ques15();
//     //         break;
//     //     case "16":
//     //         return $this->ques16();
//     //         break;
//     //     case "17":
//     //         return $this->ques17();
//     //         break;
//     //     case "18":
//     //         return $this->ques18();
//     //         break;
//     //     default:
//     //         return $this->Getstarted();
//     //     }
//     //   }else{
//     //     return $this->Getstarted();
//     //   }
//     // }
//     // else{
//       return $this->Getstarted();
//     }
//   }

// /*functions for questions*/
//   public function Getstarted(){
    
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $vv = '';
//       $ques1 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','1')->get();
//       if(count($ques1)){
//         $vv .= view('questions.questionGetstarted')->with('ques1', $ques1)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.questionGetstarted')->render();
//         return $vv;
//       } 
//     }else{
//       $vv = view('questions.questionGetstarted')->render();
//     }
//     return $vv; 
//   }


// 	public function ques1(){
//     $vv ='';
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
// 		  $ques1 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','1')->get();
//       if(count($ques1)){
//         $vv .= view('questions.question1')->with('ques1', $ques1)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question1')->render();
//         return $vv;
//       } 
//     }else{
//       $vv .= view('questions.question1')->render();
//       return $vv;
//     }
// 	}
	
// 	public function ques2(){
// 		$vv = '';
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques2 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();
//       if(count($ques2)){
//        $vv .= view('questions.question2')->with('ques2', $ques2)->render();
//         return $vv;
//       }else{
//        $vv .= view('questions.question2')->render();
//         return $vv;
//       }
     
//     }else{
//       $vv .= view('questions.question2')->render();
//       return $vv;
//     }	
// 	}


// 	public function ques3(){
//     $vv = '';
// 		//$vv = $this->ques2();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques3 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','3')->get();
//       if(count($ques3)){
//        $vv .= view('questions.question3')->with('ques3', $ques3)->render();
//         return $vv;
//       }else{
//        $vv .= view('questions.question3')->render();
//         return $vv;
//       }  
//     }else{
//       $vv .= view('questions.question3')->render();
//       return $vv;
//     }
// 	}



// 	public function ques4(){
// 		$vv = '';
//     //$vv = $this->ques3();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques4 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','4')->get();
//       if(count($ques4)){
//        $vv .= view('questions.question4')->with('ques4', $ques4)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question4')->render();
//         return $vv;
//       }  
//     }else{
//      $vv .= view('questions.question4')->render();
//      return $vv;
//     }	
// 	}


//     public function ques5(){
//     $vv = '';
//     //$vv = $this->ques4();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques5 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','5')->get();
//       if(count($ques5)){
//        $vv .= view('questions.question5')->with('ques5', $ques5)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question5')->render();
//         return $vv;
//       }  
//     }else{
//       $vv .= view('questions.question5')->render();
//       return $vv;
//     }
//   }

//   public function ques6(){
//     $vv = '';
//     //$vv = $this->ques5();
//      /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques6 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','6')->get();
//       if(count($ques6)){
//        $vv .= view('questions.question6')->with('ques6', $ques6)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question6')->render();
//         return $vv;
//       }  
//     }else{
//       $vv .= view('questions.question6')->render();
//       return $vv;
//     }
//   }
//   public function ques7(){
//     $vv = '';
//     //$vv = $this->ques6();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques7 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','7')->get();
//       if(count($ques7)){
//        $vv .= view('questions.question7')->with('ques7', $ques7)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question7')->render();
//         return $vv;
//       }  
//     }else{
//       $vv .= view('questions.question7')->render();
//       return $vv;
//     }
//   }
//   public function ques8(){
//     $vv = '';
//     //$vv = $this->ques7();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques8 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
//       if(count($ques8)){
//        $vv .= view('questions.question8')->with('ques8', $ques8)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question8')->render();
//         return $vv;
//       }  
//     }else{
//       $vv .= view('questions.question8')->render();
//       return $vv;
//     }
//   }


//   public function ques9(){
//     $vv = '';
//     //$vv = $this->ques8();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques8 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
//       $ques9 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','9')->get();
//       if(count($ques9)){
//        $vv .= view('questions.question9')->with('ques9', $ques9)->with('ques8', $ques8)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question9')->with('ques8', $ques8)->render();
//         return $vv;
//       }  
//     }else{
//       $vv .= view('questions.question9')->render();
//       return $vv;
//     }
//   }



//   public function ques10(){
//     $vv = '';
//     //$vv = $this->ques9();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques8 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
//       $ques10 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','10')->get();
//       if(count($ques10)){
//         $vv .= view('questions.question10')->with('ques10', $ques10)->with('ques8', $ques8)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question10')->with('ques8', $ques8)->render();
//         return $vv;
//       }  
//     }else{
//       $vv .= view('questions.question10')->render();
//       return $vv;
//     }
    
//   }

//   public function ques11(){
//     $vv = $this->ques10();
//      /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques1 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','1')->get();
//       $ques2 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();
//       $ques8 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
//       $ques9 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','9')->get();
//       $ques11 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','11')->get();

//     if(count($ques11)){

//       $value8 = $ques8[0]->meta_value;
//       $value9 = $ques9[0]->meta_value;
//       $value1 = $ques1[0]->meta_value;
//       $value2 = $ques2[0]->meta_value;
//       $x_value_1 = $ques11[0]->meta_value;
//        $x_value_1 = str_replace(",","",$x_value_1);
//       $x_value_2 = $ques11[1]->meta_value;
//        $x_value_2 = str_replace(",","",$x_value_2);
//       $x_value_4 = $ques11[3]->meta_value;
//        $x_value_4 = str_replace(",","",$x_value_4);

//       $survey = banks_regulation::where('options',$value8)->get();
//       $survey = $survey[0][$value1];

//       if($survey == 'b'){
//         $survey = banks_regulation_relation::where('options',$value9)->get();
//         $survey_value = $survey[0]['programe'];
//       }else{
//         $survey_value = $survey;
//       }

//       $x_value = $x_value_2 / $x_value_1 * 100;
//       $y_value = 100 - $survey_value;
//       $x_value = number_format($x_value, 2, '.', '');

//         //dd($x_value_4);


//             if(45 < $x_value_4 && $x_value_4 <= 49){
//                 $prop_value = $x_value_1 * 0.45;
//                 $vv .= view('questions.question11')->with('ques11', $ques11)->with('ques8', $ques8)->with('survey', $survey_value)->with('x_value', $x_value)->with('y_value', $y_value)->with('value2', $value2)->with('z_value', $prop_value)->render();

//             }elseif(60 < $x_value_4 && $x_value_4 <= 64){
//                 $prop_value = $x_value_1 * 0.60;
//                 $vv .= view('questions.question11')->with('ques11', $ques11)->with('ques8', $ques8)->with('survey', $survey_value)->with('x_value', $x_value)->with('y_value', $y_value)->with('value2', $value2)->with('z_value', $prop_value)->render();

//             }elseif(75 < $x_value_4 && $x_value_4 <= 79){
//                 $prop_value = $x_value_1 * 0.75;
//                 $vv .= view('questions.question11')->with('ques11', $ques11)->with('ques8', $ques8)->with('survey', $survey_value)->with('x_value', $x_value)->with('y_value', $y_value)->with('value2', $value2)->with('z_value', $prop_value)->render();

//             }else{
//                 $prop_value = "0";
//                 $vv .= view('questions.question11')->with('ques11', $ques11)->with('ques8', $ques8)->with('survey', $survey_value)->with('x_value', $x_value)->with('y_value', $y_value)->with('value2', $value2)->with('z_value', $prop_value)->render();  
//             }

//       //dd($y_value);
        
//         return $vv;
//       }else{
//         $vv .= view('questions.question11')->with('ques8', $ques8)->render();
//     return $vv;
//       }  
//     }else{
//         $vv .= view('questions.question11')->render();
//     return $vv;
//     }
  
//   }

//   public function ques11_2(){
//     $vv = $this->ques11();
//      /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques8 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
//       $ques11= question_survey::where('user_id',\Auth::user()->id)->where('question_id','11')->get();
//       $ques2 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();

//       if(count($ques11)){
//         $x_value_1 = $ques11[0]->meta_value;
//         $x_value_1 = str_replace(",","",$x_value_1);
//         $x_value_2 = $ques11[1]->meta_value;
//         $x_value_2 = str_replace(",","",$x_value_2);
//         $x_value_5 = $ques11[4]->meta_value;
//         $x_value_5 = str_replace(",","",$x_value_5);

//         $value2 = $ques2[0]->meta_value;
//         $x_value = $x_value_2 / $x_value_1 * 100;
//         $x_value = number_format($x_value, 2, '.', '');

//             if(45 < $x_value_5 && $x_value_5 <= 49){
//                 $prop_value = $x_value_1 * 0.45;
//             }elseif(60 < $x_value_5 && $x_value_5 <= 64){
//                 $prop_value = $x_value_1 * 0.60;
//             }elseif(75 < $x_value_5 && $x_value_5 <= 79){
//                 $prop_value = $x_value_1 * 0.75;
//             }else{
//                 $prop_value = "0";  
//             }

//         $vv .= view('questions.question11_2')->with('ques11_2', $ques11)->with('ques8', $ques8)->with('x_value', $x_value)->with('value2', $value2)->with('z_value', $prop_value)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question11_2')->with('ques8', $ques8)->render();
//         return $vv;
//       } 


//     }else{
//         $vv .= view('questions.question11_2')->render();
//     return $vv;
//     }
    
//   }

//   public function ques11_3(){
//     $vv = $this->ques11_2();
//      /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques8 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
//       $ques11_3 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','11')->get();
//       $ques2 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();

//       if(count($ques11_3)){
//         $value2 = $ques2[0]->meta_value;
//         $x_value_1 = $ques11_3[0]->meta_value;
//         $x_value_1 = str_replace(",","",$x_value_1);
//         $x_value_2 = $ques11_3[1]->meta_value;
//         $x_value_2 = str_replace(",","",$x_value_2);
//         $x_value_3 = $ques11_3[2]->meta_value;
//         $x_value_3 = str_replace(",","",$x_value_3);
            
//             if(45 < $x_value_3 && $x_value_3 <= 49){
//                 $prop_value = $x_value_1 * 0.45;
//             }elseif(60 < $x_value_3 && $x_value_3 <= 64){
//                 $prop_value = $x_value_1 * 0.60;
//             }elseif(75 < $x_value_3 && $x_value_3 <= 79){
//                 $prop_value = $x_value_1 * 0.75;
//             }else{
//                 $prop_value = "0";  
//             }

//         $vv .= view('questions.question11_3')->with('ques11_3', $ques11_3)->with('value2', $value2)->with('ques8', $ques8)->with('z_value', $prop_value)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question11_3')->with('ques8', $ques8)->render();
//         return $vv;
//       }  


//     }else{
//         $vv .= view('questions.question11_3')->render();
//     return $vv;
//     }
    
//   }

//     public function ques13(){
//     $vv = $this->ques11_3();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
    //   $ques13 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','14')->get();
    //   $ques11 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','11')->get();
    //   $ques7 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','7')->get();
    //   $ques8 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
    //   $ques4 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','4')->get();
    //   $ques4 = $ques4[0]->meta_value;
    //   $ques2 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();
    //   $ques2 = $ques2[0]->meta_value;

    //   //dd($ques2);

    //   if($ques8[0]->meta_value == 'any_cause'){
    //     $ques11_data = $ques11[1]->meta_value;
    //   }elseif($ques8[0]->meta_value == 'mistaken_program'){
    //      $ques11_data = $ques11[3]->meta_value;
    //   }else{
    //     $ques11_data = $ques11[2]->meta_value;
    //   }

    //   if(count($ques13)){
    //     $vv .= view('questions.question13')->with('ques13', $ques13)->with('ques4', $ques4)->with('ques7', $ques7)->with('ques11', $ques11_data)->with('ques2', $ques2)->render();
    //     return $vv;
    //   }else{
    //     $vv .= view('questions.question13')->with('ques4', $ques4)->with('ques11', $ques11_data)->with('ques2', $ques2)->render();
    // return $vv;
    //   }  
    // }else{
    //     $vv .= view('questions.question13')->render();
    // return $vv;
    // }
    
//   }
//   public function ques14(){
//     $vv = $this->ques13();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques14 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','15')->get();
//       if(count($ques14)){
//         $vv .= view('questions.question14')->with('ques14', $ques14)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question14')->render();
//         return $vv;
//       }  
//     }else{
//         $vv .= view('questions.question14')->render();
//         return $vv;
//     }
//   }
//   public function ques15(){
//     $vv = $this->ques14();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques15 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','16')->get();
//       if(count($ques15)){
//         $vv .= view('questions.question15')->with('ques15', $ques15)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question15')->render();
//     return $vv;
//       }  
//     }else{
//         $vv .= view('questions.question15')->render();
//     return $vv;
//     }
    
//   }
//   public function ques16(){
//     $vv = $this->ques15();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques16 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','17')->get();
//       if(count($ques16)){
//         $vv .= view('questions.question16')->with('ques16', $ques16)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question16')->render();
//     return $vv;
//       }  
//     }else{
//         $vv .= view('questions.question16')->render();
//     return $vv;
//     }
    
//   }
//   public function ques17(){
//     $vv = $this->ques16();
//     /*conditions to check*/
//     $auth = \Auth::user();
//     if(!empty($auth)){
//       $ques17 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','18')->get();
//       $ques2 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();
//       if(count($ques17)){
//         $vv .= view('questions.question17')->with('ques17', $ques17)->with('ques2', $ques2)->render();
//         return $vv;
//       }else{
//         $vv .= view('questions.question17')->with('ques2', $ques2)->render();
//     return $vv;
//       }  
//     }else{
//         $vv .= view('questions.question17')->with('ques2', $ques2)->render();
//     return $vv;
//     }
    
//   }

//   public function ques18(){
//     $vv = $this->ques17();
//     $vv .= view('questions.question18')->render();
//     return $vv;
//   }


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
    	$v = \Validator::make($request->all(),[
               'que1' => 'required',
               'rent' => 'required_if:que1,==,rental_aprt|min:0',
    	],
    [
        'rent.numeric' => 'Enter value should be a Number and Min value upto 0 only',
    ]);
    	if($v->fails()){
    		return response()->json([
              'status' => 0,
              'errors' => $v->errors()
    		]);
    	}else{
             $result = question_survey::where('question_id','1')
                      // ->orWhere('meta_key','ques1Option')
                      ->where('user_id',\Auth::user()->id)
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

    	$v = \Validator::make($request->all(),[
               'que2' => 'required',
               'property_1'=>'required',
               'property_value'=>'required',
               'monthly_income'=>'required',
               'property_value_2'=>'required',
               'mortgage_balance'=>'required',
               'bank'=>'required',
    	]);

    	if($v->fails()){
    		return response()->json([
          'status' => 0,
          'errors' => $v->errors()
    		]);
    	}else{
        $result = question_survey::where('question_id','2')
                  ->where('user_id',\Auth::user()->id)
                  ->delete();

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
    	$v = \Validator::make($request->all(),[
               'gender' => 'required',
    	]);
      //dd($request);
    	if($v->fails()){
    		return response()->json([
              'status' => 0,
              'errors' => $v->errors()
    		]);
    	}else{
        $result = question_survey::where('question_id','3')
                  ->where('user_id',\Auth::user()->id)
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
    	$v = \Validator::make($request->all(),[
               'net_income' => 'required',
    	]);

    	if($v->fails()){
    		return response()->json([
              'status' => 0,
              'errors' => $v->errors()
    		]);
    	}else{
            $result = question_survey::where('question_id','4')
                      ->where('user_id',\Auth::user()->id)
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
    	$v = \Validator::make($request->all(),[
               'stable_status_fee' => '',
    	]);

    	if($v->fails()){
    		return response()->json([
              'status' => 0,
              'errors' => $v->errors()
    		]);
    	}else{
            $result = question_survey::where('question_id','5')
                      ->where('user_id',\Auth::user()->id)
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
      $v = \Validator::make($request->all(),[
               'bank_name' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','6')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();


                      //dd($request->bank_name);



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
      $v = \Validator::make($request->all(),[
        'other_banks_benifits' => 'required',
         'browser_age' =>'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','7')
                      ->where('user_id',\Auth::user()->id)
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
      $v = \Validator::make($request->all(),[
               'why_mortgage' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','8')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();
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
      $v = \Validator::make($request->all(),[
               'status_of_mortgage' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','9')
                      ->where('user_id',\Auth::user()->id)
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
      $v = \Validator::make($request->all(),[
          'grace' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{

            $result = question_survey::where('question_id','10')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();
            $ques5 = $this->saveAndUpdate('Grace',$request->grace,0,10);

            /*question no.8 value*/
            $ques8 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();

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
      $v = \Validator::make($request->all(),[
          'incoming_cost' => 'required',
          'equity_cost' => 'required',
      ],
    [
        'incoming_cost.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'equity_cost.required' => 'ERROR - Missing Field 2: Equity Cost'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',\Auth::user()->id)
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
                      
            $ques5_0 = $this->saveAndUpdate('property_value',$request->incoming_cost,0,11);
            $ques5_1 = $this->saveAndUpdate('self_funding',$request->equity_cost,0,11);
            $ques5_2 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,0,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',0,11);


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
      $v = \Validator::make($request->all(),[
          'incoming_cost' => 'required',
          'equity_cost' => 'required',
      ],
    [
        'incoming_cost.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'equity_cost.required' => 'ERROR - Missing Field 2: Equity Cost'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
        $result = question_survey::where('question_id','11')
                  ->where('user_id',\Auth::user()->id)
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
    
        $ques5_0 = $this->saveAndUpdate('property_value',$prop_value,0,11);
        $ques5_1 = $this->saveAndUpdate('self_funding',$request->equity_cost,0,11);
        $ques5_2 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,0,11);
        $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);
        $ques5_4 = $this->saveAndUpdate('morg_testing1','0',0,11);

        return response()->json([
          'status' => 1,
          //'htmls' => $this->ques13()    
        ]);  
      }
    }
    /**NO ANSWER CLICKED**/
    public function questionElevenOneThreePost(Request $request)
    {
      $v = \Validator::make($request->all(),[
          'incoming_cost' => 'required',
          'equity_cost' => 'required',
      ],
    [
        'incoming_cost.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'equity_cost.required' => 'ERROR - Missing Field 2: Equity Cost'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();

            $prop_value = $request->incoming_cost;
             $prop_value = str_replace(",","",$prop_value);
            $self_funding = $request->equity_cost;
             $self_funding = str_replace(",","",$self_funding);
            $mortgage_fee = $prop_value - $self_funding;
            $morg_ratio = $mortgage_fee/$prop_value * 100;
                      
            $ques5_0 = $this->saveAndUpdate('property_value',$request->incoming_cost,0,11);
            $ques5_1 = $this->saveAndUpdate('self_funding',$request->equity_cost,0,11);
            $ques5_2 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,0,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',0,11);

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
      $v = \Validator::make($request->all(),[
          'incoming_cost_1' => 'required',
          'required_height' => 'required',
          'property_market_value' => 'required',
      ],
    [
        'incoming_cost_1.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'required_height.required' => 'ERROR - Missing Field 2: Required Height',
         'property_market_value.required' => 'ERROR - Missing Field 3: Property Market Value'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();

            $prop_value = $request->incoming_cost_1;
            $prop_value = str_replace(",","",$prop_value);
            $self_funding = $request->property_market_value;
            $self_funding = str_replace(",","",$self_funding);
            $prop_market_value = $request->required_height;
            $prop_market_value = str_replace(",","",$prop_market_value); 
            $mortgage_fee = $prop_value - $self_funding;
            $morg_ratio = $mortgage_fee/$prop_market_value * 100;


            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_1,0,11);
            $ques5_1 = $this->saveAndUpdate('property_market_value',$request->required_height,0,11);
            $ques5_2 = $this->saveAndUpdate('self_funding',$request->property_market_value,0,11);
            $ques5_3 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,0,11);
            $ques5_4 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);


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
        'incoming_cost_1.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'required_height.required' => 'ERROR - Missing Field 2: Required Height',
         'property_market_value.required' => 'ERROR - Missing Field 3: Property Market Value'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',\Auth::user()->id)
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


            $ques5 = $this->saveAndUpdate('property_value',$prop_value,0,11);
            $ques5_1 = $this->saveAndUpdate('property_market_value',$request->required_height,0,11);
            $ques5_2 = $this->saveAndUpdate('self_funding',$request->property_market_value,0,11);
            $ques5_3 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,0,11);
            $ques5_4 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);

            return response()->json([
              'status' => 1,
             // 'htmls' => $this->ques13()
        ]);  
      }
    }

    /*IF POP UP NO*/
    public function questionElevenTwoThreePost(Request $request)
    {
      $v = \Validator::make($request->all(),[
          'incoming_cost_1' => 'required',
          'required_height' => 'required',
          'property_market_value' => 'required',
      ],
    [
        'incoming_cost_1.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'required_height.required' => 'ERROR - Missing Field 2: Required Height',
         'property_market_value.required' => 'ERROR - Missing Field 3: Property Market Value'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',\Auth::user()->id)
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


            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_1,0,11);
            $ques5_1 = $this->saveAndUpdate('property_market_value',$request->required_height,0,11);
            $ques5_2 = $this->saveAndUpdate('self_funding',$request->property_market_value,0,11);
            $ques5_3 = $this->saveAndUpdate('mortgage_fee',$mortgage_fee,0,11);
            $ques5_4 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);

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
      $v = \Validator::make($request->all(),[
          'incoming_cost_2' => 'required',
          'equity_height' => 'required',
      ],
    [
        'incoming_cost_2.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'equity_height.required' => 'ERROR - Missing Field 2: Equity Height'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();

            $prop_value = $request->incoming_cost_2;
            $prop_value = str_replace(",","",$prop_value);
            $mortgage_fee = $request->equity_height;
            $mortgage_fee = str_replace(",","",$mortgage_fee);
            $morg_ratio = $mortgage_fee/$prop_value * 100;

            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_2,0,11);
            $ques5_1 = $this->saveAndUpdate('mortgage_fee',$request->equity_height,0,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',0,11);
            $ques5_5 = $this->saveAndUpdate('morg_testing2','0',0,11);


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
      $v = \Validator::make($request->all(),[
          'incoming_cost_2' => 'required',
          'equity_height' => 'required',
      ],
    [
        'incoming_cost_2.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'equity_height.required' => 'ERROR - Missing Field 2: Equity Height'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',\Auth::user()->id)
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



            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_2,0,11);
            $ques5_1 = $this->saveAndUpdate('mortgage_fee',$request->equity_height,0,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',0,11);
            $ques5_5 = $this->saveAndUpdate('morg_testing2','0',0,11);

            return response()->json([
              'status' => 1,
              'htmls' => $this->ques13()
        ]);  
      }
    }


    public function questionthirteenThreePost(Request $request)
    {
      $v = \Validator::make($request->all(),[
          'incoming_cost_2' => 'required',
          'equity_height' => 'required',
      ],
    [
        'incoming_cost_2.required' => 'ERROR - Missing Field 1: Incoming Cost',
        'equity_height.required' => 'ERROR - Missing Field 2: Equity Height'
    ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','11')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();

            // $prop_value = $request->incoming_cost_2;
            // $mortgage_fee = $request->equity_height;
            // $morg_ratio = $mortgage_fee/$prop_value * 100;


             $prop_value = $request->incoming_cost_2;
            $prop_value = str_replace(",","",$prop_value);
            $mortgage_fee = $request->equity_height;
            $mortgage_fee = str_replace(",","",$mortgage_fee);
            $morg_ratio = $mortgage_fee/$prop_value * 100;

            $ques5 = $this->saveAndUpdate('property_value',$request->incoming_cost_2,0,11);
            $ques5_1 = $this->saveAndUpdate('mortgage_fee',$request->equity_height,0,11);
            $ques5_3 = $this->saveAndUpdate('morg_ratio',$morg_ratio,0,11);
            $ques5_4 = $this->saveAndUpdate('morg_testing1','0',0,11);
            $ques5_5 = $this->saveAndUpdate('morg_testing2','0',0,11);

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
      $v = \Validator::make($request->all(),[
          'monthly_refund_input' => 'required',
          'lower_mortgage_input' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','14')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();
            $ques7 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','7')->get();

            $lower_mortgage_input = $request->lower_mortgage_input;
            $lower_mortgage_input = str_replace(",","",$lower_mortgage_input);

            $fix = $ques7[1]->meta_value + $lower_mortgage_input;


            $ques11 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','11')->where('meta_key','mortgage_fee')->first();


            
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
      $v = \Validator::make($request->all(),[
          'monthly_refund_input' => 'required',
          'lower_mortgage_input' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','14')
                      ->where('user_id',\Auth::user()->id)
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
      $v = \Validator::make($request->all(),[

          'ques14' => 'required',
          //'investment_amount' => 'required',
          //'repay_another' => 'required',


          // 'redeemed' => 'required',
          //'loan_balance_percentage' => 'required',
          //'monthly_repayments_percentage' => 'required',
          //'investment_amount_1' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            
            $result = question_survey::where('question_id','15')
                      ->where('user_id',\Auth::user()->id)
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
      $v = \Validator::make($request->all(),[
          'other_loan' => 'required',
          //'loan_balance_1' => 'required',
          //'Month_refund' => 'required',

          //'loan_balance_2' => 'required',
          // 'termination_of_the_loan_1' => 'required',
          // 'termination_of_the_loan_2' => 'required',
          //'Monthly_repayments' => 'required',
    
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
             
            $result = question_survey::where('question_id','16')
                      ->where('user_id',\Auth::user()->id)
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
      $v = \Validator::make($request->all(),[
          'additional_loans' => 'required',
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','17')
                      ->where('user_id',\Auth::user()->id)
                      ->delete();

            $ques2 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();

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
      $v = \Validator::make($request->all(),[
    
          'military_service_time_women' => 'required',
          'national_service_time' => 'required',
          'siblings' => 'required',
          'children' => 'required',
          'current_marriage' => 'required',
          
      ]);

      if($v->fails()){
        return response()->json([
              'status' => 0,
              'errors' => $v->errors()
        ]);
      }else{
            $result = question_survey::where('question_id','18')
                      ->where('user_id',\Auth::user()->id)
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
         
        $ques12 = question_survey::where('user_id',\Auth::user()->id)->where('question_id','14')->where('meta_key','saving_calculations')->first();

        $saving_calculations = $ques12->meta_value;

        return response()->json([
          'status' => 1,
          'htmls' => $saving_calculations
        ]);  
      
    }





    



    

/**************************************************************************/
    public function saveAndUpdate($k,$value,$parent,$no)
    {
        $survey = new question_survey(); 
      $survey->user_id = \Auth::user()->id;
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
      $message->to('online.mashkanta@gmail.com');
      $message->subject($email_subject);
  });

  Session::flash('message', 'Email Sent Successfully!!'); 
  return back()->with('status', 'Email Sent Successfully');
}




/**************************Delete User entries****************************/

public function deleteforuser(){
  $result = question_survey::where('user_id',\Auth::user()->id)->delete();
  return redirect()->route('get_flow');
}






}



