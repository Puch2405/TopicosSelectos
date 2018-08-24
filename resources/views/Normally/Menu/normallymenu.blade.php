
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('User/Inicio')}}"> Inicio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('User/Donativos')}}"> Donaciones </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('User/QuienesSomos')}}"> Quienes Somos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('User/ConoceMas')}}"> Conoce Mas </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            </ul>
        </div>
    </div>
</nav>