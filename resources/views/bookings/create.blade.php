@extends('layouts.app')

@section('title', 'Nuova Prenotazione')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4">
        <h1 class="text-2xl font-semibold text-gray-800">➕ Nuova Prenotazione</h1>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="Inserisci il nome" class="border p-2 w-full">
            <button type="submit" class="mt-4 bg-blue-500 text-white p-2 rounded">Prenota</button>
        </form>
    </div>
@endsection
