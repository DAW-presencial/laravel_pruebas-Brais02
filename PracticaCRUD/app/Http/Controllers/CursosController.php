<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use App\Providers\RouteServiceProvider;
use function view;

class CursosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($lang) {
        App::setLocale($lang);

        
        $cursos = Curso::all();
        return view('Curso.index', [
           'cursos' => $cursos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($lang) {
        App::setLocale($lang);
        return view('Curso.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        Curso::create($request->all());

        /* El apartado 9
         * Redirigir a HOME en app/Providers/RouteServiceProvider, 
         * el valor que tiene HOME debe existir en web.php
         */
        return redirect(RouteServiceProvider::HOME);
        
        /* Redirigir a Home, no funciona
         * redirect(RouteServiceProvider::HOME);
         * redirect()->route(RouteServiceProvider::HOME);
         */
    }

    /**
     * Display the specified resource.
     *
     * @param  Curso  $curso
     * @return Response
     */
    public function show(Curso $curso, $lang) {
        App::setLocale($lang);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Curso  $curso
     * @return Response
     */
    public function edit(Curso $curso) {
        $curso = Curso::find($curso);
        return view('Personas.edit')->with('curso', $curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Curso  $curso
     * @return Response
     */
    public function update(Request $request, Curso $curso) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Curso  $curso
     * @return Response
     */
    public function destroy(Curso $curso) {
        Persona::destroy($curso);
        return redirect(RouteServiceProvider::HOME);
    }

}
