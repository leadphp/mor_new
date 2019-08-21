<!DOCTYPE html>
<html lang="he">
<head>
  @include('layouts.head')
</head>
<body>

<!-- header starts here -->
<header>

  @include('layouts.nav')

</header>
<!-- header ends here -->

<!-- banner section starts here -->
  
  @include('layouts.sections')
  @yield('content')

<!-- choose us section ends here -->

<!-- footer starts here -->
<footer>

  @include('layouts.footer')

</footer>
<!-- footer ends here -->

<!-- footer scripts starts here -->

  @include('layouts.footer-scripts')

<!-- footer scripts ends here -->

</body>
</html>


