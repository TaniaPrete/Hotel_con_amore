<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Recupera tutti gli eventi dal database (da implementare con un modello)
        return view('events.index'); // Assicurati di creare questa vista
    }

    public function create()
    {
        return view('events.create'); // Form per creare un evento
    }

    public function store(Request $request)
    {
        // Validazione e salvataggio di un nuovo evento (da implementare)
        return redirect()->route('events.index')->with('success', 'Evento creato con successo!');
    }
}
