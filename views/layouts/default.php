<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang chủ</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        integrity="...">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href=".css/slick.css" />
    <link href="/css/tooplate-little-fashion.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="./css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/slick.css" />
    <link href="./css/tooplate-little-fashion.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <?= $this->section("page_specific_css") ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid mt-4">
            <a class="navbar-brand" href="/">Phượt Store</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Liên hệ</a>
                    </li>
                </ul>
                <form action="/search" method="GET" class="d-custom me-7">
                    <input class="form-control me-2" type="search" name="q" placeholder="Tìm kiếm..."
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
                <div class="d-flex ms-auto">
                    <?php if (\App\SessionGuard::isUserLoggedIn()): ?>
                        <div class="input-group">
                            <input type="text" class="form-control-plaintext custom-input ms-2"
                                value="<?= \App\SessionGuard::user()->name ?>" readonly>
                        </div>
                    <?php endif; ?>
                    <a href="/signin" class="bi-person custom-icon me-3"></a>
                    <?php if (\App\SessionGuard::isUserLoggedIn()): ?>
                        <a href="/cart/<?= \App\SessionGuard::user()->id ?>" class="bi-bag custom-icon me-3"></a>
                        <form action="/logout" method="post" id="logoutForm" class="me-3">
                            <button type="submit" class="bi-power custom-icon" title="Logout"
                                style="border: none; background-color: transparent; cursor: pointer;">
                                <!-- Add a visually hidden label for screen readers -->
                                <span class="visually-hidden">Logout</span>
                            </button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->section("page") ?>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-10 me-auto mb-4">
                    <h3 class="text-white mb-3"><a href="index.php">Phượt Store</a> </h3>
                    <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0 h5">Copyright © 2023
                        <strong>Phượt Store</strong></p>
                            <br>
                            <p class="copyright-text h5">Thiết kế bởi <a href="https://www.tooplate.com/"
                                    target="_blank"></a>Ngoan
                                & Quỳnh</p>
                </div>

                <div class="col-lg-5 col-8">
                    <h4 class="text-white mb-3">Về chúng tôi</h4>
                    <ul class="footer-menu d-flex flex-wrap">
                        <li class="footer-menu-item h5"><a href="/blog" class="footer-menu-link">Tin tức</a></li>
                        <li class="footer-menu-item h5"><a href="/product" class="footer-menu-link">Sản phẩm</a></li>
                        <li class="footer-menu-item h5"><a href="/about" class="footer-menu-link">Giới thiệu</a></li>
                        <li class="footer-menu-item h5"><a href="/contact" class="footer-menu-link">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-4">
                    <h4 class="text-white mb-3">Social</h4>
                    <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-youtube h4"></a></li>
                        <li><a href="#" class="social-icon-link bi-facebook h4"></a></li>
                        <li><a href="#" class="social-icon-link bi-instagram h4"></a></li>
                        <li><a href="#" class="social-icon-link bi-twitter h4"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="/js/jquery.min.js">
    </script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/Headroom.js"></script>
    <script src="/js/jQuery.headroom.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/Headroom.js"></script>
    <script src="./js/jQuery.headroom.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/custom.js"></script>
    <!-- Bootstrap JavaScript và các phụ thuộc -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="..."
        crossorigin="anonymous"></script>

    <?= $this->section("page_specific_js") ?>

</body>

</html>