@extends('Personas.layout')
@section('content')
<div class="card">
    <div class="card-header">Creando un nuevo usuario</div>
    <div class="card-body">
        <a href="{{ url('/personas') }}"><button class="btn btn-success btn-sm">Volver atras</button></a>

        <form action="{{ url('personas') }}" method="post">
            {!! csrf_field() !!}
            <label>Nombre</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>

            <label>Email</label></br>
            <input type="text" name="email" id="email" class="form-control"></br>

            <label>DNI</label></br>
            <input type="text" name="dni" id="dni" class="form-control"></br>

            <label>Edad</label></br>
            <input type="number" name="edad" id="edad" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop