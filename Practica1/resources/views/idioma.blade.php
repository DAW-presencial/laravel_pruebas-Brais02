<?php
/*use Illuminate\Support\Facades\App;

$locale = App::currentLocale();

if(App::isLocale('es')) {
    $web = "formularioCastellano";
} else {
     $web = "formularioIngles";
}*/

//echo __('hola');
?>

<button><a href="{{url('es/idioma')}}">Español</a></button>
<button><a href="{{url('gl/idioma')}}">Galego</a></button>
<button><a href="{{url('en/idioma')}}">Ingles</a></button>

<form>
     <label for="Correo">@lang('formulario.correo')</label>
        <input type="text" id="Correo" required><br>
        <label for="Contrasena">@lang('formulario.contrasena')</label>
        <input type="text" id="Contrasena" required><br>
        <button id="Enviar">@lang('formulario.g')</button>
        <input type="reset">
</form>
@lang('hola')<br>
@lang('Logout')