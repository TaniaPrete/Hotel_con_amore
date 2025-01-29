<?php

namespace App\Http\Controllers;

use App\Models\Room; // Modello Room
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        // Recupera tutte le camere dal database
        $rooms = Room::all();

        // Restituisce la vista e passa i dati
        return view('rooms', compact('rooms'));
    }
}
