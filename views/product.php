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
                <h2 class="mb-5">Tất cả sản phẩm</h2>
            </div>

            <?php foreach ($products as $product) { ?>
                <div class="col-lg-4 col-12 mb-3">
                    <div class="product-thumb">
                        <a href="/product-detail/<?= $product['id'] ?>">
                            <img src="images/product/<?= $product['hinhanh'] ?>" class="img-fluid product-image" alt=""
                                style="height: 416px;width: 416px;">
                        </a>

                        <div class="product-top d-flex">
                            <?php if ($product['new_arrival']): ?>
                                <span class="product-alert me-auto">Hàng mới</span>
                            <?php endif; ?>
                        </div>

                        <div class="product-info d-flex">
                            <div>
                                <h5 class="product-title mb-0">
                                    <a href="/product-detail/<?= $product['id'] ?>" class="product-title-link">
                                        <?= $product['tensp'] ?>
                                    </a>
                                </h5>
                            </div>

                            <small class="product-price text-muted ms-auto">
                                <?= number_format($product['giatien']) ?>
                                vnđ
                            </small>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

</main>

<?php $this->stop() ?>