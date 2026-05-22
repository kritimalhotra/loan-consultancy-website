<?php
require_once('../includes/auth_check.php');
require_once('../config/db.php');

$result = $con->query("SELECT * FROM consultations ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Consultations - Loan Experts CRM</title>

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

    <div class="top-header">
        <h3>Consultation Calls</h3>
    </div>

    <div class="table-section">
        <h5>All Consultations</h5>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Call Date</th>
                    <th>Call Time</th>
                    <th>Created At</th>
                </tr>
            </thead>

            <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['phone']) ?></td>
                        <td><?= $row['call_date'] ?></td>
                        <td><?= $row['call_time'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">No consultations found</td>
                </tr>
            <?php endif; ?>
            </tbody>

        </table>
    </div>

</div>

</body>
</html>