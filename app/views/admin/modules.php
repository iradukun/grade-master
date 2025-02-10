<!-- GradeMaster/app/views/admin/modules.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Modules - <?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/dashboard.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo URLROOT; ?>/adminDashboard">Dashboard</a></li>
                <li><a href="<?php echo URLROOT; ?>/adminDashboard/modules">Manage Modules</a></li>
                <li><a href="<?php echo URLROOT; ?>/adminDashboard/registerUser">Register User</a></li>
                <li><a href="<?php echo URLROOT; ?>/login/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="dashboard">
        <h1>Manage Modules</h1>
        <a href="<?php echo URLROOT; ?>/adminDashboard/addModule" class="btn btn-primary">Add New Module</a>
        <section class="dashboard-section">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Module Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['modules'] as $module): ?>
                        <tr>
                            <td><?php echo $module['module_name']; ?></td>
                            <td><?php echo $module['description']; ?></td>
                            <td>
                                <a href="<?php echo URLROOT; ?>/adminDashboard/editModule/<?php echo $module['id']; ?>" class="btn btn-secondary">Edit</a>
                                <a href="<?php echo URLROOT; ?>/adminDashboard/deleteModule/<?php echo $module['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this module?')">Delete</a>
                            </td>
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