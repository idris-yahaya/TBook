<?php
// Session Start
if (!isset($_SESSION)){ 
    session_start(); 
}

// Redirect to Homepage if User is Logged In
if (isset($_SESSION['user_id'])){
    header("Location: ../index.php");
    exit;
} 

// MySQL Database Connection
$mysql_db = mysqli_connect("studentdb-maria.gl.umbc.edu","juliet4","juliet4","juliet4");

// Validate Connection
mysqli_connect_errno() ? exit("Error - could not connect to MySQL") : ''; // print("Successful Connection")

// Initialize Error Message
$errorMessage = "";

// Handle User Login
function userLogin($mysql_db, $email, $password){

    // Utilize Global Error Message
    global $errorMessage;

    // Missing Values Error
    if (empty($email) || empty($password)) {
        $errorMessage = "Please fill in all the fields.";
        return;
    }

    // Generate SQL Query
    $query = "SELECT * FROM customers WHERE cust_email = '$email' AND cust_password = '$password'";
    $result = mysqli_query($mysql_db, $query);

    // Validate User Credentials and Redirect to Homepage
    if (mysqli_num_rows($result) > 0){
        $_SESSION['user_id'] = $email;
        header("Location: ../index.php");
        exit();
    } else {
        $errorMessage = "Invalid email or password.";
        return;
    }
}

// Handle User Registration
function userRegistration($mysql_db, $firstName, $lastName, $email, $password){
    // Utilize Global Error Message
    global $errorMessage;

    // Missing Values Error
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        $errorMessage = "Please fill in all the fields.";
        return;
    }

    // Validate User Email
    if (!preg_match("/@./", $email)){
        $errorMessage = "Invalid email format. Missing '.' or '@'. Please re-enter your responses.";
        return;
    }

    // Validate User Password
    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/", $password)){
        $errorMessage = "Password should be at least 8 characters in length and should include at least one letter, one number, and one special character. Please re-enter your responses.";
        return;
    }

    // Generate SQL Query
    $query = "SELECT * FROM customers WHERE cust_email = '$email'";
    $result = mysqli_query($mysql_db, $query);

    // Validate Email Uniqueness
    if (mysqli_num_rows($result) > 0){
        $errorMessage = "Username or email already exists.";
        return;
    }

    // Insert New User Credentials
    $query = "INSERT INTO customers (cust_first_name, cust_last_name, cust_email, cust_password, cust_username) VALUES ('$firstName', '$lastName', '$email', '$password', 'temp')";
    $result = mysqli_query($mysql_db, $query);

    // Redirect User to Homepage
    if ($result){
        $_SESSION['user_id'] = $email;
        header("Location: ../index.php");
        exit();
    } else {
        $errorMessage = "Registration failed. Please try again.";
    }
}

// Handle Form Submissions
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve and Sanitize Input Data (Prevent HTML & SQL Injections)
    $firstName = isset($_POST["firstName"]) ? mysqli_real_escape_string($mysql_db, htmlspecialchars($_POST['firstName'])) : '';
    $lastName = isset($_POST["lastName"]) ? mysqli_real_escape_string($mysql_db, htmlspecialchars($_POST['lastName'])) : '';
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($mysql_db, htmlspecialchars($_POST['email'])) : '';
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($mysql_db, htmlspecialchars($_POST['password'])) : '';

    // Determine User Login or Registration
    if (isset($_POST['action'])){
        if ($_POST['action'] == 'Login'){
            userLogin($mysql_db, $email, $password);
        } elseif ($_POST['action'] == 'Register'){
            userRegistration($mysql_db, $firstName, $lastName, $email, $password);
        }
    }
}

// Close Database Connection
mysqli_close($mysql_db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBook</title>
    <!-- Global CSS/Header Link -->
    <?php include_once __DIR__ . "/../../includes/header.php"; ?>
    
    <!-- Page Specific CSS and Include Links -->
    <link rel="stylesheet" href="login_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style></style>
</head>
<body>
    <!-- Main Page Content-->
    <main>
        <div class="page-container">
            <div class="wrapper">
                <!-- Form box -->
                <div class="form-box">
                    <!-- Login form -->
                    <div class="login-container" id="login">
                        <div class="top">
                            <div class="auth-header">Login</div>
                        </div>
                        <form id="loginForm" action="" method="POST">
                            <div class="input-box">
                                <input type="text" name="email" class="input-field" placeholder="Email" required>
                                <i class="bx bx-envelope"></i>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password" class="input-field" placeholder="Password" required>
                                <i class="bx bx-lock-alt"></i>
                            </div>
                            <div class="input-box">
                                <input type="submit" class="submit" name="action" value="Login">
                            </div>
                        </form>
                        <div class="top">
                            <span>Don't have an account? <a href="#" onclick="showRegisterForm()">Sign Up</a></span>
                        </div>
                    </div>

                    <!-- Registration form -->
                    <div class="register-container" id="register">
                        <div class="top">
                        <div class="auth-header">Sign Up</div>
                        </div>
                        <form id="registerForm" action="" method="POST">
                            <div class="two-forms">
                                <div class="input-box">
                                    <input type="text" name="firstName" class="input-field" placeholder="First Name" required>
                                    <i class="bx bx-user"></i>
                                </div>
                                <div class="input-box">
                                    <input type="text" name="lastName" class="input-field" placeholder="Last Name" required>
                                    <i class="bx bx-user"></i>
                                </div>
                            </div>
                            <div class="input-box">
                                <input type="text" name="email" class="input-field" placeholder="Email" required>
                                <i class="bx bx-envelope"></i>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password" class="input-field" placeholder="Password" required>
                                <i class="bx bx-lock-alt"></i>
                            </div>
                            <div class="input-box">
                                <input type="submit" class="submit" name="action" value="Register">
                            </div>
                        </form>
                        <div class="top">
                            <span>Have an account? <a href="./login.php#login" onclick="showLoginForm()">Login</a></span>
                        </div>
                    </div>
                </div>

                <!-- Display Error Message -->
                <div class="error-message">
                    <?php
                    if (!empty($errorMessage)) {
                        echo '<div class="error">' . htmlspecialchars($errorMessage) . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Page Specific JS and Include Links -->
    <script src=""></script>
    <script>
        // Toggle Between Login and Registration Forms
        function showLoginForm() {
            document.getElementById('login').style.left = '4px';
            document.getElementById('register').style.right = '-520px';
        }

        function showRegisterForm() {
            document.getElementById('login').style.left = '-520px';
            document.getElementById('register').style.right = '4px';
        }

        // Handle URL Hash
        window.addEventListener('load', function() {
            var hash = window.location.hash;
            if (hash === '#register') {
                showRegisterForm();
            } else {
                showLoginForm();
            }
        });
    </script>

    <!-- Global JS/Footer Link -->
    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
</body>
</html>