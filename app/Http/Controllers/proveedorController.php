<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class proveedorController extends Controller
{
    public function store(){
        $proveedor = DB::select('EXEC Procedimiento_ObtenerProveedor');

        return view('welcome')
                ->with('proveedor',$proveedor);
    }
}
