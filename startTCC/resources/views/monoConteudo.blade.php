@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <link href="../site/simple-sidebar.css" rel="stylesheet">

    <div class="container">
        <nav class="navbar navbar-light bg-success text-white mt-4">
            <span class="navbar-brand mb-0 display-4 text-white">{{$bibliotecas->nome}}</span>
        </nav>
        <div class="list-group">
            @foreach($bibliotecas as $biblioteca)
            @endforeach
            <?php
            $array = (explode("/",$bibliotecas->conteudos));
            ?>
            @foreach ($array as $imprimir)
                <a href="https://www.google.com//search?q={{$imprimir}}" target="_blank" class="list-group-item list-group-item-action">{{$imprimir}}</a>
                @endforeach
     </div>
    </div>



@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


