@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <link href="../../site/simple-sidebar.css" rel="stylesheet">
    <div class="container">

        <nav class="navbar navbar-light bg-success text-white mt-4">
            <span class="navbar-brand mb-0 h1 text-white">Perfil</span>

        </nav>
        <form action="{{route('perfil.update',\Illuminate\Support\Facades\Auth::user()->id)}}" method="post">
            @csrf
            @method('PUT')

            @if(session('mensagem'))
                <div class="alert alert-success">
                    <p>{{session('mensagem')}}</p>
                </div>
            @endif
            @if(session('mensagemerro'))
                <div class="alert alert-danger">
                    <p>{{session('mensagemerro')}}</p>
                </div>
            @endif

                      <div class="container">
            <div class="form-group row mt-4">

                <label for="staticEmail" class="col-sm-1 col-form-label">Nome:</label>
                <div class="col-sm-5">
                    <input type="text" name="nome" required class="form-control"  value="{{Auth::user()->name}}">
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">E-mail:</label>
                <div class="col-sm-5">
                    <input type="email" name="email" required class="form-control"  value="{{Auth::user()->email}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword"  class="col-sm-1 col-form-label">Senha:</label>
                <div class="col-sm-4">
                    <input type="password" name="senha" required class="form-control" id="inputPassword">

                </div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Membro desde:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control text-center"  value="{{Auth::user()->created_at->format('d/M/Y - H:i:s')}}" disabled>
                </div>
                <label for="inputPassword" class="col-sm-1 col-form-label">ID:</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control text-center"  value="{{Auth::user()->id}}" disabled>
                </div>
            </div>

            <button type="submit" class="btn btn-success mr-3 mt-2 ">Salvar Dados</button>
        </form>
        <a href="{{route('altsenha.index')}}" class="btn btn-success mt-2">Alterar Senha</a>

    </div>

    </div>


@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


