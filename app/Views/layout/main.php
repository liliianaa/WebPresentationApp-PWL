<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Based Presentation App</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(to bottom right, #a855f7, #9333ea);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;

        }


        .navbar-classy {
            background-color: #ffffff;
            padding: 1rem 0;
            position: relative;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .navbar-classy::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #7b2ff7, #f107a3);
        }

        .navbar-classy .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #004b8d;
            text-decoration: none;
        }

        .navbar-classy .nav-link,
        .logout-btn {
            color: #333333;
            font-weight: 500;
            position: relative;
            padding: 0.5rem 0.75rem;
            transition: color 0.3s ease;
        }

        .navbar-classy .nav-link::after,
        .logout-btn::after {
            content: "";
            position: absolute;
            bottom: 4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #f107a3;
            transition: width 0.3s ease;
        }

        .navbar-classy .nav-link:hover,
        .logout-btn:hover {
            color: #f107a3;
        }

        .navbar-classy .nav-link:hover::after,
        .logout-btn:hover::after {
            width: 100%;
        }


        main {
            flex: 1;
            padding: 3rem 0;
        }

        .card-tutorial {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
        }

        .table thead {
            background-color: #f5faff;
            color: #004b8d;
        }

        .btn-primary {
            background-color: #0077cc;
            border: none;
        }

        .btn-primary:hover {
            background-color: #005fa3;
        }

        .btn-warning {
            background-color: #ffd966;
            color: #333;
        }

        .btn-danger {
            background-color: #ff6666;
        }

        footer {
            background-color: #ffffff;
            border-top: 1px solid #e0e0e0;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            color: #888888;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .table a {
            text-decoration: none;
            color: #0077cc;
            font-weight: 500;
        }

        .table a:hover {
            color: #005fa3;
            text-decoration: underline;
        }


        .btn {
            border-radius: 8px;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-classy shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/tutorial">WebPresentation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (session()->get('refreshToken')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/tutorial"><b>Daftar Tutorial</b></a>
                        </li>
                        <li class="nav-item">
                            <button class="logout-btn btn" data-bs-toggle="modal"
                                data-bs-target="#logoutModal"><b>Logout</b></button>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="card-tutorial">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </main>

    <footer>
        WebPresentationApp - Tri Yuliana &copy; <?= date('Y') ?>
    </footer>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin anda ingin logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form action="/logout" method="post" class="d-inline" id="logoutForm">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>