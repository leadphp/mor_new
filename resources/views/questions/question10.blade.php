@php
$auth = \Auth::user();
if(!empty($auth)){
	$ques8 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','8')->get();
    $ques = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','10')->get();
    if(count($ques)){
    $ques10 = $ques;
	}
}
@endphp

<div class="ques_11" id="ques_11" <?php if(isset($ques10) && isset($ques8)){ if($ques8[0]->meta_value == "any_cause"){ echo "style='display:none;'"; } else{ } }else{ echo "style='display:none;'"; } ?> >
	<div class="q12 chat-container d-f f-d-c a-i-f-s">
		<div class="chat-number">10</div>
		<div class="message-pic">
			<img src="images/advisor.png" alt="">
		</div>
		<div class="message d-i-f f-d-c">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			<p class="male_female_ten">אם כך, בעוד כמה חודשים תיכנס לדירה?</p>
			<span class="message-timing">18:26</span>
		</div>

		<div class="form-inline range-form cs-r-f">
			<form method="post" id="formQuestionTen_option1">
				<input type="hidden" name="grace" value="3">
				<input type="hidden" name="grace1" value="3">
				<button type="submit" class="main-button tenth-right">כניסה באופן מיידי</button>
				{{ csrf_field() }}
			</form>
			
			<label>בחר מספר חודשי כניסה לדירה:</label>
			<form method="post" id="formQuestionTen">
				<div class="form-group range-group">
					<div class="slidecontainer">
						<div class="text_value"><?php if(isset($ques10)){ echo $ques10[0]->meta_value; }else{ echo "3"; } ?></div>
						<input  name="grace1" type="range" placeholder ="*************" min="3" max="36" value="<?php if(isset($ques10)){ echo $ques10[0]->meta_value; }else{ echo"1";} ?>" class="slider" id="myRange">
						<input type="hidden" name="grace" value="0">
						{{ csrf_field() }}	
					</div>
					<span class="slider-icon d-f j-c-c a-i-c">
						<img src="images/range-home.png" alt=""/>
					</span>
				</div>
				<button type="submit" class="main-button tenth-left">אישור</button>
			</form>
		</div> 
	</div>
	<div class="errMsg"></div>
	<div class="width-full">
		<div class="message d-i-f f-d-c spinner spinner-ques-10" style="display:none;">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
</div>

<script>
	//window.location.hash = '#formQuestionTen';

	$(document).on('input', '#myRange', function() {        
		$(".text_value").html($(this).val());
	});

	$('body').on('click','.tenth-left',function(){
		$('.tenth-left').removeClass('go-grey');
		$('.tenth-right').addClass('go-grey');
	});

	$('body').on('click','.tenth-right',function(){
		$('.tenth-right').removeClass('go-grey');
		$('.tenth-left').addClass('go-grey');
	});

	$(document).ready(function(){
		$('body').removeClass('bubble_eighth');
		//$('body').addClass('bubble_direct_ten');

	});
</script>

