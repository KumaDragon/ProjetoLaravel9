@extends('layout.app')
@section('title','Listagem')
@section('content')
    <h1> Listagem de Usuários (<a href="{{route('users.create')}}"> + </a>)</h1>

    <ul>
    @foreach($users as $user)<!-- em $users, é o array, a tabela inteira, em $user é só uma linha -->
        <li>
        {{$user->name}} - 
        <a href="{{ route('users.show', $user->id)}}"> (detalhes) </a>
        <a href="{{ route('users.edit', $user->id)}}"> (editar) </a>
        </li>
    @endforeach
    </ul>

@endsection
