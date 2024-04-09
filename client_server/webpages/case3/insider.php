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
	Author: Matthias Chu
	Date of Creation: 3/12/2024
	Date of Last Modification: 3/16/2024
	Version Number: 2
	Use Case 3: Create Comparison Tracker
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
				background-color: #e8e8e8;
				margin: 20px;
			}
			/* big grey box at the top */
			.p1{
				display: flex;
				justify-content: space-between;
				width: 95%;
				font-size: 20px;
				/* font-family: Trebuchet MS, sans-serif; */
				background-color: #ccc;
				border-radius: 30px;
				margin: 20px;
			}
			/* smaller grey boxes in big grey box at top */
			.p2{
				flex: 1;
				padding-top: 10pt;
				padding-left: 20px;
				padding-right: 20px;
				/* font-family: Trebuchet MS, sans-serif; */
				background-color: #e4e4e4;
				border-radius: 30px;
				margin: 20px;
			}
			/* formatting for scroll menu */
			.p3{
				background-color: #ccc;
				border-radius: 30px;
				margin: 20px;
				padding: 10px;
			}
			/* scroll menu */
			sp3 ul{
				height: 390px;
				width:95%;
				font-size: 20px;
				overflow: hidden;
				overflow-y: scroll;
			}
			/* formatting for the drop down menus */
			.chooseSort{
				float: left;
				padding-left: 20px;
				/* font-family: Trebuchet MS, sans-serif; */
			}
			.noBulletPoints{
				list-style-type: none;
			}
			.price{
				float: right;
			}
			.comparisonOption{
				padding: 20px;
				margin: 20px;
				/* font-family: Trebuchet MS, sans-serif; */
				background-color: #e4e4e4;
				border-radius: 30px;
			}
			/* shows cheaper price or better rating */
			.better{
				color: #33b864;
			}
			.worse{
				color: #d30000;
			}
			.addToCart{
				/* font-family: Trebuchet MS, sans-serif; */
				text-align: center;
			}
			label{
				/* font-family: Trebuchet MS, sans-serif; */
			}
			input{
				/* font-family: Trebuchet MS, sans-serif; */
			}
		</style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <div class="page-container">
            <!-- Customers actual itinerary -->
            <h1>Your Itinerary</h1>
            
            <div class="p1">
            
            <div class="p2">
            <p>
            Flight
            <span class="price">$250</span><br/>
            Delta<br/>
            JFK<br/>
            4 Star Rating<br/>
            9/20/2024
            </p>
            </div>
            
            <div class="p2">
            <p>
            Hotel
            <span class="price">$600</span><br/>
            Hilton<br/>
            Laurel, MD<br/>
            3 Star Rating<br/>
            9/21/2024 - 9/28/2024
            </p>
            </div>
            
            <div class="p2">
            <p>
            Car Rental
            <span class="price">$100</span><br/>
            2024 Lexus<br/>
            Red<br/>
            Sedan<br/>
            </p>
            </div>
            
            <div class="p2">
            <p>
            Activities
            <span class="price">$200</span><br/>
            Scuba Diving<br/>
            Fine Dining<br/>
            ATV
            </p>
            </div>
            
            </div>
            
            <br/>
            
            <!-- Sorting options -->
            <h1>Compare the options</h1>
            
            <div class="chooseSort">
            <p>
            <label for="option">Choose an option:</label>
                <select name="option" id="option">
                    <option value="flight">Flight</option>
                    <option value="Hotel">Hotel</option>
                    <option value="carRental">Car Rental</option>
                    <option value="activity">Activity</option>
                </select>
            </p>
            </div>
            
            <div class="chooseSort">
            <p>
            <label for="sortBy">Sort by:</label>
                <select name="sortBy" id="sortBy">
                    <option value="priceLow">Price (Low to High)</option>
                    <option value="priceHigh">Price (High to Low)</option>
                    <option value="starRating">Star Rating</option>
                </select>
            </p>
            </div>
            <br/>
            
            <!-- scroll through options -->
            <div class="p3">
            <section class="sp3">
                <ul class="noBulletPoints">
                    
                    <!-- each of these are just copied and pasted to show scroll function -->
                    <li class="comparisonOption">
                    Delta
                    <span class="price"><span class="worse">$250</span></span><br/>
                    Departure Date: 9/18/2024<br/>
                    Arrival Date: 9/19/2024<br/>
                    Star Rating: <span class="better">4.5</span><br/>
                    <input type="submit" value="Pick this option instead"/>
                    </li>	

                    <li class="comparisonOption">
                    Southwest
                    <span class="price"><span class="better">$150</span></span><br/>
                    Departure Date: 9/18/2024<br/>
                    Arrival Date: 9/19/2024<br/>
                    Star Rating: <span class="worse">2.5</span><br/>
                    <input type="submit" value="Pick this option instead"/>
                    </li>	
                    
                    <li class="comparisonOption">
                    Delta
                    <span class="price"><span class="worse">$250</span></span><br/>
                    Departure Date: 9/18/2024<br/>
                    Arrival Date: 9/19/2024<br/>
                    Star Rating: <span class="better">4.5</span><br/>
                    <input type="submit" value="Pick this option instead"/>
                    </li>	

                    <li class="comparisonOption">
                    Southwest
                    <span class="price"><span class="better">$150</span></span><br/>
                    Departure Date: 9/18/2024<br/>
                    Arrival Date: 9/19/2024<br/>
                    Star Rating: <span class="worse">2.5</span><br/>
                    <input type="submit" value="Pick this option instead"/>
                    </li>	
                    
                    <li class="comparisonOption">
                    Delta
                    <span class="price"><span class="worse">$250</span></span><br/>
                    Departure Date: 9/18/2024<br/>
                    Arrival Date: 9/19/2024<br/>
                    Star Rating: <span class="better">4.5</span><br/>
                    <input type="submit" value="Pick this option instead"/>
                    </li>	

                    <li class="comparisonOption">
                    Southwest
                    <span class="price"><span class="better">$150</span></span><br/>
                    Departure Date: 9/18/2024<br/>
                    Arrival Date: 9/19/2024<br/>
                    Star Rating: <span class="worse">2.5</span><br/>
                    <input type="submit" value="Pick this option instead"/>
                    </li>					
                        
                </ul>
            </section>
            </div>
            
            <div class="addToCart">
            <p>
            <!-- should link to billing -->
            Click <a href="../case4/itinerary.php">here</a> to add your current itinerary to your cart.
            </p>
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