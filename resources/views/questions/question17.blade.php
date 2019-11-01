
<?php 
$ques17 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','18')->get();
$ques2 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','2')->get();
$ques9 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','9')->get();

if(count($ques17)){
$first = $ques17[0]->meta_value;
//print_r($first);
$second = $ques17[1]->meta_value;
//print_r($second);
$third = $ques17[2]->meta_value;
//print_r($third);
$fourth = $ques17[3]->meta_value;
//print_r($fourth);
$fifth = $ques17[4]->meta_value;
//print_r($fifth);
}else{
$first = ""; 
$second = "";
$third = "";
$fourth = "";
$fifth = "";

}

if(count($ques2)){
$condition_ques2 = $ques2[0]->meta_value;	
}else{
$condition_ques2 = "Yes";	
}

if(count($ques9)){
$condition_ques9 = $ques9[0]->meta_value;	
}else{
$condition_ques9 = "Yes";	
}


$aa = ['30','250','300','350','400','450','500','550','600','650','700','750','800','850','900','950','1000','1050','1100','1150','1200','1250','1300','1350','1400','1450','1500','1550','1600','1650','1700'];

$bb = ['0','350','500','650','800','900','1000','1100','1200','1300','1400','1500','1600','1700','1800','1900'];

$cc = ['0','50','100','150','400','600','650','700','750','800','850','900','950','1000','1050','1100','1150','1200','1250','1300','1350',];





?>
<div class="ques_17" id="ques_17" <?php if(count($ques17) && $condition_ques2 == "No" && $condition_ques9 == "first_aprt" ){ }else{ echo'style="display:none"'; } ?>>
	  <div class="q20 chat-container" id="formQuestionEighteenDIV">
	  	<div class="chat-number">16</div>
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>לצורך חישוב זכאותך למענק מדינה בריבית נמוכה,
				נבקשך למספר פרטים:</p>
		  <span class="message-timing">18:20</span>
		</div>
	    <div class="message no-background d-f eligibility-details">
		  <form method="post" id="formQuestionEighteen">
		    <ul>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>1) מספר שנות נישואים בשנים שלמות (נישואים נוכחיים):</p>
				</div>
				<div class="eligibility-dropdown">
				  <div class="form-group">
						<select class="selectpicker current_marriage" name="current_marriage">
		                    <?php
		                        for($i=0; $i<=30; $i++){
		                            $var = (($first==$i))?'selected':'';
		                            echo '<option id="'.$aa[$i].'" value="'.$aa[$i].'/'.$i.'"'.' '.$var.'>'.$i.'</option>';
		                        }
		                    ?>
		                </select>
					</div>
				</div>
			  </li>
			<li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>2) מספר ילדים, רווקים עד גיל 21 כולל נשים בהריון (מעל חודש חמישי):</p>
				</div>
				<div class="eligibility-dropdown">
					<div class="form-group">
						<select class="selectpicker children" name="children">
			                <?php
			                    for($i=0; $i<=15; $i++){
			                        $var = (($second==$i))?'selected':'';
			                        echo '<option id="'.$bb[$i].'" value="'.$bb[$i].'/'.$i.'"'.' '.$var.'>'.$i.'</option>';
			                    }
			                ?>
			            </select>
					</div>
				</div>
			  </li>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>3) מספר אחים ואחיות של הבעל והאשה שהם אזרחי ישראל ותושבי הארץ:</p>
				</div>
				<div class="eligibility-dropdown" >
				  	<div class="form-group" >
						<select class="selectpicker siblings" name="siblings" >
		                    <?php
		                        for($i=0; $i<=20; $i++){
		                            $var = (($third==$i))?'selected':'';
		                            echo '<option id="'.$cc[$i].'" value="'.$cc[$i].'/'.$i.'"'.' '.$var.'>'.$i.'</option>';
		                        }
		                    ?>
		                </select>
					</div>
				</div>
			  </li>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>4) מספר חודשי שרות צבאי/לאומי בעל (עד 36 חודש):</p>
				</div>
				<div class="eligibility-dropdown" >
				  	<div class="form-group" >
						<select class="selectpicker national_service_time" name="national_service_time" >
		                    <?php
		                        for($i=0; $i<=36; $i++){
		                            $var = (($fourth==$i))?'selected':'';
		                            echo '<option id="'.$i.'" value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
		                        }
		                    ?>
		                </select>
					</div>
				</div>
			  </li>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>5) מספר חודשי שרות צבאי/לאומי אישה (עד 24 חודש):</p>
				</div>
				<div class="eligibility-dropdown">
				  <div class="form-group">
						<select class="selectpicker military_service_time_women"  name="military_service_time_women">
                            <?php
                                for($i=0; $i<=24; $i++){
                                    $var = (($fifth==$i))?'selected':'';
                                    echo '<option id="'.$i.'" value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                }

                            ?>
                        </select>


					</div>
				</div>
			  </li>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>* הערה - הסימולטור אינו לוקח בחשבון מענקים/הלוואות בפריפריה,
   					תוספות ישוביות מיוחדות, זכאות יוצאי אתיופיה וזכאות יחודית לנכים.</p>
				</div>
				<div class="eligibility-dropdown">
				  <!-- <p class="success-text">אתה זכאי להלוואות זכאות
					בריבית נמוכה עד לסכום: 89,000 ש”ח.</p> -->
				</div>
			  </li>
			</ul>
			<button type="submit" class="main-button">אישור</button>
			  {{ csrf_field() }}

	  			<div class="errMsg"></div>

	  			<div class="sixteen_error"></div>
		  </form>
		</div>
	  </div>

		<div class="width-full">
			<div class="message d-i-f f-d-c spinner spinner-ques-17" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
</div>

<script type="text/javascript">
	window.location.hash = '#formQuestionEighteenDIV';


	 $('body').find('.current_marriage, .children, .siblings, .national_service_time, .military_service_time_women').on('change',function(){

            finalcalcSixteen();

        });

        // $('body').find('.children').on('change',function(){
   
        //     finalcalcSixteen();

        // });

        // $('body').find('.siblings').on('change',function(){
      
        //     finalcalcSixteen();

        // });

        // $('body').find('.national_service_time').on('change',function(){

        //      finalcalcSixteen();


        // });

        // $('body').find('.military_service_time_women').on('change',function(){
 
        //      finalcalcSixteen();


        // });


	function finalcalcSixteen(){
			//alert('786 786');
 			var one = $('.current_marriage').children(":selected").attr("id");

           	var two = $('.children').children(":selected").attr("id");
            var three = $('.siblings').children(":selected").attr("id");
            var four = $('.national_service_time').children(":selected").attr("id");
            var five = $('.military_service_time_women').children(":selected").attr("id");

            var suntotalFourFive = parseInt(four) + parseInt(five);
            var total_points = parseInt(one) + parseInt(two) + parseInt(three);
            var elegibility_score = ""; 

              if(total_points >= 599 && total_points <= 999 ){
                elegibility_score = 54240;
              }else if(total_points >= 1000 && total_points <= 1399){
                elegibility_score = 62400;
              }else if(total_points >= 1400 && total_points <= 1499){
                elegibility_score = 74350;
              }else if(total_points >= 1500 && total_points <= 1599){
                elegibility_score = 85250;
              }else if(total_points >= 1600 && total_points <= 1699){
                elegibility_score = 96190;
              }else if(total_points >= 1700 && total_points <= 1799){
                elegibility_score = 107090;
              }else if(total_points >= 1800 && total_points <= 1899){
                elegibility_score = 117985;
              }else if(total_points >= 1900 && total_points <= 1999){
                elegibility_score = 128930;
              }else if(total_points >= 2000 && total_points <= 2099){
                elegibility_score = 139825;
              }else if(total_points >= 2100 && total_points <= 2199){
                elegibility_score = 150720;
              }else if(total_points >= 2200){
                  elegibility_score = 161665;
              }else{
                  elegibility_score = 0;
              }

            //alert(elegibility_score);
            var army_score = parseInt( elegibility_score) * parseInt(suntotalFourFive)/100;
            //alert(army_score);
            var final_score = parseInt(army_score) + parseInt(elegibility_score);
            //alert(final_score);




            if(final_score != 0){

            	$('.sixteen_error').html('<div class="elegibility-scorer"><p>הנך זכאי לריבית נמוכה במסלול זכאות עד לגובה '+addCommasDirect(final_score)+' שקלים.</p><p>האלגוריתם החכם שלנו ינסה לשלב הלוואה זאת </p><p>בתמהיל המשכנתא האישי שלך.</p></div>');
	        }else{
	        	$('.sixteen_error').html('<div class="elegibility-scorer"></div>');
	        }


        }
       finalcalcSixteen();




</script>


