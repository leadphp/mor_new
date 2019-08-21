<!DOCTYPE html>
<html lang="he">
<head>
  @include('layouts.head')
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<style>
	.hide, .q2,.q3,.q4,.q5,.q6,.q7,.q8,.q9,.q10,.q11,.q12,.q13,.q14,.q15,.q16,.q17,.q18,.q19,.q20,.q21,.sub_btn{display:none;}
</style>

<!-- advisor starts here -->

<div class="advisor">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-5">
	  <div class="advisor-container">
	    <div class="advisor-image">
		  <img src="images/advisor.png" alt=""/>
		</div>
		<div class="advisor-text">
		מתן יועץ המשכנתא
		</div>
	  </div>
	</div>
	<div class="col-sm-7">
	  <div class="advisor-header d-f a-i-c">
	    <a href="javascript:void(0);" class="logo-container">
		  <img src="images/logo.png" alt=""/>
		</a>
	    <div class="advisor-nav">
		  <ul>
		    <li><a href="javascript:void(0)">מי אנחנו? </a></li>
		    <li><a href="javascript:void(0)">איך זה עובד?</a></li>
		    <li><a href="javascript:void(0)">תיאום פגישה עם יועץ משכנתא</a></li>
		    <li><a href="javascript:void(0)">צור קשר</a></li>
		  </ul>
		</div>
	  </div>
	</div>
  </div>
</div>
</div>

<!-- advisor ends here -->

<!-- levels starts here -->

<!-- <div class="level">
  <div class="container-fluid">
    <div class="level-content d-f a-i-c j-c-c">
    <a href="javascript:void(0);" class="level-call a-i-c j-c-c">
	  <img src="images/phone-icon.png" alt=""/>
	</a>
	<ul class="d-f a-i-c">
	  <li class="d-f a-i-c j-c-c f-d-c">
	    <span>שלב 1</span>
		<span>נתוני מצב קיים</span>
	  </li>
	  <li class="d-f a-i-c j-c-c f-d-c">
	    <span>שלב 2</span>
		<span>הגדרת צרכים</span>
		<span>30%</span>
	  </li>
	  <li class="d-f a-i-c j-c-c f-d-c">
	    <span>שלב 3</span>
		<span>נתונים פיננסים</span>
	  </li>
	  <li class="d-f a-i-c j-c-c f-d-c">
	    <span>שלב 4</span>
		<span>הפקת הדוח</span>
	  </li>
	</ul>
	</div>
  </div>
</div> -->

<!-- levels ends here -->

<!-- chat starts here -->


<form id="idForm" action="/thanku" method="POST">
{{ csrf_field() }}

<section class="chat">
  <div class="container">
    <div class="chat-wrap">
	  <div class="q1 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt=""/>
		  </div>
<!-- 	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>שלום לך, 
אני מתן יועץ המשכנתא הממוחשב והחכם שלך.</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>תכף אשאל אותך מספר שאלות שיוכלו לעזור לאלגוריתם שמפעיל אותי ליצר 
עבורך את תמהיל המשכנתא האידיאלי.
</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>אחרי שהתוכנית תהיה מלאה, אני אדאג לקשר אותך לבנק, לסניף ולנציג 
שיספקו לך את תוכנית המשכנתא אותה נבנה יחד עכשיו.
</p>
		  <span class="message-timing">18:21</span>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>אז שנתחיל?</p>
		  <span class="message-timing">18:22</span>
		</div>
		<a href="javascript:void(0);" class="main-button">כן בטח, בוא נתחיל</a>
	  </div>
	  <div class="chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt=""/>
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>מעולה! 
כעת אני אשאל אותך מספר שאלות כדי להבין מאיפה אנחנו מתחילים, כל תשובה שלך נשמרת כחלק מדוח המשכנתא – תוכל לעקוב אחרי מילוי השאלות שלך בצד שמאל של המסך</p>
		  <span class="message-timing">18:25</span>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>תכף אשאל אותך מספר שאלות שיוכלו לעזור לאלגוריתם שמפעיל אותי ליצר 
עבורך את תמהיל המשכנתא האידיאלי.
</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>חשוב לי לציין, 
מידע זה הינו דיסקרטי ולא יועבר לשום גורם נוסף לפני שתאשר לי לעשות כך.
</p>
		  <span class="message-timing">18:25</span>
		</div> -->
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>איפה את/ה גר היום?</p>
		  <span class="message-timing">18:26</span>
		</div>

		<!-- ***************************************************************
		|
		| Question 1 - Where do you live?
		|
		| ***************************************************************-->
		<div class="chat-buttons ques1">
		  <a href="javascript:void(0);" data-att="I own an apartment without a mortgage" class="main-button grey">דירה בבעלותי ללא משכנתא</a>
		  <a href="javascript:void(0);" data-att="Apartment I own with a mortgage" class="main-button grey">דירה בבעלותי עם משכנתא</a>
		  <a href="javascript:void(0);" data-att="For Rent" class="rent main-button">בשכר דירה</a>
		  <a href="javascript:void(0);" data-att="In housing that I do not pay for" class="main-button grey">בדיור שאיני משלם עליו</a>

		  <input type="hidden" class="ap_ques1" value="">
		</div>
	  </div>
	  <br/><br/><br/><br/><br/><br/>


	  	<!-- ***************************************************************
		|
		| Question 1.5 - How much you pay for your rental apartment monthly?
		|
		| ****************************************************************** -->
	  <span class="hide">
	  <div class="chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt=""/>
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>אני מבין שאתה גר בדירה שכורה.
מה גובה השכירות אותה אתה משלם?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="message no-background d-i-f f-d-c">
		  <form class="form-inline">
		    <div class="form-group">
		      <input type="text" id="rent" class="form-control" name="rent" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<button type="submit" class="ok_btn main-button">אישור</button>
		  </form>
		</div>
	  </div>
	</span>


	<!-- ********************************************************************
	|
	| Question 2 - Do you have apartments you own?
	|
	| *********************************************************************** -->
	  <div class="q3 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt=""/>
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>תודה.
האם יש לך דירות בבעולתך?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="chat-buttons ques2">
		  <a href="javascript:void(0);" data-att="Yes I have" class="main-button">כן, יש לי</a>
		  <a href="javascript:void(0);" data-att="No I dont have" class="main-button">לא, אין לי</a>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>אנא פרט את כל הפרטים הידועים לך לגבי 
הדירות שבבעולתך.
אנחנו צריכים לדעת האם הדירה עם משכנתא כמובן.</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="message no-background d-i-f f-d-c">
		  <form class="form-inline multiple-dropdown ">
		    <div class="form-group">
			<label>1. סוג הנכס:</label>
		      	<select class="selectpicker">
					  <option>דירה ללא משכנתא</option>
					  <option>דירה ללא משכנתא</option>
					  <option>דירה ללא משכנתא</option>
					  <option>דירה ללא משכנתא</option>
				</select>

			</div>
			<div>
			<div class="form-group">
			  <label for="property-value">ערך הנכס:</label>
		      <input type="text" id="property-value" class="form-control" name="property-value[]" placeholder="2,000,000" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="monthly-income">הכנסה חודשית 
משכר דירה:</label>
		      <input type="text" id="monthly-income" class="form-control" name="monthly-income[]" placeholder="2,000,000" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			</div>
			<a href="javascript:void(0);" class="delete-button"><i class="fa fa-minus"></i>מחק</a>
		  </form>
		</div>
		<div class="message no-background d-i-f f-d-c">

		  <div class="property-details">
		  	<div class="addsection">
		  <form class="form-inline multiple-dropdown ">
		    <div class="form-group">
			<label>2. סוג הנכס:</label>
		        <select class="selectpicker apt_op">
					  <option data-att="Apartment with a mortgage1">דירה עם משכנתא</option>
					  <option data-att="Apartment with a mortgage2">דירה עם משכנתא</option>
					  <option data-att="Apartment with a mortgage3">דירה עם משכנתא</option>
					  <option data-att="Apartment with a mortgage4">דירה עם משכנתא</option>
				</select>

			</div>
			<div>
			<div class="form-group">
			  <label for="property-value-2">ערך הנכס:</label>
		      <input type="text" id="property-value-2" class="form-control" name="property-value-2[]" placeholder="1,000,000" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="mortgage-balance">יתרת המשכנתא:</label>
		      <input type="text" id="mortgage-balance" class="form-control" name="mortgage-balance[]" placeholder="1000,000" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="monthly-repayments">יתרת המשכנתא:</label>
		      <input type="text" id="monthly-repayments" class="form-control" name="monthly-repayments[]" placeholder="2,000" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="monthly-income-rent">יתרת המשכנתא:</label>
		      <input type="text" id="monthly-income-rent" class="form-control" name="monthly-income-rent[]" placeholder="3,000" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="monthly-income-rent">באיזה בנק המשכנתא:</label>

		        <select class="selectpicker">
					  <option data-att="Mizrahi-Tefahot Bank">בנק מזרחי-טפחות</option>
					  <option data-att="Discount Bank">בנק דיסקונט</option>
					  <option data-att="Union Bank">בנק איגוד</option>
					  <option data-att="Bank Hapoalim">בנק הפועלים</option>
					  <option data-att="National Bank">בנק לאומי</option>
					  <option data-att="Bank Ozar hahial">בנק אוצר החייל</option>
					  <option data-att="Bank of Jerusalem">בנק ירושלים</option>
					  <option data-att="The international Bank">הבנק הבינלאומי</option>
					  <option data-att="Another bank">בנק אחר</option>
				</select>

			</div>
			</div>
		  </form>
		</div>
		  <div class="chat-buttons">
		    <a href="javascript:void(0);" class="addsection_btn delete-button add"><i class="fa fa-plus"></i>הוסף דירה נוספת בבעלותך  </a>
		  </div>
		  <a href="javascript:void(0);" class="add_apt_btn main-button">אישור</a>
		  </div>

		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 3 - You are Male or Female?
	|
	| *********************************************************************** -->
	  <div class="q4 chat-container d-f f-d-c a-i-f-s">
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
		  <a href="javascript:void(0);" data-att="Male" class="main-button"><img src="images/male-icon.png" alt="">בלשון
זכר</a>
		  <a href="javascript:void(0);" data-att="Female" class="main-button"><img src="images/female-icon-white.png" alt="">בלשון
נקבה</a>
		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 4 - What is your shared net income in your family?
	|
	| *********************************************************************** -->
	  <div class="q5 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>בכמה מסתכמות ההכנסות החודשיות שלכם בבית?
ההכנסה כוללת נטו למשפחה, בעל ואישה ביחד.</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="message no-background d-i-f f-d-c">
		  <form class="form-inline">
		    <div class="form-group">
		      <input type="text" id="net-income" class="form-control" name="net-income" value="">
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
			</div>
			<button type="submit" class="net_in_btn main-button">אישור</button>
		  </form>
		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 5 - Do you define your economic status stable or you can save 
	|              each month some fee?
	|
	| *********************************************************************** -->
	  <div class="q6 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>האם הייתם מגדירים את המצב הכלכלי שלכם כיציב או שאתם 
מצליחים לחסוך בכל חודש סכום העולה על אלף שקלים?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="message no-background d-i-f f-d-c">
		  <form class="form-inline average-savings">
		    <a href="javascript:void(0);" data-att="Our economic situation is stable" class="stable main-button">המצב הכלכלי שלנו יציב</a>
			<span>או</span>
		    <div class="form-group">
		      <input type="text" id="average-savings" class="form-control" data-att="Our economic situation is not stable" name="average-savings" value="" placeholder="ציין סכום חסכון חודשי ממוצע העולה על אלף שקל"/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
			</div>
			<button type="submit" class="not_stable main-button">אישור</button>
		  </form>
		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 6 - What is your bank name?
	|
	| *********************************************************************** -->
	  <div class="q7 chat-container d-f f-d-c a-i-f-s">
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
			  <a href="javascript:void(0);" data-att="East" class="main-button">מזרחי</a>
			  <a href="javascript:void(0);" data-att="Discount" class="main-button">דיסקונט</a>
			  <a href="javascript:void(0);" data-att="Association" class="main-button">איגוד</a>
			  <a href="javascript:void(0);" data-att="Workers" class="main-button">פועלים</a>
			  <a href="javascript:void(0);" data-att="National" class="main-button">לאומי</a>
			  <a href="javascript:void(0);" data-att="Treasure" class="main-button">אוצר החייל</a>
			  <a href="javascript:void(0);" data-att="Jeruselam" class="main-button">ירושלים</a>
			  <a href="javascript:void(0);" data-att="International" class="main-button">הבינלאומי</a>
			  <a href="javascript:void(0);" data-att="Other" class="main-button">אחר</a>
		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 7 - if you will have CONSTANT future loans you can take in 
	|			   other bank, for new clients | only, will you move your 
	|              full account to the recommended bank we suggest?
	|
	| *********************************************************************** -->
	  <div class="q8 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>במידה וישנן הטבות הצטרפות בבנקים אחרים, האם תיהיה
מוכן לקחת משכנתא בבנק אחר?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="chat-buttons ques7">
		  <a href="javascript:void(0);" data-att="Yes, if this is a significant benefit" class="main-button">כן, אם זו הטבה משמעותית</a>
		  <a href="javascript:void(0);" data-att="No, I stay anyway in my bank" class="main-button">לא, אני נשאר בכל מקרה בבנק שלי</a>
		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 7.1 - What is the oldest person age that will take this mortgage?
	|
	| *********************************************************************** -->
	  <div class="q9 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>מה הגיל של הלווה המבוגר ביותר שיקח את המשכנתא?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="message no-background d-i-f f-d-c">
		  <form class="form-inline ques8">
		    <div class="form-group">
		      <input type="number" id="browser-age" class="form-control" name="browser-age" value="" placeholder="18-76" min="18" max="76"/>
			</div>
			<button type="submit" class="age_btn main-button">אישור</button>
		  </form>
		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 8 - What is the purpse you are taking the mortgage?
	|
	| *********************************************************************** -->
	  <div class="q10 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>ספר לי בבקשה לשם מה אתה מבקש את המשכנתא?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="chat-buttons ques9">
		  <a href="javascript:void(0);" data-att="Buying a property from a contractor" class="main-button">רכישת נכס מקבלן</a>
		  <a href="javascript:void(0);" data-att="Purchase of second hand property" class="main-button">רכישת נכס יד שניה</a>
		  <a href="javascript:void(0);" data-att="Independent construction" class="main-button">בנייה עצמאית</a>
		  <a href="javascript:void(0);" data-att="Plan occupant price" class="main-button">תכנית מחיר למשתכן</a>
		  <a href="javascript:void(0);" data-att="A loan for any purpose" class="main-button">הלוואה לכל מטרה</a>
		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 9 - What is your status when taking mortgage?
	|
	| *********************************************************************** -->
	  <div class="q11 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>תודה לך, ספר לי בבקשה מה הסטטוס שלך מבחינת לקיחת משכנתא?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="chat-buttons ques10">
		  <a href="javascript:void(0);" data-att="Investor" class="main-button">משקיע</a>
		  <a href="javascript:void(0);" data-att="Improves housing" class="main-button">משפר דיור</a>
		  <a href="javascript:void(0);" data-att="First apartment" class="main-button">דירה ראשונה</a>
		</div>
	  </div>


	<!-- ********************************************************************
	|
	| Question 10 - In how much months you are going to enter your apartment?
	|
	| *********************************************************************** -->	  
	  <div class="q12 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>אם כך, בעוד כמה חודשים תיכנס לדירה?</p>
		  <span class="message-timing">18:26</span>
		</div>
		<form class="form-inline range-form">
		    <a href="javascript:void(0);" class="main-button">כניסה באופן מיידי</a>
			<label>כניסה בעוד מספר חודשים(3-36):</label>
			<div class="form-group range-group">
			  <span id="sliderRTL" class="slider"></span>
			  <span class="sliderValue">0</span>
			  <span class="slider-icon d-f j-c-c a-i-c">
			    <img src="images/range-home.png" alt=""/>
			  </span>
			</div>
			<button type="submit" class="apt_month main-button">אישור</button>
		</form>
	  </div>



	  <div class="q13 double-chat-container d-f j-c-s-b">
	    <div class="chat-container d-f f-d-c a-i-f-s">
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
	  <div class="chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>מה עלות הנכס , גובה המשכנתא ושווי השוק של 
הנכס לצורך הרכישה ?</p>
		  <span class="message-timing">18:26</span>
		</div>
	  </div>
	  </div>







	  <div class="q14 chat-container">
	    <div class="message no-background d-i-f">
		  <form class="form-inline multiple-dropdown chat-equity-cost d-f">
		    <div>
			<div class="form-group">
			  <label for="incoming-cost">עלות הנכנס:</label>
		      <input type="text" id="incoming-cost" class="form-control" name="incoming-cost" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="d-f">
			<div class="form-group">
			  <label for="equity-cost">גובה ההון העצמי שלך:</label>
		      <input type="text" id="equity-cost" class="form-control" name="equity-cost" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<button type="submit" class="acquisition main-button">אישור</button>
			</div>
			<br />
			<p>חשוב שתשים לב שההון העצמי שציינת הוא עבור רכישת הנכס בלבד!
הסכום לא יכול לכלול הוצאות נילוות כמו ריהוט,שיפוצים ואגרותת נלוות.</p>
<p class="alert-text">
ההון העצמי שלך מהווה X% מעלות הנכס ! 
לא תוכל לקבל משכנתא אם ההון העצמי לא מהווה לפחות 25% מעלות הנכס.</p>
			</div>
			</form>
			<form class="form-inline multiple-dropdown chat-equity-cost d-f">
		    <div>
			<div class="d-i-f f-d-c">
			<div class="form-group">
			  <label for="incoming-cost-1">עלות הנכנס:</label>
		      <input type="text" id="incoming-cost-1" class="form-control" name="incoming-cost-1" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="required-height">גובה משכתנא נדרש:</label>
		      <input type="text" id="required-height" class="form-control" name="required-height" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			</div>
			<div class="d-f">
			<div class="form-group">
			  <label for="property-market-value">שווי שוק של הנכס:</label>
		      <input type="text" id="property-market-value" class="form-control" name="property-market-value" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<button type="submit" class="prop_mark main-button">אישור</button>
			</div>
			<br />
			<p>חשוב שתשים לב שההון העצמי שציינת הוא עבור רכישת הנכס בלבד!
הסכום לא יכול לכלול הוצאות נילוות כמו ריהוט,שיפוצים ואגרותת נלוות.</p>
<p class="alert-text">ההון העצמי שלך מהווה X% משווי שוק של הנכס ! 
לא תוכל לקבל משכנתא אם ההון העצמי לא מהווה לפחות 25% מעלות הנכס.</p>
			</div>
			</form>
		</div>
	  </div>
	  
	  
	  <div class="q15 chat-container">
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
		  <form class="form-inline multiple-dropdown chat-equity-cost d-f">
		    <div>
			<div class="form-group">
			  <label for="incoming-cost-2">עלות הנכנס:</label>
		      <input type="text" id="incoming-cost-2" class="form-control" name="incoming-cost-2" value="">
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
			</div>
			<div class="d-f">
			<div class="form-group">
			  <label for="equity-height">גובה ההון העצמי שלך:</label>
		      <input type="text" id="equity-height" class="form-control" name="equity-height" value="">
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
			</div>
			<button type="submit" class="purp_buy main-button">אישור</button>
			</div>
			<br>
<p class="alert-text">
גובה המשכנתא הנדרש חורג מ- 50% שניתן לקחת אך אל דאגה יש לנו פתרון
בסיום התהליך נקיים פגישה אשר תאפשר לך לקחת את המשכנתא באופן שביקשת.</p>
			</div>
			</form>
		</div>
	  </div>


	<br/><br/>
	<button type="submit" class="sub_btn main-button" value="submit">submit</button>
	</form>
	<br/><br/><br/><br/><br/><br/><br/><br/>  


	  <div class="q16 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>אם כך, גובה המשכתא שאותו אתה מבקש מהבנק הוא:
650,000 ש”ח.</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>מה גובה ההחזר החודשי המבוקש?</p>
		  <span class="message-timing">18:20</span>
		</div>
		<form class="form-inline range-form">
			<div class="form-group range-group monthly-refund">
			  <span id="monthlyRefund" class="slider"></span>
			  <span class="sliderValue">0</span>
			  <span class="slider-icon d-f j-c-c a-i-c">
			    <img src="images/range-refund.png" alt=""/>
			  </span>
			</div>
			<div class="form-group">
			  <input type="number" id="monthly-refund-input" class="form-control" name="monthly-refund-input" value="" placeholder="0"/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
			</div>
		</form>
		<br />
		<p class="alert-text alert-monthly-refund">אנא הפחת את גובה המשכנתא.
נראה שההחזר החודשי אותו אתה מבקש הוא יותר מ-39% 
מסך ההכנסות המדווחות שלך, ולכן הבנק לא יאשר את המשכנתא!</p>
<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>בחירת תקופה של המשכנתא משפיעה על גובה ההחזר החודשי.
ככל שהתקופה ארוכה יותר, ההחזר החודשי שיתקבל במשכנתא נמוך יותר.</p>
		  <span class="message-timing">18:20</span>
		</div>
		<form class="form-inline range-form">
			<div class="form-group range-group lower-mortgage">
			  <span id="lowerMortgage" class="slider"></span>
			  <span class="sliderValue">0</span>
			  <span class="slider-icon d-f j-c-c a-i-c">
			    <img src="images/range-period.png" alt=""/>
			  </span>
			</div>
			<div class="form-group">
			  <input type="text" id="lower-mortgage-input" class="form-control" name="lower-mortgage-input" value="" placeholder="15 שנים"/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon">
			</div>
			<button type="submit" class="main-button">אישור</button>
		</form>
		<br />
		<p class="success-text">שים לב - נתון התקופה מוערך ואינו סופי. 
הנתון ישתנה בהתאם לסוג המשכנתא וגובה הריביות אותם נבחר בהמשך.</p>
		<div class="imp-info">
		  <h4>חשוב לדעת</h4>
		  <div class="imp-info-text">
		  <span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span>
		    <p>גיל הלווה המבוגר ביותר שמילאת בהרשמה לא 
מאפשר לך לקחת את המשכנתא למעלה מ X שנים. 
כדי לקחת את המשכנתא ליותר שנים עליך לצרף 
ערב נוסף למשכנתא, מתחת לגיל  Y.

האם יש לך ערב נוסף מתאים שיוכל לקחת איתך 
את המשכנתא ?</p>
		  </div>
		</div>
		<div class="chat-buttons">
		  <a href="javascript:void(0);" class="main-button">כן</a>
		  <a href="javascript:void(0);" class="main-button grey">לא</a>
		</div>
	  </div>




	  
	  <div class="q17 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>אחלה. אנחנו ממשיכים!השאלות הקרובות שלי הן עבור איסוף נתונים פיננסים. 
איתם אוכל לייעץ לך בבחירת המשכנתא בהמשך.</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>האם אתה מצפה לקבל סכומי כסף משמעותיים בעתיד
איתם תוכל לפרוע חלק או את כל המשכנתא?</p>
<p>לדוגמא, חסכון או קרנות שאתה יכול לפתוח, ירושה, 
השקעות ועוד...</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="chat-buttons">
		  <a href="javascript:void(0);" class="main-button">כן, אני מצפה לקבל סכום כסף</a>
		  <a href="javascript:void(0);" class="main-button">לצערי אין לי למה לצפות</a>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>יופי! כמה אתה משער שתקבל?
גם בערך זה בסדר</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="message no-background d-i-f f-d-c">
		  <form class="form-inline multiple-dropdown ">
		    <div>
		    <div class="form-group">
			  <label for="investment-amount">1. מקבל סכום השקעה</label>
		      <input type="text" id="investment-amount" class="form-control" name="investment-amount" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="investment-amount-1">2. מקבל סכום השקעה</label>
		      <input type="text" id="investment-amount-1" class="form-control" name="investment-amount-1" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			</div>
			<div>
			<div class="form-group">
			<label>ניתן לפרוע בעוד:</label>
		      	<select class="selectpicker">
					  <option>םינש 1-20</option>
					  <option>םינש 1-20</option>
					  <option>םינש 1-20</option>
					  <option>םינש 1-20</option>
				</select>

			</div>
			<div class="form-group">
			  <label for="monthly-income">ניתן לפרוע בעוד:</label>
		      	<select class="selectpicker">
					  <option>םינש 1-20</option>
					  <option>םינש 1-20</option>
					  <option>םינש 1-20</option>
					  <option>םינש 1-20</option>
				</select>
			</div>
			</div>
			<div>
			  <a href="javascript:void(0);" class="delete-button"><i class="fa fa-minus"></i>מחק</a>
			  <a href="javascript:void(0);" class="delete-button"><i class="fa fa-minus"></i>מחק</a>
			</div>
		  </form>
		  <div class="chat-buttons">
		    <a href="javascript:void(0);" class="delete-button add"><i class="fa fa-plus"></i>הוסף</a>
		  </div>
		    <a href="javascript:void(0);" class="main-button" style="margin-right: 0;">אישור</a>
		</div>
	  </div>





	  <div class="q18 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>אודה לך אם תוכל לפרט לגבי הלואות קיימות שאתה עדיין משלם,
כדי שנוכל לתת לך תחשיב משכנתא אופטימלי.
אנו מתחשבים בכל הנתונים שאתה ממלא.</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="chat-buttons">
		  <a href="javascript:void(0);" class="main-button">כן ,יש לי הלוואות</a>
		  <a href="javascript:void(0);" class="main-button">אין לי הלוואות</a>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>מידע זה חשוב להצעה,
אנא השתדל לפרט את ההלוואות הקימות.</p>
		  <span class="message-timing">18:26</span>
		</div>
		<div class="message no-background d-i-f f-d-c">
		  <form class="form-inline multiple-dropdown ">
		    <div>
		    <div class="form-group">
			  <label for="loan-balance">1. יתרת הלוואה</label>
		      <input type="text" id="loan-balance" class="form-control" name="loan-balance" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="loan-balance-1">2. יתרת הלוואה</label>
		      <input type="text" id="loan-balance-1" class="form-control" name="loan-balance-1" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			</div>
			<div>
			<div class="form-group">
			<label>סיום ההלוואה בעוד:</label>
		      	<select class="selectpicker">
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
				</select>

			</div>
			<div class="form-group">
			<label>סיום ההלוואה בעוד:</label>
		      	<select class="selectpicker">
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
				</select>

			</div>
			</div>
			<div>
			<div class="form-group">
			<label>גובה הריבית:</label>
		      	<select class="selectpicker">
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
				</select>

			</div>
			<div class="form-group">
			<label>גובה הריבית:</label>
		      	<select class="selectpicker">
					  <option>0.1-30</option>
					  <option>0.1-30</option>
					  <option>0.1-30</option>
					  <option>0.1-30</option>
				</select>

			</div>
			</div>
			<div style="margin: 0">
			  <a href="javascript:void(0);" class="delete-button"><i class="fa fa-minus"></i>מחק</a>
			  <a href="javascript:void(0);" class="delete-button"><i class="fa fa-minus"></i>מחק</a>
			</div>
		  </form>
		  <div class="chat-buttons">
		    <a href="javascript:void(0);" class="delete-button add"><i class="fa fa-plus"></i>הוסף</a>
		  </div>
		    <a href="javascript:void(0);" class="main-button" style="margin-right: 0;">אישור</a>
		</div>
	  </div>


 	<!-- *************************************************************************
  	|
  	| Question 15 - Do you have future loans you can take from your place of work 
  	|               or any other type of loan available to you? 
  	|
  	| *************************************************************************** -->
	  <div class="q19 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>האם יש לך אפשרות לקחת הלוואות נוספות לצורך רכישת הנכס?
כגון: הלוואות חוץ בנקאיות, הלוואות חשכ”ל , משפחה או הלוואה 
מיוחדת בהתאם למקום העבודה?</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="chat-buttons">
		  <a href="javascript:void(0);" class="main-button">כן</a>
		  <a href="javascript:void(0);" class="main-button">לא ידוע לי על הלוואות נוספות</a>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>פרט את כל ההלוואות העתידיות
אשר באפשרותך לקחת</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="message no-background d-i-f f-d-c">
		  <form class="form-inline multiple-dropdown ">
		    <div>
		    <div class="form-group">
			  <label for="loan-balance-2">1. יתרת הלוואה</label>
		      <input type="text" id="loan-balance-2" class="form-control" name="loan-balance-2" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			<div class="form-group">
			  <label for="loan-balance-3">2. יתרת הלוואה</label>
		      <input type="text" id="loan-balance-3" class="form-control" name="loan-balance-3" value=""/>
			  <img src="images/placeholder-icon.png" alt="" class="placeholder-icon"/>
			</div>
			</div>
			<div>
			<div class="form-group">
			<label>סיום ההלוואה בעוד:</label>
		      	<select class="selectpicker">
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
				</select>

			</div>
			<div class="form-group">
			<label>סיום ההלוואה בעוד:</label>
		      	<select class="selectpicker">
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
				</select>

			</div>
			</div>
			<div>
			<div class="form-group">
			<label>גובה הריבית:</label>
		      	<select class="selectpicker">
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
					  <option>1-30 שנים</option>
				</select>

			</div>
			<div class="form-group">
			<label>גובה הריבית:</label>
		      	<select class="selectpicker">
					  <option>0.1-30</option>
					  <option>0.1-30</option>
					  <option>0.1-30</option>
					  <option>0.1-30</option>
				</select>

			</div>
			</div>
			<div style="margin: 0">
			  <a href="javascript:void(0);" class="delete-button"><i class="fa fa-minus"></i>מחק</a>
			  <a href="javascript:void(0);" class="delete-button"><i class="fa fa-minus"></i>מחק</a>
			</div>
		  </form>
		  <div class="chat-buttons">
		    <a href="javascript:void(0);" class="delete-button add"><i class="fa fa-plus"></i>הוסף</a>
		  </div>
		    <a href="javascript:void(0);" class="main-button" style="margin-right: 0;">אישור</a>
		</div>
	  </div>


	  <!-- ************************************************
	  |
	  | Question 16 - Eligibility 
	  |
	  | *************************************************** -->
	  <div class="q20 chat-container">
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
		  <form>
		    <ul>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>מספר שנות נישואים בשנים שלמות (נישואים נוכחיים).</p>
				</div>
				<div class="eligibility-dropdown">
				  <div class="form-group">
		      	<select class="selectpicker">
					  <option>0-30</option>
					  <option>0-30</option>
					  <option>0-30</option>
					  <option>0-30</option>
				</select>

			</div>
				</div>
			  </li>
			<li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>מספר ילדים, רווקים עד גיל 21 כולל נשים בהריון (מעל חודש חמישי).</p>
				</div>
				<div class="eligibility-dropdown">
				  <div class="form-group">
		      	<select class="selectpicker">
					  <option>0-15</option>
					  <option>0-15</option>
					  <option>0-15</option>
					  <option>0-15</option>
				</select>

			</div>
				</div>
			  </li>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>מספר אחים ואחיות של הבעל והאשה שהם אזרחי ישראל ותושבי הארץ.</p>
				</div>
				<div class="eligibility-dropdown">
				  <div class="form-group">
		      	<select class="selectpicker">
					  <option>0-20</option>
					  <option>0-20</option>
					  <option>0-20</option>
					  <option>0-20</option>
				</select>

			</div>
				</div>
			  </li>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>מספר חודשי שרות צבאי/לאומי בעל (עד 36 חודש).</p>
				</div>
				<div class="eligibility-dropdown">
				  <div class="form-group">
		      	<select class="selectpicker">
					  <option>0-36</option>
					  <option>0-36</option>
					  <option>0-36</option>
					  <option>0-36</option>
				</select>

			</div>
				</div>
			  </li>
			  <li class="d-f a-i-c">
			    <div class="eligibility-text">
				  <p>מספר חודשי שרות צבאי/לאומי אישה (עד 24 חודש).</p>
				</div>
				<div class="eligibility-dropdown">
				  <div class="form-group">
		      	<select class="selectpicker">
					  <option>0-24</option>
					  <option>0-24</option>
					  <option>0-24</option>
					  <option>0-24</option>
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
				  <p class="success-text">אתה זכאי להלוואות זכאות
בריבית נמוכה עד לסכום: 89,000 ש”ח.</p>
				</div>
			  </li>
			</ul>
			<button type="submit" class="main-button">אישור</button>
		  </form>
		</div>
	  </div>


	  <!-- **********************************************
	  |
	  | Submission
	  |
	  | ************************************************* -->
	  <div class="q21 chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt="">
		  </div>
	    <div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>תודה ליאור!
יש לי מספיק מידע איתו אפשר לייצר תמהיל משכנתא ולייעץ עבורך על המשכנתא הטובה ביותר</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
		  <p>בשלב הזה אני יכול לגלות לך שהדוח חוסך לך מעל ל 40 אלף ש”ח
מעלות המשכנתא הממוצעת לאנשים עם נתונים דומים לשלך.</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="chat-buttons">
		  <a href="javascript:void(0);" class="main-button"><img src="images/button-check.png" alt=""/>אני רוצה להמשיך ליצירת דוח המשכנתא וקישור לבנק</a>
		  <!-- <div class="main-button pdf_download">{{ Html::link('download/example_report.pdf', 'אפשר לראות דוח דוגמא?') }}</div> -->
		  <a target="_blank" href="{{ $exreport->pdf }}" class="main-button">אפשר לראות דוח דוגמא?</a>
		</div>
	  </div>
	</div>
  </div>
</section>

<!-- <button type="submit" value="submit">submit</button>
</form>  -->

<!-- chat ends here -->

<!-- footer starts here -->
<footer>

  @include('layouts.footer')

</footer>
<!-- footer ends here -->

  @include('layouts.footer-scripts')

</body>
</html>

<script>	

$(function() {
    var attr; 

    /* ----------------------------------
    | Question 1
    ----------------------------------- */
    $(".chat-buttons.ques1 a").click(function(){ 
        event.preventDefault();
        attr = $(this).attr('data-att');  //alert(attr);

        if(attr == "For Rent"){ 
	  		$("span").removeClass("hide");
	  	}

	  	if(attr != "For Rent"){
	  		$("span").addClass("hide");
	  		$("#rent").append("0");
	  		$("div").removeClass("q3");
	  		$( ".ok_btn" ).trigger( "click" );

	  	}
    });


    /* ----------------------------------
    | Question 1.5 - Rent
    ----------------------------------- */
	$(".ok_btn").click(function(){
	    	event.preventDefault();
			rent = $("#rent").val(); //alert(rent);

			if(rent == ''){
    		}else{
    			$("div").removeClass("q3");
    		}
			
	});


    /* ----------------------------------
    | Question 2 - Apartments
    ----------------------------------- */
    $(".chat-buttons.ques2 a").click(function(){
    	event.preventDefault();
		apt = $(this).attr('data-att'); //alert(apt);
    });

    $(".add_apt_btn").click(function(){
    	event.preventDefault();
    	$("div").removeClass("q4");
    })

    var count = 0;
    $(".addsection_btn").click(function(){
		addsec = $(".addsection").html(); //alert(addsec);
		count++;
    	if(count<=2){
			$(".addsection").append(addsec);
		}

	});


    /* ----------------------------------
    | Lists of Apartments
    ----------------------------------- */
    $(".add_apt_btn").click(function(){ 	
		 var pro_val2 = [];
		 var mort_bal = [];
		 var mon_repay = [];
		 var mon_inc_rent = [];
		 var apts = [];
		$('input[name="property-value-2[]"]').map(function () {
		    pro_val2.push(this.value); 
		}).get();

		$('input[name="mortgage-balance[]"]').map(function () {
		    mort_bal.push(this.value); 
		}).get();

		$('input[name="monthly-repayments[]"]').map(function () {
		    mon_repay.push(this.value); 
		}).get();

		$('input[name="monthly-income-rent[]"]').map(function () {
		    mon_inc_rent.push(this.value); 
		}).get();

		apt_list = [pro_val2, mort_bal, mon_repay, mon_inc_rent];
	});


    /* ----------------------------------
    | Question 3  - Gender
    ----------------------------------- */
    $(".chat-buttons.ques4 a").click(function(){
    	event.preventDefault();
		gender = $(this).attr('data-att'); //alert(gender);
		$("div").removeClass("q5");
    });


    /* ----------------------------------
    | Question 4 - Net Income
    ----------------------------------- */
    $(".net_in_btn").click(function(){
    	event.preventDefault();
    	net_income = $("#net-income").val(); //alert(net_income);

    	if(net_income == ''){
    	}else{
    		$("div").removeClass("q6");
    	}
    });


    /* ----------------------------------
    | Question 5 - Economic Status
    ----------------------------------- */
    $(".stable").click(function(){
    	event.preventDefault();
    	//stable = $(this).attr('data-att'); alert(stable);

    });

    $(".not_stable").click(function(){
    	event.preventDefault();
    	not_stable_fee = $("#average-savings").val(); //alert(not_stable_fee);
    	not_stable = $("#average-savings").attr('data-att'); //alert(not_stable);

    	if(not_stable_fee == ''){
    	}else{
    		$("div").removeClass("q7");
    	}
    });

    
    /* ----------------------------------
    | Question 6 - Economic Status
    ----------------------------------- */
   	$(".chat-buttons.ques6 a").click(function(){
   		event.preventDefault();
   		bank = $(this).attr('data-att'); //alert(bank);
   		$("div").removeClass("q8");
	});


	/* ----------------------------------
    | Question 7 - Same Bank or Different
    ----------------------------------- */
   	$(".chat-buttons.ques7 a").click(function(){
   		event.preventDefault();
   		select_bank = $(this).attr('data-att'); //alert(select_bank);
   		$("div").removeClass("q9");
	});


	/* ----------------------------------
    | Question 8 - Age
    ----------------------------------- */
   	$(".age_btn").click(function(){
   		event.preventDefault();
   		age = $("#browser-age").val(); //alert(age);

   		if(age == ''){
   		}else{
   			$("div").removeClass("q10");
   		}
	});


	/* ----------------------------------
    | Question 9 - Age
    ----------------------------------- */

   	$(".chat-buttons.ques9 a").click(function(){
   		event.preventDefault();
   		mortgage = $(this).attr('data-att'); //alert(mortgage);

   		if(mortgage == "Plan occupant price"){ 
	  		$("div").removeClass("q12");  //alert("skip 9");
	  	}else{
	  		$("div").removeClass("q11");  //alert("show 9");
	  	}
   		
	});

 //   	$(".chat-buttons.ques9 a").click(function(){
 //   		event.preventDefault();
 //   		mortgage = $(this).attr('data-att'); alert(mortgage);

 //   		if(mortgage == "Plan occupant price"){ 
	//   		$("div").removeClass("q12"); 
	//   		$("div").removeClass("q13"); 
	//   		alert("11 B");

	//   	}else if(mortgage == "Buying a property from a contractor" || mortgage == "Purchase of second hand property" || mortgage == "Independent construction"){
	//   		$("div").removeClass("q11");  
	//   		alert("11 A");
	  		
	//   	}else{
	//   		$("div").removeClass("q11");
	//   		$("div").removeClass("q15");
	//   		alert("11 C");
	//   	}
   		
	// });

   	/* ----------------------------------
    | Question 10 
    ----------------------------------- */
	$(".chat-buttons.ques10 a").click(function(){
		event.preventDefault();
   		status = $(this).attr('data-att'); //alert(status);
   		$("div").removeClass("q12");
	});

	$(".apt_month").click(function(){
		event.preventDefault();
		$("div").removeClass("q13");
		$("div").removeClass("q14");
	});

	$(".acquisition").click(function(){
		event.preventDefault();
		pro_inc_cost = $("#incoming-cost").val(); //alert(pro_inc_cost);
		height_of_eq = $("#equity-cost").val();// alert(height_of_eq);
		$("div").removeClass("q13");
	});

	$(".prop_mark").click(function(){
		event.preventDefault();
		inc_cost1 = $("#incoming-cost-1").val(); //alert(inc_cost1);
		req_height = $("#required-height").val();	//alert(req_height);
		prop_mark_val = $("#property-market-value").val();	//alert(prop_mark_val);
		$("div").removeClass("q14");
	})


   	/* ----------------------------------
    | Question 11 
    ----------------------------------- */
	$(".purp_buy").click(function(){
		event.preventDefault();
		pro_inc_cost2 = $("#incoming-cost-2").val(); //alert(pro_inc_cost2);
		height_of_eq2 = $("#equity-height").val(); //alert(height_of_eq2);
		$("div").removeClass("q15");
	});


   	$("#idForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

   	ques1 = attr; 
	ques11 = rent; 
	ques2 = apt; 
	ques3 = gender; 
	ques4 = net_income; 
	//ques_st5 = stable; 
	ques_ntst_fee5 = not_stable_fee; 
	ques_ntst5 = not_stable; 
	ques6 = bank;
	ques7 = select_bank;
	ques8 = age;
	ques9 = mortgage;
	ques10 = status;

    form = $(this); 
    var csrf_token = $('meta[name="csrf-token"]').attr('content'); 
    url = form.attr('action'); 
    var frm = $('#idForm');

    frm.submit(function (e) {

    e.preventDefault();

    $.ajax({
    	   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
           type: "POST",
           url: url,
           data: { 'live':ques1,'rent':ques11, 'apt':ques2, 'detail_of_apartments':apt_list, 'gender':ques3, 'net_income':ques4, 'not_stable_fee':ques_ntst_fee5, 'not_stable':ques_ntst5, 'bank':ques6, 'select_bank':ques7, 'age':ques8, 'mortgage':ques9, 'status':ques10, 'pro_inc_cost':pro_inc_cost, 'height_of_eq':height_of_eq, 'incoming_cost1':inc_cost1, 'required_height':req_height , 'Prop_market_value':prop_mark_val , 'pro_inc_cost2':pro_inc_cost2, 'height_of_eq2':height_of_eq2, '_token':$('meta[name="csrf-token"]').attr('content') }, 

           success: function(data)
           {
           		if(data)
           		{
                	//alert(data);
           		}else{
           			alert('error');
           		}

           }
         });
});

});

});

$(document).ready(function(){
  $('.main-button.pdf_download a').attr('target', '_blank');
});
</script>
