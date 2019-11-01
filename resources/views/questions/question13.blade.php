@php

$ques13 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','14')->get();
$ques11 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','11')->get();
$ques7 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','7')->get();
$ques8 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','8')->get();
$ques4 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','4')->get();
$ques2 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','2')->get();
$ques1 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','1')->get();

if(count($ques4)){
$ques4 = $ques4[0]->meta_value;
}


if(isset($ques1) && isset($ques1[1])){
$ques1_1 = $ques1[1]->meta_value;
$ques1_1 = str_replace(",","",$ques1_1);
}else{
$ques1_1 = "0";	
}


if(isset($ques2) && isset($ques2[0])){
$ques2_0 = $ques2[0]->meta_value;
}



if(count($ques8) && count($ques11) ){
if($ques8[0]->meta_value == 'any_cause'){
$ques11_data = $ques11[1]->meta_value;
}elseif($ques8[0]->meta_value == 'mistaken_program'){
 	$ques11_data = $ques11[3]->meta_value;
}else{
	$ques11_data = $ques11[2]->meta_value;
}
}else{
	$ques11_data = "";
}

if(count($ques13)){
$ques11 = $ques11_data;
}else{
$ques11 = array();
}

if(!empty($ques4)){
	$ques4 = $ques4;
}else{
	$ques4 = 0;
}
if(!empty($ques11)){
	$ques11 = $ques11;
}else{
	$ques11 = 0;
}
if(isset($ques2)){
	$ques2 = $ques2;
}else{
	$ques2 = 'Yes';
}

@endphp
<div class="ques_13" id="ques_13" <?php if(count($ques13)){ }else{ echo'style="display:none"'; } ?>>
	<div class="q16 chat-container d-f f-d-c a-i-f-s" id="formQuestionFourteenDIV">
		<div class="chat-number">12</div>
		<div class="message-pic">
			<img src="images/advisor.png" alt="">
		</div>
		<div class="message d-i-f f-d-c">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			<div class="twelveth_value">
				<p class="male_female_twelve">אם כך, גובה המשכתא שאותו אתה מבקש מהבנק הוא:</p>
				<p>@php echo number_format($ques11); @endphp ש”ח.</p>
			</div>
			<span class="message-timing">18:26</span>
		</div>
		<div class="message d-i-f f-d-c">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			<p>מה גובה ההחזר החודשי המבוקש?</p>
			<span class="message-timing">18:20</span>
		</div>
		<form class="form-inline range-form " method="post" id="formQuestionfourteen" >
			<div class="full-section">
				<div class="form-group range-group monthly-refund">
					<div class="text_value_1"><?php if(count($ques13)){ echo $ques13[0]->meta_value; }else{ echo"11,272"; } ?></div>

					<div class="slidecontainer">
						<input  name="monthly_refund_input_slide" type="range" placeholder ="*************" min="0" max="26" value="<?php if(count($ques13)){ echo $ques13[2]->meta_value; }else{ echo"26"; } ?>" class="slider" id="monthly_refund_input_slide">
					</div>


					<span class="slider-icon d-f j-c-c a-i-c">
						<img src="images/range-refund.png" alt="">
					</span>
				</div>
				<div class="form-group">
					<input type="hidden" id="monthly_refund_input" class="form-control" name="monthly_refund_input" value="<?php if(count($ques13)){ echo $ques13[0]->meta_value; }else{ echo""; } ?>" placeholder="0" readonly onkeyup="this.value=addCommas(this.value);"/>
						<!-- JUST TO PROTECT OURSELF FROM CLIENT CHNAGES AND CHANGES -->
					<input type="text" id="monthly_refund_inputs" class="form-control" name="monthly_refund_input" value="<?php if(count($ques13)){ echo $ques13[0]->meta_value; }else{ echo""; } ?>" placeholder="0" readonly="readonly" onkeyup="this.value=addCommas(this.value);"/>

					<input type="hidden" id="monthly_refund_input_slider_value" class="form-control" name="monthly_refund_input_slider_value" value=" "/>

					<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
				</div>
			</div>
			<div class="full-section nd-div-jugaad">


				<p class="alert-text alert-monthly-refund"></p>




				<div class="message d-i-f f-d-c">
					<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
					<p>בחירת תקופה של המשכנתא משפיעה על גובה ההחזר החודשי.
					ככל שהתקופה ארוכה יותר, ההחזר החודשי שיתקבל במשכנתא נמוך יותר.</p>
					<span class="message-timing">18:20</span>
				</div>
			</div>
			<div class="full-section bottom-slider mobile-order">
				<div class="form-group range-group lower-mortgage">
					<div class="text_value_2"><?php if(count($ques13)){ echo $ques13[1]->meta_value; }else{ echo"30"; } ?></div>

					<div class="slidecontainer">
						<input  name="lower_mortgage_input_slide" type="range" placeholder ="*************" min="0" max="26" value="<?php if(count($ques13)){ echo $ques13[2]->meta_value; }else{ echo"26"; } ?>" class="slider" id="lower_mortgage_input_slide">
					</div>
					<span class="slider-icon d-f j-c-c a-i-c">
						<img src="images/range-period.png" alt="">
					</span>
				</div>
				<div class="form-group">
					<input type="hidden" id="lower_mortgage_input" class="form-control" name="lower_mortgage_input" value="<?php if(count($ques13)){ echo $ques13[1]->meta_value; }else{ } ?>" placeholder="15 שנים" readonly onkeyup="this.value=addCommas(this.value);"/>
					<!-- <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"> -->

					<input type="text" id="lower_mortgage_inputs" class="form-control" name="lower_mortgage_input" value="<?php if(count($ques13)){ echo $ques13[1]->meta_value; }else{ } ?>" placeholder="15 שנים" readonly="readonly" onkeyup="this.value=addCommas(this.value);"/>


				</div>
				<button type="submit" class="main-button questwelvesubmit">אישור</button>
				{{ csrf_field() }}
				<div class="errMsg"></div>
				<div class="success-text">שים לב - נתון התקופה מוערך ואינו סופי. הנתון ישתנה בהתאם לסוג המשכנתא וגובה הריביות אותם נבחר בהמשך.</div>
			</div>
		
				<table id="demo_testing_just" style="display:none;"></table>

		</form>




		<br />
		

		@php 
		$x = 0;
		$y = 0;
		$z = 0;
		$s = 0;
		if(count($ques7) && count($ques13) ){ 
		
			$gg = str_replace(",","",$ques13[1]->meta_value);
			

		$fix = $ques7[1]->meta_value + $gg;

		if($fix > 80){
		@endphp
		<div class="imp-info">
			<h4>חשוב לדעת</h4>
			<div class="imp-info-text">
				<span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span>

				@php
				if($ques7[1]->meta_value <= 76){
				$x = 80 - $ques7[1]->meta_value;
				$gg = str_replace(",","",$ques13[1]->meta_value);
				$y = 80 - $gg;

				$z = $ques7[1]->meta_value;
				$s = $ques13[1]->meta_value;

				echo "<p>גיל הלווה המבוגר ביותר שמילאת בהרשמה לא 
					מאפשר לך לקחת את המשכנתא למעלה מ ".$x." שנים. 
					כדי לקחת את המשכנתא ליותר שנים עליך לצרף 
					ערב נוסף למשכנתא, מתחת לגיל  ".$y.".
					האם יש לך ערב נוסף מתאים שיוכל לקחת איתך 
				את המשכנתא ?</p>";

			}else{
			$x = 80 - $ques7[1]->meta_value;
			$y = 80 - $ques13[1]->meta_value;
			$z = $ques7[1]->meta_value;
			$s = $ques13[1]->meta_value;

			echo "<p>גיל הלווה המבוגר ביותר שמילאת בהרשמה לא 
				מאפשר לך לקחת את המשכנתא מעל גיל 76. 
				כדי לקחת את המשכנתא ליותר שנים עליך לצרף 
				ערב נוסף למשכנתא, מתחת לגיל ".$y.".
				האם יש לך ערב נוסף מתאים שיוכל לקחת איתך 
			את המשכנתא ?</p>";
		}
		@endphp

	</div>
</div>
<div class="chat-buttons">
	<a class="main-button yes_button_tewlve">כן יש לי ערב נוסף מתאים</a>
	<a class="main-button grey no_button_tewlve"> אין לי ערב נוסף</a>
</div>
@php } } @endphp
</div>

<div class="width-full">
	<div class="message d-i-f f-d-c spinner spinner-ques-13" style="display:none;">
		<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
</div>


@php

if(count($ques13)){ 
$vv = $ques13[0]->meta_value;
$ff = $ques13[1]->meta_value;  
}else{ 
$vv = "";
$ff = "";
}

@endphp




</div>
<script type="text/javascript">
	window.location.hash = '#formQuestionFourteenDIV';


var vv = '<?php echo $vv; ?>';
//alert(vv);
var ff = '<?php echo $ff; ?>';



	$(document).ready(function(){
		/* 39% Alert message wala code*/

			setTimeout (function(){
				thirty_nine_wala_fun();
			},'100');


			
	});
	
	$(document).on('input', '#monthly_refund_input_slide', function() { 

		/* 39% Alert message wala code*/

			thirty_nine_wala_fun();


		var installment = ["11272", "10015", "9155","8511", "7996", "7562","7180", "6835", "6515","6212", "5922", "5642","5369", "5102", "4839","4580", "4325", "4072","3821", "3574", "3328","3086", "2847", "2611","2379", "2151","1929"];

		var month = ["4", "5", "6","7", "8", "9","10", "11", "12","13", "14", "15","16", "17", "18","19", "20", "21","22", "23", "24","25", "26", "27","28", "29","30"];

		//var savings = ['1.00','1.20','1.60','1.80','2.00','2.50','4.00','4.50','5.00','5.50','6.00','6.50','7.00','7.50','8.00','9.00','10.00','10.10','10.30','10.50','10.70','13.00','13.50','13.70','13.90','14.00','14.00']
		
		var click_value = $(this).val();


		setTimeout(function(){

			var uu = [];
			var hh = 0;
			$('#demo_testing_just td.yups').each(function() {
		    	var customerId = $(this).html(); 
		    	//alert(customerId);
		    	uu[hh] = parseInt(customerId);
		    	hh++;   
		 	});


		// console.log(uu);
		// console.log('786');
		// console.log(bbaa);
		// console.log('786786');

		
		var installments = uu[click_value];
		var months = month[click_value];

		values_for_question_based_On_year_chnage();

		$("#monthly_refund_input_slider_value").attr('value',click_value);
		$("#monthly_refund_input").attr('value',installments);
		$('#monthly_refund_inputs').attr('value',addCommasDirect(installments));
		$(".text_value_1").html(addCommasDirect(installments));
		$("#lower_mortgage_input").attr('value',months);
		$("#lower_mortgage_inputs").attr('value',addCommasDirect(months));
		$(".text_value_2").html(addCommasDirect(months));
		//$('#lower_mortgage_input_slide').attr('value',$(this).val());
		$('#lower_mortgage_input_slide').val(click_value);

	},150);
		
	});

	$(document).on('input', '#lower_mortgage_input_slide', function() {       

		var installment = ["11272", "10015", "9155","8511", "7996", "7562","7180", "6835", "6515","6212", "5922", "5642","5369", "5102", "4839","4580", "4325", "4072","3821", "3574", "3328","3086", "2847", "2611","2379", "2151","1929"];

		var month = ["4", "5", "6","7", "8", "9","10", "11", "12","13", "14", "15","16", "17", "18","19", "20", "21","22", "23", "24","25", "26", "27","28", "29","30"];

		 values_for_question_based_On_year_chnage();

			/* 39% Alert message wala code*/

			thirty_nine_wala_fun();

	

			var click_value = $(this).val();


		setTimeout(function(){

			var uu = [];
			var hh = 0;
			$('#demo_testing_just td.yups').each(function() {
		    	var customerId = $(this).html(); 
		    	uu[hh] = parseInt(customerId);
		    	hh++;   
		 	});

		var installments = uu[click_value];
		//var installments = addCommas(installments);
		var months = month[click_value];

		// $("#monthly_refund_input_slider_value").attr('value',$(this).val());
		// $("#monthly_refund_input").attr('value',installments);
		// $(".text_value_1").html(installments);
		// $("#lower_mortgage_input").attr('value',months);
		// $(".text_value_2").html(months);
		// // $('#lower_mortgage_input_slide').slider('value',$(this).val());
		// // $("#monthly_refund_input_slide").attr("value", $(this).val());
		// $('#monthly_refund_input_slide').val($(this).val());



		$("#monthly_refund_input_slider_value").attr('value',click_value);
		$("#monthly_refund_input").attr('value',installments);
		$('#monthly_refund_inputs').attr('value',addCommasDirect(installments));
		$(".text_value_1").html(addCommasDirect(installments));
		$("#lower_mortgage_input").attr('value',months);
		$("#lower_mortgage_inputs").attr('value',addCommasDirect(months));
		$(".text_value_2").html(addCommasDirect(months));
		//$('#lower_mortgage_input_slide').attr('value',$(this).val());
		$('#monthly_refund_input_slide').val(click_value);

	},150);

	}); 

	$('.no_button_tewlve').on('click',function(){

		var x = '<?php echo $x; ?>';
		var y = '<?php echo $y; ?>';
		var z = '<?php echo $z; ?>';
		var s = '<?php echo $s; ?>';
		var a = s - x;
		var bb = s - 4;


		var x = $('#monthly_refund_inputs').val();
		var y = $('#lower_mortgage_inputs').val();


		if( z <= 76){
		//alert(a);
		swal("לידיעתך - הפחתנו את מספר השנים המבוקשות ללקיחת המשכנתא ל- "+x+" שנים בלבד, והעלנו את ההחזר החודשי המבוקש ל- "+y+" שקלים בחודש, כך שבסוף תקופת המשכנתא גילך לא יעלה על 80 שנים כפי שנדרש. אתה מוזמן להמשיך בתהליך לקיחת המשכנתא!");
		$("#lower_mortgage_input").attr('value',a);
		$(".text_value_2").html(a);
		$("#lower_mortgage_input_slide").attr('value',a);
		//$('.ques12submit').toggle();

		}else{

		//alert(bb);
		swal("לידיעתך - הפחתנו את מספר השנים המבוקשות ללקיחת המשכנתא ל- 4 שנים בלבד, והעלנו את ההחזר החודשי המבוקש ל- "+y+" שקלים בחודש. ככל הנראה בגילך הנוכחי הבנק לא יאפשר לך לקחת את המשכנתא, ללא ערבים נוספים, נשתדל לעזור לך בקבלת המשכנתא אבל הדבר לא מובטח.");
		$("#lower_mortgage_input").attr('value',bb);
		$(".text_value_2").html(bb);
		$("#lower_mortgage_input_slide").attr('value',bb);

		}
		$('.spinner').show();
		setTimeout(function(){ 
			$('.spinner').hide();
			formQuestiontewlve('form#formQuestionfourteen','<?= url("/question14") ?>');
		}, 1000);
		return false;

	});

	$(".yes_button_tewlve").on('click',function(){

		$('.spinner').show();
		setTimeout(function(){ 
			$('.spinner').hide();
			formQuestiontewlve('form#formQuestionfourteen','<?= url("/question14_2") ?>');
		}, 1000);
		return false;
	});


	function formQuestiontewlve(formID,url) {
		var formData = $( formID ).serialize();
		$.ajax({
			type: "POST",
			url: url,
			data: formData, 
			success: function(data)
			{
				if(data.status == 1){
				//alert('if');
				$('#loadQuestions').html(data.htmls);
				}else if(data.status == 0){
				//alert('else');
				$(formID).find('.errMsg').html(errors(data.errors));
				}

			}
			});

		return false;
	}

	function errors(errors) {

		text ='<ol>';
		$.each(errors,function(k,v){
			text +='<li>'+v+'</li>';
		});
		text +='</ol>';
		return text;
	}


	function thirty_nine_wala_fun(){

		
		//alert(vv);


		setTimeout(function(){

	

			var installment = [];
				var hh = 0;
				$('#demo_testing_just td.yups').each(function() {
			    	var customerId = $(this).html(); 
					//console.log(customerId);
			    	installment[hh] = parseInt(customerId);
			    	hh++;   
			 	});




				if(vv != "" && ff != ""){
					$("#monthly_refund_input").attr('value',vv);
					$('#monthly_refund_inputs').attr('value',addCommasDirect(vv));
					$(".text_value_1").html(addCommasDirect(vv));
					$("#lower_mortgage_input").attr('value',ff);
					$("#lower_mortgage_inputs").attr('value',ff);
					$(".text_value_2").html(ff);

				}else{

				console.log(installment);	//alert(installment[26]);

					$("#monthly_refund_input").attr('value',installment[26]);
					$('#monthly_refund_inputs').attr('value',addCommasDirect(installment[26]));
					$(".text_value_1").html(addCommasDirect(installment[26]));
					$("#lower_mortgage_input").attr('value',30);
					$("#lower_mortgage_inputs").attr('value',30);
					$(".text_value_2").html(30);
					
				}
			
	
			var twelve_one = $('#monthly_refund_input_slide').val();
			var twelve_one = installment[twelve_one];
			var four = $('#net_income').val();
			if(four != ""){
			var four = four.split(',').join('');
			}else{
			var four = "0";	
			}
			var one = $('input[name=que1]:checked').val();
			if(one == "rental_aprt"){
			var one = $('#rent').val();
			var one = one.split(',').join('');
			}else{
			var one = "0";	
			}

			var two = $('input[name=que2]:checked').val();
	          if(two == 'Yes'){
	          	if($('#mortgage-balance1').length){
		          	var mod1 = $("body").find('#mortgage-balance1').val();
		          	if(mod1 != ""){
		          		var mod1 = mod1.split(',').join('');
		          	}else{
			        	var mod1 = "0";  	
		          	}
	          	}else{
	          		var mod1 = "0"; 
	          	}

	          	
	          	if($('#mortgage-balance2').length){
	          		var mod2 = $("body").find('#mortgage-balance2').val();
	          		if(mod2 != ""){
	          			var mod2 = mod2.split(',').join('');
		          	}else{
			        	var mod2 = "0";  	
		          	}
	          	}else{
	          		var mod2 = "0"; 
	          	}
	          	
	          	if($('#mortgage-balance3').length){
	          		var mod3 = $("body").find('#mortgage-balance3').val();
	          		if(mod3 != ""){
		          		var mod3 = mod3.split(',').join('');
		          	}else{
			        	var mod3 = "0";  	
		          	}
	          	}else{
	          		var mod3 = "0"; 
	          	}
	         
	          	var total_mod = parseInt(mod1) + parseInt(mod2) + parseInt(mod3);


	          	if($('#property-value-21').length){
		          	var pro1 = $("body").find('#property-value-21').val();
		          	if(pro1 != ""){
		          		var pro1 = pro1.split(',').join('');
		          	}else{
			        	var pro1 = "0";  	
		          	}
	          	}else{
	          		var pro1 = "0"; 
	          	}

	          	if($('#property-value-22').length){
		          	var pro2 = $("body").find('#property-value-22').val();
		          	if(pro2 != ""){
		          		var pro2 = pro2.split(',').join('');
		          	}else{
			        	var pro2 = "0";  	
		          	}
	          	}else{
	          		var pro2 = "0"; 
	          	}

	          	if($('#property-value-23').length){
		          	var pro3 = $("body").find('#property-value-23').val();
		          	if(pro3 != ""){
		          		var pro3 = pro3.split(',').join('');
		          	}else{
			        	var pro3 = "0";  	
		          	}
	          	}else{
	          		var pro3 = "0"; 
	          	}

	          	var total_pro = parseInt(pro1) + parseInt(pro2) + parseInt(pro3);

	          	var second_total = parseInt(total_mod) - parseInt(total_pro);
	          	}else{
	          	var second_total = "0";	
	          	}

				var ii = parseInt(one) + parseInt(second_total);
				var uu = parseFloat(twelve_one) + parseFloat(ii);
				var tt = parseFloat(uu) / parseFloat(four);
				var final = parseFloat(tt) * 100;
				var final = final.toFixed(2);
				//alert(final);


				var val = $('input[name=gender]:checked').val();

					if(val == "Male"){
						var da = '<span class="red">אנא הפחת את גובה המשכנתא. נראה שההחזר החודשי אותו אתה מבקש הוא יותר מ- 39% <br>מסך ההכנסות המדווחות שלך, ולכן הבנק לא יאשר את המשכנתא!</span>';
					}else{
						var da = '<span class="red">אנא הפחיתי את גובה המשכנתא. נראה שההחזר החודשי אותו אתה מבקש הוא יותר מ- 39% <br>מסך ההכנסות המדווחות שלך, ולכן הבנק לא יאשר את המשכנתא!</span>';
					}



				if(parseFloat(final) > 39){
					$('.alert-monthly-refund').show();
					$('.alert-monthly-refund').html(da);
				}else{
					//$('.alert-monthly-refund').html('<span class="green">אנא הפחת את גובה המשכנתא. נראה שההחזר החודשי אותו אתה מבקש הוא יותר מ-'+final+'% <br> מסך ההכנסות המדווחות שלך, ולכן הבנק לא יאשר את המשכנתא!</span>');
					$('.alert-monthly-refund').hide();
				}
			},100);
		
	}



	function pmt_slider_calculation(){


		var tt = $('input[name=why_mortgage]:checked').val();

          if(tt == 'any_cause'){

              var cc = $('#equity-height').val();
              var mortgage = cc.split(',').join(''); 
              
               //alert(mortgage);
            }else if(tt == 'mistaken_program'){
              
              var cc2 = $('#property-market-value').val();
              var cc2 = cc2.split(',').join('');
              var cc1 = $('#incoming-cost-1').val();
              var cc1 = cc1.split(',').join('');

              var mortgage = parseInt(cc1) - parseInt(cc2);

            }else{
              var cc2 = $('#equity-cost').val();
              var cc2 = cc2.split(',').join('');
              var cc1 = $('#incoming-cost').val();
              var cc1 = cc1.split(',').join('');

              var mortgage = parseInt(cc1) - parseInt(cc2);
            }


             var url = '/pmt_slider_ajax_frontend'
                $.ajax({
                    type: "POST",
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    data: {'user_id':1},
                    dataTYPE: 'json',
                    success: function(data)
                    {
                      var tt = data.data;
                       $('#demo_testing_just').html('');
                        $.each(tt, function() {
                              var one = this.prime;
                              	//alert(one);
                              var two = this.const_inter_linked;
								//alert(two);
                              var three = this.var_inter_5year_unlinked;
								//alert(three);

                              var total = (parseFloat(one) + parseFloat(two) + parseFloat(three)) / 3;
                              	//alert(total);
                              var fixed_total = total.toFixed(2);
                              var time = this.years;

                              $('#demo_testing_just').append('<td class="yups">'+pmt(mortgage,fixed_total,time)+'</td>');
                        });    
                    }
                });


            return false;


 		

	}

	pmt_slider_calculation();




	function pmt(val1, val2, val3){
		//setTimeout (function(){
		var loan = val1; 
        var apr = val2; 
        var term = val3; 
        apr = apr/1200;
        term = term*12;
        var amount = apr * -loan * Math.pow((1 + apr), term) / (1 - Math.pow((1 + apr), term));
        amount = isNaN(amount) ? '' : amount;
        //amount = addCommasDirect(amount.toFixed(2));
        return amount.toFixed(2);
       // },'100');
	}





	function values_for_question_based_On_year_chnage(){
		//alert(value);

		var valu = $('#monthly_refund_input_slide').val();
		//alert(valu);

		var savings = ['1.00','1.20','1.60','1.80','2.00','2.50','4.00','4.50','5.00','5.50','6.00','6.50','7.00','7.50','8.00','9.00','10.00','10.10','10.30','10.50','10.70','13.00','13.50','13.70','13.90','14.00','14.00'];

		var value = savings[valu];
		//alert(value);

		var val = $('input[name=why_mortgage]:checked').val();
		//alert(val);
		if(val == 'mistaken_program'){
			var property_value1 = $('#incoming-cost-1').val();
       		var property_value  =  property_value1.replace(/,/g, '');
       		var self_funding1 = $('#property-market-value').val();
       		var self_funding  =  self_funding1.replace(/,/g, '');
       		var fee = parseInt(property_value) - parseInt(self_funding);
       		var final = fee * parseFloat(value);
       		//twelve_change_eleven_a(addCommasDirect(parseInt(final)));

      		//$('.twelveth_value').html('');
    		// $('.twelveth_value').html('<p>אם כך, גובה המשכתא שאותו אתה מבקש מהבנק הוא: <br>'+addCommasDirects(parseInt(final))+' ש”ח.</p>');


    		$('.data-to-render-at-last').html('');
    		$('.data-to-render-at-last').html('כבר בשלב הנוכחי אני  יכול לגלות לך שהדוח חוסך לך מעל <span class="make_it_green">ל '+addCommasDirects(parseInt(final))+' אלף ש"ח</span><br>מעלות המשכנתא הממוצעת לאנשים עם נתונים דומים לשלך.');


		}else if(val == 'any_cause'){

	      	var self_funding1 = $('#equity-height').val();
       		var fee  =  self_funding1.replace(/,/g, '');
       		var final = parseInt(fee) * parseFloat(value);
       		//twelve_change_eleven_a(addCommasDirect(parseInt(final)));

       		//$('.twelveth_value').html('');
			//$('.twelveth_value').html('<p>אם כך, גובה המשכתא שאותו אתה מבקש מהבנק הוא: <br>'+addCommasDirects(parseInt(final))+' ש”ח.</p>');


			$('.data-to-render-at-last').html('');
    		$('.data-to-render-at-last').html('כבר בשלב הנוכחי אני  יכול לגלות לך שהדוח חוסך לך מעל <span class="make_it_green">ל '+addCommasDirects(parseInt(final))+' אלף ש"ח</span><br>מעלות המשכנתא הממוצעת לאנשים עם נתונים דומים לשלך.');
			
		}else {

			var property_value1 = $('#incoming-cost').val();
       		var property_value  =  property_value1.replace(/,/g, '');
       		var self_funding1 = $('#equity-cost').val();
       		var self_funding  =  self_funding1.replace(/,/g, '');
       		var fee = parseInt(property_value) - parseInt(self_funding);
       		//alert(fee);
       		var final = fee * parseFloat(value);
       		//alert(final);
       		//twelve_change_eleven_a();

       		//$('.twelveth_value').html('');
    		//$('.twelveth_value').html('<p>אם כך, גובה המשכתא שאותו אתה מבקש מהבנק הוא: <br>'+addCommasDirects(parseInt(final))+' ש”ח.</p>');


    		$('.data-to-render-at-last').html('');
    		$('.data-to-render-at-last').html('כבר בשלב הנוכחי אני  יכול לגלות לך שהדוח חוסך לך מעל <span class="make_it_green">ל '+addCommasDirects(parseInt(final))+' אלף ש"ח</span><br>מעלות המשכנתא הממוצעת לאנשים עם נתונים דומים לשלך.');
			
		}
	}
	values_for_question_based_On_year_chnage();

function addCommasDirects(nStr){
  return nStr.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}



</script>
