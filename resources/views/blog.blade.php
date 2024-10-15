<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodify - Article</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            color: #036AA1;
        }

        /* Header Styles */
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

        .btn-login {
            border: 2px solid #FF9F1C;
            background-color: transparent;
            color: #FF9F1C;
            border-radius: 25px;
            padding: 8px 20px;
            font-weight: bold;
        }

        /* Breadcrumb */
        .breadcrumb {
            background-color: transparent;
            padding: 10px;
            margin-top: 20px;
        }

        .breadcrumb-item a {
            color: #036AA1;
            font-weight: bold;
        }

        /* Article Section */
        .article-header {
            text-align: center;
            margin-top: 30px;
        }

        .article-header img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
        }

        .article-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #036AA1;
            margin-top: 20px;
        }

        .article-info {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #6C757D;
            font-size: 1rem;
        }

        .article-info i {
            margin-right: 5px;
        }

        .article-content {
            margin: 30px auto;
            padding: 0 15px;
            max-width: 800px;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        /* Sidebar */
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 40px;
        }

        .related-articles h5 {
            font-weight: bold;
            color: #036AA1;
            margin-bottom: 20px;
        }

        .related-articles a {
            display: block;
            margin-bottom: 15px;
            font-size: 1rem;
            color: #036AA1;
        }

        .related-articles a:hover {
            text-decoration: underline;
        }

        /* Social Sharing */
        .social-icons i {
            font-size: 1.5rem;
            color: #036AA1;
            margin-right: 15px;
        }

        .back-button {
            background-color: #036AA1;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
            margin-top: 30px;
            text-align: center;
            display: inline-block;
        }

        .back-button:hover {
            background-color: #024b73;
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
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

    <!-- Breadcrumb Navigation -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
            </ol>
        </nav>
    </div>

    <!-- Article Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="article-header">
                    <img src="images/Article1.png" alt="Article Image">
                    <h1 class="article-title">{{ $blog->title }}</h1>
                    <div class="article-info">
                        <span><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                        <span class="ms-4"><i class="far fa-user"></i> {{ $blog->author }}</span>
                    </div>
                </div>

                <div class="article-content">
                    {!! nl2br(e($blog->content)) !!}
                </div>

                <!-- Social Sharing -->
                <div class="text-center my-4">
                    <h5>Share this article:</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Back to Blog Button -->
                <div class="text-center">
                    <a href="/blog" class="back-button">Back to Blog</a>
                </div>
            </div>

            <!-- Sidebar with Related Articles -->
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="related-articles">
                        <h5>Related Articles</h5>
                        @foreach($relatedArticles as $related)
                            <a href="{{ route('articles.show', $related->id) }}">{{ $related->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>