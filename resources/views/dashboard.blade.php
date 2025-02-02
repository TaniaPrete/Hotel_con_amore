@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">🎉 Benvenuto nella Dashboard</h1>
        <p class="text-lg text-gray-600 mt-2">Gestisci eventi, prenotazioni e molto altro.</p>

        <!-- Sezione Statistiche -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="p-6 bg-white shadow-lg rounded-xl border-l-4 border-indigo-500 transition hover:scale-105">
                <h2 class="text-lg font-semibold text-gray-700">Eventi in programma</h2>
                <p class="text-4xl font-bold text-indigo-600 mt-2">5</p>
            </div>
            <div class="p-6 bg-white shadow-lg rounded-xl border-l-4 border-green-500 transition hover:scale-105">
                <h2 class="text-lg font-semibold text-gray-700">Posti prenotati</h2>
                <p class="text-4xl font-bold text-green-600 mt-2">120</p>
            </div>
            <div class="p-6 bg-white shadow-lg rounded-xl border-l-4 border-pink-500 transition hover:scale-105">
                <h2 class="text-lg font-semibold text-gray-700">Follower Instagram</h2>
                <p class="text-4xl font-bold text-pink-600 mt-2">3,500</p>
            </div>
        </div>

        <!-- Sezione Prossimi Eventi -->
        <div class="mt-8 bg-white shadow-lg rounded-xl p-6">
            <h2 class="text-2xl font-semibold text-gray-700">📅 Prossimi Eventi</h2>
            <table class="w-full mt-4 border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="py-3 px-4 text-left">Nome Evento</th>
                        <th class="py-3 px-4 text-left">Data</th>
                        <th class="py-3 px-4 text-left">Stato</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">Cena Bendata - 27 Febbraio</td>
                        <td class="py-3 px-4">27/02/2025</td>
                        <td class="py-3 px-4">
                            <span class="px-3 py-1 bg-green-200 text-green-800 rounded-full">Attivo</span>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">San Valentino a Portineria 21</td>
                        <td class="py-3 px-4">14/02/2025</td>
                        <td class="py-3 px-4">
                            <span class="px-3 py-1 bg-red-200 text-red-800 rounded-full">Chiuso</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Azioni rapide -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="{{ route('events.create') }}" class="p-5 bg-blue-600 text-white font-bold rounded-xl shadow-lg flex items-center justify-center gap-2 hover:bg-blue-700 transition">
                ➕ Crea Evento
            </a>
            <a href="{{ route('bookings.index') }}" class="p-5 bg-green-600 text-white font-bold rounded-xl shadow-lg flex items-center justify-center gap-2 hover:bg-green-700 transition">
                📋 Gestisci Prenotazioni
            </a>
            <a href="{{ route('social.posts') }}" class="p-5 bg-pink-600 text-white font-bold rounded-xl shadow-lg flex items-center justify-center gap-2 hover:bg-pink-700 transition">
                📱 Post Social
            </a>
            <a href="{{ route('users.index') }}" class="p-5 bg-gray-600 text-white font-bold rounded-xl shadow-lg flex items-center justify-center gap-2 hover:bg-gray-700 transition">
                👥 Gestisci Utenti
            </a>
        </div>

        <!-- Sezione Notifiche -->
        @if(session('success'))
            <div class="mt-6 p-4 bg-green-200 text-green-800 rounded-lg shadow">
                ✅ {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
