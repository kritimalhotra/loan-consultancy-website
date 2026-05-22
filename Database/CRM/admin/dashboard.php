<?php
require_once(__DIR__ . '/../includes/auth_check.php');
require_once(__DIR__ . '/../config/db.php');

/* TOTAL LEADS */
$totalLeads = 0;
$res = $con->query("SELECT COUNT(*) as total FROM leads");
if ($res) {
    $totalLeads = $res->fetch_assoc()['total'];
}

/*TOTAL ENQUIRIES */
$totalEnquiries = 0;
$res = $con->query("SELECT COUNT(*) as total FROM enquiry");
if ($res) {
    $totalEnquiries = $res->fetch_assoc()['total'];
}

/*TOTAL APPOINTMENTS */
$totalAppointments = 0;
$res = $con->query("SELECT COUNT(*) as total FROM appointments");
if ($res) {
    $totalAppointments = $res->fetch_assoc()['total'];
}

/*TOTAL RECRUITMENTS */
$totalRecruitment = 0;
$res = $con->query("SELECT COUNT(*) as total FROM recruitment");
if ($res) {
    $totalRecruitment = $res->fetch_assoc()['total'];
}

$userId = $_SESSION['user_id'];

function getLastSeen($con, $userId, $table) {
    $stmt = $con->prepare("SELECT last_seen_id FROM user_activity WHERE user_id=? AND table_name=?");
    $stmt->bind_param("is", $userId, $table);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($row = $res->fetch_assoc()) {
        return $row['last_seen_id'];
    }
    return 0;
}
/*TOTAL CONSULTATIONS */
$consultationsCount = 0;
$res = $con->query("SELECT COUNT(*) as total FROM consultations");
if ($res) {
    $consultationsCount = $res->fetch_assoc()['total'];
}
/* GET LAST SEEN */
$leadLast = getLastSeen($con, $userId, 'leads');
$enqLast  = getLastSeen($con, $userId, 'enquiry');
$appLast  = getLastSeen($con, $userId, 'appointments');
$consLast  = getLastSeen($con, $userId, 'consultations');
$recLast  = getLastSeen($con, $userId, 'recruitment');

/* FETCH NEW DATA */
$recentData = [];

/* LEADS */
$res = $con->query("SELECT id, CONCAT(first_name, ' ', last_name) as name, email, 'Lead' as type FROM leads WHERE id > $leadLast");
while($row = $res->fetch_assoc()) {
    $recentData[] = $row;
}

/* ENQUIRY */
$res = $con->query("SELECT id, full_name as name, email, 'Enquiry' as type FROM enquiry WHERE id > $enqLast");
while($row = $res->fetch_assoc()) {
    $recentData[] = $row;
}

/* APPOINTMENTS */
$res = $con->query("SELECT id, CONCAT(first_name, ' ', last_name) as name, email, 'Appointment' as type FROM appointments WHERE id > $appLast");
while($row = $res->fetch_assoc()) {
    $recentData[] = $row;
}
/* CONSULTATIONS */
$res = $con->query("
    SELECT id, CONCAT(first_name, ' ', last_name) as name, email, 'Consultation' as type 
    FROM consultations 
    WHERE id > $consLast
");

while($row = $res->fetch_assoc()) {
    $recentData[] = $row;
}

/* RECRUITMENT */
$res = $con->query("SELECT id, full_name as name, email, 'Recruitment' as type FROM recruitment WHERE id > $recLast");
while($row = $res->fetch_assoc()) {
    $recentData[] = $row;
}

/* SORT */
usort($recentData, function($a, $b) {
    return $b['id'] - $a['id'];
});

function updateLastSeen($con, $userId, $table) {
    $res = $con->query("SELECT MAX(id) as max_id FROM $table");
    $maxId = $res->fetch_assoc()['max_id'] ?? 0;

    $stmt = $con->prepare("
        INSERT INTO user_activity (user_id, table_name, last_seen_id)
        VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE last_seen_id=?
    ");
    $stmt->bind_param("isii", $userId, $table, $maxId, $maxId);
    $stmt->execute();
}

$userEmail = $_SESSION['user_email'] ?? 'User';
$userRole  = $_SESSION['role'] ?? 'staff';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loan Experts CRM - Dashboard</title>

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

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 25px 30px;
    min-width: 180px;
    text-align: center;
    transition: 0.3s;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}
.stat-card p {
    white-space: nowrap;
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 8px;
}

.stat-card:hover {
    transform: translateY(-5px) scale(1.02);
}

.stat-number {
    font-size: 32px;
    font-weight: bold;
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
        <h3>Dashboard</h3>
        <div>
            <strong><?= htmlspecialchars($userEmail) ?></strong>
            <span class="badge bg-primary ms-2"><?= htmlspecialchars($userRole) ?></span>
        </div>
    </div>

    <div class="container mt-4">

        <?php if ($userRole === 'admin'): ?>
        <div class="table-section">
            <h5>Admin Controls</h5>

            <a href="add_user.php">
                <button class="btn btn-primary">Add User</button>
            </a>

            <a href="users_list.php">
                <button class="btn btn-dark">Manage Users</button>
            </a>
        </div>
        <?php endif; ?>

        <div class="row mt-4 justify-content-center">
            <div class="col-md-auto"><div class="stat-card"><p>Total Leads</p><div class="stat-number"><?= $totalLeads ?></div></div></div>
            <div class="col-md-auto"><div class="stat-card"><p>Total Enquiries</p><div class="stat-number"><?= $totalEnquiries ?></div></div></div>
            <div class="col-md-auto"><div class="stat-card"><p>Total Appointments</p><div class="stat-number"><?= $totalAppointments ?></div></div></div>
            <div class="col-md-auto"><div class="stat-card"><p>Total Consultations</p><div class="stat-number"><?= $consultationsCount ?></div></div></div>
            <div class="col-md-auto"><div class="stat-card"><p>Total Recruitment</p><div class="stat-number"><?= $totalRecruitment ?></div></div></div>
        </div>

        <div class="table-section">
            <h5>Recent Updates</h5>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (!empty($recentData)): ?>
                    <?php foreach ($recentData as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['name'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($row['email'] ?? '') ?></td>
                            <td><span class="badge bg-info"><?= htmlspecialchars($row['type']) ?></span></td>
                            <td><span class="badge bg-success">New</span></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="4">No new data</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

</body>
</html>

<?php
updateLastSeen($con, $userId, 'leads');
updateLastSeen($con, $userId, 'enquiry');
updateLastSeen($con, $userId, 'appointments');
updateLastSeen($con, $userId, 'consultations');
updateLastSeen($con, $userId, 'recruitment');
?>