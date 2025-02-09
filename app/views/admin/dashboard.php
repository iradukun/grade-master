<!-- GradeMaster/app/views/admin/dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - <?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/dashboard.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo URLROOT; ?>/adminDashboard">Dashboard</a></li>
                <li><a href="<?php echo URLROOT; ?>/adminDashboard/addModule">Add Module</a></li>
                <li><a href="<?php echo URLROOT; ?>/adminDashboard/registerUser">Register User</a></li>
                <li><a href="<?php echo URLROOT; ?>/login/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="dashboard">
        <h1>Admin Dashboard</h1>
        <div class="dashboard-grid">
            <section class="dashboard-section">
                <h2>Modules</h2>
                <ul class="list">
                    <?php foreach ($data['modules'] as $module): ?>
                        <li><?php echo $module['module_name']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section class="dashboard-section">
                <h2>Students</h2>
                <ul class="list">
                    <?php foreach ($data['students'] as $student): ?>
                        <li><?php echo $student['name']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section class="dashboard-section">
                <h2>Teachers</h2>
                <ul class="list">
                    <?php foreach ($data['teachers'] as $teacher): ?>
                        <li><?php echo $teacher['name']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 <?php echo SITENAME; ?>. All rights reserved.</p>
    </footer>
</body>
</html>