<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContadorController;

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

Route::view('/','welcome');

//Para el funcionamiento de las cookies
Route::get('/visitas', ContadorController::class);

Route::get('/visitas/{numero}', [ContadorController::class, 'parametros']);

//Para llamar a la agenda
Route::view('/agenda', 'agenda');


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
