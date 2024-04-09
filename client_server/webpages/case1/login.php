<?php
// Session Start
if (!isset($_SESSION)) { 
    session_start(); 
}

// Check if user is already logged in, redirect to dashboard if true
if (isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
} 

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate login credentials (you need to implement your own validation logic)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example validation (replace with your actual validation logic)
    if ($username === "demo" && $password === "demo123") {
        // Dummy user ID and username for demonstration
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
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
    <link rel="stylesheet" href="">
    <style></style>
</head>
<body>
    <!-- Main Page Content-->
    <main>
        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>

        <?php
            if (isset($error)) {
                echo "<p>$error</p>";
            }
        ?>
    </main>

    <!-- Page Specific JS and Include Links -->
    <script src=""></script>
    <script></script>

    <!-- Global JS/Footer Link -->
    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
</body>
</html>