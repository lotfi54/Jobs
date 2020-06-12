<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
 {{--    <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/frontend/css/alljobs.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/frontend/css/trix.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">
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
   
    <title>Job's</title>
</head>
<body>
       <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'BlackRidge') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.register') }}">{{ __('Entreprise') }}</a>
                            </li>
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('   Candidat ') }}</a>
                                </li>
                            @endif


                        @else
                         @if(Auth::user()->user_type=='employer')

                        <li>
                            <a href="{{route('job.create')}}"><button class="btn btn-secondary">Post a job</button></a>
                        </li>
                        @endif

                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                
                                @if(Auth::user()->user_type=='employer')
                                    {{Auth::user()->company->cname}}
                                    
                                
                                @elseif(Auth::user()->user_type=='seeker')
                                    {{Auth::user()->name}}
                                    @else
                                    {{Auth::user()->name}}
                                @endif

                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @if(Auth::user()->user_type=='employer')
                                <a class="dropdown-item" href="{{ route('company.view') }}"
                                       >
                                        {{ __('Company') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('my.job')}}">
                                        MyJobs
                                    </a>
                                    <a class="dropdown-item" href="{{route('applicant')}}">Applicants</a>

                                @elseif(Auth::user()->user_type=='seeker')


                                    <a class="dropdown-item" href="{{route('user.profile')}}"
                                       >
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{route('home')}}"
                                       >
                                        {{ __('Saved jobs') }}
                                    </a>
                                    @else

                                    
                                 @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <div id="app">
    <div class="py-4">
        @yield('content')
    </div>
    
    </div>
        <link href="{{ asset('assets/backend/js/bootstrap.min.js') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    
</body>
</html> 