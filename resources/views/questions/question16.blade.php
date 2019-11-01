
 <?php
$ques16 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','17')->get();

if(count($ques16)){

$loan_balance_1_1 = json_decode($ques16[1]->meta_value);
//$loan_balance_1_1  = $loan_balance_1_1[0];
$loan_balance_2_1 = json_decode($ques16[2]->meta_value);
//$loan_balance_2_1  = $loan_balance_2_1[0];
$termination_of_the_loan_1_1 = json_decode($ques16[3]->meta_value);
//$termination_of_the_loan_1_1  = $termination_of_the_loan_1_1[0];
$termination_of_the_loan_2_1 = json_decode($ques16[4]->meta_value);
//$termination_of_the_loan_2_1  = $termination_of_the_loan_2_1[0];
$Month_refund_1 = json_decode($ques16[5]->meta_value);
//$Month_refund_1  = $Month_refund_1[0];
$Monthly_repayments_1 = json_decode($ques16[6]->meta_value);
//$Monthly_repayments_1  = $Monthly_repayments_1[0];
}
?>
<div class="ques_16" id="ques_16" <?php if(count($ques16)){ }else{ echo'style="display:none"'; } ?>>
 <div class="q19 chat-container d-f f-d-c a-i-f-s" id="formQuestionSeventeenDIV">
	    <div class="chat-number">15</div>
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>האם יש לך אפשרות לקחת הלוואות נוספות לצורך רכישת הנכס?
				כגון: הלוואות חוץ בנקאיות, הלוואות חשכ”ל, משפחה או הלוואה 
			מיוחדת בהתאם למקום העבודה?</p>
		  <span class="message-timing">18:20</span>
		</div>

		<form method="post" id="formQuestionseventeen">


		<div class="chat-buttons">
 
			<ul class="question-ul my_question <?php if(count($ques16)){ echo'click-color-change'; }else{ } ?>">
		  	
			  	<li>
			  		<input id="additional_loans1" type="radio" name="additional_loans" value="Yes" <?php if(count($ques16)){ if($ques16[0]->meta_value == "Yes"){ echo "checked=checked"; } else{ } }?> >
			  		<label for="additional_loans1" class="main-button">כן</label>
			  	</li>
			  	<li>
			  		<input id="additional_loans2" type="radio" name="additional_loans" value="I do not know of any additional loans" <?php if(count($ques16)){ if($ques16[0]->meta_value == "I do not know of any additional loans"){ echo "checked=checked"; } else{ } }?>>
			  		<label for="additional_loans2" class="main-button">לא ידוע לי על הלוואות נוספות</label>
			  	</li>

		  	</ul>
		</div>



<div class="hide_16" <?php if(count($ques16) && $ques16[0]->meta_value == "Yes"){ ?> style=""; <?php  }else{  ?> style="display:none"; <?php } ?>>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p class="male_female_fifteem">פרט את כל ההלוואות המיוחדות
			אשר באפשרותך לקחת</p>
		  <span class="message-timing">18:26</span>
		</div>




		<div class="message no-background d-i-f f-d-c">


		    <div class=" repeated_fields_16">


    		<?php
				if(count($ques16)){
				$current_count_16 = count($loan_balance_1_1);
				$count = 0;
				$ss = 1;
				foreach($loan_balance_1_1 as $loan){ 
			?>


		    <div class="form-inline multiple-dropdown" id="dlt_16_<?php echo $ss; ?>">
		    
		    <div>
		    <div class="form-group">
			  <label class="d" for="loan-balance_<?php echo $ss; ?>"><?php echo $ss; ?>. אפשרות להלוואה <br> מיוחדת בסך:</label>


		      <input type="text" id="loan-balance_<?php echo $ss; ?>" class="form-control" name="loan_balance_1_1[]" value="<?php if(count($ques16)){ echo $loan; } ?>" onkeyup="this.value=addCommas(this.value);">


			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
			</div>
			</div>
			<div>
			<div class="form-group">
			<label> תקופה בשנים:</label>



		      	<select class="" name="termination_of_the_loan_1_1[]">
				  
				 <option value="1" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '1' ){ echo 'selected="selected"'; } } ?> >1</option>
				  <option value="2" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '2' ){ echo 'selected="selected"'; } } ?> >2</option>
				  <option value="3" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '3' ){ echo 'selected="selected"'; } } ?> >3</option>
				  <option value="4" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '4' ){ echo 'selected="selected"'; } } ?> >4</option>
				  <option value="5" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '5' ){ echo 'selected="selected"'; } } ?> >5</option>
				  <option value="6" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '6' ){ echo 'selected="selected"'; } } ?>>6</option>
				  <option value="7" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '7' ){ echo 'selected="selected"'; } } ?> >7</option>
				  <option value="8" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '8' ){ echo 'selected="selected"'; } } ?> >8</option>
				  <option value="9" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '9' ){ echo 'selected="selected"'; } } ?> >9</option>
				  <option value="10" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '10' ){ echo 'selected="selected"'; } } ?> >10</option>
				<option value="11" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '11' ){ echo 'selected="selected"'; } } ?> >11</option>
				  <option value="12" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '12' ){ echo 'selected="selected"'; } } ?> >12</option>
				  <option value="13" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '13' ){ echo 'selected="selected"'; } } ?> >13</option>
				  <option value="14" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '14' ){ echo 'selected="selected"'; } } ?> >14</option>
				  <option value="15" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '15' ){ echo 'selected="selected"'; } } ?> >15</option>
				  <option value="16" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '16' ){ echo 'selected="selected"'; } } ?> >16</option>
				  <option value="17" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '17' ){ echo 'selected="selected"'; } } ?> >17</option>
				  <option value="18" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '18' ){ echo 'selected="selected"'; } } ?> >18</option>
				  <option value="19" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '19' ){ echo 'selected="selected"'; } } ?> >19</option>
				  <option value="20" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '20' ){ echo 'selected="selected"'; } } ?> >20</option>
				  <option value="21" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '21' ){ echo 'selected="selected"'; } } ?> > 21</option>
				  <option value="22" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '22' ){ echo 'selected="selected"'; } } ?> >22</option>
				  <option value="23" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '23' ){ echo 'selected="selected"'; } } ?> >23</option>
				  <option value="24" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '24' ){ echo 'selected="selected"'; } } ?> >24</option>
				  <option value="25" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '25' ){ echo 'selected="selected"'; } } ?> >25</option>
				  <option value="26" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '26' ){ echo 'selected="selected"'; } } ?> >26</option>
				  <option value="27" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '27' ){ echo 'selected="selected"'; } } ?> >27</option>
				  <option value="28" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '28' ){ echo 'selected="selected"'; } } ?> >28</option>
				  <option value="29" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '29' ){ echo 'selected="selected"'; } } ?> >29</option>
				  <option value="30" <?php if(count($ques16)){ if($termination_of_the_loan_1_1[$count] == '30' ){ echo 'selected="selected"'; } } ?> >30</option>
				</select>







			</div>
			</div>
			<div>
			<div class="form-group">
			<label for="Month_refund_<?php echo $ss; ?>">אחוז ריבית:</label>
		      
		      <input type="text" id="Month_refund_<?php echo $ss; ?>" class="form-control" name="Month_refund_1[]" value="<?php if(count($ques16)){ echo $Month_refund_1[$count]; } ?>" >

			  <img src="images/pers.png" alt="" class="placeholder-icon">
			</div>
			</div>
			<div>
				@php
				if($ss == 1){

				}else{
				@endphp
			  		<a href="javascript:void(0);" class="delete-button dlt_btn_16 run_upto_min_16_<?php echo $current_count_16; ?>" data-id="dlt_16_<?php echo $ss; ?> "><i class="fa fa-minus"></i>מחק</a>
				@php
					}
				@endphp
			</div>
			</div>

					<?php
						$ss++;
						$count++;
						};
						}else{
						$current_count_16 = 1;
					?>
			<div class="form-inline multiple-dropdown" id="dlt_16_1">
			<div>
		    <div class="form-group">
			  <label class="d" for="loan-balance_1">1. אפשרות להלוואה <br> מיוחדת בסך:</label>
		      <input type="text" id="loan-balance_1" class="form-control" name="loan_balance_1_1[]" value="80,000" onkeyup="this.value=addCommas(this.value);">
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
			</div>
			</div>
			<div>
			<div class="form-group">
			<label> תקופה בשנים:</label>
		      	<select class="" name="termination_of_the_loan_1_1[]">
				  	<option value="1">1</option>
					<option value="2" >2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
				</select>
			</div>
			</div>
			<div>
			<div class="form-group">
			<label for="Month_refund_1">אחוז ריבית:</label>
		      <input type="text" id="Month_refund_1" class="form-control" name="Month_refund_1[]" value="1" >
			  <img src="images/pers.png" alt="" class="placeholder-icon">
			</div>

			</div>
            <div></div>
			</div>


					<?php
						} 
					?>

			</div>
			</div>
		 
		  
		  <div class="chat-buttons">
		    <a href="javascript:void(0);" class="add add_new_repeated_fields_16 run_upto_max_16_<?php echo $current_count_16; ?>"><i class="fa fa-plus"></i>הוסף</a>
		  </div>
		   <button type="submit" class="ok_btn main-button1">אישור</button>
		   <div class="errMsg"></div>

		     {{ csrf_field() }}
		</div>
	</div>
	  		
	  	</form>
	</div>

	<div class="width-full">
		<div class="message d-i-f f-d-c spinner1 spinner-ques-16" style="display:none;">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>


</div>
<script>
	window.location.hash = '#formQuestionSeventeenDIV';


/*Repeated Fields*/
	var t16 = '<?php echo $current_count_16; ?>';
	//alert(t15);
	var row16 = t16;
	$('.add_new_repeated_fields_16').on('click', function(){
		$('.dlt_btn_16').removeClass('run_upto_min_16'+row16);
		$(this).removeClass('run_upto_max_16_'+row16);
		row16++;

	$('.repeated_fields_16').append('<div class="form-inline multiple-dropdown" id="dlt_16_'+row16+'"><div><div class="form-group"><label  class="d" for="loan-balance_'+row16+'">'+row16+'. אפשרות להלוואה <br> מיוחדת בסך:</label><input type="text" id="loan-balance_'+row16+'" class="form-control" name="loan_balance_1_1[]" value="140,000" onkeyup="this.value=addCommas(this.value);"><img src="images/placeholder-icon.png" alt="" class="placeholder-icon"></div></div><div><div class="form-group"><label> תקופה בשנים:</label><select class="" name="termination_of_the_loan_1_1[]"><option value="1"> 1</option><option value="2" > 2</option><option value="3"> 3</option><option value="4"> 4</option><option value="5"> 5</option><option value="6"> 6</option><option value="7"> 7</option><option value="8"> 8</option><option value="9"> 9</option><option value="10"> 10</option><option value="11"> 11</option><option value="12"> 12</option><option value="13"> 13</option><option value="14"> 14</option><option value="15"> 15</option><option value="16"> 16</option><option value="17"> 17</option><option value="18"> 18</option><option value="19"> 19</option><option value="20"> 20</option><option value="21"> 21</option><option value="22"> 22</option><option value="23"> 23</option><option value="24"> 24</option><option value="25"> 25</option><option value="26"> 26</option><option value="27"> 27</option><option value="28"> 28</option><option value="29"> 29</option><option value="30"> 30</option></select></div></div><div><div class="form-group"><label for="Month_refund_'+row16+'">אחוז ריבית:</label><input type="text" id="Month_refund_'+row16+'" class="form-control" name="Month_refund_1[]" value="2"><img src="images/pers.png" alt="" class="placeholder-icon"></div></div><div class="section-4"><a href="javascript:void(0);" class="delete-button dlt_btn_16" data-id="dlt_16_'+row16+'"><i class="fa fa-minus"></i>מחק</a></div></div>'); 

		$(this).addClass('run_upto_max_16_'+row16);
		$('.dlt_btn_16').addClass('run_upto_min_16_'+row16);


	});

	/*Delete fields*/
	$('body').on('click','.dlt_btn_16',function() {
		id = $(this).data('id');
		$( "div" ).remove( '#'+id );

		$('.add_new_repeated_fields_16').removeClass('run_upto_max_16_'+row16);
		$('.dlt_btn_16').removeClass('run_upto_min_16_'+row16);

		row16--;

		$('.add_new_repeated_fields_16').addClass('run_upto_max_16_'+row16);
		$('.dlt_btn_16').addClass('run_upto_min_16_'+row16);

		$('.form-group .d:last').html();
		$('.form-group .d:last').html('2.אפשרות להלוואה <br> מיוחדת בסך: ');
		$('.form-group .d:first').html();
		$('.form-group .d:first').html('1.אפשרות להלוואה <br> מיוחדת בסך: ');

		$('.repeated_fields_16 .form-inline:last').attr('id','dlt_16_2');
		$('.repeated_fields_16 .form-inline:first').attr('id','dlt_16_1');
		$('.repeated_fields_16 .form-inline a:first').attr('data-id','dlt_16_1');
		$('.repeated_fields_16 .form-inline a:last').attr('data-id','dlt_16_2');
	});


	

	$('body').on('keyup','#Month_refund_1',function(){
	  if ($(this).val() < 1){ 
	  		// $(this).val('1');
	  }
	});

	$('body').on('keyup','#Month_refund_2',function(){
	  if ($(this).val() < 1){ 
	  		// $(this).val('1');
	  }
	});

	$('body').on('keyup','#Month_refund_3',function(){
	  if ($(this).val() < 1){ 
	  		// $(this).val('1');
	  }
	});




</script>
