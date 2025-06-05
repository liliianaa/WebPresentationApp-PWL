<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background: linear-gradient(135deg, #7b2ff7 0%, #f107a3 100%);
            font-family: 'Poppins', sans-serif;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }


        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-box {
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            position: relative;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 50px;
            height: 50px;
        }

        .login-title {
            font-weight: 700;
            font-size: 24px;
            color: #012970;
            text-align: center;
        }

        .login-subtitle {
            text-align: center;
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 10px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #4154f1;
            box-shadow: 0 0 0 0.2rem rgba(65, 84, 241, 0.25);
        }

        .btn-login {
            background-color: #4154f1;
            color: #fff;
            border-radius: 10px;
            font-weight: 600;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #1a2aff;
        }

        .footer-text {
            font-size: 13px;
            color: #f0f0f0;
            text-align: center;
            margin-top: 30px;
        }

        .footer-text a {
            color: #ffffff;
            text-decoration: underline;
        }

        .register-text {
            text-align: center;
            font-size: 14px;
            margin-top: 15px;
            color: #6c757d;
        }

        .register-text a {
            color: #4154f1;
            font-weight: 500;
            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Logo" class="logo">
            <h5 class="login-title">Login to Your Account</h5>
            <p class="login-subtitle">Enter your email & password to login</p>

            <form method="post" action="/login">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-login w-100">Login</button>
            </form>
        </div>
    </div>

    <p class="footer-text">Designed by <a href="https://bootstrapmade.com" target="_blank">BootstrapMade</a></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>