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
            <div class="card-header">@lang('edit')</div>
            <div class="card-body">
                <form action="{{ url('/es/formulario') }}" method="post">
                    {!! csrf_field() !!}

                    <label for="nombre">@lang('formulario.nombreC'):</label>
                    <input type="text" id="nombre" name="nombre" class="form-control"><br>
                    {{$errors->first('nombre')}}

                    <label for="numero">@lang('formulario.numeroC'):</label>
                    <input type="number" id="numero" name="numero" class="form-control" required value="{{ old('numero', $curso->numero ?? '') }}"><br>
                    {{$errors->first('numero')}}

                    <label for="fecha">@lang('formulario.fechaC'):</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" required value="{{ old('fecha', $curso->fecha ?? '') }}"><br>
                    {{$errors->first('fecha')}}

                    <label>@lang('formulario.multi'):</label><br>
                    <input type="checkbox" id="multilenguaje" name="multilenguaje" value="true" {{ (old('multilenguaje') == "true") ? "checked" : "" }}>
                    <label for="multilenguaje">@lang('formulario.si')</label><br>
                    {{$errors->first('multilenguaje')}}
                    
                    <label>@lang('formulario.tipoC'):</label><br>
                    <input type="radio" id="pago" name="pago" value="true" {{ (old('tipoCurso') == "true") ? "checked" : "" }}>
                    <label for="pago">@lang('formulario.pago')</label><br>
                    <input type="radio" id="gratis" name="pago" value="false" {{ (old('tipoCurso') == "false") ? "checked" : "" }}>
                    <label for="gratis">@lang('formulario.gratis')</label><br><br>
                    {{$errors->first('pago')}}
                    
                    <label for="descripcion">@lang('formulario.descripcionC'):</label>
                    <textarea id="descripcion" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea><br>
                    {{$errors->first('descripcion')}}

                    <div class="form-group{{ $errors->has('dificultad') ? ' has-error' : '' }}">
                        <label for="dificultad">@lang('formulario.escogerDificultad'):</label>
                        <select name="dificultad" id="nivelC" required>
                            <option value="facil" @if (old('nivelC') == 'facil' ) selected @endif >@lang('facil')</option>
                            <option value="media" @if (old('nivelC') == 'media' ) selected @endif >@lang('media')</option>
                            <option value="dificil" @if (old('nivelC') == 'dificil' ) selected @endif >@lang('dificil')</option>
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
