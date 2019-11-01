@php
$auth = \Auth::user();
if(!empty($auth)){
    $ques = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','4')->get();
    if(count($ques)){
    $ques4 = $ques;
	}
}
@endphp
<div class="ques_5" id="ques_5" <?php if(isset($ques4)){ }else{ echo'style="display:none"'; } ?>>
	<form method="post" id="formQuestionFour">
		<div class="q5 chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">4</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt="">
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>בכמה מסתכמות ההכנסות החודשיות שלכם בבית?
				הכנסה כוללת נטו למשפחה, בעל ואישה ביחד.</p>
				<span class="message-timing">18:26</span>
			</div>
			<div class="message no-background d-i-f f-d-c">
				<div class="form-inline">
					<div class="form-group">
						<input type="text" id="net_income" class="form-control" name="net_income" value="<?php if(isset($ques4)){ echo $ques4[0]->meta_value; }else{ echo "15,000"; } ?>"  onkeyup="this.value=addCommas(this.value);">
						<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
					</div>
					<button type="submit" class="net_in_btn main-button">אישור</button>
				</div>
			</div>
		</div>
		{{ csrf_field() }}

		<div class="errMsg"></div>


		<div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-4" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
	</form>
</div>
 <script>
	//window.location.hash = '#formQuestionFour';
	
	$('body').on('keyup','#net_income',function(){
		  if ($(this).val() < 1){ 
		  		// $(this).val('1');
		  }
		});
 </script>