<?php

namespace App\Http\Controllers;

use App\Policies\PersonaPolicy;
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
    public function index(/* $lang */) {
        //App::setLocale($lang);
        if (Gate::allows('pais-prueba')) {
            //$paises = Paises::all();
            //$paises = Paises::simplePaginate(15);
            $personas = Persona::all();
            /* Forma de enviar parametros con with, primero el nombre de
             * la futura variable y después el valor que envias
             *  return view('Personas.index')->with('personas', $personas);
             */
            return view('Personas.index', [
                'personas' => $personas,
                'policy' => new Persona
            ]);
        }
        Abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        /* Autorizar el acceso a la web a solo los
         * que sean admin a través de Policies */
        $this->authorize('create', new Persona);

        return view('Personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {

        $this->authorize('create', new Persona);

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
        $this->authorize('update', new Persona);

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
        $this->authorize('update', new Persona);

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
        $this->authorize('delete', new Persona);

        Persona::destroy($id);
        return redirect('personas')->with('flash_message', 'Persona borrada');
    }

}
