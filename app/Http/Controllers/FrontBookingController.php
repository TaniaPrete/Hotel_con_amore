<?php

namespace App\Http\Controllers\Frontend; // <-- Modifica il namespace!

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontBookingController extends Controller
{
    public function index()
    {
        return view('admin.bookings.index'); // <-- Cambio percorso della vista
    }

    public function create()
    {
        return view('admin.bookings.create'); // <-- Cambio percorso della vista
    }

    public function store(Request $request)
    {
        // Qui andrebbe la logica per salvare la prenotazione nel database
        return redirect()->route('admin.bookings.index')->with('success', 'Prenotazione interna registrata con successo!');
    }
}
