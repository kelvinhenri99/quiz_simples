@extends('layout.main')
@section('content')

<div class="divLoginOrRegister">
    <div>
        <h1>Você é novo por aqui?
            </br>
                <span>Cadastre-se agora!</span>
        </h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Insira seu Nome"/>
            <x-jet-input id="email" type="email" name="email" :value="old('email')" required placeholder="Insira um E-mail"/>
            <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Insira uma senha"/>
            <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a senha"/>
            <x-jet-button class="ml-4">
                {{ __('Cadastrar') }}
            </x-jet-button>
        </form>
    </div>  
    <div>
        <h1>Já possui cadastro?
            </br>
                <span>Acesse agora!</span>
        </h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
                <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Insira o seu e-mail"/>
                <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Insira a senha"/>

                <x-jet-button class="ml-4">
                    {{ __('Entrar') }}
                </x-jet-button>
        </form>
    </div>
</div>

@endsection