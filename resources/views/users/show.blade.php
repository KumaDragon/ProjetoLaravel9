@extends('layout.app')
@section('title','Detalhes')
@section('content')

<h1> Detalhes de usuário </h1>
<ul>
<li>{{$user->name}} </li>
<li>{{$user->email}}</li>
<li>{{$user->created_at}}</li>
</ul>
    <form action="{{route('users.destroy',$user->id) }}" method="POST">
        @method('DELETE')
        @csrf <!-- gera um token para fazer a autenticação -->
        <button type="submit"> Deletar </button>
    </form>
@endsection
