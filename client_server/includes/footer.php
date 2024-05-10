<!-- ---------- Footer CSS ---------- -->
<style>
    footer {
        background: var(--black-color);
        padding: 1.5rem 0;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 6%;
        min-height: 30px;
    }

    .footer-link {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: lightgrey;
    }

    .footer-nav-list {
        list-style: none;
        display: flex;
        gap: 30px;
    }

    .footer-login-register,
    .footer-social {
        display: flex;
        gap: 20px;
    }

    .footer-social a {
        font-size: 1.5rem;
        color: white;
    }

    .footer-social a:hover {
        color: lightgrey;
    }

    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .footer-nav-list,
        .footer-login-register,
        .footer-social {
            justify-content: center;
        }

        .footer-nav-list {
            gap: 15px;
        }

        .footer-login-register,
        .footer-social {
            gap: 10px;
        }
    }
</style>

<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <!-- Home Link -->
        <a href="<?php echo BASE_URL ?>/webpages/index.php" class="footer-link">TBook</a>

        <!-- Navigation Links -->
        <nav class="footer-nav">
            <ul class="footer-nav-list">
                <li><a href="<?php echo BASE_URL ?>/webpages/case2/discover.php" class="footer-link">Discover</a></li>
                <li><a href="<?php echo BASE_URL ?>/webpages/case4/itinerary.php" class="footer-link">Trips</a></li>
                <li><a href="<?php echo BASE_URL ?>/webpages/case3/insider.php" class="footer-link">Insider</a></li>
            </ul>
        </nav>

        <!-- Login and Register Links -->
        <div class="footer-login-register">
            <a href="<?php echo BASE_URL ?>/webpages/case1/login.php" class="footer-link">Login</a>
            <a href="<?php echo BASE_URL ?>/webpages/case1/login.php#register" class="footer-link">Register</a>
        </div>

        <!-- Social Media Links -->
        <div class="footer-social">
            <a href="https://twitter.com" class="footer-link"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://facebook.com" class="footer-link"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://instagram.com" class="footer-link"><ion-icon name="logo-instagram"></ion-icon></a>
        </div>
    </div>
</footer>

<!-- ---------- Global Includes ---------- -->

<!-- Global JS -->
<script src="<?php echo BASE_URL ?>/includes/script.js"></script>

<!-- Ionicon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>