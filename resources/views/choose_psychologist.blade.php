<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Psychologist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Header Styles */
        .navbar {
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 80px;
        }

        .navbar-nav .nav-link {
            font-weight: bold;
            margin: 0 10px;
            color: #036AA1;
        }

        .navbar-nav .btn-login {
            background-color: #FF9F1C;
            border: none;
            color: white;
            padding: 8px 16px;
            font-weight: bold;
            border-radius: 20px;
        }

        .btn-login {
            border: 2px solid #FF9F1C;
            background-color: transparent;
            color: #FF9F1C;
            border-radius: 25px;
            padding: 8px 20px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-login:hover {
            background-color: #FF9F1C;
            color: white;
        }

        .btn-get-started {
            background-color: #FF9F1C;
            color: white;
            padding: 12px 30px;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }

        .btn-get-started:hover {
            background-color: #e57a00;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
        }

        /* Styles for steps */
        .steps-container {
            text-align: center;
            padding: 3rem 0;
        }

        .steps-container h1 {
            color: #005F73;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .steps-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin: 2rem 0;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: bold;
        }

        .step-2 {
            background-color: #005F73;
            color: white;
        }

        /* Styles for psychologist selection */
        .date-selection {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .search-bar {
            text-align: center;
            margin-top: 20px;
        }

        .psychologist-card {
            display: flex;
            align-items: center;
            background-color: #F8FBFC;
            border-radius: 10px;
            padding: 1.5rem;
            margin-top: 20px;
        }

        .psychologist-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .book-now-btn {
            background-color: #FF9F1C;
            border: none;
            color: white;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/Moodify Logo.png" alt="Moodify Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
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
                </ul>
            </div>
        </div>
    </nav>
    <!-- Steps Section -->
    <div class="steps-container">
        <h1>Step 2: Choose Your Psychologist</h1>
        <div class="d-flex justify-content-center align-items-center">
            <div class="step">
                <div class="step-number step-1">1</div>
                <div>Select Package</div>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="step-number step-2">2</div>
                <div>Choose Psychologist</div>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="step-number step-3">3</div>
                <div>Make Payment</div>
            </div>
        </div>
    </div>

    <!-- Date Selection -->
    <div class="container">
        <div class="date-selection">
            <button class="btn btn-outline-primary">2 Nov Mon</button>
            <button class="btn btn-outline-primary">3 Nov Tue</button>
            <button class="btn btn-outline-primary">4 Nov Wed</button>
            <!-- Add more dates as necessary -->
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search your psychologist’s name here">
        </div>

        <!-- Psychologist Card -->
        <div class="psychologist-card mt-4">
            <img src="path_to_psychologist_image.jpg" alt="Psychologist">
            <div>
                <h5>Martha Amberta, M.Psi, Psikolog</h5>
                <p>Specializations: CBT, Mindfulness, Relationship</p>
                <p><strong>Rating:</strong> 4.9 | <strong>Experience:</strong> 5 years</p>
                <p>4 Available Time</p>
                <div class="time-options">
                    <button class="btn btn-outline-primary">09:00</button>
                    <button class="btn btn-outline-primary">11:00</button>
                    <button class="btn btn-outline-primary">15:00</button>
                    <button class="btn btn-outline-primary">17:00</button>
                </div>
            </div>
            <a href="{{ route('checkout') }}" class="btn btn-warning">Book Now</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
