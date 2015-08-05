@extends('layouts.admin')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{'captions.clipping'}} ({{'captions.new'}})
            </h1>

            <div class="panel-body">
                <div id="messages"></div>
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::opener(['route' => 'admin.clipping.store', 'id' => 'create-clipping-form']) !!}
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label>{{'captions.article-url'}}</label>
                                        <input type="text" name="url" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>{{'captions.published-at'}}</label>
                                        <input type="text" name="published_at" id="published_at" class="form-control" data-providexxx="datepicker">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>{{'captions.heading'}}</label>
                                <input type="text" name="heading" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>{{'captions.subheading'}}</label>
                                <input type="text" name="subheading" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="-group">
                                        <label>{{'captions.article'}}</label>
                                        <div id="post-body">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.preview'}}</label>
                                        <div id="post-body-preview" class="editor-background">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.editorial'}}</label>
                                        <div id="editorial"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group" id="other-editorial-group">
                                        <label>{{'captions.editorial'}} ({{'captions.create'}})</label>
                                        <input type="text" name="editorial_other" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.vehicle'}}</label>
                                        <div id="vehicle"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group" id="other-vehicle-group">
                                        <label>{{'captions.vehicle'}} ({{'captions.create'}})</label>
                                        <input type="text" name="vehicle_other" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>{{'captions.author'}}</label>
                                <input type="text" name="author" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.locality'}}</label>
                                        <div id="locality"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group" id="other-locality-group">
                                        <label>{{'captions.locality'}} ({{'captions.create'}})</label>
                                        <input type="text" name="locality_other" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>{{'captions.tags'}}</label>
                                        <select multiple="true" name="tags[]" id="tags" class="form-control select2">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag }}">{{ $tag }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    {{--<div class="form-group">--}}
                                        {{--<label>{{'captions.image-main'}}</label>--}}
                                        {{--<div id="main-image" class="dropzone dz-clickable">--}}
                                            {{--<div class="dz-message">--}}
                                                {{--{{'paragraphs.drop-here-or-click'}}<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label>{{'captions.image-main'}}</label>
                                        {{--<label>{{'paragraphs.paste-urls-here'}}</label>--}}
                                        <textarea name="image_main_urls" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    {{--<div class="form-group">--}}
                                        {{--<label>{{'captions.image-snapshot'}}</label>--}}
                                        {{--<div id="snapshot-image" class="dropzone dz-clickable">--}}
                                            {{--<div class="dz-message">--}}
                                                {{--{{'paragraphs.drop-here-or-click'}}<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label>{{'captions.image-snapshot'}}</label>
                                        {{--<label>{{'paragraphs.paste-urls-here'}}</label>--}}
                                        <textarea name="image_snapshot_urls"class="form-control" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    {{--<div class="form-group">--}}
                                        {{--<label>{{'captions.image_other'}}</label>--}}
                                        {{--<div id="other-images" class="dropzone dz-clickable">--}}
                                            {{--<div class="dz-message">--}}
                                                {{--{{'paragraphs.drop-here-or-click'}}<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label>{{'captions.image-other'}}</label>
                                        {{--<label>{{'paragraphs.paste-urls-here'}}</label>--}}
                                        <textarea name="image_other_urls" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div type="submit" id="btn-save" class="btn btn-primary">{{'captions.save'}}</div>
                            <a href="{{ route('admin.home') }}" type="reset" class="btn btn-danger">{{'captions.cancel'}}</a>
                        {!! Form::close() !!}
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop

@section('javascript')
    <script>
        @include('javascript.validation');

//        var dzMainImage = new Dropzone("div#main-image",
//        {
//            url: "/file/post",
//
//            dragend: function(event) {
//                console.log(event);
//            }
//        });
//
//        var dzSnapshotImage = new Dropzone("div#snapshot-image", { url: "/file/post" });
//        var dzOtherImages = new Dropzone("div#other-images", { url: "/file/post" });

        autosize(document.querySelectorAll('textarea'));

        jQuery('#published_at').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "dd/mm/yyyy",
            todayBtn: true,
            endDate: "{{ $today_date }}",
            language: "pt-BR"
        });

        validationObserver('#create-clipping-form', '#btn-save', '#messages');

//        var tags = new Bloodhound({
//            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
//            queryTokenizer: Bloodhound.tokenizers.whitespace,
//            prefetch: {
//                url: 'assets/citynames.json',
//                filter: function(list) {
//                    return $.map(list, function(cityname) {
//                        return { name: cityname }; });
//                }
//            }
//        });
//
//        citynames.initialize();

        $('#tags').select2({
            tags: true,
            tokenSeparators: [",", " "]
        });
    </script>
@stop

@section('reactjs')
    @include('javascript.reactjs.markdown-editor')
    @include('javascript.reactjs.markdown-preview')
    @include('javascript.reactjs.select')

    React.render(<MarkdownEditor name="body"/>, document.getElementById('post-body'));

    React.render(<MarkdownPreview />, document.getElementById('post-body-preview'));

    React.render(<Select
            name="editorial_id"
            model="editorial"
            first="{{ strtoupper(t('paragraphs.select-an-editorial')) }}"
            last="({{ strtolower(t('captions.other')) }})"
            otherSelector="#other-editorial-group"
            />
            , document.getElementById('editorial')
    );

    React.render(<Select
            name="vehicle_id"
            model="vehicle"
            first="{{ strtoupper(t('paragraphs.select-a-vehicle')) }}"
            last="({{ strtolower(t('captions.other')) }})"
            otherSelector="#other-vehicle-group"
            />
            , document.getElementById('vehicle')
    );

    React.render(<Select
            name="locality_id"
            model="locality"
            first="{{ strtoupper(t('paragraphs.select-a-locality')) }}"
            last="({{ strtolower(t('captions.other')) }})"
            otherSelector="#other-locality-group"
            />
            , document.getElementById('locality')
    );
@stop
