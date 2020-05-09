<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/backend/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/companySingle.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Candidat') }}</a>
                                </li>

                            @endif
                        @else

                                    @if(Auth::user()->role_id=='2')
                                 
                                    
                           <a href="{{route('company.dashboard')}}"><button class="btn btn-secondary">{{Auth::user()->company->cname}}</button></a>
                        </li>

                           
                        </li>
                            
                              

                                @elseif(Auth::user()->role_id=='3')
                                     
                        </li>
                                    @else
                                    {{Auth::user()->name}}
                                @endif

                                   <span class="caret"></span>
                                </a>

                             
                                        @if(Auth::user()->role_id=='2')
                                     

                                    <li>

                        

                                     @elseif(Auth::user()->role_id=='3')
                         
                    <a href="{{route('seeker.dashboard')}}"><button class="btn btn-secondary">{{Auth::user()->name}}</button></a>
                        </li>
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
