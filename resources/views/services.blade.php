<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Counseling Package</title>
    <!-- Bootstrap CSS -->
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

        /* Steps Section */
        .steps-container {
            text-align: center;
            padding: 3rem 0;
        }

        .steps-container h1 {
            color: #075985;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .steps-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin: 2rem 0;
        }

        .step {
            text-align: center;
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

        .step-1 {
            background-color: #075985;
            color: white;
        }

        .step-2,
        .step-3 {
            background-color: #E5F2F6;
            color: #075985;
        }

        .step-line {
            border-top: 2px dashed #E5F2F6;
            width: 100px;
            margin-top: 20px;
        }

        /* Package Cards */
        .package-container {
            padding: 0 2rem;
        }

        .package-card {
            background-color: #F8FBFC;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .package-card:hover {
            transform: translateY(-10px);
        }

        .package-title {
            color: #075985;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .package-price {
            color: #075985;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .package-features {
            list-style: none;
            padding: 0;
            margin-bottom: 2rem;
        }

        .package-features li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 1rem;
            color: #666;
            font-size: 0.9rem;
        }

        .package-features li::before {
            content: "✓";
            color: #075985;
            font-weight: bold;
        }

        .apply-btn {
            background-color: white;
            color: #075985;
            border: 2px solid #075985;
            border-radius: 25px;
            padding: 0.5rem 2rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .apply-btn:hover {
            background-color: #075985;
            color: white;
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
        <h1>Step 1: Choose Your Counselling Package</h1>
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

    <!-- Packages Section -->
    <div class="package-container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="package-card">
                    <h3 class="package-title">Chat only package</h3>
                    <div class="package-price">Rp39.000</div>
                    <ul class="package-features">
                        <li>1 counseling session via chat</li>
                        <li>Duration: 60 minutes per session</li>
                        <li>Package valid for 1 month</li>
                        <li>+1 month premium access to self-care services</li>
                        <li>Free follow-up from the psychologist</li>
                    </ul>
                    <button onclick="window.location.href='{{ route('choose.psychologist') }}'"
                        class="apply-btn">Apply</button>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="package-card">
                    <h3 class="package-title">Video Call only package</h3>
                    <div class="package-price">Rp99.000</div>
                    <ul class="package-features">
                        <li>1 counseling session via video call</li>
                        <li>Duration: 60 minutes per session</li>
                        <li>Package valid for 1 month</li>
                        <li>+1 month premium access to self-care services</li>
                        <li>Free follow-up from the psychologist</li>
                    </ul>
                    <button onclick="window.location.href='{{ route('choose.psychologist') }}'"
                        class="apply-btn">Apply</button>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="package-card">
                    <h3 class="package-title">Chat and Video package</h3>
                    <div class="package-price">Rp109.000</div>
                    <ul class="package-features">
                        <li>1 counseling session via chat and video call</li>
                        <li>Duration: 60 minutes per session</li>
                        <li>Package valid for 1 month</li>
                        <li>+1 month premium access to self-care services</li>
                        <li>Free follow-up per session</li>
                    </ul>
                    <button onclick="window.location.href='{{ route('choose.psychologist') }}'"
                        class="apply-btn">Apply</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
