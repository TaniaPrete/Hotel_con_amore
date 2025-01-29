<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validare i dati ricevuti
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. (Futuro): Inviare un'email (per ora lo stampiamo)
        // Puoi aggiungere questa parte dopo
        // Mail::to('hotel@example.com')->send(new \App\Mail\ContactMail($validated));

        // 3. Mostrare un messaggio di successo
        return back()->with('success', 'Grazie per averci contattato!');
    }


    public function submitApplication(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'position' => 'required|string',
        'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        'message' => 'required|string',
    ]);

    // Salva i dati o invia un'email
    return back()->with('success', 'Grazie per la tua candidatura! Ti contatteremo presto.');
}

}
