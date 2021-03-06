<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Artworks') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/artworks.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="img" src="{{ asset('favicon.ico') }}" id="logo"/></a>
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Artworks') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-start">
                <ul class="navbar-nav">

                    @auth()
                        <li class="nav-item active btn-group my-2 my-sm-0"><a
                                    href="{{ url('/') }}/museos/create" class="nav-link">Añadir
                                Museo</a></li>
                        <li class="nav-item active btn-group my-2 my-sm-0"><a
                                    href="{{ url('/') }}/obras/create" class="nav-link">Añadir
                                Obra</a></li>
                    @endauth
                    {{--<div id="dialog" title="Texto Informativo">--}}
                    {{--<p>Aquí tendremos información esencial para el uso de la página, pulse [x] para cerrar.</p>--}}
                    {{--</div>--}}
                </ul>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @if (Auth::guest())
                        <li class="nav-item btn btn-outline my-2 my-sm-0"><a href="{{ route('login') }}"
                                                                                       class="nav-link">Login</a></li>
                        <li class="nav-item btn btn-outline my-2 my-sm-0"><a href="{{ route('register') }}"
                                                                                       class="nav-link">Registro</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle btn btn-outline my-2 my-sm-0"
                               id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right btn btn-outline my-2 my-sm-0"
                                 aria-labelledby="navbarDropdownMenuLink">
                                <a href="{{ url('/') }}/profile" class="dropdown-item">
                                    Perfil
                                </a>
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

    <div class="container main-area">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/draggable.js') }}" defer></script>
<script src="{{ asset('js/resizable.js') }}" defer></script>
<script src="{{ asset('js/dialog.js') }}" defer></script>
<script src="{{ asset('js/autocomplete.js') }}" defer></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

@stack('scripts')
</body>
</html>