<?php

namespace App\Http\Controllers;

use App\Models\Paises;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use function redirect;
use function view;

class Pais extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
 public function index() {

        if (Gate::allows('pais-prueba')) {
            //$paises = Paises::all();
            //foreach (Paises::all() as $pais) {
//echo $pais->nombre . "<br>";
           $paises = Paises::simplePaginate(15);
            return view('Paises.Index', ['paises' => $paises]);
            
            // echo $pais->nombre . "<br>";
        } else {
            echo "fallo";
        }
        Abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response2
     */
    public function create() {
        
        return view('Paises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response2
     */
    public function store(Request $request) {
        $request->validate([
            'nombre'=> 'required',
            'cod_numerico'=> 'required',
            'codigoISO2'=> 'required',
            'codigoISO3'=> 'required',
        ]);
        Paises::created($request->all());
        return redirect('paises')-> with('success', 'Pais creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response2
     */
    public function show($id) {
        $pais = Paises::find($id);
        return view('Paises.show')->with('pais', $pais);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response2
     */
    public function edit($id) {
        $pais = Paises::find($id);
        return view('Paises.edit')->with('pais', $pais);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response2
     */
    public function update(Request $request, $id) {
        $pais = Paises::find($id);
        $pais->update($request->all());
        return redirect()->url('/paises')->with('success','Pais actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response2
     */
    public function destroy($id) {
        Paises::destroy($id);
        return redirect()->url('/paises')->with('success','Pais eliminado!');
    }

}