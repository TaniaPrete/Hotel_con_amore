@extends('layouts.app')

@section('title', 'Chi Siamo')

@section('content')
<section id="carousel" class="py-5 bg-dark text-light">
    <div class="container">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <h1 class="fw-bold display-3">Fuori casa come a casa</h1>
                    <p class="fs-3">Siamo coloro che si prendono cura del tuo riposo ovunque tu sia. </p>
                    <a href="#" class="btn btn-primary">Prenota oggi</a>
                </div>
                <div class="carousel-item text-center">
                    <h1 class="fw-bold display-3">Un'esperienza unica</h1>
                    <p class="fs-3">Scopri l'eccellenza dei nostri servizi e il comfort delle nostre camere e della nostra Spa.</p>
                    <a href="#" class="btn btn-primary">Scopri di più</a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left fa-xs text-light"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <i class="fa-solid fa-chevron-right fa-xs text-light"></i>
            </button>
        </div>
    </div>
</section>

<section id="values" class="py-5">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold display-4">I nostri valori</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{ asset('images/reception.webp') }}" alt="Ospitalità" class="img-fluid mb-3">
                <h5 class="fw-bold fs-2">Ospitalità</h5>
                <p class="text-muted fs-3">Accogliamo ogni ospite con un sorriso, facendo sentire ognuno speciale e benvenuto.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/spa.webp') }}" alt="Innovazione" class="img-fluid mb-3">
                <h5 class="fw-bold fs-2">Innovazione</h5>
                <p class="text-muted fs-3">Cerchiamo sempre nuove idee per migliorare i nostri servizi e superare le aspettative.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/metre.webp') }}" alt="Qualità" class="img-fluid mb-3">
                <h5 class="fw-bold fs-2">Qualità</h5>
                <p class="text-muted fs-3">Mettiamo la qualità al centro di tutto ciò che facciamo, garantendo sempre il meglio per i nostri ospiti.</p>
            </div>
        </div>
    </div>
</section>

<section id="team" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold display-4">Il nostro team</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{ asset('images/staff.webp') }}" alt="Anna Rossi" class="img-fluid shadow mb-3">
                <h5 class="fw-bold fs-2">Anna Rossi</h5>
                <p class="text-muted fs-3">Direttrice Generale</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/chef.webp') }}" alt="Luigi Verdi" class="img-fluid shadow mb-3">
                <h5 class="fw-bold fs-2">Luigi Verdi</h5>
                <p class="text-muted fs-3">Chef Esecutivo</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/pulizie.webp') }}" alt="Mario Bianchi" class="img-fluid shadow mb-3">
                <h5 class="fw-bold fs-2">Maria Bianchi</h5>
                <p class="text-muted fs-3">Responsabile pulizie</p>
            </div>
        </div>
    </div>
</section>
@endsection
