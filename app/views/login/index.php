<!-- GradeMaster/app/views/login/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - <?php echo SITENAME; ?></title>
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
        <h1>Login to <?php echo SITENAME; ?></h1>
        <?php if (isset($data['error'])) : ?>
            <p class="error"><?php echo $data['error']; ?></p>
        <?php endif; ?>
        <form action="<?php echo URLROOT; ?>/login" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="user_type">User Type:</label>
                <select id="user_type" name="user_type" required>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 <?php echo SITENAME; ?>. All rights reserved.</p>
    </footer>
</body>
</html>