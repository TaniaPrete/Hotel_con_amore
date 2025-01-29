@extends('layouts.app')

@section('title', 'Contattaci')

@section('content')
<section id="contact">
    <h2>Contattaci</h2>
    <form class="row g-3" method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-12">
            <label for="message" class="form-label">Messaggio</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Invia</button>
        </div>
    </form>
</section>
@endsection
