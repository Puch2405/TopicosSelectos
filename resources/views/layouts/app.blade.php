<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/toastr.js')}}"></script>
</head>
<body>
    <header>
        <div id="app">
            @guest
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('Inicio')}}"> Inicio </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('Donativos')}}"> Donaciones </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('QuienesSomos')}}"> Quienes Somos </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('ConoceMas')}}"> Conoce Mas </a>
                                </li>
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                @else
                    @if(Auth::user()->type_user == 2 )
                        @include('Admin.Menu.adminmenu')
                    @else
                        @include('Normally.Menu.normallymenu')
                    @endif
                    @endguest
        </div>
        @if(session('info'))
            <script>
                toastr.options = {
                    "positionClass": "toast-top-center"
                }
                toastr["success"]("{{ session('info') }}");
            </script>
        @endif
    </header>
    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-primary footer">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/" style="color: white"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
</body>
</html>
