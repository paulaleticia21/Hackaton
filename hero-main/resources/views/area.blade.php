@extends('layouts.app')

@section('title', 'Área')

@section('content')
    <h1>Área</h1>


    @if($area->area)
        {{$area->area}}
        <br>
    @endif

    @if(isset($courses))
        @foreach ($courses as $item)
            <a href="{{$item->link}}" target="_blank">{{$item->course}}</a>
            <br>
        @endforeach
    @endif

    
@endsection