<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{
    public function index(){
        $matriculas = DB::select('EXEC sp_obtenerMatricula');

        return view('matricula')
                ->with('matriculas',$matriculas);
    }

    public function store(Request $request){
        $idestudiante = $request->idestudiante;
        $idseccion = $request->idseccion;
        DB::select('EXEC sp_agregarMatricula ?,?', [$idestudiante,$idseccion]);
        return redirect()->route("matriculas.index");
    }

    public function edit($matricula){
       $id = $matricula;
       $datos = DB::select('EXEC sp_buscarMatricula ?', [$id]);
       return view('editMatricula')
            ->with('datos',$datos);
    }

    public function update(Request $request, $matricula){
        $idmatricula = $matricula;
        $idestudiante = $request->idestudiante;
        $idseccion = $request->idseccion;
        DB::select('EXEC sp_modificarMatricula ?,?,?',[$idmatricula,$idestudiante,$idseccion]);
        return redirect()->route("matriculas.index");
    }

    public function destroy($matricula){
        $id = $matricula;
        DB::select('EXEC sp_eliminarMatricula ?', [$id]);
        return redirect()->route("matriculas.index");
    }
}
