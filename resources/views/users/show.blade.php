@extends('layout.app')
@section('title','Listagem')
@section('content')

<h1> Listagem de um usuário </h1>
<ul>
<li>{{$user->name}} </li>
<li>{{$user->email}}</li>
<li>{{$user->created_at}}</li>
</ul>

@endsection
