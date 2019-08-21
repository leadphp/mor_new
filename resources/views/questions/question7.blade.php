@php
$auth = \Auth::user();
if(!empty($auth)){
    $ques = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','7')->get();
    if(count($ques)){
    $ques7 = $ques;
	}
}
@endphp
<div class="ques_8" id="ques_8" <?php if(isset($ques7)){ }else{ echo'style="display:none"'; } ?>>
	<form method="post" id="formQuestionSeven">

		<div class="q8 chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">7</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt="">
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>במידה וישנן הטבות הצטרפות בבנקים אחרים, האם תיהיה
				מוכן לקחת משכנתא בבנק אחר?</p>
				<span class="message-timing">18:26</span>
			</div>
			<div class="chat-buttons ques7">

				<ul class="question7-ul my_question <?php if(isset($ques7)){ echo'click-color-change'; }else{ } ?>">
					<li>
						<input id="input71" type="radio" name="other_banks_benifits" value="Yes" <?php if(isset($ques7)){ if($ques7[0]->meta_value == "Yes"){ echo "checked=checked"; } else{ } } ?> >
						<label for="input71" class="main-button">כן, אם זו הטבה משמעותית</label>
					</li>
					<li>
						<input id="input72" type="radio" name="other_banks_benifits" value="No" <?php if(isset($ques7)){ if($ques7[0]->meta_value == "No"){ echo "checked=checked"; } else{ } } ?> >
						<label for="input72" class="main-button">לא, אני נשאר בכל מקרה בבנק שלי</label>
					</li>
				</ul>

			</div>
		</div>


		<div class="q9 chat-container d-f f-d-c a-i-f-s questionsevenOption" <?php if(isset($ques7)){ ?> style=""; <?php  }else{  ?> style="display:none"; <?php } ?> >
			<div class="chat-number">7.1</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt="">
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>מה הגיל של הלווה המבוגר ביותר שיקח את המשכנתא?</p>
				<span class="message-timing">18:26</span>
			</div>
			<div class="message no-background d-i-f f-d-c">
				<div class="form-inline">
					<div class="form-group">
						<input type="text" id="browser-age" class="form-control browser_age" name="browser_age" min="20" max="80" value="<?php if(isset($ques7)){ echo $ques7[1]->meta_value; }else{ echo"60";} ?>" placeholder="" onkeyup="this.value=addCommas(this.value);"/>
					</div>
					<button type="submit" class="age_btn main-button">אישור</button>
				</div>
			</div>
		</div>
		{{ csrf_field() }}
		<div class="custom-error" style="display:none;">Enter Value in between 18-120</div>
		<div class="errMsg"></div>

		<div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-7" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
	</form>
</div>
<script>
//window.location.hash = '#formQuestionSeven';
	$(document).ready(function(){
		$('#browser-age').keyup(function(){
			var val = $(this).val();
			if(val > 17 && val <= 120){
				$('.custom-error').hide();
				$('.age_btn').show();
			}else{
				$('.custom-error').show();
				$('.age_btn').hide();
			}
		});
	});
</script>
