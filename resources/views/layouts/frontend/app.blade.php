<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
  <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">
  
  
  
  
  
  @stack('css')
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LUCK') }}
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
  @yield('content')
  <div id="app">
    <Home/>
  </div>
  
  
  {{-- <script src="{{ asset('assets/backend/js/vendor/jquery-2.2.4.min.js') }}"></script> --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
<script>

  </script>
</body>
</html>
