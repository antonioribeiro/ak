@extends('layouts.blank')

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
                <a href="{{ route('home') }}" class="navbar-brand"><strong>{{ $site_name }}</strong></a>
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
