@extends('layouts.applogin')

@section('content')
    <button type="button" class="btn-sm btn-success" id="menu-toggle">=</button>
    <link href="../site/simple-sidebar.css" rel="stylesheet">
    <div class="container">
        <nav class="navbar navbar-light bg-success text-white mt-4 mb-4">
            <span class="navbar-brand mb-0 h1 text-white">Ajuda</span>

        </nav>

        <div class="container">


            <nav class="navbar navbar-light bg-success text-white mt-4 mb-4">
                <a href="#criarCrono" type="button" class="btn btn-light ">Criar Automaticamente</a>
                <br>
                <a href="#criarCrono2" type="button" class="btn btn-light ">Criar Manualmente</a>
                <br>
                <a href="#criarCrono3" type="button" class="btn btn-light">Editar um cronograma</a>
                <br>
                <a href="#criarCrono4" type="button" class="btn btn-light">Acessar Biblioteca</a>
                <br>
                <a href="#criarCrono5" type="button" class="btn btn-light">Editar Perfil</a>

            </nav>

        </div>

        <div class="container mt-4 ">

            <div class="row border border-success">
                <div class="col mt-4 text-center "><span
                        class=" h4 mt-4 " id="criarCrono"> Como criar um cronograma automaticamente:</span>
                    <hr>
                    <span class=""> Criar um cronograma de forma automática é bem simples<br> basta seguir os passos abaixo: </span>
                    <br><br>
                    Clicar em Criar novo Cronograma; <br>
                    Clicar em Gerar Automaticamente; <br>
                    Preencher os dados de acordo com sua necessidade; <br>
                    Clicar em Criar Cronograma; <br>
                    Pronto! cronograma criado com sucesso! <br>
                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/8jWMf9kMqh4" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>


                    </div>
                </div>
            </div>
            <div class="w-100 mt-4"></div>
            <div class="row border border-success">
                <div class="col mt-4 text-center "><span
                        class=" h4 mt-4 " id="criarCrono2"> Como criar um cronograma manualmente:</span>
                    <hr>
                    <span class=""> Criar um cronograma de forma manual é bem simples<br> basta seguir os passos abaixo: </span>
                    <br><br>
                    Clicar em Criar novo Cronograma; <br>
                    Clicar em Gerar Manualmente; <br>
                    Preencher os dados de acordo com sua necessidade; <br>
                    Clicar em Criar Cronograma; <br>
                    Preencher os Conteúdo e Matéria de acordo com suas necessidades; <br>
                    Ao chegar na última semana clique em finalizar cronograma; <br>
                    Pronto! cronograma criado com sucesso! <br>
                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yqKzsOPF9Dw" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-4"></div>
            <div class="row border border-success">
                <div class="col mt-4 text-center "><span
                        class=" h4 mt-4 " id="criarCrono3"> Como editar um cronograma:</span>
                    <hr>
                    <span
                        class=""> Editar um cronograma é bem simples e rápido<br> basta seguir os passos abaixo: </span>
                    <br><br>
                    Clicar em Acessar Cronogramas; <br>
                    Clicar em Editar Cronograma; <br>
                    Alterar os Conteúdos e Matérias; <br>
                    Clicar em Salvar; <br>
                    Cronograma Editado com sucesso! <br>

                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aa2zx9Guuqo" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-4"></div>
            <div class="row border border-success">
                <div class="col mt-4 text-center "><span
                        class=" h4 mt-4 " id="criarCrono4"> Como utilizar a biblioteca de conteúdos:</span>
                    <hr>
                    <span
                        class=""> Acessar a Biblioteca é bem fácil e rápido<br> basta seguir os passos abaixo: </span>
                    <br><br>
                    Clicar em Biblioteca de Estudos; <br>
                    Escolher uma máteria; <br>
                    Escolher um conteúdo; <br>

                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/C0tEn7Amvsg" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-4"></div>
            <div class="row border border-success">
                <div class="col mt-4 text-center "><span
                        class=" h4 mt-4 " id="criarCrono5"> Como trocar os dados do perfil:</span>
                    <hr>
                    <span
                        class=""> Alterar os dados do perfil é bem fácil e rápido<br> basta seguir os passos abaixo: </span>
                    <br><br>
                    Clicar em Acessar Perfil; <br>
                    Alterar os dados; <br>
                    Clicar em Salvar Dados; <br>
                    Perfil editado com sucesso! <br>
                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/B_fZu9M8PTw" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>


@endsection

<script src="{{ asset('site/jquery.js') }}"></script>


