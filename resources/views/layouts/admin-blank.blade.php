@extends('pragmarx/sdk::html')

@section('html.head')
    <!-- Bootstrap Core CSS -->
    <link href="{{url('/')}}/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('/')}}/vendor/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{url('/')}}/vendor/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="{{url('/')}}/vendor/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{url('/')}}/vendor/startbootstrap-sb-admin-2/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('/')}}/vendor/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{url('/')}}/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="{{url('/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Dropzone -->
    <link href="{{url('/')}}/vendor/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">

    <!-- Dropzone -->
    <link href="{{url('/')}}/css/admin.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
@stop

@section('html.body')
    @yield('body.heading')

    @yield('body.contents')

    @yield('body.footer')

    <!-- jQuery -->
    <script src="{{url('/')}}/vendor/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('/')}}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{url('/')}}/vendor/raphael/raphael-min.js"></script>
    <script src="{{url('/')}}/vendor/morrisjs/morris.min.js"></script>

    {{--<script src="../js/morris-data.js"></script>--}}

    <!-- Custom Theme JavaScript -->
    <script src="{{url('/')}}/vendor/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('/')}}/vendor/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="{{url('/')}}/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/vendor/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('/')}}/vendor/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('/')}}/vendor/dropzone/dist/dropzone.js"></script>

    <!-- autosize -->
    <script src="{{url('/')}}/vendor/autosize/dist/autosize.min.js"></script>

    <script>
        Dropzone.autoDiscover = false;
    </script>

    @yield('javascript')
@stop
