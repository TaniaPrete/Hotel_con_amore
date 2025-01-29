@extends('layouts.app')

@section('title', 'Registrazione')

@section('content')
<div class="container">
    <h1>Registrati</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Conferma Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Registrati</button>
    </form>
    <p>Hai già un account? <a href="{{ route('login') }}">Accedi qui</a>.</p>
</div>
@endsection
