<!-- GradeMaster/app/views/student/dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - <?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/dashboard.css">
</head>
<body>
    <header>
    <?php
    require_once APPROOT . '/helpers/navigation_helper.php';
    echo generateNavigation($_SESSION['user_type'], $_SESSION['user_modules']);
    ?>
        <nav>
            <ul>
                <li><a href="<?php echo URLROOT; ?>/studentDashboard">Dashboard</a></li>
                <li><a href="<?php echo URLROOT; ?>/login/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="dashboard">
        <h1>Student Dashboard</h1>
        <section class="dashboard-section">
            <h2>Your Marks</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Marks</th>
                        <th>Entry Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['marks'] as $mark): ?>
                        <tr>
                            <td><?php echo $mark['subject']; ?></td>
                            <td><?php echo $mark['marks']; ?></td>
                            <td><?php echo $mark['entry_date']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 <?php echo SITENAME; ?>. All rights reserved.</p>
    </footer>
</body>
</html>
