@extends('layouts.app')

@section('title', 'Prenotazione')

@section('content')
<section id="booking" class="py-5">
    <h2 class="text-center">Prenota la tua camera</h2>
    <div class="container">
        <form action="{{ route('confirm_booking') }}" method="POST" style="max-width: 600px; margin: 0 auto;">
            @csrf
            <div class="mb-3">
                <label for="check_in" class="form-label">Check-in</label>
                <input type="date" id="check_in" name="check_in" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="check_out" class="form-label">Check-out</label>
                <input type="date" id="check_out" name="check_out" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="room_type" class="form-label">Tipo di Camera</label>
                <select id="room_type" name="room_type" class="form-select" required>
                    <option value="standard">Standard</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="suite">Suite</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="comfort" class="form-label">Comfort</label>
                <select id="comfort" name="comfort" class="form-select" required>
                    <option value="basic">Basic</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="add_spa" class="form-label">Offerta speciale SPA</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="add_spa" name="add_spa" value="yes">
                    <label class="form-check-label" for="add_spa">
                        Aggiungi l'accesso alla SPA al <strong>50% di sconto</strong>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Conferma Prenotazione</button>
        </form>
    </div>
</section>
@endsection
