@extends('layouts.app')

@section('title', 'SPA')

@section('content')
<section id="spa" class="py-5">
    <h2 class="text-center mb-4">Benvenuti nella nostra SPA</h2>
    <div class="container">
        <p class="text-center mb-4">Scopri i nostri pacchetti benessere e rilassati nel nostro centro esclusivo.</p>
        
        <div class="row justify-content-center">
            <!-- Massaggio Relax -->
            <div class="col-md-6 d-flex align-items-center justify-content-between mb-4" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow);">
                <div>
                    <h3>Massaggio Relax</h3>
                    <p>Rilassati con un massaggio rigenerante, ideale per sciogliere le tensioni muscolari. <br> 
                    <strong>Prezzo: €50</strong></p>
                </div>
                <img src="{{ asset('images/spa.webp') }}" alt="Massaggio Relax" class="img-fluid" style="max-width: 100px; border-radius: 8px;">
            </div>
            
            <!-- Trattamento Viso -->
            <div class="col-md-6 d-flex align-items-center justify-content-between mb-4" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow);">
                <div>
                    <h3>Trattamento Viso</h3>
                    <p>Un trattamento viso su misura per valorizzare la tua bellezza naturale. <br>
                    <strong>Prezzo: €70</strong></p>
                </div>
                <img src="{{ asset('images/viso.webp') }}" alt="Trattamento Viso" class="img-fluid" style="max-width: 100px; border-radius: 8px;">
            </div>
            
            <!-- Accesso Completo alla SPA -->
            <div class="col-md-6 d-flex align-items-center justify-content-between mb-4" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow);">
                <div>
                    <h3>Accesso Completo alla SPA</h3>
                    <p>Goditi un'esperienza unica con accesso illimitato a tutti i servizi della nostra SPA. <br> 
                    <strong>Prezzo: €100</strong></p>
                </div>
                <img src="{{ asset('images/spa.webp') }}" alt="Accesso SPA" class="img-fluid" style="max-width: 100px; border-radius: 8px;">
            </div>

            <!-- Pacchetto di Coppia -->
            <div class="col-md-6 d-flex align-items-center justify-content-between mb-4" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow);">
                <div>
                    <h3>Pacchetto di Coppia</h3>
                    <p>Condividi un momento speciale con la tua persona amata: massaggio per due, accesso alla sauna privata e prosecco. <br>
                    <strong>Prezzo: €150</strong></p>
                </div>
                <img src="{{ asset('images/coppia.webp') }}" alt="Pacchetto di Coppia" class="img-fluid" style="max-width: 100px; border-radius: 8px;">
            </div>

            <!-- Pacchetto Buddha Zen -->
            <div class="col-md-6 d-flex align-items-center justify-content-between mb-4" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow);">
                <div>
                    <h3>Pacchetto Buddha Zen</h3>
                    <p>Immergiti in un'esperienza ispirata alla cultura zen: aromaterapia, massaggio con pietre calde e meditazione guidata. <br>
                    <strong>Prezzo: €120</strong></p>
                </div>
                <img src="{{ asset('images/the.webp') }}" alt="Pacchetto Buddha Zen" class="img-fluid" style="max-width: 100px; border-radius: 8px;">
            </div>

            <!-- Trattamento Chakra Balance -->
            <div class="col-md-6 d-flex align-items-center justify-content-between mb-4" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow);">
                <div>
                    <h3>Trattamento Chakra Balance</h3>
                    <p>Riequilibra il tuo corpo e la tua mente con un trattamento dedicato ai sette chakra. <br>
                    <strong>Prezzo: €90</strong></p>
                </div>
                <img src="{{ asset('images/spa.webp') }}" alt="Trattamento Chakra Balance" class="img-fluid" style="max-width: 100px; border-radius: 8px;">
            </div>
        </div>
        
        <!-- Bottone Contattaci -->
        <div class="text-center mt-5">
            <p>Per qualsiasi domanda o informazione, contattaci direttamente.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary" style="background-color: #FF6B2F; color: white; border-radius: 5px; padding: 10px 20px;">Contattaci</a>
        </div>
    </div>
</section>
@endsection
