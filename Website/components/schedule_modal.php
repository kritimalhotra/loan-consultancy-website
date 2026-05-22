<!-- Consultation Popup Form -->
<div id="consultModal" class="consult-modal">

  <div class="consult-box">

    <span class="close-consult">&times;</span>

    <!-- FORM SECTION -->
    <div id="consultFormSection">

      <h2>Schedule a Free Consultation</h2>
      <p>Enter your details</p>

      <form id="consultForm" class="consult-form" method="POST">

        <div class="name-row">
          <input 
          type="text"
          name="firstName"
          placeholder="First Name"
          pattern="[A-Za-z]+" 
          title="Only alphabets allowed"
    required>
  <input
  type="text"
  name="lastName"
  placeholder="Last Name"
  pattern="[A-Za-z]+" 
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

        <input
        type="date"
        id="callDate"
        name="appointment_date"
        required
        > 

        <input 
        id="consultTime"
        name="appointment_time"
        type="time"
        min="10:00"
        max="18:00"
        required>

        <button type="submit" id="submitBtn">Submit</button>

      </form>

    </div>

    <!-- SUCCESS MESSAGE -->
    <div id="thankYouMessage" class="thank-you-card" style="display:none;">

      <img src="/LoanExpertsWebsite/Website/images/Tick.gif" class="success-gif">

      <h2>Success!</h2>

      <p>
        Your consultation call has been scheduled. Our experts will connect with you at your selected date and time.
      </p>

      <button onclick="closeConsultForm()">Close</button>

    </div>

  </div>

</div>