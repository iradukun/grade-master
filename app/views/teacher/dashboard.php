<!-- GradeMaster/app/views/teacher/dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard - <?php echo SITENAME; ?></title>
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
                <li><a href="<?php echo URLROOT; ?>/teacherDashboard">Dashboard</a></li>
                <li><a href="<?php echo URLROOT; ?>/login/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="dashboard">
        <h1>Teacher Dashboard</h1>
        <section class="dashboard-section">
            <h2>Students</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['students'] as $student): ?>
                        <tr>
                            <td><?php echo $student['name']; ?></td>
                            <td><?php echo $student['student_id']; ?></td>
                            <td>
                                <a href="<?php echo URLROOT; ?>/teacherDashboard/enterMarks/<?php echo $student['id']; ?>" class="btn btn-primary">Enter Marks</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 <?php echo SITENAME; ?>. All rights reserved.</p>
    </footer>
</body>
</html>