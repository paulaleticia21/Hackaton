@extends('layouts.app')

@section('title', 'Curso')

@section('content')
    <h1>Curso</h1>

    @if($course->course)
        {{$course->course}}
    @endif

    <br>

    <a href="about:blank" target="_blank">Link</a>
@endsection