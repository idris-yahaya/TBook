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
			margin-left: 20%;
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
		}
		.category2 {
			font-weight: bold;
			font-size: 26px;
			display: block;
			text-align: center;
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
		}
		.c-element1, .c-element2 {
			flex: auto;
			margin-right: 50px;
		}
		.cart-item {
			border: 2px solid #ddd;
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 10px;
		}
		.counter {
			display: center;
			align-items: center;
		}
		.indent {
			margin-left: 25px;
		}
	</style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <div class="page-container">
		<h1 class = "title">My Trips</h1>
<div class = "indent">
	<div class = "cart-item"> 
		<div class="container">
			<div class="c-element1"><h2 class = "subtitle">Barcelona: July 27, 2024 - August 8, 2024</h2></div>
			<div class="c-element1"><input class = "delete" type = "reset" value = "Delete Entire Trip"> <br /> <br /></div>
		</div>	
		<div class= "buttons">
			<a class = "link" href="case2.html">Modify Flights</a>
			<a class = "link" href="case2.html">Modify Hotel(s)</a>
			<a class = "link" href="case2.html">Add Car Rental(s)</a>
			<a class = "link" href="case2.html">Modify Activities</a>
		
		</div>
	
		<p>
			<div class = "cart-item"> 
				<span class = "category">Flights:</span> <br /><br />
						<div class = "indent">
							2670: 11:15 AM EST Dulles (IAD) -1:15 PM CET Barcelona (BCN)<br />
							8255: 4:00 PM CET Barcelona (BCN) - 7:00 AM EST Dulles (IAD)​<br /> ​<br />
						
							<div class="counter">
								<button>-</button>
								<span>2</span>
								<button>+</button>
							</div>
							<br /><span class="category">Total:  $2,213.58</span>	
						</div>	
			</div>
			<div class = "cart-item"> 
				<span class = "category">Hotel(s):</span> <br /><br />
					<div class = "indent">
						Hilton Barcelona (13 nights)​<br /> ​<br />
						<div class="counter">
								<button>-</button>
								<span>1</span>
								<button>+</button>
						</div>
						<br /><span class="category">Total:  $1,559.87</span>
					</div>	
			</div>
			<div class = "cart-item"> 
				<span class = "category">Car Rental(s):</span><br /><br />
					<div class = "indent">	
						None​ ​<br />​<br />
						<div class="counter">
							<button>-</button>
							<span>0</span>
							<button>+</button>
						</div>
					</div>
			</div>
			<div class = "cart-item"> 
				<span class = "category">Activities:</span><br /><br />
					<div class = "indent">
						Paella Cooking Class​ ​<br /><br />
						<div class="counter">
								<button>-</button>
								<span>2</span>
								<button>+</button>
						</div>
						<br /><span class="category">Total:  $102.98</span>
					</div>
					<br />
					<div class = "indent">
						La Sagrada Familia Visit​​​<br /><br />
							<div class="counter">
								<button>-</button>
								<span>3</span>
								<button>+</button>
							</div>
						<br /><span class="category">Total:  $76.97</span>	
					</div>
					<br />
					<div class = "indent">
						Hot Air Ballon Flyover​​<br /><br />
						<div class="counter">
							<button>-</button>
							<span>2</span>
							<button>+</button>
						</div>
						<br /><span class="category">Total:  $250.00</span>
					</div>					
			</div>		
		</p>
		<br /><span class="category2">Total:  $4,203.40</span>
	</div>
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