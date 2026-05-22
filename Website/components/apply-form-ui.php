<!-- Apply Now Popup Form -->
<div id="applyForm" class="form-popup">

  <div class="form-container">

    <span class="close-apply">&times;</span>

    <!-- FORM SECTION -->
    <div id="formSection">

      <h2>Query Form</h2>

      <form id="loanForm" method="POST" action="/apply_form.php">

        <div class="name-row">
          <input 
          type="text"
          name="firstName"
          placeholder="First Name"
          pattern="[A-Za-z ]+" 
          title="Only alphabets allowed"
    required>
  <input
  type="text"
  name="lastName"
  placeholder="Last Name"
  pattern="[A-Za-z ]+" 
    title="Only alphabets allowed"
    required>
</div>
 <input 
        type="tel"
        name="phone"
        placeholder="Enter Phone Number"
        pattern="[0-9]{10}"
        maxlength="10"
        inputmode="numeric"
        required
        oninvalid="this.setCustomValidity('Please enter a valid 10 digit number')"
        oninput="this.setCustomValidity('')">
        <input type="email" name="email" placeholder="Email Address">

        <select  name="loanType" required>
          <option value="" disabled selected>Select an Option</option>
          <option value="personal">Personal Loan</option>
<option value="business">Business Loan</option>
<option value="housing">Housing Loan</option>
<option value="lap">Loan Against Property</option>
<option value="education">Education Loan</option>
<option value="project">Project Loan</option>
        </select>

        <textarea name="query" placeholder="Your Query"></textarea>

        <button type="submit" class="submit-btn">Submit</button>

      </form>

    </div>


    <!-- SUCCESS MESSAGE -->
    <div id="success-message" class="thank-you-card" style="display:none;">

      <img src="/LoanExpertsWebsite/Website/images/Tick.gif" class="success-gif">

      <h2>Application Submitted Successfully</h2>

      <p>
        Thank you for submitting your request. Our experts will review your
        details and contact you shortly.
      </p>

      <button id="closeSuccessBtn" type="button">Close</button>

    </div>

  </div>

</div>