@php
$auth = \Auth::user();
if(!empty($auth)){
	$ques8 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','8')->get();
    $ques = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','9')->get();
    if(count($ques)){
    $ques9 = $ques;
	}
}
@endphp
<div class="ques_10" id="ques_10" <?php if(isset($ques9) && isset($ques8) ){ if($ques8[0]->meta_value == "mistaken_program" || $ques8[0]->meta_value == "any_cause"){ echo "style='display:none;'"; }  else{ } }else{ echo "style='display:none;'"; } ?> >

	
	<form method="post" id="formQuestionNine">
		<div class="q11 chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">9</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt="">
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p class="male_female_nine">תודה לך, ספר לי בבקשה מה הסטטוס שלך מבחינת לקיחת משכנתא?</p>
				<span class="message-timing">18:26</span>
			</div>
			<div class="chat-buttons ques10">
				<ul class="question9-ul my_question <?php if(isset($ques9)){ echo'click-color-change'; }else{ } ?>">
					<li>
						<input id="input91" type="radio" name="status_of_mortgage" value="investor" <?php if(isset($ques9)){ if($ques9[0]->meta_value == "investor"){ echo "checked=checked"; } else{ } } ?> >
						<label for="input91" class="main-button">משקיע</label>
					</li>

					<li>
						<input id="input92" type="radio" name="status_of_mortgage" value="asset_improver" <?php if(isset($ques9)){ if($ques9[0]->meta_value == "asset_improver"){ echo "checked=checked"; } else{ } } ?> >
						<label for="input92" class="main-button">משפר דיור</label>
					</li>

					<li>
						<input id="input93" type="radio" name="status_of_mortgage" value="first_aprt" <?php if(isset($ques9)){ if($ques9[0]->meta_value == "first_aprt"){ echo "checked=checked"; } else{ } } ?> >
						<label for="input93" class="main-button">דירה ראשונה</label>
					</li>
				</ul>
			</div>
		</div>
		{{ csrf_field() }}
		<div class="errMsg"></div>
		<div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-9" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

	</form>
</div>

<script>
//window.location.hash = '#formQuestionNine';
</script>	
