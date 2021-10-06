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
   public function carrera(){
      $carrerasTrigger = DB::select('select * from carrerasDetalle');
  
      return view('triggerCarrera')
              ->with('carreraTrigger',$carrerasTrigger);
   }
   public function clase(){
      $clasesTrigger = DB::select('select * from clasesDetalle');
  
      return view('triggerClase')
              ->with('clasesTrigger',$clasesTrigger);
   }
   public function estudiante(){
      $estudiantesTrigger = DB::select('select * from estudiantesDetalle');
  
      return view('triggerEstudiante')
              ->with('estudiantesTrigger',$estudiantesTrigger);
   }
   public function matricula(){
      $matriculasTrigger = DB::select('select * from matriculasDetalle');
  
      return view('triggerMatricula')
              ->with('matriculasTrigger',$matriculasTrigger);
   }
   public function seccion(){
      $seccionesTrigger = DB::select('select * from seccionesDetalle');
  
      return view('triggerSeccion')
              ->with('seccionesTrigger',$seccionesTrigger);
   }
   
}
