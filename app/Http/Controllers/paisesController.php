<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paisesController extends Controller
{
    public function store(){
        $paises = DB::select('EXEC Procedimiento_ObtenerPaises');

        return view('welcome')
                ->with('paises',$paises);
    }
}
