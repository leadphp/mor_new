
@php
$auth = \Auth::user();
if(!empty($auth)){
    $ques = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','2')->get();
    if(count($ques)){
    $ques2 = $ques;
	}
}
if(isset($ques2)){
$property_1 = json_decode($ques2[1]->meta_value);
if($property_1 == ""){
	$property_1  = array();
}else{
	$property_1  = $property_1 ;
}
$property_value = json_decode($ques2[2]->meta_value);
$monthly_income = json_decode($ques2[3]->meta_value);
$property_value_2 = json_decode($ques2[4]->meta_value);
$mortgage_balance =json_decode($ques2[5]->meta_value);
$bank =json_decode($ques2[6]->meta_value);
}
@endphp

<div class="ques_3" id="ques_3"  <?php if(isset($ques2)){ }else{ echo'style="display:none"'; } ?>>
	<form method="post" id="formQuestionTwo">
		<div class="q3 chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">2</div>
		    <div class="message-pic">
			    <img src="images/advisor.png" alt=""/>
			</div>
		    
			<div class="chat-buttons ques2 question_two_part_one" <?php if(isset($ques2)){ if($ques2[0]->meta_value == "Yes"){ echo "style='display:none;'"; } else{ } } ?> >


					<div class="message d-i-f f-d-c question_two_part_one1">
					  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
					  <p>תודה. האם יש לך דירות בבעולתך?</p>
					  <span class="message-timing">18:26</span>
					</div>


				<ul class="question2-ul my_question <?php if(isset($ques2)){ echo'click-color-change'; }else{ } ?>">
			  	<li>
			  		<input id="input21" type="radio" class="yes_button_ques_two" name="que2" value="Yes" <?php if(isset($ques2)){ if($ques2[0]->meta_value == "Yes"){ echo "checked=checked"; } else{ } } ?> >
			  		<label for="input21" class="main-button">כן, יש לי</label>
			  	</li>
			  	<li>
			  		<input id="input22" type="radio" name="que2" value="No" <?php if(isset($ques2)){ if($ques2[0]->meta_value == "No"){ echo "checked=checked"; } else{ }  }?>>
			  		<label for="input22" class="main-button">לא, אין לי</label>
			  	</li>
			  	</ul>
			</div>

			<div class="second-sec-options questiontwoOption" <?php if(isset($ques2) && $ques2[0]->meta_value == "Yes"){ ?> style=""; <?php  }else{  ?> style="display:none"; <?php } ?>>

				<div class="message d-i-f f-d-c">
				  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				  <p>אנא פרט את כל הפרטים הידועים לך לגבי דירות שבבעולתך. 
				  אנחנו צריכים לדעת האם הדירה עם משכנתא כמובן.</p>
				  <span class="message-timing">18:26</span>
				</div>

				<div class="message no-background d-i-f f-d-c repeated_div_second_question">

					<?php
					if(isset($ques2)){
						$current_count = count($property_1);
						$count = 0;
						$ss = 1;
						foreach($property_1 as $prop_1){ 
					?>
			
					<div class="form-inline multiple-dropdown up-fo" id="dlt_2_<?php echo $ss; ?>">
					    <div class="form-group first">
							<label class="a"><?php echo $ss; ?>. סוג הנכס:</label>
					      	<select name= property_1[] class="selectpicker" id="selectpicker<?php echo $ss; ?>">
							  <option value="Apartment_without_mortgage" <?php if(isset($ques2)){ if($prop_1 == 'Apartment_without_mortgage' ){ echo 'selected="selected"'; } } ?> >דירה ללא משכנתא</option>
							  <option value="Apartment_with_mortgage" <?php if(isset($ques2)){ if($prop_1 == 'Apartment_with_mortgage' ){ echo 'selected="selected"'; } } ?>>דירה עם משכנתא</option>
							</select>
						</div>

						<div class="second">
							<div class="form-group">
							  	<label for="property-value<?php echo $ss; ?>">ערך הנכס:</label>
						      	<input type="text"   id="property-value<?php echo $ss; ?>" class="form-control" name="property_value[]" value="<?php if(isset($ques2)){ echo $property_value[$count]; } ?>"  onkeyup="this.value=addCommas(this.value);"/>
							  	<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							  	<div class="errorquestion error-property-value<?php echo $ss; ?>" style="display:none;">הערך צריך להיות יותר או שווה ל 10000</div>
							</div>
							<div class="form-group with_mortgage<?php echo $ss; ?>"   
								<?php if(isset($ques2) && !empty($monthly_income[$count])){ echo "style=''"; }else{
									echo'style="display:none;"';
								} ?>
								>
							  	<label for="monthly-income">יתרת המשכנתא:</label>
						      	<input type="text"   id="monthly-income<?php echo $ss; ?>" class="form-control" name="monthly_income[]"  value="<?php if(isset($ques2)){ echo $monthly_income[$count]; } ?>" onkeyup="this.value=addCommas(this.value);"/>
							  	<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							  	<div class="errorquestion error-monthly-income<?php echo $ss; ?>" style="display:none;">Value should be more than or equal to 1000</div>
							</div>

							<div class="form-group with_mortgage<?php echo $ss; ?> ">
							  <label for="mortgage-balance<?php echo $ss; ?>">החזר חודשי של המשכנתא:</label>
						      <input type="text"  id="mortgage-balance<?php echo $ss; ?>" class="form-control" name="mortgage_balance[]"  value="<?php if(isset($ques2)){ echo $mortgage_balance[$count]; } ?>" onkeyup="this.value=addCommas(this.value);"/>
							  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							</div>


							<div class="form-group">
							  <label for="property-value-2<?php echo $ss; ?>">הכנסה חודשית משכר דירה:</label>
						      <input type="text"  id="property-value-2<?php echo $ss; ?>" class="form-control" name="property_value_2[]" value="<?php if(isset($ques2)){ echo $property_value_2[$count]; } ?>" onkeyup="this.value=addCommas(this.value);"/>
							  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							</div>


							<div class="form-group with_mortgage<?php echo $ss; ?>">
								<label for="monthly-income-rent">באיזה בנק המשכנתא:</label>
						       	<select name="bank[]" class="selectpicker"  >

								  	<option data-att="Mizrahi-Tefahot Bank" value="Mizrahi_Tefahot_Bank" <?php if(isset($ques2)){ if($bank[$count] == 'Mizrahi_Tefahot_Bank' ){ echo 'selected="selected"'; } } ?> >בנק מזרחי-טפחות
								  	</option>

								  	<option data-att="Discount Bank" value="discount_bank" <?php if(isset($ques2)){ if($bank[$count] == 'discount_bank' ){ echo 'selected="selected"'; } } ?> >בנק דיסקונט</option>

								  	<option data-att="Union Bank" value="union_bank" <?php if(isset($ques2)){ if($bank[$count] == 'union_bank' ){ echo 'selected="selected"'; } } ?>>בנק איגוד
								  	</option>

								  	<option data-att="Bank Hapoalim" value="bank_hapoalim" <?php if(isset($ques2)){ if($bank[$count] == 'bank_hapoalim' ){ echo 'selected="selected"'; } } ?>>בנק הפועלים</option>

								  	<option data-att="National Bank" value="national_bank" <?php if(isset($ques2)){ if($bank[$count] == 'national_bank' ){ echo 'selected="selected"'; } } ?>>בנק לאומי
								  	</option>

								  	<option data-att="Bank Ozar hahial" value="bank_ozar_hahial" <?php if(isset($ques2)){ if($bank[$count] == 'bank_ozar_hahial' ){ echo 'selected="selected"'; } } ?>>בנק אוצר החייל
								  	</option>

								  	<option data-att="Bank of Jerusalem" value="bank_of_jerusalem" <?php if(isset($ques2)){ if($bank[$count] == 'bank_of_jerusalem' ){ echo 'selected="selected"'; } } ?>>בנק ירושלים
								  	</option>

								  	<option data-att="The international Bank" value="the_international_bank" <?php if(isset($ques2)){ if($bank[$count] == 'the_international_bank' ){ echo 'selected="selected"'; } } ?>>הבנק הבינלאומי
								  	</option>

								  	<option data-att="Another bank" value="another_bank" <?php if(isset($ques2)){ if($bank[$count] == 'another_bank' ){ echo 'selected="selected"'; } } ?>>בנק אחר
								  	</option>
								</select>
							</div>


						</div>
						<div class="third">	
							<?php if($ss == 1){

							}else{ ?>
								<a href="javascript:void(0);" class="delete-button dlt_btn_2 run_upto_min<?php echo$current_count; ?> " data-id="dlt_2_<?php echo $ss; ?>"><i class="fa fa-minus"></i>מחק</a>
							<?php } ?>

						</div>
					</div>
					<?php
						$ss++;
						$count++;
						};
						}else{
					
						$current_count = 1; 
					?>
					<div class="form-inline multiple-dropdown up-fo" id="dlt_2_1">
					    <div class="form-group  first">
							<label class="a">1. סוג הנכס:</label>
					      	<select name= property_1[] class="selectpicker" id="selectpicker1">
							  <option value="Apartment_without_mortgage" <?php if(isset($ques2)){ if($prop_1 == 'Apartment_without_mortgage' ){ echo 'selected="selected"'; } } ?> selected="selected" >דירה ללא משכנתא</option>
							  <option value="Apartment_with_mortgage" <?php if(isset($ques2)){ if($prop_1 == 'Apartment_with_mortgage' ){ echo 'selected="selected"'; } } ?>>דירה עם משכנתא</option>
							</select>
							
						</div>

						<div class="second">
							<div class="form-group">
							  	<label for="property-value1">ערך הנכס:</label>
						      	<input type="text" id="property-value1" class="form-control" name="property_value[]"  value="1,000,000" onkeyup="this.value=addCommas(this.value);"/>
							  	<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							  	<div class="errorquestion error-property-value1" style="display:none;">הערך צריך להיות יותר או שווה ל 10000</div>
							</div>
							<div class="form-group with_mortgage1" style="display:none;">
							  	<label for="monthly-income">יתרת המשכנתא:</label>
						      	<input type="text" id="monthly-income1" class="form-control" name="monthly_income[]" value="500,000"   onkeyup="this.value=addCommas(this.value);"/>
							  	<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							  	<div class="errorquestion error-monthly-income1" style="display:none;">Value should be more than or equal to 1000</div>
							</div>

							<div class="form-group with_mortgage1" style="display:none;">
							  <label for="mortgage-balance1">החזר חודשי של המשכנתא:</label>
						      <input type="text" id="mortgage-balance1"  class="form-control" name="mortgage_balance[]" value="1,500" onkeyup="this.value=addCommas(this.value);"/>
							  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							</div>

							<div class="form-group">
							  <label for="property-value-2">הכנסה חודשית משכר דירה:</label>
						      <input type="text" id="property-value-2" class="form-control" name="property_value_2[]"  value="2,000"  onkeyup="this.value=addCommas(this.value);"/>
							  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							</div>

							<div class="form-group with_mortgage1" style="display:none;">
								<label for="monthly-income-rent">באיזה בנק המשכנתא:</label>
						       	<select name="bank[]" class="selectpicker"  >
						        	
								  	<option data-att="Mizrahi-Tefahot Bank" value="Mizrahi_Tefahot_Bank">בנק מזרחי-טפחות
								  	</option>

								  	<option data-att="Discount Bank" value="discount_bank">בנק דיסקונט</option>

								  	<option data-att="Union Bank" value="union_bank">בנק איגוד
								  	</option>

								  	<option data-att="Bank Hapoalim" value="bank_hapoalim">בנק הפועלים</option>

								  	<option data-att="National Bank" value="national_bank">בנק לאומי
								  	</option>

								  	<option data-att="Bank Ozar hahial" value="bank_ozar_hahial">בנק אוצר החייל
								  	</option>

								  	<option data-att="Bank of Jerusalem" value="bank_of_jerusalem">בנק ירושלים
								  	</option>

								  	<option data-att="The international Bank" value="the_international_bank">הבנק הבינלאומי
								  	</option>

								  	<option data-att="Another bank" value="another_bank">בנק אחר
								  	</option>
								</select>
							</div>
						</div>
						<div class="third">
							
						</div>
					</div>
					<?php
						} 
					?>
				</div>
				<div class="chat-buttons">
				   <a href="javascript:void(0);" class="addsection_btn  add add_new_repeated_fields run_upto_max<?php echo $current_count; ?>"><i class="fa fa-plus"></i>הוסף דירה נוספת בבעלותך  </a>
				</div>
			 	<button type="submit" class="ok_btn question-2 main-button1 main-button"> אישור </button>
			</div>
		</div>
		{{ csrf_field() }}
		<div class="errMsg"></div>

		<div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-2" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
	</form>
</div>

<script>
	//window.location.hash = '#formQuestionTwo';

	/*appending Jquery*/
	var tt = '<?php echo $current_count; ?>';
	var rowNum = tt;

	$('.add_new_repeated_fields').on('click', function(){
		$('.dlt_btn_2').removeClass('run_upto_min'+rowNum);
		rowNum++;

	$('.repeated_div_second_question').append('<div class="form-inline multiple-dropdown up-fo" id="dlt_2_'+rowNum+'"><div class="form-group first"><label class="a">'+rowNum+'. סוג הנכס:</label><select name= property_1[] class="selectpicker" id="selectpicker'+rowNum+'"><option value="Apartment_without_mortgage">דירה ללא משכנתא</option><option value="Apartment_with_mortgage">דירה עם משכנתא</option></select></div><div class="second"><div class="form-group"><label for="property-value'+rowNum+'">ערך הנכס:</label><input type="text" id="property-value'+rowNum+'" class="form-control" name="property_value[]"  value="2,000,000" onkeyup="this.value=addCommas(this.value);" onkeyup="this.value=addCommas(this.value);"/><img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/><div class="errorquestion error-property-value'+rowNum+'" style="display:none;">הערך צריך להיות יותר או שווה ל 10000</div></div><div class="form-group with_mortgage'+rowNum+'" style="display:none;"><label for="monthly-income'+rowNum+'">יתרת המשכנתא:</label><input type="text" id="monthly-income'+rowNum+'" class="form-control" name="monthly_income[]" value="0" onkeyup="this.value=addCommas(this.value);" onkeyup="this.value=addCommas(this.value);"/><img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/><div class="errorquestion error-monthly-income'+rowNum+'" style="display:none;">Value should be more than or equal to 1000</div></div><div class="form-group  with_mortgage'+rowNum+'" style="display:none;"><label for="mortgage-balance'+rowNum+'">החזר חודשי של המשכנתא:</label><input type="text" id="mortgage-balance'+rowNum+'" class="form-control" name="mortgage_balance[]"  value="0" onkeyup="this.value=addCommas(this.value);" onkeyup="this.value=addCommas(this.value);"/><img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/></div><div class="form-group"><label for="property-value-2'+rowNum+'">הכנסה חודשית משכר דירה:</label><input type="text" id="property-value-2'+rowNum+'" class="form-control" name="property_value_2[]"  value="1,000" onkeyup="this.value=addCommas(this.value);" onkeyup="this.value=addCommas(this.value);"/><img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/></div><div class="form-group  with_mortgage'+rowNum+'" style="display:none;"><label for="monthly-income-rent">באיזה בנק המשכנתא:</label><select name="bank[]" class="selectpicker"><option data-att="Mizrahi-Tefahot Bank" value="Mizrahi_Tefahot_Bank">בנק מזרחי-טפחות</option><option data-att="Discount Bank" value="discount_bank">בנק דיסקונט</option><option data-att="Union Bank" value="union_bank">בנק איגוד</option><option data-att="Bank Hapoalim" value="bank_hapoalim">בנק הפועלים</option><option data-att="National Bank" value="national_bank">בנק לאומי</option><option data-att="Bank Ozar hahial" value="bank_ozar_hahial">בנק אוצר החייל</option><option data-att="Bank of Jerusalem" value="bank_of_jerusalem">בנק ירושלים</option><option data-att="The international Bank" value="the_international_bank">הבנק הבינלאומי</option><option data-att="Another bank" value="another_bank">בנק אחר</option></select></div></div><div class="third"><a href="javascript:void(0);" class="delete-button dlt_btn_2" data-id="dlt_2_'+rowNum+'"><i class="fa fa-minus"></i>מחק</a> </div></div>'); 

		$(this).addClass('run_upto_max'+rowNum);
		$('.dlt_btn_2').addClass('run_upto_min'+rowNum);

	});

	/*Delete fields*/
	
	$('body').on('click','.dlt_btn_2', function() {
		id = $(this).data('id');
		//alert(id);
		$("div").remove('#'+id);
		$('.add_new_repeated_fields').removeClass('run_upto_max'+rowNum);
		$('.dlt_btn_2').removeClass('run_upto_min'+rowNum);
		rowNum--;
		//alert(rowNum);
		$('.add_new_repeated_fields').addClass('run_upto_max'+rowNum);
		$('.dlt_btn_2').addClass('run_upto_min'+rowNum);

		$('.form-group .a:last').html();
		$('.form-group .a:last').html('2. סוג הנכס: ');
		$('.form-group .a:first').html();
		$('.form-group .a:first').html('1. סוג הנכס: ');

		$('.repeated_div_second_question .form-inline:last').attr('id','dlt_2_2');
		$('.repeated_div_second_question .form-inline:first').attr('id','dlt_2_1');
		$('.repeated_div_second_question .form-inline .third a:first').attr('data-id','dlt_2_1');
		$('.repeated_div_second_question .form-inline .third a:last').attr('data-id','dlt_2_2');


		$('.second .form-group.with_mortgage3').addClass('with_mortgage2');
		$('.second .form-group.with_mortgage2').removeClass('with_mortgage3');


		$('.first #selectpicker3').addClass('selectpicker2');
		$('.first .selectpicker2').attr('id','selectpicker2');





	});


       	$('#selectpicker1').on('change', function() {
  			var  val = this.value;
  			if(val == 'Apartment_without_mortgage'){
  				$('#monthly-income1').val("0");
				$('#mortgage-balance1').val("0");
				$('.with_mortgage1').hide();
				$('#dlt_2_1').removeClass('pnga-mobile-ka-ques-two');
  			}else{
  				$('.with_mortgage1').show();
  				$('#monthly-income1').val("500,000");
				$('#mortgage-balance1').val("1,500");
				$('#dlt_2_1').addClass('pnga-mobile-ka-ques-two');
  			}
		});

		
		$( "body" ).on('change','#selectpicker2', function() {
  			var  val = this.value;
  			if(val == 'Apartment_without_mortgage'){
  				$('#monthly-income2').val("0");
				$('#mortgage-balance2').val("0");
				$('.with_mortgage2').hide();
				$('#dlt_2_2').removeClass('pnga-mobile-ka-ques-two');
  			}else{
  				$('.with_mortgage2').show();
  				$('#monthly-income2').val("700,000");
				$('#mortgage-balance2').val("2,500");
				$('#dlt_2_2').addClass('pnga-mobile-ka-ques-two');
  			}
		});
	

		$( "body" ).on('change','#selectpicker3', function() {
  			var  val = this.value;
  			if(val == 'Apartment_without_mortgage'){
  				$('#monthly-income3').val("0");
				$('#mortgage-balance3').val("0");
				$('.with_mortgage3').hide();
				$('#dlt_2_3').removeClass('pnga-mobile-ka-ques-two');
  			}else{
  				//alert('888888888');
  				$('.with_mortgage3').show();
  				$('#monthly-income3').val("700,000");
				$('#mortgage-balance3').val("2,500");
				$('#dlt_2_3').addClass('pnga-mobile-ka-ques-two');
  			}
		});


		fields_game('selectpicker1','with_mortgage1','1','500,000','1,500');
		fields_game('selectpicker2','with_mortgage2','2','700,000','2,500');
		fields_game('selectpicker3','with_mortgage3','3','700,000','2,500');


		
		function fields_game(xyz,clas,field,val1,val2){
			var val = $( "body" ).find('#'+xyz).val();
			if(val == 'Apartment_without_mortgage'){

				$('#monthly-income'+field).val("0");
				$('#mortgage-balance'+field).val("0");
				$('.'+clas).hide();
  			}else{
  				$('#monthly-income'+field).val(val1);
				$('#mortgage-balance'+field).val(val2);
  				$('.'+clas).show();
  			}

		}















//-----------Validation purpose--------------------------------
		// // $('body').on('keyup','#monthly-income1',function(){
		// //   if ($(this).val() < 1000){ 
		// //   	$('.error-monthly-income1').show(); 
		// //   	$('.chat-buttons').hide();
		// //     $('.ok_btn.question-2').prop("disabled", true);
		// //   }else{
		// //   	$('.error-monthly-income1').hide(); 
		// //   	$('.chat-buttons').show();
		// //   	$('.ok_btn.question-2').prop("disabled", false);
		// //   }
		// // });

		// // $('body').on('keyup','#monthly-income2',function(){
		// //   if ($(this).val() < 1000){ 
		// //   	$('.error-monthly-income2').show();
		// //   	$('.chat-buttons').hide(); 
		// //     $('.ok_btn.question-2').prop("disabled", true);
		// //   }else{
		// //   	$('.error-monthly-income2').hide(); 
		// //   	$('.chat-buttons').show();
		// //   	$('.ok_btn.question-2').prop("disabled", false);
		// //   }
		// // });

		// // $('body').on('keyup','#monthly-income3',function(){
		// //   if ($(this).val() < 1000){ 
		// //   	$('.error-monthly-income3').show(); 
		// //   	$('.chat-buttons').hide();
		// //     $('.ok_btn.question-2').prop("disabled", true);
		// //   }else{
		// //   	$('.error-monthly-income3').hide(); 
		// //   	$('.chat-buttons').show();
		// //   	$('.ok_btn.question-2').prop("disabled", false);
		// //   }
		// // });




		// // $('body').on('keyup','#property-value1',function(){
		// //   if ($(this).val() < 10000){ 
		// //   	$('.error-property-value1').show(); 
		// //   	$('.chat-buttons').hide();
		// //     $('.ok_btn.question-2').prop("disabled", true);
		// //   }else{
		// //   	$('.error-property-value1').hide(); 
		// //   	$('.chat-buttons').show();
		// //   	$('.ok_btn.question-2').prop("disabled", false);
		// //   }
		// // });

		// // $('body').on('keyup','#property-value2',function(){
		// //   if ($(this).val() < 10000){ 
		// //   	$('.error-property-value2').show();
		// //   	$('.chat-buttons').hide(); 
		// //     $('.ok_btn.question-2').prop("disabled", true);
		// //   }else{
		// //   	$('.error-property-value2').hide(); 
		// //   	$('.chat-buttons').show();
		// //   	$('.ok_btn.question-2').prop("disabled", false);
		// //   }
		// // });

		// // $('body').on('keyup','#property-value3',function(){
		// //   if ($(this).val() < 10000){ 
		// //   	$('.error-property-value3').show(); 
		// //   	$('.chat-buttons').hide();
		// //     $('.ok_btn.question-2').prop("disabled", true);
		// //   }else{
		// //   	$('.error-property-value3').hide(); 
		// //   	$('.chat-buttons').show();
		// //   	$('.ok_btn.question-2').prop("disabled", false);
		// //   }
		// // });



		// // $('body').on('keyup','#mortgage-balance1',function(){
		// //   if ($(this).val() < 1){ 
		// //   		// $(this).val('1');
		// //   }
		// // });

		// // $('body').on('keyup','#mortgage-balance2',function(){
		// //   if ($(this).val() < 1){ 
		// //   		// $(this).val('1');
		// //   }
		// // });

		// // $('body').on('keyup','#mortgage-balance3',function(){
		// //   if ($(this).val() < 1){ 
		// // 		// $(this).val('1');
		// //   }
		// });








</script>