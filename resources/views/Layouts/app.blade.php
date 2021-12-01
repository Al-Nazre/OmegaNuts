<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
  <link href="front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

  <!--Custom CSS-->
  <link rel="stylesheet" href="front/vendor/css/style.css">
</head>
<body>
    <div id="app">
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

                        <div class="header">
                            <div class="menu-bar">
                            <nav class="navbar navbar-expand-lg navbar-dark">
                                <a class="navbar-brand" href="#"><img src="" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                    <a class="nav-link nav-text" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link nav-text" href="#">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link nav-text" href="#">Container</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link nav-text" href="#">Food Group</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link nav-text" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link nav-text" href="{{ route('register') }}">Register</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link nav-text" href="#about">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link nav-text" href="#contact">Contact Us</a>
                                    </li>
                                </ul>
                                </div>
                            </nav>
                            </div>
                        </div>  
                           
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Bootstrap core JavaScript -->
  <script src="front/vendor/jquery/jquery.slim.min.js"></script>
  <script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/1949392649.js" crossorigin="anonymous"></script>
</body>
</html>
