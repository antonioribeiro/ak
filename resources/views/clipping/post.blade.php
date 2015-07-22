@extends('layouts.main')

@section('contents')
    <div id="blog_post">
        <div class="container">
            <div class="section_header">
                <h3>Artigo</h3>
            </div>

            <div class="row">
                <div class="col-sm-9">
                    <img class="post_pic img-responsive" src="{{ $post->present()->imageUrl(700,538) }}" />

                    <div class="post_content">
                        <h2>{{ $post->heading }}</h2>
                        <h5>{{ $post->subheading }}</h5>
                        <span class="date">{{ $post->published_at->format('d/m/Y') }}</span>
                        <p class="justified">
                            {{ $post->body }}
                        </p>

                        <div class="author_box">
                            <div class="author">{{ $post->author ? $post->author->name : t('captions.unknow-author') }}</div>
                            <div class="area">{{ $post->vehicle ? $post->vehicle->name : '' }}</div>
                            @if ($post->url)
                                <div class="area"><a href="{{ $post->url }}">{{ Illuminate\Support\Str::limit($post->url, 60) }}</a></div>
                            @endif
                        </div>

                        <img class="post_pic img-responsive" src="{{ $post->present()->snapshotUrl() }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

