@extends('pragmarx/sdk::html')

@section('html.head')
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <!-- Bootstrap -->
    <link href="{{ url('/') }}/templates/cleancanvas/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <script src="{{ url('/') }}/templates/cleancanvas/js/bootstrap.min.js"></script>

    <!-- Bootstrap Overrides -->
    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/bootstrap-overrides.css" type="text/css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/templates/cleancanvas/css/compiled/theme.css" />

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/blogpost.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/sign-in.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/blog.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/blogpost.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/lib/animate.css" type="text/css" media="screen" />

    <!-- Raty -->
    <link rel="stylesheet" href="{{ url('/') }}/vendor/raty/lib/jquery.raty.css" type="text/css" media="screen" />

    <!-- Application CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/css/app.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@stop

@section('html.body')
    @yield('body.heading')

    @yield('body.contents')

    @yield('body.footer')

    <!-- Theme -->
    <script src="{{ url('/') }}/templates/cleancanvas/js/theme.js"></script>

    <!-- Raty -->
    <script src="{{ url('/') }}/vendor/raty/lib/jquery.raty.js"></script>

    @yield('javascript')
@stop

