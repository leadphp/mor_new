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
use App\report_two_steps;

use Excel;
use Mail;
use Session;
use App\Http\Controllers\API\ReportController;


class Report2Controller extends Controller    {
	public $successStatus = 200;
  /** 
       * login api 
       * 
       * @return \Illuminate\Http\Response 
       */ 
  
  public function step1(Request $request){

  	$report1 = new ReportController();

  	$v = Validator::make($request->all(),[
  		'case' => 'required',
  		'funding_morg' => 'required',
  		'enslavement_morg' => 'required',
  		'g_intrest' => 'required',
  		'f_intrest' => 'required',
  	]);
  	// $a = $report1->bestfittree();
  	$case = $request->case;
  	$funding_morg = $request->funding_morg;
  	$enslavement_morg = $request->enslavement_morg;

  	if($case == '') {
  		return response()->json(['error'->Validator->error()]);
  	} else {

  		switch ($case) {
  			case '1':
  			
  			$v = Validator::make($request->all(), [
  				'head1_funding' => 'required',
  				'loan_type1_funding' => 'required',
  				'part1_funding' => 'required',
  				'morg1_funding' => 'required',
  				'year1_funding' => 'required',
  				'intrest1_funding' => 'required',

  				'head2_funding' => 'required',
  				'loan_type2_funding' => 'required',
  				'part2_funding' => 'required',
  				'morg2_funding' => 'required',
  				'year2_funding' => 'required',
  				'intrest2_funding' => 'required',

  				'head3_funding' => 'required',
  				'loan_type3_funding' => 'required',
  				'part3_funding' => 'required',
  				'morg3_funding' => 'required',
  				'year3_funding' => 'required',
  				'intrest3_funding' => 'required',


  				'head1_enslavement' => 'required',
  				'loan_type1_enslavement' => 'required',
  				'part1_enslavement' => 'required',
  				'morg1_enslavement' => 'required',
  				'year1_enslavement' => 'required',
  				'intrest1_enslavement' => 'required',

  				'head2_enslavement' => 'required',
  				'loan_type2_enslavement' => 'required',
  				'part2_enslavement' => 'required',
  				'morg2_enslavement' => 'required',
  				'year2_enslavement' => 'required',
  				'intrest2_enslavement' => 'required',

  				'head3_enslavement' => 'required',
  				'loan_type3_enslavement' => 'required',
  				'part3_enslavement' => 'required',
  				'morg3_enslavement' => 'required',
  				'year3_enslavement' => 'required',
  				'intrest3_enslavement' => 'required',


  				'year_h' => 'required',
  				'intrest_h' => 'required',
  			]);

  			/*Funding Tree Data*/

  			$funding_tree = array(
  				'head1' => $request->head1_funding,
  				'loan_type1' => $request->loan_type1_funding,
  				'part1' => $request->part1_funding,
  				'morg1' => $request->morg1_funding,
  				'year1' => $request->year1_funding,
  				'intrest1' => $request->intrest1_funding,

  				'head2' => $request->head2_funding,
  				'loan_type2' => $request->loan_type2_funding,
  				'part2' => $request->part2_funding,
  				'morg2' => $request->morg2_funding,
  				'year2' => $request->year2_funding,
  				'intrest2' => $request->intrest2_funding,

  				'head3' => $request->head3_funding,
  				'loan_type3' => $request->loan_type3_funding,
  				'part3' => $request->part3_funding,
  				'morg3' => $request->morg3_funding,
  				'year3' => $request->year3_funding,
  				'intrest3' => $request->intrest3_funding,
  			);
  			/*Funding Tree Data Ends Here*/


  			/*Enslavement Tree Data*/

  			$enslavement_tree = array(
  				'head1' => $request->head1_enslavement,
  				'loan_type1' => $request->loan_type1_enslavement,
  				'part1' => $request->part1_enslavement,
  				'morg1' => $request->morg1_enslavement,
  				'year1' => $request->year1_enslavement,
  				'intrest1' => $request->intrest1_enslavement,

  				'head2' => $request->head2_enslavement,
  				'loan_type2' => $request->loan_type2_enslavement,
  				'part2' => $request->part2_enslavement,
  				'morg2' => $request->morg2_enslavement,
  				'year2' => $request->year2_enslavement,
  				'intrest2' => $request->intrest2_enslavement,

  				'head3' => $request->head3_enslavement,
  				'loan_type3' => $request->loan_type3_enslavement,
  				'part3' => $request->part3_enslavement,
  				'morg3' => $request->morg3_enslavement,
  				'year3' => $request->year3_enslavement,
  				'intrest3' => $request->intrest3_enslavement,
  			);

  			// /*Enslavement Tree Data Ends Here*/

  			// /*Funding Tree Calculations*/

  			// /*First row data*/

  			// $head1_funding = $funding_tree['head1'];
  			// $loan_type1_funding = $funding_tree['loan_type1'];
  			// $part1_funding = $funding_tree['part1'];
  			// $morg1_funding = $funding_tree['morg1'];
  			// $year1_funding = $funding_tree['year1'];
  			// $intrest1_funding = $funding_tree['intrest1'];
  			// $pmt1_funding = $report1->pmt_calculation($morg1_funding, $year1_funding, $intrest1_funding);

  			// /*First row data ends*/


  			// /*Second row data*/

  			// $head2_funding = $funding_tree['head2'];
  			// $loan_type2_funding = $funding_tree['loan_type2'];
  			// $part2_funding = $funding_tree['part2'];
  			// $morg2_funding = $funding_tree['morg2'];
  			// $year2_funding = $funding_tree['year2'];
  			// $intrest2_funding = $funding_tree['intrest2'];
  			// $pmt2_funding = $report1->pmt_calculation($morg2_funding, $year2_funding, $intrest2_funding);

  			// /*Second row data ends here*/

  			// /*Third row data*/

  			// $head3_funding = $funding_tree['head3'];
  			// $loan_type3_funding = $funding_tree['loan_type3'];
  			// $part3_funding = $funding_tree['part3'];
  			// $morg3_funding = $funding_tree['morg3'];
  			// $year3_funding = $funding_tree['year3'];
  			// $intrest3_funding = $funding_tree['intrest3'];
  			// $pmt3_funding = $report1->pmt_calculation($morg3_funding, $year3_funding, $intrest3_funding);

  			// /*Third row data ends here*/

  		 //   	$total_pmt_funding = $pmt1_funding + $pmt2_funding + $pmt3_funding;  //Total MR


  		 //   	/*Funding Tree Calculations Ends Here*/

  		 //   	/*Enslavement Tree Calculations*/

  		 //   	/*First row data*/

  		 //   	$head1_enslavement = $enslavement_tree['head1'];
  		 //   	$loan_type1_enslavement = $enslavement_tree['loan_type1'];
  		 //   	$part1_enslavement = $enslavement_tree['part1'];
  		 //   	$morg1_enslavement = $enslavement_tree['morg1'];
  		 //   	$year1_enslavement = $enslavement_tree['year1'];
  		 //   	$intrest1_enslavement = $enslavement_tree['intrest1'];
  		 //   	$pmt1_enslavement = $report1->pmt_calculation($morg1_enslavement, $year1_enslavement, $intrest1_enslavement);

  		 //   	/*First row data ends*/


  		 //   	/*Second row data*/

  		 //   	$head2_enslavement = $enslavement_tree['head2'];
  		 //   	$loan_type2_enslavement = $enslavement_tree['loan_type2'];
  		 //   	$part2_enslavement = $enslavement_tree['part2'];
  		 //   	$morg2_enslavement = $enslavement_tree['morg2'];
  		 //   	$year2_enslavement = $enslavement_tree['year2'];
  		 //   	$intrest2_enslavement = $enslavement_tree['intrest2'];
  		 //   	$pmt2_enslavement = $report1->pmt_calculation($morg2_enslavement, $year2_enslavement, $intrest2_enslavement);

  		 //   	/*Second row data ends here*/


  		 //   	/*Third row data*/

  		 //   	$head3_enslavement = $enslavement_tree['head3'];
  		 //   	$loan_type3_enslavement = $enslavement_tree['loan_type3'];
  		 //   	$part3_enslavement = $enslavement_tree['part3'];
  		 //   	$morg3_enslavement = $enslavement_tree['morg3'];
  		 //   	$year3_enslavement = $enslavement_tree['year3'];
  		 //   	$intrest3_enslavement = $enslavement_tree['intrest3'];
  		 //   	$pmt3_enslavement = $report1->pmt_calculation($morg3_enslavement, $year3_enslavement, $intrest3_enslavement);

  		 //   	/*Third row data ends here*/

  			// $total_pmt_enslavement = $pmt1_enslavement + $pmt2_enslavement + $pmt3_enslavement;  //Total MR
  			
  			// /*Enslavement Tree Calculations Ends Here*/
  			


  			// /*Calculating F-Euro & G-Dollar*/

  			// $checkbox_g = AdminCheckboxes::where('meta_key', 'Algo-Control-G-Dollar')->get();

  			// $checkbox_f = AdminCheckboxes::where('meta_key', 'Algo-Control-F-Euro')->get();

  			// if($request->enslavement_morg != 0){

  			// 	if($checkbox_g[0]->meta_value	== 1){

  			// 		/*For Funding Tree*/

  			// 		$part_g_funding = 0.1;
  			// 		$morg_g_funding = $part_g_funding * $funding_morg;
  			// 		$intrest_g_funding = $request->g_intrest;
  			// 		$year_g_funding = 30;
  			// 		$pmt_g_funding = $report1->pmt_calculation($morg_g_funding, $year_g_funding, $intrest_g_funding);

  			// 		$total_pmt_funding = $total_pmt_funding + $pmt_g_funding;


  			// 		/*For Funding Tree Ends Here*/

  			// 		/*For Enslavement Tree*/

  			// 		$part_g_enslavement = 0.1;
  			// 		$morg_g_enslavement = $part_g_enslavement * $enslavement_morg;
  			// 		$intrest_g_enslavement = $request->g_intrest;
  			// 		$year_g_enslavement = 30;
  			// 		$pmt_g_enslavement = $report1->pmt_calculation($morg_g_enslavement, $year_g_enslavement, $intrest_g_enslavement);

  			// 		$total_pmt_enslavement = $total_pmt_enslavement + $pmt_g_enslavement;

  			// 		/*For Enslavement Tree Ends Here*/

  			// 		$g_array = array(
  						
  			// 			'part_g_funding' => $part_g_funding,
  			// 			'morg_g_funding' => $morg_g_funding,
  			// 			'year_g_funding' => $year_g_funding,
  			// 			'pmt_g_funding' => $pmt_g_funding,
  			// 			'total_pmt_funding' => $total_pmt_funding,
  						
  			// 			'part_g_enslavement' => $part_g_enslavement,
  			// 			'morg_g_enslavement' => $morg_g_enslavement,
  			// 			'year_g_enslavement' => $year_g_enslavement,
  			// 			'pmt_g_enslavement' => $pmt_g_enslavement,
  			// 			'total_pmt_enslavement' => $total_pmt_enslavement,
  			// 		);


  			// 	} else{
  			// 		print_r('nog');
  			// 	}

  			// 	if($checkbox_f[0]->meta_value	== 1){

  			// 		/*For Funding Tree*/

  			// 		$part_f_funding = 0.1;
  			// 		$morg_f_funding = $part_f_funding * $funding_morg;
  			// 		$intrest_f_funding = $request->f_intrest;
  			// 		$year_f_funding = 30;
  			// 		$pmt_f_funding = $report1->pmt_calculation($morg_f_funding, $year_f_funding, $intrest_f_funding);

  			// 		$total_pmt_funding = $total_pmt_funding + $pmt_f_funding;


  			// 		/*For Funding Tree Ends Here*/

  			// 		/*For Enslavement Tree*/

  			// 		$part_f_enslavement = 0.1;
  			// 		$morg_f_enslavement = $part_f_enslavement * $enslavement_morg;
  			// 		$intrest_f_enslavement = $request->f_intrest;
  			// 		$year_f_enslavement = 30;
  			// 		$pmt_f_enslavement = $report1->pmt_calculation($morg_f_enslavement, $year_f_enslavement, $intrest_f_enslavement);

  			// 		$total_pmt_enslavement = $total_pmt_enslavement + $pmt_f_enslavement;

  			// 		/*For Enslavement Tree Ends Here*/

  			// 		$f_array = array(
  						
  			// 			'part_f_funding' => $part_f_funding,
  			// 			'morg_f_funding' => $morg_f_funding,
  			// 			'year_f_funding' => $year_f_funding,
  			// 			'pmt_f_funding' => $pmt_f_funding,
  			// 			'total_pmt_funding' => $total_pmt_funding,
  						
  			// 			'part_f_enslavement' => $part_f_enslavement,
  			// 			'morg_f_enslavement' => $morg_f_enslavement,
  			// 			'year_f_enslavement' => $year_f_enslavement,
  			// 			'pmt_f_enslavement' => $pmt_f_enslavement,
  			// 			'total_pmt_enslavement' => $total_pmt_enslavement,
  			// 		);


  			// 	} else{
  			// 		print_r("nof");
  			// 	}
  			// } else {

  			// 	/*For Funding Tree*/

  			// 	if($checkbox_g[0]->meta_value	== 1){
  			// 		$part_g_funding = 0.1;
  			// 		$morg_g_funding = $part_g_funding * $funding_morg;
  			// 		$intrest_g_funding = $request->g_intrest;
  			// 		$year_g_funding = 30;
  			// 		$pmt_g_funding = $report1->pmt_calculation($morg_g_funding, $year_g_funding, $intrest_g_funding);

  			// 		$total_pmt_funding = $total_pmt_funding + $pmt_g_funding;

  			// 		$g_array = array(
  						
  			// 			'part_g_funding' => $part_g_funding,
  			// 			'morg_g_funding' => $morg_g_funding,
  			// 			'year_g_funding' => $year_g_funding,
  			// 			'pmt_g_funding' => $pmt_g_funding,
  			// 			'total_pmt_funding' => $total_pmt_funding,
  					
  			// 		);

  			// 	} else{
  			// 		print_r('nog');
  			// 	}

  			// 	if($checkbox_f[1]->meta_value	== 1){
  			// 		$part_f_funding = 0.1;
  			// 		$morg_f_funding = $part_g_funding * $funding_morg;
  			// 		$intrest_f_funding = $request->f_intrest;
  			// 		$year_f_funding = 30;
  			// 		$pmt_f_funding = $report1->pmt_calculation($morg_f_funding, $year_f_funding, $intrest_f_funding);

  			// 		$total_pmt_funding = $total_pmt_funding + $pmt_f_funding;

  			// 		$f_array = array(
  						  						 						
  			// 			'part_g_enslavement' => $part_g_enslavement,
  			// 			'morg_g_enslavement' => $morg_g_enslavement,
  			// 			'year_g_enslavement' => $year_g_enslavement,
  			// 			'pmt_g_enslavement' => $pmt_g_enslavement,
  			// 			'total_pmt_enslavement' => $total_pmt_enslavement,
  			// 		);

  			// 	} else{
  			// 		print_r("nof");
  			// 	}

  			// 	/*For Funding Tree Ends Here*/
  			// }



  			/*Calculating F-Euro & G-Dollar Ends Here*/

  			/*Step 3 Code Starts Here*/

  			$eligiblity_score = question_survey::where('user_id', 28)->where('question_id', 18)->where('meta_key', 'elegibility_score')->get();

			$eligiblity_score = $eligiblity_score[0]->meta_value;   //Q16 eligibility score

			$eligibility_ratio = $eligiblity_score/$funding_morg;  

			$eligibility = true;

			if($eligibility == true){
				$part_h = $eligibility_ratio;

				if($part1_funding == 'B'){
					$morg_h = $funding_morg - $funding_tree['morg1'];
					$funding_tree['morg1'] = $funding_tree['morg1'] - $morg_h;

					if($funding_tree['morg1'] <= 0){
						if($part2_funding == 'D'){
							$morg_h = $morg_h - $funding_tree['morg2'];
					        $funding_tree['morg2'] = $funding_tree['morg2'] - $morg_h;
					        if($funding_tree['morg2'] <= 0){
								$morg_h = $morg_h - $funding_tree['morg3'];
								$funding_tree['morg3'] = $funding_tree['morg3'] - $morg_h;
							}
						} else{
							$morg_h = $morg_h - $funding_tree['morg3'];
					        $funding_tree['morg3'] = $funding_tree['morg3'] - $morg_h;
					        
						}
					}
				} elseif ($part2_funding == 'B') {
					$morg_h = $funding_morg - $funding_tree['morg2'];
					$funding_tree['morg2'] = $funding_tree['morg2'] - $morg_h;

					if($funding_tree['morg2'] <= 0){
						if($part1_funding == 'D'){
							$morg_h = $morg_h - $funding_tree['morg1'];
					        $funding_tree['morg1'] = $funding_tree['morg1'] - $morg_h;
					        if($funding_tree['morg1'] <= 0){
								$morg_h = $morg_h - $funding_tree['morg3'];
								$funding_tree['morg3'] = $funding_tree['morg3'] - $morg_h;
							}
						} else{
							$morg_h = $morg_h - $funding_tree['morg3'];
					        $funding_tree['morg3'] = $funding_tree['morg3'] - $morg_h;
					        
						}
					}
					
				} else{
					$morg_h = $funding_morg - $funding_tree['morg3'];
					$funding_tree['morg3'] = $funding_tree['morg3'] - $morg_h;

					if($funding_tree['morg3'] <= 0){
						if($part1_funding == 'D'){
							$morg_h = $morg_h - $funding_tree['morg1'];
					        $funding_tree['morg1'] = $funding_tree['morg1'] - $morg_h;
					        if($funding_tree['morg1'] <= 0){
								$morg_h = $morg_h - $funding_tree['morg3'];
								$funding_tree['morg3'] = $funding_tree['morg3'] - $morg_h;
							}
						} else{
							$morg_h = $morg_h - $funding_tree['morg3'];
					        $funding_tree['morg3'] = $funding_tree['morg3'] - $morg_h;
					        
						}
					}

				}

			

				$pmt_h = $report1->pmt_calculation($morg_h, $request->year_h, $request->intrest_h);

				$total_pmt_funding = $total_pmt_funding + $pmt_h; //total PMT in step 3

					 $final_mr = $total_pmt_funding + $total_pmt_enslavement;  //Final MR
			}


			


			break;

			case '2':

			$v = Validator::make($request->all(), [

				'head1_funding' => 'required',
				'loan_type1_funding' => 'required',
				'part1_funding' => 'required',
				'morg1_funding' => 'required',
				'year1_funding' => 'required',
				'intrest1_funding' => 'required',

				'head2_funding' => 'required',
				'loan_type2_funding' => 'required',
				'part2_funding' => 'required',
				'morg2_funding' => 'required',
				'year2_funding' => 'required',
				'intrest2_funding' => 'required',


				'head1_enslavement' => 'required',
				'loan_type1_enslavement' => 'required',
				'part1_enslavement' => 'required',
				'morg1_enslavement' => 'required',
				'year1_enslavement' => 'required',
				'intrest1_enslavement' => 'required',

				'head2_enslavement' => 'required',
				'loan_type2_enslavement' => 'required',
				'part2_enslavement' => 'required',
				'morg2_enslavement' => 'required',
				'year2_enslavement' => 'required',
				'intrest2_enslavement' => 'required',


				'year_h' => 'required',
				'intrest_h' => 'required',

				/*Values for Step4*/

				'bank_type' => 'required',
				'fund_type' => 'required',
				'val_year' => 'required',
				'sensitive_prime' => 'required',


				/*Values finishes for Step4*/

			]);

			/*Funding Tree Data*/

			$funding_tree = array(
				'head1' => $request->head1_funding,
				'loan_type1' => $request->loan_type1_funding,
				'part1' => $request->part1_funding,
				'morg1' => $request->morg1_funding,
				'year1' => $request->year1_funding,
				'intrest1' => $request->intrest1_funding,

				'head2' => $request->head2_funding,
				'loan_type2' => $request->loan_type2_funding,
				'part2' => $request->part2_funding,
				'morg2' => $request->morg2_funding,
				'year2' => $request->year2_funding,
				'intrest2' => $request->intrest2_funding,
			);
			/*Funding Tree Data Ends Here*/


			/*Enslavement Tree Data*/

			$enslavement_tree = array(
				'head1' => $request->head1_enslavement,
				'loan_type1' => $request->loan_type1_enslavement,
				'part1' => $request->part1_enslavement,
				'morg1' => $request->morg1_enslavement,
				'year1' => $request->year1_enslavement,
				'intrest1' => $request->intrest1_enslavement,

				'head2' => $request->head2_enslavement,
				'loan_type2' => $request->loan_type2_enslavement,
				'part2' => $request->part2_enslavement,
				'morg2' => $request->morg2_enslavement,
				'year2' => $request->year2_enslavement,
				'intrest2' => $request->intrest2_enslavement,
			);

			/*Enslavement Tree Data Ends Here*/



			/*Funding Tree Calculations*/

			/*First row data*/

			$head1_funding = $funding_tree['head1'];
			$loan_type1_funding = $funding_tree['loan_type1'];
			$part1_funding = $funding_tree['part1'];
			$morg1_funding = $funding_tree['morg1'];
			$year1_funding = $funding_tree['year1'];
			$intrest1_funding = $funding_tree['intrest1'];
			$pmt1_funding = $report1->pmt_calculation($morg1_funding, $year1_funding, $intrest1_funding);

			/*First row data ends*/


			/*Second row data*/

			$head2_funding = $funding_tree['head2'];
			$loan_type2_funding = $funding_tree['loan_type2'];
			$part2_funding = $funding_tree['part2'];
			$morg2_funding = $funding_tree['morg2'];
			$year2_funding = $funding_tree['year2'];
			$intrest2_funding = $funding_tree['intrest2'];
			$pmt2_funding = $report1->pmt_calculation($morg2_funding, $year2_funding, $intrest2_funding);

			/*Second row data ends here*/

  		   	$total_pmt_funding = $pmt1_funding + $pmt2_funding;  //Total MR


  		   	/*Funding Tree Calculations Ends Here*/

  		   	/*Enslavement Tree Calculations*/

  		   	/*First row data*/

  		   	$head1_enslavement = $enslavement_tree['head1'];
  		   	$loan_type1_enslavement = $enslavement_tree['loan_type1'];
  		   	$part1_enslavement = $enslavement_tree['part1'];
  		   	$morg1_enslavement = $enslavement_tree['morg1'];
  		   	$year1_enslavement = $enslavement_tree['year1'];
  		   	$intrest1_enslavement = $enslavement_tree['intrest1'];
  		   	$pmt1_enslavement = $report1->pmt_calculation($morg1_enslavement, $year1_enslavement, $intrest1_enslavement);

  		   	/*First row data ends*/


  		   	/*Second row data*/
  		   	$head2_enslavement = $enslavement_tree['head2'];
  		   	$loan_type2_enslavement = $enslavement_tree['loan_type2'];
  		   	$part2_enslavement = $enslavement_tree['part2'];
  		   	$morg2_enslavement = $enslavement_tree['morg2'];
  		   	$year2_enslavement = $enslavement_tree['year2'];
  		   	$intrest2_enslavement = $enslavement_tree['intrest2'];
  		   	$pmt2_enslavement = $report1->pmt_calculation($morg2_enslavement, $year2_enslavement, $intrest2_enslavement);
  		   	/*Second row data ends here*/

  			$total_pmt_enslavement = $pmt1_enslavement + $pmt2_enslavement;  //Total MR
  			
  			/*Enslavement Tree Calculations Ends Here*/
  			
  			

  			/*Calculating F-Euro & G-Dollar*/

  			$checkbox_g = AdminCheckboxes::where('meta_key', 'Algo-Control-G-Dollar')->get();

  			$checkbox_f = AdminCheckboxes::where('meta_key', 'Algo-Control-F-Euro')->get();

  			if($request->enslavement_morg != 0){

  				if($checkbox_g[0]->meta_value	== 1){

  					/*For Funding Tree*/

  					$part_g_funding = 0.1;
  					$morg_g_funding = $part_g_funding * $funding_morg;
  					$intrest_g_funding = $request->g_intrest;
  					$year_g_funding = 30;
  					$pmt_g_funding = $report1->pmt_calculation($morg_g_funding, $year_g_funding, $intrest_g_funding);

  					$total_pmt_funding = $total_pmt_funding + $pmt_g_funding;


  					/*For Funding Tree Ends Here*/

  					/*For Enslavement Tree*/

  					$part_g_enslavement = 0.1;
  					$morg_g_enslavement = $part_g_enslavement * $enslavement_morg;
  					$intrest_g_enslavement = $request->g_intrest;
  					$year_g_enslavement = 30;
  					$pmt_g_enslavement = $report1->pmt_calculation($morg_g_enslavement, $year_g_enslavement, $intrest_g_enslavement);

  					$total_pmt_enslavement = $total_pmt_enslavement + $pmt_g_enslavement;

  					$g_array = array(
  						
  						'part_g_funding' => $part_g_funding,
  						'morg_g_funding' => $morg_g_funding,
  						'year_g_funding' => $year_g_funding,
  						'pmt_g_funding' => $pmt_g_funding,
  						'total_pmt_funding' => $total_pmt_funding,
  						
  						'part_g_enslavement' => $part_g_enslavement,
  						'morg_g_enslavement' => $morg_g_enslavement,
  						'year_g_enslavement' => $year_g_enslavement,
  						'pmt_g_enslavement' => $pmt_g_enslavement,
  						'total_pmt_enslavement' => $total_pmt_enslavement,
  					);

  					/*For Enslavement Tree Ends Here*/


  				} else{
  					print_r('nog');
  				}

  				if($checkbox_f[0]->meta_value	== 1){

  					/*For Funding Tree*/

  					$part_f_funding = 0.1;
  					$morg_f_funding = $part_f_funding * $funding_morg;
  					$intrest_f_funding = $request->f_intrest;
  					$year_f_funding = 30;
  					$pmt_f_funding = $report1->pmt_calculation($morg_f_funding, $year_f_funding, $intrest_f_funding);

  					$total_pmt_funding = $total_pmt_funding + $pmt_f_funding;


  					/*For Funding Tree Ends Here*/

  					/*For Enslavement Tree*/

  					$part_f_enslavement = 0.1;
  					$morg_f_enslavement = $part_f_enslavement * $enslavement_morg;
  					$intrest_f_enslavement = $request->f_intrest;
  					$year_f_enslavement = 30;
  					$pmt_f_enslavement = $report1->pmt_calculation($morg_f_enslavement, $year_f_enslavement, $intrest_f_enslavement);

  					$total_pmt_enslavement = $total_pmt_enslavement + $pmt_f_enslavement;

  					/*For Enslavement Tree Ends Here*/

  					$f_array = array(
  						
  						'part_f_funding' => $part_f_funding,
  						'morg_f_funding' => $morg_f_funding,
  						'year_f_funding' => $year_f_funding,
  						'pmt_f_funding' => $pmt_f_funding,
  						'total_pmt_funding' => $total_pmt_funding,
  						
  						'part_f_enslavement' => $part_f_enslavement,
  						'morg_f_enslavement' => $morg_f_enslavement,
  						'year_f_enslavement' => $year_f_enslavement,
  						'pmt_f_enslavement' => $pmt_f_enslavement,
  						'total_pmt_enslavement' => $total_pmt_enslavement,
  					);


  				} else{
  					print_r("nof");
  				}
  			} else{

  				/*For Funding Tree*/
  				if($checkbox_g[0]->meta_value	== 1){
  					$part_g_funding = 0.1;
  					$morg_g_funding = $part_g_funding * $funding_morg;
  					$intrest_g_funding = $request->g_intrest;
  					$year_g_funding = 30;
  					$pmt_g_funding = $report1->pmt_calculation($morg_g_funding, $year_g_funding, $intrest_g_funding);

  					$total_pmt_funding = $total_pmt_funding + $pmt_g_funding;

  					$g_array = array(
  						
  						'part_g_funding' => $part_g_funding,
  						'morg_g_funding' => $morg_g_funding,
  						'year_g_funding' => $year_g_funding,
  						'pmt_g_funding' => $pmt_g_funding,
  						'total_pmt_funding' => $total_pmt_funding,
  						
  					);

  				} else{
  					print_r('nog');
  				}

  				if($checkbox_f[1]->meta_value	== 1){
  					$part_f_funding = 0.1;
  					$morg_f_funding = $part_g_funding * $funding_morg;
  					$intrest_f_funding = $request->f_intrest;
  					$year_f_funding = 30;
  					$pmt_f_funding = $report1->pmt_calculation($morg_f_funding, $year_f_funding, $intrest_f_funding);

  					$total_pmt_funding = $total_pmt_funding + $pmt_f_funding;

  					$f_array = array(
  						
  						'part_f_funding' => $part_f_funding,
  						'morg_f_funding' => $morg_f_funding,
  						'year_f_funding' => $year_f_funding,
  						'pmt_f_funding' => $pmt_f_funding,
  						'total_pmt_funding' => $total_pmt_funding,
  					
  					);


  				} else{
  					print_r("nof");
  				}

  				/*For Funding Tree Ends Here*/
  			}



  			/*Calculating F-Euro & G-Dollar Ends Here*/

  			/*Step 3 Code Starts Here*/

  			$eligiblity_score = question_survey::where('user_id', 28)->where('question_id', 18)->where('meta_key', 'elegibility_score')->get();
  			if(isset($elegibility_score)){
  			if($eligiblity_score[0]->meta_value !=0){

			$eligiblity_score = $eligiblity_score[0]->meta_value;   //Q16 eligibility score

			$eligibility_ratio = $eligiblity_score/$funding_morg;  
		} else{
			$eligiblity_score =0;   //Q16 eligibility score
			$eligibility_ratio =0;  

		}
	}
	$eligiblity_score =0;   //Q16 eligibility score
			$eligibility_ratio =0;
			$eligibility = true;

			if($eligibility == true){
				$part_h = $eligibility_ratio;

				if($part1_funding == 'B'){
					$morg_h = $funding_morg - $funding_tree['morg1'];
					print_r($morg_h);
				} else{
					$morg_h = $funding_morg - $funding_tree['morg2'];
					$funding_tree['morg2'] = $funding_tree['morg2'] - $morg_h;
					if($funding_tree['morg2'] < 0){
						if($part1_funding == 'A'){
							$morg_h = $morg_h - $funding_tree['morg1'];
						} else{
							$morg_h = $morg_h - $funding_tree['morg2'];
						}
					}
				}

				$pmt_h = $report1->pmt_calculation($morg_h, $request->year_h, $request->intrest_h);

				$total_pmt_funding = $total_pmt_funding + $pmt_h; //total PMT in step 3

					 $final_mr = $total_pmt_funding + $total_pmt_enslavement;  //Final MR
			}



				/*Step 3 Code Ends Here*/


				/*Step 4 Code Starts Here*/

				$bank_type = $request->bank_type;
				$fund_type = $request->fund_type;
				$val_year = $request->val_year;
				$sensitive_prime = $request->sensitive_prime;
				$val = $this->bank_interest_prime($bank_type, $fund_type, $val_year, $sensitive_prime);

				/*Step 4 Code Ends Here*/
				$res= json_decode($report1->Best_tree_data_report_two(28));
				$tree =  json_decode($res[0]->tree_data);
				$best_tree = $tree->best_tree_findings;
				 // $a = $res->tree_data;

				$data = array(
					// 'final_mr' =>$final_mr,
					// 'g' => $g_array,
					// 'f' => $f_array,
					'best_tree' => $best_tree,
					'Full' =>$res,

				);

				$response = array(
					'data' => $data,
					'msg' => 'done',
				);

				 return response()->json(['success' => $response]);

				break;

				default:
  			# code...
				break;
			}
		}
	}







































































































/***********************************************************************************************************/

/*AJAX FUNCTION FOR REPORT 2*/
function Best_tree_data_report_two(Request $request){


global $user_id;
global $type_click;
global $step3;
global $second_tab;
global $data;


  $user_id = $request->user_id;
  $type_click = $request->tab;

 


  $prime_deltas = Best_tree_result::where('user_id',$user_id)->get();
  $res = $prime_deltas;
  if(isset($res[0])){
  	$aa=  $res[0]->tree_data;
  	$b = $res;
  	$c = json_decode($aa);
  	$data= (array)$c;



    if($data['best_tree_findings']->bank_name != ""){


    $funding = $data['best_tree_findings']->funding;
    $bank = $data['best_tree_findings']->bank_name;
    $link = $data['best_tree_findings']->link_type;
    if($link[0] == 'A'){
      $year = $data['best_tree_findings']->years[0];
      $amount = $data['best_tree_findings']->full->mortgage_amount[0];
      $interest = $data['best_tree_findings']->full->interest[0];
      $e_interest = $data['best_tree_findings']->full->e_interest[0];
      $part = $data['best_tree_findings']->divide[0];

      $rowTotal =isset($data['best_tree_findings']->full->row3)?$data['best_tree_findings']->full->row2 + $data['best_tree_findings']->full->row3:$data['best_tree_findings']->full->row2 ;
      $e_rowTotal = isset($data['best_tree_findings']->full->e_row3)?$data['best_tree_findings']->full->e_row2 + $data['best_tree_findings']->full->e_row3:$data['best_tree_findings']->full->e_row2;

    }elseif($link[1] == 'A'){
      $year = $data['best_tree_findings']->years[1];
      $amount = $data['best_tree_findings']->full->mortgage_amount[1];
      $interest = $data['best_tree_findings']->full->interest[1];
      $e_interest = $data['best_tree_findings']->full->e_interest[1];
      $part = $data['best_tree_findings']->divide[1];

      $rowTotal =isset($data['best_tree_findings']->full->row3)?$data['best_tree_findings']->full->row1 + $data['best_tree_findings']->full->row3:$data['best_tree_findings']->full->row1 ;
      $e_rowTotal =isset($data['best_tree_findings']->full->row3)? $data['best_tree_findings']->full->e_row1 + $data['best_tree_findings']->full->e_row3 : $data['best_tree_findings']->full->e_row1 ;

    }else{
      $year = $data['best_tree_findings']->years[2];
      $amount = $data['best_tree_findings']->full->mortgage_amount[2];
      $interest = $data['best_tree_findings']->full->interest[2];
      $e_interest = $data['best_tree_findings']->full->e_interest[2];
      $part = $data['best_tree_findings']->divide[2];

      $rowTotal = $data['best_tree_findings']->full->row1 + $data['best_tree_findings']->full->row2;
      $e_rowTotal = $data['best_tree_findings']->full->e_row1 + $data['best_tree_findings']->full->e_row2;

    }

    $env_morg = $data['total_twenty_point_seven'];
    $fundingMorg = $data['total_twenty_point_eight'];
    $enslavementMorg = $data['total_twenty_point_nine'];
    $mr_funding = $data['best_tree_findings']->full->total_mr_funding;
    $env_funding =  $data['best_tree_findings']->full->total_mr_enslavement;
    $primeAmount = $amount;
    $primeInterest = $interest;
    $primePart = $part; 


    $linkType = $data['best_tree_findings']->link_type;
    $mortgage = $data['best_tree_findings']->full->mortgage_amount;



   if(count($linkType) == 3){
      $for_B = array_search('B',$linkType);
      $mortgageB = $mortgage[$for_B];
      $for_A = array_search('A',$linkType);
      $mortgageA = $mortgage[$for_A];

    if(in_array('E',$linkType)){
      $for_C = array_search('E',$linkType);
      $mortgageC = $mortgage[$for_C];
    }else{
      $for_C = array_search('D',$linkType);
      $mortgageC = $mortgage[$for_C];
    }

      $for_C = array_search('B',$linkType);
      $mortgageB = $mortgage[$for_B];

   }else{

    if($linkType[0] == "B"){
      $mortgageB = $mortgage[0];
      $mortgageA = $mortgage[1];
      $mortgageC = "";
    }else{
      $mortgageB = $mortgage[1];
      $mortgageA = $mortgage[0];
      $mortgageC = "";
    }

   } 
    
    }else{

      $bank ="";
      $funding ="";
      $year ="";
      $env_morg ="";
      $fundingMorg ="";
      $enslavementMorg ="";
      $mr_funding ="";
      $env_funding ="";
      $primeAmount ="";
      $primeInterest ="";
      $primePart ="";
      $e_interest ="";
      $mortgageA = "";
      $mortgageB = "";

    }

    $second_tab = $this->second_table($bank,$funding,$year,$env_morg,$fundingMorg,$enslavementMorg,$mr_funding,$env_funding,$primeAmount,$primeInterest,$primePart,$e_interest);

    $total_fund = $second_tab['total_fund'] + $rowTotal ;

    if($second_tab['total_ensl'] != ""){
      $total_ensl = $second_tab['total_ensl'] + $e_rowTotal ;
      $final_mr = $total_fund + $total_ensl;
    }else{
      $total_ensl = 0 ;
      $final_mr = $total_fund + $total_ensl;
    }

/*STEP 3*/
    $twenty_point_eight = $data['total_twenty_point_eight'];
    $step3 = $this->step_three($user_id,$twenty_point_eight,$bank,$funding,$year,$mortgageA,$mortgageB,$mortgageC,$total_fund,$final_mr,$data,$second_tab);

/*STEP-4*/
  //$type_click = "A";
  $step4 = $this->step_four($user_id,$type_click,$step3,$second_tab,$data);


  /*STEP-7*/
  //$type_click = "A";
  $step7 = $this->step_seven($user_id);



    $datas = array(
      'data'=>$data,
      'second'=>$second_tab,
      'second_total_fund' => $total_fund,
      'second_total_ensl' => $total_ensl,
      'second_final_mr' => $final_mr,
      'eligibility_score' => $step3,
      'step4' => $step4,
      'step7' => $step7,
      
    );
  	return $datas;
  } else{
  	return 'no_datas';
  }
}








/*FOR SECOND TAB*/

function second_table($bank,$funding,$year,$enslavement,$fundingMorg,$enslavementMorg,$mr_funding,$env_funding,$primeAmount,$primeInterest,$primePart,$e_interest){
      $report1 = new ReportController();
      /*Calculating F-Euro & G-Dollar*/

        $checkbox_g = AdminCheckboxes::where('meta_key', 'Algo-Control-G-Dollar')->get();
        $ggg = $checkbox_g[0]->meta_value;

        $checkbox_f = AdminCheckboxes::where('meta_key', 'Algo-Control-F-Euro')->get();
        $fff = $checkbox_f[0]->meta_value;
        $interest = Bank_interest::where('bank_name',$bank)->where('funding_type',$funding)->where('years', $year)->get();


          if(!empty($bank)){
            $interest_dollar = $interest[0]->dollar_inter;
            $interest_euro = $interest[0]->euro_inter;
          }else{
            $interest_dollar = 0;
            $interest_euro = 0;
          }

          $primePart = $primePart/3;


        if($enslavement == 'Yes'){

          /*if g == 1*/
          if($ggg == 1 && $fff == 1){

            /*For Funding Tree*/
            $part_g_funding = 0.1;//return
            $morg_g_funding = $part_g_funding * $fundingMorg;//return
            $intrest_g_funding = $interest_dollar;//return
            $year_g_funding = $year;//return
            $pmt_g_funding = $report1->pmt_calculation($morg_g_funding, $year_g_funding, $intrest_g_funding);
            /*For Funding Tree Ends Here*/

            /*For Enslavement Tree*/
            $part_g_enslavement = 0.1;
            $morg_g_enslavement = $part_g_enslavement * $enslavementMorg;
            $intrest_g_enslavement = $interest_dollar;
            $year_g_enslavement = $year;
            $pmt_g_enslavement = $report1->pmt_calculation($morg_g_enslavement, $year_g_enslavement, $intrest_g_enslavement);
            /*For Enslavement Tree Ends Here*/

            /*CASE FOR F*/

            $part_f_funding = 0.1;//return
            $morg_f_funding = $part_f_funding * $fundingMorg;//return
            $intrest_f_funding = $interest_euro;//return
            $year_f_funding = $year;//return
            $pmt_f_funding = $report1->pmt_calculation($morg_f_funding, $year_f_funding, $intrest_f_funding); 
            /*For Funding Tree Ends Here*/

            /*For Enslavement Tree*/
            $part_f_enslavement = 0.1;
            $morg_f_enslavement = $part_f_enslavement * $enslavementMorg;
            $intrest_f_enslavement = $interest_euro;
            $year_f_enslavement = $year;
            $pmt_f_enslavement = $report1->pmt_calculation($morg_f_enslavement, $year_f_enslavement, $intrest_f_enslavement);
           

            $a_primePart = $primePart - $part_g_funding - $part_f_funding ; //return
            $a_morg_funding = $a_primePart * $fundingMorg;//return
            $a_PMT = $report1->pmt_calculation($a_morg_funding, $year, $primeInterest);

            $a_e_primePart = $primePart - $part_g_enslavement - $part_f_enslavement; //return

            $a_e_morg_funding = $a_e_primePart * $enslavementMorg;//return
            // print_r($a_e_morg_funding);
            // die();


            $a_e_PMT = $report1->pmt_calculation($a_e_morg_funding, $year, $e_interest);


            $total_fund = $pmt_g_funding + $pmt_f_funding + $a_PMT;
            $total_ensl = $pmt_g_enslavement + $pmt_f_enslavement + $a_e_PMT;


            $total_array = array(
              'part_g_funding' => $part_g_funding,
              'morg_g_funding' => $morg_g_funding,
              'intrest_g_funding' => $intrest_g_funding,
              'year_g_funding' => $year_g_funding,
              'pmt_g_funding' => $pmt_g_funding,
              'part_g_enslavement' => $part_g_enslavement,
              'morg_g_enslavement' => $morg_g_enslavement,
              'intrest_g_enslavement' => $intrest_g_enslavement,
              'year_g_enslavement' => $year_g_enslavement,
              'pmt_g_enslavement' => $pmt_g_enslavement,
              'part_f_funding' => $part_f_funding,
              'morg_f_funding' => $morg_f_funding,
              'intrest_f_funding' => $intrest_f_funding,
              'year_f_funding' => $year_f_funding,
              'pmt_f_funding' => $pmt_f_funding,
              'part_f_enslavement' => $part_f_enslavement,
              'morg_f_enslavement' => $morg_f_enslavement,
              'intrest_f_enslavement' => $intrest_f_enslavement,
              'year_f_enslavement' => $year_f_enslavement,
              'pmt_f_enslavement' => $pmt_f_enslavement,
              'a_primePart' => $a_primePart,
              'a_morg_funding' => $a_morg_funding,
              'a_PMT' => $a_PMT,
              'a_e_primePart' => $a_e_primePart,
              'a_e_morg_funding' => $a_e_morg_funding,
              'a_e_PMT' => $a_e_PMT,
              'total_fund' =>$total_fund,
              'total_ensl' =>$total_ensl,
            );

          } elseif($ggg == 0 && $fff == 1){

            $part_f_funding = 0.1;//return
            $a_primePart = $primePart - $part_f_funding; //return
            $a_morg_funding = $a_primePart * $fundingMorg;//return
            $a_PMT = $report1->pmt_calculation($a_morg_funding, $year, $primeInterest);
            $morg_f_funding = $part_f_funding * $fundingMorg;//return
            $intrest_f_funding = $interest_euro;//return
            $year_f_funding = $year;//return
            $pmt_f_funding = $report1->pmt_calculation($morg_f_funding, $year_f_funding, $intrest_f_funding); 
            /*For Funding Tree Ends Here*/

            /*For Enslavement Tree*/
            $part_f_enslavement = 0.1;
            $a_e_primePart = $primePart - $part_f_enslavement; //return
            $a_e_morg_funding = $a_e_primePart * $enslavementMorg;//return
            $a_e_PMT = $report1->pmt_calculation($a_e_morg_funding, $year, $e_interest);
            $morg_f_enslavement = $part_f_enslavement * $enslavementMorg;
            $intrest_f_enslavement = $interest_euro;
            $year_f_enslavement = $year;
            $pmt_f_enslavement = $report1->pmt_calculation($morg_f_enslavement, $year_f_enslavement, $intrest_f_enslavement);

            $total_fund = 0 + $pmt_f_funding + $a_PMT;
            $total_ensl = 0 + $pmt_f_enslavement + $a_e_PMT;

            $total_array = array(
              'part_f_funding' => $part_f_funding,
              'morg_f_funding' => $morg_f_funding,
              'intrest_f_funding' => $intrest_f_funding,
              'year_f_funding' => $year_f_funding,
              'pmt_f_funding' => $pmt_f_funding,
              'part_f_enslavement' => $part_f_enslavement,
              'morg_f_enslavement' => $morg_f_enslavement,
              'intrest_f_enslavement' => $intrest_f_enslavement,
              'year_f_enslavement' => $year_f_enslavement,
              'pmt_f_enslavement' => $pmt_f_enslavement,
              'a_primePart' => $a_primePart,
              'a_morg_funding' => $a_morg_funding,
              'a_PMT' => $a_PMT,
              'a_e_primePart' => $a_e_primePart,
              'a_e_morg_funding' => $a_e_morg_funding,
              'a_e_PMT' => $a_e_PMT,
              'total_fund' =>$total_fund,
              'total_ensl' =>$total_ensl,
              'part_g_funding' => 0.00,

              'part_g_enslavement' => 0,
              'morg_g_enslavement' => 0,
              'intrest_g_enslavement' => 0,
              'year_g_enslavement' => 0,
              'pmt_g_enslavement' => 0,
             
            );


          } elseif($ggg == 1 && $fff == 0){

            /*For Funding Tree*/
            $part_g_funding = 0.1;//return
            $a_primePart = $primePart - $part_g_funding; //return
            $a_morg_funding = $a_primePart * $fundingMorg;//return
            $a_PMT = $report1->pmt_calculation($a_morg_funding, $year, $primeInterest);
            $morg_g_funding = $part_g_funding * $fundingMorg;//return
            $intrest_g_funding = $interest_dollar;//return
            $year_g_funding = $year;//return
            $pmt_g_funding = $report1->pmt_calculation($morg_g_funding, $year_g_funding, $intrest_g_funding); 
            /*For Funding Tree Ends Here*/

            /*For Enslavement Tree*/
            $part_g_enslavement = 0.1;
            $a_e_primePart = $primePart - $part_g_enslavement; //return
            $a_e_morg_funding = $a_e_primePart * $enslavementMorg;//return
            $a_e_PMT = $report1->pmt_calculation($a_e_morg_funding, $year, $e_interest);
            $morg_g_enslavement = $part_g_enslavement * $enslavementMorg;
            $intrest_g_enslavement = $interest_dollar;
            $year_g_enslavement = $year;
            $pmt_g_enslavement = $report1->pmt_calculation($morg_g_enslavement, $year_g_enslavement, $intrest_g_enslavement);
            /*For Enslavement Tree Ends Here*/

            $total_fund = $pmt_g_funding + 0 + $a_PMT;
            $total_ensl = $pmt_g_enslavement + 0 + $a_e_PMT;

            $total_array = array(
              'part_g_funding' => $part_g_funding,
              'morg_g_funding' => $morg_g_funding,
              'intrest_g_funding' => $intrest_g_funding,
              'year_g_funding' => $year_g_funding,
              'pmt_g_funding' => $pmt_g_funding,
              'part_g_enslavement' => $part_g_enslavement,
              'morg_g_enslavement' => $morg_g_enslavement,
              'intrest_g_enslavement' => $intrest_g_enslavement,
              'year_g_enslavement' => $year_g_enslavement,
              'pmt_g_enslavement' => $pmt_g_enslavement,
              'a_primePart' => $a_primePart,
              'a_morg_funding' => $a_morg_funding,
              'a_PMT' => $a_PMT,
              'a_e_primePart' => $a_e_primePart,
              'a_e_morg_funding' => $a_e_morg_funding,
              'a_e_PMT' => $a_e_PMT,
              'total_fund' =>$total_fund,
              'total_ensl' =>$total_ensl,
              'part_f_funding' => 0.00,


              'part_f_enslavement' => 0,
              'morg_f_enslavement' => 0,
              'intrest_f_enslavement' => 0,
              'year_f_enslavement' => 0,
              'pmt_f_enslavement' => 0,


            );
          }else{
            $a_primePart = $primePart; //return
            $a_morg_funding = $a_primePart * $fundingMorg;//return
            $a_PMT = $report1->pmt_calculation($a_morg_funding, $year, $primeInterest);
            $a_e_primePart = $primePart; //return
            $a_e_morg_funding = $a_e_primePart * $enslavementMorg;//return
            $a_e_PMT = $report1->pmt_calculation($a_e_morg_funding, $year, $e_interest);

            $total_fund = 0 + 0 + $a_PMT;
            $total_ensl = 0 + 0 + $a_e_PMT;

            $total_array = array(
              'a_primePart' => $a_primePart,
              'a_morg_funding' => $a_morg_funding,
              'a_PMT' => $a_PMT,
              'a_e_primePart' => $a_e_primePart,
              'a_e_morg_funding' => $a_e_morg_funding,
              'a_e_PMT' => $a_e_PMT,
              'total_fund' =>$total_fund,
              'total_ensl' =>$total_ensl,
              'part_g_funding' => 0.00,
              'part_f_funding' => 0.00,

              'part_g_enslavement' => 0,
              'morg_g_enslavement' => 0,
              'intrest_g_enslavement' => 0,
              'year_g_enslavement' => 0,
              'pmt_g_enslavement' => 0,
              'part_f_enslavement' => 0,
              'morg_f_enslavement' => 0,
              'intrest_f_enslavement' => 0,
              'year_f_enslavement' => 0,
              'pmt_f_enslavement' => 0,

            );

          }

        }else {

          if($ggg == 1 && $fff == 1){

            /*For Funding Tree*/
            $part_g_funding = 0.1;//return
            $morg_g_funding = $part_g_funding * $fundingMorg;//return
            $intrest_g_funding = $interest_dollar;//return
            $year_g_funding = $year;//return
            $pmt_g_funding = $report1->pmt_calculation($morg_g_funding, $year_g_funding, $intrest_g_funding);
            /*For Funding Tree Ends Here*/

            /*CASE FOR F*/

            $part_f_funding = 0.1;//return
            $morg_f_funding = $part_f_funding * $fundingMorg;//return
            $intrest_f_funding = $interest_euro;//return
            $year_f_funding = $year;//return
            $pmt_f_funding = $report1->pmt_calculation($morg_f_funding, $year_f_funding, $intrest_f_funding); 
            /*For Funding Tree Ends Here*/

           
            $a_primePart = $primePart - $part_g_funding - $part_f_funding ; //return
            $a_morg_funding = $a_primePart * $fundingMorg;//return
            $a_PMT = $report1->pmt_calculation($a_morg_funding, $year, $primeInterest);


            $total_fund = $pmt_g_funding + $pmt_f_funding + $a_PMT;
            
            $total_array = array(
              'part_g_funding' => $part_g_funding,
              'morg_g_funding' => $morg_g_funding,
              'intrest_g_funding' => $intrest_g_funding,
              'year_g_funding' => $year_g_funding,
              'pmt_g_funding' => $pmt_g_funding,
              'part_f_funding' => $part_f_funding,
              'morg_f_funding' => $morg_f_funding,
              'intrest_f_funding' => $intrest_f_funding,
              'year_f_funding' => $year_f_funding,
              'pmt_f_funding' => $pmt_f_funding,
              'a_primePart' => $a_primePart,
              'a_morg_funding' => $a_morg_funding,
              'a_PMT' => $a_PMT,
              'total_fund' =>$total_fund,
              'total_ensl' =>0,
              'a_e_primePart' => 0.00,
              'a_e_morg_funding' => 0.00,
              'a_e_PMT' => 0.00,


              'part_g_enslavement' => 0,
              'morg_g_enslavement' => 0,
              'intrest_g_enslavement' => 0,
              'year_g_enslavement' => 0,
              'pmt_g_enslavement' => 0,
              'part_f_enslavement' => 0,
              'morg_f_enslavement' => 0,
              'intrest_f_enslavement' => 0,
              'year_f_enslavement' => 0,
              'pmt_f_enslavement' => 0,






              
            );

          } elseif($ggg == 0 && $fff == 1){

            $part_f_funding = 0.1;//return
            $a_primePart = $primePart - $part_f_funding; //return
            $a_morg_funding = $a_primePart * $fundingMorg;//return
            $a_PMT = $report1->pmt_calculation($a_morg_funding, $year, $primeInterest);
            $morg_f_funding = $part_f_funding * $fundingMorg;//return
            $intrest_f_funding = $interest_euro;//return
            $year_f_funding = $year;//return
            $pmt_f_funding = $report1->pmt_calculation($morg_f_funding, $year_f_funding, $intrest_f_funding); 
            /*For Funding Tree Ends Here*/

            $total_fund = 0 + $pmt_f_funding + $a_PMT;
           
            $total_array = array(
              'part_f_funding' => $part_f_funding,
              'morg_f_funding' => $morg_f_funding,
              'intrest_f_funding' => $intrest_f_funding,
              'year_f_funding' => $year_f_funding,
              'pmt_f_funding' => $pmt_f_funding,
              'a_primePart' => $a_primePart,
              'a_morg_funding' => $a_morg_funding,
              'a_PMT' => $a_PMT,
              'total_fund' =>$total_fund,
              'total_ensl' =>0,
              'a_e_primePart' => 0.000,
              'a_e_morg_funding' => 0.00,
              'a_e_PMT' => 0.00,
              'part_g_funding' => 0.00,

              'part_g_enslavement' => 0,
              'morg_g_enslavement' => 0,
              'intrest_g_enslavement' => 0,
              'year_g_enslavement' => 0,
              'pmt_g_enslavement' => 0,
              'part_f_enslavement' => 0,
              'morg_f_enslavement' => 0,
              'intrest_f_enslavement' => 0,
              'year_f_enslavement' => 0,
              'pmt_f_enslavement' => 0,
              
            );


          } elseif($ggg == 1 && $fff == 0){

            /*For Funding Tree*/
            $part_g_funding = 0.1;//return
            $a_primePart = $primePart - $part_g_funding; //return
            $a_morg_funding = $a_primePart * $fundingMorg;//return
            $a_PMT = $report1->pmt_calculation($a_morg_funding, $year, $primeInterest);
            $morg_g_funding = $part_g_funding * $fundingMorg;//return
            $intrest_g_funding = $interest_dollar;//return
            $year_g_funding = $year;//return
            $pmt_g_funding = $report1->pmt_calculation($morg_g_funding, $year_g_funding, $intrest_g_funding); 
            /*For Funding Tree Ends Here*/

            $total_fund = $pmt_g_funding + 0 + $a_PMT;

            $total_array = array(
              'part_g_funding' => $part_g_funding,
              'morg_g_funding' => $morg_g_funding,
              'intrest_g_funding' => $intrest_g_funding,
              'year_g_funding' => $year_g_funding,
              'pmt_g_funding' => $pmt_g_funding,
              'a_primePart' => $a_primePart,
              'a_morg_funding' => $a_morg_funding,
              'a_PMT' => $a_PMT,
              'total_fund' =>$total_fund,
              'total_ensl' =>0,
              'a_e_primePart' => 0.00,
              'a_e_morg_funding' => 0.00,
              'a_e_PMT' => 0.00,
              'part_f_funding' => 0.00,


              'part_g_enslavement' => 0,
              'morg_g_enslavement' => 0,
              'intrest_g_enslavement' => 0,
              'year_g_enslavement' => 0,
              'pmt_g_enslavement' => 0,
              'part_f_enslavement' => 0,
              'morg_f_enslavement' => 0,
              'intrest_f_enslavement' => 0,
              'year_f_enslavement' => 0,
              'pmt_f_enslavement' => 0,
            );
          }else{
            $a_primePart = $primePart; //return
            $a_morg_funding = $a_primePart * $fundingMorg;//return
            $a_PMT = $report1->pmt_calculation($a_morg_funding, $year, $primeInterest);
            
            $total_fund = 0 + 0 + $a_PMT;
            
            $total_array = array(
              'a_primePart' => $a_primePart,
              'a_morg_funding' => $a_morg_funding,
              'a_PMT' => $a_PMT,
              'total_fund' =>$total_fund,
              'total_ensl' =>0,
              'a_e_primePart' => 0.00,
              'a_e_morg_funding' => 0.00,
              'a_e_PMT' => 0.00,
              'part_g_funding' => 0.00,
              'part_f_funding' => 0.00,

              'part_g_enslavement' => 0,
              'morg_g_enslavement' => 0,
              'intrest_g_enslavement' => 0,
              'year_g_enslavement' => 0,
              'pmt_g_enslavement' => 0,
              'part_f_enslavement' => 0,
              'morg_f_enslavement' => 0,
              'intrest_f_enslavement' => 0,
              'year_f_enslavement' => 0,
              'pmt_f_enslavement' => 0,
              
            );

          }




        }


return $total_array;

}


function step_three($user_id,$twenty_point_eight,$bank,$funding,$year,$mortgageA,$mortgageB,$mortgageC,$total_fund,$final_mr,$data,$second){
  $report1 = new ReportController();

  $question_sixteen =  question_survey::where('user_id',$user_id)->where('question_id',18)->get();
  $ques2 = question_survey::where('user_id',$user_id)->where('question_id', 2)->get();
  $ques9 = question_survey::where('user_id',$user_id)->where('question_id', 9)->get();

  if(count($ques2)){
    $condition_ques2 = $ques2[0]->meta_value; 
  }else{
    $condition_ques2 = "Yes"; 
  }

  if(count($ques9)){
    $condition_ques9 = $ques9[0]->meta_value; 
  }else{
    $condition_ques9 = "Yes"; 
  }

  if($condition_ques2 == "No" && $condition_ques9 == "first_aprt"){
    $Question_elibility = "eligible";
  }else{
    $Question_elibility = "No_eligible";
  }




  $eligibility = (isset($question_sixteen[8]) && $question_sixteen[8] != "") ? str_replace(',', '', $question_sixteen[8]->meta_value) : 0;

  $eligibility_ratio = ((int)$eligibility / $twenty_point_eight) * 100;

  $interest = Bank_interest::where('bank_name',$bank)->where('funding_type',$funding)->where('years', $year)->get();

  if(isset($interest[0])){
    $interest = $interest[0]->eligibility_inter;
  }else{
    $interest = 0;
  }



  $link_type = $data['best_tree_findings']->link_type;

  if(count($link_type) == 3){
    $for_B = array_search('B',$link_type);
    $for_A = array_search('A',$link_type);
    if(in_array('D',$link_type)){
    $for_C = array_search('D',$link_type);
    }
    if(in_array('E',$link_type)){
    $for_C = array_search('E',$link_type);
    }

    $year_b = $data['best_tree_findings']->years[$for_B];  
    $year_a = $data['best_tree_findings']->years[$for_A];
    $year_c = $data['best_tree_findings']->years[$for_C];

    $interest_b = $data['best_tree_findings']->full->interest[$for_B];
    $interest_a = $data['best_tree_findings']->full->interest[$for_A];
    $interest_c = $data['best_tree_findings']->full->interest[$for_C];


    $row1 = 'e_row'.($for_B +1);
    $row2 = 'e_row'.($for_A +1);
    $row3 = 'e_row'.($for_C +1);

    $e_interest_b = $data['best_tree_findings']->full->$row1;
    $e_interest_a = $data['best_tree_findings']->full->$row2;
    $e_interest_c = $data['best_tree_findings']->full->$row3;

  }else{
    $for_B = array_search('B',$link_type);
    $for_A = array_search('A',$link_type);

    $year_b = $data['best_tree_findings']->years[$for_B];  
    $year_a = $data['best_tree_findings']->years[$for_A];

    $interest_b = $data['best_tree_findings']->full->interest[$for_B];
    $interest_a = $data['best_tree_findings']->full->interest[$for_A];

    $row1 = 'e_row'.($for_B +1);
    $row2 = 'e_row'.($for_A +1);

    $e_interest_b = $data['best_tree_findings']->full->$row1;
    $e_interest_a = $data['best_tree_findings']->full->$row2;
  }



  $mortgage = $mortgageB - $eligibility;
 
  $final_morgB = $mortgageB - $mortgage;


  if($mortgageC != ""){

    if($final_morgB <= 0 ){

      $mortgage = $eligibility - $mortgageC;
      $final_morgC = $mortgageC - $mortgage;

      if($final_morgC <= 0){

        $mortgage = $eligibility - $mortgageA;
        $final_morgA = $mortgageA - $mortgage;

        if($final_morgA <= 0){
          $final_morg_a = 0;
          $final_morg_c = 0;
          $final_morg_h = $mortgage;
          $final_morg_b = 0;

          $pmt_mr_c = "";
          $total_mr_c = "";
          $pmt_mr_b ="";
          $total_mr_b ="";
          $pmt_mr_a ="";
          $total_mr_a ="";


        }else{
          $final_morg_a = $final_morgA;
          $final_morg_c = $final_morgC;
          $final_morg_h = $mortgage;
          $final_morg_b = $final_morgB;

          $pmt_mr_b = $report1->pmt_calculation($final_morgB, $year_b, $interest_b);
          $total_mr_b = $pmt_mr_b + $e_interest_b;

          $pmt_mr_c = $report1->pmt_calculation($final_morgC, $year_c, $interest_c);
          $total_mr_c = $pmt_mr_c + $e_interest_c;

          $pmt_mr_a = $report1->pmt_calculation($final_morgA, $year_a, $interest_a);
          $total_mr_a = $pmt_mr_a + $e_interest_a;

        


        }
      }else{
        $final_morg_c = $final_morgC;
        $final_morg_h = $mortgage;
        $final_morg_b = $final_morgB;
        $final_morg_a = "";

        $pmt_mr_b = $report1->pmt_calculation($final_morgB, $year_b, $interest_b);
        $total_mr_b = $pmt_mr_b + $e_interest_b;

        $pmt_mr_c = $report1->pmt_calculation($final_morgC, $year_c, $interest_c);
        $total_mr_c = $pmt_mr_c + $e_interest_c;

        $pmt_mr_a ="";
        $total_mr_a ="";
      } 

    }else{
      $final_morg_h = $mortgage;
      $final_morg_b = $final_morgB;
      $final_morg_a = "";
      $final_morg_c = "";
      $pmt_mr_b = $report1->pmt_calculation($final_morgB, $year_b, $interest_b);
      $total_mr_b = $pmt_mr_b + $e_interest_b;

      $pmt_mr_c = "";
      $total_mr_c = "";

      $pmt_mr_a ="";
      $total_mr_a ="";

    }

  }else{

    if($final_morgB <= 0 ){
      $mortgage = $eligibility - $mortgageA;
      $final_morgA = $mortgageA - $mortgage;

      if($final_morgA <= 0){
        $final_morg_a = 0;
        $final_morg_h = $mortgage;
        $final_morg_b = 0;
        $final_morg_c = "";

        $pmt_mr_c = "";
        $total_mr_c = "";
        $pmt_mr_b ="";
        $total_mr_b ="";
        $pmt_mr_a ="";
        $total_mr_a ="";

      }else{
        $final_morg_a = $final_morgA;
        $final_morg_h = $mortgage;
        $final_morg_b = 0;
        $final_morg_c = "";

      $pmt_mr_a = $report1->pmt_calculation($final_morgA, $year_a, $interest_a);
      $total_mr_a = $pmt_mr_a + $e_interest_a;

      $pmt_mr_c = "";
      $total_mr_c = "";

      $pmt_mr_b ="";
      $total_mr_b ="";

      }

    }else{

      $final_morg_h = $mortgage;
      $final_morg_b = $final_morgB;
      $final_morg_a = "";
      $final_morg_c = "";

      $pmt_mr_b = $report1->pmt_calculation($final_morgB, $year_b, $interest_b);
      $total_mr_b = $pmt_mr_b + $e_interest_b;

      $pmt_mr_c = "";
      $total_mr_c = "";

      $pmt_mr_a ="";
      $total_mr_a ="";
    }
  }


  $final_morg_h = $final_morg_h * $eligibility_ratio;


  $eligi_pmt = $report1->pmt_calculation($final_morg_h, $year, $interest);

  if($eligi_pmt <= 0){
    
    $eligi_pmt = 0;

  }else{
    
    $eligi_pmt = $eligi_pmt;

  }



 











  $eligi_total_fund = $eligi_pmt + $total_fund;
  $eligi_final_mr = $eligi_pmt + $final_mr;

  $total_array = array(
    'question_elibility' => $Question_elibility,
    'eligibility' => $eligibility,
    'eligibility_ratio' => $eligibility_ratio,
    'e_interest'=> $interest,
    'e_year' => $year,

    'mortgage_h' => $final_morg_h,
    'mortgage_b' => $final_morg_b,
    'mortgage_a' => $final_morg_a,
    'mortgage_c' => $final_morg_c,

    'eligi_pmt' => $eligi_pmt,
    'eligi_total_fund' => $eligi_total_fund,
    'eligi_final_mr' => $eligi_final_mr,


    'pmt_mr_a' => $pmt_mr_a,
    'total_mr_a' => $total_mr_a,
    'pmt_mr_b' => $pmt_mr_b,
    'total_mr_b' => $total_mr_b,
    'pmt_mr_c' => $pmt_mr_c,
    'total_mr_c' => $total_mr_c,
  ); 
  return $total_array;

}


function step_four($user_id,$type_click='A',$step3,$step2,$step1){

  $report1 = new ReportController();
  $ques5 = question_survey::where('user_id',$user_id)->where('question_id', 5)->get();
  $five_value = $ques5[0]->meta_value;
  $ques12 = question_survey::where('user_id',$user_id)->where('question_id', 14)->get();
  $twelve_value = $ques12[0]->meta_value;
  $twelve_value = str_replace(',', '', $twelve_value);

  $five_value = str_replace(',', '', $five_value);
  $ten_point_two = $twelve_value - $five_value;

  $ques10 = question_survey::where('user_id',$user_id)->where('question_id', 10)->get();
  $ten_value = $ques10[0]->meta_value;




$link_type = $step1['best_tree_findings']->link_type;

  if(count($link_type) == 3){
    $for_B = array_search('B',$link_type);
    $for_A = array_search('A',$link_type);
    if(in_array('D',$link_type)){
    $for_C = array_search('D',$link_type);
    }
    if(in_array('E',$link_type)){
    $for_C = array_search('E',$link_type);
    }
  }


  if(count($link_type) == 3){
     if($for_A == 0 && $for_B == 1 ){
        $ensl_a  = $step2['a_e_PMT'];
        $ensl_b = $step1['best_tree_findings']->full->e_row2;
        $ensl_c = $step1['best_tree_findings']->full->e_row3;

        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row3;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }else{
          $final_a = $step3['pmt_mr_a'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row3;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }
     }else{

          $ensl_a  = $step2['a_e_PMT'];
          $ensl_b = $step1['best_tree_findings']->full->e_row3;
          $ensl_c = $step1['best_tree_findings']->full->e_row2;


        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row2;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }else{
          $final_a = $step3['pmt_mr_a'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row2;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }

     }

      $sum_a = $final_a + $ensl_a;
      $sum_b = $final_b + $ensl_b;
      $sum_c = $final_c + $ensl_c;

   }else{

    if($for_A == 0){
      $ensl_a  = $step2['a_e_PMT'];
      $ensl_b = $step1['best_tree_findings']->full->e_row2;
      $ensl_c = 0;
      $final_c = 0;
  
        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
        }else{
          $final_a = $step3['pmt_mr_a'];
        }
     }else{
      $ensl_a  = $step2['a_e_PMT'];
      $ensl_c = 0;
      $final_c = 0;
      $ensl_b = $step1['best_tree_findings']->full->e_row1;
        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
        }else{
          $final_a = $step3['pmt_mr_a'];
        }

     }

      $sum_a = $final_a + $ensl_a;
      $sum_b = $final_b + $ensl_b;

   }

    

   $grace = array();
   if($sum_a < $ten_point_two){
    $grace[] = 'A';
   }

   
   if($sum_c < $ten_point_two){
    if(in_array('D',$link_type)){
    $grace[] = 'D';
    }
    if(in_array('E',$link_type)){
    $grace[] = 'E';
    }
   }

   if($sum_b < $ten_point_two){
    $grace[] = 'B';
   }

   $grace_string = implode(">",$grace);








  switch ($type_click) {
    case 'A':
      if($step3['mortgage_a'] != ""){
        $mortgage = $step3['mortgage_a'];
      }else{
        $mortgage = $step2['a_morg_funding'];
      }
      if($step1['best_tree_findings']->link_type[0] == "A"){
        $interest = $step1['best_tree_findings']->full->interest[0];
        $e_interest = $step1['best_tree_findings']->full->e_interest[0];
        $year = $step1['best_tree_findings']->years[0];
        $e_year = $step1['best_tree_findings']->years[0];

      }else{
        $interest = $step1['best_tree_findings']->full->interest[1];
        $e_interest = $step1['best_tree_findings']->full->e_interest[1];
        $year = $step1['best_tree_findings']->years[1];
        $e_year = $step1['best_tree_findings']->years[1];

      }
      $e_mortgage = $step2['a_e_morg_funding'];
    break;

    case 'B':

      $mortgage = $step3['mortgage_b'];
      if(count($step1['best_tree_findings']->link_type) == 3){

        $interest = $step1['best_tree_findings']->full->interest[2];
        $e_interest = $step1['best_tree_findings']->full->e_interest[2];
        $year = $step1['best_tree_findings']->years[2];
        $e_year = $step1['best_tree_findings']->years[2];
        $e_mortgage = $step2['a_e_morg_funding'];

      }else{ 

        if($step1['best_tree_findings']->link_type[1] == "A"){
          $interest = $step1['best_tree_findings']->full->interest[1];
          $e_interest = $step1['best_tree_findings']->full->e_interest[1];
          $year = $step1['best_tree_findings']->years[1];
          $e_year = $step1['best_tree_findings']->years[1];
          $e_mortgage = $step2['a_e_morg_funding'];

        }else{

          $interest = $step1['best_tree_findings']->full->interest[0];
          $e_interest = $step1['best_tree_findings']->full->e_interest[0];
          $year = $step1['best_tree_findings']->years[0];
          $e_year = $step1['best_tree_findings']->years[0];
          $e_mortgage = $step2['a_e_morg_funding'];

        }
        
      }
  
    break;

    case 'D':

    if(count($step1['best_tree_findings']->link_type) == 3){

      if($step3['mortgage_c'] != ""){
        $mortgage = $step3['mortgage_c'];
      }else{
        $mortgage = $step1['best_tree_findings']->full->mortgage_amount[1];
      }

      $e_mortgage = $step1['best_tree_findings']->full->e_mortgage_amount[1];

      $interest = $step1['best_tree_findings']->full->interest[1];
      $e_interest = $step1['best_tree_findings']->full->e_interest[1];
      $year = $step1['best_tree_findings']->years[1];
      $e_year = $step1['best_tree_findings']->years[1];

    }else{

      $mortgage = 0;
      $e_mortgage = 0;
      $interest = 0;
      $e_interest = 0;
      $year = 0;
      $e_year = 0;
    }
 
    break;

    case 'F':
      $mortgage = $step2['morg_f_funding'];
      $interest = $step2['intrest_f_funding'];    
      $year = $step2['year_f_funding'];
      $e_mortgage = $step2['morg_f_enslavement'];
      $e_interest = $step2['intrest_f_enslavement'];    
      $e_year = $step2['year_f_enslavement'];

    break;

    case 'G':
      $mortgage = $step2['morg_g_funding'];
      $interest = $step2['intrest_g_funding'];    
      $year = $step2['year_g_funding'];
      $e_mortgage = $step2['morg_g_enslavement'];
      $e_interest = $step2['intrest_g_enslavement'] ;   
      $e_year = $step2['year_g_enslavement'];
      
    break;

    case 'H':
      $mortgage = $step3['mortgage_h'];
      $interest = $step3['e_interest'];
      $year = $step3['e_year'];
      $e_mortgage = 0;
      $e_interest = 0;   
      $e_year = 0;

    break;
    
    default:

      if($step3['mortgage_a'] != ""){
        $mortgage = $step3['mortgage_a'];
      }else{
        $mortgage = $step2['a_morg_funding'];
      }
      if($step1['best_tree_findings']->link_type[0] == "A"){
        $interest = $step1['best_tree_findings']->full->interest[0];
        $e_interest = $step1['best_tree_findings']->full->e_interest[0];
        $year = $step1['best_tree_findings']->years[0];
        $e_year = $step1['best_tree_findings']->years[0];

      }else{
        $interest = $step1['best_tree_findings']->full->interest[1];
        $e_interest = $step1['best_tree_findings']->full->e_interest[1];
        $year = $step1['best_tree_findings']->years[1];
        $e_year = $step1['best_tree_findings']->years[1];

      }

      $e_mortgage = $step2['a_e_morg_funding'];

    break;
  }

    if($interest != ""){
      $interest = $interest;
    }else{
      $interest = 0;
    }
    $interest_monthly = $interest/1200;
    $period = $year*12;
    $mortgage = -$mortgage;

    $e_interest_monthly = $e_interest/1200;
    $e_period = $e_year*12;

    // print_r($e_mortgage);
    // die();


    $e_mortgage = -$e_mortgage;

/*A and prime without Enslavement*/

  $counter  = 1;
  for($x = 1; $x <= 360; $x++){

    $a[] = $x;

    if($type_click == "B" || $type_click == "D" || $type_click == "H"){


      if(in_array($type_click,$grace) && $ten_value > 0){
        $madad = Bank_madad::where('years',$counter)->first();
        $prime = $madad['madad'];
        $prime1 = $prime;
        $prime2 = 100 + $prime1;
        $prime_years[] = $prime2; // with percentage
        $prime_years1[] = $prime2 / 1200;
        $prime_interest = $prime2 / 1200; //without Percentage

        $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
        $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);

        //$net_linked[] = round($net_linked_pmt - $net_py_linked);

        if($x > $ten_value){
          $net_linked[] = round($net_linked_pmt - $net_py_linked);
        }else{
          $net_linked[] = 0;
        }

        $net_pay_linked = round($net_linked_pmt - $net_py_linked);
        $interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$period,$mortgage));


        if($x == 1){
          //$left_pay[] = round(-($mortgage) - $net_pay_linked);
            if($x > $ten_value){
              $left_pay[] = round(-($mortgage) - $net_pay_linked);
            }else{
              $left_pay[] = round(-$mortgage,3) ;
            }

          $left_pay_linked[] = round(-($mortgage) * (1 + $prime_years1[0]));
        }else{
          $c = $x - 2;
          $d = $x -1;
          $f = $ten_value + 1;
          $left_pay_linked[] = round($left_pay_linked[$c] * (1 + $prime_years1[$d]));
          if($x > $ten_value){

            if($f == $x){
              $gg = $x - 2;
              $left_pay[] =round($left_pay_linked[$gg] - $net_pay_linked);
            }else{
              $left_pay[] =round($left_pay[$c] - $net_pay_linked);
            }

          }else{
            $left_pay[] = round(-$mortgage,3) ;
           
          }
        }

        $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
        $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);

        if($x > $ten_value){
          $ppmt_check[] = round($pmt - $ipmt_check);
        }else{
          $ppmt_check[] = 0;
        }
        

        $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

        $val = $x - 1;
        $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
        $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);



      }else{

        $madad = Bank_madad::where('years',$counter)->first();
        $prime = $madad['madad'];
        $prime_years[] = round($prime / 12,3);
        $prime_interest = $prime / 1200;
        $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
        $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);
        $net_linked[] = round($net_linked_pmt - $net_py_linked);
        $net_pay_linked = round($net_linked_pmt - $net_py_linked);

        $interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$period,$mortgage));


        if($x == 1){
          $left_pay[] = round(-($mortgage) - $net_pay_linked);
          $left_pay_linked[] = round(-($mortgage) * (1 + $prime_years[0]));
        }else{
          $c = $x - 2;
          $d = $x -1;
          $left_pay[] =round($left_pay[$c] + $net_pay_linked);
          $left_pay_linked[] = round($left_pay_linked[$c] * (1 + $prime_years[$d]));
        }

        $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
        $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
        $ppmt_check[] = round($pmt - $ipmt_check);

        $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

        $val = $x - 1;
        $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
        $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);
      }

    }else{


      if(in_array($type_click,$grace) && $ten_value > 0){

        $prime = Bank_prime::where('years',$counter)->first();
        $prime = $prime['prime'];

        $prime1 = $prime;
        $prime2 = 100 + $prime1;
        $prime_years[] = $prime2; // with percentage
        $prime_interest = $prime2 / 1200; //without Percentage

        //print_r($prime_interest.','.$x.','.$period.','.$mortgage.'|||');

        $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage); // ipmt
        $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);   // pmt

        if($x > $ten_value){
          $net_linked[] = round($net_linked_pmt - $net_py_linked);
        }else{
          $net_linked[] = 0;
        }

        $net_pay_linked = round($net_linked_pmt - $net_py_linked);
        $interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$period,$mortgage));

        if($x == 1){

          if($x > $ten_value){
             $left_pay[] = round(-($mortgage) - $net_pay_linked);
          }else{
            $left_pay[] = round(-$mortgage,3) ;
          }

         $left_pay_linked[] = round($left_pay[0]);

        }else{
          $c = $x - 2;
          $f = $ten_value + 1;

          $left_pay_linked[] = round($left_pay_linked[$c] - $net_linked[$c]);

          if($x > $ten_value){


            if($f == $x){
              $gg = $x - 2;
              $left_pay[] =round($left_pay_linked[$gg] - $net_pay_linked);
            }else{
              $left_pay[] =round($left_pay[$c] - $net_pay_linked);
            }

          }else{
            $left_pay[] = round(-$mortgage,3) ;
           
          }
        }

        $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
        $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);


        if($x > $ten_value ){
         $ppmt_check[] = round($pmt - $ipmt_check);
        }else{
          $ppmt_check[] = 0;
        }
        

        $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

        $val = $x - 1;
        $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
        $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);
      
      }else{

        $prime = Bank_prime::where('years',$counter)->first();
        $prime = $prime['prime'];
        $prime_years[] = round($prime / 12,3);
        $prime_interest = $prime / 1200;

        $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
        $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);
        $net_linked[] = round($net_linked_pmt - $net_py_linked);
        $net_pay_linked = round($net_linked_pmt - $net_py_linked);
        $interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$period,$mortgage));

        if($x == 1){
          $left_pay[] = round(-($mortgage) - $net_pay_linked);
          $left_pay_linked[] = round(-($mortgage) - $net_pay_linked);
        }else{
          $c = $x - 2;

          $left_pay[] =round($left_pay[$c] - $net_pay_linked);
          $left_pay_linked[] = round($left_pay_linked[$c] - $net_linked[$c]);
        }

        $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
        $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
        $ppmt_check[] = round($pmt - $ipmt_check);

        $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

        $val = $x - 1;
        $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
        $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);


      }
    }

    

    if($x / 12 == $counter){
     $counter++; 
    }

      
  } //die();

/*---------------VALUES WITH ENSLAVEMENT------------------*/
$counter  = 1;
  for($x = 1; $x <= 360; $x++){
    $e_a[] = $x;
    if($type_click == "B" || $type_click == "D" || $type_click == "H"){


    if(in_array($type_click,$grace) && $ten_value > 0){
      $madad = Bank_madad::where('years',$counter)->first();
      $prime1 = $madad['madad'];
      $prime2 = 100 + $prime1;

      $e_prime_years[] = $prime2; // with percentage
      $e_prime_years1[] = $prime2 / 1200;
      $prime_interest = $prime2 / 1200; //without Percentage

      $net_py_linked = $report1->ipmt($prime_interest,$x,$e_period,$e_mortgage);
      $net_linked_pmt  = $report1->pmt($prime_interest,$e_period,$e_mortgage);

      //$e_net_linked[] = round($net_linked_pmt - $net_py_linked);
      if($x > $ten_value ){
         $e_net_linked[] = round($net_linked_pmt - $net_py_linked);
        }else{
         $e_net_linked[] = 0;
        }
        

      $e_interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$e_period,$e_mortgage));


        if($x == 1){
            if($x > $ten_value){
              $e_left_pay[] = round(-($e_mortgage) - $net_pay_linked);
            }else{
              $e_left_pay[] = round(-$e_mortgage,3) ;
            }

          $e_left_pay_linked[] = round(-($e_mortgage) * (1 + $e_prime_years1[0]));
        }else{
          $c = $x - 2;
          $d = $x -1;
          $f = $ten_value + 1;
          $e_left_pay_linked[] = round($e_left_pay_linked[$c] * (1 + $e_prime_years1[$d]));
          if($x > $ten_value){

            if($f == $x){
              $gg = $x - 2;
              $e_left_pay[] =round($e_left_pay_linked[$gg] - $net_pay_linked);
            }else{
              $e_left_pay[] =round($e_left_pay[$c] - $net_pay_linked);
            }

          }else{
            $e_left_pay[] = round(-$e_mortgage,3) ;
           
          }
        }


      $ipmt_check = $report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage);
      $pmt  = $report1->pmt($e_interest_monthly,$e_period,$e_mortgage);

        if($x > $ten_value ){
          $e_ppmt_check[] = round($pmt - $ipmt_check);
        }else{
         $e_ppmt_check[] = 0;
        }

     

      $e_interest_final[] = round($report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage));
      $val = $x - 1;
      $e_mr[] = round($e_interest_final[$val] + $e_ppmt_check[$val]);
      $e_linked_mr[] = round($e_interest_linked_final[$val] + $e_net_linked[$val]);

    }else{

      $madad = Bank_madad::where('years',$counter)->first();
      $prime = $madad['madad'];
      $e_prime_years[] = $prime / 12;
      $prime_interest = $prime / 1200;
      $net_py_linked = $report1->ipmt($prime_interest,$x,$e_period,$e_mortgage);
      $net_linked_pmt  = $report1->pmt($prime_interest,$e_period,$e_mortgage);
      $e_net_linked[] = round($net_linked_pmt - $net_py_linked);

      $e_interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$e_period,$e_mortgage));

      if($x == 1){
        $e_left_pay[] = round(-($e_mortgage) - $net_pay_linked);
        $e_left_pay_linked[] = round(-($e_mortgage) * (1 + $e_prime_years[0]));
      }else{
        $c = $x - 2;
        $d = $x -1;

        $e_left_pay[] =round($e_left_pay[$c] + $net_pay_linked);
        $e_left_pay_linked[] = round($e_left_pay_linked[$c] * (1 + $e_prime_years[$d]));
      }

      $ipmt_check = $report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage);
      $pmt  = $report1->pmt($e_interest_monthly,$e_period,$e_mortgage);
      $e_ppmt_check[] = round($pmt - $ipmt_check);

      $e_interest_final[] = round($report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage));
      $val = $x - 1;
      $e_mr[] = round($e_interest_final[$val] + $e_ppmt_check[$val]);
      $e_linked_mr[] = round($e_interest_linked_final[$val] + $e_net_linked[$val]);

    }





    }else{

      if(in_array($type_click,$grace) && $ten_value > 0){

        $prime = Bank_prime::where('years',$counter)->first();
        $prime1 = $prime['prime'];
        $prime2 = 100 + $prime1;
        $e_prime_years[] = $prime2; // with percentage
        $e_prime_years1[] = $prime2 / 1200;
        $prime_interest = $prime2 / 1200; //without Percentage

        $net_py_linked = $report1->ipmt($prime_interest,$x,$e_period,$e_mortgage);
        $net_linked_pmt  = $report1->pmt($prime_interest,$e_period,$e_mortgage);
        //$e_net_linked[] = round($net_linked_pmt - $net_py_linked);
        if($x > $ten_value ){
         $e_net_linked[] = round($net_linked_pmt - $net_py_linked);
        }else{
         $e_net_linked[] = 0;
        }

        $net_pay_linked = round($net_linked_pmt - $net_py_linked);

        $e_interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$e_period,$e_mortgage));
        if($x == 1){
          $e_left_pay[] = round(-($e_mortgage) - $net_pay_linked);
          $e_left_pay_linked[] = round(-($e_mortgage) - $net_pay_linked);
        }else{
          $c = $x - 2;
          $e_left_pay[] =round($e_left_pay[$c] - $net_pay_linked);
          $e_left_pay_linked[] = round($e_left_pay_linked[$c] - $e_net_linked[$c]);
        }


        if($x == 1){

          if($x > $ten_value){
             $e_left_pay[] = round(-($e_mortgage) - $net_pay_linked);
          }else{
            $e_left_pay[] = round(-$e_mortgage,3) ;
          }

         $e_left_pay_linked[] = round($e_left_pay[0]);

        }else{
          $c = $x - 2;
          $f = $ten_value + 1;

          $e_left_pay_linked[] = round($e_left_pay_linked[$c] - $net_linked[$c]);

          if($x > $ten_value){


            if($f == $x){
              $gg = $x - 2;
              $e_left_pay[] =round($e_left_pay_linked[$gg] - $net_pay_linked);
            }else{
              $e_left_pay[] =round($e_left_pay[$c] - $net_pay_linked);
            }

          }else{
            $e_left_pay[] = round(-$e_mortgage,3) ;
           
          }
        }

        $ipmt_check = $report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage);
        $pmt  = $report1->pmt($e_interest_monthly,$e_period,$e_mortgage);
        //$e_ppmt_check[] = round($pmt - $ipmt_check);
        if($x > $ten_value ){
          $e_ppmt_check[] = round($pmt - $ipmt_check);
        }else{
         $e_ppmt_check[] = 0;
        }


        $e_interest_final[] = round($report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage));
        $val = $x - 1;
        $e_mr[] = round($e_interest_final[$val] + $e_ppmt_check[$val]);
        $e_linked_mr[] = round($e_interest_linked_final[$val] + $e_net_linked[$val]);
     
      }else{

        $prime = Bank_prime::where('years',$counter)->first();
        $prime = $prime['prime'];
        $e_prime_years[] = round($prime / 12,3);
        $prime_interest = $prime / 1200;

        $net_py_linked = $report1->ipmt($prime_interest,$x,$e_period,$e_mortgage);
        $net_linked_pmt  = $report1->pmt($prime_interest,$e_period,$e_mortgage);
        $e_net_linked[] = round($net_linked_pmt - $net_py_linked);
        $net_pay_linked = round($net_linked_pmt - $net_py_linked);

        $e_interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$e_period,$e_mortgage));
        if($x == 1){
          $e_left_pay[] = round(-($e_mortgage) - $net_pay_linked);
          $e_left_pay_linked[] = round(-($e_mortgage) - $net_pay_linked);
        }else{
          $c = $x - 2;
          $e_left_pay[] =round($e_left_pay[$c] - $net_pay_linked);
          $e_left_pay_linked[] = round($e_left_pay_linked[$c] - $e_net_linked[$c]);
        }

        $ipmt_check = $report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage);
        $pmt  = $report1->pmt($e_interest_monthly,$e_period,$e_mortgage);
        $e_ppmt_check[] = round($pmt - $ipmt_check);

        $e_interest_final[] = round($report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage));
        $val = $x - 1;
        $e_mr[] = round($e_interest_final[$val] + $e_ppmt_check[$val]);
        $e_linked_mr[] = round($e_interest_linked_final[$val] + $e_net_linked[$val]);
     
      }

    }
    if($x / 12 == $counter){
     $counter++; 
    }
    
  }



  $total_array = array(
    'ten_point_one' => $ten_value,
    'ten_point_two' => $ten_point_two,

    'a_field'=> $a,
    'prime'=>$prime_years,
    'net_pay' =>$ppmt_check,
    'net_pay_linked' => $net_linked,
    'interest_pay' => $interest_final,
    'interest_pay_linked' => $interest_linked_final,
    'left_pay' => $left_pay,
    'left_pay_linked' => $left_pay_linked,
    'mr'=> $mr,
    'linked_mr' =>$linked_mr,

    'e_a_field'=> $e_a,
    'e_prime'=>$e_prime_years,
    'e_net_pay' =>$e_ppmt_check,
    'e_net_pay_linked' => $e_net_linked,
    'e_interest_pay' => $e_interest_final,
    'e_interest_pay_linked' => $e_interest_linked_final,
    'e_left_pay' => $e_left_pay,
    'e_left_pay_linked' => $e_left_pay_linked,
    'e_mr'=> $e_mr,
    'e_linked_mr' =>$e_linked_mr,


    'final_a'=> $final_a,
    'final_b'=> $final_b,
    'final_c'=> $final_c,

    'ensl_a' => $ensl_a,
    'ensl_b' => $ensl_b,
    'ensl_c' => $ensl_c,

    'sum_a' => $sum_a,
    'sum_b' => $sum_b,
    'sum_c' => $sum_c,

    'grace' => $grace_string,

  );  

  return $total_array;
}



public function step_6(Request $request){

$report1 = new ReportController();

$type_ = $request->type;
$type = explode(',',$type_); 
$part_ = $request->part;
$part = explode(',',$part_); 
$years = $request->years;
$year_ar = explode(',',$years);
$interest_ = $request->interest;
$interest = explode(',',$interest_);
$morg_ = $request->morg;
$morg = explode(',',$morg_);
$pmt_ = $request->pmt;
$pmt = explode(',',$pmt_);  


$e_type_ = $request->e_type;
$e_type = explode(',',$e_type_); 
$e_part_ = $request->e_part;
$e_part = explode(',',$e_part_); 
$e_years_ = $request->e_years;
$e_years = explode(',',$e_years_); 
$e_interest_ = $request->e_interest;
$e_interest1 = explode(',',$e_interest_); 
$e_morg_ = $request->e_morg;
$e_morg = explode(',',$e_morg_);
$e_pmt_ = $request->e_pmt;
$e_pmt = explode(',',$e_pmt_); 

//print_r($e_interest);
//die();


$goods_array = array(

  'm_type' => $type,
  'm_part' => $part,
  'm_year' => $year_ar,
  'm_interest' => $interest,
  'm_morg' => $morg,
  'm_pmt' => $pmt,
  'e_m_type' => $e_type,
  'e_m_part' => $e_part,
  'e_m_year' => $e_years,
  'e_m_interest' => $e_interest1,
  'e_m_morg' => $e_morg,
  'e_m_pmt' => $e_pmt,
);


$user = $request->user_id;

$final_elg_mr = $request->final_elg_mr;

$years = array_filter($year_ar);

$years_min_raw = min($years);
$years_max_raw = max($years);

if($years_max_raw == $years_min_raw){
   $years_keys = array_keys($years);
}else{
  $years_min = array($years_min_raw);
  $years = array_diff($years,$years_min);
  $years_keys = array_keys($years);
}


if(in_array('A',$type)){
$func = $this->Best_tree_data_report_two_inbuilt($user,'A');
$step_1A = $func['step1'];
$step_2A = $func['step2'];
$step_3A = $func['step3'];
$step4_a = $this->step_four($user,'A',$step_3A,$step_2A,$step_1A);
$left_pay_link_a = $step4_a['left_pay_linked'];
$e_left_pay_link_a = $step4_a['e_left_pay_linked'];

}

if(in_array('B',$type)){
$funcb = $this->Best_tree_data_report_two_inbuilt($user,'B');
$step_1B = $funcb['step1'];
$step_2B = $funcb['step2'];
$step_3B = $funcb['step3'];
$step4_b = $this->step_four($user,'B',$step_3B,$step_2B,$step_1B);
$left_pay_link_b = $step4_b['left_pay_linked'];
$e_left_pay_link_b = $step4_b['e_left_pay_linked'];

}

if(in_array('D',$type)){
$funcd = $this->Best_tree_data_report_two_inbuilt($user,'D');
$step_1D = $funcd['step1'];
$step_2D = $funcd['step2'];
$step_3D = $funcd['step3'];
$step4_d = $this->step_four($user,'D',$step_3D,$step_2D,$step_1D);
$left_pay_link_d = $step4_d['left_pay_linked'];
$e_left_pay_link_d = $step4_d['e_left_pay_linked'];

}

if(in_array('H',$type)){
$funch = $this->Best_tree_data_report_two_inbuilt($user,'H');
$step_1H = $funch['step1'];
$step_2H = $funch['step2'];
$step_3H = $funch['step3'];
$step4_h = $this->step_four($user,'H',$step_3H,$step_2H,$step_1H);
$left_pay_link_h = $step4_h['left_pay_linked'];
$e_left_pay_link_h = $step4_h['e_left_pay_linked'];

}

if(in_array('F',$type)){
$funcf = $this->Best_tree_data_report_two_inbuilt($user,'F');
$step_1F = $funcf['step1'];
$step_2F = $funcf['step2'];
$step_3F = $funcf['step3'];
$step4_f = $this->step_four($user,'F',$step_3F,$step_2F,$step_1F);
$left_pay_link_f = $step4_f['left_pay_linked'];
$e_left_pay_link_f = $step4_f['e_left_pay_linked'];

}
if(in_array('G',$type)){
$funcg = $this->Best_tree_data_report_two_inbuilt($user,'G');
$step_1G = $funcg['step1'];
$step_2G = $funcg['step2'];
$step_3G = $funcg['step3'];
$step4_g = $this->step_four($user,'G',$step_3G,$step_2G,$step_1G);
$left_pay_link_g = $step4_g['left_pay_linked'];
$e_left_pay_link_g = $step4_g['e_left_pay_linked'];

}


foreach($years_keys as $ky){

  $val = $type[$ky];

  switch ($val) {
    case 'A':
      $left_pay_link =  $left_pay_link_a;
      $e_left_pay_link =  $e_left_pay_link_a;
      $type2 = 'prime';
      $step1 = $step_1A; 
      $step2 = $step_2A;
      $step3 = $step_3A;
    break;
    case 'B':
      $left_pay_link =  $left_pay_link_b;
      $e_left_pay_link =  $e_left_pay_link_b;
       $type2 = 'const_inter_linked';
       $step1 = $step_1B; 
        $step2 = $step_2B;
        $step3 = $step_3B;
    break;
    case 'D':
       $left_pay_link =  $left_pay_link_d;
       $e_left_pay_link =  $e_left_pay_link_d;
       $type2 = 'var_inter_5year_linked';
       $step1 = $step_1D; 
        $step2 = $step_2D;
        $step3 = $step_3D;
    break;
    case 'F':
      $left_pay_link =  $left_pay_link_f;
      $e_left_pay_link =  $e_left_pay_link_f;
      $type2 = 'euro_inter';
      $step1 = $step_1F; 
      $step2 = $step_2F;
      $step3 = $step_3F;
    break;
    case 'G':
      $left_pay_link =  $left_pay_link_g;
      $e_left_pay_link =  $e_left_pay_link_g;
      $type2 = 'dollar_inter';
      $step1 = $step_1G; 
      $step2 = $step_2G;
      $step3 = $step_3G;
    break;
    case 'H':
      $left_pay_link =  $left_pay_link_h;
      $e_left_pay_link =  $e_left_pay_link_h;
      $type2 = 'eligibility_inter';
      $step1 = $step_1H; 
      $step2 = $step_2H;
      $step3 = $step_3H;
    break;
    default:
      $left_pay_link =  $left_pay_link_a;
      $e_left_pay_link =  $e_left_pay_link_a;
      $type2 = 'prime';
      $step1 = $step_1A; 
      $step2 = $step_2A;
      $step3 = $step_3A;
    break;
  }

  $left_pay_links = array();
  $e_left_pay_links = array();
  $prime_deltas = array();
  $e_prime_deltas = array();
  $pmt = array();
  $e_pmt = array();
  $total_pmt = array();

    for ($i=30; $i > 3 ; $i--) { 
      $month = $i * 12;
      $months = $month - 1;
      $left_pay_links[] = $left_pay_link[$months];
      $left_pay_links1 = $left_pay_link[$months];

      $e_left_pay_links[] = $e_left_pay_link[$months];
      $e_left_pay_links1 = $e_left_pay_link[$months];

      $prime_delta = Bank_interest::where('bank_name','AA')->where('funding_type','FundingA')->where('years', $i)->get();

      $prime_deltas[] = $prime_delta[0]->$type2;
      $prime_deltas1 = $prime_delta[0]->$type2;


      $prime_delta_enslavement = Bank_interest::where('bank_name','AA')->where('funding_type','Enslavement')->where('years', $i)->get();
      $e_prime_deltas[] = $prime_delta_enslavement[0]->$type2;
      $e_prime_deltas1 = $prime_delta_enslavement[0]->$type2;

      $pmt[] = $report1->pmt_calculation($left_pay_links1,$i,$prime_deltas1);
      $pmt1 = $report1->pmt_calculation($left_pay_links1,$i,$prime_deltas1);
      $e_pmt[] = $report1->pmt_calculation($e_left_pay_links1,$i,$e_prime_deltas1);
      $e_pmt1 = $report1->pmt_calculation($e_left_pay_links1,$i,$e_prime_deltas1);

     $total_pmt[] = $pmt1 +  $e_pmt1;

    }

    $gg[] = array(
      'step1' => $step1,
      'step2' => $step2,
      'step3' => $step3,
      'loan_type' => $type[$ky],
      'part' => $part[$ky],
      'left_mortgage' => $left_pay_links,
      'prime_deltas' => $prime_deltas,
      'e_left_mortgage' => $e_left_pay_links,
      'e_prime_deltas' => $e_prime_deltas,
      'pmt' => $pmt,
      'epmt' => $e_pmt,
      'totalPmt' => $total_pmt,
    );
}

  $sum = count($gg);
 
 switch ($sum) {
    case '1':
      $totalPmt_fun =   $gg[0]['totalPmt'];
      for ($i=0; $i < 26 ; $i++) { 
        $one =   $gg[0]['totalPmt'];
        $pmt1 = $gg[0]['pmt'];
        $e_pmt1 = $gg[0]['epmt'];

        $ii = 26 - $i;
        $totalPmt_fun[$i] = $one[$ii];
        $final_PMT[$i] = $pmt1[$ii];
        $e_final_PMT[$i] = $e_pmt1[$ii]; 

        if($totalPmt_fun[$i] > $final_elg_mr){
            $final_val = $totalPmt_fun[$i];
            $year = $i + 4;

          $loan_type1 = $gg[0]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);
          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

            $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o];

             
            }
             $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );

          $main_array = array(
            'loan_type1' => $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'seven_table1' => $seven_table_1,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
          break;
        }else{
          $final_val = round($totalPmt_fun[$i],2);
          $year = $i + 4; 

          $loan_type1 = $gg[0]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);
          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o];

             
            }
             $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );


          $main_array = array(
            'loan_type1' => $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'seven_table1' => $seven_table_1,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
        }


      }
    
    break;
    case '2':
     $one =   $gg[0]['totalPmt'];
     $two =   $gg[1]['totalPmt'];

     $pmt1 = $gg[0]['pmt'];
     $pmt2 = $gg[1]['pmt'];

     $e_pmt1 = $gg[0]['epmt'];
     $e_pmt2 = $gg[1]['epmt'];


     for ($i=26; $i >= 0 ; $i--) { 
        $ii = 26 - $i;
        $totalPmt_fun[$i] = $one[$ii] + $two[$ii];
        $final_PMT[$i] = $pmt1[$ii] + $pmt2[$ii];
        $e_final_PMT[$i] = $e_pmt1[$ii] + $e_pmt2[$ii];

         if($totalPmt_fun[$i] > $final_elg_mr){
          $final_val = round($totalPmt_fun[$i],2);
          $year = $i + 4; 

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);



            $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o];

             
            }

            $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );

        
          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'loan_type2' =>  $gg[1]['loan_type'],
            'part1' => $gg[0]['part'],
            'part2' => $gg[1]['part'],
            
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],


            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],
            'final_val' => $final_val,

            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,

            'step_8' => $step_8,


            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,

          );
          //return $main_array;
          break;
        }else{
          $final_val = round($totalPmt_fun[$i],2);
          $year = $i + 4;

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

           $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);



            $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o];

             
            }

            $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );

         
          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
        }
      }
    break;
    case '3':
      $one =   $gg[0]['totalPmt'];
      $two =   $gg[1]['totalPmt'];
      $three = $gg[2]['totalPmt'];

      $pmt1 = $gg[0]['pmt'];
      $pmt2 = $gg[1]['pmt'];
      $pmt3 = $gg[2]['pmt'];

      $e_pmt1 = $gg[0]['epmt'];
      $e_pmt2 = $gg[1]['epmt'];
      $e_pmt3 = $gg[2]['epmt'];

      for ($i=0; $i < 26 ; $i++) { 
        
        //$totalPmt_fun[$i] = $one[$i] + $two[$i] + $three[$i];

        $ii = 26 - $i;
        $totalPmt_fun[$i] = $one[$ii] + $two[$ii] + $three[$ii];
        $final_PMT[$i] = $pmt1[$ii] + $pmt2[$ii] + $pmt3[$ii];
        $e_final_PMT[$i] = $e_pmt1[$ii] + $e_pmt2[$ii]+$e_pmt3[$ii];


        if($totalPmt_fun[$i] > $final_elg_mr){
          $final_val = $totalPmt_fun[$i];
          $year = $i + 4; 

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];
          $loan_type3 = $gg[2]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $step1_3 =  $gg[2]['step1'];
          $step2_3 =  $gg[2]['step2'];
          $step3_3 =  $gg[2]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $result_table_3 =  $this->step_four_comeback_with_six($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);


          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_3 =  $this->step_four_comeback_with_seven($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);



            $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o] + $seven_table_3['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o] + $seven_table_3['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o] + $seven_table_3['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o] + $seven_table_3['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o] + $seven_table_3['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o] + $seven_table_3['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o] + $seven_table_3['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o] + $seven_table_3['total_linked_mr'][$o];

             
            }

            $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );

           

          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'loan_type3' =>  $gg[2]['loan_type'],
            'part3' => $gg[2]['part'], 
            'left_mortgage3' =>  $gg[2]['left_mortgage'],
            'prime_deltas3' =>  $gg[2]['prime_deltas'],
            'pmt3' =>  $gg[2]['pmt'],
            'epmt3' =>  $gg[2]['epmt'],
            'totalPmt3' =>  $gg[2]['totalPmt'],
            'e_left_mortgage3' =>  $gg[2]['e_left_mortgage'],
            'e_prime_deltas3' =>  $gg[2]['e_prime_deltas'],
            
            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,
            'result_table3' => $result_table_3,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,
            'seven_table3' => $seven_table_3,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
            
          );
          //return $main_array;
          break;
        }else{
          $final_val = round($totalPmt_fun[$i],2);
          $year = $i + 4;

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];
          $loan_type3 = $gg[2]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $step1_3 =  $gg[2]['step1'];
          $step2_3 =  $gg[2]['step2'];
          $step3_3 =  $gg[2]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $result_table_3 =  $this->step_four_comeback_with_six($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_3 =  $this->step_four_comeback_with_seven($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);


            $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o] + $seven_table_3['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o] + $seven_table_3['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o] + $seven_table_3['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o] + $seven_table_3['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o] + $seven_table_3['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o] + $seven_table_3['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o] + $seven_table_3['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o] + $seven_table_3['total_linked_mr'][$o];

             
            }

            $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );



          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'loan_type3' =>  $gg[2]['loan_type'],
            'part3' => $gg[2]['part'],
            'left_mortgage3' =>  $gg[2]['left_mortgage'],
            'prime_deltas3' =>  $gg[2]['prime_deltas'],
            'pmt3' =>  $gg[2]['pmt'],
            'epmt3' =>  $gg[2]['epmt'],
            'totalPmt3' =>  $gg[2]['totalPmt'],
            'e_left_mortgage3' =>  $gg[2]['e_left_mortgage'],
            'e_prime_deltas3' =>  $gg[2]['e_prime_deltas'],

            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,
            'result_table3' => $result_table_3,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,
            'seven_table3' => $seven_table_3,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
        }



      }
    break;
    case '4':
      $one =    $gg[0]['totalPmt'];
      $two =    $gg[1]['totalPmt'];
      $three =  $gg[2]['totalPmt'];
      $four =   $gg[3]['totalPmt'];

      $pmt1 = $gg[0]['pmt'];
      $pmt2 = $gg[1]['pmt'];
      $pmt3 = $gg[2]['pmt'];
      $pmt4 = $gg[3]['pmt'];

      $e_pmt1 = $gg[0]['epmt'];
      $e_pmt2 = $gg[1]['epmt'];
      $e_pmt3 = $gg[2]['epmt'];
      $e_pmt4 = $gg[3]['epmt'];


      for ($i=0; $i < 26 ; $i++) { 
  
        //$totalPmt_fun[$i] = $one[$i] + $two[$i] + $three[$i] + $four[$i];

        $ii = 26 - $i;
        $totalPmt_fun[$i] = $one[$ii] + $two[$ii] + $three[$ii] + $four[$ii];
        $final_PMT[$i] = $pmt1[$ii] + $pmt2[$ii] + $pmt3[$ii]  + $pmt4[$ii];
        $e_final_PMT[$i] = $e_pmt1[$ii] + $e_pmt2[$ii] + $e_pmt3[$ii] + $e_pmt4[$ii];

        if($totalPmt_fun[$i] > $final_elg_mr){
          $final_val = $totalPmt_fun[$i];
          $year = $i + 4; 


          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];
          $loan_type3 = $gg[2]['loan_type'];
          $loan_type4 = $gg[3]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $step1_3 =  $gg[2]['step1'];
          $step2_3 =  $gg[2]['step2'];
          $step3_3 =  $gg[2]['step3'];

          $step1_4 =  $gg[3]['step1'];
          $step2_4 =  $gg[3]['step2'];
          $step3_4 =  $gg[3]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $result_table_3 =  $this->step_four_comeback_with_six($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $result_table_4 =  $this->step_four_comeback_with_six($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year);


          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_3 =  $this->step_four_comeback_with_seven($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $seven_table_4 =  $this->step_four_comeback_with_seven($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year);

            $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o] + $seven_table_3['total_net_pay'][$o] + $seven_table_4['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o] + $seven_table_3['total_net_pay_linked'][$o] + $seven_table_4['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o] + $seven_table_3['total_interest_pay'][$o] + $seven_table_4['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o] + $seven_table_3['total_interest_pay_linked'][$o] + $seven_table_4['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o] + $seven_table_3['total_left_pay'][$o] + $seven_table_4['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o] + $seven_table_3['total_left_pay_linked'][$o] + $seven_table_4['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o] + $seven_table_3['total_mr'][$o] + $seven_table_4['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o] + $seven_table_3['total_linked_mr'][$o] + $seven_table_4['total_linked_mr'][$o];

             
            }

            $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );



          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'loan_type3' =>  $gg[2]['loan_type'],
            'part3' => $gg[2]['part'],
            'left_mortgage3' =>  $gg[2]['left_mortgage'],
            'prime_deltas3' =>  $gg[2]['prime_deltas'],
            'pmt3' =>  $gg[2]['pmt'],
            'epmt3' =>  $gg[2]['epmt'],
            'totalPmt3' =>  $gg[2]['totalPmt'],
            'e_left_mortgage3' =>  $gg[2]['e_left_mortgage'],
            'e_prime_deltas3' =>  $gg[2]['e_prime_deltas'],

            'loan_type4' =>  $gg[3]['loan_type'],
            'part4' => $gg[3]['part'],
            'left_mortgage4' =>  $gg[3]['left_mortgage'],
            'prime_deltas4' =>  $gg[3]['prime_deltas'],
            'pmt4' =>  $gg[3]['pmt'],
            'epmt4' =>  $gg[3]['epmt'],
            'totalPmt4' =>  $gg[3]['totalPmt'],
            'e_left_mortgage4' =>  $gg[3]['e_left_mortgage'],
            'e_prime_deltas4' =>  $gg[3]['e_prime_deltas'],

            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,
            'result_table3' => $result_table_3,
            'result_table4' => $result_table_4,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,
            'seven_table3' => $seven_table_3,
            'seven_table4' => $seven_table_4,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,

          );
          //return $main_array;
          break;
        }else{
          $final_val = round($totalPmt_fun[$i],2);
          $year = $i + 4;

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];
          $loan_type3 = $gg[2]['loan_type'];
          $loan_type4 = $gg[3]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $step1_3 =  $gg[2]['step1'];
          $step2_3 =  $gg[2]['step2'];
          $step3_3 =  $gg[2]['step3'];

          $step1_4 =  $gg[3]['step1'];
          $step2_4 =  $gg[3]['step2'];
          $step3_4 =  $gg[3]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $result_table_3 =  $this->step_four_comeback_with_six($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $result_table_4 =  $this->step_four_comeback_with_six($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year); 


          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_3 =  $this->step_four_comeback_with_seven($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $seven_table_4 =  $this->step_four_comeback_with_seven($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year);


            $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o] + $seven_table_3['total_net_pay'][$o] + $seven_table_4['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o] + $seven_table_3['total_net_pay_linked'][$o] + $seven_table_4['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o] + $seven_table_3['total_interest_pay'][$o] + $seven_table_4['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o] + $seven_table_3['total_interest_pay_linked'][$o] + $seven_table_4['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o] + $seven_table_3['total_left_pay'][$o] + $seven_table_4['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o] + $seven_table_3['total_left_pay_linked'][$o] + $seven_table_4['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o] + $seven_table_3['total_mr'][$o] + $seven_table_4['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o] + $seven_table_3['total_linked_mr'][$o] + $seven_table_4['total_linked_mr'][$o];

             
            }

            $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );



          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'loan_type3' =>  $gg[2]['loan_type'],
            'part3' => $gg[2]['part'],
            'left_mortgage3' =>  $gg[2]['left_mortgage'],
            'prime_deltas3' =>  $gg[2]['prime_deltas'],
            'pmt3' =>  $gg[2]['pmt'],
            'epmt3' =>  $gg[2]['epmt'],
            'totalPmt3' =>  $gg[2]['totalPmt'],
            'e_left_mortgage3' =>  $gg[2]['e_left_mortgage'],
            'e_prime_deltas3' =>  $gg[2]['e_prime_deltas'],

            'loan_type4' =>  $gg[3]['loan_type'],
            'part4' => $gg[3]['part'],
            'left_mortgage4' =>  $gg[3]['left_mortgage'],
            'prime_deltas4' =>  $gg[3]['prime_deltas'],
            'pmt4' =>  $gg[3]['pmt'],
            'epmt4' =>  $gg[3]['epmt'],
            'totalPmt4' =>  $gg[3]['totalPmt'],
            'e_left_mortgage4' =>  $gg[3]['e_left_mortgage'],
            'e_prime_deltas4' =>  $gg[3]['e_prime_deltas'],

            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,
            'result_table3' => $result_table_3,
            'result_table4' => $result_table_4,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,
            'seven_table3' => $seven_table_3,
            'seven_table4' => $seven_table_4,

            'step_8' => $step_8,


            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,

          );
          //return $main_array;
        }


      }

    break;
    case '5':
      $one =    $gg[0]['totalPmt'];
      $two =    $gg[1]['totalPmt'];
      $three =  $gg[2]['totalPmt'];
      $four =   $gg[3]['totalPmt'];
      $five =   $gg[4]['totalPmt'];


      $pmt1 = $gg[0]['pmt'];
      $pmt2 = $gg[1]['pmt'];
      $pmt3 = $gg[2]['pmt'];
      $pmt4 = $gg[3]['pmt'];
      $pmt5 = $gg[3]['pmt'];

      $e_pmt1 = $gg[0]['epmt'];
      $e_pmt2 = $gg[1]['epmt'];
      $e_pmt3 = $gg[2]['epmt'];
      $e_pmt4 = $gg[3]['epmt'];
      $e_pmt5 = $gg[3]['epmt'];



      for ($i=0; $i < 26 ; $i++) { 
  
        $totalPmt_fun[$i] = $one[$i] + $two[$i] + $three[$i] + $four[$i] + $five[$i];

        $ii = 26 - $i;
        $totalPmt_fun[$i] = $one[$ii] + $two[$ii] + $three[$ii] + $four[$ii] + $five[$ii];
        $final_PMT[$i] = $pmt1[$ii] + $pmt2[$ii] + $pmt3[$ii]  + $pmt4[$ii] + $pmt5[$ii];
        $e_final_PMT[$i] = $e_pmt1[$ii] + $e_pmt2[$ii] + $e_pmt3[$ii] + $e_pmt4[$ii] + $e_pmt5[$ii];




        if($totalPmt_fun[$i] > $final_elg_mr){
          $final_val = $totalPmt_fun[$i];
          $year = $i + 4; 

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];
          $loan_type3 = $gg[2]['loan_type'];
          $loan_type4 = $gg[3]['loan_type'];
          $loan_type5 = $gg[4]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $step1_3 =  $gg[2]['step1'];
          $step2_3 =  $gg[2]['step2'];
          $step3_3 =  $gg[2]['step3'];

          $step1_4 =  $gg[3]['step1'];
          $step2_4 =  $gg[3]['step2'];
          $step3_4 =  $gg[3]['step3'];

          $step1_5 =  $gg[4]['step1'];
          $step2_5 =  $gg[4]['step2'];
          $step3_5 =  $gg[4]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $result_table_3 =  $this->step_four_comeback_with_six($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $result_table_4 =  $this->step_four_comeback_with_six($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year); 

          $result_table_5 =  $this->step_four_comeback_with_six($user,$loan_type5,$step3_5,$step2_5,$step1_5,$final_val,$year);

          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_3 =  $this->step_four_comeback_with_seven($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $seven_table_4 =  $this->step_four_comeback_with_seven($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year);

          $seven_table_5 =  $this->step_four_comeback_with_seven($user,$loan_type5,$step3_5,$step2_5,$step1_5,$final_val,$year);


          $total_net_pay = array();
                $total_net_pay_linked = array();
                $total_interest_pay = array();
                $total_interest_pay_linked = array();
                $total_left_pay = array();
                $total_left_pay_linked = array();
                $total_mr = array();
                $total_linked_mr = array();

                for ($o=0; $o < 360 ; $o++) { 

                  $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o] + $seven_table_3['total_net_pay'][$o] + $seven_table_4['total_net_pay'][$o] + $seven_table_5['total_net_pay'][$o];

                    $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o] + $seven_table_3['total_net_pay_linked'][$o] + $seven_table_4['total_net_pay_linked'][$o] + $seven_table_5['total_net_pay_linked'][$o];

                    $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o] + $seven_table_3['total_interest_pay'][$o] + $seven_table_4['total_interest_pay'][$o] + $seven_table_5['total_interest_pay'][$o];

                    $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o] + $seven_table_3['total_interest_pay_linked'][$o] + $seven_table_4['total_interest_pay_linked'][$o] + $seven_table_5['total_interest_pay_linked'][$o];

                    $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o] + $seven_table_3['total_left_pay'][$o] + $seven_table_4['total_left_pay'][$o] + $seven_table_5['total_left_pay'][$o];

                    $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o] + $seven_table_3['total_left_pay_linked'][$o] + $seven_table_4['total_left_pay_linked'][$o] + $seven_table_5['total_left_pay_linked'][$o];

                    $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o] + $seven_table_3['total_mr'][$o] + $seven_table_4['total_mr'][$o] + $seven_table_5['total_mr'][$o];

                    $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o] + $seven_table_3['total_linked_mr'][$o] + $seven_table_4['total_linked_mr'][$o] + $seven_table_5['total_linked_mr'][$o];

                 
                }

                $step_8 = array(
                  'total_net_pay' =>$total_net_pay,
                  'total_net_pay_linked' => $total_net_pay_linked,
                  'total_interest_pay' => $total_interest_pay,
                  'total_interest_pay_linked' => $total_interest_pay_linked,
                  'total_left_pay' => $total_left_pay,
                  'total_left_pay_linked' => $total_left_pay_linked,
                  'total_mr'=> $total_mr,
                  'total_linked_mr' =>$total_linked_mr,
                );




          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'loan_type3' =>  $gg[2]['loan_type'],
            'part3' => $gg[2]['part'],
            'left_mortgage3' =>  $gg[2]['left_mortgage'],
            'prime_deltas3' =>  $gg[2]['prime_deltas'],
            'pmt3' =>  $gg[2]['pmt'],
            'epmt3' =>  $gg[2]['epmt'],
            'totalPmt3' =>  $gg[2]['totalPmt'],
            'e_left_mortgage3' =>  $gg[2]['e_left_mortgage'],
            'e_prime_deltas3' =>  $gg[2]['e_prime_deltas'],

            'loan_type4' =>  $gg[3]['loan_type'],
            'part4' => $gg[3]['part'],
            'left_mortgage4' =>  $gg[3]['left_mortgage'],
            'prime_deltas4' =>  $gg[3]['prime_deltas'],
            'pmt4' =>  $gg[3]['pmt'],
            'epmt4' =>  $gg[3]['epmt'],
            'totalPmt4' =>  $gg[3]['totalPmt'],
            'e_left_mortgage4' =>  $gg[3]['e_left_mortgage'],
            'e_prime_deltas4' =>  $gg[3]['e_prime_deltas'],

            'loan_type5' =>  $gg[4]['loan_type'],
            'part5' => $gg[4]['part'],
            'left_mortgage5' =>  $gg[4]['left_mortgage'],
            'prime_deltas5' =>  $gg[4]['prime_deltas'],
            'pmt5' =>  $gg[4]['pmt'],
            'epmt5' =>  $gg[4]['epmt'],
            'totalPmt5' =>  $gg[4]['totalPmt'],
            'e_left_mortgage5' =>  $gg[4]['e_left_mortgage'],
            'e_prime_deltas5' =>  $gg[4]['e_prime_deltas'],

            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,
            'result_table3' => $result_table_3,
            'result_table4' => $result_table_4,
            'result_table5' => $result_table_5,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,
            'seven_table3' => $seven_table_3,
            'seven_table4' => $seven_table_4,
            'seven_table5' => $seven_table_5,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,

          );
          //return $main_array;
          break;
        }else{
          $final_val = round($totalPmt_fun[$i],2);
          $year = $i + 4;

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];
          $loan_type3 = $gg[2]['loan_type'];
          $loan_type4 = $gg[3]['loan_type'];
          $loan_type5 = $gg[4]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $step1_3 =  $gg[2]['step1'];
          $step2_3 =  $gg[2]['step2'];
          $step3_3 =  $gg[2]['step3'];

          $step1_4 =  $gg[3]['step1'];
          $step2_4 =  $gg[3]['step2'];
          $step3_4 =  $gg[3]['step3'];

          $step1_5 =  $gg[4]['step1'];
          $step2_5 =  $gg[4]['step2'];
          $step3_5 =  $gg[4]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $result_table_3 =  $this->step_four_comeback_with_six($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $result_table_4 =  $this->step_four_comeback_with_six($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year); 

          $result_table_5 =  $this->step_four_comeback_with_six($user,$loan_type5,$step3_5,$step2_5,$step1_5,$final_val,$year);

          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_3 =  $this->step_four_comeback_with_seven($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $seven_table_4 =  $this->step_four_comeback_with_seven($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year);

          $seven_table_5 =  $this->step_four_comeback_with_seven($user,$loan_type5,$step3_5,$step2_5,$step1_5,$final_val,$year);



                $total_net_pay = array();
                $total_net_pay_linked = array();
                $total_interest_pay = array();
                $total_interest_pay_linked = array();
                $total_left_pay = array();
                $total_left_pay_linked = array();
                $total_mr = array();
                $total_linked_mr = array();

                for ($o=0; $o < 360 ; $o++) { 

                  $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o] + $seven_table_3['total_net_pay'][$o] + $seven_table_4['total_net_pay'][$o] + $seven_table_5['total_net_pay'][$o];

                    $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o] + $seven_table_3['total_net_pay_linked'][$o] + $seven_table_4['total_net_pay_linked'][$o] + $seven_table_5['total_net_pay_linked'][$o];

                    $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o] + $seven_table_3['total_interest_pay'][$o] + $seven_table_4['total_interest_pay'][$o] + $seven_table_5['total_interest_pay'][$o];

                    $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o] + $seven_table_3['total_interest_pay_linked'][$o] + $seven_table_4['total_interest_pay_linked'][$o] + $seven_table_5['total_interest_pay_linked'][$o];

                    $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o] + $seven_table_3['total_left_pay'][$o] + $seven_table_4['total_left_pay'][$o] + $seven_table_5['total_left_pay'][$o];

                    $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o] + $seven_table_3['total_left_pay_linked'][$o] + $seven_table_4['total_left_pay_linked'][$o] + $seven_table_5['total_left_pay_linked'][$o];

                    $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o] + $seven_table_3['total_mr'][$o] + $seven_table_4['total_mr'][$o] + $seven_table_5['total_mr'][$o];

                    $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o] + $seven_table_3['total_linked_mr'][$o] + $seven_table_4['total_linked_mr'][$o] + $seven_table_5['total_linked_mr'][$o];

                 
                }

                $step_8 = array(
                  'total_net_pay' =>$total_net_pay,
                  'total_net_pay_linked' => $total_net_pay_linked,
                  'total_interest_pay' => $total_interest_pay,
                  'total_interest_pay_linked' => $total_interest_pay_linked,
                  'total_left_pay' => $total_left_pay,
                  'total_left_pay_linked' => $total_left_pay_linked,
                  'total_mr'=> $total_mr,
                  'total_linked_mr' =>$total_linked_mr,
                );


 

          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'loan_type3' =>  $gg[2]['loan_type'],
            'part3' => $gg[2]['part'],
            'left_mortgage3' =>  $gg[2]['left_mortgage'],
            'prime_deltas3' =>  $gg[2]['prime_deltas'],
            'pmt3' =>  $gg[2]['pmt'],
            'epmt3' =>  $gg[2]['epmt'],
            'totalPmt3' =>  $gg[2]['totalPmt'],
            'e_left_mortgage3' =>  $gg[2]['e_left_mortgage'],
            'e_prime_deltas3' =>  $gg[2]['e_prime_deltas'],

            'loan_type4' =>  $gg[3]['loan_type'],
            'part4' => $gg[3]['part'],
            'left_mortgage4' =>  $gg[3]['left_mortgage'],
            'prime_deltas4' =>  $gg[3]['prime_deltas'],
            'pmt4' =>  $gg[3]['pmt'],
            'epmt4' =>  $gg[3]['epmt'],
            'totalPmt4' =>  $gg[3]['totalPmt'],
            'e_left_mortgage4' =>  $gg[3]['e_left_mortgage'],
            'e_prime_deltas4' =>  $gg[3]['e_prime_deltas'],

            'loan_type5' =>  $gg[4]['loan_type'],
            'part5' => $gg[4]['part'],
            'left_mortgage5' =>  $gg[4]['left_mortgage'],
            'prime_deltas5' =>  $gg[4]['prime_deltas'],
            'pmt5' =>  $gg[4]['pmt'],
            'epmt5' =>  $gg[4]['epmt'],
            'totalPmt5' =>  $gg[4]['totalPmt'],
            'e_left_mortgage5' =>  $gg[4]['e_left_mortgage'],
            'e_prime_deltas5' =>  $gg[4]['e_prime_deltas'],

            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,
            'result_table3' => $result_table_3,
            'result_table4' => $result_table_4,
            'result_table5' => $result_table_5,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,
            'seven_table3' => $seven_table_3,
            'seven_table4' => $seven_table_4,
            'seven_table5' => $seven_table_5,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
        }

      }
 
    break;
    case '6':
      $one =    $gg[0]['totalPmt'];
      $two =    $gg[1]['totalPmt'];
      $three =  $gg[2]['totalPmt'];
      $four =   $gg[3]['totalPmt'];
      $five =   $gg[4]['totalPmt'];
      $six =    $gg[5]['totalPmt'];

      $pmt1 = $gg[0]['pmt'];
      $pmt2 = $gg[1]['pmt'];
      $pmt3 = $gg[2]['pmt'];
      $pmt4 = $gg[3]['pmt'];
      $pmt5 = $gg[4]['pmt'];
      $pmt6 = $gg[5]['pmt'];

      $e_pmt1 = $gg[0]['epmt'];
      $e_pmt2 = $gg[1]['epmt'];
      $e_pmt3 = $gg[2]['epmt'];
      $e_pmt4 = $gg[3]['epmt'];
      $e_pmt5 = $gg[4]['epmt'];
      $e_pmt6 = $gg[5]['epmt'];




      for ($i=0; $i < 26 ; $i++) { 
  
        $totalPmt_fun[$i] = $one[$i] + $two[$i] + $three[$i] + $four[$i] + $five[$i] + $six[$i];

        $ii = 26 - $i;
        $totalPmt_fun[$i] = $one[$ii] + $two[$ii] + $three[$ii] + $four[$ii] + $five[$ii] + $six[$i];
        $final_PMT[$i] = $pmt1[$ii] + $pmt2[$ii] + $pmt3[$ii]  + $pmt4[$ii] + $pmt5[$ii] + $pmt6[$ii];
        $e_final_PMT[$i] = $e_pmt1[$ii] + $e_pmt2[$ii] + $e_pmt3[$ii] + $e_pmt4[$ii] + $e_pmt5[$ii] + $e_pmt6[$ii];

        if($totalPmt_fun[$i] > $final_elg_mr){
          $final_val = $totalPmt_fun[$i];
          $year = $i + 4; 

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];
          $loan_type3 = $gg[2]['loan_type'];
          $loan_type4 = $gg[3]['loan_type'];
          $loan_type5 = $gg[4]['loan_type'];
          $loan_type6 = $gg[5]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $step1_3 =  $gg[2]['step1'];
          $step2_3 =  $gg[2]['step2'];
          $step3_3 =  $gg[2]['step3'];

          $step1_4 =  $gg[3]['step1'];
          $step2_4 =  $gg[3]['step2'];
          $step3_4 =  $gg[3]['step3'];

          $step1_5 =  $gg[4]['step1'];
          $step2_5 =  $gg[4]['step2'];
          $step3_5 =  $gg[4]['step3'];


          $step1_6 =  $gg[5]['step1'];
          $step2_6 =  $gg[5]['step2'];
          $step3_6 =  $gg[5]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $result_table_3 =  $this->step_four_comeback_with_six($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $result_table_4 =  $this->step_four_comeback_with_six($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year); 

          $result_table_5 =  $this->step_four_comeback_with_six($user,$loan_type5,$step3_5,$step2_5,$step1_5,$final_val,$year);

          $result_table_6 =  $this->step_four_comeback_with_six($user,$loan_type6,$step3_6,$step2_6,$step1_6,$final_val,$year);

          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_3 =  $this->step_four_comeback_with_seven($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $seven_table_4 =  $this->step_four_comeback_with_seven($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year);

          $seven_table_5 =  $this->step_four_comeback_with_seven($user,$loan_type5,$step3_5,$step2_5,$step1_5,$final_val,$year);

          $seven_table_6 =  $this->step_four_comeback_with_seven($user,$loan_type6,$step3_6,$step2_6,$step1_6,$final_val,$year);


               $total_net_pay = array();
                $total_net_pay_linked = array();
                $total_interest_pay = array();
                $total_interest_pay_linked = array();
                $total_left_pay = array();
                $total_left_pay_linked = array();
                $total_mr = array();
                $total_linked_mr = array();

                for ($o=0; $o < 360 ; $o++) { 

                  $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o] + $seven_table_3['total_net_pay'][$o] + $seven_table_4['total_net_pay'][$o] + $seven_table_5['total_net_pay'][$o] + $seven_table_6['total_net_pay'][$o];

                    $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o] + $seven_table_3['total_net_pay_linked'][$o] + $seven_table_4['total_net_pay_linked'][$o] + $seven_table_5['total_net_pay_linked'][$o] + $seven_table_6['total_net_pay_linked'][$o];

                    $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o] + $seven_table_3['total_interest_pay'][$o] + $seven_table_4['total_interest_pay'][$o] + $seven_table_5['total_interest_pay'][$o] + $seven_table_6['total_interest_pay'][$o];

                    $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o] + $seven_table_3['total_interest_pay_linked'][$o] + $seven_table_4['total_interest_pay_linked'][$o] + $seven_table_5['total_interest_pay_linked'][$o] + $seven_table_6['total_interest_pay_linked'][$o];

                    $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o] + $seven_table_3['total_left_pay'][$o] + $seven_table_4['total_left_pay'][$o] + $seven_table_5['total_left_pay'][$o] + $seven_table_6['total_left_pay'][$o];

                    $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o] + $seven_table_3['total_left_pay_linked'][$o] + $seven_table_4['total_left_pay_linked'][$o] + $seven_table_5['total_left_pay_linked'][$o] + $seven_table_6['total_left_pay_linked'][$o];

                    $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o] + $seven_table_3['total_mr'][$o] + $seven_table_4['total_mr'][$o] + $seven_table_5['total_mr'][$o] + $seven_table_6['total_mr'][$o];

                    $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o] + $seven_table_3['total_linked_mr'][$o] + $seven_table_4['total_linked_mr'][$o] + $seven_table_5['total_linked_mr'][$o] + $seven_table_6['total_linked_mr'][$o];

                 
                }

                $step_8 = array(
                  'total_net_pay' =>$total_net_pay,
                  'total_net_pay_linked' => $total_net_pay_linked,
                  'total_interest_pay' => $total_interest_pay,
                  'total_interest_pay_linked' => $total_interest_pay_linked,
                  'total_left_pay' => $total_left_pay,
                  'total_left_pay_linked' => $total_left_pay_linked,
                  'total_mr'=> $total_mr,
                  'total_linked_mr' =>$total_linked_mr,


                );


          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'loan_type3' =>  $gg[2]['loan_type'],
            'part3' => $gg[2]['part'],
            'left_mortgage3' =>  $gg[2]['left_mortgage'],
            'prime_deltas3' =>  $gg[2]['prime_deltas'],
            'pmt3' =>  $gg[2]['pmt'],
            'epmt3' =>  $gg[2]['epmt'],
            'totalPmt3' =>  $gg[2]['totalPmt'],
            'e_left_mortgage2' =>  $gg[3]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[3]['e_prime_deltas'],

            'loan_type4' =>  $gg[3]['loan_type'],
            'part4' => $gg[3]['part'],
            'left_mortgage4' =>  $gg[3]['left_mortgage'],
            'prime_deltas4' =>  $gg[3]['prime_deltas'],
            'pmt4' =>  $gg[3]['pmt'],
            'epmt4' =>  $gg[3]['epmt'],
            'totalPmt4' =>  $gg[3]['totalPmt'],
            'e_left_mortgage4' =>  $gg[3]['e_left_mortgage'],
            'e_prime_deltas4' =>  $gg[3]['e_prime_deltas'],

            'loan_type5' =>  $gg[4]['loan_type'],
            'part5' => $gg[4]['part'],
            'left_mortgage5' =>  $gg[4]['left_mortgage'],
            'prime_deltas5' =>  $gg[4]['prime_deltas'],
            'pmt5' =>  $gg[4]['pmt'],
            'epmt5' =>  $gg[4]['epmt'],
            'totalPmt5' =>  $gg[4]['totalPmt'],
            'e_left_mortgage5' =>  $gg[4]['e_left_mortgage'],
            'e_prime_deltas5' =>  $gg[4]['e_prime_deltas'],

            'loan_type6' =>  $gg[5]['loan_type'],
            'part6' => $gg[5]['part'],
            'left_mortgage6' =>  $gg[5]['left_mortgage'],
            'prime_deltas6' =>  $gg[5]['prime_deltas'],
            'pmt6' =>  $gg[5]['pmt'],
            'epmt6' =>  $gg[5]['epmt'],
            'totalPmt6' =>  $gg[5]['totalPmt'],
            'e_left_mortgage6' =>  $gg[5]['e_left_mortgage'],
            'e_prime_deltas6' =>  $gg[5]['e_prime_deltas'],


            'final_val' => $final_val,
            'year' => $year,


            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,
            'result_table3' => $result_table_3,
            'result_table4' => $result_table_4,
            'result_table5' => $result_table_5,
            'result_table6' => $result_table_6,


            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,
            'seven_table3' => $seven_table_3,
            'seven_table4' => $seven_table_4,
            'seven_table5' => $seven_table_5,
            'seven_table6' => $seven_table_6,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
          break;
        }else{
          $final_val = round($totalPmt_fun[$i],2);
          $year = $i + 4;

          $loan_type1 = $gg[0]['loan_type'];
          $loan_type2 = $gg[1]['loan_type'];
          $loan_type3 = $gg[2]['loan_type'];
          $loan_type4 = $gg[3]['loan_type'];
          $loan_type5 = $gg[4]['loan_type'];
          $loan_type6 = $gg[5]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $step1_2 =  $gg[1]['step1'];
          $step2_2 =  $gg[1]['step2'];
          $step3_2 =  $gg[1]['step3'];

          $step1_3 =  $gg[2]['step1'];
          $step2_3 =  $gg[2]['step2'];
          $step3_3 =  $gg[2]['step3'];

          $step1_4 =  $gg[3]['step1'];
          $step2_4 =  $gg[3]['step2'];
          $step3_4 =  $gg[3]['step3'];

          $step1_5 =  $gg[4]['step1'];
          $step2_5 =  $gg[4]['step2'];
          $step3_5 =  $gg[4]['step3'];


          $step1_6 =  $gg[5]['step1'];
          $step2_6 =  $gg[5]['step2'];
          $step3_6 =  $gg[5]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $result_table_2 =  $this->step_four_comeback_with_six($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $result_table_3 =  $this->step_four_comeback_with_six($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $result_table_4 =  $this->step_four_comeback_with_six($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year); 

          $result_table_5 =  $this->step_four_comeback_with_six($user,$loan_type5,$step3_5,$step2_5,$step1_5,$final_val,$year);

          $result_table_6 =  $this->step_four_comeback_with_six($user,$loan_type6,$step3_6,$step2_6,$step1_6,$final_val,$year);


          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_2 =  $this->step_four_comeback_with_seven($user,$loan_type2,$step3_2,$step2_2,$step1_2,$final_val,$year);

          $seven_table_3 =  $this->step_four_comeback_with_seven($user,$loan_type3,$step3_3,$step2_3,$step1_3,$final_val,$year);

          $seven_table_4 =  $this->step_four_comeback_with_seven($user,$loan_type4,$step3_4,$step2_4,$step1_4,$final_val,$year);

          $seven_table_5 =  $this->step_four_comeback_with_seven($user,$loan_type5,$step3_5,$step2_5,$step1_5,$final_val,$year);

          $seven_table_6 =  $this->step_four_comeback_with_seven($user,$loan_type6,$step3_6,$step2_6,$step1_6,$final_val,$year);


          $total_net_pay = array();
          $total_net_pay_linked = array();
          $total_interest_pay = array();
          $total_interest_pay_linked = array();
          $total_left_pay = array();
          $total_left_pay_linked = array();
          $total_mr = array();
          $total_linked_mr = array();

          for ($o=0; $o < 360 ; $o++) { 

            $total_net_pay[] = $seven_table_1['total_net_pay'][$o] + $seven_table_2['total_net_pay'][$o] + $seven_table_3['total_net_pay'][$o] + $seven_table_4['total_net_pay'][$o] + $seven_table_5['total_net_pay'][$o] + $seven_table_6['total_net_pay'][$o];

              $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o] + $seven_table_2['total_net_pay_linked'][$o] + $seven_table_3['total_net_pay_linked'][$o] + $seven_table_4['total_net_pay_linked'][$o] + $seven_table_5['total_net_pay_linked'][$o] + $seven_table_6['total_net_pay_linked'][$o];

              $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o] + $seven_table_2['total_interest_pay'][$o] + $seven_table_3['total_interest_pay'][$o] + $seven_table_4['total_interest_pay'][$o] + $seven_table_5['total_interest_pay'][$o] + $seven_table_6['total_interest_pay'][$o];

              $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o] + $seven_table_2['total_interest_pay_linked'][$o] + $seven_table_3['total_interest_pay_linked'][$o] + $seven_table_4['total_interest_pay_linked'][$o] + $seven_table_5['total_interest_pay_linked'][$o] + $seven_table_6['total_interest_pay_linked'][$o];

              $total_left_pay[] = $seven_table_1['total_left_pay'][$o] + $seven_table_2['total_left_pay'][$o] + $seven_table_3['total_left_pay'][$o] + $seven_table_4['total_left_pay'][$o] + $seven_table_5['total_left_pay'][$o] + $seven_table_6['total_left_pay'][$o];

              $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o] + $seven_table_2['total_left_pay_linked'][$o] + $seven_table_3['total_left_pay_linked'][$o] + $seven_table_4['total_left_pay_linked'][$o] + $seven_table_5['total_left_pay_linked'][$o] + $seven_table_6['total_left_pay_linked'][$o];

              $total_mr[] = $seven_table_1['total_mr'][$o] + $seven_table_2['total_mr'][$o] + $seven_table_3['total_mr'][$o] + $seven_table_4['total_mr'][$o] + $seven_table_5['total_mr'][$o] + $seven_table_6['total_mr'][$o];

              $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o] + $seven_table_2['total_linked_mr'][$o] + $seven_table_3['total_linked_mr'][$o] + $seven_table_4['total_linked_mr'][$o] + $seven_table_5['total_linked_mr'][$o] + $seven_table_6['total_linked_mr'][$o];

           
          }

          $step_8 = array(
            'total_net_pay' =>$total_net_pay,
            'total_net_pay_linked' => $total_net_pay_linked,
            'total_interest_pay' => $total_interest_pay,
            'total_interest_pay_linked' => $total_interest_pay_linked,
            'total_left_pay' => $total_left_pay,
            'total_left_pay_linked' => $total_left_pay_linked,
            'total_mr'=> $total_mr,
            'total_linked_mr' =>$total_linked_mr,


          );

 

          $main_array = array(
            'loan_type1' =>  $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],

            'loan_type2' =>  $gg[1]['loan_type'],
            'part2' => $gg[1]['part'],
            'left_mortgage2' =>  $gg[1]['left_mortgage'],
            'prime_deltas2' =>  $gg[1]['prime_deltas'],
            'pmt2' =>  $gg[1]['pmt'],
            'epmt2' =>  $gg[1]['epmt'],
            'totalPmt2' =>  $gg[1]['totalPmt'],
            'e_left_mortgage2' =>  $gg[1]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[1]['e_prime_deltas'],

            'loan_type3' =>  $gg[2]['loan_type'],
            'part3' => $gg[2]['part'],
            'left_mortgage3' =>  $gg[2]['left_mortgage'],
            'prime_deltas3' =>  $gg[2]['prime_deltas'],
            'pmt3' =>  $gg[2]['pmt'],
            'epmt3' =>  $gg[2]['epmt'],
            'totalPmt3' =>  $gg[2]['totalPmt'],
            'e_left_mortgage2' =>  $gg[3]['e_left_mortgage'],
            'e_prime_deltas2' =>  $gg[3]['e_prime_deltas'],

            'loan_type4' =>  $gg[3]['loan_type'],
            'part4' => $gg[3]['part'],
            'left_mortgage4' =>  $gg[3]['left_mortgage'],
            'prime_deltas4' =>  $gg[3]['prime_deltas'],
            'pmt4' =>  $gg[3]['pmt'],
            'epmt4' =>  $gg[3]['epmt'],
            'totalPmt4' =>  $gg[3]['totalPmt'],
            'e_left_mortgage4' =>  $gg[3]['e_left_mortgage'],
            'e_prime_deltas4' =>  $gg[3]['e_prime_deltas'],

            'loan_type5' =>  $gg[4]['loan_type'],
            'part5' => $gg[4]['part'],
            'left_mortgage5' =>  $gg[4]['left_mortgage'],
            'prime_deltas5' =>  $gg[4]['prime_deltas'],
            'pmt5' =>  $gg[4]['pmt'],
            'epmt5' =>  $gg[4]['epmt'],
            'totalPmt5' =>  $gg[4]['totalPmt'],
            'e_left_mortgage5' =>  $gg[4]['e_left_mortgage'],
            'e_prime_deltas5' =>  $gg[4]['e_prime_deltas'],

            'loan_type6' =>  $gg[5]['loan_type'],
            'part6' => $gg[5]['part'],
            'left_mortgage6' =>  $gg[5]['left_mortgage'],
            'prime_deltas6' =>  $gg[5]['prime_deltas'],
            'pmt6' =>  $gg[5]['pmt'],
            'epmt6' =>  $gg[5]['epmt'],
            'totalPmt6' =>  $gg[5]['totalPmt'],
            'e_left_mortgage6' =>  $gg[5]['e_left_mortgage'],
            'e_prime_deltas6' =>  $gg[5]['e_prime_deltas'],



            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,
            'result_table2' => $result_table_2,
            'result_table3' => $result_table_3,
            'result_table4' => $result_table_4,
            'result_table5' => $result_table_5,
            'result_table6' => $result_table_6,

            'seven_table1' => $seven_table_1,
            'seven_table2' => $seven_table_2,
            'seven_table3' => $seven_table_3,
            'seven_table4' => $seven_table_4,
            'seven_table5' => $seven_table_5,
            'seven_table6' => $seven_table_6,

            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
        }


      }

    break;
    default:
     $totalPmt_fun =   $gg[0]['totalPmt'];
      for ($i=0; $i < 26 ; $i++) { 
    
         if($totalPmt_fun[$i] > $final_elg_mr){
          $final_val = $totalPmt_fun[$i];
          $year = $i + 4; 

          $loan_type1 = $gg[0]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

               $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o];

             
            }
             $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_payreport_two_steps_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );

          $main_array = array(
            'loan_type1' => $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,

            'seven_table1' => $seven_table_1,

             'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
          break;
        }else{
          $final_val = round($totalPmt_fun[$i],2);
          $year = $i + 4; 

          $loan_type1 = $gg[0]['loan_type'];

          $step1 =  $gg[0]['step1'];
          $step2 =  $gg[0]['step2'];
          $step3 =  $gg[0]['step3'];

          $result_table_1 =  $this->step_four_comeback_with_six($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

          $seven_table_1 =  $this->step_four_comeback_with_seven($user,$loan_type1,$step3,$step2,$step1,$final_val,$year);

            $total_net_pay = array();
            $total_net_pay_linked = array();
            $total_interest_pay = array();
            $total_interest_pay_linked = array();
            $total_left_pay = array();
            $total_left_pay_linked = array();
            $total_mr = array();
            $total_linked_mr = array();

            for ($o=0; $o < 360 ; $o++) { 

              $total_net_pay[] = $seven_table_1['total_net_pay'][$o];

                $total_net_pay_linked[] = $seven_table_1['total_net_pay_linked'][$o];

                $total_interest_pay[] = $seven_table_1['total_interest_pay'][$o];

                $total_interest_pay_linked[] = $seven_table_1['total_interest_pay_linked'][$o];

                $total_left_pay[] = $seven_table_1['total_left_pay'][$o];

                $total_left_pay_linked[] = $seven_table_1['total_left_pay_linked'][$o];

                $total_mr[] = $seven_table_1['total_mr'][$o];

                $total_linked_mr[] = $seven_table_1['total_linked_mr'][$o];

             
            }
             $step_8 = array(
              'total_net_pay' =>$total_net_pay,
              'total_net_pay_linked' => $total_net_pay_linked,
              'total_interest_pay' => $total_interest_pay,
              'total_interest_pay_linked' => $total_interest_pay_linked,
              'total_left_pay' => $total_left_pay,
              'total_left_pay_linked' => $total_left_pay_linked,
              'total_mr'=> $total_mr,
              'total_linked_mr' =>$total_linked_mr,
            );

             // $step7 = array(
             //  'year' => $year,
             //  'min_value' => $years_min_raw,
             // );

          $main_array = array(
            'loan_type1' => $gg[0]['loan_type'],
            'part1' => $gg[0]['part'],
            'left_mortgage1' =>  $gg[0]['left_mortgage'],
            'prime_deltas1' =>  $gg[0]['prime_deltas'],
            'pmt1' =>  $gg[0]['pmt'],
            'epmt1' =>  $gg[0]['epmt'],
            'e_left_mortgage1' =>  $gg[0]['e_left_mortgage'],
            'e_prime_deltas1' =>  $gg[0]['e_prime_deltas'],
            'totalPmt1' =>  $gg[0]['totalPmt'],
            'final_val' => $final_val,
            'year' => $year,

            'result_table1' => $result_table_1,

            'seven_table1' => $seven_table_1,
            'step_8' => $step_8,

            'min_value' => $years_min_raw,

            'final_PMT' =>  $final_PMT,
            'e_final_PMT' =>  $e_final_PMT,
          );
          //return $main_array;
        }
      }
     break;
 }



    $step_6 = json_encode($goods_array);
    $step_8 = json_encode($step_8);
    $result = report_two_steps::where('user_id',$user)->delete();
    $result =  new report_two_steps(); 
    $result->user_id = $user;
    $result->step_8 = $step_8;
    $result->step_7 = $years_min_raw.'/'.$year ;
    $result->step_6 = $step_6;
    $result->save();


return $main_array;

  



}


	
function Best_tree_data_report_two_inbuilt($user_id, $tab){
  $user_id = $user_id;
  $type_click = $tab;
  $prime_deltas = Best_tree_result::where('user_id',$user_id)->get();
  $res = $prime_deltas;
  if(isset($res[0])){
    $aa=  $res[0]->tree_data;
    $b = $res;
    $c = json_decode($aa);
    $data= (array)$c;
    if($data['best_tree_findings']->bank_name != ""){


    $funding = $data['best_tree_findings']->funding;
    $bank = $data['best_tree_findings']->bank_name;
    $link = $data['best_tree_findings']->link_type;
    if($link[0] == 'A'){
      $year = $data['best_tree_findings']->years[0];
      $amount = $data['best_tree_findings']->full->mortgage_amount[0];
      $interest = $data['best_tree_findings']->full->interest[0];
      $e_interest = $data['best_tree_findings']->full->e_interest[0];
      $part = $data['best_tree_findings']->divide[0];

      $rowTotal =isset($data['best_tree_findings']->full->row3)?$data['best_tree_findings']->full->row2 + $data['best_tree_findings']->full->row3:$data['best_tree_findings']->full->row2 ;
      $e_rowTotal = isset($data['best_tree_findings']->full->e_row3)?$data['best_tree_findings']->full->e_row2 + $data['best_tree_findings']->full->e_row3:$data['best_tree_findings']->full->e_row2;

    }elseif($link[1] == 'A'){
      $year = $data['best_tree_findings']->years[1];
      $amount = $data['best_tree_findings']->full->mortgage_amount[1];
      $interest = $data['best_tree_findings']->full->interest[1];
      $e_interest = $data['best_tree_findings']->full->e_interest[1];
      $part = $data['best_tree_findings']->divide[1];

      $rowTotal =isset($data['best_tree_findings']->full->row3)?$data['best_tree_findings']->full->row1 + $data['best_tree_findings']->full->row3:$data['best_tree_findings']->full->row1 ;
      $e_rowTotal =isset($data['best_tree_findings']->full->row3)? $data['best_tree_findings']->full->e_row1 + $data['best_tree_findings']->full->e_row3 : $data['best_tree_findings']->full->e_row1 ;

    }else{
      $year = $data['best_tree_findings']->years[2];
      $amount = $data['best_tree_findings']->full->mortgage_amount[2];
      $interest = $data['best_tree_findings']->full->interest[2];
      $e_interest = $data['best_tree_findings']->full->e_interest[2];
      $part = $data['best_tree_findings']->divide[2];

      $rowTotal = $data['best_tree_findings']->full->row1 + $data['best_tree_findings']->full->row2;
      $e_rowTotal = $data['best_tree_findings']->full->e_row1 + $data['best_tree_findings']->full->e_row2;

    }

    $env_morg = $data['total_twenty_point_seven'];
    $fundingMorg = $data['total_twenty_point_eight'];
    $enslavementMorg = $data['total_twenty_point_nine'];
    $mr_funding = $data['best_tree_findings']->full->total_mr_funding;
    $env_funding =  $data['best_tree_findings']->full->total_mr_enslavement;
    $primeAmount = $amount;
    $primeInterest = $interest;
    $primePart = $part; 


    $linkType = $data['best_tree_findings']->link_type;
    $mortgage = $data['best_tree_findings']->full->mortgage_amount;



   if(count($linkType) == 3){
      $for_B = array_search('B',$linkType);
      $mortgageB = $mortgage[$for_B];
      $for_A = array_search('A',$linkType);
      $mortgageA = $mortgage[$for_A];

    if(in_array('E',$linkType)){
      $for_C = array_search('E',$linkType);
      $mortgageC = $mortgage[$for_C];
    }else{
      $for_C = array_search('D',$linkType);
      $mortgageC = $mortgage[$for_C];
    }

      $for_C = array_search('B',$linkType);
      $mortgageB = $mortgage[$for_B];

   }else{

    if($linkType[0] == "B"){
      $mortgageB = $mortgage[0];
      $mortgageA = $mortgage[1];
      $mortgageC = "";
    }else{
      $mortgageB = $mortgage[1];
      $mortgageA = $mortgage[0];
      $mortgageC = "";
    }

   } 
    
    }else{

      $bank ="";
      $funding ="";
      $year ="";
      $env_morg ="";
      $fundingMorg ="";
      $enslavementMorg ="";
      $mr_funding ="";
      $env_funding ="";
      $primeAmount ="";
      $primeInterest ="";
      $primePart ="";
      $e_interest ="";
      $mortgageA = "";
      $mortgageB = "";

    }

    $second_tab = $this->second_table($bank,$funding,$year,$env_morg,$fundingMorg,$enslavementMorg,$mr_funding,$env_funding,$primeAmount,$primeInterest,$primePart,$e_interest);

    $total_fund = $second_tab['total_fund'] + $rowTotal ;

    if($second_tab['total_ensl'] != ""){
      $total_ensl = $second_tab['total_ensl'] + $e_rowTotal ;
      $final_mr = $total_fund + $total_ensl;
    }else{
      $total_ensl = 0 ;
      $final_mr = $total_fund + $total_ensl;
    }

/*STEP 3*/
    $twenty_point_eight = $data['total_twenty_point_eight'];
    $step3 = $this->step_three($user_id,$twenty_point_eight,$bank,$funding,$year,$mortgageA,$mortgageB,$mortgageC,$total_fund,$final_mr,$data,$second_tab);

/*STEP-4*/
  //$type_click = "A";
  $step4 = $this->step_four($user_id,$type_click,$step3,$second_tab,$data);

    $datas = array(
      'step1'=>$data,
      'step2'=>$second_tab,
      'second_total_fund' => $total_fund,
      'second_total_ensl' => $total_ensl,
      'second_final_mr' => $final_mr,
      'step3' => $step3,
      'step4' => $step4,
    );
    return $datas;
  } else{
    return 'no_datas';
  }
}




		



function step_four_comeback_with_six($user_id,$type_click='A',$step3,$step2,$step1,$new_mortgage,$ten_values){

  $report1 = new ReportController();
  $ques5 = question_survey::where('user_id',$user_id)->where('question_id', 5)->get();
  $five_value = $ques5[0]->meta_value;
  $ques12 = question_survey::where('user_id',$user_id)->where('question_id', 14)->get();
  $twelve_value = $ques12[0]->meta_value;
  $twelve_value = str_replace(',', '', $twelve_value);
  $ten_point_two = 0; 
  $ten_value = $ten_values;

  $link_type = $step1['best_tree_findings']->link_type;

  if(count($link_type) == 3){
    $for_B = array_search('B',$link_type);
    $for_A = array_search('A',$link_type);
    if(in_array('D',$link_type)){
    $for_C = array_search('D',$link_type);
    }
    if(in_array('E',$link_type)){
    $for_C = array_search('E',$link_type);
    }
  }


  if(count($link_type) == 3){
     if($for_A == 0 && $for_B == 1 ){
        $ensl_a  = $step2['a_e_PMT'];
        $ensl_b = $step1['best_tree_findings']->full->e_row2;
        $ensl_c = $step1['best_tree_findings']->full->e_row3;

        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row3;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }else{
          $final_a = $step3['pmt_mr_a'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row3;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }
     }else{

          $ensl_a  = $step2['a_e_PMT'];
          $ensl_b = $step1['best_tree_findings']->full->e_row3;
          $ensl_c = $step1['best_tree_findings']->full->e_row2;


        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row2;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }else{
          $final_a = $step3['pmt_mr_a'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row2;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }

     }

      $sum_a = $final_a + $ensl_a;
      $sum_b = $final_b + $ensl_b;
      $sum_c = $final_c + $ensl_c;

   }else{

    if($for_A == 0){
      $ensl_a  = $step2['a_e_PMT'];
      $ensl_b = $step1['best_tree_findings']->full->e_row2;
      $ensl_c = 0;
      $final_c = 0;
  
        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
        }else{
          $final_a = $step3['pmt_mr_a'];
        }
     }else{
      $ensl_a  = $step2['a_e_PMT'];
      $ensl_c = 0;
      $final_c = 0;
      $ensl_b = $step1['best_tree_findings']->full->e_row1;
        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
        }else{
          $final_a = $step3['pmt_mr_a'];
        }

     }

      $sum_a = $final_a + $ensl_a;
      $sum_b = $final_b + $ensl_b;

   }

  switch ($type_click) {
    case 'A':
      if($step3['mortgage_a'] != ""){
        $mortgage = $step3['mortgage_a'];
      }else{
        $mortgage = $step2['a_morg_funding'];
      }
      if($step1['best_tree_findings']->link_type[0] == "A"){
        $interest = $step1['best_tree_findings']->full->interest[0];
        $e_interest = $step1['best_tree_findings']->full->e_interest[0];
        $year = $step1['best_tree_findings']->years[0];
        $e_year = $step1['best_tree_findings']->years[0];

      }else{
        $interest = $step1['best_tree_findings']->full->interest[1];
        $e_interest = $step1['best_tree_findings']->full->e_interest[1];
        $year = $step1['best_tree_findings']->years[1];
        $e_year = $step1['best_tree_findings']->years[1];

      }
      $e_mortgage = $step2['a_e_morg_funding'];
    break;

    case 'B':

      $mortgage = $step3['mortgage_b'];
      if(count($step1['best_tree_findings']->link_type) == 3){

        $interest = $step1['best_tree_findings']->full->interest[2];
        $e_interest = $step1['best_tree_findings']->full->e_interest[2];
        $year = $step1['best_tree_findings']->years[2];
        $e_year = $step1['best_tree_findings']->years[2];
        $e_mortgage = $step2['a_e_morg_funding'];

      }else{ 

        if($step1['best_tree_findings']->link_type[1] == "A"){
          $interest = $step1['best_tree_findings']->full->interest[1];
          $e_interest = $step1['best_tree_findings']->full->e_interest[1];
          $year = $step1['best_tree_findings']->years[1];
          $e_year = $step1['best_tree_findings']->years[1];
          $e_mortgage = $step2['a_e_morg_funding'];

        }else{

          $interest = $step1['best_tree_findings']->full->interest[0];
          $e_interest = $step1['best_tree_findings']->full->e_interest[0];
          $year = $step1['best_tree_findings']->years[0];
          $e_year = $step1['best_tree_findings']->years[0];
          $e_mortgage = $step2['a_e_morg_funding'];

        }
        
      }
  
    break;

    case 'D':

    if(count($step1['best_tree_findings']->link_type) == 3){

      if($step3['mortgage_c'] != ""){
        $mortgage = $step3['mortgage_c'];
      }else{
        $mortgage = $step1['best_tree_findings']->full->mortgage_amount[1];
      }

      $e_mortgage = $step1['best_tree_findings']->full->e_mortgage_amount[1];

      $interest = $step1['best_tree_findings']->full->interest[1];
      $e_interest = $step1['best_tree_findings']->full->e_interest[1];
      $year = $step1['best_tree_findings']->years[1];
      $e_year = $step1['best_tree_findings']->years[1];

    }else{

      $mortgage = 0;
      $e_mortgage = 0;
      $interest = 0;
      $e_interest = 0;
      $year = 0;
      $e_year = 0;
    }
 
    break;

    case 'F':
      $mortgage = $step2['morg_f_funding'];
      $interest = $step2['intrest_f_funding'];    
      $year = $step2['year_f_funding'];
      $e_mortgage = $step2['morg_f_enslavement'];
      $e_interest = $step2['intrest_f_enslavement'];    
      $e_year = $step2['year_f_enslavement'];

    break;

    case 'G':
      $mortgage = $step2['morg_g_funding'];
      $interest = $step2['intrest_g_funding'];    
      $year = $step2['year_g_funding'];
      $e_mortgage = $step2['morg_g_enslavement'];
      $e_interest = $step2['intrest_g_enslavement'] ;   
      $e_year = $step2['year_g_enslavement'];
      
    break;

    case 'H':
      $mortgage = $step3['mortgage_h'];
      $interest = $step3['e_interest'];
      $year = $step3['e_year'];
      $e_mortgage = 0;
      $e_interest = 0;   
      $e_year = 0;

    break;
    
    default:

      if($step3['mortgage_a'] != ""){
        $mortgage = $step3['mortgage_a'];
      }else{
        $mortgage = $step2['a_morg_funding'];
      }
      if($step1['best_tree_findings']->link_type[0] == "A"){
        $interest = $step1['best_tree_findings']->full->interest[0];
        $e_interest = $step1['best_tree_findings']->full->e_interest[0];
        $year = $step1['best_tree_findings']->years[0];
        $e_year = $step1['best_tree_findings']->years[0];

      }else{
        $interest = $step1['best_tree_findings']->full->interest[1];
        $e_interest = $step1['best_tree_findings']->full->e_interest[1];
        $year = $step1['best_tree_findings']->years[1];
        $e_year = $step1['best_tree_findings']->years[1];

      }

      $e_mortgage = $step2['a_e_morg_funding'];

    break;
  }
    if($interest != ""){
      $interest = $interest;
    }else{
      $interest = 0;
    }

    $interest_monthly = $interest/1200;
    $period = $year*12;

    $mortgage = -$new_mortgage;

    $e_interest_monthly = $e_interest/1200;
    $e_period = $e_year*12;

    $e_mortgage = -$new_mortgage;

/*A and prime without Enslavement*/

  $counter  = 1;
  for($x = 1; $x <= 360; $x++){

      $a[] = $x;

      if($type_click == "B" || $type_click == "D" || $type_click == "H"){

        $madad = Bank_madad::where('years',$counter)->first();
        $prime = $madad['madad'];
        $prime_years[] = round($prime / 12,3);
        $prime_interest = $prime / 1200;
        $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
        $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);
        $net_linked[] = round($net_linked_pmt - $net_py_linked);
        $net_pay_linked = round($net_linked_pmt - $net_py_linked);

        $interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$period,$mortgage));


        if($x == 1){
          $left_pay[] = round(-($mortgage) - $net_pay_linked);
          $left_pay_linked[] = round(-($mortgage) * (1 + $prime_years[0]));
        }else{
          $c = $x - 2;
          $d = $x -1;
          $left_pay[] =round($left_pay[$c] + $net_pay_linked);
          $left_pay_linked[] = round($left_pay_linked[$c] * (1 + $prime_years[$d]));
        }

        $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
        $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
        $ppmt_check[] = round($pmt - $ipmt_check);

        $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

        $val = $x - 1;
        $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
        $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);
      

      }else{

        $prime = Bank_prime::where('years',$counter)->first();
        $prime = $prime['prime'];
        $prime_years[] = round($prime / 12,3);
        $prime_interest = $prime / 1200;

        $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
        $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);
        $net_linked[] = round($net_linked_pmt - $net_py_linked);
        $net_pay_linked = round($net_linked_pmt - $net_py_linked);
        $interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$period,$mortgage));

        if($x == 1){
          $left_pay[] = round(-($mortgage) - $net_pay_linked);
          $left_pay_linked[] = round(-($mortgage) - $net_pay_linked);
        }else{
          $c = $x - 2;

          $left_pay[] =round($left_pay[$c] - $net_pay_linked);
          $left_pay_linked[] = round($left_pay_linked[$c] - $net_linked[$c]);
        }

        $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
        $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
        $ppmt_check[] = round($pmt - $ipmt_check);

        $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

        $val = $x - 1;
        $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
        $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);


      }
  

  if($x / 12 == $counter){
   $counter++; 
  }     
}

/*---------------VALUES WITH ENSLAVEMENT------------------*/
$counter  = 1;
  for($x = 1; $x <= 360; $x++){
    $e_a[] = $x;
    if($type_click == "B" || $type_click == "D" || $type_click == "H"){

      $madad = Bank_madad::where('years',$counter)->first();
      $prime = $madad['madad'];
      $e_prime_years[] = $prime / 12;
      $prime_interest = $prime / 1200;
      $net_py_linked = $report1->ipmt($prime_interest,$x,$e_period,$e_mortgage);
      $net_linked_pmt  = $report1->pmt($prime_interest,$e_period,$e_mortgage);
      $e_net_linked[] = round($net_linked_pmt - $net_py_linked);

      $e_interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$e_period,$e_mortgage));

      if($x == 1){
        $e_left_pay[] = round(-($e_mortgage) - $net_pay_linked);
        $e_left_pay_linked[] = round(-($e_mortgage) * (1 + $e_prime_years[0]));
      }else{
        $c = $x - 2;
        $d = $x -1;

        $e_left_pay[] =round($e_left_pay[$c] + $net_pay_linked);
        $e_left_pay_linked[] = round($e_left_pay_linked[$c] * (1 + $e_prime_years[$d]));
      }

      $ipmt_check = $report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage);
      $pmt  = $report1->pmt($e_interest_monthly,$e_period,$e_mortgage);
      $e_ppmt_check[] = round($pmt - $ipmt_check);

      $e_interest_final[] = round($report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage));
      $val = $x - 1;
      $e_mr[] = round($e_interest_final[$val] + $e_ppmt_check[$val]);
      $e_linked_mr[] = round($e_interest_linked_final[$val] + $e_net_linked[$val]);

    }else{

        $prime = Bank_prime::where('years',$counter)->first();
        $prime = $prime['prime'];
        $e_prime_years[] = round($prime / 12,3);
        $prime_interest = $prime / 1200;

        $net_py_linked = $report1->ipmt($prime_interest,$x,$e_period,$e_mortgage);
        $net_linked_pmt  = $report1->pmt($prime_interest,$e_period,$e_mortgage);
        $e_net_linked[] = round($net_linked_pmt - $net_py_linked);
        $net_pay_linked = round($net_linked_pmt - $net_py_linked);

        $e_interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$e_period,$e_mortgage));
        if($x == 1){
          $e_left_pay[] = round(-($e_mortgage) - $net_pay_linked);
          $e_left_pay_linked[] = round(-($e_mortgage) - $net_pay_linked);
        }else{
          $c = $x - 2;
          $e_left_pay[] =round($e_left_pay[$c] - $net_pay_linked);
          $e_left_pay_linked[] = round($e_left_pay_linked[$c] - $e_net_linked[$c]);
        }

        $ipmt_check = $report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage);
        $pmt  = $report1->pmt($e_interest_monthly,$e_period,$e_mortgage);
        $e_ppmt_check[] = round($pmt - $ipmt_check);

        $e_interest_final[] = round($report1->ipmt($e_interest_monthly,$x,$e_period,$e_mortgage));
        $val = $x - 1;
        $e_mr[] = round($e_interest_final[$val] + $e_ppmt_check[$val]);
        $e_linked_mr[] = round($e_interest_linked_final[$val] + $e_net_linked[$val]);
    }
    if($x / 12 == $counter){
     $counter++; 
    }
    
  }

  $total_array = array(
    'ten_point_one' => $ten_value,
    'ten_point_two' => $ten_point_two,

    'a_field'=> $a,
    'prime'=>$prime_years,
    'net_pay' =>$ppmt_check,
    'net_pay_linked' => $net_linked,
    'interest_pay' => $interest_final,
    'interest_pay_linked' => $interest_linked_final,
    'left_pay' => $left_pay,
    'left_pay_linked' => $left_pay_linked,
    'mr'=> $mr,
    'linked_mr' =>$linked_mr,

    'e_a_field'=> $e_a,
    'e_prime'=>$e_prime_years,
    'e_net_pay' =>$e_ppmt_check,
    'e_net_pay_linked' => $e_net_linked,
    'e_interest_pay' => $e_interest_final,
    'e_interest_pay_linked' => $e_interest_linked_final,
    'e_left_pay' => $e_left_pay,
    'e_left_pay_linked' => $e_left_pay_linked,
    'e_mr'=> $e_mr,
    'e_linked_mr' =>$e_linked_mr,


    'final_a'=> $final_a,
    'final_b'=> $final_b,
    'final_c'=> $final_c,

    'ensl_a' => $ensl_a,
    'ensl_b' => $ensl_b,
    'ensl_c' => $ensl_c,

    'sum_a' => $sum_a,
    'sum_b' => $sum_b,
    'sum_c' => $sum_c,
  );  
  return $total_array;
}





/**********************STEP 7 CUSTOM FUNCTION FOR TABLES ONLY****************************/

function step_four_comeback_with_seven($user_id,$type_click='A',$step3,$step2,$step1,$new_mortgage,$ten_values){
  $report1 = new ReportController();


  $que_thirteen =  question_survey::where('user_id',$user_id)->where('question_id',15)->get();

  $que_thirteen_one = $que_thirteen[0]->meta_value;
  $que_thirteen_amount1 = $que_thirteen[1]->meta_value;
  $que_thirteen_amount = json_decode($que_thirteen_amount1);

  $que_thirteen_year1 = $que_thirteen[3]->meta_value;
  $que_thirteen_year = json_decode($que_thirteen_year1);

  $count_thirteen = count($que_thirteen_amount);

  $ques5 = question_survey::where('user_id',$user_id)->where('question_id', 5)->get();
  $five_value = $ques5[0]->meta_value;
  $ques12 = question_survey::where('user_id',$user_id)->where('question_id', 14)->get();
  $twelve_value = $ques12[0]->meta_value;
  $twelve_value = str_replace(',', '', $twelve_value);
  $ten_point_two = 0; 
  $ten_value = $ten_values;

  $link_type = $step1['best_tree_findings']->link_type;

  if(count($link_type) == 3){
    $for_B = array_search('B',$link_type);
    $for_A = array_search('A',$link_type);
    if(in_array('D',$link_type)){
    $for_C = array_search('D',$link_type);
    }
    if(in_array('E',$link_type)){
    $for_C = array_search('E',$link_type);
    }
  }


  if(count($link_type) == 3){
     if($for_A == 0 && $for_B == 1 ){
        $ensl_a  = $step2['a_e_PMT'];
        $ensl_b = $step1['best_tree_findings']->full->e_row2;
        $ensl_c = $step1['best_tree_findings']->full->e_row3;

        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row3;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }else{
          $final_a = $step3['pmt_mr_a'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row3;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }
     }else{

          $ensl_a  = $step2['a_e_PMT'];
          $ensl_b = $step1['best_tree_findings']->full->e_row3;
          $ensl_c = $step1['best_tree_findings']->full->e_row2;


        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row2;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }else{
          $final_a = $step3['pmt_mr_a'];
          $final_b = $step3['pmt_mr_b'];
          if($step3['pmt_mr_c'] == ""){
            $final_c = $step1['best_tree_findings']->full->row2;
          }else{
            $final_c = $step3['pmt_mr_c'];
          }
        }

     }

      $sum_a = $final_a + $ensl_a;
      $sum_b = $final_b + $ensl_b;
      $sum_c = $final_c + $ensl_c;

   }else{

    if($for_A == 0){
      $ensl_a  = $step2['a_e_PMT'];
      $ensl_b = $step1['best_tree_findings']->full->e_row2;
      $ensl_c = 0;
      $final_c = 0;
  
        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
        }else{
          $final_a = $step3['pmt_mr_a'];
        }
     }else{
      $ensl_a  = $step2['a_e_PMT'];
      $ensl_c = 0;
      $final_c = 0;
      $ensl_b = $step1['best_tree_findings']->full->e_row1;
        if($step3['pmt_mr_a'] == ""){
          $final_a = $step2['a_PMT'];
          $final_b = $step3['pmt_mr_b'];
        }else{
          $final_a = $step3['pmt_mr_a'];
        }

     }

      $sum_a = $final_a + $ensl_a;
      $sum_b = $final_b + $ensl_b;

   }


  switch ($type_click) {

    case 'A':
      if($step3['mortgage_a'] != ""){
        $mortgage = $step3['mortgage_a'];
      }else{
        $mortgage = $step2['a_morg_funding'];
      }
      if($step1['best_tree_findings']->link_type[0] == "A"){
        $interest = $step1['best_tree_findings']->full->interest[0];
        $e_interest = $step1['best_tree_findings']->full->e_interest[0];
        $year = $step1['best_tree_findings']->years[0];
        $e_year = $step1['best_tree_findings']->years[0];

      }else{
        $interest = $step1['best_tree_findings']->full->interest[1];
        $e_interest = $step1['best_tree_findings']->full->e_interest[1];
        $year = $step1['best_tree_findings']->years[1];
        $e_year = $step1['best_tree_findings']->years[1];

      }
      $e_mortgage = $step2['a_e_morg_funding'];

      if($count_thirteen == 3){
        $thirteen_year = $que_thirteen_year[2];
        $thirteen_amount =  $que_thirteen_amount[2];
        $thirteen_amount =  str_replace( ',', '', $thirteen_amount);
        
      }else{
        $thirteen_year = 0;
        $thirteen_amount = 0;
      }


    break;

    case 'B':

      $mortgage = $step3['mortgage_b'];
      if(count($step1['best_tree_findings']->link_type) == 3){

        $interest = $step1['best_tree_findings']->full->interest[2];
        $e_interest = $step1['best_tree_findings']->full->e_interest[2];
        $year = $step1['best_tree_findings']->years[2];
        $e_year = $step1['best_tree_findings']->years[2];
        $e_mortgage = $step2['a_e_morg_funding'];

      }else{ 

        if($step1['best_tree_findings']->link_type[1] == "A"){
          $interest = $step1['best_tree_findings']->full->interest[1];
          $e_interest = $step1['best_tree_findings']->full->e_interest[1];
          $year = $step1['best_tree_findings']->years[1];
          $e_year = $step1['best_tree_findings']->years[1];
          $e_mortgage = $step2['a_e_morg_funding'];

        }else{

          $interest = $step1['best_tree_findings']->full->interest[0];
          $e_interest = $step1['best_tree_findings']->full->e_interest[0];
          $year = $step1['best_tree_findings']->years[0];
          $e_year = $step1['best_tree_findings']->years[0];
          $e_mortgage = $step2['a_e_morg_funding'];

        }
        
      }
      if($count_thirteen == 1){
        $thirteen_year = $que_thirteen_year[0];
        $thirteen_amount =  $que_thirteen_amount[0];
        $thirteen_amount =  str_replace( ',', '', $thirteen_amount);
      }else{
        $thirteen_year = 0;
        $thirteen_amount = 0;
      }
  
    break;

    case 'D':

    if(count($step1['best_tree_findings']->link_type) == 3){

      if($step3['mortgage_c'] != ""){
        $mortgage = $step3['mortgage_c'];
      }else{
        $mortgage = $step1['best_tree_findings']->full->mortgage_amount[1];
      }

      $e_mortgage = $step1['best_tree_findings']->full->e_mortgage_amount[1];

      $interest = $step1['best_tree_findings']->full->interest[1];
      $e_interest = $step1['best_tree_findings']->full->e_interest[1];
      $year = $step1['best_tree_findings']->years[1];
      $e_year = $step1['best_tree_findings']->years[1];

    }else{

      $mortgage = 0;
      $e_mortgage = 0;
      $interest = 0;
      $e_interest = 0;
      $year = 0;
      $e_year = 0;
    }

    if($count_thirteen == 3){
        $thirteen_year = $que_thirteen_year[2];
        $thirteen_amount =  $que_thirteen_amount[2];
        $thirteen_amount =  str_replace( ',', '', $thirteen_amount);
      }else{
        $thirteen_year = 0;
        $thirteen_amount = 0;
      }
 
    break;

    case 'F':
      $mortgage = $step2['morg_f_funding'];
      $interest = $step2['intrest_f_funding'];    
      $year = $step2['year_f_funding'];
      $e_mortgage = $step2['morg_f_enslavement'];
      $e_interest = $step2['intrest_f_enslavement'];    
      $e_year = $step2['year_f_enslavement'];
       $thirteen_year = 0;
        $thirteen_amount = 0;

    break;

    case 'G':
      $mortgage = $step2['morg_g_funding'];
      $interest = $step2['intrest_g_funding'];    
      $year = $step2['year_g_funding'];
      $e_mortgage = $step2['morg_g_enslavement'];
      $e_interest = $step2['intrest_g_enslavement'] ;   
      $e_year = $step2['year_g_enslavement'];
       $thirteen_year = 0;
        $thirteen_amount = 0;
      
    break;

    case 'H':
      $mortgage = $step3['mortgage_h'];
      $interest = $step3['e_interest'];
      $year = $step3['e_year'];
      $e_mortgage = 0;
      $e_interest = 0;   
      $e_year = 0;
       $thirteen_year = 0;
        $thirteen_amount = 0;

    break;
    
    default:

      if($step3['mortgage_a'] != ""){
        $mortgage = $step3['mortgage_a'];
      }else{
        $mortgage = $step2['a_morg_funding'];
      }
      if($step1['best_tree_findings']->link_type[0] == "A"){
        $interest = $step1['best_tree_findings']->full->interest[0];
        $e_interest = $step1['best_tree_findings']->full->e_interest[0];
        $year = $step1['best_tree_findings']->years[0];
        $e_year = $step1['best_tree_findings']->years[0];

      }else{
        $interest = $step1['best_tree_findings']->full->interest[1];
        $e_interest = $step1['best_tree_findings']->full->e_interest[1];
        $year = $step1['best_tree_findings']->years[1];
        $e_year = $step1['best_tree_findings']->years[1];

      }

      $e_mortgage = $step2['a_e_morg_funding'];

       if($count_thirteen == 3){
        $thirteen_year = $que_thirteen_year[2];
        $thirteen_amount =  $que_thirteen_amount[2];
        $thirteen_amount =  str_replace( ',', '', $thirteen_amount);
      }else{
        $thirteen_year = 0;
        $thirteen_amount = 0;
      }

    break;
  }
    if($interest != ""){
      $interest = $interest;
    }else{
      $interest = 0;
    }

    $interest_monthly = $interest/1200;
    $period = $year*12;


    // print_r($interest.'||'. $year);
    // die();


    $mortgage = -$new_mortgage;

    $e_interest_monthly = $e_interest/1200;
    $e_period = $e_year*12;

    $e_mortgage = -$new_mortgage;

/*A and prime without Enslavement*/
  
  $nper = "";
  $counter  = 1;
  for($x = 1; $x <= 360; $x++){

      $a[] = $x;
      $dd = $x -1;

     // $type_click = "A";

      if($type_click == "B" || $type_click == "D" || $type_click == "H"){

        if($thirteen_year == 0){


          $madad = Bank_madad::where('years',$counter)->first();
          $prime = $madad['madad'];
          $prime_years[] = round($prime / 12,3);
          $prime_interest = round($prime / 1200,3);
          $prime_interests[] = $prime_interest;
          $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
          $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);
          $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
          $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
          $ppmt_check[] = round($pmt - $ipmt_check);
          $net_pay= round($pmt - $ipmt_check);
          $net_linked[] = round($net_pay * (1 + $prime_interest));
          $net_pay_linked = round($net_pay * (1 + $prime_interest));

          $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));
          $interest_pay = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));
          $interest_linked_final[] = round($interest_pay* (1 + $prime_interest));

          if($x == 1){
            $left_pay[] = round(-($mortgage) - $net_pay_linked);
            $left_pay_linked[] = round(-($mortgage) * (1 + $prime_interests[0]));
          }else{
            $c = $x - 2;
            $d = $x -1;
            $left_pay[] =round($left_pay[$c] - $net_pay_linked);
            $left_pay_linked[] = round($left_pay_linked[$c] * (1 + $prime_interests[$d]));
          }

          $val = $x - 1;
          $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
          $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);
          $nper ="";

        }else{
            
          //$nper = "";
          $final_year = $thirteen_year * 12;
          $final_year_arr = $final_year - 1;

          $madad = Bank_madad::where('years',$counter)->first();
          $prime = $madad['madad'];
          $prime_years[] = round($prime / 12,3);
          $prime_interest = round($prime / 1200,3);
          $prime_interests[] = $prime_interest;
          $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
          $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);
          $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
          $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
          $ppmt_check[] = round($pmt - $ipmt_check);
          $net_pay= round($pmt - $ipmt_check);
          $net_linked[] = round($net_pay * (1 + $prime_interest));
          $net_pay_linked = round($net_pay * (1 + $prime_interest));

          $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));
          $interest_pay = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));
          $interest_linked_final[] = round($interest_pay* (1 + $prime_interest));

          if($x == 1){

            $left_pay[] = round(-($mortgage) - $net_pay_linked);
            $left_pay_linked[] = round(-($mortgage) * (1 + $prime_interests[0]));
            $ppmt_check[] = round($pmt - $ipmt_check);
          }elseif($x == $final_year){
            $c = $x - 2;
            $d = $x -1;
            $ppmt_val = round($pmt - $ipmt_check) ;
            $old_left_pay_linked = round($left_pay_linked[$c] * (1 + $prime_interests[$d]));
            $new_morgt = $old_left_pay_linked - $ppmt_val;

            $ppmt_check[] = (int)$ppmt_val + (int)$thirteen_amount;

            $left_pay[] =round($new_morgt + $net_pay_linked);
            $left_pay_linked[] = round($left_pay_linked[$c] * (1 + $prime_interests[$d]));

            $payment_nper = $mr[0];
            $loan_nper = $new_morgt;
            $interest_nper = $interest_monthly;
            $nper_val = Log10 ($payment_nper/ ($payment_nper- $loan_nper * $interest_nper)) / Log10(1 + $interest_nper) + $final_year;

            $nper = round($nper_val,3);

          }else{
            $c = $x - 2;
            $d = $x -1;
            $left_pay[] =round($left_pay[$c] + $net_pay_linked);
            $left_pay_linked[] = round($left_pay_linked[$c] * (1 + $prime_interests[$d]));
            $ppmt_check[] = round($pmt - $ipmt_check);
          }

          //print_r($nper.','.$x);
          $val = $x - 1;
          $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
          $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);

           // die();

        }

      }else{

          if($thirteen_year == 0){
            $prime = Bank_prime::where('years',$counter)->first();
            $prime = $prime['prime'];
            $prime_years[] = round($prime / 12,3);
            $prime_interest = $prime / 1200;

            $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
            $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);
            $net_linked[] = round($net_linked_pmt - $net_py_linked);
            $net_pay_linked = round($net_linked_pmt - $net_py_linked);
            $interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$period,$mortgage));

            if($x == 1){

              $left_pay[] = round(-($mortgage) - $net_pay_linked);
              $left_pay_linked[] = round(-($mortgage) - $net_pay_linked);
            }else{
              $c = $x - 2;

              $left_pay[] =round($left_pay[$c] - $net_pay_linked);
              $left_pay_linked[] = round($left_pay_linked[$c] - $net_linked[$c]);
            }

            $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
            $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);

            $ppmt_check[] = round($pmt - $ipmt_check);

            $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

            $val = $x - 1;
            $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
            $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);
            $nper ="";

          }else{
            $final_year = $thirteen_year * 12;
            $final_year_arr = $final_year - 1;
            $prime = Bank_prime::where('years',$counter)->first();
            $prime = $prime['prime'];
            $prime_years[] = round($prime / 12,3);
            $prime_interest = $prime / 1200;

            $net_py_linked = $report1->ipmt($prime_interest,$x,$period,$mortgage);
            $net_linked_pmt  = $report1->pmt($prime_interest,$period,$mortgage);
            $net_linked[] = round($net_linked_pmt - $net_py_linked);
            $net_pay_linked = round($net_linked_pmt - $net_py_linked);
            $interest_linked_final[] = round($report1->ipmt($prime_interest,$x,$period,$mortgage));

            $ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
            $pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
            $interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

            if($x == 1){
              $left_pay[] = round(-($mortgage) - $net_pay_linked);
              $left_pay_linked[] = round(-($mortgage) - $net_pay_linked);
              $ppmt_check[] = round($pmt - $ipmt_check);
            }elseif($x == $final_year){

              $ppmt_val = round($pmt - $ipmt_check) ;
              $old_left_pay_linked = round($left_pay_linked[$c] - $net_linked[$c]);
              $new_morgt = $old_left_pay_linked - $ppmt_val;

              $ppmt_check[] = (int)$ppmt_val + (int)$thirteen_amount;
              $left_pay[] =round($new_morgt - $net_pay_linked);
              $left_pay_linked[] = round($left_pay_linked[$c] - $net_linked[$c]);
            }else{
              $c = $x - 2;
              $left_pay[] =round($left_pay[$c] - $net_pay_linked);
              $left_pay_linked[] = round($left_pay_linked[$c] - $net_linked[$c]);
              $ppmt_check[] = round($pmt - $ipmt_check);
            }

            $val = $x - 1;
            $mr[] = round($interest_final[$val] + $ppmt_check[$val]);
            $linked_mr[] = round($interest_linked_final[$val] + $net_linked[$val]);
            $nper ="";

          }


      }
  

  if($x / 12 == $counter){
   $counter++; 
  }     
}

/*---------------VALUES WITH ENSLAVEMENT------------------*/
$counter  = 1;
  for($x = 1; $x <= 360; $x++){
    $e_a[] = $x;
    if($type_click == "B" || $type_click == "D" || $type_click == "H"){

     
        if($thirteen_year == 0){


          $e_madad = Bank_madad::where('years',$counter)->first();
          $e_prime = $e_madad['madad'];
          $e_prime_years[] = round($e_prime / 12,3);
          $e_prime_interest = round($e_prime / 1200,3);
          $e_prime_interests[] = $e_prime_interest;
          $e_net_py_linked = $report1->ipmt($e_prime_interest,$x,$period,$mortgage);
          $e_net_linked_pmt  = $report1->pmt($e_prime_interest,$period,$mortgage);
          $e_ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
          $e_pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
          $e_ppmt_check[] = round($e_pmt - $e_ipmt_check);
          $e_net_pay= round($e_pmt - $e_ipmt_check);
          $e_net_linked[] = round($e_net_pay * (1 + $e_prime_interest));
          $e_net_pay_linked = round($e_net_pay * (1 + $e_prime_interest));

          $e_interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));
          $e_interest_pay = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));
          $e_interest_linked_final[] = round($e_interest_pay* (1 + $e_prime_interest));

          if($x == 1){
            $e_left_pay[] = round(-($mortgage) - $e_net_pay_linked);
            $e_left_pay_linked[] = round(-($mortgage) * (1 + $e_prime_interests[0]));
          }else{
            $c = $x - 2;
            $d = $x -1;
            $e_left_pay[] =round($e_left_pay[$c] - $e_net_pay_linked);
            $e_left_pay_linked[] = round($e_left_pay_linked[$c] * (1 + $e_prime_interests[$d]));
          }

          $e_val = $x - 1;
          $e_mr[] = round($e_interest_final[$e_val] + $e_ppmt_check[$e_val]);
          $e_linked_mr[] = round($e_interest_linked_final[$e_val] + $e_net_linked[$e_val]);
          $e_nper ="";

        }else{
            

          $final_year = $thirteen_year * 12;
          $final_year_arr = $final_year - 1;

          $e_madad = Bank_madad::where('years',$counter)->first();
          $e_prime = $e_madad['madad'];
          $e_prime_years[] = round($e_prime / 12,3);
          $e_prime_interest = round($e_prime / 1200,3);
          $e_prime_interests[] = $e_prime_interest;
          $e_net_py_linked = $report1->ipmt($e_prime_interest,$x,$period,$mortgage);
          $e_net_linked_pmt  = $report1->pmt($e_prime_interest,$period,$mortgage);
          $e_ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
          $e_pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
          $e_ppmt_check[] = round($e_pmt - $e_ipmt_check);
          $e_net_pay= round($e_pmt - $e_ipmt_check);
          $e_net_linked[] = round($e_net_pay * (1 + $e_prime_interest));
          $e_net_pay_linked = round($e_net_pay * (1 + $e_prime_interest));

          $e_interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));
          $e_interest_pay = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));
          $e_interest_linked_final[] = round($e_interest_pay* (1 + $e_prime_interest));


          if($x == 1){
            $e_left_pay[] = round(-($mortgage) - $e_net_pay_linked);
            $e_left_pay_linked[] = round(-($mortgage) * (1 + $e_prime_interests[0]));
            $e_ppmt_check[] = round($e_pmt - $e_ipmt_check);
          }elseif($x == $final_year){
            $c = $x - 2;
            $d = $x -1;
            $e_ppmt_val = round($e_pmt - $e_ipmt_check) ;
            $e_old_left_pay_linked = round($e_left_pay_linked[$c] * (1 + $e_prime_interests[$d]));
            $e_new_morgt = $e_old_left_pay_linked - $e_ppmt_val;

            $e_ppmt_check[] = (int)$e_ppmt_val + (int)$thirteen_amount;

            $e_left_pay[] =round($e_new_morgt + $e_net_pay_linked);
            $e_left_pay_linked[] = round($e_left_pay_linked[$c] * (1 + $e_prime_interests[$d]));

            $e_payment_nper = $e_mr[0];
            $e_loan_nper = $e_new_morgt;
            $e_interest_nper = $interest_monthly;
            $e_nper = Log10 ($e_payment_nper/ ($e_payment_nper- $e_loan_nper * $e_interest_nper)) / Log10(1 + $e_interest_nper) + $final_year ;

          }else{
            $c = $x - 2;
            $d = $x -1;
            $e_left_pay[] =round($e_left_pay[$c] + $e_net_pay_linked);
            $e_left_pay_linked[] = round($e_left_pay_linked[$c] * (1 + $e_prime_interests[$d]));
            $e_ppmt_check[] = round($e_pmt - $e_ipmt_check);
          }

          $e_val = $x - 1;
          $e_mr[] = round($e_interest_final[$e_val] + $e_ppmt_check[$e_val]);
          $e_linked_mr[] = round($e_interest_linked_final[$e_val] + $e_net_linked[$e_val]);
        

        }

      }else{

          if($thirteen_year == 0){
            $e_prime = Bank_prime::where('years',$counter)->first();
            $e_prime = $e_prime['prime'];
            $e_prime_years[] = round($e_prime / 12,3);
            $e_prime_interest = $e_prime / 1200;

            $e_net_py_linked = $report1->ipmt($e_prime_interest,$x,$period,$mortgage);
            $e_net_linked_pmt  = $report1->pmt($e_prime_interest,$period,$mortgage);
            $e_net_linked[] = round($net_linked_pmt - $net_py_linked);
            $e_net_pay_linked = round($net_linked_pmt - $net_py_linked);
            $e_interest_linked_final[] = round($report1->ipmt($e_prime_interest,$x,$period,$mortgage));

            if($x == 1){

              $e_left_pay[] = round(-($mortgage) - $e_net_pay_linked);
              $e_left_pay_linked[] = round(-($mortgage) - $e_net_pay_linked);
            }else{
              $c = $x - 2;

              $e_left_pay[] =round($e_left_pay[$c] - $e_net_pay_linked);
              $e_left_pay_linked[] = round($e_left_pay_linked[$c] - $e_net_linked[$c]);
            }

            $e_ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
            $e_pmt  = $report1->pmt($interest_monthly,$period,$mortgage);

            $e_ppmt_check[] = round($e_pmt - $e_ipmt_check);

            $e_interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

            $e_val = $x - 1;
            $e_mr[] = round($e_interest_final[$e_val] + $ppmt_check[$e_val]);
            $e_linked_mr[] = round($e_interest_linked_final[$e_val] + $e_net_linked[$e_val]);
            $e_nper ="";

          }else{
            $final_year = $thirteen_year * 12;
            $final_year_arr = $final_year - 1;
            $e_prime = Bank_prime::where('years',$counter)->first();
            $e_prime = $e_prime['prime'];
            $e_prime_years[] = round($e_prime / 12,3);
            $e_prime_interest = $e_prime / 1200;

            $e_net_py_linked = $report1->ipmt($e_prime_interest,$x,$period,$mortgage);
            $e_net_linked_pmt  = $report1->pmt($e_prime_interest,$period,$mortgage);
            $e_net_linked[] = round($net_linked_pmt - $net_py_linked);
            $e_net_pay_linked = round($net_linked_pmt - $net_py_linked);
            $e_interest_linked_final[] = round($report1->ipmt($e_prime_interest,$x,$period,$mortgage));

            $e_ipmt_check = $report1->ipmt($interest_monthly,$x,$period,$mortgage);
            $e_pmt  = $report1->pmt($interest_monthly,$period,$mortgage);
            $e_interest_final[] = round($report1->ipmt($interest_monthly,$x,$period,$mortgage));

            if($x == 1){
              $e_left_pay[] = round(-($mortgage) - $e_net_pay_linked);
              $e_left_pay_linked[] = round(-($mortgage) - $e_net_pay_linked);
              $e_ppmt_check[] = round($e_pmt - $e_ipmt_check);
            }elseif($x == $final_year){

              $e_ppmt_val = round($e_pmt - $e_ipmt_check) ;
              $e_old_left_pay_linked = round($e_left_pay_linked[$c] - $e_net_linked[$c]);
              $e_new_morgt = $e_old_left_pay_linked - $e_ppmt_val;
              $e_ppmt_check[] = (int)$e_ppmt_val + (int)$thirteen_amount;
              $e_left_pay[] =round($e_new_morgt - $e_net_pay_linked);
              $e_left_pay_linked[] = round($e_left_pay_linked[$c] - $e_net_linked[$c]);
            }else{
              $c = $x - 2;
              $e_left_pay[] =round($e_left_pay[$c] - $e_net_pay_linked);
              $e_left_pay_linked[] = round($e_left_pay_linked[$c] - $e_net_linked[$c]);
              $e_ppmt_check[] = round($e_pmt - $e_ipmt_check);
            }

            $e_val = $x - 1;
            $e_mr[] = round($e_interest_final[$e_val] + $e_ppmt_check[$e_val]);
            $e_linked_mr[] = round($e_interest_linked_final[$e_val] + $e_net_linked[$e_val]);
            $e_nper ="";

          }


    }
    if($x / 12 == $counter){
     $counter++; 
    }
    
  }


  $total_a = array();
  $total_prime = array();
  $total_net_pay = array();
  $total_net_pay_linked = array();
  $total_interest_pay = array();
  $total_interest_pay_linked = array();
  $total_left_pay = array();
  $total_left_pay_linked = array();
  $total_mr = array();
  $total_linked_mr = array();
  for ($o=0; $o < 360 ; $o++) { 

    $total_a[] = $a[$o] + $e_a[$o];
    $total_prime[] = $prime_years[$o] + $e_prime_years[$o];
    $total_net_pay[] = $ppmt_check[$o] + $e_ppmt_check[$o];
    $total_net_pay_linked[] = $net_linked[$o] + $e_net_linked[$o];
    $total_interest_pay[] = $interest_final[$o] + $e_interest_final[$o];
    $total_interest_pay_linked[] = $interest_linked_final[$o] + $e_interest_linked_final[$o];
    $total_left_pay[] = $left_pay[$o] + $e_left_pay[$o];
    $total_left_pay_linked[] = $left_pay_linked[$o] + $e_left_pay_linked[$o];
    $total_mr[] = $mr[$o] + $e_mr[$o];
    $total_linked_mr[] = $linked_mr[$o] + $e_linked_mr[$o];
   
  }


  $total_array = array(

    'a_field'=> $a,
    'prime'=>$prime_years,
    'net_pay' =>$ppmt_check,
    'net_pay_linked' => $net_linked,
    'interest_pay' => $interest_final,
    'interest_pay_linked' => $interest_linked_final,
    'left_pay' => $left_pay,
    'left_pay_linked' => $left_pay_linked,
    'mr'=> $mr,
    'linked_mr' =>$linked_mr,

    'e_a_field'=> $e_a,
    'e_prime'=>$e_prime_years,
    'e_net_pay' =>$e_ppmt_check,
    'e_net_pay_linked' => $e_net_linked,
    'e_interest_pay' => $e_interest_final,
    'e_interest_pay_linked' => $e_interest_linked_final,
    'e_left_pay' => $e_left_pay,
    'e_left_pay_linked' => $e_left_pay_linked,
    'e_mr'=> $e_mr,
    'e_linked_mr' =>$e_linked_mr,

    'que_thirteen_one' => $que_thirteen_one,
    'que_thirteen_amount' => $que_thirteen_amount,
    'que_thirteen_year' => $que_thirteen_year,
    'count_thirteen' => $count_thirteen,
    //'nper' => $nper,
    //'e_nper' => $e_nper,

    'total_a'=> $total_a,
    'total_prime'=>$total_prime,
    'total_net_pay' =>$total_net_pay,
    'total_net_pay_linked' => $total_net_pay_linked,
    'total_interest_pay' => $total_interest_pay,
    'total_interest_pay_linked' => $total_interest_pay_linked,
    'total_left_pay' => $total_left_pay,
    'total_left_pay_linked' => $total_left_pay_linked,
    'total_mr'=> $total_mr,
    'total_linked_mr' =>$total_linked_mr,
  ); 

  return $total_array;
}



function step_seven($user_id){
$que_thirteen =  question_survey::where('user_id',$user_id)->where('question_id',15)->get();

$que_thirteen_one = $que_thirteen[0]->meta_value;
$que_thirteen_amount1 = $que_thirteen[1]->meta_value;
$que_thirteen_amount = json_decode($que_thirteen_amount1);

$que_thirteen_year1 = $que_thirteen[3]->meta_value;
$que_thirteen_year = json_decode($que_thirteen_year1);

//print_r($que_thirteen_year);
//die();

$main_data = array(

'thirteen_one' => $que_thirteen_one,
'thirteen_amount' => $que_thirteen_amount,
'thirteen_year' => $que_thirteen_year,

);

return $main_data;

}



}   
