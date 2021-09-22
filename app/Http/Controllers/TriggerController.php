<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TriggerController extends Controller
{
   public function maestro(){
    $maestroTrigger = DB::select('select * from maestrosDetalle');

    return view('triggerMaestro')
            ->with('maestroTrigger',$maestroTrigger);
   }
}
