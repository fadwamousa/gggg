<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Codex Admin Template</title>

    <!-- Bootstrap -->
    <link href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/waves.min.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/nanoscroller.css')}}">
    <link href="{{asset('admin/css/morris-0.4.3.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/menu-light.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">


    <link href="{{asset('admin/css/app.min.1.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/fullcalendar.min.css')}}" rel="stylesheet">

    <link href="{{asset('admin/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/color.css')}}" rel="stylesheet">
    <link href="{{asset('admin/js/c3/c3.min.css')}}" rel="stylesheet">

    @yield('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fixed-navbar fixed-sidebar">
<!-- Static navbar -->
<!-- Simple splash screen-->
<div class="splash"><div class="splash-title"><div class="spinner">
            <img src="{{asset('admin/images/loading-new.gif')}}" alt=""/>
        </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
