<?php
// GradeMaster/index.php

// Define the application root directory
define('APPROOT', dirname(__FILE__) . '/app');
define('URLROOT', 'http://localhost/GradeMaster');
define('SITENAME', 'GradeMaster');

// Load the core application file
require_once APPROOT . '/core/App.php';

// Initialize the application
$app = new App();
?>