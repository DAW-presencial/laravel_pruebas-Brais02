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
        <table>
            @foreach ($paises as $pais)
            <tr>
                <td>{{$pais->nombre}}</td>
                <td><a>Editar</a></td>
                <td><a>Eliminar</a></td>
            </tr>
            
            @endforeach
        </table>
    </body>
</html>

<?php
//<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
?>