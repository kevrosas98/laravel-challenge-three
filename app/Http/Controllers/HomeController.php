<?php

namespace App\Http\Controllers;
use App\Models\Genero;
use App\Models\Evento;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // foreach($lista as $column){
        //     echo $column->nombre ." <br>";
        // }

        // foreach($eventos as $evento){
        //     echo "$evento->nombre $evento->genero_id " . $evento->genero->nombre ." <br>";
        // }

        $datos = [
            'generos' => Genero::all(),
            'eventos' => Evento::all(),
        ];

        return view('index', $datos );
         
    }

    public function nosotros(){
        return view('quienes');
    }
}
