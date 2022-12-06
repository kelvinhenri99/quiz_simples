@extends('layout.main')
@section('content')

@foreach ($facil as $facil)@endforeach

<div class="divPerguntas">
    <a href="/">Voltar página</a>

    @if ($facil == null)
    <form action="/perguntaFacil" method="POST">
        @csrf
        <div>
            <h1>Insira seu nome</h1>
            <input type="text" value="{{Auth::user()->name}}" />
                </br>
            <h2>Você autoriza a aparecer seus resultados na página principal?
                </br>
                <span>
                    <input type="radio" name="autorizacao" checked value="NAO">Não
                    <input type="radio" name="autorizacao" value="SIM">Sim
                </span>
            </h2>
        </div>

            <div>
                <h1>1° Pergunta</h1>
                <h2>Qual o sinômimo de ONLINE?</h2>
                <label id="p1r1"><input type="radio" name="pergunta1" value="resposta1">Distante.</label>
                <label id="p1r2"><input type="radio" name="pergunta1" value="resposta2">Acessível.</label>
                <label id="p1r3"><input type="radio" name="pergunta1" value="resposta3">Desconectado.</label>
                <label id="p1r4"><input type="radio" name="pergunta1" value="resposta4">Apresentado.</label>
            </div>

            <div>
                <h1>2° Pergunta</h1>
                <h2>Por que devemos evitar o acesso a wifi público?</h2>
                <label id="p2r1"><input type="radio" name="pergunta2" value="resposta1">Pois a conexão é ruim.</label>
                <label id="p2r2"><input type="radio" name="pergunta2" value="resposta2">Não conhecer a senha.</label>
                <label id="p2r3"><input type="radio" name="pergunta2" value="resposta3">Celular pode quebrar.</label>
                <label id="p2r4"><input type="radio" name="pergunta2" value="resposta4">Hackers podem ter acesso ao seu dispositivo.</label>
            </div>

            <div>
                <h1>3° Pergunta</h1>
                <h2>Com o avanço da tecnologia em geral, cada vez as coisas então sendo menores e com muito mais funções, como por exemplo um telefone fixo comparado a um celular. Por que isso ocorre?</h2>
                <label id="p3r1"><input type="radio" name="pergunta3" value="resposta1">A tecnologia quer acabar com coisas grandes.</label>
                <label id="p3r2"><input type="radio" name="pergunta3" value="resposta2">A tecnologia vem para inovar as coisas existentes e otimizar tempo.</label>
                <label id="p3r3"><input type="radio" name="pergunta3" value="resposta3">A tecnologia irá sempre diminuir o tamanho dos objetos já criados.</label>
                <label id="p3r4"><input type="radio" name="pergunta3" value="resposta4">Todas as alternativas.</label>
            </div>

            <div>
                <h1>4° Pergunta</h1>
                <h2>Nesse século XXI, a demanda das empresas por profissionais de tecnologia aumentaram muito. Quais são os principais cargos de tecnologia atualmente(2022)?</h2>
                <label id="p4r1"><input type="radio" name="pergunta4" value="resposta1">Desenvolvedor, Encarregado, Analista de dados.</label>
                <label id="p4r2"><input type="radio" name="pergunta4" value="resposta2">Desenvolvedor, Analista de big data, Especialista em segurança da informação.</label>
                <label id="p4r3"><input type="radio" name="pergunta4" value="resposta3">Desenvolvedor, estagiário, Segurança.</label>
                <label id="p4r4"><input type="radio" name="pergunta4" value="resposta4">Desenvolvedor, Gerente, Diretor.</label>
            </div>

            <div>
                <h1>5° Pergunta</h1>
                <h2>Qual a frase que melhor define a tecnologia?</h2>
                <label id="p5r1"><input type="radio" name="pergunta5" value="resposta1">Inovação e transparência.</label>
                <label id="p5r2"><input type="radio" name="pergunta5" value="resposta2">Inovação e segurança.</label>
                <label id="p5r3"><input type="radio" name="pergunta5" value="resposta3">Inovação e paixão.</label>
                <label id="p5r4"><input type="radio" name="pergunta5" value="resposta4">Inovação e publicidade.</label>
            </div>

        <input type="submit" value="Enviar formulário">
    </form>
    @else
        <div>
            <h1>Parabéns {{Auth::user()->name}}! Você concluíu o tema <span>FACIL</span>.</h1>
            <h1>Total de pontos:
                <span>
                    em desenvolvimeto...
                </span>
            </h1>
        </div>

            <div>
                <h1>1° Pergunta</h1>
                <h2>Qual o sinômimo de ONLINE?</h2>
                @if ($facil->pergunta1 === 'resposta1')
                    <label class="nao">Distante.</label>
                @else
                    <label>Distante.</label>
                @endif
                @if ($facil->pergunta1 === 'resposta2')
                    <label class="sim">Acessível.</label>
                @else
                    <label class="sim">Acessível.</label>
                @endif
                @if ($facil->pergunta1 === 'resposta3')
                    <label class="nao">Desconectado.</label>
                @else
                    <label>Desconectado.</label>
                @endif
                @if ($facil->pergunta1 === 'resposta4')
                    <label class="nao">Apresentado.</label>
                @else
                    <label>Apresentado.</label>
                @endif
            </div>

            <div>
                <h1>2° Pergunta</h1>
                <h2>Por que devemos evitar o acesso a wifi público?</h2>
                @if ($facil->pergunta2 === 'resposta1')
                    <label class="nao">Pois a conexão é ruim.</label>
                @else
                    <label>Pois a conexão é ruim.</label>
                @endif
                @if ($facil->pergunta2 === 'resposta2')
                    <label class="nao">Não conhecer a senha.</label>
                @else
                <label>Não conhecer a senha.</label>
                @endif
                @if ($facil->pergunta2 === 'resposta3')
                    <label class="nao">Celular pode quebrar.</label>
                @else
                <label>Celular pode quebrar.</label>
                @endif
                @if ($facil->pergunta2 === 'resposta4')
                    <label class="sim">Hackers podem ter acesso ao seu dispositivo.</label>
                @else
                    <label class="sim">Hackers podem ter acesso ao seu dispositivo.</label>
                @endif
            </div>

            <div>
                <h1>3° Pergunta</h1>
                <h2>Com o avanço da tecnologia em geral, cada vez as coisas então sendo menores e com muito mais funções, como por exemplo um telefone fixo comparado a um celular. Por que isso ocorre?</h2>
                @if ($facil->pergunta3 === 'resposta1')
                    <label class="nao">A tecnologia quer acabar com coisas grandes.</label>
                @else
                    <label>A tecnologia quer acabar com coisas grandes.</label>
                @endif
                @if ($facil->pergunta3 === 'resposta2')
                    <label class="sim">A tecnologia vem para inovar as coisas existentes e otimizar tempo.</label>
                @else
                    <label class="sim">A tecnologia vem para inovar as coisas existentes e otimizar tempo.</label>
                @endif
                @if ($facil->pergunta3 === 'resposta3')
                    <label class="nao">A tecnologia irá sempre diminuir o tamanho dos objetos já criados.</label>
                @else
                    <label>A tecnologia irá sempre diminuir o tamanho dos objetos já criados.</label>
                @endif
                @if ($facil->pergunta3 === 'resposta4')
                    <label class="nao">Todas as alternativas.</label>
                @else
                    <label>Todas as alternativas.</label>
                @endif
            </div>

            <div>
                <h1>4° Pergunta</h1>
                <h2>Nesse século XXI, a demanda das empresas por profissionais de tecnologia aumentaram muito. Quais são os principais cargos de tecnologia atualmente(2022)?</h2>
                @if ($facil->pergunta4 === 'resposta1')
                    <label class="nao">Desenvolvedor, Encarregado, Analista de dados.</label>
                @else
                    <label>Desenvolvedor, Encarregado, Analista de dados.</label>
                @endif
                @if ($facil->pergunta4 === 'resposta2')
                    <label class="sim">Desenvolvedor, Analista de big data, Especialista em segurança da informação.</label>
                @else
                    <label class="sim">Desenvolvedor, Analista de big data, Especialista em segurança da informação.</label>
                @endif
                @if ($facil->pergunta4 === 'resposta3')
                    <label class="nao">Desenvolvedor, estagiário, Segurança.</label>
                @else
                    <label>Desenvolvedor, estagiário, Segurança.</label>
                @endif
                @if ($facil->pergunta4 === 'resposta4')
                    <label class="nao">Desenvolvedor, Gerente, Diretor.</label>
                @else
                    <label>Desenvolvedor, Gerente, Diretor.</label>
                @endif
            </div>

            <div>
                <h1>5° Pergunta</h1>
                <h2>Qual a frase que melhor define a tecnologia?</h2>
                @if ($facil->pergunta5 === 'resposta1')
                    <label class="nao">Inovação e transparência.</label>
                @else
                    <label>Inovação e transparência.</label>
                @endif
                @if ($facil->pergunta5 === 'resposta2')
                    <label class="sim">Inovação e segurança.</label>
                @else
                    <label class="sim">Inovação e segurança.</label>
                @endif
                @if ($facil->pergunta5 === 'resposta3')
                    <label class="nao">Inovação e paixão.</label>
                @else
                    <label>Inovação e paixão.</label>
                @endif
                @if ($facil->pergunta5 === 'resposta4')
                    <label class="nao">Inovação e publicidade.</label>
                @else
                    <label>Inovação e publicidade.</label>
                @endif
            </div>

            <h2>Realizado em {{$facil->data}}</h2>
    @endif
</div>

<script type="text/javascript" src="../javascript/btn.js"></script>

@endsection