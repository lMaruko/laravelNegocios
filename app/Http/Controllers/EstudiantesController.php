<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudiantesController extends Controller
{
    public function index(){
        $estudiantes = DB::select('EXEC sp_obtenerEstudiantes');

        return view('estudiantes')
                ->with('estudiantes',$estudiantes);
    }

    public function store(Request $request){
        $nombres = $request->nombres;
        $apellidos = $request->apellidos;
        $dni = $request->dni;
        $correo = $request->correo;
        $idcarrera = $request->idcarrera;
        DB::select('EXEC sp_agregarEstudiante ?,?,?,?,?', [$nombres,$apellidos,$dni,$correo,$idcarrera]);
        return redirect()->route("estudiantes.index");
    }

    public function edit($estudiante){
       $id = $estudiante;
       $datos = DB::select('EXEC sp_buscarEstudiante ?', [$id]);
       return view('editEstudiante')
            ->with('datos',$datos);
    }

    public function update(Request $request, $estudiante){
        $idestudiante = $estudiante;
        $nombres = $request->nombres;
        $apellidos = $request->apellidos;
        $dni = $request->dni;
        $correo = $request->correo;
        $idcarrera = $request->idcarrera;
        DB::select('EXEC sp_modificarEstudiante ?,?,?,?,?,?',[$idestudiante,$nombres,$apellidos,$dni,$correo,$idcarrera]);
        return redirect()->route("estudiantes.index");
    }

    public function destroy($estudiante){
        $id = $estudiante;
        DB::select('EXEC sp_eliminarEstudiante ?', [$id]);
        return redirect()->route("estudiantes.index");
    }
}
