@extends('layouts.main')

@section('contents')
    <div id="blog_post">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
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
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="raty">
                                <input type="hidden" name="rating" id="rating">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="post_content">
                                <h3>Imagens relacionadas</h3>
                                <img class="post_pic img-responsive" src="{{ $post->present()->snapshotUrl() }}" />

                                <br><br>

                                @foreach ($post->files as $file)
                                    @if ( ! $file->is_main && ! $file->is_snapshot && $file->file)
                                        <img class="post_pic img-responsive" src="{{ $file->file->file->getUrl() }}" />
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop

@section('javascript')
    <script>
        jQuery('.raty').raty(
        {
            starType: 'i',
            score: 3
        });
    </script>
@stop
