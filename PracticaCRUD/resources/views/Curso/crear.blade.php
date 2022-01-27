<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Formulario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <a href="{{ url('es/formulario') }}"><button class="btn btn-light btn-sm">@lang('formulario.espanol')</button></a>
    <a href="{{ url('en/formulario') }}"><button class="btn btn-light btn-sm">@lang('formulario.ingles')</button></a>
    <a href="{{ url('/dashboard') }}"><button class="btn btn-light btn-sm">Ir al Dashboard</button></a>

    <div class="container">
        <div class="card">
            <div class="card-header">Editando a <i>Prueba</i></div>
            <div class="card-body">
                <form>
                    @csrf

                    <label for="nombre">@lang('formulario.nombreC'):</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required><br>

                    <label for="numero">@lang('formulario.numeroC'):</label>
                    <input type="number" id="numero" name="numero" class="form-control" required value="{{ old('numero', $curso->numero ?? '') }}"><br>

                    <label for="fecha">@lang('formulario.fechaC'):</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" required value="{{ old('fecha', $curso->fecha ?? '') }}"><br>

                    <label>@lang('formulario.etiquetasC'):</label><br>
                    <input type="checkbox" id="etiqueta1" name="etiqueta1" value="Informatica" {{ (old('etiqueta1') == "Informatica") ? "checked" : "" }}>
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

                    <label for="nivelC">@lang('formulario.escogerDificultad'):</label>
                    <select name="nivelC" id="nivelC" required>
                        <option value="facil" @if (old('nivelC') === 'facil' ) selected @endif >@lang('facil')</option>
                        <option value="media" @if (old('nivelC') === 'media' ) selected @endif >@lang('media')</option>
                        <option value="dificil" @if (old('nivelC') === 'dificil' ) selected @endif >@lang('dificil')</option>
                    </select><br>

                    <button type="submit" class="btn btn-success">@lang('formulario.submit')</button>
                </form>
            </div>
        </div>
    </div>
</html>
