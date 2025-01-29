@extends('layouts.app')

@section('title', 'Servizi')

@section('content')
<section id="services" >
    <h2 class="text-center mb-3">I nostri servizi</h2>
    <div class="container">
        <!-- Sezione Camere -->
        <div class="service-item">
            <h3>Camere eleganti</h3>
            <p>Comfort e lusso nelle nostre stanze uniche.</p>
            <a href="{{ route('rooms.index') }}" class="cta-button">Scopri le Camere</a>
        </div>

        <!-- Sezione Ristorazione -->
        <div class="service-item">
            <h3>Ristorazione raffinata</h3>
            <p>Cucina di alta qualità per ogni palato.</p>
            <a href="{{ route('dining') }}" class="cta-button">Scopri la Ristorazione</a>
        </div>

        <!-- Sezione SPA -->
        <div class="service-item">
            <h3>Spa e relax</h3>
            <p>Rilassati nel nostro centro benessere esclusivo.</p>
            <a href="{{ route('spa') }}" class="cta-button">Scopri la SPA</a>
        </div>
    </div>
</section>
<section id="faq" class="py-5 bg-light">
    <h2 class="text-center mb-4">Domande Frequenti (FAQ)</h2>
    <div class="container" style="border: 1px solid #ddd; padding: 15px; border-radius: 8px;">
        <ul style="list-style-type: none; padding: 0;">
            <li style="margin-bottom: 10px;">
                <strong>Quali sono gli orari di check-in e check-out?</strong>
                <p>Il check-in è disponibile dalle 14:00, mentre il check-out deve essere effettuato entro le 11:00.</p>
            </li>
            <li style="margin-bottom: 10px;">
                <strong>Offrite opzioni vegetariane o vegane al ristorante?</strong>
                <p>Sì, il nostro ristorante offre opzioni vegetariane, vegane e senza glutine.</p>
            </li>
            <li style="margin-bottom: 10px;">
                <strong>È possibile prenotare un trattamento spa prima dell'arrivo?</strong>
                <p>Certo! Puoi prenotare i trattamenti spa direttamente dalla nostra pagina di prenotazione spa.</p>
            </li>
        </ul>
    </div>
</section>
@endsection
