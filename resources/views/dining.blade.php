@extends('layouts.app')

@section('title', 'Ristorazione Raffinata')

@section('content')
<section id="dining" class="py-5">
    <h2 class="text-center mb-4">Ristorazione Raffinata</h2>
    <div class="container">
        <p class="text-center">Offriamo una cucina di alta qualità per ogni palato, con ingredienti freschi e locali.</p>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/breakfast.jpg') }}" alt="Colazione" class="img-fluid mb-3">
                <h3>Colazione</h3>
                <p>Inizia la giornata con una colazione ricca e variegata. <br> Orario: 7:00 - 10:00</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/lunch.jpg') }}" alt="Pranzo" class="img-fluid mb-3">
                <h3>Pranzo</h3>
                <p>Scopri i sapori locali e internazionali nei nostri piatti. <br> Orario: 12:00 - 14:30</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/dinner.jpg') }}" alt="Cena" class="img-fluid mb-3">
                <h3>Cena</h3>
                <p>Una cena raffinata con piatti unici e prelibatezze. <br> Orario: 19:00 - 22:00</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('contact') }}" class="btn btn-primary" style="background-color: #013A3A; color: white;">Contattaci per Prenotare</a>
        </div>
    </div>
</section>
@endsection
