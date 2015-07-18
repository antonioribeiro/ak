@extends('pragmarx/sdk::html')

@section('html.head')
    <!-- Styles -->
    <link href="{{ url('/') }}/templates/cleancanvas/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/bootstrap-overrides.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/templates/cleancanvas/css/compiled/theme.css" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="{{ url('/') }}/templates/cleancanvas/css/compiled/blog.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@stop

@section('html.body')
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

    @yield('contents')

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{ url('/') }}/templates/cleancanvas/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/templates/cleancanvas/js/theme.js"></script>
@stop

@section('html.footer')
    @include('partials.footer')
@stop

