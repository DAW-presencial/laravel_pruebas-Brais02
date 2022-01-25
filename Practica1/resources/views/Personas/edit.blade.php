@extends('Personas.layout')
@section('content')
<div class="card">
    <div class="card-header">Editando a <i>{{$personas->name}}</i></div>
    <div class="card-body">
        <a href="{{ url('/personas') }}"><button class="btn btn-success btn-sm">Volver atras</button></a>

        <form action="{{ url('personas/' .$personas->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$personas->id}}" id="id" />

            <label>Nombre</label></br>
            <input type="text" name="name" id="name" value="{{$personas->name}}" class="form-control"></br>

            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{$personas->email}}" class="form-control"></br>

            <label>DNI</label></br>
            <input type="text" name="dni" id="dni" value="{{$personas->dni}}" class="form-control"></br>

            <label>Edad</label></br>
            <input type="number" name="edad" id="edad" value="{{$personas->edad}}" class="form-control"></br>

            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop