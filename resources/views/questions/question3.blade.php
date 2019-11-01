@php
$auth = \Auth::user();
if(!empty($auth)){
    $ques = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','3')->get();
    if(count($ques)){
    $ques3 = $ques;
	}
}
@endphp
<div class="ques_4" id="ques_4" <?php if(isset($ques3)){ }else{ echo'style="display:none"'; } ?>>
	<form method="post" id="formQuestionThree">
	  <div class="q4 chat-container d-f f-d-c a-i-f-s">
	  	<div class="chat-number">3</div>
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>מעולה! לפני שאמשיך בשאלות נוספות, אשמח
לדעת איך תרצה/י שאפנה אלייך?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="chat-buttons ques4">
			<ul class="question3-ul my_question <?php if(isset($ques3)){ echo'click-color-change'; }else{ } ?>">
			  	<li>
			  		<input id="input31" type="radio" name="gender" value="Male" <?php if(isset($ques3)){ if($ques3[0]->meta_value == "Male"){ echo "checked=checked"; } else{ } } ?>>
			  		<label for="input31" class="main-button"><img src="images/male-icon.png" alt="">בלשון זכר</label>
			  	</li>
			  	<li>
			  		<input id="input32" type="radio" name="gender" value="Female" <?php if(isset($ques3)){ if($ques3[0]->meta_value == "Female"){ echo "checked=checked"; } else{ } } ?>>
			  		<label for="input32" class="main-button"><img src="images/female-icon-white.png" alt="">בלשון נקבה</label>
			  	</li>
			</ul>
		</div>
	  </div>
	     {{ csrf_field() }}
	  <div class="errMsg"></div>

	  <div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-3" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
 </form>
 </div>
 <script>
	//window.location.hash = '#formQuestionThree';
 </script>
