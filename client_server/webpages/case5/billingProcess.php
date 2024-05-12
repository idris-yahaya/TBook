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

// MySQL Database Connection
$mysql_db = mysqli_connect("studentdb-maria.gl.umbc.edu","juliet4","juliet4","juliet4");

// Validate Connection
mysqli_connect_errno() ? exit("Error - could not connect to MySQL") : ''; // print("Successful Connection")

// Initialize Variables
$errorMessage = '';
$userEmail = $_SESSION['user_id'];
$customerId = '';

// Query to Fetch Customer ID
$queryCustomerId = "SELECT cust_id FROM customers WHERE cust_email = '$userEmail'";
$resultCustomerId = mysqli_query($mysql_db, $queryCustomerId);

// Retrieval of Purchased Packages
if ($resultCustomerId && mysqli_num_rows($resultCustomerId) > 0) {
    $row = mysqli_fetch_assoc($resultCustomerId);
    $customerId = $row['cust_id'];

    // Query to Fetch Purchased Packages
    $queryPackages = "SELECT package_id FROM selections WHERE cust_id = '$customerId'";
    $resultPackages = mysqli_query($mysql_db, $queryPackages);

    $purchasedPackages = [];
    
    if ($resultPackages && mysqli_num_rows($resultPackages) > 0) {
        while ($packageRow = mysqli_fetch_assoc($resultPackages)) {
            $packageId = $packageRow['package_id'];

            // Query to Fetch Package Destination from packages table
            $queryDestination = "SELECT Destination FROM package WHERE package_id = '$packageId'";
            $resultDestination = mysqli_query($mysql_db, $queryDestination);

            if ($resultDestination && mysqli_num_rows($resultDestination) > 0) {
                $destinationRow = mysqli_fetch_assoc($resultDestination);
                $purchasedPackages[] = $destinationRow['Destination'];
            }
        }
    }
}

// Handle Form Submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and Sanitize Input Data (Prevent HTML & SQL Injections)
    $cardHolder = isset($_POST["cardHolder"]) ? mysqli_real_escape_string($mysql_db, $_POST['cardHolder']) : '';
    $cardNumber = isset($_POST["cardNumber"]) ? mysqli_real_escape_string($mysql_db, $_POST['cardNumber']) : '';
    $expiry = isset($_POST["expiry"]) ? mysqli_real_escape_string($mysql_db, $_POST['expiry']) : '';
    $cvv = isset($_POST["cvv"]) ? mysqli_real_escape_string($mysql_db, $_POST['cvv']) : '';
    $cardType = isset($_POST["cardType"]) ? mysqli_real_escape_string($mysql_db, $_POST['cardType']) : '';
    $street = isset($_POST["street"]) ? mysqli_real_escape_string($mysql_db, $_POST['street']) : '';
    $city = isset($_POST["city"]) ? mysqli_real_escape_string($mysql_db, $_POST['city']) : '';
    $state = isset($_POST["state"]) ? mysqli_real_escape_string($mysql_db, $_POST['state']) : '';
    $zip = isset($_POST["zip"]) ? mysqli_real_escape_string($mysql_db, $_POST['zip']) : '';

    // Insert data into billing table
    $query = "INSERT INTO billing (Cust_ID, Cust_First_Name, Card_Number, Card_Type, Exp_Date, CVV, Street, City, State, Zip) 
              VALUES ('$customerId', '$cardHolder', '$cardNumber', '$cardType', '$expiry', '$cvv', '$street', '$city', '$state', '$zip')";
    $result = mysqli_query($mysql_db, $query);

    // Data Insertion Error
    if(!$result){
        $errorMessage = "Error - query could not be executed";
        $error = mysqli_error($mysql_db);
        print "<p>$error</p>";
        exit;
    }
}

// Close Database Connection
mysqli_close($mysql_db);
?>

<!--
    Author: Idris Yahaya
    Date of Creation: 4/10/3024
    Date of Last Modification: 5/14/2024
    Version Number: 5.6
    Use Case 5: Process Billing Options
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
    <style>
        .container h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .container .heading p {
            text-align: center;
        }

        .container .shipping p {
            padding-left: 20px;
        }

        .container h3 {
            font-size: 24px;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .container ul {
            margin-left: 20px;
            list-style-type: circle;
        }

        .container ul li {
            margin-bottom: 10px;
            font-size: 18px;
            list-style-type: circle;
        }
    </style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <div class="page-container">
            <div class="container">
                <?php if ($errorMessage): ?>
                    <?php echo $errorMessage; ?>
                <?php else: ?>
                    <div class="heading">
                        <h2>Thank you for shopping with us!</h2>
                        <p>Your order is being processed.</p>
                    </div>

                    <!-- Display User's Address -->
                    <div class="shipping">
                        <h3>Shipping Address:</h3>
                        <p>
                            <?php
                            echo $cardHolder . '<br>';
                            echo $street . '<br>';
                            echo $city . ', ' . $state . ' ' . $zip . '<br>';
                            ?>
                        </p>
                    </div>

                    <!-- Display Purchased Packages -->
                    <div class="purchased">
                        <h3>Purchased Packages:</h3>
                        <?php if (!empty($purchasedPackages)): ?>
                            <ul>
                                <?php foreach ($purchasedPackages as $package): ?>
                                    <li><?php echo $package; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p>No packages purchased.</p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
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