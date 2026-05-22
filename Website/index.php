<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic SEO -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Title (VERY IMPORTANT FOR SEO) -->
  <title>Loan Experts | Best Loan Services in India</title>

  <!-- Description -->
  <meta name="description" content="Loan Experts helps individuals and businesses secure the best loans from top banks and NBFCs with quick approvals and expert guidance.">

  <!-- Keywords (optional but ok) -->
  <meta name="keywords" content="loan services, personal loan, business loan, housing loan, India loans">

  <!-- Author -->
  <meta name="author" content="Loan Experts">

  <!-- Canonical URL (IMPORTANT FOR SEO) -->
  <link rel="canonical" href="http://localhost/loanexperts.co.in">

  <!-- Open Graph (for WhatsApp, Facebook preview) -->
  <meta property="og:title" content="Loan Experts | Best Loan Services">
  <meta property="og:description" content="Get quick loan approvals with expert guidance.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="images/preview.png">
  <meta property="og:url" content="https://loanexperts.co.in/">

  <!-- Favicon -->
  <link rel="icon" href="HTML/images/favicon.png" type="image/png">

  <!-- Fonts Optimization -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- CSS (optimized preload) -->
 <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
  <!-- Header -->
  <?php include(__DIR__ . '/components/header.php'); ?>

   <!--Logo Animation -->
  <div id="intro">
  <video id="introVideo" autoplay muted playsinline preload="none">
    <source src="images/logo-animation.mp4">
  </video>
</div>

<div id="main-content">
<main>
<!-- Hero Section with Video Background -->
<section class="hero-banner">
    <video autoplay muted loop playsinline preload="none" class="hero-video"
      poster="images/hero-poster.jpg">
      <source src="images/Hero.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </section>

  <!-- Why Choose Loan Experts Section -->
<section class="why-choose-us">

  <h2 class="section-title">Why Choose Loan Experts?</h2>

  <div class="features-grid">

    <div class="feature-card">
      <div class="icon-wrapper">
        <img src="images/Simplified.png" alt="Application Process Icon" loading="lazy">
      </div>
      <h3>Simplified Application Process</h3>
      <p>We made loan application easy with minimum paperwork and hassle free procedure.</p>
    </div>

    <div class="feature-card">
      <div class="icon-wrapper">
        <img src="images/fast-loan-approvals.webp" alt="Fast Loan Icon" loading="lazy">
      </div>
      <h3>Fast Loan Approvals</h3>
      <p>Our experts ensure quick approvals and disbursements of loans through our streamlined process.</p>
    </div>

    <div class="feature-card">
      <div class="icon-wrapper">
        <img src="images/inteerst-rates.png" alt="Interest Icon" loading="lazy">
      </div>
      <h3>Best Rate of Interest</h3>
      <p>Our Experts save your money by providing competitive interest rates from top Banks & NBFCs.</p>
    </div>

    <div class="feature-card">
      <div class="icon-wrapper">
        <img src="images/personalized.png" alt="Loan Solution Icon" loading="lazy">
      </div>
      <h3>Personalised Loan Solution</h3>
      <p>Every financial situation is unique—our experts provide tailored loan options to fit your needs.</p>
    </div>

    <div class="feature-card">
      <div class="icon-wrapper">
        <img src="images/partnerships.png" alt="Partnership Icon" loading="lazy">
      </div>
      <h3>Trusted Partnerships with Leading Banks & NBFCs</h3>
      <p>We’ve built strong partnerships with top financial institutions for better and faster lending.</p>
    </div>

    <div class="feature-card">
      <div class="icon-wrapper">
        <img src="images/expert-advice.png" alt="Expert Advice Icon" loading="lazy">
      </div>
      <h3>Expert Guidance at Every Step</h3>
      <p>Our experienced advisors are here to help you through every stage of your loan journey.</p>
    </div>
  </div>

</section>

<!-- Explore Our Services Section -->
<section class="services-section">  

  <h2 class="section-title">Explore Our Services</h2>
  
  <div class="services-grid">

    <div class="service-card">
      <img src="images/personal-copy.png" alt="Personal Loan" loading="lazy">
      <h3>Personal Loan</h3>
      <a href="/LoanExpertsWebsite/Website/HTML/personal.php" class="btn-learn">Learn More</a>
    </div>

    <div class="service-card">
      <img src="images/business-copy.png" alt="Business Loan" loading="lazy">
      <h3>Business Loan</h3>
      <a href="/LoanExpertsWebsite/Website/HTML/business.php" class="btn-learn">Learn More</a>
    </div>

    <div class="service-card">
      <img src="images/housing-copy.png" alt="Housing Loan" loading="lazy">
      <h3>Housing Loan</h3>
      <a href="/LoanExpertsWebsite/Website/HTML/housing.php" class="btn-learn">Learn More</a>
    </div>

    <div class="service-card">
      <img src="images/against-copy.png" alt="Loan Against Property" loading="lazy">
      <h3>Loan Against Property</h3>
      <a href="/LoanExpertsWebsite/Website/HTML/LAP.php" class="btn-learn">Learn More</a>
    </div>

    <div class="service-card">
      <img src="images/edu-copy.png" alt="Education Loan" loading="lazy">
      <h3>Education Loan</h3>
      <a href="/LoanExpertsWebsite/Website/HTML/education.php" class="btn-learn">Learn More</a>
    </div>

    <div class="service-card">
      <img src="images/project-loan.png" alt="Project Loan" loading="lazy">
      <h3>Project Loan</h3>
      <a href="/LoanExpertsWebsite/Website/HTML/project.php" class="btn-learn">Learn More</a>
    </div>

  </div>

  <!-- Call our experts Button  -->
   <div class="call-btn-wrapper">
   <a href="https://wa.me/919781704214?text=Hi%20I%20want%20loan%20assistance" class="call-expert-btn">
    <img src="images/call-icon.png" alt="Call Loan Experts" class="btn-icon" loading="lazy">
  <span>Contact Our Experts</span>
</a>
</div>

  <!-- Testimonial Section -->
<section class="testimonials-section">

  <h2 class="section-title">Client Testimonials</h2>

  <div class="testimonials-grid">

    <!-- Testimonial 1 -->
    <a href="https://share.google/foONtlCNoTCJwtiFB" aria-label="Read review by Ravinder Kaur Bhullar" class="testimonial-card" target="_blank"
      rel="noopener">
      <p class="testimonial-text"> My loan application was rejected by many banks. Even my own bank refused to sanction my loan though I was having my salary account there. But, this team helped to get my personal loan approved for 5 lakhs in just 2 days. This organization is highly recommended for loan services.</p>
      
      <div class="reviewer">
        <div class="initial-circle" style="background-color: #4caf50;">R</div>

        <div class="reviewer-details">
          <span class="reviewer-name">Ravinder Kaur Bhullar</span>
          <span class="rating">★★★★★</span>
        </div>
      </div>
    </a>

    <!-- Testimonial 2 -->
    <a href="https://share.google/Z09FxUQHLtn1XdjL1" aria-label="Read review by Dr. Ranpinder Kaur" class="testimonial-card pink" target="_blank"
    rel="noopener">

      <p class="testimonial-text">Team Loan Experts is very helpful. Taken their services twice in the last 2 years — first for a professional loan and now for our son’s higher education. Both times, loan was disbursed in less than 48 hours. Highly satisfied and recommend to others.</p>
      
      <div class="reviewer">
        <div class="initial-circle" style="background-color: #e91e63;">D</div>

         <div class="reviewer-details">
          <span class="reviewer-name">Dr. Ranpinder Kaur</span>
          <span class="rating">★★★★★</span>
        </div>
      </div>
    </a>

    <!-- Testimonial 3 -->
    <a href="https://share.google/oxKvN7TwpVnwk68xy" aria-label="Read review by Gurnoor Singh" class="testimonial-card yellow" target="_blank"
     rel="noopener">
      <p class="testimonial-text">Unbelievable performance by Loan Experts team. Got my approval of 8 lakh loan in just 2 days and the amount was credited to my account. Special thanks to Mr. Gurjit Singh for the support. Thank you very much 🙏😊</p>
      
      <div class="reviewer">
        <div class="initial-circle" style="background-color: #3f51b5;">G</div>
        <div class="reviewer-details">
          <span class="reviewer-name">Gurnoor Singh</span>
          <span class="rating">★★★★★</span>
        </div>
      </div>
    </a>

  </div>

  <!-- See more review button -->
<div class="see-more-wrapper">

  <a href="https://www.google.com/search?q=loan+experts&oq=loan+experts&gs_lcrp=EgZjaHJvbWUqDwgAECMYJxjjAhiABBiKBTIPCAAQIxgnGOMCGIAEGIoFMhUIARAuGCcYrwEYxwEYgAQYigUYjgUyBwgCEAAYgAQyCQgDEAAYChiABDIJCAQQABgKGIAEMgkIBRAAGAoYgAQyCQgGEAAYChiABDIJCAcQABgKGIAEMgkICBAAGAoYgAQyCQgJEAAYChiABNIBCTM0NzFqMGoxNagCCLACAfEFcMwPuOxEeW0&sourceid=chrome&ie=UTF-8#lrd=0x3919656eac16742d:0x124e0274fadc92a5,1,,,," 
     aria-label="View more customer reviews on Google" class="btn-see-more" target="_blank" rel="noopener">

    See More Reviews
  </a>
</div>
</section>

<!-- Trusted Partners & NBFCs -->
 <section class="partners-section">

  <h2 class="section-title">Trusted Banking Partners & NBFCs</h2>

  <div class="logo-slider">
    <div class="logo-track">
      
      <img src="images/hdfc.png" alt="HDFC Bank" loading="lazy">
      <img src="images/bob.png" alt="Bank of Baroda" loading="lazy">
      <img src="images/boi.png" alt="Bank of India" loading="lazy">
      <img src="images/Yes.png" alt="Yes Bank" loading="lazy">
      <img src="images/IDFC-Bank.jpg" alt="IDFC Bank" loading="lazy">
      <img src="images/ICICI-Bank.png" alt="ICICI Bank" loading="lazy">
      <img src="images/sbi.png" alt="State Bank of India" loading="lazy">
      <img src="images/PNB.png" alt="PNB Bank" loading="lazy">
      <img src="images/poonawalla-fincorp.jpg" alt="poonawalla-fincorp Bank" loading="lazy">
    </div>
  </div>
</section>

<!-- Counter -->
 <section class="stats-section">
  <div class="stats-container">

    <div class="stat-box">
      <h2><span class="counter" data-target="3000">0</span>+</h2>
      <p>Loans Disbursed</p>
    </div>

    <div class="stat-box">
      <h2><span class="counter" data-target="100">0</span>%</h2>
      <p>Client Satisfaction</p>
    </div>

    <div class="stat-box">
      <h2><span class="counter" data-target="10">0</span>+</h2>
      <p>Team Size</p>
    </div>

    <div class="stat-box">
      <h2><span class="counter" data-target="7">0</span>+</h2>
      <p>Years of Experience</p>
    </div>

  </div>
</section>

<!-- Apply Now button -->
<button type="button" class="apply-btn open-apply" aria-label="Apply for loan">
  Apply Now
</button>

</main>
</div>
<!-- Footer -->
<?php include(__DIR__ . '/components/apply-form-ui.php'); ?>
<?php include(__DIR__ . '/components/schedule_modal.php'); ?>
<?php include(__DIR__ . '/components/footer.php'); ?>

<!-- JS -->
 <script src="JS/main.js"></script>

<script>
  document.documentElement.style.scrollBehavior = "smooth";
</script>

</body>
</html>