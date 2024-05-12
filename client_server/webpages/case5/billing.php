<?php 
    // Session Start
    if (!isset($_SESSION)) { 
        session_start(); 
    } 

    // Check if user is logged in, otherwise redirect to login page
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../case1/login.php");
        exit;
    } 
?>

<!--
    Author: Idris Yahaya
    Date of Creation: 3/10/3024
    Date of Last Modification: 5/14/2024
    Version Number: 5.6
    Use Case 5: Create Billing Options
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBook</title>
    <!-- Global CSS/Header Link -->
    <?php include_once __DIR__ . "/../../includes/header.php"; ?>

    <!-- Page Specific CSS and Include Links -->
    <link rel="stylesheet" href="billingStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style></style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <div class="page-container">
            <div class="container">
                <h2>Payment Details</h2>

                <!-- Payment Form -->
                <form id="paymentForm" class="form" action="billingProcess.php" method="POST">
                    <!-- Card Holder Section -->
                    <div class="input-group card-holder">
                        <div class="section-title ch-title" id="ch-title">Card Holder</div>
                        <div class="form-control">
                            <input type="text" id="cardHolder" name="cardHolder" placeholder="Enter card holder's name">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <small class="error-message">Please enter card holder's name</small>
                    </div>
                    
                    <!-- Card Details Section -->
                    <div class="input-group card-details">
                        <div class="section-title" id="cd-title">Card Details</div>
                        <div class="form-control">
                            <input type="text" id="cardNumber" name="cardNumber" placeholder="Card Number">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                        </div>

                        <div class="row">
                            <div class="form-control">
                                <input type="text" id="expiry" name="expiry" placeholder="MM/YY">
                            </div>
                            <div class="form-control">
                                <input type="text" id="cvv" name="cvv" placeholder="CVV">
                            </div>
                            <div class="form-control">
                                <input type="text" id="cardType" name="cardType" placeholder="Type" readonly>
                            </div>
                        </div>
                        
                        <small class="error-message">Please enter valid card details</small>
                    </div>
                    
                    <!-- Billing Address Section -->
                    <div class="input-group billing-address">
                        <div class="section-title" id="ba-title">Billing Address</div>
                        <div class="form-control">
                            <input type="text" id="street" name="street" placeholder="Street">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                        </div>

                        <div class="row">
                            <div class="form-control">
                                <input type="text" id="city" name="city" placeholder="City">
                            </div>
                            <div class="form-control">
                                <input type="text" id="state" name="state" placeholder="State">
                            </div>
                            <div class="form-control">
                                <input type="text" id="zip" name="zip" placeholder="Zip">
                            </div>
                        </div>
                        
                        <small class="error-message">Please enter billing address</small>
                    </div>
                    
                    <!-- Total Price Section -->
                    <div class="input-group total-group">
                        <strong>Total:</strong>
                        <strong>$100.00</strong>
                    </div>
                    
                    <!-- Submission -->
                    <button type="submit" class="payment-button">Pay Now</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Page Specific JS and Include Links -->
    <script src="billingScript.js"></script>
    <script></script>

    <!-- Global JS/Footer Link -->
    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
</body>
</html>