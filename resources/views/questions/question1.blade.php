@php
$auth = \Auth::user();
if(!empty($auth)){
    $ques = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','1')->get();
    if(count($ques)){
    $ques1 = $ques;
	}
}
@endphp


<div class="ques_2" id="ques_2" <?php if(isset($ques1)){ }else{ echo'style="display:none"'; } ?>>
	<form method="post" id="formQuestionOne" class="formQuestionOne <?php if(isset($ques1)){ echo'formQuestionOnes'; }else{  } ?>">
		<div class="q1 chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">1</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt=""/>
			</div>

			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>כעת אני אשאל אותך מספר שאלות כדי להבין מאיפה אנחנו מתחילים, כל תשובה שלך 
					נשמרת כחלק מדוח המשכנתא – תוכל לעקוב אחרי מילוי השאלות שלך בבאר 
					ההתקדמות העליון ניתן לחזור בכל שלב ולהמשיך למלא הנתונים.<img src="images/custom-arrow.png" class="custom-arrow"></p>
					<span class="message-timing">18:25</span>
			</div>


			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>חשוב לי לציין, 
					מידע זה הינו דיסקרטי ולא יועבר לשום גורם נוסף לפני שתאשר לי לעשות כך.
				</p>
				<span class="message-timing">18:25</span>
			</div>



			<div class="message d-i-f f-d-c">

				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>איפה את/ה גר היום?</p>
				<span class="message-timing">18:26</span>
			</div>

			<div class="chat-buttons ques1">

				<ul class="question-ul my_question <?php if(isset($ques1)){ echo'click-color-change'; }else{ } ?>"  >
					<li>
						<input id="input1" type="radio" name="que1" value="aprt_no_mortgage" <?php if(isset($ques1)){ if($ques1[0]->meta_value == "aprt_no_mortgage"){ echo "checked=checked"; } else{ } }?>>
						<label for="input1" class="main-button">דירה בבעלותי ללא משכנתא</label>
					</li>

					<li>
						<input id="input2" type="radio" name="que1" value="aprt_with_mortgage" <?php if(isset($ques1)){ if($ques1[0]->meta_value == "aprt_with_mortgage"){ echo "checked=checked"; } else{ } } ?>>
						<label for="input2" class="main-button">דירה בבעלותי עם משכנתא</label>
					</li>

					<li>
						<input id="input3" type="radio" name="que1" value="rental_aprt" <?php if(isset($ques1)){ if($ques1[0]->meta_value == "rental_aprt"){ echo "checked=checked"; } else{ } }else{ } ?>>
						<label for="input3" class="main-button">בשכר דירה</label>
					</li>

					<li>
						<input id="input4" type="radio" name="que1" value="free_aprt" <?php if(isset($ques1)){ if($ques1[0]->meta_value == "free_aprt"){ echo "checked=checked"; } else{ } } ?>>
						<label for="input4" class="main-button">בדיור שאיני משלם עליו</label>
					</li>
				</ul>


			</div>
		</div>


		<div class="chat-container d-f f-d-c a-i-f-s questionOneOption" <?php if(isset($ques1) && $ques1[0]->meta_value == "rental_aprt"){ ?> style=""; <?php  }else{  ?> style="display:none"; <?php } ?> id="FOR_RENTAL_ONLY">
			<div class="message-pic">
				<img src="images/advisor.png" alt=""/>
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<p>אני מבין שאתה גר בדירה שכורה.
				מה גובה השכירות אותה אתה משלם?</p>
				<span class="message-timing">18:26</span>
			</div>
			<div class="message no-background d-i-f f-d-c no-pre">
				<div class="form-inline">
					<div class="form-group">

						<?php if(isset($ques1)&& $ques1[0]->meta_value == "rental_aprt"){ 
							echo '<input type="text" placeholder="Number only" id="rent" class="form-control" name="rent" value="'.$ques1[1]->meta_value.'" onkeyup="this.value=addCommas(this.value);"/> '; 
						} else{
							echo '<input type="text" id="rent" placeholder="Number only" class="form-control" name="rent" value="1000" onkeyup="this.value=addCommas(this.value);"/> '; 
						} 
						?>
						<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
					</div>
					<button type="submit" class="ok_btn main-button1 main-button">אישור</button>
				</div>

			</div>
		</div>
		{{ csrf_field() }}

		<div class="errMsg"></div>


		<div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-1" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
	</form>
</div>

<script>
	//window.location.hash = '#formQuestionOne';
</script>	
