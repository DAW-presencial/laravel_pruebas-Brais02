<?php

use App\Http\Controllers\CursosController;
//use App\Providers\RouteServiceProvider;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/{lang}/formulario', CursosController::Class);

/* Redirigir a HOME en app/Providers/RouteServiceProvider
Route::get(RouteServiceProvider::HOME, function(){
    return view('welcome');
});*/