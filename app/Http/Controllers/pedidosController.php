<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pedidosController extends Controller
{
    public function store(){
        $pedido = DB::select('EXEC Procedimiento_ObtenerPedidoCabe');

        return view('welcome')
                ->with('pedido',$pedido);
    }
}
