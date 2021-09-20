<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeccionController extends Controller
{
    public function index(){
        $secciones = DB::select('EXEC sp_obtenerSecciones');

        return view('seccion')
                ->with('secciones',$secciones);
    }

    public function store(Request $request){
        $idclase = $request->idclase;
        $aula = $request->aula;
        $idmaestro = $request->idmaestro;
        DB::select('EXEC sp_agregarSeccion ?,?,?', [$idclase,$aula,$idmaestro]);
        return redirect()->route("secciones.index");
    }

    public function edit($seccion){
       $id = $seccion;
       $datos = DB::select('EXEC sp_buscarSeccion ?', [$id]);
       return view('editSeccion')
            ->with('datos',$datos);
    }

    public function update(Request $request, $seccion){
        $idseccion = $seccion;
        $idclase = $request->idclase;
        $aula = $request->aula;
        $idmaestro = $request->idmaestro;
        DB::select('EXEC sp_modificarSeccion ?,?,?,?',[$idseccion,$idclase,$aula,$idmaestro]);
        return redirect()->route("secciones.index");
    }

    public function destroy($seccion){
        $id = $seccion;
        DB::select('EXEC sp_eliminarSeccion ?', [$id]);
        return redirect()->route("secciones.index");
    }
}
