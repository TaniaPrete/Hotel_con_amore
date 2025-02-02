<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Recupera la lista degli utenti (da implementare con un modello)
        return view('users.index'); // Assicurati di creare questa vista
    }

    public function show($id)
    {
        return view('users.show', compact('id')); // Mostra il profilo utente
    }
}
