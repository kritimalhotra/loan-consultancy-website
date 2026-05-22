<?php
require_once('../includes/auth_check.php');
require_once('../config/db.php');

// FETCH RECRUITMENT DATA
$recruitments = [];
$res = $con->query("SELECT * FROM recruitment ORDER BY id DESC");

if ($res) {
    while ($row = $res->fetch_assoc()) {
        $recruitments[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recruitment - Loan Experts CRM</title>

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
        <h3>Recruitment</h3>
    </div>

    <div class="container mt-4">

        <div class="table-section">
            <h5>All Applicants</h5>

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Position</th>
                        <th>Resume</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (!empty($recruitments)): ?>
                    <?php foreach ($recruitments as $rec): ?>
                        <tr>
                            <td><?= $rec['id'] ?></td>
                            <td><?= htmlspecialchars($rec['full_name'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($rec['email'] ?? '') ?></td>
                            <td><?= htmlspecialchars($rec['phone'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($rec['position'] ?? 'N/A') ?></td>

                            <td>
                                <?php if (!empty($rec['resume'])): ?>
                                    <a href="/LoanExpertsWebsite/Database/<?= htmlspecialchars($rec['resume']) ?>" target="_blank" class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </td>

                            <td><?= $rec['created_at'] ?? 'N/A' ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No applicants found</td>
                    </tr>
                <?php endif; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

</body>
</html>