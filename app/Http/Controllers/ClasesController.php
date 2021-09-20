<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClasesController extends Controller
{
    public function index(){
        $clases = DB::select('EXEC sp_obtenerClases');

        return view('clases')
                ->with('clases',$clases);
    }
    
    public function store(Request $request){
        $id = $request->idclase;
        $nombre = $request->nombre;
        DB::select('EXEC sp_agregarClase ?,?', [$id,$nombre]);
        return redirect()->route("clases.index");
    }

    public function edit($clase){
       $id = $clase;
       $datos = DB::select('EXEC sp_buscarClases ?', [$id]);
       return view('editClase')
            ->with('datos',$datos);
    }

    public function update(Request $request, $clase){
        $idclase = $clase;
        $nombre = $request->nombre;
        DB::select('EXEC sp_modificarClase ?,?',[$idclase,$nombre]);
        return redirect()->route("clases.index");
    }

    public function destroy($clase){
        $id = $clase;
        DB::select('EXEC sp_eliminarClase ?', [$id]);
        return redirect()->route("clases.index");
    }
}
