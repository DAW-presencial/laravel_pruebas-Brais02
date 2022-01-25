<?php

namespace App\Http\Controllers;

class ContadorController extends Controller {

    function __invoke() {

        //$prueba = htmlspecialchars($_COOKIE["Contador"]);
        //$prueba = $_COOKIE["Contador"];

        if (isset($_COOKIE["Contador"])) {
            setcookie("Contador", $_COOKIE["Contador"] + 1);
            echo "Has entrado por " . $_COOKIE["Contador"] . " vez";
        } else {
            echo "Has entrado por primer vez";
            setcookie("Contador", 2);
            // Para llamar a la galleta de sesion, lo pondrias donde va Contador, session_name()
        }
    }

    function parametros($numero) {
        if (isset($numero)) {
            setcookie("Contador", $numero);
        }
        echo "Has entrado por " . $_COOKIE["Contador"] . " vez";
    }

}
