<meta name="csrf-token" content="{{ csrf_token() }}">
  <nav class="navbar">
  <div class="container-fluid d-f a-i-c j-c-s-b">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('')}}"><img src="images/logo.png" alt=""/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right d-f">
          <li><a href="{{url('')}}">ראשי</a></li>
        <li><a href="{{url('/how-it-works')}}">איך זה עובד</a></li>
        <li><a href="{{url('/questions_flow')}}">יעוץ משכנתא אונליין</a></li>
        <li><a href="{{url('/compare-offers')}}">השווה להצעה קיימת</a></li>
        <li><a href="{{url('/about-us')}}">אודות </a></li>
        <li><a href="{{url('/contact-us')}}">יצירת קשר</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->

    <div class="navbar-button">
    <!-- Trigger the modal with a button -->
        @guest
            <a data-toggle="modal" data-toggle="modal" data-target="#loginModal" class="main-button">הרשמה והתחברות</a>
        @else
            <a class="main-button" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <span>להתנתק</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
        @endguest
    </div>
  </div><!-- /.container-fluid -->
</nav>






