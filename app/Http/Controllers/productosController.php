<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productosController extends Controller
{
    public function store(){
        $productos = DB::select('EXEC Procedimiento_ObtenerProductos');

        return view('welcome')
                ->with('productos',$productos);
    }
}
