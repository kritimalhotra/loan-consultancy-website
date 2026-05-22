<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Top Utility Bar -->
<div class="top-bar">
  <div class="social-icons">
    <a href="https://www.facebook.com/loanexpertsamritsar/" target="_blank">
      <img src="/LoanExpertsWebsite/Website/images/facebook-logo-facebook-icon-transparent-free-png.webp" alt="Facebook" class="icon fb" />
    </a>          
    <a href="https://www.instagram.com/loanexpertsamritsar/" target="_blank">
      <img src="/LoanExpertsWebsite/Website/images/Instagram_logo_2016.svg.webp" alt="Instagram" class="icon insta" />
    </a>
    <a href="https://www.youtube.com/@loanexperts1890" target="_blank">
      <img src="/LoanExpertsWebsite/Website/images/youtube-6616310_1280.webp" alt="YouTube" class="icon yt" />
    </a>
    <img src="/LoanExpertsWebsite/Website/images/BNI.png" alt="BNI" class="icon bni" />
  </div>

  <div class="top-buttons">
    <button class="btn-outline appointment-btn">
  Schedule an Appointment
</button>

    <a href="https://myscore.cibil.com/CreditView/enrollShort_new.page?enterprise=CIBIL&offer=FACRA" 
       target="_blank" 
       class="btn-outline">
      Check your Cibil Score
    </a>
  </div>
</div>

<!-- Main Header -->
<header class="main-header">
  <div class="header-left">
    <img src="/LoanExpertsWebsite/Website/images/Digital-logo.png" alt="Loan Experts Logo">
  </div>

  <!-- Navigation -->
  <nav class="nav-menu">
    <a href="/LoanExpertsWebsite/Website/index.php" class="nav-link">Home</a>
    <a href="/LoanExpertsWebsite/Website/HTML/about.php" class="nav-link">About Us</a>

    <div class="nav-dropdown">
      <a href="#" class="nav-link">Our Services ▾</a>

      <div class="dropdown-menu">
        <a href="/LoanExpertsWebsite/Website/HTML/personal.php">Personal Loan</a>
        <a href="/LoanExpertsWebsite/Website/HTML/business.php">Business Loan</a>
        <a href="/LoanExpertsWebsite/Website/HTML/housing.php">Housing Loan</a>
        <a href="/LoanExpertsWebsite/Website/HTML/LAP.php">Loan Against Property (LAP)</a>
        <a href="/LoanExpertsWebsite/Website/HTML/education.php">Education Loan</a>
        <a href="/LoanExpertsWebsite/Website/HTML/project.php">Project Loan</a>
      </div>
    </div>

    <a href="/LoanExpertsWebsite/Website/HTML/join-our-team.php" class="nav-link">Join Our Team</a>
    <a href="/LoanExpertsWebsite/Website/HTML/contact-us.php" class="nav-link">Contact Us</a>

    <!-- 🔥 DYNAMIC LOGIN / LOGOUT -->
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="/LoanExpertsWebsite/Website/PHP/logout.php" class="nav-login-btn">Logout</a>
    <?php else: ?>
        <a href="/LoanExpertsWebsite/Website/PHP/login.php" class="nav-login-btn">Login</a>
        <a href="/LoanExpertsWebsite/Website/HTML/signup.php" class="nav-signup-btn">Sign Up</a>
    <?php endif; ?>

  </nav>
</header>