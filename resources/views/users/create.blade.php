@extends('layout.app')
@section('title','Criar usuário')
@section('content')
    <h1> Novo Usuário </h1>

    @if ($errors->any())
        <ul class="erros">
            @foreach ($errors->all() as $erros)
                <li class="error"> {{$erros}} </li>
                
            @endforeach
        </ul>
    @endif
    <form action="{{route('users.store')}}" method="POST"> {{-- o action manda pra rota, e lá da rota ele guarda num POST --}}
        @csrf <!-- Vai fazer uma proteção por token, isso É um token -->
        <input type="text" name="name" placeholder="Nome: " value="{{old('name')}}">{{-- o old utiliza o último dado preenchido, pra não preencher de novo --}}
        <input type="email" name="email" placeholder="Email: " value="{{old('email')}}">
        <input type="password" name="password" placeholder="Senha: ">
        <button type="submit"> Enviar </button>

    </form>

    (<a href="{{route('users.index')}}"> Voltar </a>)


@endsection