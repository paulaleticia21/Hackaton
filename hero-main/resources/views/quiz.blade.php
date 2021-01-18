@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <h1>Quiz</h1>


    @foreach ($questions as $item)
        {{$item->question}}
    @endforeach


    <br>
    <a href="{{route('match')}}">Concluir</a>

@endsection

