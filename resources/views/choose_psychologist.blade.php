<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Psychologist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
            <button class="book-now-btn ms-auto">Book Now</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>