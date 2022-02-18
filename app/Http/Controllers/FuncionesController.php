<?php

namespace App\Http\Controllers;

use App\Funcion;

use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function index() {
        $funciones = Funcion::all();
        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('funciones.index',$argumentos);
    }

    public function destroy($id){
        $funciones = Funcion:: find($id);
        if ($funciones)
        {
            if ($funciones->delete())
            {
                return redirect()->route('funciones.index', $id) ->with('sucess', 'esa funcion ha sido borrada con exito');

            }
            return redirect()->route('funciones.index')->with('error', 'no se pudo encontrar la funcion');
        }
        return redirect()->route('funciones.index')->with('error', 'no se pudo encontrar la funcion');

    }

    public function create(){
        return view('funciones.create');
    }

    public function store (Request $request){
        $nuevaFuncion = new Funcion();
        $nuevaFuncion->pelicula = $request->input('pelicula');
        $nuevaFuncion->fecha = $request->input('fecha');
        $nuevaFuncion->hora = $request->input('hora');

        if($nuevaFuncion->save()){
            return redirect()->route('funciones.index')->with('sucess', 'se ha agregado una nueva funcion');
        }

        return redirect()->route('funciones.index')->with('error', 'no se puedo agregar la funcion');

    }
}
