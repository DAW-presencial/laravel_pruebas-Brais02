@extends('Personas.layout')
@section('content')
<div class="card">
    <div class="card-header">Editando a <i>{{$personas->name}}</i></div>
    <div class="card-body">
        <a href="{{ url('/personas') }}"><button class="btn btn-success btn-sm">Volver atras</button></a>

        <form action="{{ url('personas/' .$cursos->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$cursos->id}}" id="id" />

            <label>Nombre</label></br>
            <input type="text" name="name" id="name" value="{{$cursos->name}}" class="form-control"></br>

            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{$cursos->email}}" class="form-control"></br>

            <label>DNI</label></br>
            <input type="text" name="dni" id="dni" value="{{$cursos->dni}}" class="form-control"></br>

            <label>Edad</label></br>
            <input type="number" name="edad" id="edad" value="{{$cursos->edad}}" class="form-control"></br>

            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop