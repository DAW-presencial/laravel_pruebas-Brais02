<!DOCTYPE html>
<html>
    <head>
        <title>Contact Laravel 8 CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">

            
            @if(last(request()->segments()) == "formulario")
            <a href="{{ url('es/formulario/') }}">
                @else
                <a href="{{ url('es/formulario/') }}"><button class="btn btn-success btn-sm">Volver atras</button></a>
                <a href=" {{url('es/formulario/'. last(request()->segments()) ) }}"> 
                    @endif
                    <button class="btn btn-light btn-sm">@lang('formulario.espanol')</button></a>

                @if(last(request()->segments()) == "formulario")
                <a href="{{ url('en/formulario/') }}">
                    @else
                    <a href=" {{url('en/formulario/'. last(request()->segments()) ) }}"> 
                        @endif
                        <button class="btn btn-light btn-sm">@lang('formulario.ingles')</button></a>
                    <a href="{{ url('/dashboard') }}"><button class="btn btn-light btn-sm">Ir al Dashboard</button></a>
                    @yield('content')
        </div>

    </body>
</html>


