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
	Use Case 3: Insider View Review
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
        .noBulletPoints{
            list-style-type: none;
        }
        .page-container{
            /* background-color: #e8e8e8; */
            padding: 20px;
            font-family: Trebuchet MS, sans-serif;
        }
        .page-container p, .page-container select{
            font-size: 20px;
            font-family: Trebuchet MS, sans-serif;
        }
        .title{
            font-size: 18px;
        }
        .custInfo{
            font-size: 15px;
        }
        .personalReview{
            padding: 20px;
            margin: 20px;
            font-family: Trebuchet MS, sans-serif;
            background-color: #e4e4e4;
            border-radius: 30px;
        }
        .reviewSection{
            background-color: #ccc;
            border-radius: 30px;
            margin: 20px;
            padding: 10px;
        }
        .center{
            text-align: center;
        }
	</style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <div class="page-container">
            <h1>Customer Feedback</h1>
            <p>
            <label for="sortReview">Sort By:</label>
                <select name="sortReview" id="option">
                    <option value="ratingHigh">Star Rating (High to Low)</option>
                    <option value="ratingLow">Star Rating (Low to High)</option>
                    <option value="dateOld">Date (Oldest)</option>
                    <option value="dateNew">Date (Newest)</option>
                </select>
            </p>
            
            <div class="reviewSection">
            <ul class="noBulletPoints">
                <div class="personalReview">
                <li>
                    <span class="title">This trip was amazing!</span> <br>
                    <div class="custInfo">
                    Londa Howard <br>
                    3/3/2022 <br>
                    </div>
                    Star Rating: 5 <br>
                    We had so much fun! The weather was amazing, the activities were fun, and we made a lot of
                    great memories together as a family. 10/10 experience would use TBook again. Very smooth 
                    experience all around!
                </li>
                </div>
                
                <div class="personalReview">
                <li>
                    <span class="title">Terrible experience</span> <br>
                    <div class="custInfo">
                    Bruce Gooberton <br>
                    10/28/2023 <br>
                    </div>
                    Star Rating: 1 <br>
                    The plane crashed >:-(
                </li>
                </div>
                
                <div class="personalReview">
                <li>
                    <span class="title">MID MID MID</span> <br>
                    <div class="custInfo">
                    Alexa Shongbingson <br>
                    7/9/2020 <br>
                    </div>
                    Star Rating: 3 <br>
                    The activities were somewhat boring. My husband and I were expecting a great view with exceptional 
                    service except we got a view of the building next door and I found food crumbs in my bed as soon
                    as we checked in. Maybe we just got unlucky with our bookings though.
                </li>
                </div>
            </ul>
            </div>
            
            <div class="center">
            <p>
            <!-- should link to write own review -->
            Click <a href="writeReview.php">here</a> to tell us about your personal experience.
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