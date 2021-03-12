@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <link href="../../site/simple-sidebar.css" rel="stylesheet">


    <div class="container">
        <nav class="navbar navbar-light bg-success text-white mt-4">

            <span class="h3 mt-3 page-item disabled">Semana:
  <span
      class=" relative inline-flex items-center px-2  -ml-px text-sm text-white font-medium text-gray-700 bg-secondary  cursor-default ">{{$semanas->currentPage()}}</span>
            </span>
        </nav>


        <div class="container-fluid">



        <!--<form action="{{route('editcrono.update',$jj)}}" method="post" class="allforms">
                    @csrf
            @method('PUT')

            <button type="submit" class="btn btn-success mt-4">Adicionar Conteudos</button>
        </form>-->

            @foreach($semanas as $semana)

                @foreach($semana->array as $array)

                    <form action="{{route('semanas.update',$semana->id)}}" method="post" class="allforms">
                        @csrf
                        @method('PUT')
                        <br>
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text " id="inputGroup-sizing-lg">Conteúdo:</span>
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
                        alert('Salvo com sucesso');
                        $('.allforms').each(function () {
                            valuesToSend = $(this).serialize();
                            console.log(valuesToSend);
                            $.ajax($(this).attr('action'),
                                {
                                    method: $(this).attr('method'),
                                    data: valuesToSend
                                }
                            )
                        });

                    });

                })

                $(function () {
                    $("#allsubmit2").click(function () {
                        alert('Salvo com sucesso');

                        $('.allforms').each(function () {
                            valuesToSend = $(this).serialize();
                            console.log(valuesToSend);
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


        @if($semanas->hasMorePages())
            <a id="allsubmit" class="btn btn-success" href="{{ $semanas->nextPageUrl() }} ">Próxima Página</a>

        @else
            <form action="{{route('manual.update',$jj)}}" method="post" >
                @csrf
                @method('PUT')
                <button type="submit" id="allsubmit2" class="btn btn-success">Finalizar Cronograma</button>
            </form>


        @endif





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


