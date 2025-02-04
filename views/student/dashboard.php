<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'student') {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - GradeMaster</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="navbar">
            <h2>Student Dashboard</h2>
            <a href="../../controllers/logout.php" class="logout-btn">Logout</a>
        </div>
        <h2>Welcome, Student!</h2>
        <p>View your grades and assignments.</p>
        <button onclick="alert('Feature Coming Soon!')">View Assignments</button>
    </div>
</body>
</html>
