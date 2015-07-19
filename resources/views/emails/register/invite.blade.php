@extends('emails.layout')

@section('email-title', $app_name_caps . ' - ' . t('titles.join-us'))

@section('email-heading', t('titles.join-us'))

@section('email-body')

	This is a invitation to {{ $app_name_caps }}, to accept, please click the link below:<br>
	<br>
	{!! URL::route('connect.invite.accept', ['id' => $user->id]) !!}.

@stop
