@extends('layout.app')
@section('title','Editar o usuário')
@section('content')

<h1> Editar o usuário {{$user->name}} </h1>

@if ($errors->any())
    <ul class="erros">
        @foreach ($errors->all() as $item)
            <li class="error"> {{$item}}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Nome: " value="{{ $user->name }}">
    <input type="email" name="email" placeholder="E-mail: " value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha: ">
    <button type="submit"> Atualizar </button>
</form>