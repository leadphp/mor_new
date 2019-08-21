
<?php 
$ques17 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','18')->get();
$ques2 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','2')->get();

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
}



if(count($ques2)){
$condition_ques2 = $ques2[0]->meta_value;	
}else{
$condition_ques2 = "Yes";	
}
?>
<div class="ques_17" id="ques_17" <?php if(count($ques17)){ }else{ echo'style="display:none"'; } ?>>
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
		      	<select class="selectpicker" name="current_marriage">
		      		<option value="30/0" <?php if(count($ques17)){ if($first == '0'){ echo 'selected="selected"'; } } ?> >0</option>
					<option value="250/1" <?php if(count($ques17)){ if($first == '1'){ echo 'selected="selected"'; } } ?> >1</option>
					<option value="300/2" <?php if(count($ques17)){ if($first == '2'){ echo 'selected="selected"'; } } ?> >2</option>
					<option value="350/3" <?php if(count($ques17)){ if($first == '3'){ echo 'selected="selected"'; } } ?> >3</option>
					<option value="400/4" <?php if(count($ques17)){ if($first == '4'){ echo 'selected="selected"'; } } ?> >4</option>
					<option value="450/5" <?php if(count($ques17)){ if($first == '5'){ echo 'selected="selected"'; } } ?> >5</option>
					<option value="500/6" <?php if(count($ques17)){ if($first == '6'){ echo 'selected="selected"'; } } ?> >6</option>
					<option value="550/7" <?php if(count($ques17)){ if($first == '7'){ echo 'selected="selected"'; } } ?> >7</option>
					<option value="600/8" <?php if(count($ques17)){ if($first == '8'){ echo 'selected="selected"'; } } ?> >8</option>
					<option value="650/9" <?php if(count($ques17)){ if($first == '9'){ echo 'selected="selected"'; } } ?> >9</option>
					<option value="700/10" <?php if(count($ques17)){ if($first == '10'){ echo 'selected="selected"'; } } ?> >10</option>
					<option value="750/11" <?php if(count($ques17)){ if($first == '11'){ echo 'selected="selected"'; } } ?> >11</option>
					<option value="800/12" <?php if(count($ques17)){ if($first == '12'){ echo 'selected="selected"'; } } ?> >12</option>
					<option value="850/13" <?php if(count($ques17)){ if($first == '13'){ echo 'selected="selected"'; } } ?> >13</option>
					<option value="900/14" <?php if(count($ques17)){ if($first == '14'){ echo 'selected="selected"'; } } ?> >14</option>
					<option value="950/15" <?php if(count($ques17)){ if($first == '15'){ echo 'selected="selected"'; } } ?> >15</option>
					<option value="1000/16" <?php if(count($ques17)){ if($first == '16'){ echo 'selected="selected"'; } } ?> >16</option>
					<option value="1050/17" <?php if(count($ques17)){ if($first == '17'){ echo 'selected="selected"'; } } ?> >17</option>
					<option value="1100/18" <?php if(count($ques17)){ if($first == '18'){ echo 'selected="selected"'; } } ?> >18</option>
					<option value="1150/19" <?php if(count($ques17)){ if($first == '19'){ echo 'selected="selected"'; } } ?> >19</option>
					<option value="1200/20" <?php if(count($ques17)){ if($first == '20'){ echo 'selected="selected"'; } } ?> >20</option>
					<option value="1250/21" <?php if(count($ques17)){ if($first == '21'){ echo 'selected="selected"'; } } ?> >21</option>
					<option value="1300/22" <?php if(count($ques17)){ if($first == '22'){ echo 'selected="selected"'; } } ?> >22</option>
					<option value="1350/23" <?php if(count($ques17)){ if($first == '23'){ echo 'selected="selected"'; } } ?> >23</option>
					<option value="1400/24" <?php if(count($ques17)){ if($first == '24'){ echo 'selected="selected"'; } } ?> >24</option>
					<option value="1450/25" <?php if(count($ques17)){ if($first == '25'){ echo 'selected="selected"'; } } ?> >25</option>
					<option value="1500/26" <?php if(count($ques17)){ if($first == '26'){ echo 'selected="selected"'; } } ?> >26</option>
					<option value="1550/27" <?php if(count($ques17)){ if($first == '27'){ echo 'selected="selected"'; } } ?> >27</option>
					<option value="1600/28" <?php if(count($ques17)){ if($first == '28'){ echo 'selected="selected"'; } } ?> >28</option>
					<option value="1650/29" <?php if(count($ques17)){ if($first == '29'){ echo 'selected="selected"'; } } ?> >29</option>
					<option value="1700/30" <?php if(count($ques17)){ if($first == '30'){ echo 'selected="selected"'; } } ?> >30</option>
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
		      	<select class="selectpicker" name="children">
		      		<option value="0/0" <?php if(count($ques17)){ if($second == '0'){ echo 'selected="selected"'; } } ?> >0</option>
					<option value="350/1" <?php if(count($ques17)){ if($second == '1'){ echo 'selected="selected"'; } } ?> >1</option>
					<option value="500/2" <?php if(count($ques17)){ if($second == '2'){ echo 'selected="selected"'; } } ?> >2</option>
					<option value="650/3" <?php if(count($ques17)){ if($second == '3'){ echo 'selected="selected"'; } } ?> >3</option>
					<option value="800/4" <?php if(count($ques17)){ if($second == '4'){ echo 'selected="selected"'; } } ?> >4</option>
					<option value="900/5" <?php if(count($ques17)){ if($second == '5'){ echo 'selected="selected"'; } } ?> >5</option>
					<option value="1000/6" <?php if(count($ques17)){ if($second == '6'){ echo 'selected="selected"'; } } ?> >6</option>
					<option value="1100/7" <?php if(count($ques17)){ if($second == '7'){ echo 'selected="selected"'; } } ?> >7</option>
					<option value="1200/8" <?php if(count($ques17)){ if($second == '8'){ echo 'selected="selected"'; } } ?> >8</option>
					<option value="1300/9" <?php if(count($ques17)){ if($second == '9'){ echo 'selected="selected"'; } } ?> >9</option>
					<option value="1400/10" <?php if(count($ques17)){ if($second == '10'){ echo 'selected="selected"'; } } ?> >10</option>
					<option value="1500/11" <?php if(count($ques17)){ if($second == '11'){ echo 'selected="selected"'; } } ?> >11</option>
					<option value="1600/12" <?php if(count($ques17)){ if($second == '12'){ echo 'selected="selected"'; } } ?> >12</option>
					<option value="1700/13" <?php if(count($ques17)){ if($second == '13'){ echo 'selected="selected"'; } } ?> >13</option>
					<option value="1800/14" <?php if(count($ques17)){ if($second == '14'){ echo 'selected="selected"'; } } ?> >14</option>
					<option value="1900/15" <?php if(count($ques17)){ if($second == '15'){ echo 'selected="selected"'; } } ?> >15</option>
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
		      	<select class="selectpicker" name="siblings">
		      		<option value="0/0" <?php if(count($ques17)){ if($third == '0'){ echo 'selected="selected"'; } } ?> >0</option>
					<option value="50/1" <?php if(count($ques17)){ if($third == '1'){ echo 'selected="selected"'; } } ?> >1</option>
					<option value="100/2" <?php if(count($ques17)){ if($third == '2'){ echo 'selected="selected"'; } } ?> >2</option>
					<option value="150/3" <?php if(count($ques17)){ if($third == '3'){ echo 'selected="selected"'; } } ?> >3</option>
					<option value="400/4" <?php if(count($ques17)){ if($third == '4'){ echo 'selected="selected"'; } } ?> >4</option>
					<option value="600/5" <?php if(count($ques17)){ if($third == '5'){ echo 'selected="selected"'; } } ?> >5</option>
					<option value="650/6" <?php if(count($ques17)){ if($third == '6'){ echo 'selected="selected"'; } } ?> >6</option>
					<option value="700/7" <?php if(count($ques17)){ if($third == '7'){ echo 'selected="selected"'; } } ?> >7</option>
					<option value="750/8" <?php if(count($ques17)){ if($third == '8'){ echo 'selected="selected"'; } } ?> >8</option>
					<option value="800/9" <?php if(count($ques17)){ if($third == '9'){ echo 'selected="selected"'; } } ?> >9</option>
					<option value="850/10" <?php if(count($ques17)){ if($third == '10'){ echo 'selected="selected"'; } } ?> >10</option>
					<option value="900/11" <?php if(count($ques17)){ if($third == '11'){ echo 'selected="selected"'; } } ?> >11</option>
					<option value="950/12" <?php if(count($ques17)){ if($third == '12'){ echo 'selected="selected"'; } } ?> >12</option>
					<option value="1000/13" <?php if(count($ques17)){ if($third == '13'){ echo 'selected="selected"'; } } ?> >13</option>
					<option value="1050/14" <?php if(count($ques17)){ if($third == '14'){ echo 'selected="selected"'; } } ?> >14</option>
					<option value="1100/15" <?php if(count($ques17)){ if($third == '15'){ echo 'selected="selected"'; } } ?> >15</option>
					<option value="1150/16" <?php if(count($ques17)){ if($third == '16'){ echo 'selected="selected"'; } } ?> >16</option>
					<option value="1200/17" <?php if(count($ques17)){ if($third == '17'){ echo 'selected="selected"'; } } ?> >17</option>
					<option value="1250/18" <?php if(count($ques17)){ if($third == '18'){ echo 'selected="selected"'; } } ?> >18</option>
					<option value="1300/19" <?php if(count($ques17)){ if($third == '19'){ echo 'selected="selected"'; } } ?> >19</option>
					<option value="1350/20" <?php if(count($ques17)){ if($third == '20'){ echo 'selected="selected"'; } } ?> >20</option>
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
		      	<select class="selectpicker" name="national_service_time">
					
					<option value="1" <?php if(count($ques17)){ if($fourth == '1'){ echo 'selected="selected"'; } } ?> >1</option>
					<option value="2" <?php if(count($ques17)){ if($fourth == '2'){ echo 'selected="selected"'; } } ?> >2</option>
					<option value="3" <?php if(count($ques17)){ if($fourth == '3'){ echo 'selected="selected"'; } } ?> >3</option>
					<option value="4" <?php if(count($ques17)){ if($fourth == '4'){ echo 'selected="selected"'; } } ?> >4</option>
					<option value="5" <?php if(count($ques17)){ if($fourth == '5'){ echo 'selected="selected"'; } } ?> >5</option>
					<option value="6" <?php if(count($ques17)){ if($fourth == '6'){ echo 'selected="selected"'; } } ?> >6</option>
					<option value="7" <?php if(count($ques17)){ if($fourth == '7'){ echo 'selected="selected"'; } } ?> >7</option>
					<option value="8" <?php if(count($ques17)){ if($fourth == '8'){ echo 'selected="selected"'; } } ?> >8</option>
					<option value="9" <?php if(count($ques17)){ if($fourth == '9'){ echo 'selected="selected"'; } } ?> >9</option>
					<option value="10" <?php if(count($ques17)){ if($fourth == '10'){ echo 'selected="selected"'; } } ?> >10</option>
					<option value="11" <?php if(count($ques17)){ if($fourth == '11'){ echo 'selected="selected"'; } } ?> >11</option>
					<option value="12" <?php if(count($ques17)){ if($fourth == '12'){ echo 'selected="selected"'; } } ?> >12</option>
					<option value="13" <?php if(count($ques17)){ if($fourth == '13'){ echo 'selected="selected"'; } } ?> >13</option>
					<option value="14" <?php if(count($ques17)){ if($fourth == '14'){ echo 'selected="selected"'; } } ?> >14</option>
					<option value="15" <?php if(count($ques17)){ if($fourth == '15'){ echo 'selected="selected"'; } } ?> >15</option>
					<option value="16" <?php if(count($ques17)){ if($fourth == '16'){ echo 'selected="selected"'; } } ?> >16</option>
					<option value="17" <?php if(count($ques17)){ if($fourth == '17'){ echo 'selected="selected"'; } } ?> >17</option>
					<option value="18" <?php if(count($ques17)){ if($fourth == '18'){ echo 'selected="selected"'; } } ?> >18</option>
					<option value="19" <?php if(count($ques17)){ if($fourth == '19'){ echo 'selected="selected"'; } } ?> >19</option>
					<option value="20" <?php if(count($ques17)){ if($fourth == '20'){ echo 'selected="selected"'; } } ?> >20</option>
					<option value="21" <?php if(count($ques17)){ if($fourth == '21'){ echo 'selected="selected"'; } } ?> >21</option>
					<option value="22" <?php if(count($ques17)){ if($fourth == '22'){ echo 'selected="selected"'; } } ?> >22</option>
					<option value="23" <?php if(count($ques17)){ if($fourth == '23'){ echo 'selected="selected"'; } } ?> >23</option>
					<option value="24" <?php if(count($ques17)){ if($fourth == '24'){ echo 'selected="selected"'; } } ?> >24</option>
					<option value="25" <?php if(count($ques17)){ if($fourth == '25'){ echo 'selected="selected"'; } } ?> >25</option>
					<option value="26" <?php if(count($ques17)){ if($fourth == '26'){ echo 'selected="selected"'; } } ?> >26</option>
					<option value="27" <?php if(count($ques17)){ if($fourth == '27'){ echo 'selected="selected"'; } } ?> >27</option>
					<option value="28" <?php if(count($ques17)){ if($fourth == '28'){ echo 'selected="selected"'; } } ?> >28</option>
					<option value="29" <?php if(count($ques17)){ if($fourth == '29'){ echo 'selected="selected"'; } } ?> >29</option>
					<option value="30" <?php if(count($ques17)){ if($fourth == '30'){ echo 'selected="selected"'; } } ?> >30</option>
					<option value="31" <?php if(count($ques17)){ if($fourth == '31'){ echo 'selected="selected"'; } } ?> >31</option>
					<option value="32" <?php if(count($ques17)){ if($fourth == '32'){ echo 'selected="selected"'; } } ?> >32</option>
					<option value="33" <?php if(count($ques17)){ if($fourth == '33'){ echo 'selected="selected"'; } } ?> >33</option>
					<option value="34" <?php if(count($ques17)){ if($fourth == '34'){ echo 'selected="selected"'; } } ?> >34</option>
					<option value="35" <?php if(count($ques17)){ if($fourth == '35'){ echo 'selected="selected"'; } } ?> >35</option>
					<option value="36" <?php if(count($ques17)){ if($fourth == '36'){ echo 'selected="selected"'; } } ?> >36</option>
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
		      	<select class="selectpicker"  name="military_service_time_women">
					  
					<option value="1" <?php if(count($ques17)){ if($fifth == '1'){ echo 'selected="selected"'; } } ?> >1</option>
					<option value="2" <?php if(count($ques17)){ if($fifth == '2'){ echo 'selected="selected"'; } } ?> >2</option>
					<option value="3" <?php if(count($ques17)){ if($fifth == '3'){ echo 'selected="selected"'; } } ?> >3</option>
					<option value="4" <?php if(count($ques17)){ if($fifth == '4'){ echo 'selected="selected"'; } } ?> >4</option>
					<option value="5" <?php if(count($ques17)){ if($fifth == '5'){ echo 'selected="selected"'; } } ?> >5</option>
					<option value="6" <?php if(count($ques17)){ if($fifth == '6'){ echo 'selected="selected"'; } } ?> >6</option>
					<option value="7" <?php if(count($ques17)){ if($fifth == '7'){ echo 'selected="selected"'; } } ?> >7</option>
					<option value="8" <?php if(count($ques17)){ if($fifth == '8'){ echo 'selected="selected"'; } } ?> >8</option>
					<option value="9" <?php if(count($ques17)){ if($fifth == '9'){ echo 'selected="selected"'; } } ?> >9</option>
					<option value="10" <?php if(count($ques17)){ if($fifth == '10'){ echo 'selected="selected"'; } } ?> >10</option>
					<option value="11" <?php if(count($ques17)){ if($fifth == '11'){ echo 'selected="selected"'; } } ?> >11</option>
					<option value="12" <?php if(count($ques17)){ if($fifth == '12'){ echo 'selected="selected"'; } } ?> >12</option>
					<option value="13" <?php if(count($ques17)){ if($fifth == '13'){ echo 'selected="selected"'; } } ?> >13</option>
					<option value="14" <?php if(count($ques17)){ if($fifth == '14'){ echo 'selected="selected"'; } } ?> >14</option>
					<option value="15" <?php if(count($ques17)){ if($fifth == '15'){ echo 'selected="selected"'; } } ?> >15</option>
					<option value="16" <?php if(count($ques17)){ if($fifth == '16'){ echo 'selected="selected"'; } } ?> >16</option>
					<option value="17" <?php if(count($ques17)){ if($fifth == '17'){ echo 'selected="selected"'; } } ?> >17</option>
					<option value="18" <?php if(count($ques17)){ if($fifth == '18'){ echo 'selected="selected"'; } } ?> >18</option>
					<option value="19" <?php if(count($ques17)){ if($fifth == '19'){ echo 'selected="selected"'; } } ?> >19</option>
					<option value="20" <?php if(count($ques17)){ if($fifth == '20'){ echo 'selected="selected"'; } } ?> >20</option>
					<option value="21" <?php if(count($ques17)){ if($fifth == '21'){ echo 'selected="selected"'; } } ?> >21</option>
					<option value="22" <?php if(count($ques17)){ if($fifth == '22'){ echo 'selected="selected"'; } } ?> >22</option>
					<option value="23" <?php if(count($ques17)){ if($fifth == '23'){ echo 'selected="selected"'; } } ?> >23</option>
					<option value="24" <?php if(count($ques17)){ if($fifth == '24'){ echo 'selected="selected"'; } } ?> >24</option>
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

<script>
	window.location.hash = '#formQuestionEighteenDIV';
</script>
