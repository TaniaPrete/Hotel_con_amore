<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatura per la posizione: {{ $position }}</title>
</head>
<body>
    <h1>Candidatura per la posizione: {{ $position }}</h1>
    <p><strong>Nome:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $message }}</p>

    @if(!empty($cv_path))
    <p><strong>Curriculum Vitae:</strong> 
        <a href="{{ asset('storage/' . $cv_path) }}" target="_blank">Scarica il CV</a>
    </p>
@endif

</body>
</html>

</html>
