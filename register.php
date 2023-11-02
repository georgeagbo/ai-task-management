<?php
session_start();

// Include necessary files
require_once 'src/User.php';
require_once 'src/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create a new user
    User::createUser($username, $password);

    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Register</h1>
    </header>
    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2023 Task Management</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>

