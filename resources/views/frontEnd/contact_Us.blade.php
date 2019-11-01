<html lang="he">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="robots" content="index, follow">
      <title>אודות</title>
      <!-- <link href="images/favicon.ico" rel="shortcut icon"> -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/owl.carousel.min.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
   </head>
   <body>
    <section class="page-contact">
      <!-- header starts here -->
      @include('layouts.header_page_menu')
      <!-- header ends here -->

      <!-- inner banner starts here -->
      <section class="inner-banner">
         <div class="container">
            <div class="inner-banner-content">
               <h1>צור קשר</h1>
               <span class="subheading">משכנתא דיגיטלית > צור קשר </span>
            </div>
         </div>
      </section>
      <!-- inner banner ends here -->

      <!-- why us starts here -->
      <section class="why-us">
         <div class="container">
       
            <div class="heading-container blue">
               <img src="images/angle-up-blue.png" alt="">
               <h2>חשוב לנו שנדבר</h2>
               <span class="subheading">אנחנו כאן למענכם</span>
            </div>
         
         <div class="box_3">
            <div class="col-sm-4">
               <div class="overlay-boxIn">
                 <h2>טלפון</h2>
                 <p>073-2112687 </p>
                 <div class="icon-contact">
                   <i class="fa fa-phone"></i>
                 </div>
               </div>
            </div>
            <div class="col-sm-4">
                 <div class="overlay-boxIn">
                 <h2>אימייל</h2>
                 <p>info@mashkantaOnline.co.il</p>
                 <div class="icon-contact">
                   <i class="fa fa-envelope"></i>
                 </div>
               </div>
            </div>
            <div class="col-sm-4">
                 <div class="overlay-boxIn">
                 <h2>כתובתנו</h2>
                 <p>יצחק שדה 17, תל אביב</p>
                 <div class="icon-contact">
                   <i class="fa fa-map-marker"></i>
                 </div>
               </div>
            </div>
         </div>
         
            <div class="why-us-content d-f a-i-c j-c-c">
               <div class="owl-carousel owl-theme why-us-owl">
              <div class="item aOne">
               <div class="why-us-container d-f a-i-c j-c-c">
                  <p>תמהיל משכנתא 
            מותאם אישית</p>
                 </div>
              </div>
              <div class="item aTwo">
               <div class="why-us-container d-f a-i-c j-c-c">
                  <p>חיסכון 
                  בעלויות 
                  ייעוץ</p>
               </div>
              </div>
              <div class="item aThree">
               <div class="why-us-container d-f a-i-c j-c-c">
                  <p>אלגוריתם חכם 
                  על בסיס נסיון 
                  של עשור</p>
               </div>
              </div>
              <div class="item aFour">
               <div class="why-us-container d-f a-i-c j-c-c">
                  <p>מכרז ריביות 
                  בין 8 הבנקים 
                  הגדולים
                  בישראל</p>
               </div>
              </div>
              <div class="item aFive">
               <div class="why-us-container d-f a-i-c j-c-c">
                  <p>הפניה לפקיד
                  הבנק המתאים</p>
               </div>
              </div>
            </div>
           
               <div class="why-us-form">
                  <div class="heading-container">
                     <img src="images/angle-up-white.png" alt="">
                     <h2>צור קשר</h2>
                     <span class="subheading">מחכים לשמוע מכם</span>
                  </div>
                  <form>
                     <div class="row clear">
                        <div class="col-sm-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="phone" placeholder="טלפון" name="phone" value="">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <input type="email" class="form-control" id="email" placeholder="אימייל" name="email" value="">
                           </div>
                        </div>
                        
						<div class="col-sm-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="full-name" placeholder="שם מלא" name="full-name" value="">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <textarea class="form-control" id="message" placeholder=" ..השאר הודעה"></textarea>
                        </div>
                        <div class="col-sm-12 text-center">
                           <button type="submit" class="main-button button-dark">שלח</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- why us ends here -->
      <!-- footer starts here -->
      <footer>
       @include('layouts.footer')
      </footer>
      <!-- footer ends here -->
   </section>
   
      <script src="js/jquery.min.js"></script>
      <script src="js/owl.carousel.min.js"></script> 
      <script src="js/bootstrap.min.js"></script>
      <script src="js/custom.js"></script>

   </body>
</html>