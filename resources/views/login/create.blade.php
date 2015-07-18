@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">AK Administrador</h3>
                </div>
                <div class="panel-body">
                    {!! Form::opener(['route' => 'login', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
                        <fieldset>
                            <div class="form-group">
                                {!! Form::text('email', null, ['id' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control', 'type' => 'email', 'autofocus']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('password', ['id' => 'password', 'placeholder' => 'Senha', 'class' => 'form-control', 'type' => 'password', 'value' => '']) !!}
                            </div>
                            <div class="note">
                                <a href="{!! route('password') !!}">Esqueci minha senha</a>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Lembrar de mim
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input id="sign-in-button" type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
