@extends('layouts.blank')

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

@section('body.heading')
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ url('/') }}" class="navbar-brand"><strong>{{ $site_name }}</strong></a>
            </div>

            @include('partials.menu')
        </div>
    </div>
@stop

@section('body.contents')
    <div id="blog">
        <div class="container">
            @include('notifications.flash')

            @yield('contents')
        </div>
    </div>
@stop

@section('body.footer')
    @include('partials.footer')
@stop
