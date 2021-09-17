<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriasController extends Controller
{
    public function store(){
        $categorias = DB::select('EXEC Procedimiento_ObtenerCategorias');

        return view('welcome')
                ->with('categorias',$categorias);
    }
    
}
