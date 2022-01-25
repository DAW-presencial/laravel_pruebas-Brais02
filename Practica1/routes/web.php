<?php

use App\Http\Controllers\ContadorController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\Pais;
use App\Http\Controllers\Personas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*POR DEFECTO*/
Route::view('/', 'welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


/*MIOS*/

//Route::view('/idioma', 'idioma');

Route::get('/{lang}/idioma', [IdiomaController::class, 'idioma']);

//Para el funcionamiento de las cookies
Route::get('/visitas', ContadorController::class);

Route::get('/visitas/{numero}', [ContadorController::class, 'parametros']);

//Para llamar a la agenda
Route::view('/agenda', 'agenda');

route::middleware('pepito')->get('pepito', function(){});

Route::resource('paises', Pais::class);

Route::resource('/personas', Personas::class)->middleware('auth');

/*
Route::get('/', function(){
    return view('contador');
});
Route::get('/{$numero}', function ($numero) {
    return 'User '. $numero;
});*/

/*Los dos cargan la misma vista, pero carga siempre la que este más abajo
/Route::get('/', function(){
    return view('welcome');
});
Route::view('/','welcome');
Route::view('bienvenido','welcome');
//Cuando pongan /saludo le mostrara la vista welcome
Route::get('bienvenido/{$name}',function($name){
    return view('welcome',compact('name'));
});
Route::get('/visitas', ContadorController::class)*/