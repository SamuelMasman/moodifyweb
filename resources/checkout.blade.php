<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Counseling Purchase</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
        }

        .steps-container {
            text-align: center;
            padding: 2rem 0;
        }

        .steps-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin: 1rem 0;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .step-1, .step-2 {
            background-color: #E5F2F6;
            color: #005F73;
        }

        .step-3 {
            background-color: #005F73;
            color: white;
        }

        .step-line {
            border-top: 2px dashed #E5F2F6;
            width: 100px;
            margin-top: 20px;
        }

        .order-summary {
            border: 1px solid #E5E5E5;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .discount-code, .payment-method {
            border: 1px solid #E5E5E5;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .apply-btn, .pay-btn {
            background-color: #005F73;
            color: white;
            border-radius: 25px;
            font-weight: bold;
            padding: 0.5rem 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Steps Section -->
    <div class="container">
        <div class="steps-container">
            <h1>Step 3: Complete Your Counseling Purchase</h1>
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

        <!-- Order Summary -->
        <div class="order-summary">
            <h4>Your Order</h4>
            <div class="d-flex justify-content-between">
                <div>
                    <p><strong>Chat and Video Package</strong></p>
                    <p>Psychologist: <strong>Martha Amberta, M.Psi</strong></p>
                </div>
                <p><strong>Rp160.000</strong></p>
            </div>
        </div>

        <!-- Discount Code -->
        <div class="discount-code">
            <h5>Discount Code</h5>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter code here" aria-label="Discount Code">
                <button class="btn apply-btn">Apply</button>
            </div>
        </div>

        <!-- Payment Method -->
        <div class="payment-method">
            <h5>Payment Method</h5>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="081234567890">
                </div>
                <div class="mb-3">
                    <label for="payment-method" class="form-label">Payment Method</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment-method" id="visa">
                            <label class="form-check-label" for="visa">
                                Visa ****8765
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment-method" id="gopay">
                            <label class="form-check-label" for="gopay">
                                Gopay ****3345
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="card-holder" class="form-label">Card Holder Name</label>
                    <input type="text" class="form-control" id="card-holder" placeholder="Card Holder's Name">
                </div>
                <button type="submit" class="btn pay-btn w-100">Pay</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
