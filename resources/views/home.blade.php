@extends('layouts.main')

@section('contents')
    <div class="section_header">
        <h3>{{'captions.clipping'}}</h3>

        <input type="text" class="search-query form-control" placeholder="Procurar">
    </div>

    @include('blog.posts')
@stop
