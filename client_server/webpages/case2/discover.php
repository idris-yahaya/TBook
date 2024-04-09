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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>T-Book</title>
    <link rel="stylesheet" type="text/css" href="../../includes/styles.css">

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
        .boxGroup{
            display: flex;
            justify-content: left;
            position: relative;
            left: 5%;
        }

        span{
            background-color: #fffeeb;
        }

        /*style used for each accommodation/activities' information*/
        .box{
            width: 250px;
            height: 120px;
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
        
        /*style used for each accommodation/activities' information*/
        .box2{
            width: 250px;
            height: 120px;
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
        
        /*style used for each accommodation/activities' information*/
        .box3{
            width: 250px;
            height: 120px;
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
        
        /*style used for each accommodation/activities' information*/
        .box4{
            width: 250px;
            height: 120px;
            border: 1px solid #013229;
            border-radius: 10px;
            position:relative;
            padding-top: 10pt;
            padding-left: 5pt;
            text-align: left;
            color: #013229;
            background-color: #fffeeb; 
        }

        /*used to position the arrows on the page*/
        .arrow{
            width: 50px;
            height: 50px;
            position: relative;
            left: 105%;
            bottom: 60%;
        }

        /*style for description under accommodation / activity */
        .smallText{
            font-size: 8pt;
        }

        /*style used to highlight the option to compare options
        .compare{
            font-size: 10pt;
            text-decoration: underline;
        }

        /*used to position images for accommodation / activities within box element*/
        .image{
            float:right;
            width: auto;
            height: 70px;
            position: relative; 
            bottom: 30px;
            right: 15px;
        }

        /*style for container used to group the Car Rental information*/
        .container{
            width: 1075px;
            height: 215px;
            border: 1px solid #013229;
            border-radius: 10px;
            position:relative;
            padding-top: 10pt;
            padding-left: 5pt;
            text-align: left;
            color: #013229;
            background-color: #fffeeb;
            margin-left: 60px;
        }
    </style>
</head>
<body>
    <h1 class = "subTitle">Where To Next?</h1>
    <p class = "subHeading">Let us help you plan your next adventure! We'll guide you in discovering and booking your ideal accommodation.</p><br>

    <h2 class = "rowTitle">Discover Accommodations</h2>
    <!--boxGroup is used to group all the elements in the section together-->
    <div class = "boxGroup">
        <!--box, box2, box3, box4 is used to group each accommodation/activities' information-->
        <div class = "box">
            <p>
                <span style = "font-size: 13pt">Holiday Inn</span>
                <span class = "smallText">9.6/10 (624 reviews)</span>
                <br>
                <br>
                <span style = "font-size: 10pt">$850</span>
                <span class = "smallText">per night</span><br>
                <span class ="compare"><a href = "../case3/comparison.html">Compare</a></span>
                <img class = "image" src ="../../resources/images/../../resources/images/hotel.jpg" alt="Hotel Preview"/>
            </p>
        </div>

        <div class = "box2">
            <p>
                <span style = "font-size: 13pt">Hilton</span>
                <span class = "smallText">9.6/10 (624 reviews)</span>
                <br>
                <br>
                <span style = "font-size: 10pt">$850</span>
                <span class = "smallText">per night</span><br>
                <span class ="compare"><a href = "../case3/comparison.html">Compare</a></span>
                <img class = "image" src ="../../resources/images/hotel.jpg" alt="Hotel Preview" />
            </p>
        </div>

        <div class = "box3"> 
            <p>
                <span style = "font-size: 13pt">Hampton Inn</span>
                <span class = "smallText">9.6/10 (624 reviews)</span>
                <br>
                <br>
                <span style = "font-size: 10pt">$850</span>
                <span class = "smallText">per night</span><br>
                <span class ="compare"><a href = "../case3/comparison.html">Compare</a></span>
                <img class = "image" src ="../../resources/images/hotel.jpg" alt="Hotel Preview" />
            </p>
        </div>

        <div class = "box4">
            <p>
                <span style = "font-size: 13pt">Four Seasons</span>
                <span class = "smallText">9.6/10 (624 reviews)</span>
                <br>
                <br>
                <span style = "font-size: 10pt">$850</span>
                <span class = "smallText">per night</span><br>
                <span class ="compare"><a href = "../case3/comparison.html">Compare</a></span>
                <img class = "image" src ="../../resources/images/hotel.jpg" alt="Hotel Preview" />
            </p>
            <img class = "arrow" src ="../../resources/images/arrow.png" alt="Arrow" />
        </div>

    </div>
    <h2 class = "rowTitle">Recreational Activities</h2>
    <!--boxGroup is used to group all the elements in the section together-->
    <div class = "boxGroup">
        <!--box, box2, box3, box4 is used to group each accommodation's information-->
        <div class = "box">
            <p>
                <span style = "font-size: 13pt">Scuba Diving</span>
                <span class = "smallText">9.6/10 (624 reviews)</span>
                <br>
                <br>
                <span style = "font-size: 10pt">$150</span>
                <span class = "smallText">per adult</span><br>
                <span class ="compare"><a href = "../case3/comparison.html">Compare</a></span>
                <img class = "image" src ="../../resources/images/activity1.jpg" alt="Scuba Diving" />
            </p>
        </div>

        <div class = "box2">
            <p>
                <span style = "font-size: 13pt">Aquarium</span>
                <span class = "smallText">9.6/10 (624 reviews)</span>
                <br>
                <br>
                <span style = "font-size: 10pt">$150</span>
                <span class = "smallText">per adult</span><br>
                <span class ="compare"><a href = "../case3/comparison.html">Compare</a></span>
                <img class = "image" src ="../../resources/images/activity1.jpg" alt="Aquarium" />
            </p>
        </div>

        <div class = "box3">
            <p>
                <span style = "font-size: 13pt">Zoo</span>
                <span class = "smallText">9.6/10 (624 reviews)</span>
                <br>
                <br>
                <span style = "font-size: 10pt">$50</span>
                <span class = "smallText">per adult</span><br>
                <span class ="compare"><a href = "../case3/comparison.html">Compare</a></span>
                <img class = "image" src ="../../resources/images/activity2.jpg" alt="Zoo" />
            </p>
        </div>

        <div class = "box4">
            <p>
                <span style = "font-size: 13pt">Garden</span>
                <span class = "smallText">9.6/10 (624 reviews)</span>
                <br>
                <br>
                <span style = "font-size: 10pt">$30</span>
                <span class = "smallText">per adult</span><br>
                <span class ="compare"><a href = "../case3/comparison.html">Compare</a></span>
                <img class = "image" src ="../../resources/images/activity2.jpg" alt="Garden" />
            </p>
            <img class = "arrow" src ="../../resources/images/arrow.png" alt="Arrow" />
        </div>
    </div>

    <h2 class = "rowTitle">Car Rental</h2>
    <!--container is used to group the Car Rental information-->
    <div class = "container">
        <form name="carRental" action="index.html" method="POST">
        <p>
            Pick Up Location: <input type="text" name="pickUpLocation"/> <br /><br />
            Pick Up Date: <input type="text" name="pickUpDate"/> <br /><br />
            Drop Off Date: <input type="text" name="dropOffDate"/> <br /><br />
            Numbers of Passenger (optional): <input type="text" name="numOfPass"/> </p><br /><br />
            
            <input type="submit" value="Search"/>
            </form>
        
    </div>
</body>
</html>