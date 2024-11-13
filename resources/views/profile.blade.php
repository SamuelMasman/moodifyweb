<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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

        /* Sidebar styling */
        .sidebar {
            background-color: #005F73;
            color: white;
            padding: 20px;
            border-radius: 12px;
            min-height: 100vh;
        }

        .nav-link {
            color: white;
            margin-bottom: 10px;
            font-weight: bold;
            display: block;
        }

        .nav-link.active {
            background-color: #003844;
            padding: 8px 12px;
            border-radius: 8px;
        }

        /* Main Content Styling */
        .tab-content {
            margin-left: 20px;
        }

        .user-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-info img {
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .btn-logout {
            background-color: #FF9F1C;
            color: white;
            border-radius: 12px;
            padding: 8px 12px;
            font-weight: bold;
            width: 100%;
            text-align: center;
            display: block;
            margin-top: 20px;
        }

        .tab-content h4 {
            margin-bottom: 20px;
        }

        /* Active Package Card */
        .package-card {
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 20px;
        }

        .package-icon {
            background-color: #f0f8fc;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .package-info h5 {
            margin: 0;
            font-weight: bold;
            color: #036AA1;
        }

        .package-info p {
            margin: 0;
            font-size: 0.9rem;
            color: #666;
        }

        .btn-consult {
            background-color: #036AA1;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            padding: 8px 16px;
            border: none;
            margin-left: auto;
        }

        .btn-consult:hover {
            background-color: #025680;
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

    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <div class="user-info">
                    <img src="{{ asset('images/User PP.png') }}" alt="User" width="80" height="80">
                    <h4>Alisha Wijaya</h4>
                    <p>alishawijaya22@gmail.com</p>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#dashboard" data-bs-toggle="tab">Dashboard</a>
                    <a class="nav-link" href="#profile" data-bs-toggle="tab">Profile</a>
                    <a class="nav-link" href="#history" data-bs-toggle="tab">History</a>
                    <a class="btn-logout" href="{{ route('login') }}">Logout</a>
                </nav>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Dashboard Tab -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <h4>Active Package</h4>
                        <div class="package-card">
                            <div class="package-icon">
                                <img src="{{ asset('images/Chat icon.png') }}" alt="Chat Icon" width="80" height="80">
                            </div>
                            <div class="package-info">
                                <h5>Chat and Video Package</h5>
                                <p>Psychologist: Martha Amberta, M.Psi</p>
                                <p>Rp160.000 - Valid until: 12/02/2024</p>
                            </div>
                            <button class="btn-consult">Consult Now</button>
                        </div>
                    </div>

                    <!-- Profile Tab -->
                    <div class="tab-pane fade" id="profile">
                        <h4>My Profile</h4>
                        <div class="border p-3 rounded">
                            <p><strong>Username:</strong> Alisha Wijaya</p>
                            <p><strong>Email:</strong> alishawijaya22@gmail.com</p>
                            <p><strong>Age:</strong> 21 years old</p>
                            <p><strong>Phone Number:</strong> +6281222356789</p>
                            <p><strong>Country:</strong> Indonesia</p>
                            <p><strong>Zip Code:</strong> 15148</p>
                            <p><strong>Referral Code:</strong> ajkHTLp</p>
                            <button class="btn btn-primary">Edit Profile</button>
                        </div>
                    </div>

                    <!-- History Tab -->
                    <div class="tab-pane fade" id="history">
                        <h4>My History</h4>
                        <div class="border p-3 rounded">
                            <h5>Consultation 1</h5>
                            <p><strong>Date:</strong> 2 Nov 2024</p>
                            <p><strong>Time:</strong> 16:00</p>
                            <p><strong>Type:</strong> Video Call</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>