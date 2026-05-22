<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Careers | Loan Experts</title>
<meta name="description" content="Join Loan Experts and grow your career in the finance industry. Submit your resume and become part of our expert team.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/LoanExpertsWebsite/Website/CSS/style.css">
</head>
<body>
<main id="main-content">
<!-- Header -->
   <?php require_once __DIR__ . '/../components/header.php'; ?>

<!-- Hero Banner -->
 <section class="team-hero">
<img src="/LoanExpertsWebsite/Website/images/Untitled.png" alt="Careers at Loan Experts">
</section>

<section class="resume-section">

<h2 class="resume-title">Drop Your Resume</h2>

<div class="resume-container">

<!-- LEFT SIDE MAP -->
<div class="resume-map">
<iframe 
src="https://www.google.com/maps?q=Loan+Experts+Amritsar&output=embed"
width="100%" 
height="320" 
style="border:0;" 
allowfullscreen="" 
loading="lazy">
</iframe>
</div>

<!-- RIGHT SIDE FORM -->
<div class="resume-form">

<form id="recruitment" method="POST" action="/LoanExpertsWebsite/Website/PHP/recruitment.php" enctype="multipart/form-data">

<div class="form-group">
<input type="text" name="fullName" placeholder="Full Name *" required>
</div>

<div class="form-group">
<input type="email" name="email" placeholder="Email Address *" required>
</div>

<div class="form-group">
<input type="tel" name="phone" placeholder="Phone Number">
</div>

<div class="upload-box">
  <p id="fileText">Drop your resume here (PDF, JPG, PNG • Max 2MB)</p>
  <input type="file" name="resume" id="resumeInput" accept=".pdf,.jpg,.jpeg,.png" required>
</div>

<button type="submit" class="send-btn">Send Message</button>

</form>

</div>

</div>
<div id="enquirySuccessModal" class="enquiry-success-modal" aria-hidden="true">
  <div class="enquiry-success-card" role="dialog" aria-modal="true" aria-labelledby="successTitle">
    <button type="button" class="close-success-modal" aria-label="Close success message">×</button>
    <div class="success-mark">
      <span>✓</span>
    </div>
    <h3 id="successTitle">Resume Submitted</h3>
    <p>Our HR team will contact you soon.</p>
    <button type="button" class="modal-action-btn" id="closeSuccessModalBtn">Close</button>
  </div>
</div>

</section>

<?php require_once __DIR__ . '/../components/apply-form-ui.php'; ?>
<?php require_once __DIR__ . '/../components/schedule_modal.php'; ?>
<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script src="/LoanExpertsWebsite/Website/js/main.js" defer></script>
</body>
</html>