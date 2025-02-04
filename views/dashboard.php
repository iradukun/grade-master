<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];

if ($user['role'] === 'admin') {
    header("Location: admin/dashboard.php");
} elseif ($user['role'] === 'teacher') {
    header("Location: teacher/dashboard.php");
} elseif ($user['role'] === 'student') {
    header("Location: student/dashboard.php");
} else {
    echo "Invalid role!";
    exit();
}
?>
