 <!-- <script src="{{ URL::asset('js/jquery.min.js') }}"></script> -->
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script> 
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="{{ URL::asset('js/jquery.ui.slider-rtl.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('js/validate.js') }}"></script>

<div id="loginModal" class="modal fade just-for-testing" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
            
        <ul class="nav nav-tabs login-popup-custom">
          <!-- <li><a data-toggle="tab" href="#login">login</a></li>
          <li class="active"><a data-toggle="tab" href="#signup">sign up</a></li> -->
          <li class="active"><a data-toggle="tab" href="#login">התחברות</a></li>
          <li><a data-toggle="tab" href="#signup">הרשמה</a></li>
        </ul>

<div class="tab-content">

<!-- Register Form Start -->
  <div id="signup" class="tab-pane fade ">
    <div class="modal-header">
          <button type="button" id="reset_form" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">הרשמה</h4>
        </div>

        <!-- Success Mesaage for user registration -->
        <div class="message_data"></div>

        <div class="modal-body-inner">
        <p>להרשמה מהירה ובטוחה</p>
            <a href="javascript:void(0);" class="link-facebook">הרשמה  באמצעות facebook<i class="fa fa-facebook-f"></i></a>
            <p>להרשמה סטנדרטית</p>

            <div class="login-modal-form">
               <h4>הרשמה עם שם משתמש וסיסמא</h4>

               <form method="POST" action="{{ URL('/register_data') }}" id="register_form_validation">
                  {{ csrf_field() }}
                  <input type="hidden" name="role" value="user">
                  <div class="half">
                     <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label>שם פרטי:</label>
                        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
                        @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                        @endif
                     </div>
                  </div>
                  <div class="half">
                     <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label>שם משפחה:</label>
                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                        @if ($errors->has('last_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                        @endif
                     </div>
                  </div>
                  <div class="full">
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>כתובת אימייל:</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                      <!-- <label class="error email_validate" for="email"></label> -->
                        @if ($errors->has('email'))
                          <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif

                     </div>
                  </div>
                  <div class="full">
                     <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        <label>טלפון נייד:</label>
                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus>
                        @if ($errors->has('phone_number'))
                        <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                        @endif
                     </div>
                  </div>
                  <div class="full">
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>יצירת סיסמא:</label>
                           <input id="password" type="password" class="form-control" name="password" required>
                           @if ($errors->has('password'))
                           <span class="help-block">
                           <strong>{{ $errors->first('password') }}</strong>
                           </span>
                           @endif
                     </div>
                  </div>
                  <div class="full">
                     <div class="form-group">
                        <label>חזרה על הסיסמא:</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                     </div>
                  </div>

                  <div class="full">
                    <div class="custom-check">
                    <div class="form-group">
                    <input type="checkbox" id="login-modal-check" class="form-control" name="terms_and_condition" value="1">
                      <label for="login-modal-check">קראתי ואני מסכים  <a href="terms-and-condition"> לתנאי השימוש </a> <br class="hideDesktop"> וכן  <a href="privacy"> למדיניות הפרטיות </a>  בקישור.</label>
                    </div>
                    </div>
                  </div>


                  <button type="submit" class="reg_btn main-button button-dark">אישור הרשמה</button>
               </form>
            </div>

        </div>
        <div class="modal-footer bottom-line-popup-login">
        כבר נרשמת בעבר? עבור למסך <a data-toggle="tab"  class="loginPop" href="#login">התחברות</a>
      </div>  </div>
<!-- Register Form End -->

<!-- Login Form Start  -->
  <div id="login" class="tab-pane fade in active">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">התחברות משתמש קיים</h4>
        </div>

        <div class="login_msg"></div>


        <div class="modal-body-inner">


        <p>כניסה מהירה ובטוחה</p>
        <a href="javascript:void(0);" class="link-facebook">התחברות באמצעות facebook<i class="fa fa-facebook-f"></i></a>
        <p>או</p>

        <div class="login-modal-form">

          <form class="form-horizontal" id="login_form" method="POST" action="{{ URL('/login_data') }}">
            {{ csrf_field() }}
            <div class="full">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>מייל:</label>
                    <input id="login_email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                  
                    @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
            </div>
            <div class="full">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>סיסמא:</label>
                        <input id="login_password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
            </div>
            <button type="submit" id="login_btn" class="main-button button-dark">כניסה</button>
          </form>
        </div>
        </div>
        <div class="modal-footer bottom-line-popup-login">
        פעם ראשונה שלך פה? עבור למסך <a data-toggle="tab" class="signUpPop" href="#signup">הרשמה</a>
      </div>
  </div>
<!-- Login Form End -->
</div>
</div>
    </div>

  </div>
</div>

<script src="{{ URL::asset('js/validate.js') }}"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>
<script>

/*
|--------------------------------------------------------------------------
| Ajax for register form
|--------------------------------------------------------------------------
*/
    $(document).ready( function( $ ) {

        // Ajax for our form
        $('#register_form_validation').on('submit', function(event){
            event.preventDefault();

            var formData = {
                fname        : $('input[name=first_name]').val(),
                lname        : $('input[name=last_name]').val(),
                email        : $('input[name=email]').val(),
                phone        : $('input[name=phone_number]').val(),
                password     : $('input[name=password]').val(),
                conf_password: $('input[name=password_confirmation]').val(),
            }
            
            $.ajax({
                type: "POST",
                url: '/register_data',
                data: $(this).serialize(),
 

             success: function ( msg ) {

                if(msg.status == 0){
                    $(".message_data").html("");
                    $.each(msg.errors, function( index, value ) 
                    {
                      //alert(value);
                        $(".message_data").append("<div>"+value+"</div>");
                    });

                } else{  
                    $(".message_data").addClass("suc_reg");            
                    $(".message_data").html("המשתמש נרשם בהצלחה");

                    setTimeout(function(){ 
                      $('#loginModal').modal('hide');
                             location.reload();   
                          //window.location.href = '/questions_new'; 
                            // window.location.href = '/questions_flow'; 
                    }, 3000);

                }                 
             }
              
            });     
            
        });
    });

/*
|--------------------------------------------------------------------------
| Ajax for login form
|--------------------------------------------------------------------------
*/
$(document).ready( function( $ ) {

        // Ajax for our form
        $('#login_form').on('submit', function(event){
            event.preventDefault();
            
            $.ajax({
                type: "POST",
                url: '/login_data',
                data: $(this).serialize(),
 

             success: function ( msg ) {

                if(msg.status == 0){
                    $(".login_msg").addClass("log_err");
                    $(".login_msg").html("אישורים לא חוקיים");  //invalid credentails

                } else{   
                    $(".login_msg").addClass("log_suc");
                    $(".login_msg").html("התחבר בהצלחה!"); //User login succesfully

                    setTimeout(function(){ 
                             //window.location.href = '/questions_new'; 
                             $('#loginModal').modal('hide');
                             location.reload();
         
                             //window.location.href = '/questions_flow'; 
                    }, 3000);   
                }                 
             }
              
            });     
            
        });
    });

/*
|--------------------------------------------------------------------------
| Reset the form data
|--------------------------------------------------------------------------
*/
 $('#reset_form').click(function(){
      $('#register_form_validation')[0].reset();              
 });
 $('.loginPop').click(function(){
   $('.login-popup-custom li:first-child').addClass('active');
   $('.login-popup-custom li:last-child').removeClass('active');
 });
 $('.signUpPop').click(function(){
   $('.login-popup-custom li:first-child').removeClass('active');
   $('.login-popup-custom li:last-child').addClass('active');
 });
</script>

