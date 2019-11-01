@include('layouts.paymentheader')
<!-- chat starts here -->

<section class="chat stepCenter pageMargin stepThree stepOne">
  <div class="container">
    <div class="chat-wrap">
	  <div class="chat-container d-f f-d-c a-i-f-s">
	    <div class="message-pic">
		    <img src="images/advisor.png" alt=""/>
		  </div>
	    <div class="message steps-message d-i-f f-d-c">
		  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
		  <p>לאחר התחשבות בכל הנתונים האישיים שלך ושקלול של כל הנתונים, נמצא עבורך הבנק שיתן את
ההצעה המשתלמת ביותר. כל שנותר לעשות הוא לבחור סניף ולמלא מספר פרטים, ואנחנו נקשר אותך<br>
ישירות לפקיד המתאים ונשלח אליו את כל הפרטים הנדרשים לצורך קבלת הצעת המשכנתא.</p>
		  <span class="message-timing">18:20</span>
		</div>
		<div class="message steps-message d-i-f f-d-c">
		  <div class="mortgage proposal">
		    <div class="mortgage-proposal-heading">
			  <span>שם הבנק הנבחר שיתן לך את המשכנתא האופטימלית:</span>
			  <span class="bank-name">מזרחי טפחות</span>
			</div>
			<div class="mortgage-proposal-content">
			  <ul>
			    <li class="d-f a-i-c">
			  <div class="mortgage-proposal-content-right">
			  באיזה עיר תרצה לחתום על המשכנתא:
			  </div>
			  <div class="mortgage-proposal-content-left d-f f-d-c a-i-c">
			  עיר
			    <select class="">
					  <option selected>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					</select>
			  </div>
			  </li>
			  <li class="d-f a-i-c">
			  <div class="mortgage-proposal-content-right">
			  באיזה סניף אתה מעוניין לחתום:
			  </div>
			  <div class="mortgage-proposal-content-left d-f f-d-c a-i-c">
			  שם סניף 
			    <select class="">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				</select>
			  </div>
			  </li>
			  <li class="d-f a-i-c">
			  <div class="mortgage-proposal-content-right">
			  שם פקיד מטפל:
			  </div>
			  <div class="mortgage-proposal-content-left d-f f-d-c a-i-c">
			  שם פקיד מלא 
			    <select class="">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				</select>
			  </div>
			  </li>
			</ul>
			</div>
		  </div>
		</div>
		 <div class="last-div-b">
		<div class="chat-buttons">
		  <a href="javascript:void(0);" class="main-button">חזרה לדף הקודם</a>
		  <a href="javascript:void(0);" class="main-button">שמור והמשך </a>
		</div>
		</div>
	  </div>
	</div>
  </div>
</section>

<!-- chat ends here -->

<!-- footer starts here -->

@include('layouts.paymentfooter')