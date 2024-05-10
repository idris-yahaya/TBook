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
    Author: Renee Sit
    Date of Creation: 3/10/2024
    Date of Last Modification: 3/16/2024
    Version Number: 2
    Use Case 2: Display and Select Trip Options
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
        /*style for heading 1*/
        .subTitle{
            text-align: center;
            font-weight: bold;
            color: #013229;
            padding-top: 10px;
            margin: 20px 0px;
        }

        /*style for paragraph under heading 1*/
        .subHeading{
            text-align: center;
            font-style: italic;
            color: #013229;
        }

        /*style for heading 2*/
        .rowTitle{
            color: #013229;
            margin: 10px 0px 10px 20px;
        }

        /*style used to group all the elements under each heading 2*/
        .boxGroup1{
            display: flex;
            justify-content: left;
            position: relative;
            left: 5%;
        }

        /*style used to group all the elements under each heading 2*/
        .boxGroup2{
            display: flex;
            justify-content: left;
            position: relative;
            left: 5%;
            top: 25px;
        }

        span{
            background-color: #fffeeb;
        }

        /*style used for each accommodation/activities' information*/
        .box, .box2, .box3,.box4{
            width: 400px;
            height: 250px;
            border: 1px solid #013229;
            border-radius: 10px;
            position:relative;
            padding-top: 10pt;
            padding-left: 5pt;
            text-align: left;
            color: #013229;
            background-color: #fffeeb;
            margin-right: 20px;
        }

        /*style used for the filter information*/
        .filterResults{
            display: flex;
            justify-content: right;
            position: relative;
            right: 5px;
            bottom: 555px;
            border:#013229;
            border-radius: 10px;
            border-width: 2px;
        }
        
        /* a slideshow container for the images */
        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin: auto;
            bottom: 115px;
        }

        /* style used to display contents */
        .slides {
            display:contents;
        } 

        /* style used for images in package */
        .slides img {
            float: right;
            width: 105px;
            height: 70px;
        }

        /* style used for buttons */
        .button {
        background-color: #f2f1dc;
        color: white;
        padding: 10px 32px;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
        }

        .button:hover {
        background-color: #fffeeb;
        }

        /* style used for spacing buttons on page */
        .bts {
            margin-left: 70px;
        }

        /* style used for spacing buttons on page */
        .bt2 {
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <div class="page-container">
        <form action="index.html">
    <h1 class = "subTitle">Where To Next?</h1>
    <p class = "subHeading">Let us help you plan your next adventure! We'll guide you in discovering and booking your ideal accommodation.</p><br>

    <h2 class = "rowTitle">Package Deals</h2>
    <!--boxGroup1 is used to group all the elements in the section together-->
    <div class = "boxGroup1">
        <!--box, box2, box3, box4 is used to group each accommodation/activities' information-->
        <div class = "box">
            <p> <h3><a href = "https://swe.umbc.edu/~rsit1/is448/TBook/client_server/webpages/case4/itinerary.php">Package #1</a></h3>
                <span style = "font-size: 10pt">9/10 (624 reviews) <br> $850 per night</span>
                <br> <br>
                <span style = "font-size: 12pt">Accomodation: <br> Holiday Inn</span>
                <br>
                <br>
                <span style = "font-size: 12pt">Activity: <br> Zoo</span>
                <br>
                <br>
                    <div class="slideshow-container">
                        <div class="slides">
                        <img src ="../../resources/images/../../resources/images/hotel.jpg" alt="Hotel Preview" />
                        <img src ="../../resources/images/activity2.jpg" alt="Scuba Diving" />
                        </div>
                    </div>
                <br>
                <input type="checkbox" id="box_1" name="box_1" value="Select">
                <label for="box_1"> Select Package #1</label><br>
              </p>
          </div>

        <div class = "box2">
            <p> <h3><a href = "https://swe.umbc.edu/~rsit1/is448/TBook/client_server/webpages/case4/itinerary.php">Package #2</a></h3>
                <span style = "font-size: 10pt">8/10 (540 reviews) <br> $1000 per night</span>
                <br> <br>
                <span style = "font-size: 12pt">Accomodation: <br> Hilton</span>
                <br>
                <br>
                <span style = "font-size: 12pt">Activity: <br> Aquarium</span>
                <br>
                <br>
                <div class="slideshow-container">
                    <div class="slides">
                      <img src ="../../resources/images/../../resources/images/hotel.jpg" alt="Hotel Preview" />
                      <img src ="../../resources/images/activity1.jpg" alt="Aquarium" />
                    </div>
                </div>
            <br>
            <input type="checkbox" id="box_2" name="box_2" value="Select">
            <label for="box_2"> Select Package #2</label><br>
            </p>
        </div>
    </div>
    <!--boxGroup2 is used to group all the elements in the section together-->
    <div class = "boxGroup2">
        <div class = "box3"> 
            <p> <h3><a href = "https://swe.umbc.edu/~rsit1/is448/TBook/client_server/webpages/case4/itinerary.php">Package #3</a></h3>
                <span style = "font-size: 10pt"> 7/10 (924 reviews) <br> $650 per night</span>
                <br> <br>
                <span style = "font-size: 12pt">Accomodation: <br> Hampton Inn</span>
                <br>
                <br>
                <span style = "font-size: 12pt">Activity: <br> Garden</span>
                <br>
                <br>
                <div class="slideshow-container">
                    <div class="slides">
                      <img src ="../../resources/images/../../resources/images/hotel.jpg" alt="Hotel Preview" />
                      <img src ="../../resources/images/activity2.jpg" alt="Garden" />
                    </div>
                </div>
            <br>
            <input type="checkbox" id="box_3" name="box_3" value="Select">
            <label for="box_3"> Select Package #3</label><br>
            </p>
        </div>

        <div class = "box4">
            <p> <h3><a href = "https://swe.umbc.edu/~rsit1/is448/TBook/client_server/webpages/case4/itinerary.php">Package #4</a></h3>
                <span style = "font-size: 10pt">9/10 (429 reviews) <br> $1500 per night</span>
                <br> <br>
                <span style = "font-size: 12pt">Accomodation: <br> Four Seasons</span>
                <br>
                <br>
                <span style = "font-size: 12pt">Activity: <br> Scuba Diving</span>
                <br>
                <br>
                <div class="slideshow-container">
                    <div class="slides">
                        <img src ="../../resources/images/../../resources/images/hotel.jpg" alt="Hotel Preview" />
                        <img src ="../../resources/images/activity1.jpg" alt="Scuba Diving" />
                    </div>
                </div>
            <br>
            <input type="checkbox" id="box_4" name="box_4" value="Select">
            <label for="box_4"> Select Package #4</label><br>
            </p>
        </div>
    </div>
    <br>
    <div class = "button bts bt2">
        <input type = "submit" value = "submit selection" />
    </div>
    <div class = "button bt2">
        <input type = "reset" value = "reset selection" />
    </div>
</form>
    <div class = "filterResults">
        <h2>Filter</h2>
        <form>
            <br>
            <br>
            <label for="priceRange">Price Range:</label>
            <input type="range" id="priceRange" name="priceRange" min="0" max="10000" step="10" oninput="updatePrice()">
            <div id="priceIndicator"></div>            
                <script>
                    function updatePrice() {
                        // Get the value of the range input
                        var price = document.getElementById("priceRange").value;
                
                        // Update the price indicator element with the current price
                        document.getElementById("priceIndicator").innerText = "Price: $" + price;
                    }
                </script>
            <br>
            <label>Star Rating:</label><br>
            <input type="checkbox" id="star1" name="starRating" value="1">
            <label for="star1">1 Star</label><br>
          
            <input type="checkbox" id="star2" name="starRating" value="2">
            <label for="star2">2 Stars</label><br>
          
            <input type="checkbox" id="star3" name="starRating" value="3">
            <label for="star3">3 Stars</label><br>
          
            <input type="checkbox" id="star4" name="starRating" value="4">
            <label for="star4">4 Stars</label><br>
          
            <input type="checkbox" id="star5" name="starRating" value="5">
            <label for="star5">5 Stars</label><br>
            <br>
            <div class = button>
                <input type="submit" value="Apply Filters">
            </div>
        </form>
    </div>
    </main>

    <!-- Page Specific JS and Include Links -->
    <script src=""></script>
    <script></script>

    <!-- Global JS/Footer Link -->
    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
</body>
</html>