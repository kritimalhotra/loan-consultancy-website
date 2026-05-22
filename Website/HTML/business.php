<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Business Loan - Loan Experts</title>
<meta name="description" content="Get business loans with quick approval, flexible eligibility, and expert guidance from Loan Experts. Empower your business growth today.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/LoanExpertsWebsite/Website/CSS/style.css">

</head>
<body>
<main id="main-content">

<!-- Header -->
   <?php require_once __DIR__ . '/../components/header.php'; ?>

<!-- Business Loan Section -->
<section class="bl-section">

    <h1 class="bl-title">Loan Solutions for Your Business Needs</h1>

    <p class="bl-subtitle">
        At Loan Experts, we understand that every business has unique financial requirements.
        Whether you're expanding operations, managing cash flow, or upgrading equipment,
        our business loan solutions are tailored to meet your specific needs.
    </p>

    <!-- Cards Container -->
    <div class="bl-container">

        <!-- Card 1 -->
        <div class="bl-card">
            <img src="/LoanExpertsWebsite/Website/images/depositphotos_150915200-stock-illustration-step-of-hand-collect-the.jpg" alt="Business Expansion">
            <h3>Business Expansion</h3>
        </div>

        <!-- Card 2 -->
        <div class="bl-card">
            <img src="/LoanExpertsWebsite/Website/images/working-capital-lon.jpg" alt="Working Capital">
            <h3>Working Capital Loans</h3>
        </div>

        <!-- Card 3 -->
        <div class="bl-card">
            <img src="/LoanExpertsWebsite/Website/images/wireless-technology-isometric-composition-poster_1284-15266.avif" alt="Equipment Finance">
            <h3>Equipment Financing</h3>
        </div>
        <!-- Card 4 -->
        <div class="bl-card">
            <img src="/LoanExpertsWebsite/Website/images/wireless-technology-isometric-composition--15266.avif" alt="Business Expansion">
            <h3>Inventory Financing</h3>
        </div>

        <!-- Card 5 -->
        <div class="bl-card">
            <img src="/LoanExpertsWebsite/Website/images/What-is-Debt-consolidation-840x526.webp" alt="Working Capital">
            <h3>Debt Consolidation</h3>
        </div>

        <!-- Card 6 -->
        <div class="bl-card">
            <img src="/LoanExpertsWebsite/Website/images/0422_638320311022221535.jpg" alt="Equipment Finance">
            <h3>Project Financing</h3>
        </div>

    </div>

</section>
<!-- ================= Apply Now Button ================= -->
<div class="apply-btn-wrapper">
    <button class="apply-btn open-apply">Apply Now</button>
</div>

<!-- ================= WHO CAN APPLY ================= -->
<section class="who-apply">

    <h2 class="who-title">Who Can Apply for a Business Loan?</h2>

    <p class="who-subtitle">
        At Loan Experts, we believe in empowering businesses of all sizes. Our Buisness loan solutions are designed to cater to a wide range of professionals and business owners. If you fall under any of the following categories, you are eligible to apply for a business loan with us:
    </p>

    <section class="business-types">

    <!-- SME Card -->
    <div class="business-card card-sme">
      <img src="/LoanExpertsWebsite/Website/images/SME.png" alt="Small and Medium Enterprises">
      <div class="card-content SME-bg">
        <h3>Small and Medium Enterprises (SMEs)</h3>
        <p>
          Whether you're a startup looking to scale or an established business aiming to expand,
          our business loans are tailored to meet the needs of small and medium enterprises.
          We help you achieve growth, manage operations, and seize new opportunities.
        </p>
      </div>
    </div>

    <!-- Startup Card -->
    <div class="business-card card-startup">
      <img src="/LoanExpertsWebsite/Website/images/startup-development_1284-22687.avif" alt="Startup Business Loans">
      <div class="card-content startup-bg">
        <h3>Startups</h3>
        <p>
          New businesses often need financial support to get off the ground.
          Our startup loans help entrepreneurs cover essential costs —
          from purchasing equipment to building marketing campaigns.
        </p>
      </div>
    </div>

    <!-- Self Employed Card -->
    <div class="business-card card-self">
      <img src="/LoanExpertsWebsite/Website/images/self.jfif" alt="Self Employed Professionals">
      <div class="card-content self-bg">
        <h3>Self-Employed Professionals</h3>
        <p>
          Are you a doctor, consultant, architect, or freelancer?
          Our business loans support self-employed professionals in managing practice expansion,
          client growth, and investment in advanced tools and technology.
        </p>
      </div>
    </div>

  </div>
</section>

 <!-- Schedule consultation Button -->
<div class="cta-container">
  <a href="#" class="consult-btn cta-btn consultation-btn">
    Schedule a Free Consultation
  </a>
</div>

<!-- Eligibility -->
<section class="eligibility-section">
  <div class="inner-container">
    <h2 class="section-title">Eligibility Criteria</h2>

    <div class="eligibility-wrapper">
        <div class="eligibility-container <?php echo !isset($_SESSION['user_id']) ? 'blur-content' : ''; ?>">
      <!-- LEFT CARD -->
      <div class="eligibility-card">
        <ol>
          <li><strong>Age Requirement:</strong> The applicant must be between 21 and 65 years of age to qualify for a business loan.</li>
          <li><strong>Business Vintage:</strong> Your business must have been in operation for a minimum of 2 years. This shows that the business is established and has a history of stable operations.</li>
          <li><strong>Minimum Turnover:</strong> Your business should have a minimum annual turnover of ₹10 lakhs. Higher turnover improves your chances of getting a larger loan amount.</li>
          <li><strong>Profitability:</strong> Your business must have been profitable over the last 2 financial years. Profitability indicates that the business has the financial capacity to repay the loan.</li>
        </ol>
      </div>

      <!-- RIGHT CARD -->
      <div class="eligibility-card">
        <ol start="5">
          <li><strong>Credit Score:</strong> A minimum credit score of 650 is preferred. A higher credit score increases the likelihood of getting better interest rates and loan terms.</li>
          <li><strong>Business Registration:</strong> The business must be legally registered with the appropriate government authorities (e.g., GST registration, Shop Act License, etc.).</li>
          <li><strong>Bank Account:</strong> You must have an active business bank account with regular transactions to demonstrate your business’s financial activity and stability.</li>
          <li><strong>Debt Repayment History:</strong> A clean record of previous loan repayments or no significant defaults improves your chances of loan approval. Lenders consider your repayment history as part of the application process.</li>
        </ol>
      </div>

    </div>
    <?php if (!isset($_SESSION['user_id'])): ?>
        <div class="lock-overlay">
            <div class="lock-box">
                <div class="lock-icon">🔒</div>
                <p>
                    To check your eligibility,<br>
                    <a href="/login.php" class="login-link">
    please login
  </a>
                </p>
            </div>
        </div>
      <?php endif; ?>
      </div>
  </div>
</section>
<!-- ================= FAQs ================= -->
<section class="faq-section">
    <h2 class="faq-title">Frequently Asked Questions - FAQs</h2>
    <div class="faq-container">
        <!-- FAQ 1 (Open by default) -->
        <div class="faq-item active">

            <div class="faq-question">
                <span class="faq-icon">−</span>
                What is a business loan?
            </div>

            <div class="faq-answer">
                A business loan is a type of financing specifically designed to help businesses cover operational expenses, expansion plans, working capital needs, or equipment purchases. It is generally offered with flexible terms and interest rates based on your business’s financial health.
            </div>

        </div>


        <!-- FAQ 2 -->
        <div class="faq-item">

            <div class="faq-question">
                <span class="faq-icon">+</span>
                What is the maximum loan amount I can avail of for my business?
            </div>

            <div class="faq-answer">
               The loan amount you can avail of depends on your business’s financial profile, turnover, and repayment capacity. Typically, business loans can range from ₹1 lakh to ₹5 crores, depending on your business requirements.
            </div>

        </div>

        <!-- FAQ 3 -->
        <div class="faq-item">

            <div class="faq-question">
                <span class="faq-icon">+</span>
                How long does it take to get a business loan approved?
            </div>

            <div class="faq-answer">
                Once all the necessary documents are submitted and eligibility criteria are met, business loans are usually approved within 3 to 7 business days. In some cases, it may be faster if you have a strong credit score and established financial history.
            </div>
            </div>
            <!-- FAQ 4 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        What is the interest rate on a business loan?
    </div>
    <div class="faq-answer">
        You typically need <strong>identity proof (Aadhaar/PAN), address proof, income proof (salary slips or ITR), bank statements (last 3–6 months), and passport-size photographs</strong>. Additional documents may be required depending on your profile and lender.
    </div>
</div>

<!-- FAQ 5 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        Can I prepay my business loan?
    </div>
    <div class="faq-answer">
        Personal loans are usually processed quickly. Once documents are verified and approved, the loan amount can be disbursed within <strong>24 hours to 3 working days</strong>, depending on the lender and your eligibility.
    </div>
</div>

<!-- FAQ 6 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        Do I need to provide collateral for a business loan?
    </div>
    <div class="faq-answer">
        Personal loan interest rates generally start from around <strong>10% per annum</strong> and may vary based on your <strong>credit score, income, employment type, and lender policies</strong>. A higher credit score can help you get lower interest rates.
    </div>
</div>

<!-- FAQ 7 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        What documents are required to apply for a business loan?
    </div>
    <div class="faq-answer">
        Yes, most lenders allow <strong>prepayment or foreclosure</strong> of personal loans. However, some lenders may charge a <strong>small prepayment or foreclosure fee</strong>. It is advisable to check the lender’s terms before applying.
    </div>
</div>

<!-- FAQ 8 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        What is the loan tenure for business loans?
    </div>
    <div class="faq-answer">
        Business loan tenures can range from 12 months to 5 years. The tenure depends on the loan amount, the purpose of the loan, and your repayment capacity. Shorter tenures typically come with higher EMIs, while longer tenures reduce monthly payments but increase the overall interest paid.
    </div>
</div>
<!-- FAQ 9 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        How is my business loan eligibility determined?
    </div>
    <div class="faq-answer">
        Missing an EMI may result in <strong>late payment charges and penalties</strong>. It can also negatively impact your <strong>credit score</strong>, making it harder to get loans in the future. It is important to pay your EMIs on time or inform your lender if you face any difficulty.
    </div>
</div>

<!-- FAQ 10 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        Is there a processing fee for business loans?
    </div>
    <div class="faq-answer">
        Yes, you can apply for another personal loan even if you have an existing loan. Approval depends on your <strong>income, credit score, and repayment capacity</strong>. Lenders check whether you can comfortably manage multiple EMIs.
    </div>
</div>

<!-- FAQ 11 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">−</span>
        How can I improve my chances of getting a business loan?
    </div>
    <div class="faq-answer">
        To improve your chances of securing a business loan, ensure that your financial statements are up to date, you have a good credit score, and your business has been profitable for the past few years. It’s also beneficial to reduce existing debts before applying for a new loan.
    </div>
</div>

</div> 
</section>

<?php require_once __DIR__ . '/../components/apply-form-ui.php'; ?>
<?php require_once __DIR__ . '/../components/schedule_modal.php'; ?>
<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script src="/LoanExpertsWebsite/Website/js/main.js" defer></script>

</body>
</html>