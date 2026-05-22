<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loan Experts | Sign Up</title>
  <style>
    :root {
      color-scheme: light;
      font-family: Inter, "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
      --bg: #eef6ff;
      --surface: #ffffff;
      --surface-strong: #f8fbff;
      --text: #0f172a;
      --text-muted: #53627f;
      --primary: #2563eb;
      --primary-soft: #eff6ff;
      --border: rgba(41, 98, 255, 0.12);
      --shadow: 0 30px 80px rgba(15, 23, 42, 0.08);
      --radius: 28px;
    }

    * {
      box-sizing: border-box;
    }

    html,
    body {
      min-height: 100%;
      margin: 0;
      background: radial-gradient(circle at top, rgba(37, 99, 235, 0.16), transparent 28%),
                  linear-gradient(180deg, #e8f1ff 0%, #eef6ff 100%);
      color: var(--text);
    }

    body {
      display: grid;
      place-items: center;
      padding: 24px;
    }

    .page-shell {
      width: min(100%, 440px);
    }

    .auth-card {
      background: var(--surface);
      border: 1px solid rgba(15, 23, 42, 0.08);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
      backdrop-filter: blur(18px);
      min-height: 520px;
    }

    form,
    #otpSection {
      display: grid;
      gap: 20px;
      padding: 32px;
    }

    #otpSection.hidden {
      display: none;
    }

    form.hidden {
      display: none;
    }

    header {
      text-align: center;
      display: grid;
      gap: 12px;
    }

    h1 {
      margin: 0;
      text-align: center;
      font-size: clamp(2rem, 2.5vw, 2.4rem);
      font-weight: 700;
    }

    .subtitle {
      margin: 0;
      color: var(--text-muted);
      line-height: 1.75;
      font-size: 1rem;
      max-width: 320px;
      margin-inline: auto;
    }
    input {
  font-size: 0.98rem;
}
    .input-group {
      display: grid;
      gap: 8px;
    }

    label {
      font-size: 0.94rem;
      color: #334155;
      display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      border: 1px solid rgba(15, 23, 42, 0.12);
      background: var(--surface-strong);
      border-radius: 16px;
      padding: 15px 16px;
      font-size: 1rem;
      color: var(--text);
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    input:focus {
      outline: none;
      border-color: rgba(37, 99, 235, 0.65);
      box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
    }
    .password-field input {
  padding-right: 60px;
  position: relative;
  z-index: 1;
}
    .password-field {
      position: relative;
      display: grid;
    }

    .password-toggle {
      position: absolute;
      z-index: 2;
      pointer-events: auto;
      right: 16px;
      top: 50%;
      transform: translateY(10%);
      border: none;
      background: transparent;
      color: #2563eb;
      font-weight: 600;
      cursor: pointer;
      font-size: 0.94rem;
      padding: 0;
    }

    .otp-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 12px;
    }

    .otp-grid input {
      text-align: center;
      font-size: 1.2rem;
      letter-spacing: 0.16em;
      padding: 18px;
    }

    .actions {
      display: grid;
      gap: 14px;
    }

    button.primary {
      width: 100%;
      height: 52px;
      border: none;
      border-radius: 16px;
      padding: 0 18px;
      font-size: 1rem;
      font-weight: 700;
      color: white;
      background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
      box-shadow: 0 18px 30px rgba(37, 99, 235, 0.22);
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    button.primary:hover {
      transform: translateY(-1px);
      background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
    }
    .error-text {
  color: #dc2626;
  font-size: 0.85rem;
  margin-top: 4px;
}
    .form-footer {
      margin: 0;
      color: var(--text-muted);
      font-size: 0.95rem;
      text-align: center;
    }

    .text-link {
      color: #2563eb;
      text-decoration: none;
      font-weight: 600;
    }

    .text-link:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      body {
        padding: 16px;
      }

      form {
        padding: 24px;
      }

      .auth-card {
        border-radius: 24px;
      }
    }
  </style>
</head>
<body>
  <div class="page-shell">
    <div class="auth-card">
      <form id="signupForm" action="javascript:void(0);">
        <header>
          <h1>Create Account</h1>
          <p class="subtitle">Start your smarter loan journey with Loan Experts.</p>
        </header>

        <div class="error-text" id="generalError"></div>

        <div class="input-group">
          <label for="fullName">Full Name</label>
          <input id="fullName" name="fullName" type="text" placeholder="Jane Doe" autocomplete="name" />
          <div class="error-text" id="fullNameError"></div>
        </div>

        <div class="input-group">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="you@example.com" autocomplete="email" />
          <div class="error-text" id="emailError"></div>
        </div>

        <div class="input-group password-field">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="Create a password" autocomplete="new-password" />
          <button type="button" class="password-toggle" data-target="password">Show</button>
          <div class="error-text" id="passwordError"></div>
        </div>

        <div class="input-group password-field">
          <label for="confirmPassword">Confirm Password</label>
          <input id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm your password" autocomplete="new-password" />
          <div class="error-text" id="confirmPasswordError"></div>
        </div>

        <div class="actions">
          <button type="submit" class="primary">Create Account</button>
        </div>

        <p class="form-footer">Already have an account? <a href="/LoanExpertsWebsite/Website/HTML/login.php" class="text-link">Login</a></p>
      </form>

      <!-- OTP Verification Section -->
      <div id="otpSection" class="hidden">
        <header>
          <h1>Verify Your Email</h1>
          <p class="subtitle">Enter the 6-digit code sent to your email</p>
        </header>

        <div class="error-text" id="otpError"></div>

        <div class="otp-grid">
          <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp1" />
          <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp2" />
          <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp3" />
          <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp4" />
          <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp5" />
          <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp6" />
        </div>

        <div class="actions">
          <button type="button" class="primary" id="verifyOtpButton">Verify OTP</button>
        </div>

        <p class="form-footer">Didn't receive the code? <a href="#" class="text-link" id="resendOtp">Resend</a></p>
      </div>
    </div>
  </div>

  <script>
    const form = document.getElementById('signupForm');
    const otpSection = document.getElementById('otpSection');
    const fields = {
      fullName: document.getElementById('fullName'),
      email: document.getElementById('email'),
      password: document.getElementById('password'),
      confirmPassword: document.getElementById('confirmPassword'),
    };

    const errors = {
      fullName: document.getElementById('fullNameError'),
      email: document.getElementById('emailError'),
      password: document.getElementById('passwordError'),
      confirmPassword: document.getElementById('confirmPasswordError'),
      general: document.getElementById('generalError'),
      otp: document.getElementById('otpError'),
    };

    const clearErrors = () => {
      Object.values(errors).forEach(el => {
        el.textContent = '';
      });
    };

    const validateEmail = value => /^[\w.%+-]+@[\w.-]+\.[A-Za-z]{2,}$/i.test(value);

    // Password toggle with event delegation
    document.addEventListener('click', (e) => {
      if (e.target.classList.contains('password-toggle')) {
        e.preventDefault();
        const targetId = e.target.dataset.target;
        const targetInput = document.getElementById(targetId);
        if (targetInput) {
          const isPassword = targetInput.type === 'password';
          targetInput.type = isPassword ? 'text' : 'password';
          e.target.textContent = isPassword ? 'Hide' : 'Show';
        }
      }
    });

    const otpInputs = Array.from(document.querySelectorAll('.otp-grid input'));
    otpInputs.forEach((input, index) => {
      input.addEventListener('input', (e) => {
        if (e.target.value && index < otpInputs.length - 1) {
          otpInputs[index + 1].focus();
        }
      });
      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && !e.target.value && index > 0) {
          otpInputs[index - 1].focus();
        }
      });
    });

    form.addEventListener('submit', event => {
      event.preventDefault();
      clearErrors();
      console.log("Form submitted"); // 🔥 ADD THIS

      let valid = true;
      const fullNameValue = fields.fullName.value.trim();
      const emailValue = fields.email.value.trim();
      const passwordValue = fields.password.value;
      const confirmPasswordValue = fields.confirmPassword.value;

      if (!fullNameValue) {
        errors.fullName.textContent = 'Please enter your full name.';
        valid = false;
      }

      if (!emailValue) {
        errors.email.textContent = 'Please enter your email address.';
        valid = false;
      } else if (!validateEmail(emailValue)) {
        errors.email.textContent = 'Enter a valid email address.';
        valid = false;
      }

      if (!passwordValue) {
        errors.password.textContent = 'Please create a password.';
        valid = false;
      }

      if (!confirmPasswordValue) {
        errors.confirmPassword.textContent = 'Please confirm your password.';
        valid = false;
      } else if (passwordValue && passwordValue !== confirmPasswordValue) {
        errors.confirmPassword.textContent = 'Passwords do not match.';
        valid = false;
      }

      if (!valid) {
        return;
      }

      // Submit via AJAX
      const formData = new FormData(form);
      console.log("Sending request...");
      fetch('/LoanExpertsWebsite/Website/PHP/signup_process.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        data = data.trim();
        if (data === 'otp_sent' || data === 'otp_already_sent') {
          form.classList.add('hidden');
          otpSection.classList.remove('hidden');
          otpInputs[0].focus();
        } else {
          errors.general.textContent = data;
        }
      })
      .catch(error => {
        console.error('Error:', error);
        errors.general.textContent = 'An error occurred. Please try again.';
      });
    });

    // Verify OTP
    document.getElementById('verifyOtpButton').addEventListener('click', () => {
      const otp = otpInputs.map(input => input.value).join('');

      if (otp.length !== 6) {
        errors.otp.textContent = 'Please enter the complete 6-digit code.';
        return;
      }

      const formData = new FormData();
      formData.append('otp', otp);

      fetch('/LoanExpertsWebsite/Website/PHP/verify_otp.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        if (data === 'success') {
          alert("Account created successfully!");
          setTimeout(() => {
            window.location.href = "/LoanExpertsWebsite/Website/PHP/login.php";
          }, 1500);
        } else {
          errors.otp.textContent = data;
        }
      })
      .catch(error => {
        console.error('Error:', error);
        errors.otp.textContent = 'An error occurred. Please try again.';
      });
    });

    // Resend OTP
    document.getElementById('resendOtp').addEventListener('click', (e) => {
      e.preventDefault();
      alert("Please use the latest OTP sent");
    });
  </script>
</body>
</html>