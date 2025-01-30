@extends('layouts.app')

@section('title', 'Ristorazione Raffinata')

@section('content')
<section id="dining" class="py-5">
    <h2 class="text-center mb-4" style="font-size: 2rem;">Ristorazione Raffinata</h2>
    <div class="container">
        <p class="text-center" style="font-size: 1.2rem;">Offriamo una cucina di alta qualità per ogni palato, con ingredienti freschi e locali.</p>
        <div class="row d-flex justify-content-center flex-nowrap overflow-auto">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card text-center w-100">
                    <img src="{{ asset('images/colazione.webp') }}" alt="Colazione" class="card-img-top" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title" style="font-size: 1.5rem;">Colazione</h3>
                        <p class="card-text" style="font-size: 1.1rem;">Inizia la giornata con una colazione ricca e variegata. <br> Orario: 7:00 - 10:00</p>
                        <a href="{{ route('contact') }}" class="btn btn-success">Prenota Ora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card text-center w-100">
                    <img src="{{ asset('images/pranzo.webp') }}" alt="Pranzo" class="card-img-top" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title" style="font-size: 1.5rem;">Pranzo</h3>
                        <p class="card-text" style="font-size: 1.1rem;">Scopri i sapori locali e internazionali nei nostri piatti. <br> Orario: 12:00 - 14:30</p>
                        <a href="{{ route('contact') }}" class="btn btn-success">Prenota Ora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card text-center w-100">
                    <img src="{{ asset('images/cena.webp') }}" alt="Cena" class="card-img-top" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title" style="font-size: 1.5rem;">Cena</h3>
                        <p class="card-text" style="font-size: 1.1rem;">Una cena raffinata con piatti unici e prelibatezze. <br> Orario: 19:00 - 22:00</p>
                        <a href="{{ route('contact') }}" class="btn btn-success">Prenota Ora</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('contact') }}" class="btn btn-primary" style="background-color: #013A3A; color: white; font-size: 1.2rem;">Contattaci per Prenotare</a>
        </div>
    </div>
</section>
@endsection
