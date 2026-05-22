<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Experts CRM - Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 0 25px rgba(0, 123, 255, 0.4);
            animation: fadeIn 0.6s ease-in-out;
        }
        .login-card:hover {
    box-shadow: 0 0 35px rgba(0, 123, 255, 0.6);
    transition: 0.3s;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
        .company-title {
            color: white;
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            font-weight: bold;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            border-radius: 8px;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
        }
        .btn-login {
    background: linear-gradient(135deg, #00c6ff, #0072ff);
    border: none;
    border-radius: 10px;
    padding: 0.75rem;
    font-weight: 600;
    transition: 0.3s;
}

.btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(255, 255, 255, 0.3);
}
        .error-message {
            color: #ff6b6b;
            background: rgba(255, 0, 0, 0.1);
            border: 1px solid rgba(255, 0, 0, 0.3);
            border-radius: 5px;
            padding: 0.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .input-group {
            position: relative;
        }
        .input-group .btn {
    border-left: none;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="login-card">
                    <h1 class="company-title">Loan Experts</h1>
<p class="text-center text-light">Admin Dashboard</p>
                    <?php if (isset($_GET['error'])): ?>
                        <div class="error-message">
                            <?php echo htmlspecialchars($_GET['error']); ?>
                        </div>
                    <?php endif; ?>
                    <form action="../actions/loginbackend.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
    <label for="password" class="form-label text-white">Password</label>

    <div class="input-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>

        <button type="button" class="btn btn-outline-light border-0" onclick="togglePassword()">
            <i id="eye-icon" class="bi bi-eye"></i>
        </button>
    </div>
</div>
                        <div class="text-center">
    <button type="submit" class="btn btn-login px-4">Login</button>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
function togglePassword() {
    const passwordField = document.getElementById('password');
    const eyeIcon = document.getElementById('eye-icon');

    const isPassword = passwordField.type === 'password';

    passwordField.type = isPassword ? 'text' : 'password';

    eyeIcon.classList.toggle('bi-eye');
    eyeIcon.classList.toggle('bi-eye-slash');

    passwordField.focus();
}
</script>
</body>
</html>