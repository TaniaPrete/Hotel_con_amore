@extends('layouts.app')

@section('title', 'Conferma Prenotazione Spa')

@section('content')
<section id="confirm-spa-booking" class="py-5">
    <h2 class="text-center">Conferma Prenotazione Spa</h2>
    <div class="container text-center">
        <p><strong>Data:</strong> {{ $data['date'] }}</p>
        <p><strong>Orario:</strong> {{ $data['time'] }}</p>
        <p><strong>Servizio:</strong> {{ $data['service'] }}</p>
        <a href="{{ route('spa-booking') }}" class="btn btn-primary mt-3">Modifica Prenotazione</a>
    </div>
</section>
@endsection
