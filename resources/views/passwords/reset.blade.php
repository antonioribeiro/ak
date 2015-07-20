@extends('layouts.login')

@section('container')
    <div class="section_header">
        <h3>{{'captions.change-password'}}</h3>
    </div>
    <div class="row login">
        <div class="col-sm-5 left_box">
            <h4>{{'paragraphs.change-your-password'}}</h4>

            @include('partials.login-sayings')
        </div>

        <div class="col-sm-6 signin_box">
            <div class="box">
                <div class="box_cont">
                    <h4>{{'paragraphs.please-enter-your-password-confirmation-data'}}</h4>

                    <br>

                    <div class="form">
                        {!! Form::opener(['route' => 'password.reset', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
                            {!! Form::hidden('token', $token) !!}

                            <div class="form-group">
                                {!! Form::text('email', null, ['id' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control', 'type' => 'email', 'autofocus']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::password('password', ['id' => 'password', 'placeholder' => t('captions.password'), 'class' => 'form-control', 'type' => 'password', 'value' => '']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::password('password_confirmation', ['id' => 'password', 'placeholder' => t('captions.password-confirmation'), 'class' => 'form-control', 'type' => 'password', 'value' => '']) !!}
                            </div>

                            <input type="submit" value="{{'captions.change-password'}}">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
