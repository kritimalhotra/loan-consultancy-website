<?php $current = basename($_SERVER['PHP_SELF']); ?>

<style>
.sidebar {
    position: fixed;
    width: 260px;
    height: 100vh;
    background: linear-gradient(180deg, #1e73d8, #155db2);
    color: #fff;
    padding-top: 20px;
    font-family: 'Segoe UI', sans-serif;
}

/* BRAND */
.sidebar-brand {
    padding: 0 20px 20px;
}

.sidebar-brand h4 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
}

.sidebar-brand p {
    margin: 0;
    font-size: 13px;
    opacity: 0.8;
}

/* MENU */
.nav-menu {
    list-style: none;
    padding: 10px 15px;
    margin: 0;
}

.nav-menu li {
    margin-bottom: 8px;
}

.nav-menu a {
    display: block;
    padding: 10px 15px;
    border-radius: 8px;
    color: #e0e6ed;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

.nav-menu a:hover {
    background: rgba(255,255,255,0.15);
    color: #fff;
}

.nav-menu a.active {
    background: rgba(255,255,255,0.25);
    color: #fff;
}
</style>

<div class="sidebar">

    <div class="sidebar-brand">
        <h4>Loan Experts</h4>
        <p>CRM System</p>
    </div>

    <ul class="nav-menu">
        <li><a class="<?= $current == 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php">Dashboard</a></li>
        <li><a class="<?= $current == 'leads.php' ? 'active' : '' ?>" href="leads.php">Leads</a></li>
        <li><a class="<?= $current == 'enquiries.php' ? 'active' : '' ?>" href="enquiries.php">Enquiries</a></li>
        <li><a class="<?= $current == 'appointments.php' ? 'active' : '' ?>" href="appointments.php">Appointments</a></li>
        <li><a class="<?= $current == 'consultations.php' ? 'active' : '' ?>" href="consultations.php">Consultations</a></li>
        <li><a class="<?= $current == 'recruitment.php' ? 'active' : '' ?>" href="recruitment.php">Recruitment</a></li>
        <li><a href="../actions/logout.php">Logout</a></li>
    </ul>

</div>