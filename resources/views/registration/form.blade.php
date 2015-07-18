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
    <div class="form-group">
        {!! Form::text('email', null, ['id' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control', 'type' => 'email', 'autofocus']) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password', ['id' => 'password', 'placeholder' => 'Senha', 'class' => 'form-control', 'type' => 'password', 'value' => '']) !!}
    </div>

    <div class="forgot">
        <span>Já possui uma conta?</span>
        <a href="{!! route('auth.login') !!}">Entre</a>
    </div>

    <div class="forgot">
        <span>Não lebra a senha?</span>
        <a href="{!! route('password') !!}">Recupere-a</a>
    </div>

    <input type="submit" value="Entrar">
    {!! Form::close() !!}
</div>
