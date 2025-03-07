<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="dashboard-body">
    <!-- Fixed Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">
                <i class="fas fa-home"></i> Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">
                            <i class="fas fa-tachometer-alt"></i> Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">
                            <i class="fas fa-user"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/settings">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <span class="nav-link">
                            <i class="fas fa-user-circle"></i> {{ auth()->user()->name }}
                        </span>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger nav-link-btn">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container main-content">
        <div class="row g-4">
            <!-- Profile Card -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=random" 
                                 class="rounded-circle shadow" width="120" height="120" alt="Profile Picture">
                        </div>
                        <h5 class="card-title">{{ auth()->user()->name }}</h5>
                        <p class="text-muted">{{ auth()->user()->email }}</p>
                        <a href="/profile" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i> Edit Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="col-md-8">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Welcome Back!</h4>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="p-4 bg-light rounded-3 shadow-sm">
                                    <h6><i class="fas fa-bell text-primary"></i> Notifications</h6>
                                    <p class="text-muted mb-0">You have no new notifications</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 bg-light rounded-3 shadow-sm">
                                    <h6><i class="fas fa-tasks text-primary"></i> Recent Activity</h6>
                                    <p class="text-muted mb-0">No recent activity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>