<?php 
    // Session Start
    if (!isset($_SESSION)) { 
        session_start(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBook</title>
    <!-- Global Website CSS/Header Link -->
    <?php include_once __DIR__ . "/../includes/header.php"; ?>

    <!-- Page Specific CSS and Include Links -->
    <link rel="stylesheet" href="">
    <style>
      /* Change Header to transparent for this page only */
      @media (min-width: 1000px) {
        header {
          background: transparent;
        }
      }
      
      /* Change margin to 0 for this page only (header nav) */
      main {
          margin-top: 0px;
      }

      .hero-section {
        background-position: center;
        background-size: cover;
        position: relative;
        top: 0;
        left: 0;
        z-index: 0;
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), url('../resources/images/hero.png');
      }

      .hero-content {
        position: absolute;
        z-index: 5;
        left: 50%;
        top: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
      }

      .hero-content h2 {
        font-size: 1.5rem;
        letter-spacing: 8px;
        color: var(--white-color);
        text-transform: uppercase;
        animation: animate 4s forwards;
      }

      .hero-content h1 {
        font-size: 6rem;
        letter-spacing: 8px;
        color: var(--white-color);
        animation: animate 4s forwards;
        transition: all 0.5s ease-in-out;
      }

      #search {
        transform: translateY(-250%);
      }

      .search-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 2rem;
        width: 80%;
        overflow: hidden;
        margin-top: 50px;
      }

      .search-section {
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 15px;
        padding: 2rem;
        width: 100%;
      }

      .search-form {
        display: flex;
        align-items: center;
        border-radius: 15px;
      }

      .search-inputs {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        padding: 6px 10px 6px 30px;
        border-radius: 15px;
        margin-right: 15px;
        width: 100%;
      }

      .form-content {
        width: 100%;
        
      }

      .form-content input, .form-content select{
        display: block;
        border: 0;
        outline: none;
        background: transparent;
        font-size: 1.3rem;
      }

      .search-form button {
        height: 45px;
      }

      .search-form label{
        font-weight: 600;
      }

      .location-input{
        flex: 1;
      }

      .form-content input[type="date"], select{
        cursor: pointer;
      }

      .featured {
        margin-top: -138px;
        min-height: 1px;
        background-color: black;
      }

      /* Responsiveness for Smaller Screen Sizes */
      @media (max-width: 999px) {
        .hero-section {
          height: 70vh;
        }

        #search {
          transform: translateY(0%);
          margin-top: -50px;
          background: #212529;
        }

        .search-form {
          flex-direction: column;
        }

        .search-section {
          margin: 30px 0;
          padding-top: 15px;
          padding-bottom: 0;
        }
        
        .search-inputs {
          flex-direction: column;
          padding: 30px;
          border-radius: 15px;
          margin: 0px;
        }

        .search-form {
            padding: 20px 10px 30px;
            border-radius: 5px;
        }

        .search-form button {
          width: 150px;
          margin-top: 20px;
        }

        .search-form input, .search-form select {
            border-bottom: 1px solid #ddd;
            width: 100%;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .featured {
          margin-top: 0;
        }
      }
    </style>
</head>
<body>
    <!-- Main Page Content -->
    <main>
      <!-- Hero Section -->
      <div class="hero-section">
        <div class="hero-content">
          <h2 class="subheading">Mountains | Museums | Beaches</h2>
          <h1 class="hero-title">Life is a Journey</h1>
          <h1 class="hero-title">Not a Destination</h1>
        </div>
      </div>

      <!-- Hero Search Bar -->
      <section id="search">
        <div class="search-container">
          <div class="search-section">
            <form action="" class="search-form" method="post">
              <div class="search-inputs">
                <!-- Location Input -->
                <div class="form-content location-input">
                  <label for="location">Location</label>
                  <input type="text" id="location" name="location" placeholder="Where are you going?">
                </div>
    
                <!-- Check-in Date Input -->
                <div class="form-content">
                  <label for="check-in">Check-in</label>
                  <input type="date" id="check-in" name="check-in">
                </div>
    
                <!-- Check-out Date Input -->
                <div class="form-content">
                  <label for="check-out">Check-out</label>
                  <input type="date" id="check-out" name="check-out">
                </div>
    
                <!-- Number of Guests Input -->
                <div class="form-content">
                  <label for="guests">Guests</label>
                  <select id="guests" name="guests">
                    <option value="1">1 Adult</option>
                    <option value="2">2 Adults</option>
                    <option value="3">3 Adults</option>
                    <option value="4">4 Adults</option>
                    <option value="5">5 Adults</option>
                  </select>    
                </div>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </section>
      
      <!-- Featured Destinations -->
      <section class="featured"><p> </p></section>

      <!-- Explore Your Interests -->
      <section></section>

      <!-- Insider Travel Tips -->
      <section></section>
    </main>

    <!-- Page Specific JS and Include Links -->
    <script src=""></script>
    <script></script>

    <!-- Global Website JS/Footer Link -->
    <?php include_once __DIR__ . "/../includes/footer.php"; ?>
</body>
</html>