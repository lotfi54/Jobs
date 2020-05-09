<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

{{--   <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <!-- Scripts -->
   {{--  <script src="{{ asset('js/app.js') }}" defer></script> --}}
   <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/backend/css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/backend/css/themify-icons.css') }}" rel="stylesheet">
  

<link href="{{ asset('assets/backend/css/metisMenu.css') }}" rel="stylesheet">

<link href="{{ asset('assets/backend/css/owl.carousel.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/backend/css/slicknav.min.css') }}" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
 <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="{{ asset('assets/backend/css/typography.css') }}" rel="stylesheet">

<link href="{{ asset('assets/backend/css/default-css.css') }}" rel="stylesheet">

<link href="{{ asset('assets/backend/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/css/toastr.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/css/trix.css') }}" rel="stylesheet">
<script src="{{ asset('assets/backend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
   
@stack('css')
</head>
<body>



    <div class="page-container">

  @include('layouts.backend.partial.sidebar')

  @include('layouts.backend.partial.header')


<div class="main-content-inner">
    @yield('content')
</div>


    </div>






<script src="{{ asset('assets/backend/js/vendor/jquery-2.2.4.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/metisMenu.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/jquery.slicknav.min.js') }}"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets/backend/js/plugins.js') }}"></script>


  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

<script src="{{ asset('assets/backend/js/line-chart.js') }}"></script>

<script src="{{ asset('assets/backend/js/pie-chart.js') }}"></script>

<script src="{{ asset('assets/backend/js/bar-chart.js') }}"></script>

<script src="{{ asset('assets/backend/js/maps.js') }}"></script>
<script src="{{ asset('assets/backend/js/trix.js') }}"></script>




<script src="{{ asset('assets/backend/js/scripts.js') }}"></script>
<script src="{{ asset('assets/backend/js/toastr.min.js') }}"></script>
 {!! Toastr::message() !!}
 @stack('js')
</body>
</html>
