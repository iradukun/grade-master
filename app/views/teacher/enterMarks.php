<!-- GradeMaster/app/views/teacher/enterMarks.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Marks - <?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/dashboard.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo URLROOT; ?>/teacherDashboard">Dashboard</a></li>
                <li><a href="<?php echo URLROOT; ?>/login/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="dashboard">
        <h1>Enter Marks for <?php echo $data['student']['name']; ?></h1>
        <form action="<?php echo URLROOT; ?>/teacherDashboard/enterMarks/<?php echo $data['student']['id']; ?>" method="post">
            <div>
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div>
                <label for="marks">Marks:</label>
                <input type="number" id="marks" name="marks" min="0" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Marks</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 <?php echo SITENAME; ?>. All rights reserved.</p>
    </footer>
</body>
</html>