<meta name="csrf-token" content="{{ csrf_token() }}">
  <nav class="navbar homeHeader">
  <div class="container-fluid d-f a-i-c j-c-s-b">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hideMobile" href="{{url('')}}"><img src="images/logo.png" alt=""/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     @include('layouts.navoptionsfrontend')
   <!-- /.navbar-collapse -->
  
    <div class="navbar-button @guest loggedin @else @endguest">
    <!-- Trigger the modal with a button -->

        @guest
           <!-- <img src="images/setting-top.png" class="case-of-login" /> --> <a data-toggle="modal" data-toggle="modal" data-target="#loginModal" class="main-button">התחברות והרשמה</a>
        @else
            <a href="/bankinfoStep" class="main-button button-yellow top-btn_A"><span>פאנל ניהול <br>המשכנתא שלי </span><img src="images/setting-top.png" /></a>
<a class="main-button normalBar" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <span >התנתקות</span>
            <!-- <span>פאנל ניהול</span> -->
            </a>
            <a class="main-button stickyBar" href="{{url('')}}">
            <span>פאנל ניהול </span>
            <!-- <span>פאנל ניהול</span> -->
            </a>
           
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
        @endguest
    </div>
  </div><!-- /.container-fluid -->
</nav>






