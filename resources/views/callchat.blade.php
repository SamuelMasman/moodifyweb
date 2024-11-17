<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Preference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F8F9FA;
            color: #333;
        }

        .navbar {
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            font-weight: bold;
            margin: 0 10px;
            color: #036AA1;
        }

        .navbar-nav .nav-link.active {
            color: #005F73;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #036AA1;
        }

        .preference-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .preference-card {
            width: 200px;
            height: 200px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #005F73;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .preference-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .preference-card img {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
        }

        .preference-card h5 {
            font-size: 1.1rem;
            font-weight: bold;
            margin: 0;
            color: #036AA1;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Moodify Logo.png') }}" alt="Moodify Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Forum</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            EN
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">EN</a></li>
                            <li><a class="dropdown-item" href="#">ID</a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <span class="me-2">Hi, Alisha</span>
                        <img src="{{ asset('images/User PP.png') }}" alt="Avatar" class="rounded-circle" width="40"
                            height="40">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container">
        <h1>Choose Your Preference</h1>
        <div class="preference-container">
            <a href="{{ route('chat') }}" class="preference-card">
                <img src="{{ asset('images/chat-icon.png') }}" alt="Chat Icon">
                <h5>Chat</h5>
            </a>
            <a href="{{ route('video_call') }}" class="preference-card">
                <img src="{{ asset('images/video-icon.png') }}" alt="Video Icon">
                <h5>Video Call</h5>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>