<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Paises</title>
    </head>
    <body>
        <h1>My Article</h1>
        <a href="{{ url('/paises') }}">Volver atras</a>
       
                <h4>{{$pais->nombre}}</h4>
                <p>{{$pais->cod_numerico}}</p>
                <p>{{$pais->codigoISO2}}</p>
                <p>{{$pais->codigoISO3}}</p>
    </body>
</html>

<?php

//<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
?>