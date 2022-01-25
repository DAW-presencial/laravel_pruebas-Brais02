<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Paises</title>
        
    </head>
    <body>
        <a href="{{ url('/paises') }}">Volver atras</a>

        <form action="{{ url('paises/'. $pais->codigoISO3) }}" method="post">
            @csrf
            @method("PATCH")
            <strong>Nombre</strong>
            <input type="text" name="nombre" placeholder="{{$pais->nombre}}">
            <strong>Codigo Numerico</strong>
            <input type="text" name="cod_numerico" placeholder="{{$pais->cod_numerico}}">
            <strong>Codigo de 2 letras</strong>
            <input type="text" name="codigoISO2" placeholder="{{$pais->codigoISO2}}">
            <strong>Codigo de 3 letras</strong>
            <input type="text" name="codigoISO3" placeholder="{{$pais->codigoISO3}}">
            <button type="submit" value="Update">Submit</button>       
        </form>
    </body>
</html>

<?php
//<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
?>