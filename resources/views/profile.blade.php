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

        .sidebar {
            background-color: #005F73;
            color: white;
            padding: 20px;
            border-radius: 12px;
            height: 100%;
        }

        .tab-content {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 12px;
        }

        .nav-link {
            color: #005F73 !important;
        }

        .nav-link.active {
            background-color: #005F73 !important;
            color: white !important;
        }

        .user-info {
            text-align: center;
        }

        .user-info img {
            border-radius: 50%;
        }

        .btn-logout {
            color: #005F73;
            border: 1px solid #005F73;
            border-radius: 12px;
            margin-top: 20px;
        }

        .btn-logout:hover {
            background-color: #005F73;
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

    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <div class="user-info">
                    <img src="path-to-avatar.png" alt="User" width="80" height="80">
                    <h4>Alisha Wijaya</h4>
                    <p>alishawijaya22@gmail.com</p>
                </div>
                <nav class="nav flex-column mt-4">
                    <a class="nav-link active" href="#dashboard" data-bs-toggle="tab">Dashboard</a>
                    <a class="nav-link" href="#profile" data-bs-toggle="tab">Profile</a>
                    <a class="nav-link" href="#history" data-bs-toggle="tab">History</a>
                    <a class="nav-link btn-logout" href="{{ route('logout') }}">Logout</a>
                </nav>
            </div>

            <!-- Content -->
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Dashboard Tab -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <h4>Active Package</h4>
                        <div class="profile-info mt-3 p-3" style="border: 1px solid #DEE5E7; border-radius: 12px;">
                            <p class="text-muted">valid until: 12/02/2024</p>
                            <h5>Chat and Video package</h5>
                            <p>Psychologist: Martha Amberta, M.Psi</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h6">Rp160.000</span>
                                <button class="btn btn-primary">Consult Now</button>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Tab -->
                    <div class="tab-pane fade" id="profile">
                        <h4>My Profile</h4>
                        <div class="profile-info mt-3 p-3" style="border: 1px solid #DEE5E7; border-radius: 12px;">
                            <p><strong>Username:</strong> Alisha Wijaya</p>
                            <p><strong>Email:</strong> alishawijaya22@gmail.com</p>
                            <p><strong>Age:</strong> 21 years old</p>
                            <p><strong>Phone Number:</strong> +6281222356789</p>
                            <p><strong>Country:</strong> Indonesia</p>
                            <p><strong>Zip Code:</strong> 15148</p>
                            <p><strong>Referral Code:</strong> ajkHTLp</p>
                            <button class="btn btn-primary mt-3">Edit Profile</button>
                        </div>
                    </div>

                    <!-- History Tab -->
                    <div class="tab-pane fade" id="history">
                        <h4>My History</h4>
                        <div class="history-info mt-3 p-3" style="border: 1px solid #DEE5E7; border-radius: 12px;">
                            <h5>Consultation 1</h5>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-calendar me-2" style="color: #0077B6;"></i>
                                <span>2 Nov 2024</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-clock me-2" style="color: #0077B6;"></i>
                                <span>16.00</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-camera-video me-2" style="color: #0077B6;"></i>
                                <span>Video Call</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
