<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrerasController extends Controller
{
    public function index(){
        $carreras = DB::select('EXEC sp_obtenerCarreras');

        return view('welcome')
                ->with('carreras',$carreras);
    }

    public function store(Request $request){
        $nombre = $request->nombre;
        DB::select('EXEC sp_agregarCarrera ?', [$nombre]);
        return redirect()->route("carrera.index");
    }

    public function edit($carrera){
       $id = $carrera;
       $datos = DB::select('EXEC sp_buscarCarrera ?', [$id]);
       return view('editCarrera')
            ->with('datos',$datos);
    }

    public function update(Request $request, $carrera){
        $idcarrera = $carrera;
        $nombre = $request->nombre;
        DB::select('EXEC sp_modificarCarrera ?,?',[$idcarrera,$nombre]);
        return redirect()->route("carrera.index");
    }

    public function destroy($carrera){
        $id = $carrera;
        DB::select('EXEC sp_eliminarCarrera ?', [$id]);
        return redirect()->route("carrera.index");
    }

}
