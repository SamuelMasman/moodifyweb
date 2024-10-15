<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodify - Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e8f4fa;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #ffffff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .header img {
            height: 80px;
        }
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 70px);
            padding: 20px;
        }
        .register-page {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1300px;
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .register-image {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .register-image img {
            max-width: 40%; /* Adjust this value to change the image size */
            height: 50vh; /* Maintain aspect ratio */
            margin-bottom: 20px; /* Space between image and text */
        }
        .register-form-container {
            flex: 1;
            padding: 20px;
            max-width: 400px;
        }
        .register-form-container h2 {
            text-align: center;
            color: #036AA1;
            font-weight: bold;
            margin-bottom: 20px;
            border-bottom: 2px solid #036AA1;
            padding-bottom: 10px;
        }
        .form-control {
            border: 2px solid #036AA1;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }
        .form-control:focus {
            border-color: #036AA1;
            box-shadow: #036AA1;
        }
        .btn-primary {
            background-color: #036AA1;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #036AA1;
        }
        .form-group {
            position: relative;
        }
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .support-text {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            color: #036AA1;
            font-weight: bold;
        }
        .support-text a {
            color: #036AA1;
            font-weight: bold;
        }

        .support-text a[href="{{ route('login') }}"] {
            color: #0E9DE9; 
            font-weight: bold;
        }

        .find-support{
            color: #036AA1;
            font-weight: bold;
        }

        .fsupport-desc{
            color: #036AA1;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="header">
        <div>
            <img src="{{ asset('images/Moodify Logo.png') }}" alt="Moodify Logo">
        </div>
        <div class="text-right">
            <p class="m-0">&copy; Moodify. All Rights Reserved</p>
        </div>
    </header>

    <!-- Main Register Container -->
    <div class="register-container">
        <div class="register-page">
            <!-- Image Section -->
            <div class="register-image">
                <img src="{{ asset('images/Lifesavers Hand.png') }}" alt="Support Illustration">
                <h3 class="find-support">Find Support</h3>
                <p class="fsupport-desc">
                    Whether you're seeking professional guidance or simply looking to connect with others who understand what you’re going through, our community and support networks are here for you.
                </p>
            </div>

            <!-- Form Section -->
            <div class="register-form-container">
                <h2>Sign Up</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="DoB" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span class="eye-icon" onclick="togglePassword()">👁️</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <p class="support-text">
                        <a href="{{ route('welcome') }}">Login as Guest</a> | Already have an account? <a href="{{ route('login') }}">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
        }
    </script>
</body>
</html>