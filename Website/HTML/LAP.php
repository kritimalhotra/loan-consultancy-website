<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loan Against Property - Loan Experts</title>
<meta name="description" content="Get Loan Against Property with low interest rates, high loan amounts, and flexible repayment options from Loan Experts. Unlock your property's value today.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/LoanExpertsWebsite/Website/CSS/style.css">
</head>
<body>
<main id="main-content">

<!-- Header -->
   <?php require_once __DIR__ . '/../components/header.php'; ?>

<!-- Loan Against Property Section -->
<section class="lap-section">

    <h1 class="lap-title">Finance Your Future with Property</h1>

    <p class="lap-subtitle">
        Your property holds tremendous value, and with a <strong>Loan Against Property (LAP)</strong>
from <strong>Loan Experts</strong>, you can unlock that value to meet your financial goals.
Whether you need funds for business expansion, education, medical expenses, or personal milestones,
a Loan Against Property provides the perfect solution. By leveraging the equity in your
residential, commercial, or industrial property, you can secure a significant loan amount
with flexible repayment options and competitive interest rates.
    </p>

    <!-- Cards Container -->
    <div class="lap-container">

        <!-- Card 1 -->
        <div class="lap-feature-card">
            <img src="/LoanExpertsWebsite/Website/images/value.jfif" alt="Leverage the Value of Your Property">
            <h3>Leverage the Value of Your Property</h3>
        </div>

        <!-- Card 2 -->
        <div class="lap-feature-card">
            <img src="/LoanExpertsWebsite/Website/images/low.jpg" alt="Lower Interest Rates">
            <h3>Lower Interest Rates</h3>
        </div>

        <!-- Card 3 -->
        <div class="lap-feature-card">
            <img src="/LoanExpertsWebsite/Website/images/flexi.jfif" alt="Flexible Repayment Terms">
            <h3>Flexible Repayment Terms</h3>
        </div>

    </div>

</section>
<div class="apply-btn-wrapper">
    <button class="apply-btn open-apply">Apply Now</button>
</div>

<section class="who-apply">

<h2 class="who-title">Who Can Apply for a Loan Against Property?</h2>

<p class="who-subtitle">
At <b>Loan Experts</b>, we offer Loan Against Property (LAP) to a wide range of individuals
who need access to large sums of money by leveraging their property.
If you fall under any of the following categories, you are eligible to apply
for a Loan Against Property:
</p>

<div class="lap-container">

    <!-- Card 1 -->
    <div class="lap-card">
        <img src="/LoanExpertsWebsite/Website/images/salary.avif">
        <div class="card-content salaried">
            <h3>Salaried Professionals</h3>
            <p>
            If you are employed with a steady income from a government organization,
private company, or multinational corporation, you may qualify for a
Loan Against Property based on your salary and repayment capacity.
            </p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="lap-card">
        <img src="/LoanExpertsWebsite/Website/images/self.jfif">
        <div class="card-content self">
            <h3>Self-Employed Individuals</h3>
            <p>
            Entrepreneurs, freelancers, consultants, or professionals such as
doctors, architects, and chartered accountants can apply for LAP
using their residential or commercial property as collateral.
            </p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="lap-card">
        <img src="/LoanExpertsWebsite/Website/images/business.jfif">
        <div class="card-content business">
            <h3>Business Owners</h3>
            <p>
            Business owners with stable revenue streams can leverage their
commercial, industrial, or residential property to secure funding
for expansion, working capital, or other financial needs.
            </p>
        </div>
    </div>

</div>

</section>

 <!-- Schedule consultation Button -->
<div class="cta-container">
  <a href="#" class="consult-btn cta-btn" onclick="openAppointment('consultation'); return false;">
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

<p><strong>1. Age Requirement:</strong> The applicant must be between 
<strong>21 and 65 years</strong> of age at the time of loan maturity.</p>

<p><strong>2. Income Level:</strong></p>

<ul>
<li><strong>Salaried Professionals:</strong> Must have a stable monthly income with a minimum of ₹25,000.</li>

<li><strong>Self-Employed Individuals:</strong> Must show consistent earnings over the last <strong>2 years</strong>, with adequate proof of income.</li>

<li><strong>Property Ownership:</strong> The property being mortgaged must be owned by the applicant and should be either residential, commercial, or industrial with clear title ownership.</li>
</ul>

<p><strong>3. Credit Score:</strong> A credit score of 
<strong>650 or above</strong> is recommended to improve approval chances and secure better interest rates.</p>

</div>

<!-- RIGHT CARD -->
<div class="eligibility-card">

<p><strong>5. Business Vintage (for Self-Employed):</strong> 
For self-employed professionals and business owners, a minimum of 
<strong>2 years</strong> of stable business operations is required.</p>

<p><strong>6. Property Location:</strong> 
The property must be located within <strong>India</strong> and meet all regulatory and legal requirements.</p>

<p><strong>7. Debt to Income Ratio:</strong> 
Your total monthly debt payments should not exceed 
<strong>50% of your monthly income</strong>.</p>

<p><strong>8. Loan-to-Value Ratio:</strong> 
You can typically borrow up to 
<strong>60-70% of the market value</strong> of your property.</p>
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
<section class="faq-section">

    <h2 class="faq-title">Frequently Asked Questions - FAQs</h2>

    <div class="faq-container">

        <!-- FAQ 1 (Open by default) -->
        <div class="faq-item active">

            <div class="faq-question">
                <span class="faq-icon">−</span>
                What is a Loan Against Property?
            </div>

            <div class="faq-answer">
                A Loan Against Property (LAP) is a secured loan where you can use your
residential, commercial, or industrial property as collateral to secure funds.
You retain ownership of the property, and the loan amount is determined based
on the market value of the property.
            </div>

        </div>


        <!-- FAQ 2 -->
        <div class="faq-item">

            <div class="faq-question">
                <span class="faq-icon">+</span>
                How much can I borrow against my property?
            </div>

            <div class="faq-answer">
               Most lenders offer loans up to <strong>60%–70% of the market value</strong>
of the property depending on the type, location, and condition of the property
as well as your repayment capacity.
            </div>

        </div>

        <!-- FAQ 3 -->
        <div class="faq-item">

            <div class="faq-question">
                <span class="faq-icon">+</span>
                What types of properties are accepted for a Loan Against Property?
            </div>

            <div class="faq-answer">
                You can pledge residential, commercial, or industrial property that has
clear legal ownership and meets the lender’s valuation and documentation
requirements.
            </div>
            </div>
            <!-- FAQ 4 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        What can the loan be used for?
    </div>
    <div class="faq-answer">
        Loan Against Property can be used for multiple purposes such as business
expansion, education, medical expenses, debt consolidation, home renovation,
or other major financial needs.
    </div>
</div>

<!-- FAQ 5 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        What is the interest rate for a Loan Against Property?
    </div>
    <div class="faq-answer">
        Interest rates vary depending on the lender and your credit profile,
but typically range between <strong>8% to 12%</strong> per year.
    </div>
</div>

<!-- FAQ 6 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        What is the tenure for repaying a Loan Against Property?
    </div>
    <div class="faq-answer">
        The repayment tenure usually ranges from <strong>10 to 20 years</strong>,
depending on the lender and your repayment capacity.
    </div>
</div>

<!-- FAQ 7 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        Can I prepay my Loan Against Property?
    </div>
    <div class="faq-answer">
        Yes, most lenders allow prepayment or foreclosure of a Loan Against Property.
Some banks may charge a small prepayment fee depending on the loan agreement.
    </div>
</div>

<!-- FAQ 8 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        How is my eligibility for a Loan Against Property determined?
    </div>
    <div class="faq-answer">
        Eligibility depends on several factors including your income, credit score,
existing liabilities, property value, employment stability, and repayment
capacity.
</div>
<!-- FAQ 9 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
       What documents are required to apply for a Loan Against Property?
    </div>
    <div class="faq-answer">
        Common documents include identity proof, address proof, income proof,
bank statements, property documents, and income tax returns depending
on whether you are salaried or self-employed.
    </div>
</div>

<!-- FAQ 10 -->
<div class="faq-item">
    <div class="faq-question">
        <span class="faq-icon">+</span>
        Can NRIs apply for a Loan Against Property?
    </div>
    <div class="faq-answer">
        Yes, Non-Resident Indians (NRIs) can apply for a Loan Against Property
in India provided they meet the lender's eligibility requirements and
submit the necessary documentation.
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