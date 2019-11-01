<?php 
$ques12 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','14')->get();

if(count($ques12) != 0){
$first = $ques12[3]->meta_value;

}else{
$first = '0';	
}
?>

<div class="ques_18" id="ques_18" <?php if(isset($ques18)){ }else{ echo'style="display:none"'; } ?>>
	<div id="formQuestionNineteenDIV">
		<div class="chat-container d-f f-d-c a-i-f-s">
		    <div class="message-pic">
			    <img src="images/advisor.png" alt="">
			  </div>
		    <div class="message d-i-f f-d-c">
			  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			  <p>תודה!
				יש לי מספיק מידע איתו אפשר לייצר תמהיל משכנתא ולייעץ עבורך על המשכנתא הטובה ביותר</p>
			  <span class="message-timing">18:20</span>
			</div>
			<div class="message d-i-f f-d-c">
			  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			  <p class="data-to-render-at-last">כבר בשלב הנוכחי אני  יכול לגלות לך שהדוח חוסך לך מעל <span class="make_it_green"> <?php echo number_format($first); ?> </span>
				מעלות המשכנתא הממוצעת לאנשים עם נתונים דומים לשלך.</p>
			  <span class="message-timing">18:20</span>
			</div>
			<div class="chat-buttons">
			  <a href="javascript:void(0);" class="main-button final_submit_registration"><img src="images/button-check.png" alt="">אני רוצה להמשיך ליצירת דוח המשכנתא וקישור לבנק</a>
			</div>
		</div>
		<!--   <h1>Thank U for Submittion</h1> -->
	</div>

	<div class="width-full">
		<div class="message d-i-f f-d-c spinner spinner-ques-18" style="display:none;">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
</div>
<script>
	//window.location.hash = '#formQuestionNineteenDIV';


	





	
</script>