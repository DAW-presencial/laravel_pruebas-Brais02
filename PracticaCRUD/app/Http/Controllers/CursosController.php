<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use App\Models\Curso;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use function redirect;
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
        if (!Gate::allows('administrador')) {
            abort(403);
        }
        return view('Curso.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CursoRequest $request) {
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

         
        $curso = Curso::find(last(request()->segments()));
        return view('Curso.show')->with('curso', $curso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Curso  $curso
     * @return Response
     */
    public function edit($id, $lang) {
        App::setLocale($lang);
        if (!Gate::allows('administrador')) {
            abort(403);
        }
        $busqueda = request()->segments();
        $curso = Curso::find($busqueda[2]);
        return view('Curso.edit')->with('curso', $curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Curso  $curso
     * @return Response
     */
    public function update(CursoRequest $request) {

        $curso = Curso::find(last(request()->segments()));
        $curso->update($request->all());
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Curso  $curso
     * @return Response
     */
    public function destroy(Curso $curso) {
        if (!Gate::allows('administrador')) {
            abort(403);
        }
        Curso::destroy(last(request()->segments()));
        return redirect(RouteServiceProvider::HOME);
    }

}
