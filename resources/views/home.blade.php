<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Your Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row align-items-center min-vh-100">
            <div class="col-md-6">
                <h1 class="display-4 text-white mb-4">Welcome to Our Platform</h1>
                <p class="lead text-white-50 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="d-flex gap-3">
                    <a href="/register" class="btn btn-light btn-lg">Get Started</a>
                    <a href="/login" class="btn btn-outline-light btn-lg">Sign In</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://placehold.co/600x400" alt="Hero Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>