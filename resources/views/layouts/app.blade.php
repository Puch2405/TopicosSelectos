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

<div class="social">
    <ul>
        <li><a href="" class="icon-facebook">Donar <img src="{{asset('donativo_rapet.png')}}" alt="" width="50"> </a></li>
    </ul>
</div>
    <header>
        <div  id="app">
            @guest
                <nav class="navbar navbar-dark navbar-expand-md bg-success justify-content-between">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('logo-ayudog.ico')}}" width="150"  class="d-inline-block align-top" alt="">

                    </a>
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
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

                        </div>


                        <div class="navbar-collapse collapse dual-nav w-50 order-2">
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

    <footer class="bg-success footer">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="" style="color: white"> Ayudog</a>


        </div>
        <!-- Copyright -->

    </footer>
</body>
</html>
