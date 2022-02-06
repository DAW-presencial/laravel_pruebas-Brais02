@extends('Curso.layout')
@section('content')
<div class="card">
    <div class="card-header">Editando a <i>{{$curso->nombre}}</i></div>
    <div class="card-body">

        <form action="{{ url('/es/formulario/' .$curso->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$curso->id}}" id="id" />

            <label for="nombre">@lang('formulario.nombreC'):</label>
            <input type="text" id="nombre" name="nombre" value="{{$curso->nombre}}" class="form-control"><br>
            {{$errors->first('nombre')}}

            <label for="numero">@lang('formulario.numeroC'):</label>
            <input type="number" id="numero" name="numero" class="form-control" required value="{{ $curso->numero }}"><br>

            <label for="fecha">@lang('formulario.fechaC'):</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required value="{{ $curso->fecha }}"><br>


            <label>@lang('formulario.multi'):</label><br>
            <input type="checkbox" id="etiqueta1" name="multilenguaje" value="true" {{ (old('multilenguaje') == "true") ? "checked" : "" }}>
            <label for="etiqueta1">@lang('formulario.si')</label><br>

            <label>@lang('formulario.tipoC'):</label><br>
            <input type="radio" id="pago" name="pago" value="true" {{ (old('tipoCurso') == "true") ? "checked" : "" }}>
            <label for="pago">@lang('formulario.pago')</label><br>
            <input type="radio" id="gratis" name="pago" value="false" {{ (old('tipoCurso') == "false") ? "checked" : "" }}>
            <label for="gratis">@lang('formulario.gratis')</label><br><br>

            <label for="descripcion">@lang('formulario.descripcionC'):</label>
            <textarea id="descripcion" name="descripcion" class="form-control">{{ $curso->descripcion }}</textarea><br>

            <div class="form-group">
                <label for="dificultad">@lang('formulario.escogerDificultad'):</label>
                <select name="dificultad" id="nivelC" required>
                    <option value="facil" @if (old('nivelC') == 'facil' ) selected @endif >@lang('facil')</option>
                    <option value="media" @if (old('nivelC') == 'media' ) selected @endif >@lang('media')</option>
                    <option value="dificil" @if (old('nivelC') == 'dificil' ) selected @endif >@lang('dificil')</option>
                </select><br>
                <small class="text-danger">{{$errors->first('dificultad')}}</small>
            </div>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop