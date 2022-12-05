<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Tech</title>
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/welcome.css">
    <link rel="stylesheet" href="../css/perguntas.css">
    <link rel="stylesheet" href="../css/loginregister.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="divMenu">
        <h1>Quiz Tech</h1>
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="divMenuBtn">Sair</a>
            </form>
            <a href="/meu-perfil/" class="divMenuBtn">Meu Perfil</a>
        @endauth

        @guest
            <a href="/entrar-cadastrar" class="divMenuBtn">Faça Login ou Cadastre-se</a>
        @endguest
        
            <a href="/" class="divMenuBtn">Início</a>
    </div>
    @yield('content')
</body>
</html>