<!DOCTYPE html>
<html>
    <head>
        <title>Contact Laravel 8 CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <a href="{{ url('es/personas') }}"><button class="btn btn-light btn-sm">@lang('formulario.espanol')</button></a>
            <a href="{{ url('en/personas') }}"><button class="btn btn-light btn-sm">@lang('formulario.ingles')</button></a>
            <a href="{{ url('/dashboard') }}"><button class="btn btn-light btn-sm">Ir al Dashboard</button></a>
            @yield('content')
        </div>

    </body>
</html>

