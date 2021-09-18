<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientesController extends Controller
{
    public function store(){
        $clientes = DB::select('EXEC Procedimiento_ObtenerClientes');

        return view('welcome')
                ->with('clientes',$clientes);
    }
    
}
