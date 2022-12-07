@extends('layout.main')
@section('content')

<div class="divPerguntas">
    <a href="/">Voltar página</a>
    <div>
        <h1>Perguntas com o tema tecnologia nível Fácil</h1>
        <h2>{{ Auth::user()->name }}, Estamos aguardando o seu resultado!</h2>
    </div>
    <form action="/perguntaFacil" method="POST">
        @csrf
            @foreach ($all as $all)
                <div>
                    <h1>{{ $all->id }}° Pergunta</h1>
                    <h2> {{ $all->title }} </h2>
                    <label id="p{{$all->id}}r{{$on}}"><input type="radio" name="answers{{$all->id}}">{{ $all->option1 }}</input></label>
                    <label id="p{{$all->id}}r{{$two}}"><input type="radio" name="answers{{$all->id}}">{{ $all->option2 }}</input></label>
                    <label id="p{{$all->id}}r{{$tree}}"><input type="radio" name="answers{{$all->id}}">{{ $all->option3 }}</input></label>
                    <label id="p{{$all->id}}r{{$for}}"><input type="radio" name="answers{{$all->id}}">{{ $all->option4 }}</input></label>
                </div>
            @endforeach

        <input type="submit" value="Enviar formulário">
    </form>

<script type="text/javascript" src="../javascript/btn.js"></script>

@endsection