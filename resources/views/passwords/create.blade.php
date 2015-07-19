@extends('layouts.login')

@section('container')
    <div class="section_header">
        <h3>{{'captions.forgot-your-password'}}</h3>
    </div>
    <div class="row login">
        <div class="col-sm-5 left_box">
            <h4>{{'paragraphs.recover-your-password'}}</h4>

            @include('partials.login-sayings')
        </div>

        <div class="col-sm-6 signin_box">
            <div class="box">
                <div class="box_cont">
                    <h4>{{'paragraphs.please-enter-your-email-for-password-reset'}}</h4>

                    <br>

                    <div class="form">
                        {!! Form::opener(['route' => 'password', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
                            <div class="form-group">
                                {!! Form::text('email', null, ['id' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control', 'type' => 'email', 'autofocus']) !!}
                            </div>

                            <div class="forgot">
                                <span>{{'paragraphs.remembered-your-password'}}</span>
                                <a href="{!! route('auth.login') !!}">{{'captions.enter'}}</a>
                            </div>

                            <input type="submit" value="{{'captions.reset-password'}}">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
