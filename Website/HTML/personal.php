<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Personal Loan - Loan Experts</title>
<meta name="description" content="Get personal loans with fast approval, flexible eligibility, and competitive interest rates from Loan Experts. Apply easily for your financial needs today.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/LoanExpertsWebsite/Website/CSS/style.css">

</head>
<body>
<main id="main-content">

<!-- Header -->
 <?php require_once __DIR__ . '/../components/header.php'; ?>

<!-- ================= PERSONAL LOAN SECTION ================= -->
<section class="personal-loan">
    <h1 class="pl-heading">Personal Loan for Every Purpose</h1>

    <p class="pl-subtext">
        No matter what stage of life you're in, a personal loan can help you achieve your goals with ease.
        Here are just a few of the many ways a personal loan can support your journey.
    </p>

    <div class="pl-grid">
        <div class="pl-card">
            <img src="/LoanExpertsWebsite/Website/images/home-renovation-project-1024x683.webp" alt="Home Renovation" loading="lazy">
            <h3>Home Renovation</h3>
        </div>
        <div class="pl-card">
            <img src="/LoanExpertsWebsite/Website/images/wedmusk-wedding-7057465_1280.jpg" alt="Wedding" loading="lazy">
            <h3>Wedding Dreams</h3>
        </div>
        <div class="pl-card">
            <img src="/LoanExpertsWebsite/Website/images/pexels-pixabay-40568.jpg" alt="Medical Emergencies" loading="lazy">
            <h3>Medical Emergencies</h3>
        </div>
        <div class="pl-card">
            <img src="/LoanExpertsWebsite/Website/images/Higher-Education-660x330.jpeg.webp" alt="Education" loading="lazy">
            <h3>Higher Education</h3>
        </div>
        <div class="pl-card">
            <img src="/LoanExpertsWebsite/Website/images/travel.jpg" alt="Travel" loading="lazy">
            <h3>Travel & Vacation</h3>
        </div>
        <div class="pl-card">
            <img src="/LoanExpertsWebsite/Website/images/ronaldcandonga-job-5382501_1280.jpg" alt="Business Needs" loading="lazy">
            <h3>Business Needs</h3>
        </div>
    </div>
</section>
<!-- ================= Apply Now Button ================= -->
<div class="apply-btn-wrapper">
    <button class="apply-btn open-apply">Apply Now</button>
</div>

<!-- ================= WHO CAN APPLY ================= -->
<section class="who-apply">
    <h2 class="who-title">Who Can Apply for a Personal Loan?</h2>

    <p class="who-subtitle">
        We believe financial support should be accessible to everyone, regardless of their profession. Our personal loans are designed to cater to diverse financial needs, making them available to:
    </p>

    <div class="who-grid">
        <div class="who-card">
            <img src="/LoanExpertsWebsite/Website/images/vecteezy_portrait-of-happy-redhaired-woman-employee-in-optical_7486093.jpg" alt="Salaried Professionals" loading="lazy">
            <div class="who-card-content salaried-bg">
                <h3>Salaried Professionals</h3>
                <p>If you are employed with a regular monthly salary of 18K and above, you are eligible to apply for a personal loan. Use it to cover your personal expenses, home renovation, travel, or any unexpected financial need.</p>
            </div>
        </div>
        <div class="who-card">
            <img src="/LoanExpertsWebsite/Website/images/successful-entrepreneur-768x512.jpg" alt="Business Owners" loading="lazy">
            <div class="who-card-content business-bg">
                <h3>Business Owners</h3>
                <p>Running a business comes with its own set of challenges. Business owners can use personal loans to address both personal and small business-related needs, ensuring financial stability during times of growth or unexpected events.</p>
            </div>
        </div>
        <div class="who-card">
            <img src="/LoanExpertsWebsite/Website/images/happy-mature-couple-using-mobile-phone-having-fun-while-taking-selfie.jpg" alt="Pensioners" loading="lazy">
            <div class="who-card-content pension-bg">
                <h3>Pensioners</h3>
                <p>Even after retirement, expenses do not stop. Pensioners can apply for personal loans to meet medical, family, or personal expenses with simple eligibility criteria.</p>
            </div>
        </div>
    </div>
</section>
<!-- ================= Consultation Button ================= -->
<div class="cta-container">
  <a href="#" class="consult-btn cta-btn consultation-btn">
    Schedule a Free Consultation
  </a>
</div>

<!-- ================= ELIGIBILITY ================= -->
<section class="eligibility-section">
  <div class="inner-container">
    <h2 class="section-title">Eligibility Criteria</h2>

    <div class="eligibility-wrapper">
      <div class="eligibility-container <?php echo !isset($_SESSION['user_id']) ? 'blur-content' : ''; ?>">
        <div class="eligibility-card">
            <p><strong>1. Age Requirement:</strong> Applicants must be between 21 and 60 years of age. This ensures that you are in an income-earning bracket to repay the loan.</p>
            <p><strong>2. Minimum Income Level:</strong></p>
            <ul>
                <li><strong>Salaried Professionals:</strong> You must have a minimum monthly income of ₹18,000.</li>
                <li><strong>Self-Employed Professionals:</strong> You should have a stable income sufficient to manage the loan repayment comfortably.</li>
            </ul>
            <p><strong>3. Employment Type:</strong> Salaried individuals, self-employed professionals, and business owners are eligible to apply. Your employment type helps us understand your financial profile.</p>
        </div>

        <div class="eligibility-card">
            <p><strong>4. Work Experience or Business Vintage:</strong></p>
            <ul>
                <li><strong>Salaried Individuals:</strong> Minimum 1 year of work experience is required.</li>
                <li><strong>Self-Employed Individuals and Business Owners:</strong> Minimum of 2 years of consistent business operation or professional practice.</li>
            </ul>
            <p><strong>5. Credit Score:</strong> A minimum credit score of 700 is recommended. A good credit score helps you secure better interest rates and higher loan amounts.</p>
            <p><strong>6. Residency Status:</strong> Applicants must be Indian residents.</p>
            <p><strong>7. Bank Account:</strong> You need to have an active bank account with a reputable bank, which will be used for disbursal and repayments.</p>
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
        <div class="faq-item active">
            <div class="faq-question">
                <span class="faq-icon">−</span>
                What is a Personal Loan?
            </div>
            <div class="faq-answer">
                A personal loan is an unsecured loan that can be used for a variety of personal purposes, such as paying for medical expenses, home renovations, weddings, vacations, or any other financial need. You do not need to provide any collateral or security to avail of a personal loan.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                Who is eligible to apply for a personal loan?
            </div>
            <div class="faq-answer">
                Anyone between the age of <strong>21-60 years</strong> with a regular source of income can apply for a personal loan. This includes salaried professionals, self-employed individuals, business owners, and even pensioners, depending on income stability.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                How much loan amount can I get as a personal loan?
            </div>
            <div class="faq-answer">
                The loan amount you can receive depends on your <strong>monthly income, credit score, existing financial obligations, and repayment capacity</strong>. Generally, personal loans range from <strong>₹50,000 to ₹20 lakhs</strong>. Higher income and a strong credit profile increase your chances of getting a higher loan amount with better interest rates.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                What documents do I need to apply for a personal loan?
            </div>
            <div class="faq-answer">
                You typically need <strong>identity proof (Aadhaar/PAN), address proof, income proof (salary slips or ITR), bank statements (last 3–6 months), and passport-size photographs</strong>. Additional documents may be required depending on your profile and lender.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                How long does it take to process a personal loan?
            </div>
            <div class="faq-answer">
                Personal loans are usually processed quickly. Once documents are verified and approved, the loan amount can be disbursed within <strong>24 hours to 3 working days</strong>, depending on the lender and your eligibility.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                What is the interest rate for a personal loan?
            </div>
            <div class="faq-answer">
                Personal loan interest rates generally start from around <strong>10% per annum</strong> and may vary based on your <strong>credit score, income, employment type, and lender policies</strong>. A higher credit score can help you get lower interest rates.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                Can I repay my loan early?
            </div>
            <div class="faq-answer">
                Yes, most lenders allow <strong>prepayment or foreclosure</strong> of personal loans. However, some lenders may charge a <strong>small prepayment or foreclosure fee</strong>. It is advisable to check the lender’s terms before applying.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                How is my EMI calculated?
            </div>
            <div class="faq-answer">
                Your EMI depends on three factors: <strong>loan amount, interest rate, and repayment tenure</strong>. EMI is calculated using a standard formula that ensures equal monthly payments over the loan period. You can also use an EMI calculator to estimate your monthly payment easily.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                What happens if I miss an EMI payment?
            </div>
            <div class="faq-answer">
                Missing an EMI may result in <strong>late payment charges and penalties</strong>. It can also negatively impact your <strong>credit score</strong>, making it harder to get loans in the future. It is important to pay your EMIs on time or inform your lender if you face any difficulty.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                Can I take a personal loan if I have an existing loan?
            </div>
            <div class="faq-answer">
                Yes, you can apply for another personal loan even if you have an existing loan. Approval depends on your <strong>income, credit score, and repayment capacity</strong>. Lenders check whether you can comfortably manage multiple EMIs.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                Are there any hidden charges?
            </div>
            <div class="faq-answer">
                No, we are transparent about our fees and charges. There are <strong>no hidden charges</strong>. Any applicable fees such as <strong>processing fees, prepayment charges, or late payment penalties</strong> are clearly communicated at the time of loan approval.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-icon">+</span>
                What are the repayment options available?
            </div>
            <div class="faq-answer">
                You can repay your loan through <strong>EMI payments</strong>, either via <strong>post-dated cheques</strong>, <strong>Electronic Clearing Service (ECS)</strong>, or by setting up an <strong>auto-debit</strong> from your bank account.
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