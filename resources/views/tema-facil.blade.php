@extends('layout.main')
@section('content')

@if (\Session::has('success'))
    <div class="alerta">
        {!! \Session::get('success') !!}
        <script>
            setTimeout(function() {
                $('.alerta').fadeOut('slow');
            }, 6000);
        </script>
    </div>
@endif

<div class="divPerguntas">
    <a href="/">Voltar página</a>
    <div>
        <h1>Perguntas com o tema tecnologia nível Fácil</h1>
        <h2>{{ Auth::user()->name }}, Estamos aguardando o seu resultado!</h2>
    </div>

    @foreach ($all as $all)
        <form action="/perguntaFacil" method="POST">
            @csrf
            <div>
                <h1>{{ $all->id }}° Pergunta</h1>
                <h2> {{ $all->title }} </h2>
                <input type="hidden" name="question_id" value="{{ $all->id }}">
                <label id="p{{$all->id}}r{{$on}}"><input type="radio" name="choice" value="{{ $all->option1 }}">{{ $all->option1 }}</input></label>
                <label id="p{{$all->id}}r{{$two}}"><input type="radio" name="choice" value="{{ $all->option2 }}">{{ $all->option2 }}</input></label>
                <label id="p{{$all->id}}r{{$tree}}"><input type="radio" name="choice" value="{{ $all->option3 }}">{{ $all->option3 }}</input></label>
                <label id="p{{$all->id}}r{{$for}}"><input type="radio" name="choice" value="{{ $all->option4 }}">{{ $all->option4 }}</input></label>
                
                <input type="submit" value="Confirmar {{ $all->id }}° Pergunta">
                
            </div>
        </form>
    @endforeach     

    <button id="back-to-top">Ir ao topo</button>

<script>
    var btn = $("#back-to-top");
        btn.click(function() {
        $('html, body').animate({scrollTop:0}, 'slow');
    });
</script>

<script type="text/javascript" src="../javascript/btn.js"></script>

@endsection