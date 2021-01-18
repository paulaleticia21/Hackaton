@extends('layouts.app')

@section('title', 'Hero')

@section('content')
    <h1>Hero Bio</h1>

    @if($hero->name)
        {{$hero->name}}
        <br>
    @endif
    
    @if(isset($areas))
        @foreach ($areas as $item)
            <a href="{{route('getArea', ['slug'=>$item->slug])}}">{{$item->area}}</a>
            <br>
        @endforeach
    @endif

    
@endsection