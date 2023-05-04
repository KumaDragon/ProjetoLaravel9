@extends('layout.app')
@section('title','Criar usuário')
@section('content')
    <h1> Novo Usuário </h1>
    <form action="{{route('users.store')}}" method="POST">
        @csrf <!-- Vai fazer uma proteção por token, isso É um token -->
        <input type="text" name="name" placeholder="Nome: ">
        <input type="email" name="email" placeholder="Email: ">
        <input type="password" name="password" placeholder="Senha: ">
        <button type="submit"> Enviar </button>

    </form>

    (<a href="{{route('users.index')}}"> Voltar </a>)


@endsection