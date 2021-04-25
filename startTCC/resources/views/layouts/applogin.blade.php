<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="https://media.discordapp.net/attachments/592511224479088655/817140294285918219/imagem_linta.png?width=789&height=676" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Vestibulei') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="site/simple-sidebar.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/home') }}"> <img  src="https://media.discordapp.net/attachments/592511224479088655/817140294285918219/imagem_linta.png?width=789&height=676" width="30" height="30" class="d-inline-block align-top border-secondary" alt="">
                {{ __('Vestibulei') }}
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

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('login') }}">{{ __('Efetuar Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                            </li>
                        @endif
                    @else
                        <img src="https://cdn.discordapp.com/attachments/592511224479088655/804054162668781598/aluna.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        <li class="nav-item dropdown ">
                            <a id="navbarDropdowntext-white" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Deslogar') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
            </div>


            </li>



            @endguest
            </ul>

        </div>

</div>
</nav>



    <div class="d-flex py-1" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading bg-success text-light">Cronogramas </div>

        <div class="list-group list-group-flush">


            <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-light">Criar novo Cronograma</a>
            <a href="{{ route('cronogramas.index')}}" class="list-group-item list-group-item-action bg-light">Acessar Cronogramas</a>
            <a href="{{route('biblioteca.index')}}" class="list-group-item list-group-item-action bg-light">Biblíoteca de Estudos</a>
            <div class="sidebar-heading bg-success text-light">Auxílio ao Usuário</div>
            <a href="{{route('perfil.index')}}" class="list-group-item list-group-item-action bg-light">Acessar Perfil</a>
            <a href="{{route('site.ajuda')}}" class="list-group-item list-group-item-action bg-light border-bottom">Ajuda</a>
            <a href="{{route('relatarProblema.index')}}" class="list-group-item list-group-item-action bg-light border-bottom">Relatar Problema</a>
            <div class="sidebar-heading bg-success text-light">Dados do site</div>
            <a href="{{route('site.sobre')}}" class="list-group-item list-group-item-action bg-light border-bottom">Sobre</a>
        </div>

    </div>
        <div id="page-content-wrapper">
            <main>
                @yield('content')
            </main>
            <!-- Footer -->



    </div>


</div>




        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>


</body>
</html>



