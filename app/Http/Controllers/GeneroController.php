<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;


class GeneroController extends Controller
{
    public function listar($id){
        $genero = Genero::find($id);

        $datos = [
            'eventos' => $genero->evento,
            'generos' => $genero->nombre,
        ];

        // foreach($eventos as $evento){
        //     echo "Nombre: $evento->nombre<br>Precio: $evento->precio<br/>";
        // }
        
        return view('listado', $datos);

    }

}
