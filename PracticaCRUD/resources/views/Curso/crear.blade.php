@extends('Curso.layout')
@section('content')

   @if($errors->any())
    <ul class='red'>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{$error}}</li> 
        @endforeach
    </ul>
    @endif

    <div class="container">
        <div class="card">
            <div class="card-header">Editando a <i>Prueba</i></div>
            <div class="card-body">
                <form action="{{ url('/es/formulario') }}" method="post">
                    {!! csrf_field() !!}

                    <label for="nombre">@lang('formulario.nombreC'):</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required><br>
                    {{$errors->first('nombre')}}

                    <label for="numero">@lang('formulario.numeroC'):</label>
                    <input type="number" id="numero" name="numero" class="form-control" required value="{{ old('numero', $curso->numero ?? '') }}"><br>

                    <label for="fecha">@lang('formulario.fechaC'):</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" required value="{{ old('fecha', $curso->fecha ?? '') }}"><br>


                    <label>@lang('formulario.etiquetasC'):</label><br>
                    <input type="checkbox" id="etiqueta1" name="etiquetas" value="Informatica" {{ (old('etiqueta1') == "Informatica") ? "checked" : "" }}>
                    <label for="etiqueta1">@lang('formulario.tic')</label><br>
                    <input type="checkbox" id="etiqueta2" name="etiqueta2" value="Historia" {{ (old('etiqueta2') == "Historia") ? "checked" : "" }}>
                    <label for="etiqueta2">@lang('formulario.historia')</label><br><br>

                    <label>@lang('formulario.tipoC'):</label><br>
                    <input type="radio" id="pago" name="tipoCurso" value="Pago" {{ (old('tipoCurso') == "Pago") ? "checked" : "" }}>
                    <label for="pago">@lang('formulario.pago')</label><br>
                    <input type="radio" id="gratis" name="tipoCurso" value="Gratis" {{ (old('tipoCurso') == "Gratis") ? "checked" : "" }}>
                    <label for="gratis">@lang('formulario.gratis')</label><br><br>

                    <label for="descripcion">@lang('formulario.descripcionC'):</label>
                    <textarea id="descripcion" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea><br>

                    <div class="form-group{{ $errors->has('dificultad') ? ' has-error' : '' }}">
                        <label for="dificultad">@lang('formulario.escogerDificultad'):</label>
                        <select name="dificultad" id="nivelC" required>
                            <option value="facil" @if (old('nivelC') === 'facil' ) selected @endif >@lang('facil')</option>
                            <option value="media" @if (old('nivelC') === 'media' ) selected @endif >@lang('media')</option>
                            <option value="dificil" @if (old('nivelC') === 'dificil' ) selected @endif >@lang('dificil')</option>
                        </select><br>
                        <small class="text-danger">{{$errors->first('dificultad')}}</small>
                    </div>

                    <button type="submit" class="btn btn-success" value="Save">@lang('formulario.submit')</button>
                </form>
            </div>
        </div>
    </div>
</html>
@endsection
