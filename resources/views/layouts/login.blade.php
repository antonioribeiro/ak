@extends('layouts.main-blank')

@section('body.contents')
    <div id="sign_in2">
        <div class="container">
            @include('notifications.flash')
            @yield('container')
        </div>
    </div>
@stop
