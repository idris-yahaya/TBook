<?php
// Session Start
if (!isset($_SESSION)) { 
    session_start(); 
} 

// Absolute Website URL (Swap Local-V1 vs Local-V2 GL Server)
define('BASE_URL', 'http://localhost:3000/client_server');
// define('BASE_URL', 'http://localhost:3000/Users/Idris/Desktop/CompSci/Tbook-workspace/TBook/client_server'); 
// define('BASE_URL', 'https://swe.umbc.edu/~dp08859/TBook/client_server');

// Determine Whether User is Logged in
$is_logged_in = isset($_SESSION['user_id']);

// Display Appropriate Login Status
function displayLogin() {
    global $is_logged_in;
    if ($is_logged_in) {
        echo "<a href='" . BASE_URL . "/webpages/case1/logout.php' class='navbar-link'>Logout</a>";
    } else {
        echo "<a href='" . BASE_URL . "/webpages/case1/login.php' class='navbar-link'>Login</a>";
    }
}

// Display Appropriate Account Status
function displayAccount() {
    global $is_logged_in;
    if ($is_logged_in) {
        echo "<a href='" . BASE_URL . "/webpages/case1/account.php' class='btn btn-primary navbar-btn'>Account</a>";
    } else {
        echo "<a href='" . BASE_URL . "/webpages/case1/login.php' class='btn btn-primary navbar-btn'>Register Now</a>";
    }
}
?>

<!-- ---------- Global Includes ---------- -->

<!-- Favicon Logo -->
<link rel="icon" href="<?php echo BASE_URL ?>/resources/icons/aviation_logo-22.svg" type="image/x-icon">

<!-- Global CSS -->
<link rel="stylesheet" href="<?php echo BASE_URL ?>/includes/styles.css">

<!-- ---------- Header CSS ---------- -->
<style>
    header {
        background: var(--black-color);
        overflow: hidden;
        padding: 1.5rem 0;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 6;
        width: 100%;
        height: 75px;
        transition: all 0.3s ease-in-out;
    }

    header.sticky {
        background: var(--black-color);
    }

    header.active {
        height: 425px;
        transition-duration: 0.35s;
    }

    header .nav-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }
    
    /* Header - Page Content Separation */
    main {
        margin-top: 72px;
    }

    .nav-container {
        margin-inline: auto;
        padding-left: 6%;
        padding-right: 7%;
    }

    .navbar {
        width: 100%;
        padding: 20px 10px;
        opacity: 0;
        visibility: hidden;
        transition: 0.15s ease;
    }

    .nav-toggle-btn.active .open,
    .nav-toggle-btn .close { display: none; }

    .nav-toggle-btn .open,
    .nav-toggle-btn.active .close { display: block; }

    .nav-toggle-btn ion-icon {
        color: white;
        font-size: 35px;
        --ionicon-stroke-width: 40px;
    }

    header.active .navbar {
        opacity: 1;
        visibility: visible;
    }

    .logo {
        color: white;
        font-size: 3.2rem;
        font-weight: 600;
        margin-right: 135px;
    }

    .navbar-list { margin-bottom: 15px; }

    .navbar-link {
        text-decoration: none;
        color: #fff;
        font-size: 1.8rem;
        font-weight: 500;
        padding-block: 10px 0;
        position: relative;
        width: max-content;
        transition: color 0.3s;
    }

    .navbar-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -5px;
        left: 0;
        background-color: #fff;
        transition: width 0.3s ease-in-out;
    }

    .navbar-link.current-page::after {
        width: 100%;
    }

    .navbar-link:hover {
        color: lightgrey;
    }

    .navbar-link:hover::after {
        width: 100%;
    }

    .navbar-auth {
        display: flex;
        gap: 20px;
    }

    /* Responsiveness for Smaller Screen Sizes */
    @media (max-width: 999px) {
        header {
            background-color: black;
        }
        
        .navbar-list {
            display: block;
            margin: 0 auto;
            text-align: center;
        }
        
        .navbar-list a {
            margin: 0 auto;
        }
        
        .navbar-auth {
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            text-align: center;
        }
        
        .navbar-auth a {
            margin: 10px auto;
        }
    }

    /* Responsiveness for Larger Screen Sizes */
    @media (min-width: 1000px) {
        .nav-container { max-width: 1650px; }
        .nav-toggle-btn { display: none; }

        header,
        header.active { height: unset; }

        .logo {
            font-size: 3.5rem;
        }

        .navbar {
            all: unset;
            display: flex;
            align-items: center;
            flex-grow: 1;
        }

        .navbar-list {
            margin-bottom: 0;
            margin-inline: auto;
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .navbar-link {
            font-weight: 700;
            margin-bottom: 8px;
        }
    }    
</style>

<!-- ---------- Header Navigation Section ---------- -->
<header data-header>
    <div class="nav-container">
            <!-- Navigation Logo -->
            <div class="nav-logo">
                <a href="<?php echo BASE_URL ?>/webpages/index.php"><h1 class="logo">TBook</h1></a>
            </div>

            <!-- Navigation Menu Buttons -->
            <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
                <ion-icon name="menu-outline" class="open"></ion-icon>
                <ion-icon name="close-outline" class="close"></ion-icon>
            </button>

            <!-- Navigation Links -->
            <nav class="navbar">
                <ul class="navbar-list">
                    <li><a href="<?php echo BASE_URL ?>/webpages/case2/discover.php" class="navbar-link">Discover</a></li>
                    <li><a href="#" class="navbar-link">Trips</a></li>
                    <li><a href="<?php echo BASE_URL ?>/webpages/case3/insider.php" class="navbar-link">Insider</a></li>
                </ul>
                <div class="navbar-auth">
                    <?php displayLogin(); ?>
                    <?php displayAccount(); ?>
                </div>
            </nav>
    </div>
</header>