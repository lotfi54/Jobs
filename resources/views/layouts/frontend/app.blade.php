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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
  {{--   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="{{ asset('assets/frontend/css/style2.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">

<link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">


  

   
@stack('css')
</head>
<body>




    @yield('content')


   






{{-- <script src="{{ asset('assets/backend/js/vendor/jquery-2.2.4.min.js') }}"></script> --}}

<script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
<script src="{{ asset('assets/frontend/js/swipe.js') }}"></script>

</body>
</html>
