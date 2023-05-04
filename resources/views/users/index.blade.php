@extends('layout.app')
@section('title','Listagem')
@section('content')
    <h1> Listagem de Usuários </h1>
        (<a href="{{route('users.create')}}"> + </a>)
    <ul>
    @foreach($users as $user)<!-- em $users, é o array, a tabela inteira, em $user é só uma linha -->
        <li>
        {{$user->name}} - 
        <a href="{{ route('users.show', $user->id)}}"> (detalhes) </a>
        </li>
    @endforeach
    </ul>

@endsection
