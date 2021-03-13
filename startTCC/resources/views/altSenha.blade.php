@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <link href="../site/simple-sidebar.css" rel="stylesheet">
    <div class="container">
        <nav class="navbar navbar-light bg-success text-white mt-4">
            <span class="navbar-brand mb-0 h1 text-white">Perfil</span>

        </nav>
        <form action="{{route('altsenha.update',\Illuminate\Support\Facades\Auth::user()->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="container ml-4 ">
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
                <div class="form-group row mt-4 ">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Senha Antiga:</label>
                    <div class="col-sm-4">
                        <input type="password" name="oldsenha"  required class="form-control">
                    </div>

                </div>


                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Nova Senha:</label>
                        <div class="col-sm-4">
                        <input type="password" name="senha1" required class="form-control"  >
                    </div>
                    </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Repita a Nova Senha:</label>
                    <div class="col-sm-4">
                        <input type="password" name="senha2" required class="form-control" id="inputPassword">
                    </div>

                </div>

                <button type="submit" class="btn btn-success mr-3 mt-2 ">Salvar</button>
            </div>
        </form>

    </div>
    </div>


@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


