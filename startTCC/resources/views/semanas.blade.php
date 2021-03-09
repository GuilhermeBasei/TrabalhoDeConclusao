@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <link href="../site/simple-sidebar.css" rel="stylesheet">


    <div class="container">

        <nav class="navbar navbar-light bg-success text-white mt-4">
            {{$semanas->links()}}

            <span class="float-right navbar-brand  h1 text-white">{{$tt}}</span>

        </nav>
        <hr>
        <div class="container-fluid">

            @foreach($semanas as $semana)

                @foreach($semana->array as $array)
                <span class="h3">{{$array}}</span>
                <br><span class=text-secondary>{{$semana->materias}}</span>
                <hr class=mt-4>

                @endforeach

            @endforeach

        </div>


    </div>

    <style>
        .w-5{
            display: none;
        }
        .v-5{
            display: none;
        }

    </style>

@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


