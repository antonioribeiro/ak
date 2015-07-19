@extends('layouts.main')

@section('contents')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h1 class="page-title txt-color-blueDark">

                <!-- PAGE HEADER -->
                <i class="fa-fw {{ $icon_connections }}"></i>
                {{'titles.you-are-connected-to'}}
            </h1>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
            <ul class="list-inline pull-right">
                @if($connections->count())
                    <li>
                        <a href="#" id="add-connection-button" data-toggle="modal" data-target="#invite-modal" class="btn btn-primary btn-lg pull-right header-btn">
                            <i class="fa fa-plus"></i>
                            {{'captions.invite-someone'}}
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    @forelse($connections as $connection)
        <div class="col-sm-12 col-md-6 col-lg-4 users-block">
            <div class="well">
                <div class="row">
                    <div class="col-md-3 users-block">
                        <a href="{!! route_ajax('profile', ['username' => $connection->connectedTo($current_user)->username]) !!}">
                            @include('users.partials.avatar', ['size' => 70, 'user' => $connection->connectedTo($current_user)])
                        </a>
                    </div>
                    <div class="col-md-9 users-block">
                        <h4 class="user-block-username">
                            {{$connection->connectedTo($current_user)->first_name}}
                        </h4>
                        <h5 class="user-block-username">
                            {{'@'.$connection->connectedTo($current_user)->username}}
                        </h5>

                        @include('profiles.partials.follow-form', ['user' => $connection->connectedTo($current_user)])
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="well">
            <h1>You have no connections yet, but you can invite people.</h1>
            <br>
            <button id="add-connection-button-big" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#invite-modal">{{'paragraphs.invite-someone'}}</button>
        </div>
    @endforelse

    {!! with(new Illuminate\Pagination\BootstrapThreePresenter($connections))->render() !!}

    @include('connections.modals.invite')
@stop

@section('page-scripts')
    @include('javascript.validation')

    validationObserver('#invite-form', '#invite-button', '#inviteModalMessages')
@stop
