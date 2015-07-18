@extends('layouts.blank')

@section('body.contents')
    <div id="sign_in2">
        <div class="container">
            <div class="section_header">
                <h3>Registre-se</h3>
            </div>
            <div class="row login">
                <div class="col-sm-5 left_box">
                    <h4>Crie uma conta</h4>

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
                            @if (isset($invite_only) && $invite_only)
                                @include('registration.invite-only')
                            @else
                                @include('registration.form')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
