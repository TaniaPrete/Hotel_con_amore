<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Aggiungiamo Bootstrap o Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Lora', serif;
        }
        .navbar {
            background-color: #013a3a;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: scale(1.02);
            transition: all 0.3s;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prenotazioni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profilo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center p-4">
                    <h5 class="card-title">Camere Disponibili</h5>
                    <p class="card-text">Gestisci le camere disponibili per i tuoi clienti.</p>
                    <a href="#" class="btn btn-primary">Vai alle Camere</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-4">
                    <h5 class="card-title">Prenotazioni</h5>
                    <p class="card-text">Controlla e modifica le prenotazioni.</p>
                    <a href="#" class="btn btn-primary">Gestisci Prenotazioni</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-4">
                    <h5 class="card-title">Profilo</h5>
                    <p class="card-text">Modifica le informazioni del tuo profilo.</p>
                    <a href="#" class="btn btn-primary">Vai al Profilo</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-info text-center">
                    <h4>Benvenuta, Tania!</h4>
                    <p>Questa è la tua area riservata per gestire l'hotel in modo efficiente.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5">
        <p>&copy; 2025 Hotel con Amore. Tutti i diritti riservati.</p>
    </footer>
</body>
</html>
