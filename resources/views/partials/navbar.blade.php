<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div>
        <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('img/logo5.png') }}" width="150"></a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active text-light">
                <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Inicio <span
                        class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link active light" id="cutService" href="{{ route('servicios.index') }}"><i class="fas fa-tools"></i> Servicios</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active light" href="{{ route('propietarios.index') }}"><i class="fas fa-user-tie"></i> Clientes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active light" href="{{ route('tecnicos.index') }}"><i class="fas fa-id-card"></i> Técnicos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active light" href="{{ route('componentes.index') }}"><i class="fas fa-memory"></i> Componentes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active light" href="{{ route('ventas.index') }}"><i class="fas fa-dollar-sign"></i> Ventas</a>
            </li>
        </ul>


        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                    </li>
                @endif
            @else


                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>


                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('dispositivos.index') }}">
                            Dispositivos
                        </a>

                        <a class="dropdown-item" href="{{ route('tiposServicios.index') }}">
                            Tipos de Servicios
                        </a>

                        <a class="dropdown-item" href="{{ route('register') }}">
                            Nuevo Usuario
                        </a>
                        <div role="separator" class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            @endguest
        </ul>
    </div>
</nav>


