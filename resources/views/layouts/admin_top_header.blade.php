@php use Carbon\Carbon; @endphp

<html lang="he">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <title>Admin</title>
    <!-- <link href="images/favicon.ico" rel="shortcut icon"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900|Playfair+Display:400,700,900&display=swap" rel="stylesheet">
    <link href="{{ URL::asset('admin_new/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new/css/datepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new/css/responsive.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body>

    <!-- header starts here -->

    <header>
        <div class="header-top">
            <nav class="navbar d-f j-c-c a-i-c">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="{{url('')}}" target="_blank">
                        <img src="{{ URL::asset('admin_new/images/logo.png') }}" alt="" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}" ><a href="/admin/dashboard">Customers</a></li>
                        <li class="{{ (request()->is('admin/bank_interest')) ? 'active' : '' }}"><a href="/admin/bank_interest">Bank interest tables</a></li>
                        <li class="{{ (request()->is('admin/clerks')) ? 'active' : '' }}"><a href="/admin/clerks">Clerk tables</a></li>
                        <li class="{{ (request()->is('admin/settings')) ? 'active' : '' }}"><a href="/admin/settings">settings</a></li>
                    </ul>
                </div>
                <div class="date-n-time-container">System Date & Time: <span class="date">{{Carbon::now('Israel')}}</span><span class="time"></span></div>
                <div class="notifications-container d-f">
                    <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> <span class="notificaions-badge"></span> </a>
                    <a href="javascript:void(0);"> <i class="fa fa-bell"></i> <span class="notificaions-badge"></span> </a>
                </div>
                <div class="user-profile d-f a-i-c">
                    <div class="user-img">
                        <div> <i class="fa fa-user"></i> </div>
                    </div>
                    <div class="user-name"> <a href="javascript:void(0);" class="dropdown-toggle d-f a-i-c" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-email="{{Auth::user()->email}}">{{Auth::user()->email}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/logout">Log Out</a></li>
                           <!--  <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
