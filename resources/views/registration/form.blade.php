@include('login.social')

<div class="division">
    <div class="line l"></div>
    <span>ou</span>
    <div class="line r"></div>
</div>

<div class="form">
    {!! Form::opener(['route' => 'auth.login', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
    <div class="form-group">
        {!! Form::text('email', null, ['id' => 'email', 'placeholder' => t('captions.email'), 'class' => 'form-control', 'type' => 'email', 'autofocus']) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password', ['id' => 'password', 'placeholder' => t('captions.password'), 'class' => 'form-control', 'type' => 'password', 'value' => '']) !!}
    </div>

    <div class="forgot">
        <span>{{'paragraphs.have-an-account'}}</span>
        <a href="{!! route('auth.login') !!}">{{'captions.enter'}}</a>
    </div>

    <div class="forgot">
        <span>{{'paragraphs.do-not-remember-password'}}}</span>
        <a href="{!! route('password') !!}">{{'paragraphs.recover-it'}}</a>
    </div>

    <input type="submit" value="{{'captions.enter'}}">
    {!! Form::close() !!}
</div>
