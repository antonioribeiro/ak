@extends('layouts.main')

@section('contents')
    <div class="section_header">
        <h3>{{'captions.clipping'}}</h3>

        <input type="text" class="search-query form-control" placeholder="Procurar">
    </div>

    @include('blog.posts')

    <div class="paginator-container">
        <ul class="pagination">
            <li><a href="#">Prev</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
@stop
