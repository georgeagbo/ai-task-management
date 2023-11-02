<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include necessary files
require_once 'src/Task.php';
require_once 'src/Database.php';

// Retrieve tasks for the logged-in user
$userId = $_SESSION['user_id'];
$tasks = Task::getTasksByUserId($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="tasks">
            <h2>Your Tasks</h2>
            <ul>
                <?php foreach ($tasks as $task): ?>
                    <li><?php echo $task['title']; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Task Management</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
