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
			<div class="message d-i-f f-d-c spinner" style="display:none;">
				<span class="chat-icon"><img src="images/chat-icon.png" alt=""/></span>
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>



	  </div>
	{{ csrf_field() }}
</form>


 <div id="loadQuestionOne" class="loading-trans"></div>




@if(isset($ques1))
<script type="text/javascript">
	$(document).ready(function(){
	$(".two").show();
	$(".three").show();
	$(".four").show();
	$(".five").show();
	});

</script>
@else
<script type="text/javascript">

	$(document).ready(function(){
		$('body').on('click','.main-button-getStarted',function(){
			$("body").addClass('hide_btn_spinner');	
		});
		var cc = 	$('#formQuestionOne').hasClass( "formQuestionOne" );
	//alert(cc);
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
				var iScroll = $(window).scrollTop();
		        iScroll = iScroll + 100;
		        $('html, body').animate({
		            scrollTop: iScroll
		        }, 1000);
			},4000);

			setTimeout(function(){
				$('.spinner').hide();
				$(".four").show();
				$('.spinner').show();
				var iScroll = $(window).scrollTop();
		        iScroll = iScroll + 150;
		        $('html, body').animate({
		            scrollTop: iScroll
		        }, 1000);
			},6000);

			setTimeout(function(){
				$('.spinner').hide();
				$(".five").show();
				var iScroll = $(window).scrollTop();
		        iScroll = iScroll + 200;
		        $('html, body').animate({
		            scrollTop: iScroll
		        }, 1000);
			},8000);

		}
	});
</script>
@endif
<!-- <br></br>
<br></br>
 -->