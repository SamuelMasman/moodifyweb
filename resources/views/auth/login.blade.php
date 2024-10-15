<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodify - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e8f4fa;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #036AA1;
            display: flex;
            flex-direction: column;
            height: 100vh;
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
            height: 50px;
        }

        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            padding: 20px;
        }

        .login-page {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            max-width: 1200px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-image {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .login-image img {
            max-width: 40%;
            height: 50vh;
            margin-bottom: 20px;
        }

        .login-form-container {
            flex: 1;
            padding: 20px;
        }

        .login-form-container h2 {
            text-align: center;
            color: #036AA1;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control {
            border: 2px solid #036AA1;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #036AA1;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #005bb5;
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
            font-size: 14px;
            color: #036AA1;
            font-weight: bold;
        }

        .support-text a {
            color: #036AA1;
            font-weight: bold;
        }

        .support-text a[href="{{ route('register') }}"] {
            color: #0E9DE9;
            font-weight: bold;
        }

        .text-find-support {
            font-weight: bold;
        }

        .custom-muted {
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

    <!-- Main Content Section -->
    <div class="main-content">
        <div class="login-page">
            <div class="login-image">
                <img src="images/Lifesavers Hand.png" alt="Support Illustration">
                <h3 class="text-find-support">Find Support</h3>
                <p class="custom-muted">
                    Whether you're seeking professional guidance or simply looking to connect with others who understand
                    what you're going through, our community and support networks are here for you.
                </p>
            </div>
            <div class="login-form-container">
                <h2>Log In</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf 
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span class="eye-icon" onclick="togglePassword()">👁️</span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <p class="support-text">
                        <a href="{{ route('welcome') }}">Login as Guest</a> | Don't have an account? <a href="{{ route('register') }}">Sign Up here</a>
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
