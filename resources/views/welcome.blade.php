@extends('layout.main')
@section('content')

    <div class="divWelcome">
        <h1>Quiz Tech - o Quiz da Tecnologia!</h1>
        <div class="divImageWelcome">
            <p>Demonstre seus conhecimentos sobre a tecnologia nesse quiz de perguntas e respostas!
                </br><span>Sistema feito em PHP(Laravel). Link <a href="#">repositório</a></span>
            </p>
        </div>
    </div>

    <div class="divTema">
        <h1>Escolha um tema para prosseguir</h1>
        <div class="divGridNivel">
            <a href="/tema-facil">Fácil</a>
            <a href="/tema-medio">Médio</a>
            <a href="/tema-dificil">Difícil</a>
        </div>
    </div>

@endsection