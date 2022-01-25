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
        <h1>My Article</h1>
        <a href="{{ url('/paises/create') }}">Crear Pais</a>
        <table>
            @foreach ($paises as $pais)
            <tr>
                <td>{{$pais->nombre}}</td>
                <td>{{$pais->codigoISO3}}</td>
                <td><a href="{{ url('/paises/' . $pais->codigoISO3) }}">Ver</a></td>
                <td><a href="{{ url('/paises/' . $pais->codigoISO3 . '/edit') }}">Editar</a></td>
                <td><a>Eliminar</a></td>
            </tr>
            
            @endforeach
        </table>
        <!-- Para hacer la paginación-->
        {!! $paises->appends(Request::all())->links()!!} 
    </body>
</html>

<?php

//<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
?>