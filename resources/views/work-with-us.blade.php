@extends('layouts.app')

@section('title', 'Lavora con Noi')

@section('content')
<section id="work-with-us">
    <h1>Lavora con Noi</h1>
    <p>Unisciti al nostro team e fai parte di un ambiente dinamico e accogliente!</p>
    <h3>Posizioni Aperte</h3>
    <ul>
        <li><strong>Receptionist:</strong> Cerchiamo una persona solare e organizzata per accogliere i nostri ospiti.</li>
        <li><strong>Chef:</strong> Unisciti al nostro team di cucina e contribuisci a creare piatti deliziosi.</li>
        <li><strong>Personale di Pulizia:</strong> Mantieni il nostro hotel impeccabile e accogliente.</li>
    </ul>
    <h3>Come candidarsi</h3>
    <p>Invia il tuo CV e una breve lettera di presentazione a <a href="mailto:hello@example.com">jobs@hotel.com</a>.</p>
</section>

<section id="work-with-us-form" class="mt-5">
    <h3>Compila il Modulo per Candidarti</h3>
    <form class="row g-3" method="POST" action="{{ route('work-with-us.submit') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Nome e Cognome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-12">
            <label for="position" class="form-label">Posizione Desiderata</label>
            <select class="form-select" id="position" name="position" required>
                <option value="Receptionist">Receptionist</option>
                <option value="Chef">Chef</option>
                <option value="Personale di Pulizia">Personale di Pulizia</option>
            </select>
        </div>
        <div class="col-12">
            <label for="cv" class="form-label">Carica il tuo CV</label>
            <input type="file" class="form-control" id="cv" name="cv" required>
        </div>
        <div class="col-12">
            <label for="message" class="form-label">Messaggio</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Invia Candidatura</button>
        </div>
    </form>
</section>
@endsection
