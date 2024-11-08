<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Counseling Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #006D87;
            --light-blue: #F5F9FA;
            --border-radius: 12px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #333;
        }

        .logo {
            width: 120px;
        }

        .navbar {
            border-bottom: 1px solid #eee;
            padding: 1rem 2rem;
        }

        .nav-link {
            color: #666;
            padding: 0.5rem 1rem;
        }

        .nav-link.active {
            color: var(--primary-color);
            border-bottom: 2px solid var(--primary-color);
        }

        .steps-container {
            text-align: center;
            padding: 3rem 0;
            max-width: 600px;
            margin: 0 auto;
        }

        .steps-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2rem 0;
            position: relative;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            z-index: 2;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
        }

        .step-1, .step-2 {
            background-color: var(--light-blue);
            color: var(--primary-color);
        }

        .step-3 {
            background-color: var(--primary-color);
            color: white;
        }

        .step-line {
            position: absolute;
            border-top: 2px dashed #E5E5E5;
            width: 80%;
            z-index: 1;
        }

        .order-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .order-card {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .package-icon {
            background-color: var(--light-blue);
            border-radius: var(--border-radius);
            padding: 1rem;
            width: 60px;
            height: 60px;
        }

        .discount-section {
            margin-bottom: 2rem;
        }

        .discount-input {
            border: 1px solid #eee;
            border-radius: var(--border-radius);
            padding: 0.8rem 1rem;
            display: flex;
            align-items: center;
        }

        .discount-input img {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }

        .btn-apply {
            background-color: transparent;
            color: #0088CC;
            border: none;
            font-weight: 500;
        }

        .price-breakdown {
            border-top: 1px solid #eee;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
        }

        .payment-method-card {
            border: 1px solid #eee;
            border-radius: var(--border-radius);
            padding: 1rem;
            margin-bottom: 1rem;
            cursor: pointer;
        }

        .payment-method-card.selected {
            border-color: var(--primary-color);
        }

        .btn-pay {
            background-color: var(--primary-color);
            color: white;
            border-radius: var(--border-radius);
            padding: 0.8rem;
            width: 100%;
            font-weight: 500;
            border: none;
        }

        .form-control {
            border-radius: var(--border-radius);
            padding: 0.8rem 1rem;
        }

        .payment-form {
            background-color: #fff;
            border-radius: var(--border-radius);
            padding: 2rem;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a href="#" class="navbar-brand">
                    <img src="path-to-your-logo.png" alt="Moodify" class="logo">
                </a>
                <div class="nav-items d-flex align-items-center gap-4">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link active">Services</a>
                    <a href="#" class="nav-link">Forum</a>
                    <div class="d-flex align-items-center gap-3">
                        <select class="form-select border-0">
                            <option>EN</option>
                        </select>
                        <div class="d-flex align-items-center gap-2">
                            <span>Hi, Alisha</span>
                            <img src="path-to-avatar.png" alt="Avatar" class="rounded-circle" width="32" height="32">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="steps-container">
            <h2 class="mb-4">Step 3: Complete Your Counseling Purchase</h2>
            <div class="steps-wrapper">
                <div class="step-line"></div>
                <div class="step">
                    <div class="step-number step-1">1</div>
                    <div>Select Package</div>
                </div>
                <div class="step">
                    <div class="step-number step-2">2</div>
                    <div>Choose Psychologist</div>
                </div>
                <div class="step">
                    <div class="step-number step-3">3</div>
                    <div>Make Payment</div>
                </div>
            </div>
        </div>

        <div class="order-section">
            <div class="row g-4">
                <!-- Left Column: Order Summary -->
                <div class="col-lg-6">
                    <div class="order-card">
                        <h5 class="mb-4">Your Order</h5>
                        <div class="d-flex gap-4">
                            <div class="package-icon">
                                <img src="path-to-chat-icon.png" alt="Chat" width="32" height="32">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-2">Chat and Video Package</h6>
                                        <p class="text-muted mb-0">Psychologist: Martha Amberta, M.Psi</p>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp160.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="discount-section">
                        <h5 class="mb-3">Discount Code</h5>
                        <div class="discount-input d-flex align-items-center">
                            <img src="path-to-discount-icon.png" alt="Discount Icon">
                            <input type="text" class="border-0 flex-grow-1" placeholder="Enter discount code" value="MOODIFYMANTAP">
                            <button class="btn-apply">Apply</button>
                        </div>

                        <div class="price-breakdown">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal</span>
                                <span>Rp160.000,00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Discount (10%)</span>
                                <span class="text-danger">-Rp14.000,00</span>
                            </div>
                            <div class="d-flex justify-content-between fw-bold">
                                <span>Total</span>
                                <span>Rp146.000,00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Payment Form -->
                <div class="col-lg-6">
                    <form class="payment-form">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter your phone number">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Payment Method</label>
                            <div class="payment-method-card selected">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-3">
                                        <input type="radio" name="payment" checked>
                                        <div>
                                            <div>**** 8765</div>
                                            <small class="text-muted">Visa • <a href="#" class="text-decoration-none">Edit</a></small>
                                        </div>
                                    </div>
                                    <img src="path-to-visa-logo.png" alt="Visa" height="24">
                                </div>
                            </div>

                            <div class="payment-method-card">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-3">
                                        <input type="radio" name="payment">
                                        <div>
                                            <div>**** 3345</div>
                                            <small class="text-muted">Gopay • <a href="#" class="text-decoration-none">Edit</a></small>
                                        </div>
                                    </div>
                                    <img src="path-to-gopay-logo.png" alt="Gopay" height="24">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Card holder name</label>
                            <input type="text" class="form-control" placeholder="Enter card holder name">
                        </div>

                        <button type="submit" class="btn-pay">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 