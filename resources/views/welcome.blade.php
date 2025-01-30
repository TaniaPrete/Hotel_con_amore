@extends('layouts.app')

@section('title', 'Benvenuti')

@section('content')
<section id="hero" class="text-center py-5">
    <h1>Benvenuti in Hotel con Amore</h1>
    <p>Il tuo riposo non è più un problema</p>
    <a href="#services" class="btn btn-primary mt-3 cta-button">Scopri di più</a>
</section>

<section id="slideshow" class="my-5 text-center">
    <div id="carouselExampleIndicators" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/hotelhome.webp') }}" class="d-block w-100" alt="Foto 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/3.webp') }}" class="d-block w-100" alt="Foto 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/4.webp') }}" class="d-block w-100" alt="Foto 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <i class="fa-solid fa-chevron-left fa-lg text-dark"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <i class="fa-solid fa-chevron-right fa-lg text-dark"></i>
        </button>
    </div>
</section>

<section id="services" class="py-5">
    <h2 class="text-center">I nostri servizi</h2>
    <div class="container">
        <div class="row">
            <!-- Camere Eleganti -->
            <div class="col-md-4 text-center service-item">
                <h3><a href="{{ route('rooms.index') }}" class="service-link">Camere eleganti</a></h3>
                <p>Comfort e lusso nelle nostre stanze uniche.</p>
            </div>
            <!-- Ristorazione Raffinata -->
            <div class="col-md-4 text-center service-item">
                <h3><a href="{{ route('dining') }}" class="service-link">Ristorazione raffinata</a></h3>
                <p>Cucina di alta qualità per ogni palato.</p>
            </div>
            <!-- SPA e Relax -->
            <div class="col-md-4 text-center service-item">
                <h3><a href="{{ route('spa') }}" class="service-link">Spa e relax</a></h3>
                <p>Rilassati nel nostro centro benessere esclusivo.</p>
            </div>
        </div>
    </div>
</section>
@endsection
