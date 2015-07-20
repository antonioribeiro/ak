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
                    <h5><a href="blogpost.html">{{ $post->heading }}</a></h5>
                    <span class="date">{{ $post->published_at->format('d-m-Y') }}</span>
                    <p>
                        {{ Illuminate\Support\Str::limit($post->body, 150) }}
                    </p>
                </div>
                <div class="author_box">
                    <h6>{{ $post->author ? $post->author->name : 'Autor desconhecido' }}</h6>
                </div>
                <a class="plus_wrapper" href="blogpost.html">
                    <span>&#43;</span>
                </a>
            </div>
        </div>

        @if ($count % 3 == 0 && $posts->count() - $count >= 3)
            </div>

            <div class="row post_row {{ $posts->count() - $count == 3 ? 'lastpost_row' : '' }}">
        @endif

        <?php $count++;?>
    @endforeach
</div>

{{--<!-- Post Row -->--}}
{{--<div class="row post_row">--}}
    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog1.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog2.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post last">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog3.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Post Row -->--}}
{{--<div class="row post_row">--}}
    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog1.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog2.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post last">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog3.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Post Row -->--}}
{{--<div class="row post_row lastpost_row">--}}
    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog1.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog2.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Post -->--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="post last">--}}
            {{--<div class="img">--}}
                {{--<a href="blogpost.html">--}}
                    {{--<img src="{{ url('/') }}/templates/cleancanvas/img/blog3.png" alt="" class="img-responsive" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="text">--}}
                {{--<h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>--}}
                {{--<span class="date">Wed, 12 Dec.</span>--}}
                {{--<p>--}}
                    {{--There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>--}}
            {{--</div>--}}
            {{--<div class="author_box">--}}
                {{--<h6>Alejandra Galvan</h6>--}}
                {{--<p>Creative Director</p>--}}
            {{--</div>--}}
            {{--<a class="plus_wrapper" href="blogpost.html">--}}
                {{--<span>&#43;</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
