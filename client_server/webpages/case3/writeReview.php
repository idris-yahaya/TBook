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
	Use Case 3: Write Review
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
        .page-container{
            /* background-color: #e8e8e8; */
            padding: 20px;
            text-align: center;
            font-family: Trebuchet MS, sans-serif;
        }
        .page-container p, .page-container select, .page-container input, .page-container submit, .page-container textarea{
            font-size: 20px;
            font-family: Trebuchet MS, sans-serif;
        }
        /* big grey box */
        .p1{
            padding: 5px;
            margin: 20px;
            background-color: #ccc;
            border-radius: 30px;
        }
        
        /* smaller grey boxes */
        .p2{
            padding: 1px;
            background-color: #e4e4e4;
            border-radius: 30px;				
        }
        
    </style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
        <div class="page-container">
            <h1>Write a Review for Your Trip!</h1>
            <form method="POST" action="">
                <div class="p1">
                <div class="p2">
                <p> 
                    Title: <input type="text" name="title" />
                </p>
                <p>
                    <label for="option">Star Rating: </label>
                        <select name="option" id="option">
                            <option value="rate1">1</option>
                            <option value="rate2">2</option>
                            <option value="rate3">3</option>
                            <option value="rate4">4</option>
                            <option value="rate5">5</option>				
                        </select> 
                </p>
                </div>
                
                <div class="p2">
                <p>
                    Write Your Review Here: <br />
                    <textarea id="review" name="review" rows="20" cols="100"> </textarea><br />
                </p>
                <p>
                    <input type = "submit" value = "Submit Review" class = "btn btn-primary"/>
                </p>
                </div>
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