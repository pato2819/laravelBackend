<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function saludarGet(Request $request)
    {
        $nombre = $request->query('nombre', 'Invitado');
        return response()->json([
            'mensaje' => "GET: Hola, $nombre",
            'fecha' => now()->toDateTimeString()
        ]);
    }

    public function saludarPost(Request $request)
    {
        $request->validate([
            'nombre' => 'sometimes|min:2|max:100'
        ]);
        
        $nombre = $request->input('nombre', 'Invitado');
        return response()->json([
            'mensaje' => "POST: Hola, $nombre",
            'fecha' => now()->toDateTimeString()
        ]);
    }
}