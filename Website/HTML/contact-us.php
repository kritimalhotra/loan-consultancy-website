<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us | Loan Experts</title>
<meta name="description" content="Contact Loan Experts for personal, business, and housing loan assistance. Our experts are here to help you.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/LoanExpertsWebsite/Website/CSS/style.css">

</head>
<body>
<main id="main-content">
<!-- Header -->
   <?php require_once __DIR__ . '/../components/header.php'; ?>

<section class="contact-section">

<h2 class="contact-title">Get in Touch with Us</h2>

<div class="contact-container">

<!-- LEFT IMAGE -->
<div class="contact-image">
<img src="/LoanExpertsWebsite/Website/images/Join.png" alt="Contact Us">
</div>

<!-- RIGHT FORM -->
<div class="contact-form">

<form id="enquiryForm">

<div class="form-group">
<input type="text" name="fullName" placeholder="Full Name*" required>
</div>

<div class="form-group">
<input type="email" name="email" placeholder="Email Address*" required>
</div>

<div class="form-group">
<input type="tel" name="phone" placeholder="Phone Number*" pattern="[0-9]{10}" required>
</div>

<div class="form-group">
<textarea name="query" placeholder="Enter your query*" required></textarea>
</div>

<button type="submit" class="send-btn">Send Message</button>

</form>

</div>

</div>

</section>

<div id="enquirySuccessModal" class="enquiry-success-modal" aria-hidden="true">
  <div class="enquiry-success-card" role="dialog" aria-modal="true" aria-labelledby="successTitle">
    <button type="button" class="close-success-modal" onclick="closeEnquirySuccess()">×</button>
    <div class="success-mark">
      <span>✓</span>
    </div>
    <h3 id="successTitle">Query submitted successfully</h3>
    <p>Your request has been received successfully. Our experts will contact you shortly to guide you through the next steps.</p>
    <button type="button" class="modal-action-btn" id="closeSuccessModalBtn" onclick="closeEnquirySuccess()">Close</button>
  </div>
</div>
<?php require_once __DIR__ . '/../components/apply-form-ui.php'; ?>
<?php require_once __DIR__ . '/../components/schedule_modal.php'; ?>
<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script src="/LoanExpertsWebsite/Website/js/main.js" defer></script>
</body>
</html>