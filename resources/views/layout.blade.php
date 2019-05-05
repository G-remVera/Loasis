<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/modern-business.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <title>Loasis</title>
</head>
    <body>
    <!-- Nav Bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Loasis</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('artistes.index')}}">Artistes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('concerts.index')}}">Concerts</a>
                    </li>
                    @if(Auth::check())

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Création
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="{{route('artistes.create')}}">Création d'artiste</a>
                            <a class="dropdown-item" href="{{route('concerts.create')}}">Création de concerts</a>
                            <a class="dropdown-item" href="{{route('category.create')}}">Création de categories</a>
                            <a class="dropdown-item" href="{{route('dates.create')}}">Création de dates</a>
                        </div>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('shop.panier')}}">
                                Panier
                                <span class="badge"></span>
                            </a>
                        </li>
                    @endif
    <!-- Zone d'authentication -->
                    <li class="nav-item dropdown">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                @guest
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Connexion
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('s\'identifier') }}</a>
                                        @if (Route::has('register'))
                                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('s\'enregistrer') }}</a>
                                        @endif
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('logout')}}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Déconexion') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Contenu -->
    <div class="container">
            @yield('main_content')
    </div>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright © Your Website 2018</p>
        </div>
    </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    </body>
</html>
