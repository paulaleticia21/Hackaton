@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')z
    <h1>Cadastro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route('setUser')}}">
        @method('POST')
        @csrf
        <p>Nome</p>
        <input type="text" name="name">
        <p>Sobrenome</p>
        <input type="text" name="last_name">
        <p>Data de nascimento</p>
        <input type="date" name="birth">
        <p>Email</p>
        <input type="email" name="email">
        <p>Senha</p>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Cadastrar">
    </form>

@endsection