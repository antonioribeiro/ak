@extends('layouts.login')

@section('container')
    <div class="section_header">
        <h3>{{'captions.register'}}</h3>
    </div>
    <div class="row login">
        <div class="col-sm-5 left_box">
            <h4>{{'paragraphs.create-an-account'}}</h4>

            @include('partials.login-sayings')
        </div>

        <div class="col-sm-6 signin_box">
            <div class="box">
                <div class="box_cont">
                    @if (isset($invite_only) && $invite_only)
                        @include('registration.invite-only')
                    @else
                        @include('registration.form')
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
