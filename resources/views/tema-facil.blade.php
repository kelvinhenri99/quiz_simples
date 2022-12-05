@extends('layout.main')
@section('content')

<div class="divPerguntas">
    <a href="/">Voltar página</a>
    <form action="">
        <div>
            <h1>Insira seu nome</h1>
            <input type="text" />
                </br>
            <h2>Você autoriza a aparecer seus resultados na página principal?
                </br>
                <span>
                    <input type="radio" name="principal" checked>Não
                    <input type="radio" name="principal">Sim
                </span>
            </h2>
        </div>
        <div>
            <h1>1° Pergunta</h1>
            <h2>uma pergunta aleatoria</h2>
            <p>dasdsa</p>
            <p>dasdsa</p>
        </div>
        <input type="submit" value="Enviar formulário">
    </form>
</div>
@endsection