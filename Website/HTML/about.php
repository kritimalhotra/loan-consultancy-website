<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="canonical" href="https://loanexperts.co.in/about">

<meta property="og:title" content="About Loan Experts">
<meta property="og:description" content="Learn about Loan Experts and our mission to provide the best loan solutions.">
<meta property="og:type" content="website">
<meta property="og:image" content="https://loanexperts.co.in/HTML/images/preview.png">
<meta property="og:url" content="https://loanexperts.co.in/about.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Loan Experts</title>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="description" content="Learn about Loan Experts – a trusted financial partner in Amritsar helping individuals and businesses secure the best loan solutions with ease.">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/LoanExpertsWebsite/Website/CSS/style.css">
</head>
<body>
    <main id="main-content">
    <!-- Header -->
   <?php require_once __DIR__ . '/../components/header.php'; ?>

    <!-- Hero Banner Section -->
    <section class="about-hero">
        <img src="/LoanExpertsWebsite/Website/images/About-us-hero.png" alt="About Loan Experts" fetchpriority="high" class="about-hero-img">
    </section>

<!-- Schedule consultation Button -->
<div class="cta-container">
  <a href="#" class="consult-btn cta-btn consultation-btn" aria-label="Schedule a free consultation">
  Schedule a Free Consultation
</a>
</div>

    <!-- About -->
     <section class="about-container">

    <!-- Left Side -->
    <div class="about-left">
        <h1>Loan Experts Family</h1>
        <img src="/LoanExpertsWebsite/Website/images/Team-Pic.jpeg" alt="Loan Experts Team" loading="lazy">
    </div>

    <!-- Right Side -->
    <div class="about-right">
        <h1 class="main-title">About Loan Experts</h1>

        <p>
            Loan Experts is a trusted partner for those seeking tailored financial solutions.
            Based in Amritsar, we specialize in providing a personalized experience for securing loans—
            whether it's to buy your dream home, expand your business, or manage life’s major milestones.
        </p>

        <p>
            With an extensive network of banks and NBFCs, we ensure our clients receive competitive
            interest rates and terms that suit their unique needs. Our experts make borrowing easy,
            transparent, and stress-free.
        </p>

        <p>
            At Loan Experts, we redefine how people achieve their financial aspirations—
            with clarity, honesty, and care.
        </p>

    </div>
</section>

 <!-- Mission Vision Section -->
<section class="mission-vision">

    <div class="mv-box">
        <h2 class="mv-title">Our Mission</h2>
        <div class="mv-content">
            <p>
                Our mission is to make borrowing process Simpler, faster & friendlier for our clients, making it clear, accessible, and stress-free, so individuals and businesses can achieve their financial aspirations with confidence.
            </p>
        </div>
    </div>

    <div class="mv-box">
        <h2 class="mv-title">Our Vision</h2>
        <div class="mv-content">
            <p>
                We strive to be the most trusted financial partner, delivering efficient and personalized loan solutions that foster success and empower growth for all our clients.
            </p>
        </div>
    </div>

</section>
<!-- Awards Section -->
<section class="awards-section">

    <h2 class="awards-title">Awards & Recognitions</h2>
    <p class="awards-subtitle">Recognized for Excellence & Trust</p>

    <div class="awards-gallery">

        <div class="award-card">
            <img src="/LoanExpertsWebsite/Website/images/Award1.jpg" loading="lazy" alt="Award 1">
            <p>Excellence Award</p>
        </div>

        <div class="award-card">
            <img src="/LoanExpertsWebsite/Website/images/Award2.jpeg" loading="lazy" alt="Award 2">
            <p>Top Financial Service</p>
        </div>

        <div class="award-card">
            <img src="/LoanExpertsWebsite/Website/images/Award3.jpeg" loading="lazy" alt="Award 3">
            <p>Customer Trust Award</p>
        </div>

        <div class="award-card">
            <img src="/LoanExpertsWebsite/Website/images/Award4.jpeg" loading="lazy" alt="Award 4">
            <p>Best Loan Provider</p>
        </div>

        <div class="award-card">
            <img src="/LoanExpertsWebsite/Website/images/Award5.jpeg" loading="lazy" alt="Award 5">
            <p>Outstanding Performance</p>
        </div>

        <div class="award-card">
            <img src="/LoanExpertsWebsite/Website/images/Award6.jpeg" loading="lazy" alt="Award 6">
            <p>Industry Recognition</p>
        </div>

        <div class="award-card">
            <img src="/LoanExpertsWebsite/Website/images/Award7.jpeg" loading="lazy" alt="Award 7">
            <p>Trusted Brand Award</p>
        </div>

        <div class="award-card">
            <img src="/LoanExpertsWebsite/Website/images/Award8.jpeg" loading="lazy" alt="Award 8">
            <p>Service Excellence</p>
        </div>

    </div>

</section>
<!-- Join Our Team -->
<div class="join-team-wrapper">

    <a href="/LoanExpertsWebsite/Website/HTML/join-our-team.php" class="join-team-btn">
        Join Our Team
    </a>

</div>

    <!-- Footer -->
     <?php require_once __DIR__ . '/../components/apply-form-ui.php'; ?>
<?php require_once __DIR__ . '/../components/schedule_modal.php'; ?>
<?php require_once __DIR__ . '/../components/footer.php'; ?>

<!-- JS -->
 <script src="/LoanExpertsWebsite/Website/js/main.js" defer></script>
</body>
</html>