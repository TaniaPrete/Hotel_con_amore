@extends('layouts.app')

@section('title', 'Prenotazioni Spa')

@section('content')
<section id="spa-booking" class="py-5">
    <h2 class="text-center mb-4">Prenota il tuo relax</h2>
    <div class="container">
        <form action="{{ route('confirm-spa-booking') }}" method="POST" class="p-4 shadow rounded" style="background-color: #f9f9f9;">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Data</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Orario</label>
                <input type="time" id="time" name="time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="service" class="form-label">Servizio</label>
                <select id="service" name="service" class="form-select" required>
                    <option value="massaggio">Massaggio</option>
                    <option value="trattamento">Trattamento Viso</option>
                    <option value="spa">Accesso Spa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100" style="background-color: #FF6B2F; color: white;">Conferma Prenotazione</button>
        </form>
    </div>
</section>

<section id="spa-packages" class="py-5" style="margin-top: 50px;">
    <h2 class="text-center mb-4">I nostri pacchetti SPA</h2>
    <div class="container">
        <div class="row">
            <!-- Pacchetto 1 -->
            <div class="col-md-4 text-center mb-4">
                <h3>Massaggio Relax</h3>
                <p>Rilassati con un massaggio rigenerante, ideale per sciogliere le tensioni. <br> <strong>Prezzo: €50</strong></p>
            </div>
            <!-- Pacchetto 2 -->
            <div class="col-md-4 text-center mb-4">
                <h3>Trattamento Viso</h3>
                <p>Rinnova e valorizza la tua pelle con i nostri trattamenti esclusivi. <br> <strong>Prezzo: €70</strong></p>
            </div>
            <!-- Pacchetto 3 -->
            <div class="col-md-4 text-center mb-4">
                <h3>Accesso Completo alla SPA</h3>
                <p>Goditi un'esperienza unica con accesso completo ai servizi della nostra SPA. <br> <strong>Prezzo: €100</strong></p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('spa') }}" class="btn btn-primary" style="background-color: #013A3A; color: white; border-radius: 5px; padding: 10px 20px;">Scopri di più</a>
        </div>
    </div>
</section>
@endsection
