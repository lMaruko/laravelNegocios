<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class empleadosController extends Controller
{
    public function store(){
        $empleados = DB::select('EXEC Procedimiento_ObtenerEmpleados');

        return view('welcome')
                ->with('empleados',$empleados);
    }
}
