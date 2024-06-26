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
    Date of Last Modification: 3/16/2024
    Version Number: 2
    Use Case 5: Create Payment and Other Billing Options
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
    <link rel="stylesheet" href="">
    <style>
        /* Main Page Container */
        .billing-page-container {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        /* Main Page Columns */
        .left-panel-container, .right-panel-container {
            /* border: 1px solid black; */
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        /* Shopping Cart Column Container*/
        .left-panel-container {
            background-color: var(--bg-color);
            padding: 40px;
            flex: 1.5;
        }

        /* Shopping Order Details Column Container*/
        .right-panel-container {
            background-color: var(--bg-dark);
            padding: 40px;
            flex: 1;
        }

        /* Panel Section for Continue Shopping, Shopping Header, Cart Items */
        .left-panel-section {
            /* border: 1px solid black; */
            margin-bottom: 10px;
        }

        /* Shopping Cart and Order Details Header Section */
        .header-section {
            height: 60px;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .header-title {
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .item-title {
            align-self: center;
            text-align: right;
            padding-top: 10px;
        }

        /* Shopping Cart Selected Items Section */
        .cart-section {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* border: 1px solid black; */
            margin-bottom: 10px;
            padding: 10px 0px;
        }

        .item-image {
            width: 125px;
            height: 75px;
            background-color: var(--text-light);
            margin-right: 10px;
        }

        .item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .item-details {
            flex: 1;
            padding-right: 10px;
            margin-left: 10px;
        }

        .item-details h3 {
            margin-bottom: 5px;
        }

        .item-details p {
            margin: 0;
            font-size: 14px;
        }

        .item-cost {
            min-width: 60px;
            padding-left: 0px 20px;
        }

        .item-delete {
            cursor: pointer;
        }

        /* Continue Shopping Section */
        .continue-section {
            height: 50px;
            margin-top: 10px;
        }

        /* Panel Section for Address, Payment, Checkout */
        .right-panel-section {
            /* border: 1px solid black; */
            margin-bottom: 10px;
        }

        /* Order Details Title */
        .order-title {
            align-self: center;
        }

        /* Styling for headings within address, and payment sections */
        .order-details {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Address and Payment Method Section Containers */
        .address-section, .payment-section {
            /* border: 1px solid black; */
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 10px 0px;
        }

        .address-detail h3, .payment-detail h3 {
            margin-bottom: 5px;
        }

        .address-detail p, .payment-detail p {
            margin: 0;
            font-size: 14px;
        }

        /* Billing Section Container */
        .billing-section {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top: 20px;
        }

        /* Total Costs Section Container*/
        .total-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* border: 1px solid black; */
            margin-bottom: 5px;
            padding: 0px 0px;
        }

        .total-item p {
            margin: 0;
            font-size: 14px;
        }

        /* Checkout Section Container */
        .checkout-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 15px;
            /* background-color: aqua; */
        }

        .checkout-label, .checkout-button {
            flex: 1;
        }

        /* Checkout Total Cost Label Section */
        .checkout-label {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .checkout-label h3 {
            margin-bottom: 5px;
        }

        .label-total {
            display: flex;
            flex-direction: column;
        }

        .label-total .price {
            justify-content: center;
            align-self: center;
            padding: 5px;
            /* background-color: aqua; */
        }

        /* Checkout Button Section */
        .checkout-button button {
            width: 100%;
            height: 100%;
            padding: 20px 10px;
            box-sizing: border-box;
            background-color: black;
        }
    </style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <!-- Page Container -->
        <div class="billing-page-container">
            <!-- Shopping Cart Section -->
            <div class="left-panel-container">
                <!-- Shopping Cart Header Section -->
                <div class="left-panel-section header-section">
                    <div class="header-title">
                        <div class="cart-title"><h1>Shopping Cart</h1></div>
                        <div class="item-title"><h2>4 Items</h2></div>
                    </div>
                    <div class="divider-section"><hr class="divider"></div>
                </div>

                <!-- Shopping Cart Section -->
                <div class="left-panel-section cart-section">
                    <!-- Cart Item Template -->
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="../../resources/images/istockphoto-1409329028-612x612.jpg" alt="">
                        </div>
                        <div class="item-details">
                            <h3>Item Title</h3>
                            <p>Item Details</p>
                            <p>Quantity: #</p>
                        </div>
                        <div class="item-cost">$10.00</div>
                        <div class="item-delete">&#9447;</div>
                    </div>

                    <div class="cart-item">
                        <div class="item-image">
                            <img src="../../resources/images/istockphoto-1409329028-612x612.jpg" alt="">
                        </div>
                        <div class="item-details">
                            <h3>Item Title</h3>
                            <p>Item Details</p>
                            <p>Quantity: #</p>
                        </div>
                        <div class="item-cost">$10.00</div>
                        <div class="item-delete">&#9447;</div>
                    </div>

                    <div class="cart-item">
                        <div class="item-image">
                            <img src="../../resources/images/istockphoto-1409329028-612x612.jpg" alt="">
                        </div>
                        <div class="item-details">
                            <h3>Item Title</h3>
                            <p>Item Details</p>
                            <p>Quantity: #</p>
                        </div>
                        <div class="item-cost">$10.00</div>
                        <div class="item-delete">&#9447;</div>
                    </div>
                    <div class="divider-section"><hr class="divider"></div>
                </div>

                <!-- Continue Shopping Section -->
                <div class="left-panel-section continue-section">
                    <h3><a href="../case2/discover.php">&#8592; Continue Shopping</a></h3>
                </div>
            </div>

            <!-- Shopping Details Section -->
            <div class="right-panel-container">

                <!-- Order Details Header Section -->
                <div class="right-panel-section header-section">
                    <div class="header-title">
                        <div class="order-title"><h1>Order Details</h1></div>
                    </div>
                    <div class="divider-section"><hr class="divider"></div>
                </div>

                <div class="right-panel-section">
                    <!-- Address Details Section -->
                    <div class="order-details">
                        <div class="address-section">
                            <div class="address-detail">
                                <h3>Jessica Taylor</h3>
                                <p>Neubaugasse 30</p>
                                <p>1070 Vienna</p>
                                <p>Austria</p>
                            </div>
                            <div class="address-edit"><p><a href="">Edit</a></p></div>
                        </div>

                        <!-- Payment Method Section -->
                        <div class="payment-section">
                            <div class="payment-detail">
                                <h3>Payment Method</h3>
                                <p>Credit Card</p>
                                <p>&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226; &#8226;&#8226;&#8226;&#8226; 5057</p>
                            </div>
                            <div class="payment-edit"><p><a href="">Edit</a></p></div>
                        </div>

                        <!-- Section Divider -->
                        <div class="divider-section"><hr class="divider"></div>

                        <!-- Billing Section -->
                        <div class="billing-section">
                            <!-- Billing Details Summary -->
                            <div class="total-section">
                                <div class="total-item"><p>Subtotal (4 Items)</p></div>
                                <div class="total-item"><p>$40.00</p></div>
                            </div>

                            <div class="total-section">
                                <div class="total-item"><p>Shipping Costs</p></div>
                                <div class="total-item"><p>Free!</p></div>
                            </div>

                            <div class="total-section">
                                <div class="total-item"><p>Tax</p></div>
                                <div class="total-item"><p>$2.00</p></div>
                            </div>

                            <!-- Checkout Section -->
                            <div class="total-section checkout-section">
                                <!-- Total Cost of Purchase -->
                                <div class="total-item checkout-label">
                                    <div class="label-total">
                                        <h3>Total (incl. Tax)</h3>
                                        <div class="price"><p>$28.00</p></div>
                                    </div>
                                </div>

                                <!-- Checkout Submission Button -->
                                <div class="total-item checkout-button">
                                    <button type="submit" class="btn primary-button">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Page Specific JS and Include Links -->
    <script src=""></script>
    <script></script>

    <!-- Global JS/Footer Link -->
    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
</body>
</html>