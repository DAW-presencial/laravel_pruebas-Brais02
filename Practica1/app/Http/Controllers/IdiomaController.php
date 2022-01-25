<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class IdiomaController extends Controller {
     function __invoke($lang) {
        App::setLocale($lang);
      return view('idioma');
      } 

    function idioma($lang) {
        App::setLocale($lang);
        return view('idioma');
    }

}
