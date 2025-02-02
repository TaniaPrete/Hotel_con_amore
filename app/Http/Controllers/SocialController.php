<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        return view('social.index'); // Assicurati di creare questa vista
    }

    public function create()
    {
        return view('social.create'); // Form per creare un nuovo post
    }

    public function store(Request $request)
    {
        // Logica per salvare un nuovo post social
        return redirect()->route('social.index')->with('success', 'Post pubblicato con successo!');
    }
}
