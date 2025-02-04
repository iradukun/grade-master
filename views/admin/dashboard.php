<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - GradeMaster</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="navbar">
            <h2>Admin Dashboard</h2>
            <a href="../../controllers/logout.php" class="logout-btn">Logout</a>
        </div>
        <h2>Welcome, Admin!</h2>
        <p>Manage users, courses, and system settings here.</p>
        <button onclick="alert('Feature Coming Soon!')">Manage Users</button>
    </div>
</body>
</html>
