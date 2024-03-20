<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
            padding-top: 56px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar-brand img {
            width: 30px;
            height: 30px;
            margin-right: 5px;
        }

        .navbar {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            background-color: #337ab7;
            color: #fff;
            padding-top: 10px;
        }

        main {
            background-color: #f8f9fa;
            flex: 1;
        }

        .shadow {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
    </style>
    <?= $this->section("page_specific_css") ?>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/index">
            <img src="/"> Admin Panel
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="/logout" method="post" id="logoutForm" class="me-3">
                        <?php if (\App\SessionGuardAdmin::isAdminLoggedIn()) : ?>
                            <button type="submit" class="bi-power custom-icon" title="Logout" style="border: none; background-color: transparent; cursor: pointer;">
                                <!-- Add a visually hidden label for screen readers -->
                                <span class="visually-hidden">Logout</span>
                            </button>
                        <?php endif; ?>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/sanpham">
                                <i class="fas fa-boxes"></i> Quản lý sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/baiviet">
                                <i class="fas fa-blog"></i> Quản lý bài viết
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/donhang">
                                <i class="fas fa-file-invoice-dollar"></i> Thông tin đơn hàng của khách hàng
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <?= $this->section("page") ?>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container text-center">
            <p>&copy; Phượt Store</p>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?= $this->section("page_specific_js") ?>
</body>

</html>