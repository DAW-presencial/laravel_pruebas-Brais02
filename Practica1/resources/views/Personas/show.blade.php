@extends('Personas.layout')
@section('content')

<div class="card">
    <div class="card-header">Datos de <i>{{ $personas->name }}</i></div>

    <div class="card-body">
        <a href="{{ url('/personas') }}"><button class="btn btn-success btn-sm">Volver atras</button></a>

        <h5 class="card-title">Nombre : {{ $personas->name }}</h5>
        <p class="card-text">Email : {{ $personas->email }}</p>
        <p class="card-text">Dni : {{ $personas->dni }}</p>
        <p class="card-text">Edad : {{ $personas->edad }}</p>
    </div>
</div>


