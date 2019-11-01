@php
$ques8 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','8')->get();
$ques11_3 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','11')->get();
$ques2 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','2')->get();

       if(count($ques11_3)){
     	$value2 = $ques2[0]->meta_value;
     	$x_value_1 = $ques11_3[0]->meta_value;
    	$x_value_1 = str_replace(",","",$x_value_1);
        $x_value_2 = $ques11_3[1]->meta_value;
        $x_value_2 = str_replace(",","",$x_value_2);
     	$x_value_3 = $ques11_3[2]->meta_value;
        $x_value_3 = str_replace(",","",$x_value_3);
            
             if(45 < $x_value_3 && $x_value_3 <= 49){
                 $prop_value = $x_value_1 * 0.45;
             }elseif(60 < $x_value_3 && $x_value_3 <= 64){
                 $prop_value = $x_value_1 * 0.60;
             }elseif(75 < $x_value_3 && $x_value_3 <= 79){
                 $prop_value = $x_value_1 * 0.75;
             }else{
                 $prop_value = "0";  
             }
}

if(count($ques11_3)){
	$mort_ratio = $ques11_3[2]->meta_value;
	$mortgage_fee = $ques11_3[1]->meta_value;
	$value2;
	$z_value = $prop_value;
}else{
	$mort_ratio = 0;
	$survey = 1;
	$mortgage_fee = 0;
	$value2 = 'yes';
	$z_value = 0;	
}
@endphp

<div class="ques_12_3" id="ques_12_3" <?php if(count($ques8) && count($ques11_3)){ if($ques8[0]->meta_value == "any_cause"){  } else{ echo "style='display:none;'"; } }else{ echo "style='display:none;'"; } ?> >
	<div class="q15 chat-container" id="formQuestionThirteenDIV">
		<div class="chat-number">11c</div>
		<div class="message-pic">
			<img src="images/advisor.png" alt="">
		</div>
		<div class="message d-i-f f-d-c">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
			<p>מה עלות הנכס וגובה ההון העצמי 
			לצורך רכישת הנכס?</p>
			<span class="message-timing">18:26</span>
		</div>
		<div class="message no-background d-i-f">
			<form class="form-inline multiple-dropdown chat-equity-cost d-f" method="post" id="formQuestionThirteen">
				<div>
					<div class="form-group">
						<label for="incoming-cost-2">עלות הנכס:</label>
						<input type="text" id="incoming-cost-2" class="form-control" name="incoming_cost_2" value="<?php if(count($ques11_3)){ echo $ques11_3[0]->meta_value; }else{ echo"3,200,000";} ?>" onkeyup="this.value=addCommas(this.value);">
						<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
					</div>
					<div class="d-f">
						<div class="form-group">
							<label for="equity-height"> גובה משכנתא:</label>
							<input type="text" id="equity-height" class="form-control" name="equity_height" value="<?php if(count($ques11_3)){ echo $ques11_3[1]->meta_value; }else{ echo"1,664,000"; } ?>" onkeyup="this.value=addCommas(this.value);">
							<img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
						</div>
						<button type="submit" class="purp_buy main-button eleven-three-submit">אישור</button>
					</div>
					<br>
					<p id="error-msg-3" style="display: none; color: red;">עלות הנכס צריכה להיות גדולה מגובה המשכנתא שלך</p>
					
					@php
					if($mort_ratio > 50 && $value2 == 'No' ){ 
					@endphp
					<p class="alert-text">
						גובה המשכנתא הנדרש חורג מ- 50% שניתן לקחת אך אל דאגה יש לנו פתרון
					בסיום התהליך נקיים פגישה אשר תאפשר לך לקחת את המשכנתא באופן שביקשת.</p>
					@php
					}
					@endphp

				</div>
				{{ csrf_field() }}

				<div class="errMsg"></div>
			</form>
		</div>
		@php
			if(count($ques11_3)){
				$mort_property = $ques11_3[0]->meta_value;
				$mortgage_fee = $ques11_3[1]->meta_value;
				$z = $z_value;
				if($z != 0){
					echo'<div class="imp-info">
						<h4>חשוב לדעת</h4>
						<div class="imp-info-text">
							<span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span>
							<p>ביקשת משכנתא בסך של '.$mortgage_fee.' שקלים, 
								על דירה בשווי '.$mort_property.' שקלים.
								אם תוריד את גובה המשכנתא ל- <span class="extra_question_work">'.$z.'</span> שקלים, 
								תוכל לקבל ריביות יותר טובות על המשכנתא שלך!
							האם אתה מעונין להוריד את גובה המשכנתא?</p>
						</div>
					</div>
					<div class="chat-buttons">
						<a class="main-button yes_clicked_eleven">מעוניין להוריד</a>
						<a class="main-button grey no_clicked_eleven">השאר את המשכנתא ללא שינוי</a>
					</div>';
				}else{
					echo'<div class="imp-info imp-info-else-condition-eleven-c"></div>';	
				}
			}else{
				echo'<div class="imp-info imp-info-else-condition-eleven-c"></div>';
			}
		@endphp
	</div> 
	<div class="width-full">
		<div class="message d-i-f f-d-c spinner spinner-ques-11_3" style="display:none;">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
</div>
<script>
	window.location.hash = '#formQuestionThirteenDIV';
	$(document).ready(function(){
		$('body').removeClass('bubble_eighth');
		$('body').removeClass('bubble_direct_ten');
		//$('body').addClass('bubble_direct_eleven');
	});

	$('#equity-height, #incoming-cost-2').on('keyup keydown keypress blur',function(){
		var yy = $('#incoming-cost-2').val();
		var rr = $('#equity-height').val();
		var val1 = yy.split(',').join('');
		var val2 = rr.split(',').join('');

		//twelve_change_eleven_a(addCommasDirect(val2));

		alert_wala_fun();

	  	if (parseInt(val2) > parseInt(val1) || parseInt(val2) == parseInt(val1)  ){ 
	  		//$(this).val(yy);
	  		$("#error-msg-3").show();
	  		$(".eleven-three-submit").hide();
	  	}
	  	else{
	  		$("#error-msg-3").hide();
	  		$(".eleven-three-submit").show();
	  	}
	});



	function alert_wala_fun(){
		var yy = $('#incoming-cost-2').val();
		var rr = $('#equity-height').val();
		var val1 = yy.split(',').join('');
		var val2 = rr.split(',').join('');
		var divide = parseInt(val2) / parseInt(val1);
		//alert(divide);
		if(divide > 0.5){
			$(".alert-text").show();
		}else{

			$(".alert-text").hide();	
		}
	}
alert_wala_fun();





</script> 

