@extends('Personas.layout')
@section('content')

<div class="card">
    <div class="card-header">Datos de <i>{{ $personas->name }}</i></div>

    <div class="card-body">
        <a href="{{ url('/personas') }}"><button class="btn btn-success btn-sm">Volver atras</button></a>

        <h5 class="card-title">Nombre : {{ $curso->name }}</h5>
        <p class="card-text">Email : {{ $curso->email }}</p>
        <p class="card-text">Dni : {{ $curso->dni }}</p>
        <p class="card-text">Edad : {{ $curso->edad }}</p>
    </div>
</div>


