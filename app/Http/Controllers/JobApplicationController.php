<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationMail;

class JobApplicationController extends Controller
{
    public function showForm()
    {
        return view('job_application.form'); // Assicurati che la vista esista in resources/views/job_application/form.blade.php
    }

    public function submitApplication(Request $request)
    {
        // Validazione dei dati del modulo
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'position' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:10240', // Limite 10MB
            'message' => 'nullable|string|max:1000',
        ]);

        // Gestione del messaggio (assicurati che sia sempre una stringa)
        $validated['message'] = $validated['message'] ?? 'Nessun messaggio fornito';

        // Salvataggio del file
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->storeAs(
                'cv',
                time() . '_' . $request->file('cv')->getClientOriginalName()
            );
            $validated['cv_path'] = $cvPath;
        }

        // Invia email
        Mail::to('jobs@hotel.com')->send(new JobApplicationMail($validated));

        // Ritorna un messaggio di successo
        return redirect()->route('work-with-us')->with('success', 'Candidatura inviata con successo!');
    }
}
