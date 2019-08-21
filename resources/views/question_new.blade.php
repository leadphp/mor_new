<!DOCTYPE html>
<html lang="he">
<head>
  @include('layouts.head')
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="sticky-header-full <?php if(isset($class_value)){ echo $class_value; } ?>">

<style>

</style>

<div class="alert-message-flash">
	@if(Session::has('message'))
		<p class="alert-message">{{ Session::get('message') }}</p>
	@endif
</div>

<div class="advisor reg-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 text-center">
				<div class="advisor-container">
					<div class="advisor-image">
						<img src="images/advisor.png" alt="">
					</div>
					<div class="advisor-text"> מתן יועץ המשכנתא </div>
				</div>
				<a href="javascript:void(0);" class="level-call a-i-c j-c-c left-icon-h phone_icon">
					<img src="images/phone-icon-blue.png" alt="">
				</a>
			</div>
			<div class="col-sm-9">
				<div class="advisor-header d-f a-i-c">
					<a href="javascript:void(0);" class="logo-container ">
						<img src="images/logo.png" alt="">
					</a>
					<div class="advisor-nav">
						<div class="toggle_bar"><i class="fa fa-bars"></i></div>
						<ul class="nav-main" style="display: none;">
							<li><a href="about-us.html">מי אנחנו? </a></li>
							<li><a href="javascript:void(0)">איך זה עובד?</a></li>
							<li class="contact2"><a href="javascript:void(0)">תיאום פגישה עם יועץ משכנתא</a></li>
							<li class="contact3"><a href="javascript:void(0)">צור קשר</a></li>


							



						</ul>
					</div>
					<ul class="nav_reg">
						<li><a href="about-us.html">הפקת הדוח</a></li>
						<li><a href="javascript:void(0)">שלב 3<br>נתונים פיננסים</a></li>
						<li><a href="javascript:void(0)">שלב 2<br>הגדרת צרכים</a></li>
						<li><a href="javascript:void(0)">שלב 1<br>נתוני מצב קיים</a></li>


					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- popup -->
<!-- <div id="contact">Contact</div> -->

<div id="contactForm" class="contactForm">
	<?php
		$datetime = new DateTime('tomorrow');
		$date = $datetime->format('Y-m-d');
	?>
	<h1>יצירת קשר עם משכנתא דיגיטלית</h1>
	<small>אשמח שתחזרו אלי טלפונית לקבלת סיוע, מענה על מספר שאלות והדרכה.</small>
	<form action="{{route('user.contact.email')}}" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<input placeholder="כותרת" type="text" name="title" required />
		<!-- <input placeholder="מהות הפניה" type="text" name="subject" required /> -->
		<input type="date" id="date" name="date" value="<?php echo $date; ?>" min="<?php echo $date; ?>" required >
       <select name="time">
	       	<option value="8:00">8:00</option>
	       	<option value="9:00">9:00</option>
	       	<option value="10:00">10:00</option>
	       	<option value="11:00">11:00</option>
	       	<option value="12:00">12:00</option>
	       	<option value="13:00">13:00</option>
	       	<option value="14:00">14:00</option>
	       	<option value="15:00">15:00</option>
	       	<option value="16:00">16:00</option>
	       	<option value="17:00">17:00</option>
	       	<option value="18:00">18:00</option>
	       	<option value="19:00">19:00</option>
       </select>
		<textarea placeholder="הודעה" name="comments">אשמח אם תחזרו אלי מחר בשעה המצוינת לעיל</textarea>
		<input class="formBtn" type="submit" />
	</form>
</div>

<div id="contactForm1" class="contactForm">
	<?php
		$datetime = new DateTime('tomorrow');
		$date = $datetime->format('Y-m-d');
	?>
	<h1>יתיאום פגישה עם יועץ משכנתא</h1>
	<small>אשמח שתחזרו אלי טלפונית לקבלת סיוע, מענה על מספר שאלות והדרכה.</small>
	<form action="{{route('user.contact.email')}}" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<input placeholder="כותרת" type="text" name="title" required />
		<!-- <input placeholder="מהות הפניה" type="text" name="subject" required /> -->
		<input type="date" id="date" name="date" value="<?php echo $date; ?>" min="<?php echo $date; ?>" required >
       	<select name="time">
	       	<option value="8:00">8:00</option>
	       	<option value="9:00">9:00</option>
	       	<option value="10:00">10:00</option>
	       	<option value="11:00">11:00</option>
	       	<option value="12:00">12:00</option>
	       	<option value="13:00">13:00</option>
	       	<option value="14:00">14:00</option>
	       	<option value="15:00">15:00</option>
	       	<option value="16:00">16:00</option>
	       	<option value="17:00">17:00</option>
	       	<option value="18:00">18:00</option>
	       	<option value="19:00">19:00</option>
       	</select>
		<textarea placeholder="הודעה" name="comments">אשמח אם תחזרו אלי מחר בשעה המצוינת לעיל</textarea>
		<input class="formBtn" type="submit" />
	</form>
</div>

<div id="contactForm2" class="contactForm">
	<?php
		$datetime = new DateTime('tomorrow');
		$date = $datetime->format('Y-m-d');
	?>
	<h1>צור קשר</h1>
	<small>אשמח שתחזרו אלי טלפונית לקבלת סיוע, מענה על מספר שאלות והדרכה.</small>
	<form action="{{route('user.contact.email')}}" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<input placeholder="כותרת" type="text" name="title" required />
		<!-- <input placeholder="מהות הפניה" type="text" name="subject" required /> -->
		<input type="date" id="date" name="date" value="<?php echo $date; ?>" min="<?php echo $date; ?>" required >
       <select name="time">
	       	<option value="8:00">8:00</option>
	       	<option value="9:00">9:00</option>
	       	<option value="10:00">10:00</option>
	       	<option value="11:00">11:00</option>
	       	<option value="12:00">12:00</option>
	       	<option value="13:00">13:00</option>
	       	<option value="14:00">14:00</option>
	       	<option value="15:00">15:00</option>
	       	<option value="16:00">16:00</option>
	       	<option value="17:00">17:00</option>
	       	<option value="18:00">18:00</option>
	       	<option value="19:00">19:00</option>
       </select>
		<textarea placeholder="הודעה" name="comments">אשמח אם תחזרו אלי מחר בשעה המצוינת לעיל</textarea>
		<input class="formBtn" type="submit" />
	</form>
</div>










<!-- advisor ends here -->
<!-- MAIN SECTION STARTED -->
<section class="chat register-page">
	<div class="container">
	    <div class="chat-wrap" id="loadQuestions">
		  <?= $questions ?>
		</div>
		<!-- <div class="width-full">
				<div class="message d-i-f f-d-c spinner" style="display:none;">
					<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div> -->

	</div>
</section>
<!-- chat ends here -->




<!-- footer starts here -->
<footer>

  @include('layouts.footer')

</footer>
<!-- footer ends here -->
  @include('layouts.footer-scripts')

<script type="text/javascript">

	$(".toggle_bar").click(function(){
	    $(".nav-main").toggle();
  	});

	$(function(){
		/*For Startup Question*/
		$("body").on('submit','form#formQuestionGetstarted',function(){
			formQuestionOne('form#formQuestionGetstarted','<?= url("/questionGetstarted") ?>','#loadQuestionOne','spinner');
			return false;
		});
		/*-----------------------------------------------------------------------------*/


		/*For Question number-1*/

		function QuestionOne() {
			var val = $('input[name=que1]:checked').val();
			if($('input[name=que1]').is(':checked')) { 
				if(val == 'rental_aprt'){
					$("body").find('.questionOneOption').show();
				}else {
					$("body").find('.questionOneOption').hide();
					formQuestionOne('form#formQuestionOne','<?= url("/question1") ?>','#loadQuestionTwo','spinner-ques-1');
				}
			}
		}

		$("body").on('click','input[name=que1]',function(){

			$('#loadQuestions').addClass('off_zero');

			var addclass = 'bubble_first';
			var removeclass = 'bubble_first';
				QuestionOne();
			header_bubble_class_changer(addclass,removeclass);
		});

		$("body").on('submit','form#formQuestionOne',function(){

			$('#loadQuestions').addClass('off_zero');
			var addclass = 'bubble_first';
			var removeclass = 'bubble_first';
			formQuestionOne('form#formQuestionOne','<?= url("/question1") ?>','#loadQuestionTwo','spinner-ques-1');
			header_bubble_class_changer(addclass,removeclass);
			return false;
		});

		$('input[name=que1]').click(function(){
			$(this).removeAttr('checked','checked');
		});


		/*-----------------------------------------------------------------------------*/


       /*For Question no.2*/

       function Questiontwo() {
          var val = $('input[name=que2]:checked').val();
           if($('input[name=que2]').is(':checked')) { 
              if(val == 'Yes'){
              	$("body").find('.questiontwoOption').show();
              }else {
              	$("body").find('.questiontwoOption').hide();
              	formQuestionOne('form#formQuestionTwo','<?= url("/question2") ?>','#loadQuestionThree','spinner-ques-2');
              }
      		}
       	}

       	$("body").on('click','input[name=que2]',function(){
			Questiontwo();
         	var addclass = 'bubble_second';
			var removeclass = 'bubble_first';
			header_bubble_class_changer(addclass,removeclass);   
       	});

		$("body").on('submit','form#formQuestionTwo',function(){
			formQuestionOne('form#formQuestionTwo','<?= url("/question2") ?>','#loadQuestionThree','spinner-ques-2');
			var addclass = 'bubble_second';
			var removeclass = 'bubble_first';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

		/*-----------------------------------------------------------------------------*/


		/*For Question Number 3*/

		$("body").on('click','input[name=que3]',function(){
			
			formQuestionOne('form#formQuestionThree','<?= url("/question3") ?>','#loadQuestionFour','spinner-ques-3');
            var addclass = 'bubble_third';
			var removeclass = 'bubble_second';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 4*/   
        
        $("body").on('submit','form#formQuestionFour',function(){    
      
			formQuestionOne('form#formQuestionFour','<?= url("/question4") ?>','#loadQuestionFive','spinner-ques-4');
            var addclass = 'bubble_fourth';
			var removeclass = 'bubble_third';
			header_bubble_class_changer(addclass,removeclass);
            return false;
        });
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 5*/   
        
        $("body").on('submit','form#formQuestionFive',function(){
			formQuestionOne('form#formQuestionFive','<?= url("/question5") ?>','#loadQuestionSix','spinner-ques-5');
            var addclass = 'bubble_fifth';
			var removeclass = 'bubble_fourth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
        });
        $("body").on('click','.economic_situation',function(){
			formQuestionOne('form#formQuestionFivePointOne','<?= url("/question5") ?>','#loadQuestionSix','spinner-ques-5');
	        var addclass = 'bubble_fifth';
			var removeclass = 'bubble_fourth';
			header_bubble_class_changer(addclass,removeclass);
	        return false;
       	});
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 6*/   
        
        
        $("body").on('click','input[name=bank_name]',function(){
	        formQuestionOne('form#formQuestionSix','<?= url("/question6") ?>','#loadQuestionSeven','spinner-ques-6');
			var addclass = 'bubble_sixth';
			var removeclass = 'bubble_fifth';
			header_bubble_class_changer(addclass,removeclass);
	        return false;
       });
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 7*/   
        
           function Questionseven() {
              var val = $('input[name=other_banks_benifits]:checked').val();
               if($('input[name=other_banks_benifits]').is(':checked')) {
	              	$("body").find('.questionsevenOption').show(); 
          		}
           	}

           	$("body").on('click','input[name=other_banks_benifits]',function(){
				Questionseven();
				var addclass = 'bubble_seventh';
				var removeclass = 'bubble_sixth';
				header_bubble_class_changer(addclass,removeclass);   
           	});
        
        	$("body").on('submit','form#formQuestionSeven',function(){
				formQuestionOne('form#formQuestionSeven','<?= url("/question7") ?>','#loadQuestionEight','spinner-ques-7');
			
				var addclass = 'bubble_seventh_one';
				var removeclass = 'bubble_seventh';
				header_bubble_class_changer(addclass,removeclass);   
                return false;
           	});
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 8*/   
          
		$("body").on('click','input[name=why_mortgage]',function(){
			formQuestionOne('form#formQuestionEight','<?= url("/question8") ?>','#loadQuestionNine','spinner-ques-8');
			var addclass = 'bubble_eighth';
			var removeclass = 'bubble_seventh_one';
			header_bubble_class_changer(addclass,removeclass);   
            return false;
       	});
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 9*/   
          
		$("body").on('click','input[name=status_of_mortgage]',function(){
			formQuestionOne('form#formQuestionNine','<?= url("/question9") ?>','#loadQuestionTen','spinner-ques-9');
			var addclass = 'bubble_nineth';
			var removeclass = 'bubble_eighth';
			header_bubble_class_changer(addclass,removeclass);
	        return false;
       	});	
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 10*/   
        
		 $("body").on('submit','form#formQuestionTen',function(){
                
            $('.spinner-ques-10').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-10').hide();
			  	formQuestionOne('form#formQuestionTen','<?= url("/question10") ?>');
			}, 1000);

			var addclass = 'bubble_tenth';
			var removeclass = 'bubble_nineth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});


		 $("body").on('submit','form#formQuestionTen_option1',function(){
                
            $('.spinner-ques-10').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-10').hide();
			  	formQuestionOne('form#formQuestionTen_option1','<?= url("/question10") ?>');
			}, 1000);

			var addclass = 'bubble_tenth';
			var removeclass = 'bubble_nineth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});
		 
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 11-1*/   
         
		$("body").on('submit','form#formQuestionEleven_One',function(){
                
            $('.spinner-ques-11-a').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-a').hide();
			  	formQuestionOne('form#formQuestionEleven_One','<?= url("/question11_1") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_tenth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

		$("body").on('click','.yes_clicked_eleven',function(){
         
            $('.spinner-ques-11-a').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-a').hide();
			    formQuestionOne('form#formQuestionEleven_One','<?= url("/question11_1_2") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_tenth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
        });

		$("body").on('click','.no_clicked_eleven',function(){
         
            $('.spinner-ques-11-a').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-a').hide();
			    formQuestionOne('form#formQuestionEleven_One','<?= url("/question11_1_3") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_tenth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 11-2*/   
        
		$("body").on('submit','form#formQuestionEleven_Two',function(){
               
             $('.spinner-ques-11-b').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-b').hide();
			  formQuestionOne('form#formQuestionEleven_Two','<?= url("/question11_2") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_tenth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

		$("body").on('click','.yes_clicked_eleven_two',function(){
         
            $('.spinner-ques-11-b').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-b').hide();
			    formQuestionOne('form#formQuestionEleven_Two','<?= url("/question11_2_2") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_tenth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

		$("body").on('click','.no_clicked_eleven_two',function(){
         
            $('.spinner-ques-11-b').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-b').hide();
			    formQuestionOne('form#formQuestionEleven_Two','<?= url("/question11_2_3") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_tenth';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 11-3*/   
           
	 	$("body").on('submit','form#formQuestionThirteen',function(){
            
            $('.spinner-ques-11-c').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-c').hide();
			 	formQuestionOne('form#formQuestionThirteen','<?= url("/question13") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_direct_eleven';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

		$("body").on('click','.yes_clicked_eleven_three',function(){
         
            $('.spinner-ques-11-c').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-c').hide();
			    formQuestionOne('form#formQuestionThirteen','<?= url("/question13_2") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_direct_eleven';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

		$("body").on('click','.no_clicked_eleven_three',function(){
         
            $('.spinner-ques-11-c').show();
			setTimeout(function(){ 
		 	$('.spinner-ques-11-c').hide();
			    formQuestionOne('form#formQuestionThirteen','<?= url("/question13_3") ?>');
			}, 1000);

			var addclass = 'bubble_eleventh';
			var removeclass = 'bubble_direct_eleven';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 12*/   
        
	 	$("body").on('submit','form#formQuestionfourteen',function(){
            $('.spinner').show();
			setTimeout(function(){ 
		 	$('.spinner').hide();
			    formQuestionOne('form#formQuestionfourteen','<?= url("/question14") ?>');
			}, 1000);

			var addclass = 'bubble_twelveth';
			var removeclass = 'bubble_eleventh';
			header_bubble_class_changer(addclass,removeclass);
            return false;
       	});

       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 13*/   
        
		function Questionfiftn() {
			var val = $('input[name=ques14]:checked').val();
			if($('input[name=ques14]').is(':checked')) { 
				if(val == 'Yes'){
					$("body").find('.questionfourteenOption').show();
				}else {
					$("body").find('.questionfourteenOption').hide();
					formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>');
				}
			}
		}

		$("body").on('click','input[name=ques14]',function(){
			$('.spinner').show();
			setTimeout(function(){ 
				$('.spinner').hide();
				Questionfiftn();
			}, 1000);

			var addclass = 'bubble_thirteen';
			var removeclass = 'bubble_twelveth';
			header_bubble_class_changer(addclass,removeclass);
		});


		$("body").on('submit','form#formQuestionfifteen',function(){
			$('.spinner').show();
			setTimeout(function(){ 
				$('.spinner').hide();
				formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>');
			}, 1000);

			var addclass = 'bubble_thirteen';
			var removeclass = 'bubble_twelveth';
			header_bubble_class_changer(addclass,removeclass);
			return false;
		});

       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 14*/   
        
		function Questionsixten() {
			var val = $('input[name=other_loan]:checked').val();
			if($('input[name=other_loan]').is(':checked')) { 
				if(val == 'Yes_I_have_loan'){
					$("body").find('.hide_14').show();
				}else {
					$("body").find('.hide_14').hide();
					formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>');
				}
			}
		}

		$("body").on('click','input[name=other_loan]',function(){
			$('.spinner').show();
			setTimeout(function(){ 
				$('.spinner').hide();
				Questionsixten();
			}, 1000);

			var addclass = 'bubble_fourteen';
			var removeclass = 'bubble_thirteen';
			header_bubble_class_changer(addclass,removeclass);
		});

		$("body").on('submit','form#formQuestionsixteen',function(){
			$('.spinner').show();
			setTimeout(function(){ 
				$('.spinner').hide();
				formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>');
			}, 1000);

			var addclass = 'bubble_fourteen';
			var removeclass = 'bubble_thirteen';
			header_bubble_class_changer(addclass,removeclass);
			return false;
		});

       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 15*/   
        
		function Questionseventn() {
			var val = $('input[name=additional_loans]:checked').val();
			if($('input[name=additional_loans]').is(':checked')) { 
				if(val == 'Yes'){
					$("body").find('.hide_16').show();
				}else {
					$("body").find('.hide_16').hide();
					formQuestionOne('form#formQuestionseventeen','<?= url("/question17") ?>');
				}
			}
		}

		$("body").on('click','input[name=additional_loans]',function(){
			$('.spinner').show();
			setTimeout(function(){ 
				$('.spinner').hide();
				Questionseventn();
			}, 1000);

			var addclass = 'bubble_fifteen';
			var removeclass = 'bubble_fourteen';
			header_bubble_class_changer(addclass,removeclass);
		});


		$("body").on('submit','form#formQuestionseventeen',function(){
			$('.spinner').show();
			setTimeout(function(){ 
				$('.spinner').hide();
				formQuestionOne('form#formQuestionseventeen','<?= url("/question17") ?>');
			}, 1000);

			var addclass = 'bubble_fifteen bubble_third_filled bubble_fourth_filled';
			var removeclass = 'bubble_fourteen';
			header_bubble_class_changer(addclass,removeclass);
			return false;
		});
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number 16*/   
          
		$("body").on('submit','form#formQuestionEighteen',function(){
			$('.spinner').show();
			setTimeout(function(){ 
				$('.spinner').hide();
				formQuestionOne('form#formQuestionEighteen','<?= url("/question18") ?>');
			}, 1000);

			var addclass = 'bubble_sixteen bubble_third_filled bubble_fourth_filled';
			var removeclass = 'bubble_fifteen';
			header_bubble_class_changer(addclass,removeclass);
			return false;
		});
       	/*-----------------------------------------------------------------------------*/


        /*For Question Number final*/   
        
		$("body").on('click','.final_submit_registration',function(){
            $('.spinner').show();
			setTimeout(function(){ 
		 	$('.spinner').hide();
			    window.location.href = "/final_result";
			}, 1000);
            return false;
       	});
		/*-----------------------------------------------------------------------------*/
		/*__________________________________________________________________________
		|
		|  submit form Question One
		|___________________________________________________________________________
		*/
		function formQuestionOne(formID,url,LoadDiv='#loadQuestions',spinner='spinner') {
		    var formData = $( formID ).serialize();
			 	$.ajax({
		           type: "POST",
		           url: url,
		           data: formData, 
		           success: function(data)
		            {
		           		if(data.status == 1){

							$('.'+spinner).show();
							setTimeout(function(){ 
								$('.'+spinner).hide();



									$(LoadDiv).html(data.htmls);

									heigh = $(LoadDiv).height();


									var iScroll = $(window).scrollTop();
							        iScroll = iScroll + heigh;

							        $('html, body').animate({
							            scrollTop: iScroll
							        }, 9000);

							}, 4000);

		           		}else if(data.status == 0){
		                   	$(formID).find('.errMsg').html(errors(data.errors));
		           		}
		          	}
		        });
		  	return false;
		}
		function errors(errors) {

			text ='<ol>';
			$.each(errors,function(k,v){
		       text +='<li>'+v+'</li>';
			});
			text +='</ol>';
			return text;
		}
		/*____________________________________________________________________________
		|
		|  submit form Question One
		|_____________________________________________________________________________
		*/

		/*------------------------------------------------------------------------------
		|
		|  Function for header ADD CLASS and REMOVE CLASS FOR  Header bubbles 
		|------------------------------------------------------------------------------*/
		function header_bubble_class_changer(addclass, removeclass) {

			$('body').removeClass(removeclass);
			$('body').addClass(addclass);
			return false;
		}
		/*------------------------------------------------------------------------------
		|																		:::::::		
		|  Function for header ADD CLASS and REMOVE CLASS FOR  Header bubbles  ::::::::
		|------------------------------------------------------------------------------*/
	});




/*POP UP FORMS FOR CALL AND MENU*/
$(function() {
  
  // contact form animations
  $('.phone_icon').click(function() {
    $('#contactForm').toggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});


$(function() {
	$('.contact2').click(function() {
   	 $('#contactForm1').toggle();
  	})
  $(document).mouseup(function (e) {
    var container = $("#contactForm1");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});


$(function() {
  $('.contact3').click(function() {
    $('#contactForm2').toggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm2");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});

</script>
</body>
</html>