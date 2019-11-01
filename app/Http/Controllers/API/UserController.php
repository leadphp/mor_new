<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
   
    class UserController extends Controller    {
            public $successStatus = 200;
            /** 
                 * login api 
                 * 
                 * @return \Illuminate\Http\Response 
                 */ 
            public function login() { 
                if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
                    $user = Auth::user(); 
                    $success['token'] =  $user->createToken('MyApp')-> accessToken; 
                    return response()->json(['success' => $success], $this-> successStatus); 
                } 
                else{ 
                    return response()->json(['error'=>'Unauthorised'], 401); 
                } 
            }
        /** 
             * Register api 
             * 
             * @return \Illuminate\Http\Response 
             */ 
            
            public function register(Request $request)  {

                $validator = Validator::make($request->all(), [ 
                    'name' => 'required', 
                    'email' => 'required|email', 
                    'password' => 'required', 
                    'c_password' => 'required|same:password', 
                ]);
                if ($validator->fails()) { 
                            return response()->json(['error'=>$validator->errors()], 401);            
                        }
                $input = $request->all(); 
                        $input['password'] = bcrypt($input['password']); 
                        $user = User::create($input); 
                        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
                        $success['name'] =  $user->name;

                return response()->json(['success'=>$success], $this-> successStatus); 
            }
            /** 
             * details api 
             * 
             * @return \Illuminate\Http\Response 
             */ 
            public function details() { 
                return response()->json(['success' => $user], $this-> successStatus); 
            } 

            public function getfinalandtotalmr(Request $request) {
                $validator = Validator::make($request->all(), [ 
                     'num' => 'required', 
                   ]);
                if($request->num=='') {
                    return response()->json(['error'=>$validator->errors()], 401);            
                } else {
                    $n = $request->num;
                    switch ($n) {
                        case '1': // case 1 for returning monthly return for Funding Mortgage Tree
                      
                      $validator = Validator::make($request->all(), [ 
                      	'user_id'=>'required',
                      	'bank_name'=>'required',
                      	'type'=>'required',
                      	'funding_type'=>'required',
                      	'years'=>'required',
                        'funding_mortgage' => 'required', 
                        'enslavement_mortgage' => 'required', 
                        'interest_prime_funding' => 'required', 
                        'interest_linked_funding' => 'required', 
                        'interest_prime_enslavement' => 'required', 
                        'interest_linked_enslavement' => 'required', 
                      ]);

                      $term_prime  = 30*12;
                      $term_linked = 10*12;

                      
                        /* Funding mortgage Starts*/

                      $start_table_funding_mortgage = array (                    // start table for funding table
                        'Prime'=>($request->funding_mortgage)/3,
                        'Linked'=>2*($request->funding_mortgage)/3,
                      ); 


                      $start_table_funding_interest = array (               // start table interest for funding table
                        'prime'=> $request->interest_prime_funding/1200,
                        'linked'=> $request->interest_linked_funding/1200,
                      );

                      $mr_prime_funding  = $start_table_funding_interest['prime'] * (-$start_table_funding_mortgage['Prime']) * pow((1 + $start_table_funding_interest['prime']), $term_prime) / (1 - pow((1 +  $start_table_funding_interest['prime']), $term_prime));

                      $mr_linked_funding  = $start_table_funding_interest['linked'] * (-$start_table_funding_mortgage['Linked']) * pow((1 + $start_table_funding_interest['linked']), $term_linked) / (1 - pow((1 + $start_table_funding_interest['linked']), $term_linked)); // funding

                        /* Funding mortgage Ends*/


                        /* Enslavement Mortgage Starts*/

                      $start_table_enslavement_mortgage = array (               // start table for enslavement table
                        'Prime'=>($request->enslavement_mortgage)/3,
                        'Linked'=>2*($request->enslavement_mortgage)/3,
                      ); 
                      $start_table_enslavement_interest = array (               // start table interest for enslavement table
                        'prime'=> $request->interest_prime_enslavement/1200,
                        'linked'=> $request->interest_linked_enslavement/1200,
                      );

                      $mr_prime_enslavement  = $start_table_enslavement_interest['prime'] * (-$start_table_enslavement_mortgage['Prime']) * pow((1 + $start_table_enslavement_interest['prime']), $term_prime) / (1 - pow((1 + $start_table_enslavement_interest['prime']), $term_prime)); // enslavement
                      
                      $mr_linked_enslavement = $start_table_enslavement_interest['linked'] * (-$start_table_enslavement_mortgage['Linked']) * pow((1 + $start_table_enslavement_interest['linked']), $term_linked) / (1 - pow((1 + $start_table_enslavement_interest['linked']), $term_linked)); //enslavement
                      
                    

                        $total_mr_funding = $mr_prime_funding+$mr_linked_funding; // total MR funding
                        $total_mr_enslavement = $mr_prime_enslavement+$mr_linked_enslavement; // Total MR enslavement
                        $final_mr = $total_mr_funding+$total_mr_enslavement; // final MR

                        $data =   array (
                                      'mr_prime_funding'=> $mr_prime_funding ,
                                      'mr_linked_funding'=> $mr_linked_funding ,
                                      'total_mr_funding'=> $total_mr_funding,
                                      'final_mr_funding'=> $final_mr,
                                      'mr_prime_enslavement'=> $mr_prime_enslavement ,
                                      'mr_linked_enslavement'=> $mr_linked_enslavement,
                                      'total_mr_enslavement'=> $total_mr_enslavement,
                                      'final_mr_enslavement'=> $final_mr,
                                  );  // final response array

                        $response = array (
                          'status'=>true,
                          'MessageWhatHappen'=>'Success',
                          'data'=>$data
                        );



                    return response()->json(['success'=>$response], $this-> successStatus);

                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }    
            }



        //   public function sum(Request $request){
        //     $v = Validator::make($request->all(), [
        //       'val1'=> 'required',
        //       'val2'=> 'required',
        //       'val3'=> 'required',
        //       'val4'=> 'required',
        //     ]);


        //     $array1 = array(
        //       'key1'=>($request->val1),
        //       'key2'=>($request->val2),
        //     );

        //     $array2 = array(
        //       'key3'=>($request->val3),
        //       'key4'=>($request->val4),
        //     );

        //     $sum = $array1['key1']+$array1['key2']+$array2['key3']+$array2['key4'];
        //     $data=[
        //       'sum'=>$sum,
        //     ];

        //     $response = array(
        //       'data'=>$data,
        //       'status'=>true,
        //       'msg'=>'done'
        //     );

        //     // return response()->json(['success'=>$response], $this->successStatus);

        //     return response()->json(['success'=>$response], $this-> successStatus);
        //   }






        // public function report_one_page(){

          
          

        // }



}