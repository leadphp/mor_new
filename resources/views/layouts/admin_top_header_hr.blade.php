<?php use Carbon\Carbon; ?>
<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="{{ URL::asset('admin_new_hr/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new_hr/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new_hr/css/datepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new_hr/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new_hr/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new_hr/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_new_hr/css/responsive.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body>

    <!-- header starts here -->

    <header>
        <div class="header-top">
            <nav class="navbar d-f j-c-c a-i-c">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="{{url('')}}" target="_blank">משכנתא דיגיטלית</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav d-f">
                        <li class="{{ (request()->is('admin/dashboard-hr')) ? 'active' : '' }}"><a href="{{url('/admin/dashboard-hr')}}">לקוחות</a></li>
                        <li class="{{ (request()->is('admin/bank_interest-hr')) ? 'active' : '' }}"><a href="{{url('/admin/bank_interest-hr')}}">טבלאות ריבית בנקאיות</a></li>
                        <li class="{{ (request()->is('admin/clerks-hr')) ? 'active' : '' }}"><a href="{{url('/admin/clerks-hr')}}">טבלאות פקידות</a></li>
                        <li class="{{ (request()->is('admin/settings-hr')) ? 'active' : '' }}"><a href="{{url('/admin/settings-hr')}}">הגדרות</a></li>
                    </ul>
                </div>
                <div class="date-n-time-container">תאריך ושעת מערכת: <span class="date">{{Carbon::now('israel')}}</span><span class="time"></span></div>
                <div class="notifications-container d-f">
                    <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> <span class="notificaions-badge"></span> </a>
                    <a href="javascript:void(0);"> <i class="fa fa-bell"></i> <span class="notificaions-badge"></span> </a>
                </div>
                <div class="user-profile d-f a-i-c">
                    <div class="user-img">
                        <div> <i class="fa fa-user"></i> </div>
                    </div>
                    <div class="user-name"> <a href="javascript:void(0);" class="dropdown-toggle d-f a-i-c" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->email}}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">להתנתק</a></li>
                           <!--  <li><a href="javascript:void(0);">פעולה נוספת</a></li>
                            <li><a href="javascript:void(0);">עוד משהו כאן</a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- header ends here -->