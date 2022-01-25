<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Paises</title>
        
    </head>
    <body>
        <a href="{{ url('/paises') }}">Volver atras</a>

        <form action="{{ url('paises') }}" method="POST">
            @csrf
            <label>Nombre</label>
            <input type="text" name="nombre"><br>
            <label>Codigo Numerico</label>
            <input type="text" name="cod_numerico"><br>
            <label>Codigo de 2 letras</label>
            <input type="text" name="codigoISO2"><br>
            <label>Codigo de 3 letras</label>
            <input type="text" name="codigoISO3"><br>
            <button type="submit" value="Save">Submit</button>       
        </form>
    </body>
</html>

<?php
//<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
?>