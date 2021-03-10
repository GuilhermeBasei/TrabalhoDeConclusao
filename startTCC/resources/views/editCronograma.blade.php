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

        <button id="allsubmit" class="btn btn-success">Salvar</button>

        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            Visualizar cronograma
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Redirecionamento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Você será redirecionado para o cronograma. Caso não tenha salvo suas alterações serão perdidas!
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-secondary ml-2" href="{{route('cronogramas.show',$jj)}}">Continuar sem salvar</a>
                        <a  href="{{route('cronogramas.show',$jj)}}" id="allsubmit2" class="btn btn-success">Salvar e continuar</a>
                    </div>
                </div>
            </div>
        </div>



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


