    <!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="robots" content="index, follow">
<title>Step 4.5</title>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="css/bootstrap-select.min.css" rel="stylesheet">
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/south-street/jquery-ui.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<script src="{{ URL::asset('js/jquery.min.js') }}"></script> 
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script> 
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="{{ URL::asset('js/jquery.ui.slider-rtl.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('js/validate.js') }}"></script>
</head>
<body>

<!-- advisor starts here -->
<nav class="headerPayment">
<div class="advisor">
<div class="container">
  <div class="row">
    <div class="col-lg-3 text-center mobileTtop">
      <div class="advisor-container">
        <div class="advisor-image">
          <img src="images/management-panel-img.png" alt="" class="forMobileH"/>
          <img src="images/advisor.png" alt="" class="forLargeH"/>
        </div>
        <div class="advisor-text">
            <div class="forMobileH">פאנל ניהול</div>
            <div class="forLargeH">מתן יועץ המשכנתא</div>
        </div>
      </div>
    </div>
    <div class="col-sm-9">
      <div class="advisor-header d-f a-i-c">
        <a href="{{url('')}}" class="logo-container">
          <img src="images/logo.png" alt=""/>
        </a>
        <div class="advisor-toggle_bar">
          <i class="fa fa-bars"></i> 
        </div>
        <div class="advisor-nav t">
          <ul>
            <li><a href="{{url('/about-us')}}">מי אנחנו? </a></li>
            <li><a href="{{url('/how-it-works')}}">איך זה עובד?</a></li>
            <li><a href="{{url('/contact-us')}}">תיאום פגישה עם יועץ משכנתא</a></li>
            <li><a href="{{url('/contact-us')}}">צור קשר</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- advisor ends here -->

<!-- levels starts here -->

<div class="level step-2">
  <div class="container">
    <div class="level-content d-f a-i-c j-c-s-b">
    <a href="#" class="level-call a-i-c j-c-c button-call-global-payment">
      <img src="images/phone-icon.png" alt=""/>
    </a>
    <div class="navigate-steps">
      <h4>לחץ על הבועות על מנת לנווט בין השלבים:</h4>
    <ul class="d-f a-i-c">
      <li class="d-f a-i-c j-c-c f-d-c">
        <span>שלב 1</span>
        <span>צפה בדוח המשכנתא  </span>
        <img src="images/steps-icon-2.png" alt="" />
      </li>
      <li class="d-f a-i-c j-c-c f-d-c">
        <span> שלב 2 </span>
        <span>השלמת נתונים   </span>
        <span>לבנק  </span>
        <img src="images/steps-icon-3.png" alt="" />
      </li>
      <li class="d-f a-i-c j-c-c f-d-c">
        <span> שלב 3 </span>
        <span>הדפס הצעות משכנתא דומות  </span>
        <img src="images/steps-icon-4.png" alt="" />
      </li>
    </ul>
    </div>
    <div class="management-panel">
      <h4>פאנל ניהול <br>
המשכנתא שלי</h4>
<img src="images/management-panel-img.png" alt=""/>
    </div>
    </div>
  </div>
</div>
</nav>
<!-- levels ends here -->







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




<script type="text/javascript">
  






  
</script>