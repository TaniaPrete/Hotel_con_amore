<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    /**
     * Mostra la pagina di prenotazione della spa.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('spa.booking'); // Assicurati che la vista esista
    }

    /**
     * Conferma la prenotazione della spa e mostra i dettagli.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function confirm(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'service' => 'required|string',
        ]);

        return view('spa.confirm', compact('data'));
    }
}
