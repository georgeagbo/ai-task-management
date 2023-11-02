<?php
session_start();

// Include necessary files
require_once 'src/User.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Retrieve user details
$userId = $_SESSION['user_id'];
$user = User::getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management - Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Your Profile</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="profile-details">
            <h2>Details</h2>
            <p><strong>User ID:</strong> <?php echo $user->getId(); ?></p>
            <p><strong>Username:</strong> <?php echo $user->getUsername(); ?></p>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Task Management</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
