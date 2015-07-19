@extends('layouts.blank')

@section('body.contents')
    <div id="sign_in2">
        <div class="container">
            <div class="section_header">
                <h3>Login</h3>
            </div>
            <div class="row login">
                <div class="col-sm-5 left_box">
                    <h4>{{'paragraphs.login-to-your-account'}}</h4>

                    <div class="perk_box">
                        <div class="perk">
                            <span class="icos ico1"></span>
                            <p>{{'paragraphs.manage-your-data-safely'}}</p>
                        </div>
                        <div class="perk">
                            <span class="icos ico2"></span>
                            <p>{{'paragraphs.manage-your-data-safely'}}</p>
                        </div>
                        <div class="perk">
                            <span class="icos ico3"></span>
                            <p>{{'paragraphs.configure-everything-you-need'}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 signin_box">
                    <div class="box">
                        <div class="box_cont">
                            <div class="social">
                                <a href="#" class="circle facebook">
                                    <img src="{{ url('/') }}/templates/cleancanvas/img/face.png" alt="">
                                </a>
                                <a href="#" class="circle twitter">
                                    <img src="{{ url('/') }}/templates/cleancanvas/img/twt.png" alt="">
                                </a>
                                <a href="#" class="circle gplus">
                                    <img src="{{ url('/') }}/templates/cleancanvas/img/gplus.png" alt="">
                                </a>
                            </div>

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
                                        {!! Form::password('password', ['id' => 'password', 'placeholder' => '{{'password'}}', 'class' => 'form-control', 'type' => 'password', 'value' => '']) !!}

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
        </div>
    </div>
@stop


