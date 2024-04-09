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
	Author: Briana Taborn
	Date of Creation: 3/10/2024
	Date of Last Modification: 3/16/2024
	Version Number: 2
	Use Case 4: Planning Itinerary
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
		.page-container {
			text-align: left;
			padding-top: 5%; 
			padding-bottom: 5%;
			padding-left: 5%; 
			padding-right: 5%;
		}
		.indent {
			margin-left: 50px;
		}
		.title {
			background-color: #28BDBA;
			color: white;
			padding: 20px;
		}
		.subtitle {
			background-color: #2C9492;
			color: white;
			padding: 10px;
		}
		.delete {
			background-color: black;
			color: white;
			font-size: 25px;
			font-style: italic;
			font-weight:bold;
			padding: 12px;
			border-radius: 10px;
		}
		.buttons {
			margin-left: 15%;
			margin-top: 10px;
			margin-bottom: 25px;
			display: inline-block;
			color: white;
		}
		.link {
			background-color: #7C7C7C;
			color: white;
			padding: 10px;
			border-radius: 10px;
		}
		.category {
			font-weight: bold;
			width: 200px;
		}
		.confirm {
			background-color: #28BDBA;
			padding: 20px;
			color: white;
			display: block;
			text-align: center;
			font-size: 30px;
			font-weight: bold;
		}
		.container {
			display: flex;
			justify-content: center;
			align-items: baseline;
			margin-top: 10px;
		}
		.c-element1, .c-element2 {
			flex: auto;
			margin-right: 50px;
		}
	</style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <div class="page-container">
            <h1 class="title">My Trips</h1>
            <div class="indent">
                <div class="container">
                    <div class="c-element1"><h2 class="subtitle">Barcelona: July 27, 2024 - August 8, 2024</h2></div>
                    <div class="c-element1"><input class="delete" type="reset" value="Delete Entire Trip"> <br /> <br /></div>
                </div>  
                <div class="buttons">
                    <a class="link" href="../case2/discover.php">Modify/Add Flights</a>
                    <a class="link" href="../case2/discover.php">Modify/Add Hotel(s)</a>
                    <a class="link" href="../case2/discover.php">Add Car Rental(s)</a>
                    <a class="link" href="../case2/discover.php">Modify/Add Activities</a>
                </div>
                <p>
                    <span class="category">Flights:</span> 2670: 11:15 AM EST Dulles (IAD) - 1:15 PM CET Barcelona (BCN)<br />
                    8255: 4:00 PM CET Barcelona (BCN) - 7:00 AM EST Dulles (IAD)<br /> <br />
                    <span class="category">Hotel(s):</span> Hilton Barcelona (13 nights)<br /> <br />
                    <span class="category">Car Rental(s):</span> None<br /><br />
                    <span class="category">Activities:</span> Paella Cooking Class<br />
                    La Sagrada Familia Visit<br />
                    Hot Air Balloon Flyover<br /><br />
                </p>
                <a class="confirm" href="../case5/billing.php">Confirm Trip</a>
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