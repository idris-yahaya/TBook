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
			background-image: url("../../resources/images/blue.jpg");
			min-height: 100vh;
		}

		.form-container {
			text-align: left;
			width: 500px;
			margin: 1em auto;
			padding-top: 50px; 
			padding-bottom: 50px;
			padding-left: 60px; 
			padding-right: 60px;
			border: 5px black double;
		}
	</style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
		<div class="page-container">
			<div class="form-container">
				<h2>Welcome to T-Book</h2><br/>
				<form name="accountCreation" action="case2.html" method="POST">
				
				<!--Introduction paragraph and password restrictions.-->
				<p>Please create an account by filling in the fields below. When creating a password, please use at least 8 characters, a letter, a number, and a special character.</p><br/><br/>

				<!--Input text for first name-->
				<p>Enter first name: </p>
				<input type="text" name="fName"/><br/><br/>

				<!--Input text for last name-->
				<p>Enter last name: </p>
				<input type="text" name="lName"/><br/><br/>

				<!--Input text for username-->
				<p>Enter last name: </p>
				<input type="text" name="username"/><br/><br/>

				<!--Input text for email. Ensure @ and . included with pattern matching.-->
				<p>Enter your email: </p>
				<input type="text" name="email"/><br/><br/>


				<!--Input unseen password. Ensure at least 8 characters, one letter, one number, and one special character.-->
				<p>Enter your password: </p>
				<input type="text" name="password"/><br/><br/>

				<!--Enter user account information will point to case2 for D4.-->
				<a href = "../case2/discover.php">Enter</a>

				<!--This will be used when the php file is created. 
					<input type="submit" value="Submit"/>-->

				</form>
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