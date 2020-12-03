<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Store</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {!! Html::style(asset('assets/plugins/fontawesome-free/css/all.min.css')) !!}
    <!-- DataTables -->
    {!! Html::style(asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')) !!}
    {!! Html::style(asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')) !!}
    {!! Html::style(asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')) !!}
    <!-- Theme style -->
    {!! Html::style(asset('assets/css/adminlte.min.css')) !!}
    <!-- jQuery -->
    {!! Html::script(asset('assets/plugins/jquery/jquery.min.js')) !!}
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    @include('_header')
    @include('_menu')
    @include('_content_layout')
    @include('_footer')
</div>
<!-- ./wrapper -->
<!-- Bootstrap 4 -->
{!! Html::script(asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')) !!}
<!-- AdminLTE App -->
{!! Html::script(asset('assets/js/adminlte.min.js')) !!}
<!-- DataTables  & Plugins -->
{!! Html::script(asset('assets/plugins/datatables/jquery.dataTables.min.js')) !!}
{!! Html::script(asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')) !!}
{!! Html::script(asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')) !!}
{!! Html::script(asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')) !!}
{!! Html::script(asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')) !!}
{!! Html::script(asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')) !!}
{!! Html::script(asset('assets/plugins/jszip/jszip.min.js')) !!}
{!! Html::script(asset('assets/plugins/pdfmake/pdfmake.min.js')) !!}
{!! Html::script(asset('assets/plugins/pdfmake/vfs_fonts.js')) !!}
{!! Html::script(asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')) !!}
{!! Html::script(asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')) !!}
{!! Html::script(asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')) !!}
<!-- AdminLTE for demo purposes -->
{!! Html::script(asset('assets/js/demo.js')) !!}
</body>
</html>
