<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>


<main>
    <section class="slick-slideshow">
        <div class="slick-custom">
            <img src="images/slideshow/bannerweb_2000x.webp" class="img-fluid" alt="">

            <div class="slick-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-10">
                            <h1 class="slick-title">Sản phẩm tốt</h1>

                            <p class="lead text-white mt-lg-3 mb-lg-5">Chúng tôi luôn cố gắng tạo ra các sản phẩm phù
                                hợp với tất cả mọi người.</p>

                            <a href="about" class="btn custom-btn">Tìm hiểu thêm về chúng tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slick-custom">
            <img src="images/slideshow/pexels-uriel-mont-6271392.jpg" class="img-fluid" alt="">

            <div class="slick-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-10">
                            <h1 class="slick-title">Thiết kế mới</h1>

                            <p class="lead text-white mt-lg-3 mb-lg-5">Có các ý tưởng mới giúp sản phẩm đa dạng hơn.</p>

                            <a href="product" class="btn custom-btn">Khám phá các sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slick-custom">
            <img src="images/slideshow/pexels-quang-nguyen-vinh-2582818.jpg" class="img-fluid" alt="">

            <div class="slick-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-10">
                            <h1 class="slick-title">Trò chuyện</h1>

                            <p class="lead text-white mt-lg-3 mb-lg-5">Nếu bạn còn điều gì chưa rõ.</p>

                            <a href="contact" class="btn custom-btn">Làm việc với chúng tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="featured-product section-padding">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mb-5">Sản phẩm nổi bật</h2>
                </div>

                <div class="col-lg-4 col-12 mb-3">
                    <div class="product-thumb">
                        <a href="product-detail/1">
                            <img src="./images/product/Leu2nguoi2lop.png" class="img-fluid product-image" alt="">
                        </a>

                        <div class="product-top d-flex">
                            <span class="product-alert me-auto">Mới</span>

                            <a href="#" class="bi-heart-fill product-icon"></a>
                        </div>

                        <div class="product-info d-flex">
                            <div>
                                <h5 class="product-title mb-0">
                                    <a href="product-detail/1" class="product-title-link text-decoration-none">Lều 2
                                        người 2 lớp</a>
                                </h5>

                                <p class="product-p">Naturehike</p>
                            </div>

                            <small class="product-price text-muted ms-auto mt-auto mb-5">1.930.000 vnđ</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-3">
                    <div class="product-thumb">
                        <a href="product-detail/22">
                            <img src="images/product/Tamtraileu.png" class="img-fluid product-image" alt
                                style="height: 649px;width: 416px;">
                        </a>

                        <div class="product-top d-flex">
                            <span class="product-alert">Giảm giá</span>

                            <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                        </div>

                        <div class="product-info d-flex">
                            <div>
                                <h5 class="product-title mb-0">
                                    <a href="product-detail/22" class="product-title-link text-decoration-none">Tấm
                                        trải lều cotton</a>
                                </h5>

                                <p class="product-p">Glamping Naturehike</p>
                            </div>

                            <small class="product-price text-muted ms-auto mt-auto mb-5">579.000 vnđ</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="product-thumb">
                        <a href="product-detail/20">
                            <img src="images/product/Giuongxep.png" class="img-fluid product-image" alt
                                style="height: 649px;width: 416px;">
                        </a>

                        <div class="product-top d-flex">
                            <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                        </div>

                        <div class="product-info d-flex">
                            <div>
                                <h5 class="product-title mb-0">
                                    <a href="product-detail/20" class="product-title-link text-decoration-none">Giường
                                        thấp cắm trại</a>
                                </h5>

                                <p class="product-p">Naturehike</p>
                            </div>

                            <small class="product-price text-muted ms-auto mt-auto mb-5">1.550.000 vnđ</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <a href="product" class="view-all">Xem tất cả sảm phẩm</a>
                </div>

            </div>
        </div>
    </section>
</main>

<?php $this->stop() ?>