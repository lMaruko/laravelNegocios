<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pedidosDetalleController extends Controller
{
    public function store(){
        $pedido = DB::select('EXEC Procedimiento_ObtenerPedidoDeta');

        return view('welcome')
                ->with('pedido',$pedido);
    }
}
