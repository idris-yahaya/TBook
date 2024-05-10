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
	Author: Julie Tu
	Date of Creation: 3/7/2024
	Date of Last Modification: 3/16/2024
	Version Number: 2
	Use Case 1: Create User Account and Login
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
    <!--Document style CSS applies background image and border for the text.-->
	<style>
		.page-container {
			background-image: url("https://images.unsplash.com/photo-1531436040007-7216019112d7?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
			min-height: 100vh;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}

		.form-container {
			text-align: center;
			width: 500px;
			margin: 1em auto;
			padding: 50px;
			border: 5px black double;
		}
	</style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
		<div class="page-container">
			<div class="form-container">
				<h2>Welcome to Your Account!</h2><br>
				<a class="confirm" href="../case5/billing.php">Continue to Payment!</a>
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