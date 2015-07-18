@extends('pragmarx/sdk::html')

@section('html.head')
    <!-- Styles -->
    <link href="{{ url('/') }}/templates/cleancanvas/css/bootstrap/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/bootstrap-overrides.css" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/templates/cleancanvas/css/compiled/theme.css" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/sign-in.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/blog.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@stop

@section('html.body')
    @yield('body.heading')

    @yield('body.contents')

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{ url('/') }}/templates/cleancanvas/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/templates/cleancanvas/js/theme.js"></script>

    @yield('body.footer')
@stop

