@extends('Curso.layout')
@section('content')

<div class="card">
    <div class="card-header">Datos de <i>{{ $curso->nombre }}</i></div>

    <div class="card-body">
        <h5 class="card-title text-center">Usuario nº{{ $curso->id }} con nombre {{ $curso->nombre }}</h5>
        <p class="card-text">El numero de clases es: <b>{{ $curso->numero }}</b></p>
        <p class="card-text">La fecha de publicación es: <b>{{ $curso->fecha }}</b></p>
        <p class="card-text">La clase tiene multilenguaje: 
            @if($curso->multilenguaje == true) 
            <b>@lang('formulario.si')</b>
            @else
            <b>@lang('formulario.no')</b>
            @endif
        </p>
        <p class="card-text">El curso es 
            @if($curso->pago == true) 
            <b>@lang('formulario.pago')</b>
            @else
            <b>@lang('formulario.gratis')</b>
            @endif
        </p>
        <p class="card-text">La descripción del curso es: <i>{{ $curso->descripcion }}</i></p>
        <p class="card-text">La dificultad del curso es: <b>@lang("formulario.$curso->dificultad" )</b></p>
    </div>
</div>
@endsection
