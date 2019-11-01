<?php 
$ques12 = \App\question_survey::where('user_id',\Auth::user()->id)->where('question_id','14')->get();

if(count($ques12) != 0){
$first = $ques12[3]->meta_value;

}else{
$first = '0';	
}
?>
@include('layouts.head')
<body>
    <div class="main-wrapper steps payment-step pay-step-3 send-offer done-reg">
        <!-- mortgage offers starts here -->
        <section class="mortgage-offers">
            <div class="container">
			    
                <div class="reg logo">
					<a href="{{url('')}}">
					  <img src="images/logo.png" />
					</a>
				</div>

				<!-- <div class="backbutton">
					
					<a href="{{url('/questions_flow')}}">
					  < Back
					</a>
				</div> -->
                <div class="mortgage-offers-border">
					<div class="mortgage-offers-inner">
						 <div class="inner-success-data text-center">
						   <h1>
						     תודה, הצעתך נשלחה ברגעים אלו<br>
וכבר נגלה לך שאנחנו יכולים לחסוך  <br>
                             לפחות  <span><?php echo number_format($first); ?> <img src="images/step_3_icon.png" /> !</span>
						   </h1>
						   <div class="col-md-12">
						     <img src="{{ URL:: asset('images/pointer-icon.png') }}" class="col-img_" />
						   </div>
						   <div class="bottom-bg">
							  <div class="last-bt-A">
						    	<button type="button" class="custom4_6">המשך להפקת דוח המשכנתא והפניה לסניף הבנק</button>
					          </div>
						   </div>
						 </div>
					</div>
                </div>
            </div>
        </section>
		

        <!-- mortgage offers ends here -->

        <!-- footer starts here -->

       <footer class="no-bg-footer">
		  <div class="container-fluid">
			<div class="footer-content d-f a-i-c j-c-s-b">
			  <div class="footer-nav">
			   <ul class="d-f">
				 <li><a href="about-us.html">איך זה עובד?</a></li>
				 <li><a href="javascript:void(0);">ייעוץ משכנתא אונליין </a></li>
				 <li><a href="javascript:void(0);">דוח משכנתא לדוגמא</a></li>
				 <li><a href="javascript:void(0);">השווה להצעה קיימת שקיבלת</a></li>
				 <li><a href="javascript:void(0);">אודות</a></li>
				 <li><a href="javascript:void(0);">צור קשר</a></li>
			   </ul>
			  </div>
			  <div class="copyright-container">
				<p>כל הזכויות שמורות 2016  מתן חברה לייעוץ משכנתאות בע”מ</p>
			  </div>
			</div>
		  </div>
			  <div class="created-by">
				<p>Created with <img src="{{ URL:: asset('images/heart-icon.png') }}" alt=""> by <span>StartTECH</span></p>
			  </div>
		</footer>



      @include('layouts.footer-scripts')
<script type="text/javascript">
	window.onhashchange = function(e) {
	    window.location.replace("www.google.com");
    }
</script>