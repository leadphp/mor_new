<!DOCTYPE html>
<html lang="he">
<head>
  @include('layouts.head')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>


@php


//print_r($user_to_edit);
@endphp



@guest
@else
@php

if(!empty($user_to_edit)){
	$user_to_edit = $user_to_edit;
}else{
	$user_to_edit = \Auth::user()->id;
}


	$ques1 = \App\question_survey::where('user_id',$user_to_edit)->latest()->first();

	$ques2 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','2')->first();

	$ques9 = \App\question_survey::where('user_id',$user_to_edit)->where('question_id','9')->first();


	if(!empty($ques2) && !empty($ques9) ){

		if($ques2->meta_value == "No" && $ques9->meta_value == "first_aprt"){



			$ee = "give_twenty ";
			$tt = '';
			$uu = 'bubble_third_filled bubble_fourth_filled';

		}else{
			$ee = "give_twentyfive";
			$tt = 'bubble_third_filled bubble_fourth_filled';
			$uu = '';
		}

	}else{
		$ee = "";
		$tt = '';
		$uu = '';
	}


  	if(!empty($ques1)){
        $rr = $ques1->question_id; 

        switch ($rr) {
          case "1":
             	$class = 'bubble_first';
              	break;
          case "2":
              	$class = 'bubble_second';
              break;
          case "3":
              	$class = 'bubble_third';
              break;
          case "4":
             	$class = 'bubble_fourth';
              break;
          case "5":
             	$class = 'bubble_fifth';
              break;
          case "6":
              	$class = 'bubble_sixth';
              break;
          case "7":
              	$class = 'bubble_seventh';
              break;
          case "8":
             	$class = 'bubble_first_filled bubble_eighth';
              break;
          case "9":
             	$class = 'bubble_nineth bubble_first_filled';
              break;
          case "10":
              	$class = 'bubble_tenth bubble_first_filled';
              break;
          case "11":
            	$class = 'bubble_eleventh bubble_first_filled';
              break;
          case "14":
              	$class = 'bubble_first_filled bubble_second_filled bubble_twelveth '.$ee;
              break;
          case "15":
              	$class = 'bubble_first_filled bubble_second_filled bubble_thirteen '.$ee;
              break;
          case "16":
              	$class = 'bubble_first_filled bubble_second_filled bubble_fourteen '.$ee;
              break;
          case "17":
              	$class = 'bubble_first_filled bubble_second_filled bubble_fifteen '.$ee." ". $tt;
              break;
          case "18":
              	$class = 'bubble_sixteen bubble_first_filled bubble_second_filled '.$ee." ". $uu;
              break;
          default:
              	$class = '';
        }
  	}else{
  	$class="";
	}
@endphp

@endguest



<body class="sticky-header-full @guest @else <?php echo $class; ?> @endguest">

<style>

</style>

<div class="alert-message-flash">
	@if(Session::has('message'))
		<p class="alert-message">{{ Session::get('message') }}</p>
	@endif
</div>

<div class="advisor reg-header ">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 text-center mobile-h-top">
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
			<div class="col-lg-9">
				<div class="advisor-header d-f a-i-c">
					<a href="{{url('')}}" class="logo-container ">
						<img src="images/logo.png" alt="">
					</a>
					<div class="advisor-nav">
						<div class="toggle_bar"><i class="fa fa-bars"></i></div>
						<ul class="nav-main">
							<li><a href="{{url('/about-us')}}">מי אנחנו? </a></li>
							<li><a href="{{url('/how-it-works')}}">איך זה עובד?</a></li>
							<li class="contact2"><a href="javascript:void(0)">תיאום פגישה עם יועץ משכנתא</a></li>
							<li class="contact3"><a href="javascript:void(0)">צור קשר</a></li>


							<li class="delete-entries"><a href="/delete_entries">אפס הרשמה והתחל הרשמה מחדש</a></li>
						</ul>
					</div>
					<ul class="nav_reg">
						<li><a href="javascript:void(0)">הפקת הדוח</a></li>
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
	<div class="close_btnP"> X </div>
	<?php
		$datetime = new DateTime('tomorrow');
		$date = $datetime->format('Y-m-d');
	?>
	<h1>יצירת קשר עם משכנתא דיגיטלית</h1>
	<small>אשמח שתחזרו אלי טלפונית לקבלת סיוע, מענה על מספר שאלות והדרכה.</small>
	<form action="{{route('user.contact.email')}}" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<!-- <input placeholder="כותרת" type="text" name="title" value="צור קשר" required /> -->
		<!-- <input placeholder="מהות הפניה" type="text" name="subject" required /> -->
		<h5>תאריך ושעה לחזרה:</h5>
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
       <input placeholder="כותרת" type="text" name="title" value="צור קשר" required />
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
		<!-- <input placeholder="כותרת" type="text" name="title" required /> -->
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
       	<input placeholder="כותרת" type="text" name="title" required />
		<textarea placeholder="הודעה" name="comments">אשמח אם תחזרו אלי מחר בשעה המצוינת לעיל</textarea>
		<input class="formBtn" type="submit" />
	</form>
</div>

<div id="contactForm2" class="contactForm">
	<div class="close_btnP"> X </div>
	<?php
		$datetime = new DateTime('tomorrow');
		$date = $datetime->format('Y-m-d');
	?>
	<h1>צור קשר</h1>
	<small>אשמח שתחזרו אלי טלפונית לקבלת סיוע, מענה על מספר שאלות והדרכה.</small>
	<form action="{{route('user.contact.email')}}" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<!-- <input placeholder="כותרת" type="text" name="title" required /> -->
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
       <input placeholder="כותרת" type="text" name="title" required />
		<textarea placeholder="הודעה" name="comments">אשמח אם תחזרו אלי מחר בשעה המצוינת לעיל</textarea>
		<input class="formBtn" type="submit" />
	</form>
</div>



<!-- MAIN SECTION STARTED -->
<section class="chat register-page">
	<div class="container">
	    <div class="chat-wrap" id="loadQuestions">
		  
	    	<!-- **************************QUESTION-1******************************************* -->
	    		<div class="ques_1" id="ques_1">
	    			<form method="post" id="formQuestionGetstarted">
					  <div class="chat-container d-f f-d-c a-i-f-s">
					    <div class="message-pic">
						    <img src="images/advisor.png" alt=""/>
						  </div>
					    <div class="message d-i-f f-d-c one">
						  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
						  <p>שלום לך,
								אני מתן יועץ המשכנתא הממוחשב והחכם שלך.</p>
						  <span class="message-timing">18:20</span>
						</div>

						<div class="message d-i-f f-d-c two" style="display:none;">
						  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
						  	<p>תכף אשאל אותך מספר שאלות שיוכלו לעזור לאלגוריתם שמפעיל אותי ליצר 
								עבורך את תמהיל המשכנתא האידיאלי.
							</p>
						  <span class="message-timing">18:20</span>
						</div>

						<div class="message d-i-f f-d-c three" style="display:none;">
						  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
						 	<p>אחרי שהתוכנית תהיה מלאה, אני אדאג לקשר אותך לבנק, לסניף ולנציג 
								שיספקו לך את תוכנית המשכנתא אותה נבנה יחד עכשיו.
							</p>
						  <span class="message-timing">18:21</span>
						</div>

						<div class="message d-i-f f-d-c four " style="display:none;">
						  <span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
						  <p>אז שנתחיל?</p>
						  <span class="message-timing">18:22</span>
						</div>

						<div class="col-md-offset-5 col-md-7 text-center five" style="display:none;">
						@guest
				            <a data-toggle="modal" data-toggle="modal" data-target="#loginModal" class="main-button">הרשמה והתחברות</a>
				        @else
				             <button type="submit" class="ok_btn main-button-getStarted main-button">כן בטח, בוא נתחיל</button>
				        @endguest 
						</div>
						<!-- LODER FOR QUESTION ONE -->
						<div class="width-full">
							<div class="message d-i-f f-d-c spinner spinner-get-started" style="display:none;">
								<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>
						</div>
					  </div>
						{{ csrf_field() }}
					</form>
				</div>


				@php 
				$data = array();
				foreach($setting as $settings){
				$data[$settings->meta_key] = $settings->meta_value;
				}
				@endphp
			@guest

			@else
			<!-- **************************QUESTION-2*******************************************-->
				
					@include('questions.question1')
				
			<!-- **************************QUESTION-3*******************************************-->
				
					@include('questions.question2')

			<!-- **************************QUESTION-4*******************************************-->
				
					@include('questions.question3')

			<!-- **************************QUESTION-5*******************************************-->
					
					@include('questions.question4')
					
			<!-- **************************QUESTION-6*******************************************-->
					
					@include('questions.question5')

			<!-- **************************QUESTION-7*******************************************-->
					
					@include('questions.question6')

			<!-- **************************QUESTION-8*******************************************-->
					
					@include('questions.question7')
			<!-- **************************QUESTION-9*******************************************-->
					
					@include('questions.question8')

			<!-- **************************QUESTION-10*******************************************-->
					
					@include('questions.question9')
						
			<!-- **************************QUESTION-11*******************************************-->
				@if($data['Ques-Control-Q10'] == 1)	
					@include('questions.question10')
				@endif
			<!-- **************************QUESTION-12*******************************************-->
					
					@include('questions.question11')

			<!-- *************************QUESTION-12_2*******************************************-->
					
					@include('questions.question11_2')

			<!-- *************************QUESTION-12_3*******************************************-->
					
					@include('questions.question11_3')

			<!-- **************************QUESTION-13*******************************************-->
				
					@include('questions.question13')
				
			<!-- **************************QUESTION-14*******************************************-->
				@if($data['Ques-Control-Q13'] == 1)	
					@include('questions.question14')
				@endif
			<!-- **************************QUESTION-15*******************************************-->
				@if($data['Ques-Control-Q14'] == 1)	
					@include('questions.question15')
				@endif
			<!-- **************************QUESTION-16*******************************************-->
				@if($data['Ques-Control-Q15'] == 1)	
					@include('questions.question16')
				@endif
			<!-- **************************QUESTION-17*******************************************-->
					
					@include('questions.question17')

			<!-- **************************QUESTION-18*******************************************-->
					
					@include('questions.question18')
@endguest
		</div>
	</div>
</section>

<footer>
  @include('layouts.footer')
  @include('layouts.footer-scripts')
</footer>
  

<div id="stop" class="scrollTop">
    <span><a href=""><i class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
  </div>





<!--PAGE SCRIPT STARTED FROM HERE -->

<script type="text/javascript">

	// $(".toggle_bar").click(function(){
	//     $(".nav-main").toggle();
 //  	});


  	/*POP UP FORMS FOR CALL AND MENU*/
		// $(function() {
		  
		//   // contact form animations
		//   $('.phone_icon').click(function() {
		//     $('#contactForm').toggle();
		//   })
		//   $(document).mouseup(function (e) {
		//     var container = $("#contactForm");

		//     if (!container.is(e.target) // if the target of the click isn't the container...
		//         && container.has(e.target).length === 0) // ... nor a descendant of the container
		//     {
		//         container.fadeOut();
		//     }
		//   });
		  
		// });


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


	/*QUESTIONS FLOW SARTED FROM HERE*/

		$(document).ready(function(){

			var settings_ten = '<?php echo $data['Ques-Control-Q10']; ?>';
			//alert(settings_ten);
			var settings_thirteen = '<?php echo $data['Ques-Control-Q13']; ?>';
			var settings_fourteen = '<?php echo $data['Ques-Control-Q14']; ?>';
			var settings_fifteen = '<?php echo $data['Ques-Control-Q15']; ?>';
			var settings_sixteen = '<?php echo $data['Ques-Control-Q16']; ?>';

			/*=========================Question-1=============================*/
			$('body').on('click','.main-button-getStarted',function(){
				$("body").addClass('hide_btn_spinner');	
			});




			var cc = 	$('#formQuestionOne').hasClass( "formQuestionOnes" );
			if(cc == true){
				// alert('true');
				$(".two").show();
				$(".three").show();
				$(".four").show();
				$(".five").show();

			}else{

				$('.spinner').show();
				setTimeout(function(){
					$('.spinner').hide();
					$(".two").show();
					$('.spinner').show();
				},2000);

				setTimeout(function(){
					$('.spinner').hide();
					$(".three").show();
					$('.spinner').show();
					// var iScroll = $(window).scrollTop();
			  //       iScroll = iScroll + 100;
			  //       $('html, body').animate({
			  //           scrollTop: iScroll
			  //       }, 1000);
				},4000);

				setTimeout(function(){
					$('.spinner').hide();
					$(".four").show();
					$('.spinner').show();
					// var iScroll = $(window).scrollTop();
			  //       iScroll = iScroll + 150;
			  //       $('html, body').animate({
			  //           scrollTop: iScroll
			  //       }, 1000);
				},6000);

				setTimeout(function(){
					$('.spinner').hide();
					$(".five").show();
					var iScroll = $(window).scrollTop();
			        iScroll = iScroll + 100;
			        $('html, body').animate({
			            scrollTop: iScroll
			        }, 1000);
				},8000);

			}

			/*Click Submit Button*/
			$("body").on('submit','form#formQuestionGetstarted',function(){
				formQuestionOne('form#formQuestionGetstarted','<?= url("/questionGetstarted") ?>','#ques_2','spinner-get-started');
				return false;
			});

			/*=========================Question-2=============================*/

				function QuestionOne() {
					var val = $('input[name=que1]:checked').val();

					var first_val = $('input[name=que1]:checked').val();

					if(first_val == 'aprt_no_mortgage' || first_val == 'aprt_with_mortgage'){

						$('body').find('.question2-ul').addClass('click-color-change');
						$('body').find('.yes_button_ques_two').click();
					}



					if($('input[name=que1]').is(':checked')) { 
						if(val == 'rental_aprt'){
							$("body").find('.question_two_part_one').show();
							$("body").find('.questionOneOption').show();
						}else if(val == 'free_aprt'){
							$("body").find('.question_two_part_one').show();
							$("body").find('.questionOneOption').hide();
							formQuestionOne('form#formQuestionOne','<?= url("/question1") ?>','#ques_3','spinner-ques-1');
						}else {
							$("body").find('.question_two_part_one').hide();
							$("body").find('.questionOneOption').hide();
							formQuestionOne('form#formQuestionOne','<?= url("/question1") ?>','#ques_3','spinner-ques-1');
						}
					}
				}

				$("body").on('click','input[name=que1]',function(){

					$('#loadQuestions').addClass('off_zero');
					$('#formQuestionOne').addClass('formQuestionOnes');

					var addclass = 'bubble_first';
					var removeclass = 'bubble_first';
						QuestionOne();
					header_bubble_class_changer(addclass,removeclass);
				});

				$("body").on('submit','form#formQuestionOne',function(){

					$('#loadQuestions').addClass('off_zero');
					$('#formQuestionOne').addClass('formQuestionOnes');
					var addclass = 'bubble_first';
					var removeclass = 'bubble_first';
					formQuestionOne('form#formQuestionOne','<?= url("/question1") ?>','#ques_3','spinner-ques-1');
					header_bubble_class_changer(addclass,removeclass);
					return false;
				});

				// $('input[name=que1]').click(function(){
				// 	$(this).removeAttr('checked','checked');
				// });

			/*=========================Question-3=============================*/

				function Questiontwo() {

					var first_val = $('input[name=que1]:checked').val();

					if(first_val == 'aprt_no_mortgage' || first_val == 'aprt_with_mortgage'){

						$('body').find('.yes_button_ques_two').attr('checked','checked')
					}

		          var val = $('input[name=que2]:checked').val();
		           if($('input[name=que2]').is(':checked')) { 
		              if(val == 'Yes'){
		              	
		              	$("body").find('.questiontwoOption').show();
		              }else {
		              	
		              	$("body").find('.questiontwoOption').hide();
		              	formQuestionOne('form#formQuestionTwo','<?= url("/question2") ?>','#ques_4','spinner-ques-2');
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
					formQuestionOne('form#formQuestionTwo','<?= url("/question2") ?>','#ques_4','spinner-ques-2');
					var addclass = 'bubble_second';
					var removeclass = 'bubble_first';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		       	});

			/*=========================Question-4=============================*/
				$("body").on('change','input[name=gender]',function(){

							//$test = $('input[name=gender]:checked').val();

					formQuestionOne('form#formQuestionThree','<?= url("/question3") ?>','#ques_5','spinner-ques-3');
		            var addclass = 'bubble_third';
					var removeclass = 'bubble_second';
					header_bubble_class_changer(addclass,removeclass);

					male_female_text_change();
		            return false;
		       	});

		    /*=========================Question-5=============================*/
				$("body").on('submit','form#formQuestionFour',function(){    
      
					formQuestionOne('form#formQuestionFour','<?= url("/question4") ?>','#ques_6','spinner-ques-4');
		            var addclass = 'bubble_fourth';
					var removeclass = 'bubble_third';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		        });
			
			/*=========================Question-6=============================*/
		        $("body").on('submit','form#formQuestionFive',function(){
					formQuestionOne('form#formQuestionFive','<?= url("/question5") ?>','#ques_7','spinner-ques-5');
		            var addclass = 'bubble_fifth';
					var removeclass = 'bubble_fourth';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		        });
		        $("body").on('click','.economic_situation',function(){
					formQuestionOne('form#formQuestionFivePointOne','<?= url("/question5") ?>','#ques_7','spinner-ques-5');
			        var addclass = 'bubble_fifth';
					var removeclass = 'bubble_fourth';
					header_bubble_class_changer(addclass,removeclass);
			        return false;
		       	});

		    /*=========================Question-7=============================*/
		        $("body").on('submit','form#formQuestionSix',function(){
			        formQuestionOne('form#formQuestionSix','<?= url("/question6") ?>','#ques_8','spinner-ques-6');
					var addclass = 'bubble_sixth';
					var removeclass = 'bubble_fifth';
					header_bubble_class_changer(addclass,removeclass);
			        return false;
		       	});

		    /*=========================Question-8=============================*/
		        function Questionseven() {
	              var val = $('input[name=other_banks_benifits]:checked').val();
	               if($('input[name=other_banks_benifits]').is(':checked')) {
		              	//$("body").find('.questionsevenOption').show();
		              	$("body").find('.spinner-ques-71').show();
		              	setTimeout(function(){ 
						$("body").find('.spinner-ques-71').hide();	
							var LoadDiv = $("body").find('.questionsevenOption');
							$(LoadDiv).show();

							$take = $(LoadDiv).offset().top;
							heigh = $(LoadDiv).height() + 120;

						  	$('html, body').animate({
						        scrollTop: $(LoadDiv).offset().top-170
						    }, 2000);
						}, 2000);


	          		}
	           	}

	           	$("body").on('click','input[name=other_banks_benifits]',function(){
					Questionseven();
					var addclass = 'bubble_seventh';
					var removeclass = 'bubble_sixth';
					header_bubble_class_changer(addclass,removeclass);   
	           	});
	        
	        	$("body").on('submit','form#formQuestionSeven',function(){
					formQuestionOne('form#formQuestionSeven','<?= url("/question7") ?>','#ques_9','spinner-ques-7');
				
					var addclass = 'bubble_seventh_one bubble_first_filled';
					var removeclass = 'bubble_seventh';
					header_bubble_class_changer(addclass,removeclass);   
	                return false;
	           	});

	        /*=========================Question-9=============================*/
		        $("body").on('change','input[name=why_mortgage]',function(){
		        	var val = $('input[name=why_mortgage]:checked').val();

		        	$val = $('input[name=why_mortgage]:checked').val();

					if($('input[name=why_mortgage]').is(':checked')) { 
						if(val == 'mistaken_program'){
							if(settings_ten == 1){

								formQuestionOne('form#formQuestionEight','<?= url("/question8") ?>','#ques_11','spinner-ques-8');
							}else{

								formQuestionOne('form#formQuestionEight','<?= url("/question8") ?>','#ques_12_2','spinner-ques-8');	
							}
							$('#ques_10').hide();
							$('#ques_12_1').hide();
							$('#ques_12_3').hide();
							$('body').removeClass('bubble_direct_ten');
						}else if(val == 'any_cause'){
							formQuestionOne('form#formQuestionEight','<?= url("/question8") ?>','#ques_12_3','spinner-ques-8');
							$('#ques_10').hide();
							$('#ques_11').hide();
							$('#ques_12_1').hide();
							$('#ques_12_2').hide();
							$('body').addClass('bubble_direct_eleven');
						}else {
							formQuestionOne('form#formQuestionEight','<?= url("/question8") ?>','#ques_10','spinner-ques-8');
							$('#ques_12_2').hide();
							$('#ques_12_3').hide();
						}
					}

					var addclass = 'bubble_eighth';
					var removeclass = 'bubble_seventh_one';
					header_bubble_class_changer(addclass,removeclass);   
		            return false;
		       	});

		    /*=========================Question-10=============================*/
		        $("body").on('change','input[name=status_of_mortgage]',function(){
		        	if(settings_ten == 1){
					formQuestionOne('form#formQuestionNine','<?= url("/question9") ?>','#ques_11','spinner-ques-9');
					}else{
					formQuestionOne('form#formQuestionNine','<?= url("/question9") ?>','#ques_12_1','spinner-ques-9');	
					}
					var addclass = 'bubble_nineth';
					var removeclass = 'bubble_eighth';
					header_bubble_class_changer(addclass,removeclass);
			        return false;
		       	});


		    /*=========================Question-11=============================*/

		        $("body").on('submit','form#formQuestionTen',function(){
		        	//alert($val);
		        	var val = $('input[name=why_mortgage]:checked').val();

						if(val == 'mistaken_program'){
							formQuestionOne('form#formQuestionTen','<?= url("/question10") ?>','#ques_12_2','spinner-ques-10');
							$('#ques_12_1').hide();
							$('#ques_10').hide();
						}else{
							formQuestionOne('form#formQuestionTen','<?= url("/question10") ?>','#ques_12_1','spinner-ques-10');
						}
					
					var addclass = 'bubble_tenth';
					var removeclass = 'bubble_nineth';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		       	});


				$("body").on('submit','form#formQuestionTen_option1',function(){ 
					//alert($val);
					var val = $('input[name=why_mortgage]:checked').val();
						if(val == 'mistaken_program'){
							formQuestionOne('form#formQuestionTen_option1','<?= url("/question10") ?>','#ques_12_2','spinner-ques-10');
							$('#ques_12_1').hide();
							$('#ques_10').hide();
						}else{
							formQuestionOne('form#formQuestionTen_option1','<?= url("/question10") ?>','#ques_12_1','spinner-ques-10');
						}
					
					var addclass = 'bubble_tenth';
					var removeclass = 'bubble_nineth';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		       	});


			 /*=========================Question-12_1 (Real 11_1)=============================*/

		       	$("body").on('submit','form#formQuestionEleven_One',function(){

		       		var property_value1 = $('#incoming-cost').val();
		       		var property_value  =  property_value1.replace(/,/g, '');
		       		var self_funding1 = $('#equity-cost').val();
		       		var self_funding  =  self_funding1.replace(/,/g, '');
		       		var fee = property_value - self_funding;
		       		var ratio = fee/property_value * 100;
		       		fee = addCommasDirect(fee);

		       		//alert(ratio);

		       		if(45 < ratio && ratio <= 49){

		       			z = property_value * 0.45;
		       			z = addCommasDirect(z);
		       			$('.imp-info-else-condition').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+fee+' שקלים, על דירה בשווי '+property_value1+' שקלים.<br> אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך!<br> האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven">השאר את המשכנתא ללא שינוי</a></div>');
		       			$('.eleven-one-submit').hide(); 
		             }else if(60 < ratio && ratio <= 64){
		             	z = property_value * 0.6;
		             	z = addCommasDirect(z);
		       			$('.imp-info-else-condition').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+fee+' שקלים, על דירה בשווי '+property_value1+' שקלים.<br> אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך!<br> האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven">השאר את המשכנתא ללא שינוי</a></div>'); 
		       			$('.eleven-one-submit').hide();

		             }else if(75 < ratio && ratio <= 79){
		             	z = property_value * 0.75;
		             	z = addCommasDirect(z);
		       			$('.imp-info-else-condition').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+fee+' שקלים, על דירה בשווי '+property_value1+' שקלים.<br> אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך! <br>האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven">השאר את המשכנתא ללא שינוי</a></div>'); 
		       			$('.eleven-one-submit').hide();

		             }else{
		             	formQuestionOne('form#formQuestionEleven_One','<?= url("/question11_1") ?>','#ques_13','spinner-ques-11_1');

		          //    	z = property_value * 0.45;
		       			// $('.imp-info-else-condition').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+fee+' שקלים, על דירה בשווי '+property_value+' שקלים. אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך! האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven">השאר את המשכנתא ללא שינוי</a></div>');
		       			// $('.eleven-one-submit').hide();

		             }

					twelve_change_eleven_a(addCommasDirect(fee));
					pmt_slider_calculation();
		       		thirty_nine_wala_fun();

					//formQuestionOne('form#formQuestionEleven_One','<?= url("/question11_1") ?>','#ques_13','spinner-ques-11_1');
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_tenth';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		       	});

				$("body").on('click','.yes_clicked_eleven',function(){

					var property_value1 = $('#incoming-cost').val();
		       		var property_value  =  property_value1.replace(/,/g, '');
		       		var self_funding1 = $('#equity-cost').val();
		       		var self_funding  =  self_funding1.replace(/,/g, '');
		       		var fee = property_value - self_funding;
		       		var ratio = fee/property_value * 100;
		       		fee = addCommasDirect(fee);

		       		if(45 < ratio && ratio <= 49){

		       			z = property_value * 0.45;
		       			z = addCommasDirect(z);
		       			twelve_change_eleven_a(z);

		             }else if(60 < ratio && ratio <= 64){
		             	z = property_value * 0.6;
		             	z = addCommasDirect(z);
		       			twelve_change_eleven_a(z);


		             }else if(75 < ratio && ratio <= 79){
		             	z = property_value * 0.75;
		             	z = addCommasDirect(z);
		       			twelve_change_eleven_a(z);


		             }else{
		             	twelve_change_eleven_a(fee);

		             }


		             pmt_slider_calculation();
		       		thirty_nine_wala_fun();

					formQuestionOne('form#formQuestionEleven_One','<?= url("/question11_1_2") ?>','#ques_13','spinner-ques-11_1');
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_tenth';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		        });

				$("body").on('click','.no_clicked_eleven',function(){
					formQuestionOne('form#formQuestionEleven_One','<?= url("/question11_1_3") ?>','#ques_13','spinner-ques-11_1');
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_tenth';
					header_bubble_class_changer(addclass,removeclass);

					pmt_slider_calculation();
		       		thirty_nine_wala_fun();
		            return false;
		       	});


			 /*=========================Question-12_2 (Real 11_2)=============================*/

		       	$("body").on('submit','form#formQuestionEleven_Two',function(){

		       		var property_value1 = $('#incoming-cost-1').val();
		       		var property_value  =  property_value1.replace(/,/g, '');

		       		var property_market_value1 = $('#required-height').val();
		       		var property_market_value  =  property_market_value1.replace(/,/g, '');

		       		var self_funding1 = $('#property-market-value').val();
		       		var self_funding  =  self_funding1.replace(/,/g, '');

		       		var fee1 = property_value - self_funding;
		       		fee = addCommasDirect(fee1);
		       		var ratio = fee1/property_market_value * 100;

		       		

		       		//alert(ratio);

		       		if(45 < ratio && ratio <= 49){

		       			z = property_market_value * 0.45;
		       			z = addCommasDirect(z);
		       			$('.imp-info-else-condition-eleven-b').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+fee+' שקלים,<br> על דירה בשווי '+property_value1+' שקלים.<br> אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך!<br> האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven_two">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven_two">השאר את המשכנתא ללא שינוי</a></div>');
		       			$('.eleven-two-submit').hide(); 
		             }else if(60 < ratio && ratio <= 64){
		             	z = property_market_value * 0.6;
		             	z = addCommasDirect(z);
		       			$('.imp-info-else-condition-eleven-b').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+fee+' שקלים,<br> על דירה בשווי '+property_value1+' שקלים.<br> אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך!<br> האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven_two">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven_two">השאר את המשכנתא ללא שינוי</a></div>'); 
		       			$('.eleven-two-submit').hide();

		             }else if(75 < ratio && ratio <= 79){
		             	z = property_market_value * 0.75;
		             	z = addCommasDirect(z);
		       			$('.imp-info-else-condition-eleven-b').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+fee+' שקלים,<br> על דירה בשווי '+property_value1+' שקלים.<br> אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך!<br> האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven_two">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven_two">השאר את המשכנתא ללא שינוי</a></div>'); 
		       			$('.eleven-two-submit').hide();

		             }else{
		             	formQuestionOne('form#formQuestionEleven_Two','<?= url("/question11_2") ?>','#ques_13','spinner-ques-11_2');

		             	//z = property_value * 0.45;
		       			//$('.imp-info-else-condition-eleven-b').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+fee+' שקלים, על דירה בשווי '+property_value+' שקלים. אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך! האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven">השאר את המשכנתא ללא שינוי</a></div>');


		             }

					// formQuestionOne('form#formQuestionEleven_Two','<?= url("/question11_2") ?>','#ques_13','spinner-ques-11_2');

					twelve_change_eleven_a(addCommasDirect(fee));
					pmt_slider_calculation();
		       		thirty_nine_wala_fun();
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_tenth';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		       	});

				$("body").on('click','.yes_clicked_eleven_two',function(){

					var property_value1 = $('#incoming-cost-1').val();
		       		var property_value  =  property_value1.replace(/,/g, '');
		       		var self_funding1 = $('#property-market-value').val();
		       		var self_funding  =  self_funding1.replace(/,/g, '');
		       		var fee1 = property_value - self_funding;
		       		fee = addCommasDirect(fee1);
		       		var ratio = fee1/property_market_value * 100;


					if(45 < ratio && ratio <= 49){

		       			z = property_value * 0.45;
		       			z = addCommasDirect(z);

		       			twelve_change_eleven_a(z);
		       			
		             }else if(60 < ratio && ratio <= 64){
		             	z = property_value * 0.6;
		             	z = addCommasDirect(z);


		       			twelve_change_eleven_a(z);

		             }else if(75 < ratio && ratio <= 79){
		             	z = property_value * 0.75;
		             	z = addCommasDirect(z);

		             	twelve_change_eleven_a(z);
		       			

		             }else{
		             	
		             	twelve_change_eleven_a(fee);

		             }




		             pmt_slider_calculation();
		       		thirty_nine_wala_fun();


					formQuestionOne('form#formQuestionEleven_Two','<?= url("/question11_2_2") ?>','#ques_13','spinner-ques-11_2');
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_tenth';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		       	});

				$("body").on('click','.no_clicked_eleven_two',function(){
					formQuestionOne('form#formQuestionEleven_Two','<?= url("/question11_2_3") ?>','#ques_13','spinner-ques-11_2');
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_tenth';
					header_bubble_class_changer(addclass,removeclass);
					pmt_slider_calculation();
		       		thirty_nine_wala_fun();
		            return false;
		       	});

			/*=========================Question-12_3 (Real 11_3)=============================*/

			 	$("body").on('submit','form#formQuestionThirteen',function(){

		       		var property_value1 = $('#incoming-cost-2').val();
		       		var property_value  =  property_value1.replace(/,/g, '');

		       		var self_funding1 = $('#equity-height').val();
		       		var self_funding  =  self_funding1.replace(/,/g, '');

		       		var fee = property_value - self_funding;
		       		var ratio = self_funding/property_value * 100;


		       		twelve_change_eleven_a(self_funding1);

		       		pmt_slider_calculation();
		       		thirty_nine_wala_fun();

		       		if(50 < ratio && ratio <= 54){
		       			z = property_value * 0.50;
		       			z = addCommasDirect(z);
		       			$('.imp-info-else-condition-eleven-c').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+self_funding1+' שקלים, על דירה בשווי '+property_value1+' שקלים.<br> אם תוריד את גובה המשכנתא ל- <span class="extra_question_work">'+z+'</span> שקלים,<br> תוכל לקבל ריביות יותר טובות על המשכנתא שלך!<br> האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven_three">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven_three">השאר את המשכנתא ללא שינוי</a></div>');
		       			$('.eleven-three-submit').hide(); 
		             }else{

		             	$('.imp-info-else-condition-eleven-c').html('');
		             	formQuestionOne('form#formQuestionThirteen','<?= url("/question13") ?>','#ques_13','spinner-ques-11_3');
		          		//z = property_value * 0.45;
		       			// $('.imp-info-else-condition-eleven-c').html('<div class="imp-info"><h4>חשוב לדעת</h4><div class="imp-info-text"><span class="question d-f j-c-c a-i-c"><i class="fa fa-question" aria-hidden="true"></i></span><p>ביקשת משכנתא בסך של '+self_funding+' שקלים, על דירה בשווי '+property_value+' שקלים. אם תוריד את גובה המשכנתא ל- '+z+' שקלים, תוכל לקבל ריביות יותר טובות על המשכנתא שלך! האם אתה מעונין להוריד את גובה המשכנתא?</p> </div> </div><div class="chat-buttons"><a class="main-button yes_clicked_eleven">מעוניין להוריד</a><a class="main-button grey no_clicked_eleven">השאר את המשכנתא ללא שינוי</a></div>');
		             }
					//formQuestionOne('form#formQuestionThirteen','<?= url("/question13") ?>','#ques_13','spinner-ques-11_3');
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_direct_eleven';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
		       	});

				$("body").on('click','.yes_clicked_eleven_three',function(){

					$(this).addClass('chnage-color');
					$('.no_clicked_eleven_three').removeClass('chnage-color');

					var property_value1 = $('#incoming-cost-2').val();
		       		var property_value  =  property_value1.replace(/,/g, '');

		       		var z = property_value * 0.50;
		       		z = addCommasDirect(z);

		       		twelve_change_eleven_a(z);
		       		pmt_slider_calculation();
		       		thirty_nine_wala_fun();

					formQuestionOne('form#formQuestionThirteen','<?= url("/question13_2") ?>','#ques_13','spinner-ques-11_3');
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_direct_eleven';
					header_bubble_class_changer(addclass,removeclass);


		            return false;
		       	});

				$("body").on('click','.no_clicked_eleven_three',function(){

					$(this).addClass('chnage-color');
					$('.yes_clicked_eleven_three').removeClass('chnage-color');

					formQuestionOne('form#formQuestionThirteen','<?= url("/question13_3") ?>','#ques_13','spinner-ques-11_3');
					var addclass = 'bubble_eleventh bubble_second_filled';
					var removeclass = 'bubble_direct_eleven';
					header_bubble_class_changer(addclass,removeclass);
					pmt_slider_calculation();
					thirty_nine_wala_fun();
		            return false;
		       	});

			/*=========================Question-13 (Real 13)=============================*/

				$("body").on('submit','form#formQuestionfourteen',function(){

						if(settings_thirteen == 1){
							formQuestionOne('form#formQuestionfourteen','<?= url("/question14") ?>','#ques_14','spinner-ques-13');
						}else if(settings_thirteen == 0 && settings_fourteen == 1 ){
							formQuestionOne('form#formQuestionfourteen','<?= url("/question14") ?>','#ques_15','spinner-ques-13');
						}else if(settings_fourteen == 0 && settings_fifteen == 1 ){
							formQuestionOne('form#formQuestionfourteen','<?= url("/question14") ?>','#ques_16','spinner-ques-13');
						}else if(settings_fifteen == 0 && settings_sixteen == 1 ){
							formQuestionOne('form#formQuestionfourteen','<?= url("/question14") ?>','#ques_17','spinner-ques-13');
						}else{
							formQuestionOne('form#formQuestionfourteen','<?= url("/question14") ?>','#ques_18','spinner-ques-13');
						}


					var ques2 = $('input[name=que2]:checked').val();

					if(ques2 == 'No'){
						var addclass = 'bubble_twelveth give_twenty';
					}else{
						var addclass = 'bubble_twelveth give_twentyfive';
					}
					//var addclass = 'bubble_twelveth';
					var removeclass = 'bubble_eleventh';
					header_bubble_class_changer(addclass,removeclass);
		            return false;
	       		});


			/*=========================Question-14 (Real 14)=============================*/
				function Questionfiftn() {
					var val = $('input[name=ques14]:checked').val();
					if($('input[name=ques14]').is(':checked')) { 
						if(val == 'Yes'){
							$("body").find('.questionfourteenOption').show();
						}else {
							$("body").find('.questionfourteenOption').hide();
							$('.section_13_repeat .form-control').val('0');
							


							//formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_15','spinner-ques-14');

							if(settings_fourteen == 1 ){
								formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_15','spinner-ques-14');
							}else if(settings_fourteen == 0 && settings_fifteen == 1 ){
								formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_16','spinner-ques-14');
							}else if(settings_fifteen == 0 && settings_sixteen == 1 ){
								formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_17','spinner-ques-14');
							}else{
								formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_18','spinner-ques-14');
							}




						}
					}
				}

				$("body").on('click','input[name=ques14]',function(){
					
					Questionfiftn();
					var addclass = 'bubble_thirteen';
					var removeclass = 'bubble_twelveth';
					header_bubble_class_changer(addclass,removeclass);
				});


				$("body").on('submit','form#formQuestionfifteen',function(){
					//formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_15','spinner-ques-14');
							if(settings_fourteen == 1 ){
								formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_15','spinner-ques-14');
							}else if(settings_fourteen == 0 && settings_fifteen == 1 ){
								formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_16','spinner-ques-14');
							}else if(settings_fifteen == 0 && settings_sixteen == 1 ){
								formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_17','spinner-ques-14');
							}else{
								formQuestionOne('form#formQuestionfifteen','<?= url("/question15") ?>','#ques_18','spinner-ques-14');
							}
					var addclass = 'bubble_thirteen';
					var removeclass = 'bubble_twelveth';
					header_bubble_class_changer(addclass,removeclass);
					return false;
				});

			/*=========================Question-15 (Real 15)=============================*/

				function Questionsixten() {
					var val = $('input[name=other_loan]:checked').val();
					if($('input[name=other_loan]').is(':checked')) { 
						if(val == 'Yes_I_have_loan'){
							$("body").find('.hide_14').show();
						}else {
							$("body").find('.hide_14').hide();

							$('.repeated_div_14 .form-control').val('0');
							//formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>','#ques_16','spinner-ques-15');
							if(settings_fifteen == 1 ){
								formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>','#ques_16','spinner-ques-15');
							}else if(settings_fifteen == 0 && settings_sixteen == 1 ){
								formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>','#ques_17','spinner-ques-15');
							}else{
								formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>','#ques_18','spinner-ques-15');
							}
						}
					}
				}

				$("body").on('click','input[name=other_loan]',function(){
					Questionsixten();
					var addclass = 'bubble_fourteen';
					var removeclass = 'bubble_thirteen';
					header_bubble_class_changer(addclass,removeclass);
				});

				$("body").on('submit','form#formQuestionsixteen',function(){
					//formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>','#ques_16','spinner-ques-15');
							if(settings_fifteen == 1 ){
								formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>','#ques_16','spinner-ques-15');
							}else if(settings_fifteen == 0 && settings_sixteen == 1 ){
								formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>','#ques_17','spinner-ques-15');
							}else{
								formQuestionOne('form#formQuestionsixteen','<?= url("/question16") ?>','#ques_18','spinner-ques-15');
							}
					var addclass = 'bubble_fourteen';
					var removeclass = 'bubble_thirteen';
					header_bubble_class_changer(addclass,removeclass);
					return false;
				});

			/*=========================Question-16 (Real 16)=============================*/


				function Questionseventn() {
					var val = $('input[name=additional_loans]:checked').val();
					if($('input[name=additional_loans]').is(':checked')) { 
						if(val == 'Yes'){
							$("body").find('.hide_16').show();

							//var addclass = 'bubble_fifteen testing-refresh ';
							//var removeclass = 'bubble_fourteen testing-refresh';
							//header_bubble_class_changer(addclass,removeclass);

							//alert('yes');
						}else {
							$("body").find('.hide_16').hide();
							$('.repeated_fields_16 .form-control').val('0');
							//alert('no');
								
							var val = $('input[name=que2]:checked').val();
								//alert(val);
							var eight = $('input[name=why_mortgage]:checked').val();
								//alert(eight);
							var nine = $('input[name=status_of_mortgage]:checked').val();
								//alert(nine);

				            if(val == 'No' && eight != 'any_cause' && nine == 'first_aprt' && settings_sixteen == 1){

				              	formQuestionOne('form#formQuestionseventeen','<?= url("/question17") ?>','#ques_17','spinner-ques-16');
				              	var addclass = 'bubble_fifteen testing-refresh ';
								var removeclass = 'bubble_fourteen testing-refresh';
								header_bubble_class_changer(addclass,removeclass);
				              	

				            }else {

				           		formQuestionOne('form#formQuestionseventeen','<?= url("/question17") ?>','#ques_18','spinner-ques-16');
				           		last_question_text_value('form#formQuestionseventeen');
				           		var addclass = 'bubble_fifteen  bubble_third_filled bubble_fourth_filled  testing-refresh';
								var removeclass = 'bubble_fourteen testing-refresh';
								header_bubble_class_changer(addclass,removeclass);	
				            }
				            	
						}
					}
				}

				$("body").on('click','input[name=additional_loans]',function(){
					Questionseventn();
					
					
				});


				$("body").on('submit','form#formQuestionseventeen',function(){
					// formQuestionOne('form#formQuestionseventeen','<?= url("/question17") ?>','#ques_17','spinner-ques-16');

					var val = $('input[name=que2]:checked').val();
						//alert(val);
					var eight = $('input[name=why_mortgage]:checked').val();
						//alert(eight);
					var nine = $('input[name=status_of_mortgage]:checked').val();
						//alert(nine);
			            if(val == 'No' && eight != 'any_cause' && nine == 'first_aprt'){
			              	formQuestionOne('form#formQuestionseventeen','<?= url("/question17") ?>','#ques_17','spinner-ques-16');
			              	var addclass = 'bubble_fifteen testing-refresh ';
							var removeclass = 'bubble_fourteen testing-refresh';
							header_bubble_class_changer(addclass,removeclass);
			            }else {
			           		formQuestionOne('form#formQuestionseventeen','<?= url("/question17") ?>','#ques_18','spinner-ques-16');
			           		last_question_text_value('form#formQuestionseventeen');
			           		var addclass = 'bubble_fifteen bubble_third_filled bubble_fourth_filled testing-refresh';
							var removeclass = 'bubble_fourteen testing-refresh';
							header_bubble_class_changer(addclass,removeclass);
			            }

					
					return false;
				});

			/*=========================Question-17 (Real 17)=============================*/

				$("body").on('submit','form#formQuestionEighteen',function(){
					formQuestionOne('form#formQuestionEighteen','<?= url("/question18") ?>','#ques_18','spinner-ques-17');
					last_question_text_value('form#formQuestionEighteen');
					var addclass = 'bubble_sixteen bubble_third_filled bubble_fourth_filled testing-refresh';
					var removeclass = 'bubble_fifteen testing-refresh';

					
					header_bubble_class_changer(addclass,removeclass);
					return false;
				});

			/*=========================Question-18 (Real 18)=============================*/

				$("body").on('click','.final_submit_registration',function(){
					$('body').removeClass('testing-refresh');
					$('body').addClass('testing-refresh');

		            $('.spinner-ques-18').show();
					setTimeout(function(){ 
				 	$('.spinner-ques-18').hide();
				 		location.reload();
					    window.location.href = "/final_result";
					}, 1000);
		            return false;
		       	});









		/*__________________________________________________________________________
		|
		| AJAX FOR SUBMITTING THE FORMS
		|___________________________________________________________________________
		*/
		function formQuestionOne(formID,url,LoadDiv='#ques_1',spinner='spinner-get-started') {
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
								$(LoadDiv).show();

								$take = $(LoadDiv).offset().top;
								heigh = $(LoadDiv).height() + 120;

							  	$('html, body').animate({
							        scrollTop: $(LoadDiv).offset().top-250
							    }, 2000);
							}, 2000);
							$(formID).find('.custom-error').hide();
							$(formID).find('.errMsg').hide();
							$(formID).find('.errMsg_age').hide();
		           		}else if(data.status == 0){
		                   	$(formID).find('.errMsg').html(errors(data.errors));
		           		}else if(data.status == 5){
		                   	$(formID).find('.errMsg_age').show();
		           		}else{

		           			$(formID).find('.custom-error').show();
		           			$(formID).find('.errMsg').html('חסר ערך מספרי‎');
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



		function last_question_text_value(formID) {
			var formData = $( formID ).serialize();
			url = '<?= url("/question18_data") ?>';
			 	$.ajax({
		           type: "POST",
		           url: url,
		           data: formData, 
		           success: function(data)
		            {
		           		if(data.status == 1){
							
							$('.data-to-render-at-last').html();
							$('.data-to-render-at-last').html('כבר בשלב הנוכחי אני  יכול לגלות לך שהדוח חוסך לך מעל <span class="make_it_green">ל '+data.htmls+'  ש"ח</span><br>מעלות המשכנתא הממוצעת לאנשים עם נתונים דומים לשלך.');
							
		           		}else if(data.status == 0){
		                   	$(formID).find('.errMsg').html(errors(data.errors));
		           		}
		          	}
		        });
		  	return false;
		}










		/*------------------------------------------------------------------------------
		|
		|  Function for header ADD CLASS and REMOVE CLASS FOR  Header bubbles 
		|------------------------------------------------------------------------------*/
		function header_bubble_class_changer(addclass, removeclass) {

			$('body').removeClass(removeclass);
			$('body').addClass(addclass);
			return false;
		}

			/******************************
			    BOTTOM SCROLL TOP BUTTON
			******************************/

			  // declare variable
			  var scrollTop = $(".scrollTop");

			  $(window).scroll(function() {
			    // declare variable
			    var topPos = $(this).scrollTop();

			    // if user scrolls down - show scroll to top button
			    if (topPos > 100) {
			      $(scrollTop).css("opacity", "1");

			    } else {
			      $(scrollTop).css("opacity", "0");
			    }

			  }); // scroll END

			  //Click event to scroll to top
			  $(scrollTop).click(function() {
			    $('html, body').animate({
			      scrollTop: 0
			    }, 800);
			    return false;

			  });


			/*********************************
				STICKY HEADER QUERY
			**********************************/
			  	$(window).scroll(function() {    
				    var scroll = $(window).scrollTop();
				    
				    if (scroll > 50) {
				        $(".advisor").addClass("fixedheader");
				       
				    }else{
				    	$(".advisor").removeClass("fixedheader");
				    }
				});




function male_female_text_change(){

	var ques5m = 'האם היית מגדיר את המצב הכלכלי שלכם כיציב או שאתם מצליחים לחסוך<br> בכל חודש סכום העולה על 1,000 ש"ח?';
	var ques5f = 'האם היית מגדירה את המצב הכלכלי שלכם כיציב או שאתם מצליחים לחסוך<br> בכל חודש סכום העולה על 1,000 ש"ח?';

	var ques6m = 'באילו בנקים אתה מנהל את החשבונות<br> שלך? (ניתן לבחור מספר בנקים במקביל)';
	var ques6f = 'באילו בנקים את מנהלת את החשבונות<br> שלך? (ניתן לבחור מספר בנקים במקביל)';

	var ques7m = 'במידה וישנן הטבות הצטרפות בבנקים אחרים, האם תהיה<br> מוכן לקחת משכנתא בבנק אחר?';
	var ques7f = 'במידה וישנן הטבות הצטרפות בבנקים אחרים, האם את<br> מוכנה לקחת משכנתא בבנק אחר?';

	var ques8m = 'ספר לי בבקשה לשם מה אתה מבקש את המשכנתא?';
	var ques8f = 'ספר לי בבקשה לשם מה את מבקשת את המשכנתא?';

	var ques9m = 'תודה לך, ספר לי בבקשה מה הסטטוס שלך מבחינת לקיחת משכנתא?';
	var ques9f = 'תודה לך, ספרי לי בבקשה מה הסטטוס שלך מבחינת לקיחת משכנתא?';

	var ques10m = 'אם כך, בעוד כמה חודשים תיכנס לדירה?';
	var ques10f = 'אם כך, בעוד כמה חודשים תיכנסי לדירה?';

	var ques11m = 'חשוב שתשים לב שההון העצמי שציינת הוא עבור רכישת הנכס בלבד!<br>הסכום לא יכול לכלול הוצאות נילוות כמו ריהוט,שיפוצים ואגרותת נלוות.';
	var ques11f = 'חשוב שתשימי לב שההון העצמי שציינת הוא עבור רכישת הנכס בלבד!<br>הסכום לא יכול לכלול הוצאות נילוות כמו ריהוט,שיפוצים ואגרותת נלוות.';

	var ques12m = 'אם כך, גובה המשכתא שאותו אתה מבקש מהבנק הוא:';
	var ques12f = 'אם כך, גובה המשכתא שאותו שאת מבקש מהבנק הוא:';

	var ques13m = 'האם אתה מצפה לקבל סכומי כסף משמעותיים בעתיד איתם תוכל לפרוע חלק או את כל המשכנתא?';
	var ques13f = 'האם את מצפה לקבל סכומי כסף משמעותיים בעתיד איתם תוכלי לפרוע חלק או את כל המשכנתא?';

	var ques14m = 'אודה לך אם תוכל לפרט לגבי הלוואות קיימות שאתה עדיין משלם,<br>כדי שנוכל לתת לך תחשיב משכנתא אופטימלי.<br>אנו מתחשבים בכל הנתונים שאתה ממלא.';
	var ques14f = 'אודה לך אם תוכלי לפרט לגבי הלוואות קיימות שאת עדיין משלמת,<br>כדי שנוכל לתת לך תחשיב משכנתא אופטימלי.<br>אנו מתחשבים בכל הנתונים שאתה ממלא.';

	var ques15m = '<p>פרט את כל ההלוואות המיוחדות<br>אשר באפשרותך לקחת</p>';
	var ques15f = '<p>פרטי את כל ההלוואות המיוחדות<br>אשר באפשרותך לקחת</p>';


	var val = $('input[name=gender]:checked').val();

	if(val == "Male"){
		$('.male_female_five').html('');
		$('.male_female_five').html(ques5m);
		$('.male_female_six').html('');
		$('.male_female_six').html(ques6m);

		$('.male_female_seven').html('');
		$('.male_female_seven').html(ques7m);
		$('.male_female_eight').html('');
		$('.male_female_eight').html(ques8m);

		$('.male_female_nine').html('');
		$('.male_female_nine').html(ques9m);
		$('.male_female_ten').html('');
		$('.male_female_ten').html(ques10m);

		$('.male_female_eleven').html('');
		$('.male_female_eleven').html(ques11m);
		$('.male_female_twelve').html('');
		$('.male_female_twelve').html(ques12m);

		$('.male_female_thirteen').html('');
		$('.male_female_thirteen').html(ques13m);
		$('.male_female_fourteen').html('');
		$('.male_female_fourteen').html(ques14m);

		$('.male_female_fifteen').html('');
		$('.male_female_fifteen').html(ques15m);
		
		


	}else{
		$('.male_female_five').html('');
		$('.male_female_five').html(ques5f);
		$('.male_female_six').html('');
		$('.male_female_six').html(ques6f);

		$('.male_female_seven').html('');
		$('.male_female_seven').html(ques7f);
		$('.male_female_eight').html('');
		$('.male_female_eight').html(ques8f);

		$('.male_female_nine').html('');
		$('.male_female_nine').html(ques9f);
		$('.male_female_ten').html('');
		$('.male_female_ten').html(ques10f);

		$('.male_female_eleven').html('');
		$('.male_female_eleven').html(ques11f);
		$('.male_female_twelve').html('');
		$('.male_female_twelve').html(ques12f);

		$('.male_female_thirteen').html('');
		$('.male_female_thirteen').html(ques13f);
		$('.male_female_fourteen').html('');
		$('.male_female_fourteen').html(ques14f);

		$('.male_female_fifteen').html('');
		$('.male_female_fifteen').html(ques15f);

	}










}
male_female_text_change();






					
	});


</script>
</body>
</html>





