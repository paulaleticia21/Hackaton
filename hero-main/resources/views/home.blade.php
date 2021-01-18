@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container-center">


    <div class="container-fluid  ">

      <h1 class="display-1 d-flex justify-content-center"> Construa sua história de sucesso</h1>

      <h3> Se inspire em histórias reais e de sucesso selecionadas a partir dos seus gostos e interesses. </h3>

      <a href="{{route('setUser')}}" class="btn btn-primary btn-lg cores" role="button" aria-pressed="true">Inicie sua
        história</a>


    </div>
  </div>
  <nav class="navbar navbar-light bg-light navbar-container">

    <a class="navbar-brand" href="home.html">
    <img src="assests/logo.jpeg" width="150" height="100" class="d-inline-block align-top" alt="">

    </a>
    <nav class="navbar navbar-light ">
    <form class="form-inline">
        <a href="{{route('setUser')}}" class="btn btn-primary cores" role="button" aria-pressed="true">Acessa minha
        história</a>

    </form>
    </nav>
    </nav>
@endsection