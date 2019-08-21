@php
$auth = \Auth::user();
if(!empty($auth)){
    $ques = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','6')->get();

    if(count($ques)){
	    $ques6 = $ques;

	    $banks = json_decode($ques6[0]->meta_value);
	}
}
@endphp
<div class="ques_7" id="ques_7" <?php if(isset($ques6)){ }else{ echo'style="display:none"'; } ?>>
	<form method="post" id="formQuestionSix">
		<div class="q7 chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">6</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt="">
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>באיזה בנק אתה מנהל את החשבון הראשי
				שלך?</p>
				<span class="message-timing">18:26</span>
			</div>
			<div class="chat-buttons ques6">
				<ul class="question6-ul my_question <?php if(isset($ques6)){ echo'click-color-change'; }else{ } ?>">
					<li>
						<input id="input61" type="checkbox" name="bank_name[]" value="East" <?php if(isset($ques6)){ if(in_array("East", $banks)){ echo "checked=checked"; } else{ } } ?>>
						<label for="input61" class="main-button">מזרחי</label>
					</li>
					<li>
						<input id="input62" type="checkbox" name="bank_name[]" value="Discount" <?php if(isset($ques6)){ if(in_array("Discount", $banks)){ echo "checked=checked"; } else{ } } ?>>
						<label for="input62" class="main-button">דיסקונט</label>
					</li>
					<li>
						<input id="input63" type="checkbox" name="bank_name[]" value="Association" <?php if(isset($ques6)){ if(in_array("Association", $banks)){ echo "checked=checked"; } else{ } } ?> >
						<label for="input63" class="main-button">איגוד</label>
					</li>
					<li>
						<input id="input64" type="checkbox" name="bank_name[]" value="Workers" <?php if(isset($ques6)){ if(in_array("Workers", $banks)){ echo "checked=checked"; } else{ } } ?> >
						<label for="input64" class="main-button">פועלים</label>
					</li>
					<li>
						<input id="input65" type="checkbox" name="bank_name[]" value="National" <?php if(isset($ques6)){ if(in_array("National", $banks)){ echo "checked=checked"; } else{ } } ?> >
						<label for="input65" class="main-button">לאומי</label>
					</li>
					<li>
						<input id="input66" type="checkbox" name="bank_name[]" value="Treasure" <?php if(isset($ques6)){ if(in_array("Treasure", $banks)){ echo "checked=checked"; } else{ } } ?> >
						<label for="input66" class="main-button">אוצר החייל</label>
					</li>
					<li>
						<input id="input67" type="checkbox" name="bank_name[]" value="Jeruselam" <?php if(isset($ques6)){ if(in_array("Jeruselam", $banks)){ echo "checked=checked"; } else{ } } ?> >
						<label for="input67" class="main-button">ירושלים</label>
					</li>
					<li>
						<input id="input68" type="checkbox" name="bank_name[]" value="International" <?php if(isset($ques6)){ if(in_array("International", $banks)){ echo "checked=checked"; } else{ } } ?> >
						<label for="input68" class="main-button">הבינלאומי</label>
					</li>
					<li>
						<input id="input69" type="checkbox" name="bank_name[]" value="Other" <?php if(isset($ques6)){ if(in_array("Other", $banks)){ echo "checked=checked"; } else{ } }else{ echo ''; } ?>  >
						<label for="input69" class="main-button">אחר</label>
					</li>

				</ul>
				<button type="submit" class="ok_btn main-button6 main-button">אישור</button>

			</div>
		</div>
		{{ csrf_field() }}

		<div class="errMsg"></div>

		<div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-6" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
	</form>
</div>
<script>
	//window.location.hash = '#formQuestionSix';
</script>	
