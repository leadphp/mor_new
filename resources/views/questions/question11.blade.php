@php
$ques1 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','1')->get();
$ques2 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();
$ques8 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','8')->get();
$ques9 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','9')->get();
$ques11 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','11')->get();



if(count($ques11)){
       $value8 = $ques8[0]->meta_value;
       $value9 = $ques9[0]->meta_value;
       $value1 = $ques1[0]->meta_value;
       $value2 = $ques2[0]->meta_value;
       $x_value_1 = $ques11[0]->meta_value;
       $x_value_1 = str_replace(",","",$x_value_1);
       $x_value_2 = $ques11[1]->meta_value;
       $x_value_2 = str_replace(",","",$x_value_2);
       $x_value_4 = $ques11[3]->meta_value;
       $x_value_4 = str_replace(",","",$x_value_4);

       $survey = \App\Banks_regulation::where('options',$value8)->get();
       $survey = $survey[0][$value1];

       if($survey == 'b'){
         $survey = \App\Banks_regulation_relation::where('options',$value9)->get();
         $survey_value = $survey[0]['programe'];
       }else{
         $survey_value = $survey;
       }

       $x_value = $x_value_2 / $x_value_1 * 100;
       $y_value = 100 - $survey_value;
       $x_value = number_format($x_value, 2, '.', '');
        //dd($x_value_4);


             if(45 < $x_value_4 && $x_value_4 <= 49){
                 $prop_value = $x_value_1 * 0.45;

             }elseif(60 < $x_value_4 && $x_value_4 <= 64){
                 $prop_value = $x_value_1 * 0.60;

             }elseif(75 < $x_value_4 && $x_value_4 <= 79){
                 $prop_value = $x_value_1 * 0.75;

             }else{
                 $prop_value = "0";
             }

}

if(count($ques11)){

$mort_ratio = $ques11[3]->meta_value;
$mortgage_fee = $ques11[2]->meta_value;
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




<div class="ques_12_1" id="ques_12_1" <?php if(count($ques8) && count($ques11)){ if($ques8[0]->meta_value == "mistaken_program" || $ques8[0]->meta_value == "any_cause"){ echo "style='display:none;'"; } else{ } }else{ echo "style='display:none;'"; } ?> >
	<div class="q13 double-chat-container d-f j-c-s-b" id="formQuestionEleven" > 

		<div class="chat-container d-f f-d-c a-i-f-s">
			<div class="chat-number">11a</div>
			<div class="message-pic">
				<img src="images/advisor.png" alt="">
			</div>
			<div class="message d-i-f f-d-c">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
				<p>מה עלות הנכס וגובה ההון העצמי 
				לצורך רכישת הנכס?</p>
				<span class="message-timing">18:26</span>
			</div>
		</div>
		<div class="q14 ">
			<div class="message no-background d-i-f">
				<form class="form-inline multiple-dropdown chat-equity-cost d-f" method="post" id="formQuestionEleven_One">
					<div>
						<div class="form-group">
							<label for="incoming-cost">עלות הנכנס:</label>
							<input type="text" id="incoming-cost" class="form-control" name="incoming_cost" value="<?php if(count($ques11)){ echo $ques11[0]->meta_value; }else{ echo"10,000"; } ?>" onkeyup="this.value=addCommas(this.value);"/>
							<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
						</div>
						<div class="d-f">
							<div class="form-group">
								<label for="equity-cost">גובה ההון העצמי שלך:</label>
								<input type="text" id="equity-cost" class="form-control" name="equity_cost" value="<?php if(count($ques11)){ echo $ques11[1]->meta_value; }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"/>
								<img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
							</div>
							<button type="submit" class="acquisition main-button eleven-one-submit">אישור</button>
						</div>
						<br />
						<p>חשוב שתשים לב שההון העצמי שציינת הוא עבור רכישת הנכס בלבד!
						הסכום לא יכול לכלול הוצאות נילוות כמו ריהוט,שיפוצים ואגרותת נלוות.</p>


						@php
						if($mort_ratio > $survey && $value2 == 'No' ){ 
						@endphp
						<p class="alert-text red_message">
							@php
							if($y_value > $x_value){
							@endphp
							ההון העצמי שלך מהווה @php echo $x_value; @endphp% מעלות הנכס ! 
						לא תוכל לקבל משכנתא אם ההון העצמי לא מהווה לפחות @php echo $y_value; @endphp% מעלות הנכס.</p>
						@php
					} 
				}
				@endphp
			</div>
			{{ csrf_field() }}
			<div class="errMsg"></div>
		</form>
	</div>
</div>



@php

if(count($ques11)){

$mort_property = $ques11[0]->meta_value;
$mortgage_fee = $ques11[2]->meta_value;
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
echo'<div class="imp-info imp-info-else-condition"></div>';	
}
}else{
echo'<div class="imp-info imp-info-else-condition"></div>';	
}
@endphp


<div class="width-full">
	<div class="message d-i-f f-d-c spinner spinner-ques-11_1" style="display:none;">
		<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
</div>


</div>
</div>

<script>
	window.location.hash = '#formQuestionEleven';


	

	$('body').on('keyup','#incoming-cost',function(){
	  if ($(this).val() < 10000){ 
	  		$(this).val('10,000');
	  }
	});


	$('#equity-cost').on('keyup keydown keypress blur',function(){
		var yy = $('#incoming-cost').val();
		var rr = $(this).val();
		var val1 = yy.split(',').join('');
		var val2 = rr.split(',').join('');
	  	if (parseInt(val2) > parseInt(val1)){ 
	  		$(this).val(yy);
	  	}
	});






</script>