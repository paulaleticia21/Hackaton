@extends('layouts.app')

@section('title', 'Match')

@section('content')
    <h1>Match Inspiradores!</h1>

    @foreach ($heroes as $item)
        {{$item->name}}
        {{$item->slug}}
        <a href="{{route('getHero', ['slug'=>$item->slug])}}">Hero</a>
        <br>
    @endforeach
    
@endsection