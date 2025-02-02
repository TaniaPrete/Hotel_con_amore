@extends('layouts.app')

@section('title', 'Contattaci')

@section('content')
<section id="contact" class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4 fw-bold text-primary">Contattaci</h2>
                    <p class="text-center text-muted mb-4">Hai domande? Compila il modulo e ti risponderemo il prima possibile.</p>
                    
                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nome</label>
                            <input type="text" class="form-control rounded-3" id="name" name="name" required placeholder="Il tuo nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" required placeholder="La tua email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">Messaggio</label>
                            <textarea class="form-control rounded-3" id="message" name="message" rows="4" required placeholder="Scrivi il tuo messaggio..."></textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg rounded-3 shadow-sm" type="submit">
                                <i class="fas fa-paper-plane me-2"></i> Invia Messaggio
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #contact {
        background-color: #f8f9fa;
    }
    .card {
        background: white;
        border-radius: 12px;
    }
    .btn-primary {
        background: linear-gradient(45deg, #00d0ff, #2af210);
        border: none;
        transition: all 0.3s ease-in-out;
    }
    .btn-primary:hover {
        background: linear-gradient(45deg, #6610f2, #007bff);
        transform: scale(1.05);
    }
    .form-control {
        border-radius: 10px;
        border: 1px solid #ccc;
    }
</style>

@endsection
