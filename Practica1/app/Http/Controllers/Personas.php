<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use function redirect;
use function view;

class Personas extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(/*$lang*/) {
        //App::setLocale($lang);
        if (Gate::allows('pais-prueba')) {
            //$paises = Paises::all();
            //$paises = Paises::simplePaginate(15);
            $personas = Persona::all();
            return view('Personas.index')->with('personas', $personas);
        }
        Abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('Personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        Persona::create($request->all());
        return redirect('personas')->with('flash_message', 'Persona añadida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $persona = Persona::find($id);
        return view('Personas.show')->with('personas', $persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $persona = Persona::find($id);
        return view('Personas.edit')->with('personas', $persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $persona = Persona::find($id);
        $persona->update($request->all());
        return redirect('personas')->with('flash_message', 'Persona actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Persona::destroy($id);
        return redirect('personas')->with('flash_message', 'Persona borrada');
    }

}
