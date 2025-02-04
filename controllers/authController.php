<?php
session_start();
require_once '../config/config.php';
require_once '../models/User.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $userType = $_POST['user_type'];

    // Validate user
    $user = new User();
    $authenticatedUser = $user->authenticate($username, $password, $userType);

    if ($authenticatedUser) {
        $_SESSION['user_id'] = $authenticatedUser['id'];
        $_SESSION['username'] = $authenticatedUser['username'];
        $_SESSION['user_type'] = $userType;

        // Redirect based on user role
        switch ($userType) {
            case 'admin':
                header("Location: ../views/admin/dashboard.php");
                break;
            case 'teacher':
                header("Location: ../views/teacher/dashboard.php");
                break;
            case 'student':
                header("Location: ../views/student/dashboard.php");
                break;
        }
        exit();
    } else {
        // Redirect back to login with error
        header("Location: ../views/login.php?error=Invalid credentials");
        exit();
    }
} else {
    // If accessed without POST request, redirect to login page
    header("Location: ../views/login.php");
    exit();
}
?>
