<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Mostra la pagina di selezione della prenotazione.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $check_in = $request->input('check_in');
        $check_out = $request->input('check_out');

        return view('booking.index', compact('check_in', 'check_out'));
    }

    /**
     * Conferma la prenotazione e mostra i dettagli.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    

public function confirm(Request $request)
{
    // Valida i dati inviati dal form
    $data = $request->validate([
        'check_in' => 'required|date|after_or_equal:today',
        'check_out' => 'required|date|after:check_in',
        'room_type' => 'required|string',
        'comfort' => 'required|string',
        'add_spa' => 'nullable|string|in:yes', // Opzionale
    ]);

    // Calcola il prezzo totale (esempio)
    $base_price = 100; // Prezzo di esempio per la camera
    $spa_discounted_price = 50; // Prezzo scontato per la SPA
    $total_price = $base_price;

    if (isset($data['add_spa']) && $data['add_spa'] === 'yes') {
        $total_price += $spa_discounted_price;
    }

    // Aggiungi il prezzo totale ai dati
    $data['total_price'] = $total_price;

    return view('booking.confirm', compact('data'));
}
}