<?php
require_once('../includes/auth_check.php');
require_once('../config/db.php');

// FETCH APPOINTMENTS
$appointments = [];
$res = $con->query("SELECT * FROM appointments ORDER BY id DESC");

if ($res) {
    while ($row = $res->fetch_assoc()) {
        $appointments[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Appointments - Loan Experts CRM</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #f8f9fa;
    font-family: 'Segoe UI', sans-serif;
}

.main-content {
    margin-left: 260px;
    padding: 20px;
}

.top-header {
    background: white;
    padding: 1.5rem;
    display: flex;
    justify-content: space-between;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.table-section {
    background: white;
    padding: 20px;
    border-radius: 12px;
    margin-top: 20px;
}
</style>
</head>

<body>

<?php include '../includes/sidebar.php'; ?>

<div class="main-content">

    <!-- HEADER -->
    <div class="top-header">
        <h3>Appointments</h3>
    </div>

    <div class="container mt-4">

        <div class="table-section">
            <h5>All Appointments</h5>

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (!empty($appointments)): ?>
                    <?php foreach ($appointments as $app): ?>
                        <tr>
                            <td><?= $app['id'] ?></td>
                            <td><?= htmlspecialchars(($app['first_name'] ?? '') . ' ' . ($app['last_name'] ?? '')) ?></td>
                            <td><?= htmlspecialchars($app['email'] ?? '') ?></td>
                            <td><?= htmlspecialchars($app['phone'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($app['appointment_date'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($app['appointment_time'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($app['message'] ?? '') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No appointments found</td>
                    </tr>
                <?php endif; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

</body>
</html>