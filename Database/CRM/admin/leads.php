<?php
require_once('../includes/auth_check.php');
require_once('../config/db.php');

// FETCH LEADS
$leads = [];
$res = $con->query("SELECT * FROM leads ORDER BY id DESC");

if ($res) {
    while ($row = $res->fetch_assoc()) {
        $leads[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Leads - Loan Experts CRM</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #f8f9fa;
    font-family: 'Segoe UI', sans-serif;
}

/* MAIN CONTENT */
.main-content {
    margin-left: 260px;
    padding: 20px;
}

/* HEADER */
.top-header {
    background: white;
    padding: 1.5rem;
    display: flex;
    justify-content: space-between;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

/* TABLE SECTION */
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
        <h3>Leads</h3>
    </div>

    <div class="container mt-4">

        <div class="table-section">
            <h5>All Leads</h5>

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (!empty($leads)): ?>
                    <?php foreach ($leads as $lead): ?>
                        <tr>
                            <td><?= $lead['id'] ?></td>
                            <td><?= htmlspecialchars($lead['first_name'] . ' ' . $lead['last_name']) ?></td>
                            <td><?= htmlspecialchars($lead['email']) ?></td>
                            <td><?= htmlspecialchars($lead['phone'] ?? 'N/A') ?></td>
                            <td><?= $lead['created_at'] ?? 'N/A' ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No leads found</td>
                    </tr>
                <?php endif; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

</body>
</html>