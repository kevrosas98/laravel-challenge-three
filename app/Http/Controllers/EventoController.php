<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Models\Genero;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function detalle($id){
        $event = Evento::find($id);
        $events = Evento::where('genero_id', $event->genero_id)->inRandomOrder()->limit(4)->get();

        $datos = [
            'eventos' => $event,
            'grupo' => $event->grupo,
            'levents' => $events,
        ];

        return view('detalle', $datos);

    }
}
