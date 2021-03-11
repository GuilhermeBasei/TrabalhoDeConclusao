@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <link href="../site/simple-sidebar.css" rel="stylesheet">
    <div class="container">
        <nav class="navbar navbar-light bg-success text-white mt-4 mb-4">
            <span class="navbar-brand mb-0 h1 text-white">Relatar Problema</span>

        </nav>

        <div class="container mt-5">

            <form action="{{route('relatarProblema.index')}}" method="POST">
                @CSRF

                <div class="h2 form-group mb-4 mt-4">
                    Fale Conosco!
                </div>

                @if(count($errors) >0)
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Erro ao enviar, verrifique as informações fornecidas e tente novamente!</h4>
                    </div>
                @endif

                @if($msg = Session::get('msg'))
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Contato enviado com sucesso!</h4>
                        <p>{{$msg}}</p>
                    </div>
                @endif

                <input type="hidden" name="nome" class="form-control col-md-3" id="exampleFormControlInput1" value="  {{Auth::user()->name}}">
                <input type="hidden" name="email" class="form-control col-md-3" id="exampleFormControlInput1" value="   {{Auth::user()->email}}">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Assunto:</label>
                    <input type="text" name="assunto" class="form-control col-md-3" id="exampleFormControlInput1">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Informe aqui sua reclamação / sugestão:</label>
                    <textarea name="texto" class="form-control col-md-6" id="exampleFormControlTextarea1" rows="5" placeholder="Informe aqui o que deseja contatar!"></textarea>
                </div>
                <button  type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>

    </div>
@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


