<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaestrosController extends Controller
{
    public function index(){
        $maestros = DB::select('EXEC sp_obtenerMaestros');

        return view('maestros')
                ->with('maestros',$maestros);
    }

    public function store(Request $request){
        $nombres = $request->nombres;
        $apellidos = $request->apellidos;
        $dni = $request->dni;
        $telefono = $request->telefono;
        
        DB::select('EXEC sp_agregarMaestro ?,?,?,?', [$nombres,$apellidos,$dni,$telefono]);
        return redirect()->route("maestros.index");
    }

    public function edit($maestro){
       $id = $maestro;
       $datos = DB::select('EXEC sp_buscarMaestros ?', [$id]);
       return view('editMaestro')
            ->with('datos',$datos);
    }

    public function update(Request $request, $maestro){
        $idmaestro = $maestro;
        $nombres = $request->nombres;
        $apellidos = $request->apellidos;
        $dni = $request->dni;
        $telefono = $request->telefono;
        DB::select('EXEC sp_modificarMaestro ?,?,?,?,?',[$idmaestro,$nombres,$apellidos,$dni,$telefono]);
        return redirect()->route("maestros.index");
    }

    public function destroy($maestro){
        $id = $maestro;
        DB::select('EXEC sp_eliminarMaestro ?', [$id]);
        return redirect()->route("maestros.index");
    }
}
