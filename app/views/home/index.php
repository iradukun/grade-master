<!-- GradeMaster/app/views/home/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo URLROOT; ?>">Home</a></li>
                <li><a href="<?php echo URLROOT; ?>/login">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Welcome to <?php echo SITENAME; ?></h1>
        <p>A comprehensive Student Marks Management System</p>
    </main>
    <footer>
        <p>&copy; 2023 <?php echo SITENAME; ?>. All rights reserved.</p>
    </footer>
</body>
</html>