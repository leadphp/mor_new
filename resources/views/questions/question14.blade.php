<?php

$ques14 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','15')->get();

if(count($ques14)){
$investment_amount = json_decode($ques14[1]->meta_value);
//$investment_amount  = $investment_amount[0];
$investment_amount_1 = json_decode($ques14[2]->meta_value);
//$investment_amount_1  = $investment_amount_1[0];
$repay_another = json_decode($ques14[3]->meta_value);
//$repay_another  = $repay_another[0];
$redeemed = json_decode($ques14[4]->meta_value);
//$redeemed  = $redeemed[0];
$loan_balance_percentage = json_decode($ques14[5]->meta_value);
//$loan_balance_percentage  = $loan_balance_percentage[0];
$monthly_repayments_percentage = json_decode($ques14[6]->meta_value);
//$monthly_repayments_percentage  = $monthly_repayments_percentage[0];
}
?>


<div class="ques_14" id="ques_14" <?php if(count($ques14)){ }else{ echo'style="display:none"'; } ?>>
<div class="q17 chat-container d-f f-d-c a-i-f-s" id="formQuestionFifteenDIV">
    <div class="chat-number">13</div>
    <div class="message-pic">
	    <img src="images/advisor.png" alt="">
	 </div>
    <div class="message d-i-f f-d-c">
	  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
	  <p>אחלה. אנחנו ממשיכים!
		השאלות הקרובות שלי הן עבור איסוף נתונים פיננסים. 
		איתם אוכל לייעץ לך בבחירת המשכנתא בהמשך.
	  </p>
	  <span class="message-timing">18:20</span>
	</div>
	<div class="message d-i-f f-d-c">
	  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
	  <p>האם אתה מצפה לקבל סכומי כסף משמעותיים בעתיד
		איתם תוכל לפרוע חלק או את כל המשכנתא?</p>
		<p>לדוגמא, חסכון או קרנות שאתה יכול לפתוח, ירושה, 
		השקעות ועוד...</p>
	  <span class="message-timing">18:20</span>
	</div>
	<form class="form-inline multiple-dropdown " method="post" id="formQuestionfifteen">
		<div class="full-section">
			<div class="chat-buttons">
			  	<ul class="question-ul my_question <?php if(count($ques14)){ echo'click-color-change'; }else{ } ?>">
				  	<li>
				  		<input id="money_in_the_future1" type="radio" name="ques14" value="Yes" <?php if(count($ques14)){ if($ques14[0]->meta_value == "Yes"){ echo "checked=checked"; } else{ } }?>>
				  		<label for="money_in_the_future1" class="main-button">כן, אני מצפה לקבל</label>
				  	</li>
				  	<li>
				  		<input id="money_in_the_future2" type="radio" name="ques14" value="No" <?php if(count($ques14)){ if($ques14[0]->meta_value == "No"){ echo "checked=checked"; } else{ } }?> >
				  		<label for="money_in_the_future2" class="main-button">לצערי לא</label>
				  	</li>
			  	</ul>
			</div>
        </div>

		<div class="full-section  Repeated_Section_13 questionfourteenOption" <?php if(count($ques14) && $ques14[0]->meta_value == "Yes"){ ?> style=""; <?php  }else{  ?> style="display:none"; <?php } ?> >
			<div class="message d-i-f f-d-c">
			  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			  <p>יופי! כמה אתה משער שתקבל?
				גם בערך זה בסדר</p>
			  <span class="message-timing">18:20</span>
			</div>
		
		<div class="full-section">
			<div class="message no-background d-i-f f-d-c">
		        <div >


					<div class="section_13_repeat">
						<?php
						if(count($ques14)){
						$current_count = count($investment_amount);
						$count = 0;
						$ss = 1;
						foreach($investment_amount as $investment){ 
						?>
			        	<div class="form-inline multiple-dropdown " id="dlt_<?php echo $ss; ?>">
							<div class="section-1">
								<div class="form-group">
								  <label class="b" for="investment-amount"><?php  echo $ss; ?>. מקבל סכום השקעה בסך</label>
							      <input type="text" id="investment-amount<?php echo $ss; ?>" class="form-control" name="investment_amount[]" value="<?php if(count($ques14)){ echo $investment; }else{  } ?>" onkeyup="this.value=addCommas(this.value);"/>
								  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
								</div>
							</div>
							<div class="section-2">
								<div class="form-group">
								<label>ניתן לפרוע השקעה  <br> בעוד מספר שנים:</label>
							      <select class="" name="repay_another[]" >
										  <option value="1" <?php if(count($ques14)){ if($repay_another[$count] == '1' ){ echo 'selected="selected"'; } } ?> >1</option>
										  <option value="2" <?php if(count($ques14)){ if($repay_another[$count] == '2' ){ echo 'selected="selected"'; } } ?> >2</option>
										  <option value="3" <?php if(count($ques14)){ if($repay_another[$count] == '3' ){ echo 'selected="selected"'; } } ?> >3</option>
										  <option value="4" <?php if(count($ques14)){ if($repay_another[$count] == '4' ){ echo 'selected="selected"'; } } ?> >4</option>
										  <option value="5" <?php if(count($ques14)){ if($repay_another[$count] == '5' ){ echo 'selected="selected"'; } } ?> >5</option>
										  <option value="6" <?php if(count($ques14)){ if($repay_another[$count] == '6' ){ echo 'selected="selected"'; } } ?> >6</option>
										  <option value="7" <?php if(count($ques14)){ if($repay_another[$count] == '7' ){ echo 'selected="selected"'; } } ?> >7</option>
										  <option value="8" <?php if(count($ques14)){ if($repay_another[$count] == '8' ){ echo 'selected="selected"'; } } ?> >8</option>
										  <option value="9" <?php if(count($ques14)){ if($repay_another[$count] == '9' ){ echo 'selected="selected"'; } } ?> >9</option>
										  <option value="10" <?php if(count($ques14)){ if($repay_another[$count] == '10' ){ echo 'selected="selected"'; } } ?> >10</option>
										<option value="11" <?php if(count($ques14)){ if($repay_another[$count] == '11' ){ echo 'selected="selected"'; } } ?> >11</option>
										  <option value="12" <?php if(count($ques14)){ if($repay_another[$count] == '12' ){ echo 'selected="selected"'; } } ?> >12</option>
										  <option value="13" <?php if(count($ques14)){ if($repay_another[$count] == '13' ){ echo 'selected="selected"'; } } ?> >13</option>
										  <option value="14" <?php if(count($ques14)){ if($repay_another[$count] == '14' ){ echo 'selected="selected"'; } } ?> >14</option>
										  <option value="15" <?php if(count($ques14)){ if($repay_another[$count] == '15' ){ echo 'selected="selected"'; } } ?> >15</option>
										  <option value="16" <?php if(count($ques14)){ if($repay_another[$count] == '16' ){ echo 'selected="selected"'; } } ?> >16</option>
										  <option value="17" <?php if(count($ques14)){ if($repay_another[$count] == '17' ){ echo 'selected="selected"'; } } ?> >17</option>
										  <option value="18" <?php if(count($ques14)){ if($repay_another[$count] == '18' ){ echo 'selected="selected"'; } } ?> >18</option>
										  <option value="19" <?php if(count($ques14)){ if($repay_another[$count] == '19' ){ echo 'selected="selected"'; } } ?> >19</option>
										  <option value="20" <?php if(count($ques14)){ if($repay_another[$count] == '20' ){ echo 'selected="selected"'; } } ?> >20</option>

									</select>
								</div>
							</div>
							<div class="section-3">
								@php
								if($ss == 1){

								}else{
								@endphp
								<a href="javascript:void(0);" class="delete-button dlt_btn_13 run_upto_min_13_<?php echo$current_count; ?> hhhhhh" data-id="dlt_<?php echo $ss; ?>"><i class="fa fa-minus"></i>מחק
								</a>
								@php } @endphp
							</div>
						</div>
						<?php
							$ss++;
							$count++;
							};
							}else{
								$current_count = 1;
						?>
						<div class="form-inline multiple-dropdown frontier" id="dlt_1">
							<div class="section-1">
								<div class="form-group">
								  <label class="b" for="investment-amount1">1. מקבל סכום השקעה בסך</label>
							      <input type="text" id="investment-amount1" class="form-control" name="investment_amount[]" value="30,000" onkeyup="this.value=addCommas(this.value);"/>
								  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon" onkeyup="this.value=addCommas(this.value);"/>
								</div>
							</div>
							<div class="section-2">
								<div class="form-group">
								<label>ניתן לפרוע השקעה  <br> בעוד מספר שנים:</label>
							      <select class="" name="repay_another[]" >
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
									</select>
								</div>
							</div>
						</div>
						<?php
							} 
						?>
					</div>

				  	<div class="chat-buttons">
				    	<a href="javascript:void(0);" class=" add add_new_repeated_fields_13 run_upto_max_13_<?php echo $current_count; ?>"><i class="fa fa-plus"></i>הוסף</a>
				  	</div>
				    <button type="submit" class="ok_btn main-button1">אישור</button>
				</div>
			</div>
		</div>
		</div>

		{{ csrf_field() }}
	  	<div class="errMsg"></div>
	</form>
</div>
<div class="width-full">
	<div class="message d-i-f f-d-c spinner spinner-ques-14" style="display:none;">
		<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
</div>


</div>
<script>
	window.location.hash = '#formQuestionFifteenDIV';
	/*Repeated Fields*/
	var t13 = '<?php echo $current_count; ?>';
	var row13 = t13;
	$('.add_new_repeated_fields_13').on('click', function(){
		$('.dlt_btn_13').removeClass('run_upto_min_13'+row13);
		$(this).removeClass('run_upto_max_13_'+row13);
		row13++;

	$('.section_13_repeat').append('<div class="form-inline multiple-dropdown " id="dlt_'+row13+'"><div class="section-1"><div class="form-group"><label class="b" for="investment-amount">'+row13+'. מקבל סכום השקעה בסך</label><input type="text" id="investment-amount'+row13+'" class="form-control" name="investment_amount[]" value="50,000"  onkeyup="this.value=addCommas(this.value);"/><img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/></div></div><div class="section-2"><div class="form-group"><label>ניתן לפרוע השקעה  <br> בעוד מספר שנים:</label><select class="" name="repay_another[]" ><option value="1"> 1</option><option value="2" > 2</option><option value="3"> 3</option><option value="4"> 4</option><option value="5"> 5</option><option value="6"> 6</option><option value="7"> 7</option><option value="8"> 8</option><option value="9"> 9</option><option value="10"> 10</option><option value="11"> 11</option><option value="12"> 12</option><option value="13"> 13</option><option value="14"> 14</option><option value="15"> 15</option><option value="16"> 16</option><option value="17"> 17</option><option value="18"> 18</option><option value="19"> 19</option><option value="20"> 20</option></select></div></div><div class="section-3"><a href="javascript:void(0);" class="delete-button dlt_btn_13 run_upto_min_13_'+row13+'" data-id="dlt_'+row13+'"><i class="fa fa-minus"></i>מחק</a></div></div>');
		$(this).addClass('run_upto_max_13_'+row13);
		$('.dlt_btn_13').addClass('run_upto_min_13_'+row13); 
	});

	/*Delete fields*/
	$('body').on('click','.dlt_btn_13', function() {
		id = $(this).data('id');
		//alert(id);
		$( "div" ).remove( '#'+id );
		$('.add_new_repeated_fields_13').removeClass('run_upto_max_13_'+row13);
		$('.section-3 a.dlt_btn_13').removeClass('run_upto_min_13_'+row13);

		row13--;

		$('.add_new_repeated_fields_13').addClass('run_upto_max_13_'+row13);
		$('.dlt_btn_13').addClass('run_upto_min_13_'+row13);


		$('.form-group .b:last').html();
		$('.form-group .b:last').html('2. מקבל סכום השקעה: ');
		$('.form-group .b:first').html();
		$('.form-group .b:first').html('1. מקבל סכום השקעה: ');

		$('.section_13_repeat .form-inline:last').attr('id','dlt_2');
		$('.section_13_repeat .form-inline:first').attr('id','dlt_1');
		$('.section_13_repeat .form-inline .section-3 a:first').attr('data-id','dlt_1');
		$('.section_13_repeat .form-inline .section-3 a:last').attr('data-id','dlt_2');

	});


	$('body').on('keyup','#investment-amount1',function(){
	  if ($(this).val() < 10000){ 
	  		$(this).val('10,000');
	  }
	});

	$('body').on('keyup','#investment-amount2',function(){
	  if ($(this).val() < 10000){ 
	  		$(this).val('10,000');
	  }
	});

	$('body').on('keyup','#investment-amount3',function(){
	  if ($(this).val() < 10000){ 
	  		$(this).val('10,000');
	  }
	});





</script>
