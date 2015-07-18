@extends('layouts.blank')

@section('body.contents')
    <div id="sign_in2">
        <div class="container">
            <div class="section_header">
                <h3>Login</h3>
            </div>
            <div class="row login">
                <div class="col-sm-5 left_box">
                    <h4>Entre na sua conta</h4>

                    <div class="perk_box">
                        <div class="perk">
                            <span class="icos ico1"></span>
                            <p><strong>Administre </strong> seus dados de forma completa e segura.</p>
                        </div>
                        <div class="perk">
                            <span class="icos ico2"></span>
                            <p><strong>Organize e Leia</strong> seu clipping, recebendo apenas o que te interessa, e compartilhe com seus colaboradores.</p>
                        </div>
                        <div class="perk">
                            <span class="icos ico3"></span>
                            <p><strong>Configure</strong> tudo o que for necessário para ter uma experiência de clipping realmente agradável.</p>
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
                                <span>ou</span>
                                <div class="line r"></div>
                            </div>

                            <div class="form">
                                {!! Form::opener(['route' => 'auth.login', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
                                    {!! Form::text('email', null, ['id' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control', 'type' => 'email', 'autofocus']) !!}

                                    {!! Form::password('password', ['id' => 'password', 'placeholder' => 'Senha', 'class' => 'form-control', 'type' => 'password', 'value' => '']) !!}

                                    <br>

                                    <div class="forgot">
                                        <span>Não possui uma conta?</span>
                                        <a href="{!! route('register') !!}">Registre-se</a>
                                    </div>

                                    <div class="forgot">
                                        <span>Não lebra a senha?</span>
                                        <a href="{!! route('password') !!}">Recupere-a</a>
                                    </div>

                                    <input type="submit" value="Entrar">
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
