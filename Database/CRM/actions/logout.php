<?php
session_start();

// End the current CRM session and show a logout confirmation.
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out — Loan Experts CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: grid;
            place-items: center;
            background: linear-gradient(180deg, #eef6ff 0%, #f8fbff 100%);
            color: #102a43;
        }
        .logout-popup {
            width: min(480px, calc(100% - 32px));
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 32px 80px rgba(16, 42, 67, 0.12);
            overflow: hidden;
            border: 1px solid rgba(15, 118, 232, 0.12);
        }
        .logout-header {
            padding: 32px 28px 20px;
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
            display: grid;
            place-items: center;
        }
        .logout-icon {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            background: linear-gradient(135deg, #7dd3fc 0%, #0ea5e9 100%);
            display: grid;
            place-items: center;
            box-shadow: 0 18px 40px rgba(14, 165, 233, 0.26);
            color: #fff;
            font-size: 2.75rem;
            line-height: 1;
        }
        .logout-body {
            padding: 28px;
            text-align: center;
        }
        .logout-body h1 {
            margin: 0 0 14px;
            font-size: 1.75rem;
            font-weight: 700;
            color: #0f172a;
        }
        .logout-body p {
            margin: 0 0 28px;
            color: #475569;
            line-height: 1.7;
            font-size: 1rem;
        }
        .logout-btn {
            width: 100%;
            padding: 14px 18px;
            background: #0ea5e9;
            color: #ffffff;
            border: none;
            border-radius: 14px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.2s ease;
        }
        .logout-btn:hover {
            background: #0284c7;
            transform: translateY(-1px);
        }
        .logout-footer {
            padding: 0 28px 28px;
        }
        @media (max-width: 520px) {
            .logout-header {
                padding: 24px 20px 18px;
            }
            .logout-body {
                padding: 22px 20px 24px;
            }
        }
    </style>
</head>
<body>
    <section class="logout-popup" role="dialog" aria-labelledby="logoutTitle" aria-describedby="logoutDescription">
        <div class="logout-header">
            <div class="logout-icon" aria-hidden="true">✓</div>
        </div>
        <div class="logout-body">
            <h1 id="logoutTitle">You have been logged out</h1>
        </div>
        <div class="logout-footer">
            <button type="button" class="logout-btn" id="logoutOkBtn">OK</button>
        </div>
    </section>

    <script>
        document.getElementById('logoutOkBtn').addEventListener('click', function () {
    window.location.href = '../admin/loginUI.php';
});

document.addEventListener('keydown', function (event) {
    if (event.key === 'Enter' || event.key === 'Escape') {
        window.location.href = '../admin/loginUI.php';
    }
});
    </script>
</body>
</html>
