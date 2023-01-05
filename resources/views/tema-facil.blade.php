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
        <h2>{{ Auth::user()->name }}, seja seus resultados <a href="">aqui!</a></h2>
    </div>

    <form action="/perguntaFacil" method="POST">
        @foreach ($all as $all)
                @csrf
                <div>
                    <h1>{{ $all->id }}° Pergunta</h1>
                    <h2> {{ $all->title }} </h2>
                    <label id="p{{$all->id}}r{{$on}}"><input type="radio" name="choice{{$all->id}}" value="{{ $all->option1 }}">{{ $all->option1 }}</input></label>
                    <label id="p{{$all->id}}r{{$two}}"><input type="radio" name="choice{{$all->id}}" value="{{ $all->option2 }}">{{ $all->option2 }}</input></label>
                    <label id="p{{$all->id}}r{{$tree}}"><input type="radio" name="choice{{$all->id}}" value="{{ $all->option3 }}">{{ $all->option3 }}</input></label>
                    <label id="p{{$all->id}}r{{$for}}"><input type="radio" name="choice{{$all->id}}" value="{{ $all->option4 }}">{{ $all->option4 }}</input></label>
                </div>
        @endforeach

        <input type="submit" value="Enviar Formulário">

    </form>

    <button id="back-to-top">Ir ao topo</button>

<script>
    var btn = $("#back-to-top");
        btn.click(function() {
        $('html, body').animate({scrollTop:0}, 'slow');
    });
</script>

<script type="text/javascript" src="../javascript/btn.js"></script>

@endsection