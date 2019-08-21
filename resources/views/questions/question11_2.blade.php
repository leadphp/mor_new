@php

$ques8 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
$ques11= \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','11')->get();
$ques2 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();

  if(count($ques11)){
    $x_value_1 = $ques11[0]->meta_value;
    $x_value_1 = str_replace(",","",$x_value_1);
    $x_value_2 = $ques11[1]->meta_value;
    $x_value_2 = str_replace(",","",$x_value_2);
    $x_value_5 = $ques11[4]->meta_value;
    $x_value_5 = str_replace(",","",$x_value_5);

    $value2 = $ques2[0]->meta_value;
    $x_value = $x_value_2 / $x_value_1 * 100;
    $x_value = number_format($x_value, 2, '.', '');

        if(45 < $x_value_5 && $x_value_5 <= 49){
            $prop_value = $x_value_1 * 0.45;
        }elseif(60 < $x_value_5 && $x_value_5 <= 64){
            $prop_value = $x_value_1 * 0.60;
        }elseif(75 < $x_value_5 && $x_value_5 <= 79){
            $prop_value = $x_value_1 * 0.75;
        }else{
            $prop_value = "0";  
        }
    }

$ques11_2 = $ques11;

	if(count($ques11_2)){
		$mort_ratio = $ques11_2[4]->meta_value;
		$mortgage_fee = $ques11_2[3]->meta_value;
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


<div class="ques_12_2" id="ques_12_2" <?php if(count($ques8) && count($ques11)){ if($ques8[0]->meta_value == "mistaken_program"){  } else{ echo "style='display:none;'"; } }else{ echo "style='display:none;'"; } ?> >
	<div class="q13 double-chat-container d-f j-c-s-b" id="formQuestionEleven" > 
		<div class="chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">11b</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt="">
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>מה עלות הנכס, שווי שוק של הנכס וגובה ההון העצמי שלך לצורך הרכישה ?</p>
				<span class="message-timing">18:26</span>
			</div>
		</div>
		<div class="q14 chat-container">
			<div class="message no-background d-i-f">
				<form class="form-inline multiple-dropdown chat-equity-cost d-f" method="post" id="formQuestionEleven_Two">
					<div>
						<div class="d-i-f f-d-c">
							<div class="form-group">
								<label for="incoming-cost-1">עלות הנכנס:</label>
								<input type="text" id="incoming-cost-1" class="form-control" name="incoming_cost_1" value="<?php if(count($ques11_2)){ echo $ques11_2[0]->meta_value; }else{ echo"2,200,000";} ?>" onkeyup="this.value=addCommas(this.value);"/>
								<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							</div>
							<div class="form-group">
								<label for="required-height">שווי שוק של הנכס:</label>
								<input type="text" id="required-height" class="form-control" name="required_height" value="<?php if(count($ques11_2)){ echo $ques11_2[1]->meta_value; }else{ echo"3,200,000";} ?>" onkeyup="this.value=addCommas(this.value);"/>
								<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							</div>
						</div>
						<div class="d-f">
							<div class="form-group">
								<label for="property-market-value">גובה ההון העצמי שלך:</label>
								<input type="text" id="property-market-value" class="form-control" name="property_market_value" value="<?php if(count($ques11_2)){ echo $ques11_2[2]->meta_value; }else{ echo"836,000";} ?>" onkeyup="this.value=addCommas(this.value);"/>
								<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							</div>
							<button type="submit" class="prop_mark main-button eleven-two-submit">אישור</button>
						</div>
						<br />
						<p>חשוב שתשים לב שההון העצמי שציינת הוא עבור רכישת הנכס בלבד!
						הסכום לא יכול לכלול הוצאות נילוות כמו ריהוט,שיפוצים ואגרותת נלוות.</p>
						@php
						if($mort_ratio > 75 && $value2 == 'No' ){ 
						@endphp
						<p class="alert-text">ההון העצמי שלך מהווה @php echo $x_value; @endphp% משווי שוק של הנכס ! 
						לא תוכל לקבל משכנתא אם ההון העצמי לא מהווה לפחות 25% מעלות הנכס.</p>
						@php
						}
						@endphp

					</div>
					{{ csrf_field() }}
					<div class="errMsg"></div>
				</form>
			</div>
		</div>
		@php
			if(count($ques11_2)){
			$mort_property = $ques11_2[0]->meta_value;
			$mortgage_fee = $ques11_2[3]->meta_value;
			$z = $z_value;
				if($z != 0){
					echo'<div class="imp-info">
						<h4>חשוב לדעת</h4>
						<div class="imp-info-text">
							<span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span>
							<p>ביקשת משכנתא בסך של '.$mortgage_fee.' שקלים, 
								על דירה בשווי '.$mort_property.' שקלים. 
								אם תוריד את גובה המשכנתא ל- '.$z.' שקלים, 
								תוכל לקבל ריביות יותר טובות על המשכנתא שלך!
							האם אתה מעונין להוריד את גובה המשכנתא?</p>
						</div>
					</div>
					<div class="chat-buttons">
						<a class="main-button yes_clicked_eleven">מעוניין להוריד</a>
						<a class="main-button grey no_clicked_eleven">השאר את המשכנתא ללא שינוי</a>
					</div>';
				}else{
					echo'<div class="imp-info imp-info-else-condition-eleven-b"></div>';	
				}
			}else{
				echo'<div class="imp-info imp-info-else-condition-eleven-b"></div>';
			}
		@endphp
	</div>
	<div class="width-full">
		<div class="message d-i-f f-d-c spinner spinner-ques-11_2" style="display:none;">
			<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
</div>
<script>
	window.location.hash = '#formQuestionEleven_Two';

	$('body').on('keyup','#incoming-cost-1',function(){
	  if ($(this).val() < 10000){ 
	  		$(this).val('10,000');
	  }
	});

	$('body').on('keyup','#required-height',function(){
	  if ($(this).val() < 10000){ 
	  		$(this).val('10,000');
	  }
	});



	$('#property-market-value').on('keyup keydown keypress blur',function(){
		var yy = $('#incoming-cost-1').val();
		var rr = $(this).val();
		var val1 = yy.split(',').join('');
		var val2 = rr.split(',').join('');
	  	if (parseInt(val2) > parseInt(val1)){ 
	  		$(this).val(yy);
	  	}
	});




</script>