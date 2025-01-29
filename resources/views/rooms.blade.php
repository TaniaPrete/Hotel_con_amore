@extends('layouts.app')

@section('title', 'Camere Eleganti')

@section('content')
<section id="rooms" class="py-5" style="padding-top: 100px; padding-bottom: 150px;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @forelse ($rooms as $room)
            <div class="room-card text-center" style="border: 1px solid #ddd; border-radius: 10px; box-shadow: var(--box-shadow); max-width: 300px; padding: 15px; flex: 1 1 calc(33.33% - 20px);">
                <img src="{{ asset('images/' . $room->image) }}" alt="{{ $room->name }}" class="img-fluid mb-3" style="border-radius: 8px; max-width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                <h3 style="color: var(--navbar-bg-color); font-size: 1.25rem;">{{ $room->name }}</h3>
                <p style="font-size: 1rem; color: var(--text-color);">{{ $room->description }}<br> <strong>Prezzo: €{{ number_format($room->price, 2) }}/notte</strong></p>
                <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: var(--primary-color); color: white; padding: 8px 16px; border-radius: 30px; text-transform: uppercase;">Prenota ora</a>
            </div>
        @empty
            <p class="text-center" style="color: var(--secondary-color);">Non ci sono camere disponibili al momento.</p>
        @endforelse
    </div>
</section>
@endsection
