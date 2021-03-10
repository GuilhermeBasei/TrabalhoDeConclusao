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
                    <span> bom dia teste teste teste </span>
                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item" width="560" height="315"
                                src="https://www.youtube.com/embed/ZJTuYrumdno" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-4"></div>
            <div class="row border border-success">
                <div class="col mt-4 text-center "><span
                        class=" h4 mt-4 "id="criarCrono2"> Como criar um cronograma manualmente:</span>
                    <hr>
                    <span> bom dia teste teste teste </span>
                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item" width="560" height="315"
                                src="https://www.youtube.com/embed/ZJTuYrumdno" frameborder="0"
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
                    <span> bom dia teste teste teste </span>
                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item" width="560" height="315"
                                src="https://www.youtube.com/embed/ZJTuYrumdno" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-4"></div>
            <div class="row border border-success">
                <div class="col mt-4 text-center "><span
                        class=" h4 mt-4 "id="criarCrono4"> Como utilizar a biblioteca de conteúdos:</span>
                    <hr>
                    <span> bom dia teste teste teste </span>
                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item" width="560" height="315"
                                src="https://www.youtube.com/embed/ZJTuYrumdno" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-4"></div>
            <div class="row border border-success">
                <div class="col mt-4 text-center "><span
                        class=" h4 mt-4 "id="criarCrono5"> Como trocar os dados do perfil:</span>
                    <hr>
                    <span> bom dia teste teste teste </span>
                </div>
                <div class="col mt-4 text-center">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item" width="560" height="315"
                                src="https://www.youtube.com/embed/ZJTuYrumdno" frameborder="0"
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


