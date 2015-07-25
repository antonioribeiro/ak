@extends('layouts.admin')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{'captions.clipping'}} ({{'captions.new'}})
            </h1>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label>{{'captions.article-url'}}</label>
                                        <input class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>{{'captions.published-at'}}</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>{{'captions.heading'}}</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>{{'captions.subheading'}}</label>
                                <input class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.article'}}</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.preview'}}</label>
                                        <textarea class="form-control" rows="3" disabled="disabled"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.editorial'}}</label>
                                        <select class="form-control">
                                            <option>ESCOLHA UMA OPÇÃO</option>
                                            <option>Política</option>
                                            <option>Esportes</option>
                                            <option>Segurança</option>
                                            <option>(outro)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.editorial'}} ({{'captions.create'}})</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.vehicle'}}</label>
                                        <select class="form-control">
                                            <option>ESCOLHA UMA OPÇÃO</option>
                                            <option>G1</option>
                                            <option>O Globo</option>
                                            <option>Extra</option>
                                            <option>(outro)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.vehicle'}} ({{'captions.create'}})</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>{{'captions.author'}}</label>
                                <input class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.locality'}}</label>
                                        <select class="form-control">
                                            <option>ESCOLHA UMA OPÇÃO</option>
                                            <option>Rio de Janeiro</option>
                                            <option>São Gonçalo</option>
                                            <option>Niterói</option>
                                            <option>Baixada Fluminense</option>
                                            <option>(outro)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{'captions.locality'}} ({{'captions.create'}})</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>{{'captions.image-main'}}</label>
                                        <div id="main-image" class="dropzone dz-clickable">
                                            <div class="dz-message">
                                                {{'paragraphs.drop-here-or-click'}}<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>{{'paragraphs.paste-urls-here'}}</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>{{'captions.image-snapshot'}}</label>
                                        <div id="snapshot-image" class="dropzone dz-clickable">
                                            <div class="dz-message">
                                                {{'paragraphs.drop-here-or-click'}}<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>{{'paragraphs.paste-urls-here'}}</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>{{'captions.image-other'}}</label>
                                        <div id="other-images" class="dropzone dz-clickable">
                                            <div class="dz-message">
                                                {{'paragraphs.drop-here-or-click'}}<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>{{'paragraphs.paste-urls-here'}}</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">{{'captions.save'}}</button>
                            <a href="{{ route('admin.home') }}" type="reset" class="btn btn-danger">{{'captions.cancel'}}</a>
                        </form>
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
        var dzMainImage = new Dropzone("div#main-image",
        {
            url: "/file/post",

            dragend: function(event) {
                console.log(event);
            }
        });


        var dzSnapshotImage = new Dropzone("div#snapshot-image", { url: "/file/post" });
        var dzOtherImages = new Dropzone("div#other-images", { url: "/file/post" });

        autosize(document.querySelectorAll('textarea'));
    </script>
@stop

@section('reactjs')
    @include('admin.clipping.body')
@stop
