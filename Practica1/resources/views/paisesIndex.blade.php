<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Paises</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <button><a href="{{url('es/paises')}}">@lang('formulario.espanol')</a></button>
        <button><a href="{{url('en/paises')}}">@lang('formulario.ingles')</a></button>

    <h1>@lang('formulario.tituloindex')</h1>
    <table>
        @foreach ($paises as $pais)
        <tr>
            <td>{{$pais->nombre}}</td>
            <td><a>@lang('formulario.editar')</a></td>
            <td><a>@lang('formulario.borrar')</a></td>
        </tr>

        @endforeach
    </table>
</body>
</html>

<?php
//<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
?>