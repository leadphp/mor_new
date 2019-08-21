@php

$ques13 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','14')->get();
$ques11 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','11')->get();
$ques7 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','7')->get();
$ques8 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
$ques4 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','4')->get();
if(count($ques4)){
$ques4 = $ques4[0]->meta_value;
}
$ques2 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();
if(count($ques2)){
$ques2 = $ques2[0]->meta_value;
}

//dd($ques2);
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
			<p>אם כך, גובה המשכתא שאותו אתה מבקש מהבנק הוא:
			@php echo $ques11; @endphp ש”ח.</p>
			<span class="message-timing">18:26</span>
		</div>
		<div class="message d-i-f f-d-c">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			<p>מה גובה ההחזר החודשי המבוקש?</p>
			<span class="message-timing">18:20</span>
		</div>
		<form class="form-inline range-form" method="post" id="formQuestionfourteen" >
			<div class="full-section">
				<div class="form-group range-group monthly-refund">
					<div class="text_value_1"><?php if(count($ques13)){ echo $ques13[0]->meta_value; }else{ } ?></div>
					<input  name="monthly_refund_input_slide" type="range" placeholder ="*************" min="0" max="26" value="<?php if(count($ques13)){ echo $ques13[2]->meta_value; }else{ echo"0"; } ?>" class="slider" id="monthly_refund_input_slide">
					<span class="slider-icon d-f j-c-c a-i-c">
						<img src="images/range-refund.png" alt="">
					</span>
				</div>
				<div class="form-group">
					<input type="text" id="monthly_refund_input" class="form-control" name="monthly_refund_input" value="<?php if(count($ques13)){ echo $ques13[0]->meta_value; }else{ echo""; } ?>" placeholder="0" readonly onkeyup="this.value=addCommas(this.value);"/>

					<input type="hidden" id="monthly_refund_input_slider_value" class="form-control" name="monthly_refund_input_slider_value" value=" "/>


					<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
				</div>
			</div>
			<div class="full-section nd-div-jugaad">


				<p class="alert-text alert-monthly-refund"><span class="red">אנא הפחת את גובה המשכנתא. נראה שההחזר החודשי אותו אתה מבקש הוא יותר מ- 39% <br>מסך ההכנסות המדווחות שלך, ולכן הבנק לא יאשר את המשכנתא!</span></p>




				<div class="message d-i-f f-d-c">
					<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
					<p>בחירת תקופה של המשכנתא משפיעה על גובה ההחזר החודשי.
					ככל שהתקופה ארוכה יותר, ההחזר החודשי שיתקבל במשכנתא נמוך יותר.</p>
					<span class="message-timing">18:20</span>
				</div>
			</div>
			<div class="full-section bottom-slider">
				<div class="form-group range-group lower-mortgage">
					<div class="text_value_2"><?php if(count($ques13)){ echo $ques13[1]->meta_value; }else{ } ?></div>
					<input  name="lower_mortgage_input_slide" type="range" placeholder ="*************" min="0" max="26" value="<?php if(count($ques13)){ echo $ques13[2]->meta_value; }else{ echo"0"; } ?>" class="slider" id="lower_mortgage_input_slide">
					<span class="slider-icon d-f j-c-c a-i-c">
						<img src="images/range-period.png" alt="">
					</span>
				</div>
				<div class="form-group">
					<input type="text" id="lower_mortgage_input" class="form-control" name="lower_mortgage_input" value="<?php if(count($ques13)){ echo $ques13[1]->meta_value; }else{ } ?>" placeholder="15 שנים" readonly onkeyup="this.value=addCommas(this.value);"/>
					<!-- <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"> -->
				</div>
				<button type="submit" class="main-button questwelvesubmit">אישור</button>
				{{ csrf_field() }}
				<div class="errMsg"></div>
			</div>
		</form>
		<br />
		<p class="success-text">שים לב - נתון התקופה מוערך ואינו סופי. הנתון ישתנה בהתאם לסוג המשכנתא וגובה הריביות אותם נבחר בהמשך.</p>

		@php 
		$x = 0;
		$y = 0;
		$z = 0;
		$s = 0;
		if(count($ques7) && count($ques13) ){ 
		$fix = $ques7[1]->meta_value + $ques13[1]->meta_value;

		if($fix > 80){
		@endphp
		<div class="imp-info">
			<h4>חשוב לדעת</h4>
			<div class="imp-info-text">
				<span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span>

				@php
				if($ques7[1]->meta_value <= 76){
				$x = 80 - $ques7[1]->meta_value;
				$y = 80 - $ques13[1]->meta_value;
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


</div>
<script type="text/javascript">
	window.location.hash = '#formQuestionFourteenDIV';
	$(document).ready(function(){
		var ques2 = "<?php echo $ques2; ?>";

//alert(ques2);

if(ques2 == "No"){
	//$('body').addClass('give_twenty');
}else{
	//$('body').addClass('give_twentyfive');
}
//$('body').addClass('bubble_second_filled');
});

	$(document).on('input', '#monthly_refund_input_slide', function() {        
//$("#monthly_refund_input").attr('value',$(this).val());
//$(".text_value_1").html($(this).val());
var twelve_one = $(this).val();
var four = "<?php echo $ques4; ?>";
//alert(four);
var ii = 2.9;
var uu = parseFloat(twelve_one) + parseFloat(ii);
//alert(uu);
var tt = parseFloat(uu) / parseFloat(four);
//alert(tt);
// if(tt > 39){
// 	$('.alert-monthly-refund').html('<span class="red">אנא הפחת את גובה המשכנתא. נראה שההחזר החודשי אותו אתה מבקש הוא יותר מ-'+tt+'% <br>מסך ההכנסות המדווחות שלך, ולכן הבנק לא יאשר את המשכנתא!</span>');
// }else{
// 	$('.alert-monthly-refund').html('<span class="green">אנא הפחת את גובה המשכנתא. נראה שההחזר החודשי אותו אתה מבקש הוא יותר מ-'+tt+'% <br> מסך ההכנסות המדווחות שלך, ולכן הבנק לא יאשר את המשכנתא!</span>');
// }

var installment = ["11272", "10015", "9155","8511", "7996", "7562","7180", "6835", "6515","6212", "5922", "5642","5369", "5102", "4839","4580", "4325", "4072","3821", "3574", "3328","3086", "2847", "2611","2379", "2151","1929"];

var month = ["4", "5", "6","7", "8", "9","10", "11", "12","13", "14", "15","16", "17", "18","19", "20", "21","22", "23", "24","25", "26", "27","28", "29","30"];

var installments = installment[$(this).val()];

	var installments = addCommas(installments);


var months = month[$(this).val()];
$("#monthly_refund_input_slider_value").attr('value',$(this).val());
$("#monthly_refund_input").attr('value',installments);
$(".text_value_1").html(installments);
$("#lower_mortgage_input").attr('value',months);
$(".text_value_2").html(months);
//$('#lower_mortgage_input_slide').attr('value',$(this).val());
$('#lower_mortgage_input_slide').val($(this).val());


});

	$(document).on('input', '#lower_mortgage_input_slide', function() {       
//$("#lower_mortgage_input").attr('value',$(this).val());
//$(".text_value_2").html($(this).val());

var installment = ["11272", "10015", "9155","8511", "7996", "7562","7180", "6835", "6515","6212", "5922", "5642","5369", "5102", "4839","4580", "4325", "4072","3821", "3574", "3328","3086", "2847", "2611","2379", "2151","1929"];

var month = ["4", "5", "6","7", "8", "9","10", "11", "12","13", "14", "15","16", "17", "18","19", "20", "21","22", "23", "24","25", "26", "27","28", "29","30"];

var installments = installment[$(this).val()];
var installments = addCommas(installments);
var months = month[$(this).val()];

$("#monthly_refund_input_slider_value").attr('value',$(this).val());
$("#monthly_refund_input").attr('value',installments);
$(".text_value_1").html(installments);
$("#lower_mortgage_input").attr('value',months);
$(".text_value_2").html(months);
//$('#lower_mortgage_input_slide').slider('value',$(this).val());
//$("#monthly_refund_input_slide").attr("value", $(this).val());
$('#monthly_refund_input_slide').val($(this).val());


}); 

	$('.no_button_tewlve').on('click',function(){

		var x = '<?php echo $x; ?>';
		var y = '<?php echo $y; ?>';
		var z = '<?php echo $z; ?>';
		var s = '<?php echo $s; ?>';
		var a = s - x;
		var bb = s - 4;
//alert(s);

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
</script>
