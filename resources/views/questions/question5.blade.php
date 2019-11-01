@php
$auth = \Auth::user();
if(!empty($auth)){
    $ques = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','5')->get();
    if(count($ques)){
    $ques5 = $ques;
	}
}
@endphp
<div class="ques_6" id="ques_6" <?php if(isset($ques5)){ }else{ echo'style="display:none"'; } ?>>
	<div class="q6 chat-container d-f f-d-c a-i-f-s" id="formQuestionFivePointOneDIV">
		<div class="chat-number">5</div>
		<div class="message-pic">
			<img src="images/advisor.png" alt="">
		</div>
		<div class="message d-i-f f-d-c">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			<p class="male_female_five">האם הייתם מגדירים את המצב הכלכלי שלכם כיציב או שאתם 
			מצליחים לחסוך בכל חודש סכום העולה על אלף שקלים?</p>
			<span class="message-timing">18:26</span>
		</div>
		<div class="message no-background d-i-f a-i-c changeColor">

			<form method="post" class="form-inline average-savings" id="formQuestionFivePointOne">
				<ul class="question5-ul my_question ">
					<li class="">
						<input id="input51" type="radio" name="stable_statuss" value="yes" class="economic_situation">
						<input type="hidden" name="stable_status" value="yes">
						<input type="hidden" name="stable_status_fee" value="0">
						<label for="input51" class="main-button">המצב הכלכלי שלנו יציב</label>
					</li>
				</ul>
				{{ csrf_field() }}
			</form>

			<span>או סכום חסכון חודשי:</span>
			<div class="form-group top-m">
				<form method="post" id="formQuestionFive" class="form-inline average-savings">
					<div class="form-group">
						<input type="text" id="average-savings" class="form-control" data-att="Our economic situation is not stable" name="stable_status_fee" value="<?php if(isset($ques5)){  if($ques5[0]->meta_value != 0){ echo $ques5[0]->meta_value;}else{ } }else{ echo""; } ?>" placeholder=" מעל 1,000 שקלים" onkeyup="this.value=addCommas(this.value);"/>
						<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">

						<input type="hidden" name="stable_status" value="no">
					</div>
					{{ csrf_field() }}
					

					<button type="submit" class="not_stable main-button">אישור</button>
					<div class="errMsg"></div>
				</form>
			</div>
		</div>
	</div>
	<div class="width-full">
		<div class="message d-i-f f-d-c spinner spinner-ques-5" style="display:none;">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
</div>
<script>
	//window.location.hash = '#formQuestionFivePointOneDIV';

	$('.not_stable').click(function(){
	  $('.changeColor').addClass('endButton');
	   $('.changeColor').removeClass('startButton');
	});
	$('.question5-ul li label').click(function(){
	  $('.changeColor').addClass('startButton');
	   $('.changeColor').removeClass('endButton');
	});
 </script>	
