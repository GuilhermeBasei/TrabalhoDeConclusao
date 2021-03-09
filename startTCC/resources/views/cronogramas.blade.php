@extends('layouts.applogin')

@section('content')

    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <div class="container  ">
        <nav class="navbar navbar-light bg-success text-white mt-4">
            <span class="navbar-brand mb-0 h1 text-white">Cronogramas</span>
        </nav>
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
        <div class="list-group ">
            @foreach($cronogramas as $cronograma)
                <a  href="{{route('cronogramas.show',$cronograma->id)}}"
                   class=" list-group-item list-group-item-action mt-2 border-top border-secondary h3"> {{$cronograma->nome}}
                    <form action="{{route('cronogramas.destroy',$cronograma->id)}}" class="float-right h5" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-outline-danger ml-2">Excluir Cronograma</button>
                    </form>
                    <form action="{{route('cronogramas.edit',$cronograma->id)}}" class="float-right h5" >

                                             {{$cronograma->tipo}}
                        <button type="submit" class="btn btn-outline-success ml-2">Editar Cronograma</button>
                    </form>

                </a>
            @endforeach
        </div>
        @endsection

        <script src="{{ asset('site/jquery.js') }}"></script>


