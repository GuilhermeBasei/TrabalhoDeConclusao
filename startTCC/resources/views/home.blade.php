@extends('layouts.applogin')

@section('content')

    <div id="page-content-wrapper">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                @if(date('H') >=7 && date ('H') <=12)
                    <h1 class="display-4">Bom dia!</h1>
                @elseif (date('H') >=13 && date ('H') <=18)
                    <h1 class="display-4">Boa Tarde!</h1>
                @else
                    <h1 class="display-4">Boa noite!</h1>
                @endif
                <p class="lead">Crie agora o seu cronograma personalizado.</p>
                <button type="button" class="btn-sm btn-success" id="menu-toggle">Barra Lateral</button>


            </div>
        </div>
        <div class="container border-secondary">
            <div class="row justify-content-md-center">
                <div class="card text-center">
                    <a href="{{ route('site.auto') }}" class=" btn-lg card-header bg-success text-white">Gerar
                        Automaticamente</a>
                    <div class="card-body">

                        <p class="card-text">- Cria um cronograma automaticamente;<br>
                            - Aborda os conteúdos mais presentes nos vestibulares;<br>
                            - Numero de semanas flexivel;<br>
                            - Baseado na matéria com maior dificuldade.</p>

                    </div>

                </div>

                <div class="card text-center ml-4">
                    <a href="{{ route('site.manual') }}" class="btn-lg card-header bg-success text-white">Gerar
                        Manualmente</a>
                    <div class="card-body">

                        <p class="card-text">- Possibilita ao usuário criar um cronograma flexivel;<br>
                            - Numero de semanas flexivel;
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        <script src="{{ asset('site/jquery.js') }}"></script>


