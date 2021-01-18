@extends('layouts.app')

@section('title', 'Perfil')

@section('content')
    <h1>Perfil</h1>

    {{$user->name}}
@endsection