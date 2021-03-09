@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>

    <div class="container">
        <nav class="navbar navbar-light bg-success text-white mt-4">
            <span class="navbar-brand mb-0 h1 text-white">Cronograma Automático</span>
        </nav>
        <form action="{{route('cronogramas.store')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6 mt-3">
                    <label for="nome">Nome do cronograma:</label>
                    <input type="text" required class="form-control" name="nome" placeholder="Cronograma vestibular">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="areaDificuldade">Área de maior dificuldade</label>
                    <select id="areaDificuldade" class="form-control" name="area">
                        <option>Humanas</option>
                        <option>Exatas</option>
                        <option>Biológicas</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="quantSemanas">Quantidade de semanas:</label>
                    <select name="quantSemanas" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="quantConteudos">Quantidade de conteúdos:</label>
                    <select name="quantConteudos" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
            </div>
                <div class="form-row" style="display:none">
                    <div class="form-group col-md-2">
                        <label for="quantConteudos">Quantidade de conteúdos:</label>
                        <select id="quantConteudos" class="form-control" name="tipo">
                            <option>Cronograma Automático</option>
                        </select>
                    </div>
                </div>




            <input class="btn btn-success" type="submit" value="Criar Cronograma">
        </form>

        </div>
    </div>



@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


