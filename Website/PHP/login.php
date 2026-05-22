<?php
session_start();
?>
<style>
    /* Login Page */
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

    html, body {
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
      width: min(100%, 960px);
      padding: 20px;
    }

    .auth-card {
      background: var(--surface);
      border: 1px solid rgba(15, 23, 42, 0.08);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
      backdrop-filter: blur(18px);
      display: grid;
      grid-template-columns: 1.05fr 1fr;
      min-height: 540px;
    }

    .panel {
      padding: 42px 42px 34px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 22px;
      min-width: 320px;
    }

    .panel.brand {
      background: linear-gradient(180deg, rgba(37, 99, 235, 0.08), rgba(59, 130, 246, 0.04));
      border-right: 1px solid rgba(15, 23, 42, 0.04);
      align-items: center;
      text-align: center;
      padding: 46px 32px;
    }

    .brand-logo {
      width: 62px;
      height: 62px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
      color: white;
      font-weight: 700;
      font-size: 1.35rem;
      margin: 0 auto 24px;
      box-shadow: 0 16px 40px rgba(37, 99, 235, 0.18);
    }

    h1 {
      margin: 0;
      text-align: center;
      font-weight: 700;
      width: 100%;
    }
    header {
  width: 100%;
  text-align: center;
}
    .subtitle {
      margin: 0;
      color: var(--text-muted);
      line-height: 1.75;
      max-width: 340px;
      margin-inline: auto;
    }

    .panel.brand p {
      margin: 0;
      color: var(--text-muted);
      font-size: 0.98rem;
      max-width: 320px;
    }

    .panel.brand .feature-list {
      margin: 0;
      padding: 0;
      list-style: none;
      display: grid;
      gap: 12px;
      margin-top: 24px;
      width: 100%;
    }

    .feature-list li {
      display: flex;
      align-items: center;
      gap: 12px;
      color: var(--text-muted);
      font-size: 0.96rem;
    }

    .feature-list span {
      width: 18px;
      height: 18px;
      display: grid;
      place-items: center;
      border-radius: 50%;
      background: rgba(37, 99, 235, 0.12);
      color: #2563eb;
      font-size: 0.8rem;
    }

    .form-shell {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      position: relative;
    }

    .flow-panel {
      display: none;
      width: 100%;
      max-width: 440px;
      background: var(--surface);
      border: 1px solid rgba(15, 23, 42, 0.08);
      border-radius: 28px;
      box-shadow: 0 30px 80px rgba(15, 23, 42, 0.08);
      backdrop-filter: blur(18px);
      padding: 32px;
      gap: 20px;
    }

    .flow-panel.active {
      display: grid;
    }

    .flow-panel.hide-left {
      transform: translateX(-24px);
      opacity: 0;
    }

    label {
      font-size: 0.94rem;
      color: #334155;
      display: block;
      margin-bottom: 8px;
    }

    .input-group {
      display: grid;
      gap: 8px;
    }

    input[type="email"],
    input[type="password"],
    input[type="text"],
    input[type="tel"],
    input[type="number"] {
      width: 100%;
      border: 1px solid rgba(15, 23, 42, 0.12);
      background: var(--surface-strong);
      border-radius: 16px;
      padding: 15px 16px;
      font-size: 0.98rem;
      color: var(--text);
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    input:focus {
      outline: none;
      border-color: rgba(37, 99, 235, 0.65);
      box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
    }

    .password-field {
      position: relative;
      display: grid;
    }

    .password-toggle {
      position: absolute;
      right: 16px;
      top: 50%;
      transform: translateY(80%);
      border: none;
      background: none;
      color: #2563eb;
      font-weight: 600;
      cursor: pointer;
      font-size: 0.9rem;
      padding: 0;
    }

    .checkbox-row {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-top: 4px;
      color: #475569;
    }

    .checkbox-row input {
      accent-color: #2563eb;
      width: 18px;
      height: 18px;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    .text-link {
      color: #2563eb;
      text-decoration: none;
      font-size: 0.95rem;
      font-weight: 600;
    }

    .text-link:hover {
      text-decoration: underline;
    }

    button.primary,
    button.secondary {
      width: 100%;
      border: none;
      border-radius: 16px;
      padding: 15px 18px;
      font-size: 1rem;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
    }

    button.primary {
      background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
      color: white;
      box-shadow: 0 18px 30px rgba(37, 99, 235, 0.22);
    }

    button.primary:hover {
      transform: translateY(-1px);
      box-shadow: 0 20px 36px rgba(37, 99, 235, 0.24);
    }

    button.secondary {
      background: #f8fbff;
      color: #2563eb;
      border: 1px solid rgba(37, 99, 235, 0.16);
    }

    .hint-box,
    .status-card {
      border-radius: 18px;
      padding: 16px 18px;
      background: #f8fbff;
      border: 1px solid rgba(37, 99, 235, 0.12);
      color: #334155;
      font-size: 0.95rem;
    }

    .status-card {
      display: grid;
      gap: 14px;
      align-items: center;
    }

    .status-card strong {
      display: block;
      font-size: 1.02rem;
      color: #0f172a;
    }

    .status-card p {
      margin: 0;
      color: #475569;
      line-height: 1.6;
    }

    .form-footer {
      margin-top: 4px;
      color: #64748b;
      font-size: 0.91rem;
      text-align: center;
    }

    .error-text,
    .success-text {
      color: #dc2626;
      font-size: 0.92rem;
      min-height: 1.35rem;
    }

    .success-text {
      color: #0f766e;
    }

    .otp-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      width: 100%;
    }

    .otp-grid input {
      width: 100%;
      text-align: center;
      font-size: 1.15rem;
      letter-spacing: 0.16em;
      padding: 16px 10px;
      aspect-ratio: 1;
    }

    @media (max-width: 860px) {
      .auth-card {
        grid-template-columns: 1fr;
        min-height: auto;
      }

      .panel.brand {
        border-right: none;
      }
    }

    @media (max-width: 640px) {
      .page-shell {
        padding: 0;
      }

      .auth-card {
        border-radius: 24px;
      }

      .panel {
        padding: 30px 24px 28px;
      }
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loan Experts | Login</title>

  <!-- CSS (optimized preload) -->
  <link rel="preload" href="CSS/style.css" as="style" onload="this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="CSS/style.css"></noscript>

</head>
<body>
      <section class="panel">
        <div class="form-shell">
          <div id="loginPanel" class="flow-panel active">
            <form id="loginForm" action="javascript:void(0);">
              <header>
                <h1>Login</h1>
                <p class="subtitle">Securely access your loan dashboard</p>
              </header>

            <div class="error-text" id="loginError"></div>

            <div class="input-group">
              <label for="loginEmail">Email</label>
                <input id="loginEmail" name="email" type="email" placeholder="you@example.com" autocomplete="email" />
              </div>

              <div class="input-group password-field">
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="password" type="password" placeholder="Enter your password" autocomplete="current-password" />
                <button type="button" class="password-toggle" data-target="loginPassword">Show</button>
              </div>
            <label class="checkbox-row">
              <input id="loginHuman" type="checkbox" />
              <span>I'm not a robot</span>
            </label>

            <div class="actions">
              <a href="#" class="text-link" id="forgotTrigger">Forgot Password?</a>
              <button type="submit" class="primary" id="loginButton">Login</button>
            </div>
            </form>

            <div class="form-footer">Need help? Contact support at <strong>support@loanexperts.com</strong></div>
          </div>

          <div id="forgotPanel" class="flow-panel">
            <header>
              <h1>Forgot password?</h1>
              <p class="subtitle">Enter the email linked to your account and we’ll send a verification code.</p>
            </header>

            <div class="error-text" id="forgotError"></div>

            <div class="input-group">
              <label for="forgotEmail">Email</label>
              <input id="forgotEmail" type="email" placeholder="you@example.com" autocomplete="email" />
            </div>

            <button type="button" class="primary" id="sendOtpButton">Send OTP</button>
            <button type="button" class="secondary" id="backToLoginA">Back to Login</button>
          </div>

          <div id="otpPanel" class="flow-panel">
            <header>
              <h1>Verify your identity</h1>
              <p class="subtitle">Enter the 4-digit code we sent to your email.</p>
            </header>

            <div class="success-text" id="otpHint">A code has been sent to the email address you provided.</div>

            <div class="otp-grid">
              <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" />
              <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" />
              <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" />
              <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" />
            </div>

            <div class="error-text" id="otpError"></div>

            <button type="button" class="primary" id="verifyOtpButton">Verify OTP</button>
            <button type="button" class="secondary" id="backToLoginB">Back to Login</button>
          </div>

          <div id="resetPanel" class="flow-panel">
            <header>
              <h1>Reset your password</h1>
              <p class="subtitle">Create a new password to keep your account secure.</p>
            </header>

            <div class="error-text" id="resetError"></div>

            <div class="input-group password-field">
              <label for="newPassword">New password</label>
              <input id="newPassword" type="password" placeholder="Create new password" autocomplete="new-password" />
              <button type="button" class="password-toggle" data-target="newPassword">Show</button>
            </div>

            <div class="input-group password-field">
              <label for="confirmPassword">Confirm password</label>
              <input id="confirmPassword" type="password" placeholder="Confirm password" autocomplete="new-password" />
              <button type="button" class="password-toggle" data-target="confirmPassword">Show</button>
            </div>

            <button type="button" class="primary" id="resetButton">Reset password</button>
            <button type="button" class="secondary" id="backToLoginC">Back to Login</button>
          </div>

          <div id="successPanel" class="flow-panel">
            <div class="status-card">
              <div style="display:flex;align-items:center;gap:12px;"><span style="width:40px;height:40px;border-radius:50%;display:grid;place-items:center;background:#dcfce7;color:#047857;font-size:1.3rem;">✓</span><strong>Password updated</strong></div>
              <p>Your password has been reset successfully. Use your new credentials to login to Loan Experts.</p>
            </div>
            <button type="button" class="primary" id="returnToLogin">Back to Login</button>
          </div>
        </div>
        </section>
        </main>

  <script>
    const panels = {
      login: document.getElementById('loginPanel'),
      forgot: document.getElementById('forgotPanel'),
      otp: document.getElementById('otpPanel'),
      reset: document.getElementById('resetPanel'),
      success: document.getElementById('successPanel'),
    };

    const loginError = document.getElementById('loginError');
    const forgotError = document.getElementById('forgotError');
    const otpError = document.getElementById('otpError');
    const resetError = document.getElementById('resetError');

    const showPanel = (key) => {
      Object.values(panels).forEach(panel => panel.classList.remove('active'));
      panels[key].classList.add('active');
    };

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

    // Login form submission
    document.getElementById('loginForm').addEventListener('submit', (e) => {
      e.preventDefault();
      loginError.textContent = '';

      // Check if "I'm not a robot" checkbox is checked
      const humanCheckbox = document.getElementById('loginHuman');
      if (!humanCheckbox.checked) {
        loginError.textContent = 'Please confirm you are not a robot.';
        return;
      }

      const formData = new FormData(e.target);
      fetch('/LoanExpertsWebsite/Website/PHP/login_process.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        if (data === 'success') {
          window.location.href = '/LoanExpertsWebsite/Website/index.php';
        } else {
          loginError.textContent = data;
        }
      })
      .catch(error => {
        console.error('Error:', error);
        loginError.textContent = 'An error occurred. Please try again.';
      });
    });

    document.getElementById('forgotTrigger').addEventListener('click', (event) => {
      event.preventDefault();
      loginError.textContent = '';
      forgotError.textContent = '';
      showPanel('forgot');
    });

    ['backToLoginA', 'backToLoginB', 'backToLoginC', 'returnToLogin'].forEach(id => {
      document.getElementById(id).addEventListener('click', () => {
        loginError.textContent = '';
        forgotError.textContent = '';
        otpError.textContent = '';
        resetError.textContent = '';
        showPanel('login');
      });
    });

    document.getElementById('sendOtpButton').addEventListener('click', () => {
      const email = document.getElementById('forgotEmail').value.trim();
      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        forgotError.textContent = 'Enter a valid email to continue.';
        return;
      }
      forgotError.textContent = '';
      showPanel('otp');
    });

    const otpInputs = Array.from(document.querySelectorAll('#otpPanel input'));
    otpInputs.forEach((input, index) => {
      input.addEventListener('input', (event) => {
        const value = event.target.value.replace(/[^0-9]/g, '');
        event.target.value = value;
        if (value && index < otpInputs.length - 1) {
          otpInputs[index + 1].focus();
        }
      });
      input.addEventListener('keydown', (event) => {
        if (event.key === 'Backspace' && !event.target.value && index > 0) {
          otpInputs[index - 1].focus();
        }
      });
    });

    document.getElementById('verifyOtpButton').addEventListener('click', () => {
      const code = otpInputs.map(input => input.value).join('');
      if (code.length < 4) {
        otpError.textContent = 'Enter the 4-digit verification code.';
        return;
      }
      otpError.textContent = '';
      showPanel('reset');
    });

    document.getElementById('resetButton').addEventListener('click', () => {
      const newPassword = document.getElementById('newPassword').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
      if (newPassword.length < 8) {
        resetError.textContent = 'Password must be at least 8 characters.';
        return;
      }
      if (newPassword !== confirmPassword) {
        resetError.textContent = 'Passwords do not match.';
        return;
      }
      resetError.textContent = '';
      showPanel('success');
    });
  </script>
</body>
</html>
