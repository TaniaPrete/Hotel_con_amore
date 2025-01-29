@extends('layouts.app')

@section('title', 'Chi Siamo')

@section('content')
<section id="carousel" class="py-5 bg-dark text-light">
    <div class="container">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <h1 class="fw-bold">Fuori casa come a casa</h1>
                    <p>Siamo coloro che si prendono cura del tuo riposo ovunque tu sia. </p>
                    <a href="#" class="btn btn-primary">Prenota oggi</a>
                </div>
                <div class="carousel-item text-center">
                    <h1 class="fw-bold">Un'esperienza unica</h1>
                    <p>Scopri l'eccellenza dei nostri servizi e il comfort delle nostre camere e della nostra Spa.</p>
                    <a href="#" class="btn btn-primary">Scopri di più</a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>

<section id="values" class="py-5">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold">I nostri valori</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{ asset('images/the.webp') }}" alt="Ospitalità" class="img-fluid mb-3">
                <h5 class="fw-bold">Ospitalità</h5>
                <p class="text-muted">Accogliamo ogni ospite con un sorriso, facendo sentire ognuno speciale e benvenuto.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/reception.webp') }}" alt="Innovazione" class="img-fluid mb-3">
                <h5 class="fw-bold">Innovazione</h5>
                <p class="text-muted">Cerchiamo sempre nuove idee per migliorare i nostri servizi e superare le aspettative.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/qualita.webp') }}" alt="Qualità" class="img-fluid mb-3">
                <h5 class="fw-bold">Qualità</h5>
                <p class="text-muted">Mettiamo la qualità al centro di tutto ciò che facciamo, garantendo sempre il meglio per i nostri ospiti.</p>
            </div>
        </div>
    </div>
</section>

<section id="team" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold">Il nostro team</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{ asset('images/staff.webp') }}" alt="Anna Rossi" class="img-fluid shadow mb-3">
                <h5 class="fw-bold">Anna Rossi</h5>
                <p class="text-muted">Direttrice Generale</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/chef.webp') }}" alt="Luigi Verdi" class="img-fluid shadow mb-3">
                <h5 class="fw-bold">Luigi Verdi</h5>
                <p class="text-muted">Chef Esecutivo</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/receptionuomo.webp') }}" alt="Mario Bianchi" class="img-fluid shadow mb-3">
                <h5 class="fw-bold">Mario Bianchi</h5>
                <p class="text-muted">Responsabile Reception</p>
            </div>
        </div>
    </div>
</section>
@endsection
