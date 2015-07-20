@extends('layouts.main')

@section('contents')
    <div class="section_header">
        <h3>{{'captions.clipping'}}</h3>

        <input type="text" class="search-query form-control" placeholder="Procurar">
    </div>

    <?php $count = 1; ?>
    <div class="row post_row">
        @foreach ($posts as $post)
                <!-- Post -->
        <div class="col-sm-4">
            <div class="post">
                <div class="img">
                    <a href="blogpost.html">
                        <img src="http://lorempixel.com/304/192/?{{ $post->id }}" alt="" class="img-responsive" />
                    </a>
                </div>
                <div class="text">
                    <span class="date">{{ $post->locality ? $post->locality->name : '' }} - {{ $post->published_at->format('d/m/Y') }}</span>
                    <h5><a href="blogpost.html">{{ $post->heading }}</a></h5>
                    <p>
                        {{ Illuminate\Support\Str::limit($post->body, 120) }}
                    </p>
                </div>

                <div class="author_box">
                    <h6>{{ $post->author ? $post->author->name : t('captions.unknow-author') }}{{ $post->vehicle ? ' - ' . $post->vehicle->name : '' }}</h6>
                    <br>
                </div>

                <a class="plus_wrapper" href="{{ route('clipping.post', ['id' => $post->id]) }}">
                    <span>&#43;</span>
                </a>
            </div>
        </div>

        @if ($count % 3 == 0 && $posts->count() - $count >= 0)
    </div>

    <div class="row post_row {{ $posts->count() - $count <= 3 ? 'lastpost_row' : '' }}">
        @endif

        <?php $count++;?>
        @endforeach
    </div>

    <div class="paginator-container">
        {!! $posts->render() !!}
    </div>
@stop
