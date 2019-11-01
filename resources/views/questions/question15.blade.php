<?php
$ques15 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','16')->get();
if(count($ques15)){
$loan_balance_1 = json_decode($ques15[1]->meta_value);
//$loan_balance_1  = $loan_balance_1[0];
$Month_refund = json_decode($ques15[2]->meta_value);
//$Month_refund  = $Month_refund[0];
$redemmed = json_decode($ques15[3]->meta_value);
//$redemmed  = $redemmed[0];

}
?>
<div class="ques_15" id="ques_15" <?php if(count($ques15)){ }else{ echo'style="display:none"'; } ?>>
<div class="chat-container current-loans d-f f-d-c a-i-f-s" id="formQuestionSixteenDIV">

	<div class="chat-number">14</div>
	<div class="message-pic">
		<img src="images/advisor.png" alt="">
	</div>
	<div class="message d-i-f f-d-c">
		<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		<p class="male_female_fourteen">אודה לך אם תוכל לפרט לגבי הלואות קיימות שאתה עדיין משלם,
		כדי שנוכל לתת לך תחשיב משכנתא אופטימלי.
		אנו מתחשבים בכל הנתונים שאתה ממלא.
		</p>
		<span class="message-timing">18:26</span>
	</div>



	<!--Form tag stared -->
	<form class="form-inline multiple-dropdown " method="post" id="formQuestionsixteen">
		<div class="chat-buttons">
			<ul class="question-ul my_question <?php if(count($ques15)){ echo'click-color-change'; }else{ } ?>">
				<li>
					<input id="other_loan1" type="radio" name="other_loan" value="Yes_I_have_loan" <?php if(count($ques15)){ if($ques15[0]->meta_value == "Yes_I_have_loan"){ echo "checked=checked"; } else{ } }?> >
					<label for="other_loan1" class="main-button">כן ,יש לי הלוואות</label>
				</li>
				<li>
					<input id="other_loan2" type="radio" name="other_loan" value="I have no loans" <?php if(count($ques15)){ if($ques15[0]->meta_value == "I have no loans"){ echo "checked=checked"; } else{ } }?>>
					<label for="other_loan2" class="main-button">אין לי הלוואות</label>
				</li>
			</ul>
		</div>


		<div class="hide_14" <?php if(count($ques15) && $ques15[0]->meta_value == "Yes_I_have_loan"){ ?> style=""; <?php  }else{  ?> style="display:none"; <?php } ?> >

			<div class="message d-i-f f-d-c width-auto">	
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>מידע זה חשוב להצעה,
				אנא השתדל לפרט את ההלוואות הקימות.</p>
				<span class="message-timing">18:26</span>
			</div>

			<div class="message no-background d-i-f f-d-c">
				<div class="repeated_div_14">


						<?php
						if(count($ques15)){
						$current_count_15 = count($loan_balance_1);
						$count = 0;
						$ss = 1;
						foreach($loan_balance_1 as $loan){ 
						?>
					<div class="form-inline multiple-dropdown" id="dlt_15_<?php echo $ss; ?>">
					<div class="section-1">
						<div class="form-group">
						<label class="c" for="loan-balance<?php echo $ss; ?>"><?php echo $ss; ?>. יתרת הלוואה</label>
						<input type="text" id="loan-balance<?php echo $ss; ?>" class="form-control" name="loan_balance_1[]" value="<?php if(count($ques15)){ echo $loan; } ?>" onkeyup="this.value=addCommas(this.value);">
						<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
						</div>
					</div>
					<div class="section-2">
						<div class="form-group">
						<label> ניתן לפרוע הלוואה <br>בעוד מספר שנים:</label>
					      <select class="" name="redemmed[]" >
								  
								 		<option value="1" <?php if(count($ques15)){ if($redemmed[$count] == '1' ){ echo 'selected="selected"'; } } ?> > 1</option>
										  <option value="2" <?php if(count($ques15)){ if($redemmed[$count] == '2' ){ echo 'selected="selected"'; } } ?> > 2</option>
										  <option value="3" <?php if(count($ques15)){ if($redemmed[$count] == '3' ){ echo 'selected="selected"'; } } ?> > 3</option>
										  <option value="4" <?php if(count($ques15)){ if($redemmed[$count] == '4' ){ echo 'selected="selected"'; } } ?> > 4</option>
										  <option value="5" <?php if(count($ques15)){ if($redemmed[$count] == '5' ){ echo 'selected="selected"'; } } ?> > 5</option>
										  <option value="6" <?php if(count($ques15)){ if($redemmed[$count] == '6' ){ echo 'selected="selected"'; } } ?>> 6</option>
										  <option value="7" <?php if(count($ques15)){ if($redemmed[$count] == '7' ){ echo 'selected="selected"'; } } ?> > 7</option>
										  <option value="8" <?php if(count($ques15)){ if($redemmed[$count] == '8' ){ echo 'selected="selected"'; } } ?> > 8</option>
										  <option value="9" <?php if(count($ques15)){ if($redemmed[$count] == '9' ){ echo 'selected="selected"'; } } ?> > 9</option>
										  <option value="10" <?php if(count($ques15)){ if($redemmed[$count] == '10' ){ echo 'selected="selected"'; } } ?> > 10</option>
										<option value="11" <?php if(count($ques15)){ if($redemmed[$count] == '11' ){ echo 'selected="selected"'; } } ?> > 11</option>
										  <option value="12" <?php if(count($ques15)){ if($redemmed[$count] == '12' ){ echo 'selected="selected"'; } } ?> > 12</option>
										  <option value="13" <?php if(count($ques15)){ if($redemmed[$count] == '13' ){ echo 'selected="selected"'; } } ?> > 13</option>
										  <option value="14" <?php if(count($ques15)){ if($redemmed[$count] == '14' ){ echo 'selected="selected"'; } } ?> > 14</option>
										  <option value="15" <?php if(count($ques15)){ if($redemmed[$count] == '15' ){ echo 'selected="selected"'; } } ?> > 15</option>
										  <option value="16" <?php if(count($ques15)){ if($redemmed[$count] == '16' ){ echo 'selected="selected"'; } } ?> > 16</option>
										  <option value="17" <?php if(count($ques15)){ if($redemmed[$count] == '17' ){ echo 'selected="selected"'; } } ?> > 17</option>
										  <option value="18" <?php if(count($ques15)){ if($redemmed[$count] == '18' ){ echo 'selected="selected"'; } } ?> > 18</option>
										  <option value="19" <?php if(count($ques15)){ if($redemmed[$count] == '19' ){ echo 'selected="selected"'; } } ?> > 19</option>
										  <option value="20" <?php if(count($ques15)){ if($redemmed[$count] == '20' ){ echo 'selected="selected"'; } } ?> > 20</option>
										  <option value="21" <?php if(count($ques15)){ if($redemmed[$count] == '21' ){ echo 'selected="selected"'; } } ?> > 21</option> 
										  <option value="22" <?php if(count($ques15)){ if($redemmed[$count] == '22' ){ echo 'selected="selected"'; } } ?> > 22</option> 
										  <option value="23" <?php if(count($ques15)){ if($redemmed[$count] == '23' ){ echo 'selected="selected"'; } } ?> > 23</option> 
										  <option value="24" <?php if(count($ques15)){ if($redemmed[$count] == '24' ){ echo 'selected="selected"'; } } ?> > 24</option> 
										  <option value="25" <?php if(count($ques15)){ if($redemmed[$count] == '25' ){ echo 'selected="selected"'; } } ?> > 25</option> 
										  <option value="26" <?php if(count($ques15)){ if($redemmed[$count] == '26' ){ echo 'selected="selected"'; } } ?> > 26</option> 
										  <option value="27" <?php if(count($ques15)){ if($redemmed[$count] == '27' ){ echo 'selected="selected"'; } } ?> > 27</option> 
										  <option value="28" <?php if(count($ques15)){ if($redemmed[$count] == '28' ){ echo 'selected="selected"'; } } ?> > 28</option> 
										  <option value="29" <?php if(count($ques15)){ if($redemmed[$count] == '29' ){ echo 'selected="selected"'; } } ?> > 29</option> 
										  <option value="30" <?php if(count($ques15)){ if($redemmed[$count] == '30' ){ echo 'selected="selected"'; } } ?> > 30</option>
							</select>
						</div>
					</div>
					<div class="section-3">
						<div class="form-group">
							<label for="Month_refund<?php echo $ss; ?>">החזר חודשי:</label>
							<input type="text" id="Month_refund<?php echo $ss; ?>" class="form-control" name="Month_refund[]" value="<?php if(count($ques15)){ echo $Month_refund[$count]; } ?>" onkeyup="this.value=addCommas(this.value);">
							 <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"> 
						</div>
					</div>
					<div class="section-4">
						@php
						if($ss == 1){

						}else{
						@endphp
						<a href="javascript:void(0);" class="delete-button dlt_btn_15 run_upto_min_15_<?php echo $current_count_15; ?>" data-id="dlt_15_<?php echo $ss; ?>"><i class="fa fa-minus"></i>מחק</a>
						@php } @endphp
					</div>
					</div>
					<?php
						$ss++;
						$count++;
						};
						}else{
							$current_count_15 = 1;
					?>


					<div class="form-inline multiple-dropdown" id="dlt_15_1">
						<div class="section-1">
							<div class="form-group">
							<label class="c" for="loan-balance1">1. יתרת הלוואה</label>
							<input type="text" id="loan-balance1" class="form-control" name="loan_balance_1[]" value="60,000" onkeyup="this.value=addCommas(this.value);">
							<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
							</div>
						</div>
						<div class="section-2">
							<div class="form-group">
							<label> ניתן לפרוע הלוואה <br>בעוד מספר שנים:  </label>
						      <select class="" name="redemmed[]" >
									  	<option value="1"> 1</option>
										<option value="2" > 2</option>
										<option value="3"> 3</option>
										<option value="4"> 4</option>
										<option value="5"> 5</option>
										<option value="6"> 6</option>
										<option value="7"> 7</option>
										<option value="8"> 8</option>
										<option value="9"> 9</option>
										<option value="10"> 10</option>
										<option value="11"> 11</option>
										<option value="12"> 12</option>
										<option value="13"> 13</option>
										<option value="14"> 14</option>
										<option value="15"> 15</option>
										<option value="16"> 16</option>
										<option value="17"> 17</option>
										<option value="18"> 18</option>
										<option value="19"> 19</option>
										<option value="20"> 20</option>
										<option value="21"> 21</option>
										<option value="22"> 22</option>
										<option value="23"> 23</option>
										<option value="24"> 24</option>
										<option value="25"> 25</option>
										<option value="26"> 26</option>
										<option value="27"> 27</option>
										<option value="28"> 28</option>
										<option value="29"> 29</option>
										<option value="30"> 30</option>
								</select>
							</div>
						</div>
						<div class="section-3">
							<div class="form-group">
								<label for="Month_refund1">החזר חודשי:</label>
								<input type="text" id="Month_refund1" class="form-control" name="Month_refund[]" value="1,000" onkeyup="this.value=addCommas(this.value);">
								<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
							</div>
						</div>
					</div>

					<?php
						} 
					?>
				</div>


				<div class="chat-buttons">
				<a href="javascript:void(0);" class="add add_new_repeated_fields_15 run_upto_max_15_<?php echo $current_count_15; ?>"><i class="fa fa-plus"></i>הוסף</a>
				</div>
				<button type="submit" class="ok_btn main-button1">אישור</button>
			</div>
		</div>
		{{ csrf_field() }}
		<div class="errMsg"></div>
	</form>
</div>
<div class="width-full">
	<div class="message d-i-f f-d-c spinner spinner-ques-15" style="display:none;">
		<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
</div>


</div>

<script>
	window.location.hash = '#formQuestionSixteenDIV';

	/*Repeated Fields*/
	var t15 = '<?php echo $current_count_15; ?>';
	//alert(t15);
	var row15 = t15;
	$('.add_new_repeated_fields_15').on('click', function(){
		$('.dlt_btn_15').removeClass('run_upto_min_15'+row15);
		$(this).removeClass('run_upto_max_15_'+row15);
		row15++;

	$('.repeated_div_14').append('<div class="form-inline multiple-dropdown" id="dlt_15_'+row15+'"><div class="section-1"><div class="form-group"><label class="c" for="loan-balance'+row15+'">'+row15+'. יתרת הלוואה</label><input type="text" id="loan-balance'+row15+'" class="form-control" name="loan_balance_1[]" value="120,000" onkeyup="this.value=addCommas(this.value);"><img src="images/placeholder-icon.png" alt="" class="placeholder-icon"></div></div><div class="section-2"><div class="form-group"><label>ניתן לפרוע הלוואה <br>בעוד מספר שנים:</label><select class="" name="redemmed[]" ><option value="1"> 1</option><option value="2" > 2</option><option value="3"> 3</option><option value="4"> 4</option><option value="5"> 5</option><option value="6"> 6</option><option value="7"> 7</option><option value="8"> 8</option><option value="9"> 9</option><option value="10"> 10</option><option value="11"> 11</option><option value="12"> 12</option><option value="13"> 13</option><option value="14"> 14</option><option value="15"> 15</option><option value="16"> 16</option><option value="17"> 17</option><option value="18"> 18</option><option value="19"> 19</option><option value="20"> 20</option><option value="21"> 21</option><option value="22"> 22</option><option value="23"> 23</option><option value="24"> 24</option><option value="25"> 25</option><option value="26"> 26</option><option value="27"> 27</option><option value="28"> 28</option><option value="29"> 29</option><option value="30"> 30</option></select></div></div><div class="section-3"><div class="form-group"><label for="Month_refund'+row15+'">החזר חודשי:</label><input type="text" id="Month_refund'+row15+'" class="form-control" name="Month_refund[]" value="2,000" onkeyup="this.value=addCommas(this.value);"><img src="images/placeholder-icon.png" alt="" class="placeholder-icon"></div></div><div class="section-4"><a href="javascript:void(0);" class="delete-button dlt_btn_15" data-id="dlt_15_'+row15+'" data-id="dlt_15_'+row15+'"><i class="fa fa-minus"></i>מחק</a></div></div>'); 

		$(this).addClass('run_upto_max_15_'+row15);
		$('.dlt_btn_15').addClass('run_upto_min_15_'+row15);

	});

	/*Delete fields*/
	$('body').on('click','.dlt_btn_15', function() {
		id = $(this).data('id');
		$( "div" ).remove( '#'+id );

		$('.add_new_repeated_fields_15').removeClass('run_upto_max_15_'+row15);
		$('.dlt_btn_15').removeClass('run_upto_min_15_'+row15);

		row15--;

		$('.add_new_repeated_fields_15').addClass('run_upto_max_15_'+row15);
		$('.dlt_btn_15').addClass('run_upto_min_15_'+row15);

		$('.form-group .c:last').html();
		$('.form-group .c:last').html('2. יתרת הלוואה: ');
		$('.form-group .c:first').html();
		$('.form-group .c:first').html('1. יתרת הלוואה: ');

		$('.repeated_div_14 .form-inline:last').attr('id','dlt_15_2');
		$('.repeated_div_14 .form-inline:first').attr('id','dlt_15_1');
		$('.repeated_div_14 .form-inline .section-4 a:first').attr('data-id','dlt_15_1');
		$('.repeated_div_14 .form-inline .section-4 a:last').attr('data-id','dlt_15_2');
	});


	// $('body').on('keyup','#loan-balance1',function(){
	//   if ($(this).val() < 10000){ 
	//   		$(this).val('10,000');
	//   }
	// });

	// $('body').on('keyup','#loan-balance2',function(){
	//   if ($(this).val() < 10000){ 
	//   		$(this).val('10,000');
	//   }
	// });

	// $('body').on('keyup','#loan-balance3',function(){
	//   if ($(this).val() < 10000){ 
	//   		$(this).val('10,000');
	//   }
	// });

	$('body').on('keyup','#Month_refund1',function(){
	  if ($(this).val() < 1){ 
	  		// $(this).val('1');
	  }
	});

	$('body').on('keyup','#Month_refund2',function(){
	  if ($(this).val() < 1){ 
	  		// $(this).val('1');
	  }
	});

	$('body').on('keyup','#Month_refund3',function(){
	  if ($(this).val() < 1){ 
	  		// $(this).val('1');
	  }
	});




</script>
