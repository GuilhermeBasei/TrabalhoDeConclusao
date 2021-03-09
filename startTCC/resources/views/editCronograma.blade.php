@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <link href="../../site/simple-sidebar.css" rel="stylesheet">


    <div class="container">

        <nav class="navbar navbar-light bg-success text-white mt-4">
            {{$semanas->links()}}

        </nav>


        <div class="container-fluid">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif


            @foreach($semanas as $semana)

                @foreach($semana->array as $array)

                    <form action="{{route('semanas.update',$semana->id)}}" method="post" class="allforms">
                        @csrf
                        @method('PUT')
                        <br>
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text " id="inputGroup-sizing-lg">Conteudo:</span>
                            </div>
                            <input name="conteudos" type="text" class="form-control col-lg-5" aria-label="Large"
                                   aria-describedby="inputGroup-sizing-sm" value="{{$array}}">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Matéria:</span>
                            </div>
                            <input name="materias" type="text" class="form-control col-lg-2" aria-label="Default"
                                   aria-describedby="inputGroup-sizing-default" value="{{$semana->materias}}">
                        </div>
                        <hr class=mt-4>

                    </form>
                @endforeach

            @endforeach
            <script>


                $(function () {
                    $("#allsubmit").click(function () {
                        alert('Editado com sucesso');
                        $('.allforms').each(function () {
                            valuesToSend = $(this).serialize();
                            $.ajax($(this).attr('action'),
                                {
                                    method: $(this).attr('method'),
                                    data: valuesToSend
                                }
                            )
                        });

                    });

                });


            </script>


        </div>
        <button id="allsubmit" class="btn btn-success">Salvar</button>

        <a class="btn btn-secondary ml-2" href="{{route('cronogramas.show',$jj)}}">Visualizar cronograma</a>


    </div>



    <style>
        .w-5 {
            display: none;
        }

        .v-5 {
            display: none;
        }

    </style>

@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


