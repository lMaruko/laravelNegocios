<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistaController extends Controller
{

    public function index(){
        $artistas = DB::select('SELECT * FROM Artistas');
        return view('welcome')
            ->with('artistas',$artistas);
    }
    
    public function store(){
        
    }
}
