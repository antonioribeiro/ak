@extends('layouts.login')

@section('container')
    <div class="well no-padding">
        {!! Form::opener(['route' => 'password.reset', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
            <header>
                {{'captions.forgot-password'}}
            </header>

            <fieldset>
                <section>
                    <label class="label">{{'paragraphs.type-your-email-address'}}</label>
                    <label class="input"> <i class="icon-append fa fa-envelope"></i>
                        {!! Form::text('email', null, ['id' => 'email']) !!}
                        <b class="tooltip tooltip-top-right"><i class="fa fa-envelope txt-color-teal"></i> {{'paragraphs.please-enter-your-email-for-password-reset'}}</b>
                    </label>
                </section>

                <section>
                    <label class="label">{{'paragraphs.type-a-new-password'}}</label>
                    <label class="input"> <i class="icon-append fa fa-user"></i>
                        {!! Form::password('password', ['id' => 'password']) !!}
                    </label>
                </section>

                <section>
                    <label class="label">{{'captions.confirm-password'}}</label>
                    <label class="input"> <i class="icon-append fa fa-user"></i>
                        {!! Form::password('password_confirmation', ['id' => 'password_confirmation']) !!}
                    </label>
                </section>
            </fieldset>

            <footer>
                <button id="change_password_button" type="submit" class="btn btn-primary">
                	{{'captions.change-password'}}
                </button>
            </footer>
        {!! Form::close() !!}
    </div>

    @include('login.partials.sign-in-using')
@stop
