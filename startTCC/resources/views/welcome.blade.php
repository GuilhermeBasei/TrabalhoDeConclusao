@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container mb-4">
            <h1 class="display-4 ml-4">Olá, Seja bem vindo!</h1>
            <img class="float-right " src="https://cdn.discordapp.com/attachments/592511224479088655/804053347258335313/teste4.png" width="320" height="205" alt="">

            <p class="lead ml-3 ">Organize seus estudos de forma fácil e prática com vestibulei!</p>
            <a class="ml-4 btn btn-success btn-lg" href="{{ route('register') }}" role="button">Comece agora!</a>


        </div>
    </div>



    </div>


@endsection


