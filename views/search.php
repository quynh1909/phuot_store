<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<header class="site-header section-padding d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12">
                <h1>
                    <span class="d-block text-primary">Hãy chọn sản phẩm</span>
                    <span class="d-block text-dark">mà bạn yêu thích</span>
                </h1>
            </div>
        </div>
    </div>
</header>

<section class="products section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5">Kết quả tìm kiếm</h2>
            </div>

            <?php
            if (!empty($searchResults)) {
                foreach ($searchResults as $result) { ?>
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="/product-detail/<?= $result['id'] ?>">
                                <img src="images/product/<?= $result['hinhanh'] ?>" class="img-fluid product-image" alt=""
                                    style="height: 416px;width: 416px;">
                            </a>

                            <div class="product-top d-flex">
                                <?php if (isset($result['alert'])): ?>
                                    <span class="product-alert me-auto">
                                        <?= $result['alert'] ?>
                                    </span>
                                <?php endif; ?>

                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="/product-detail/<?= $result['id'] ?>" class="product-title-link">
                                            <?= ($result['tensp']) ?>
                                        </a>
                                    </h5>

                                </div>

                                <small class="product-price text-muted ms-auto">
                                    <?= number_format($result['giatien']) ?> vnđ
                                </small>
                            </div>
                        </div>
                    </div>
                <?php }
                }else{
                    // Hiển thị thông báo nếu không có kết quả
                    echo '<div class="col-12"><p>Không tìm thấy sản phẩm nào.</p></div>';
                } ?>
            
            
        </div>
    </div>
</section>

<?php $this->stop() ?>
