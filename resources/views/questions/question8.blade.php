@php
$auth = \Auth::user();
if(!empty($auth)){
    $ques = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','8')->get();
    if(count($ques)){
    $ques8 = $ques;
	}
}
@endphp
<div class="ques_9" id="ques_9" <?php if(isset($ques8)){ }else{ echo'style="display:none"'; } ?>>
	<form method="post" id="formQuestionEight">
		<div class="q10 chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">8</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt="">
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p class="male_female_eight">ספרי לי בבקשה לשם מה אתה מבקש את המשכנתא?</p>
				<span class="message-timing">18:26</span>
			</div>
			<div class="chat-buttons ques9">

				<ul class="question8-ul my_question <?php if(isset($ques8)){ echo'click-color-change'; }else{ } ?>">
					<li>
						<input id="input81" type="radio" name="why_mortgage" value="new_aprt" <?php if(isset($ques8)){ if($ques8[0]->meta_value == "new_aprt"){ echo "checked"; } else{ } } ?>>
						<label for="input81" class="main-button">רכישת דירה מקבלן</label>
					</li>

					<li>
						<input id="input82" type="radio" name="why_mortgage" value="second_hand_aprt" <?php if(isset($ques8)){ if($ques8[0]->meta_value == "second_hand_aprt"){ echo "checked"; } else{ } } ?>>
						<label for="input82" class="main-button">דירה יד שנייה</label>
					</li>

					<li>
						<input id="input83" type="radio" name="why_mortgage" value="construction" <?php if(isset($ques8)){ if($ques8[0]->meta_value == "construction"){ echo "checked"; } else{ } }else{ echo""; } ?> >
						<label for="input83" class="main-button">בנייה עצמית</label>
					</li>

					<li>
						<input id="input84" type="radio" name="why_mortgage" value="mistaken_program" <?php if(isset($ques8)){ if($ques8[0]->meta_value == "mistaken_program"){ echo "checked"; } else{ } } ?>>
						<label for="input84" class="main-button">תוכנית מחיר למשתכן</label>
					</li>

					<li>
						<input id="input85" type="radio" name="why_mortgage" value="any_cause" <?php if(isset($ques8)){ if($ques8[0]->meta_value == "any_cause"){ echo "checked"; } else{ } } ?>>
						<label for="input85" class="main-button">רכישה לכל מטרה</label>
					</li>
				</ul>



			</div>
		</div>
		{{ csrf_field() }}

		<div class="errMsg"></div>
		<div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-8" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
	</form>
</div>
<script>
	// /window.location.hash = '#formQuestionEight';

	$(document).ready(function(){

		$("body").on('change','input[name=why_mortgage]',function(){
		    var val = $('input[name=why_mortgage]:checked').val();
		   // alert(val);
		    if(val == "mistaken_program"){

		    	$('body').find('#input93').click();

		    }
		});

	});
</script>	
