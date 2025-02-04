<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'teacher') {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard - GradeMaster</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="navbar">
            <h2>Teacher Dashboard</h2>
            <a href="../../controllers/logout.php" class="logout-btn">Logout</a>
        </div>
        <h2>Welcome, Teacher!</h2>
        <p>View and manage students' grades and assignments.</p>
        <button onclick="alert('Feature Coming Soon!')">Manage Grades</button>
    </div>
</body>
</html>
