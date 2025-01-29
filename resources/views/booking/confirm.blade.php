@extends('layouts.app')

@section('title', 'Conferma Prenotazione')

@section('content')
<section id="confirm-booking" class="py-5">
    <h2 class="text-center">Conferma Prenotazione</h2>
    <div class="container">
        <p><strong>Check-in:</strong> {{ $data['check_in'] }}</p>
        <p><strong>Check-out:</strong> {{ $data['check_out'] }}</p>
        <p><strong>Tipo di Camera:</strong> {{ $data['room_type'] }}</p>
        <p><strong>Confort:</strong> {{ $data['comfort'] }}</p>
        @if(isset($data['add_spa']) && $data['add_spa'] === 'yes')
            <p><strong>Offerta SPA:</strong> Inclusa al 50% di sconto</p>
        @else
            <p><strong>Offerta SPA:</strong> Non inclusa</p>
        @endif
        <p><strong>Prezzo totale:</strong> €{{ $data['total_price'] }}</p>
        <a href="{{ route('welcome') }}" class="btn btn-primary mt-3">Torna alla Home</a>
    </div>
</section>
@endsection
