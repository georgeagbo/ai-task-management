<?php
session_start();

// Include necessary files
require_once 'src/User.php';
require_once 'src/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate user
    $user = User::authenticateUser($username, $password);

    if ($user) {
        // Set session variables
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['username'] = $user->getUsername();

        // Redirect to the dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <?php
            // Display error message if authentication failed
            if (isset($error_message)) {
                echo '<p class="error">' . $error_message . '</p>';
            }
            ?>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2023 Task Management</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
