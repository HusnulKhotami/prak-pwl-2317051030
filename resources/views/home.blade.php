<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/tampil">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Welcome</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container text-center py-5">
        <div class="card shadow-lg p-5 rounded-4">
            <h1 class="fw-bold text-primary mb-3">Selamat Datang di Homepage</h1>
            <p class="lead text-muted">Ini adalah halaman home yang dibuat menggunakan Laravel Blade & Bootstrap.</p>
            <a href="/" class="btn btn-lg btn-outline-primary mt-3">Kembali ke Welcome</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} My Laravel App. All rights reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
