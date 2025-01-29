
@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <h1>Accedi al tuo account</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Accedi</button>
    </form>
    <p>Non hai un account? <a href="{{ route('register') }}">Registrati qui</a>.</p>
</div>
@endsection


