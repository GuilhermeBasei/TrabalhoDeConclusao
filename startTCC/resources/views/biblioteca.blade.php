@extends('layouts.applogin')

@section('content')



    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <div class="container">
        <nav class="navbar navbar-light bg-success text-white mt-4">
            <span class="navbar-brand mb-0 h1 text-white">Biblioteca de conteúdos</span>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm mt-4">
                <ul class="list-group">
                    <li class="list-group-item active bg-success border-success" aria-current="true">Humanas</li>
                    <a href="{{ route('biblioteca.show',[4])}}" class="list-group-item list-group-item-action">História</a>
                    <a href="{{ route('biblioteca.show',[5])}}" class="list-group-item list-group-item-action">Geografia</a>
                    <a href="{{ route('biblioteca.show',[6])}}" class="list-group-item list-group-item-action">Sociologia</a>
                    <a href="{{ route('biblioteca.show',[7])}}" class="list-group-item list-group-item-action">Filosofia</a>
                    <a href="{{ route('biblioteca.show',[3])}}" class="list-group-item list-group-item-action">Língua Portuguesa</a>

                </ul>
            </div>
            <div class="col-sm mt-4">
                <ul class="list-group">
                    <li class="list-group-item active bg-success border-success" aria-current="true">Exatas</li>
                    <a href="{{ route('biblioteca.show',[1])}}" class="list-group-item list-group-item-action">Matemática</a>
                    <a href="{{ route('biblioteca.show',[2])}}" class="list-group-item list-group-item-action">Física</a>

                </ul>
            </div>
            <div class="col-sm mt-4">
                <ul class="list-group">
                    <li  class="list-group-item active bg-success border-success" aria-current="true">Biológicas</li>
                    <a href="{{ route('biblioteca.show',[8])}}" class="list-group-item list-group-item-action">Química</a>

                    <a href="{{ route('biblioteca.show',[9])}}" class="list-group-item list-group-item-action">Biologia</a>
                </ul>

            </div>
        </div>
    </div>





@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


