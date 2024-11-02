<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodify - Empower Your Mind with Personalized Mental Health Care</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #075985;
            margin: 0;
        }

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

        /* Hero Section */
        .hero {
            background-color: #ffffff;
            padding: 60px 0;
            text-align: left;
        }

        .hero h1 {
            color: #036AA1;
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.2rem;
            color: #6C757D;
        }

        .hero .btn-get-started {
            background-color: #FF9F1C;
            color: white;
            padding: 12px 30px;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }

        .hero .btn-get-started:hover {
            background-color: #e57a00;
        }

        /* Services Section */
        .services {
            padding: 60px 0;
        }

        .services h2 {
            text-align: center;
            font-weight: bold;
            color: #036AA1;
            margin-bottom: 20px;
        }

        .services p {
            color: #6C757D;
            /* Subtle text color for the paragraph */
            font-size: 1rem;
        }

        .services .service-btn {
            background-color: #F0FAFF;
            font-weight: bold;
            border: none;
            color: #036AA1;
            padding: 12px 25px;
            border-radius: 30px;
            margin: 10px;
            font-size: 1rem;
            transition: background-color 0.3s, color 0.3s;
        }

        .services .service-btn.active {
            background-color: #036AA1;
            color: white;
        }

        .services .service-btn:hover {
            background-color: #036AA1;
            color: white;
        }

        /* Relationship Consultation Section */
        .services h3 {
            font-size: 1.5rem;
            color: #036AA1;
            font-weight: bold;
        }

        .services ul {
            list-style-type: none;
            padding-left: 0;
        }

        .services ul li {
            position: relative;
            padding-left: 20px;
            font-size: 1rem;
            color: #075985;
        }

        .services ul li::before {
            content: '\2022';
            /* Unicode for bullet point */
            color: #036AA1;
            font-weight: bold;
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: 0;
        }

        .services img {
            margin-left: 20%;
        }

        .btn-primary {
            background-color: #036AA1;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            border: none;
        }

        .btn-primary:hover {
            background-color: #025d88;
            color: white;
        }


        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .card-title {
            font-weight: bold;
        }

        /* About Us Section */
        .about-us {
            background-color: #ffffff;
            padding: 60px 0;
        }

        .about-us p {
            text-align: center;
        }

        .about-us h2 {
            font-weight: bold;
            color: #036AA1;
            text-align: center;
        }

        .about-us h3 {
            color: #075985;
            text-align: center;
        }

        .about-us h5 {
            font-weight: bold;
        }

        /* Footer Styles */
        footer {
            background-color: #E0F4FE;
            color: #075985;
            padding: 40px 0;
        }

        .footer p {
            font-size: 0.9rem;
        }

        .footer h5 {
            font-size: 1.2rem;
        }

        .footer-logo {
            width: 250px;
            height: auto;
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
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
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
                <button class="btn btn-login ms-2">Login</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Empower Your Mind with Personalized Mental Health Care</h1>
                    <p>Looking for guidance in your mental wellness journey? Our expert therapists are available to
                        support you.</p>
                    <button class="btn btn-get-started">Get Started</button>
                </div>
                <div class="col-md-6">
                    <img src="images/Home Image 1.png" alt="Mental Health Care" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2>Comprehensive Counseling Services for Your Well-Being</h2>
            <p class="text-center mb-4">Moodify offers a range of counseling services tailored to your personal needs,
                including support for career development, relationships, parenting, and self-esteem.</p>
            <div class="text-center">
                <button class="service-btn active">Relationship</button>
                <button class="service-btn">Career</button>
                <button class="service-btn">Parenting</button>
                <button class="service-btn">Marriage</button>
                <button class="service-btn">Self-esteem</button>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 order-md-1">
                    <img src="images/Home Image 2.png" alt="Relationship Consultation" class="img-fluid">
                </div>
                <div class="col-md-6 order-md-2">
                    <h3>Relationship Consultation</h3>
                    <p>An online relationship counseling service to help individuals and couples navigate challenges,
                        improve communication, and strengthen their bonds.</p>
                    <ul>
                        <li>Accessible consultation sessions anytime, anywhere</li>
                        <li>Professional guidance to resolve conflicts and build healthier relationships</li>
                    </ul>
                    <button class="btn btn-primary">Start</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Section -->
    <section class="blog">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 mb-4">
                        <a href="{{ route('articles.show', ['id' => $blog->id]) }}"
                            style="text-decoration: none; color: inherit;">
                            <div class="card">
                                <img src="images/Article1.png" class="card-img-top" alt="{{ $blog->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $blog->title }}</h5>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($blog->content, 100) }}</p>
                                    <p class="text-muted">{{ $blog->created_at->format('M d, Y') }} |
                                        {{ $blog->author }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


                <!-- Second Article -->
                <div class="col-md-6 mb-4">
                    <a href="{{ route('articles.show', ['id' => $blog->id]) }}"
                        style="text-decoration: none; color: inherit;">
                        <div class="card">
                            <img src="images/Article2.png" class="card-img-top" alt="Types of Moods">
                            <div class="card-body">
                                <h5 class="card-title">Learn types of Moods</h5>
                                <p class="card-text">Moods are a natural and essential part of the human experience.
                                    They can range from feelings of joy and excitement to sadness, anger, and fear.</p>
                                <p class="text-muted">Aug 8, 2024 | Joshua R.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="container">
            <h2>About Us</h2>
            <h3>We help people to overcome their mental problems</h3>
            <p>Moodify offers a range of counseling services tailored to your personal needs, including support for
                career development, relationships, parenting, and self-esteem.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/AboutUs1.png" alt="Find Support" class="mb-3">
                            <h5>Find Support</h5>
                            <p>Whether you're seeking professional guidance or simply looking to connect with others who
                                understand what you're going through, our community is here to support you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/AboutUs3.png" alt="Reach Out for Help" class="mb-3">
                            <h5>Reach Out for Help</h5>
                            <p>If you ever find yourself in crisis or in need of immediate support, don't hesitate to
                                reach out to a trusted friend, family member, or mental health professional. We're here
                                for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/AboutUs2.png" alt="Track Your Progress" class="mb-3">
                            <h5>Track Your Progress</h5>
                            <p>Use our tracking tools to monitor your progress over time. Celebrate your successes and
                                reflect on areas where you'd like to focus more energy for personal growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/Moodify Logo.png" alt="Moodify" class="mb-3 footer-logo">
                    <p>Empowering minds, fostering well-being</p>
                </div>
                <div class="col-md-3">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li>Relationship</li>
                        <li>Career</li>
                        <li>Parenting</li>
                        <li>Marriage</li>
                        <li>Self-esteem</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Get to Know Us</h5>
                    <ul class="list-unstyled">
                        <li>About Us</li>
                        <li>Blog</li>
                        <li>FAQ</li>
                        <li>Testimonials</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li>Terms & Conditions</li>
                        <li>Privacy Policy</li>
                        <li>Cookie Policy</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Moodify. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="me-3"><img src="images/facebook_icon.png" alt="Facebook"></a>
                    <a href="#" class="me-3"><img src="images/twitter_icon.png" alt="Twitter"></a>
                    <a href="#"><img src="images/instagram_icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
