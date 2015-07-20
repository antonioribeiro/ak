@extends('layouts.login')

@section('container')
    <div class="section_header">
        <h3>{{'captions.login'}}</h3>
    </div>
    <div class="row login">
        <div class="col-sm-5 left_box">
            <h4>{{'paragraphs.login-to-your-account'}}</h4>

            @include('partials.login-sayings')
        </div>

        <div class="col-sm-6 signin_box">
            <div class="box">
                <div class="box_cont">
                    @include('login.social')

                    <div class="division">
                        <div class="line l"></div>
                        <span>{{'captions.or'}}</span>
                        <div class="line r"></div>
                    </div>

                    <div class="form">
                        {!! Form::opener(['route' => 'auth.login', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
                            <div class="form-group">
                                {!! Form::text('email', null, ['id' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control', 'type' => 'email', 'autofocus']) !!}

                            <div class="form-group">
                                {!! Form::password('password', ['id' => 'password', 'placeholder' => t('captions.password'), 'class' => 'form-control', 'type' => 'password', 'value' => '']) !!}
                            </div>

                            <br>

                            <div class="forgot">
                                <span>{{'paragraphs.do-not-have-account'}}</span>
                                <a href="{!! route('register') !!}">{{'captions.register'}}</a>
                            </div>

                            <div class="forgot">
                                <span>{{'paragraphs.do-not-remember-password'}}</span>
                                <a href="{!! route('password') !!}">{{'paragraphs.recover-it'}}</a>
                            </div>

                            <input type="submit" value="{{'captions.enter'}}">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


