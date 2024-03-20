<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<header class="site-header section-padding d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12">
                <h1>
                    <span class="d-block text-primary">We provide you</span>
                    <span class="d-block text-dark">Fashionable Stuffs</span>
                </h1>
            </div>
        </div>
    </div>
</header>

<section class="product-detail section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="product-thumb">
                    <img src="/images/product/<?= $this->e($product['hinhanh']) ?>" class="img-fluid product-image"
                        alt="" style="height: 416px;width: 416px;">
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="product-info d-flex">
                    <div>
                        <h2 class="product-title mb-0">
                            <?= $this->e($product['tensp']) ?>
                        </h2>
                    </div>

                    <small class="product-price text-muted ms-auto mt-auto mb-5">
                        <?= $this->e($product['giatien']) ?>
                        VNĐ
                    </small>
                </div>

                <div class="product-description">

                    <strong class="d-block mt-4 mb-2">Mô tả sản phẩm</strong>

                    <p class="lead mb-5">
                        <?= $this->e($product['motasp']) ?>
                    </p>
                </div>

                <div class="product-cart-thumb row">
                    
                    <?php if (\App\SessionGuard::isUserLoggedIn()): ?>
                        <div class="col-lg-6 col-12">
                            <select class="form-select cart-form-select" id="quantitySelect">
                                <option selected>Số lượng</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                            <button type="submit" class="btn custom-btn cart-btn" data-bs-toggle="modal"
                                data-bs-target="#cart-modal">Add to Cart</button>
                        </div>
                    <?php endif ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<!-- CART MODAL -->
<div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header flex-column">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/thanhtoan" method="POST" class="col-md-6 offset-md-3">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <img size src="/images/product/<?= $this->e($product['hinhanh']) ?>"
                                    class="img-fluid product-image" alt="">
                            </div>

                            <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                                <h3 class="modal-title" id="exampleModalLabel">
                                    <?= $this->e($product['tensp']) ?>
                                </h3>

                                <p class="product-price text-muted mt-3">
                                    <?= $this->e($product['giatien']) ?>
                                </p>

                                <p class="product-p">Số lượng: <span id="displayQuantity" class="ms-1"></span></p>

                                <div class="border-top mt-4 pt-3">
                                    <p class="product-p">
                                        <strong>Tổng: <span id="totalPrice">
                                                <?= $this->e($product['giatien']) ?>
                                            </span> VNĐ</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id_sanpham" value="<?= $this->e($product['id']) ?>">
                    <input type="hidden" name="soluong" id="formQuantity" value="1">
                    <input type="hidden" name="tongtien" id="formTotalPrice" value="<?= $this->e($product['giatien']) ?>">
                    <input type="hidden" name="id_khachhang" value=" <?= \App\SessionGuard::user()->id ?>" />

                    <div class="modal-footer">
                        <div class="row w-50">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Thanh toán</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        // Set initial values
        var unitPrice = <?= $this->e($product['giatien']) ?>;
        var defaultQuantity = 1;

        // Set initial values for hidden fields
        $('#formQuantity').val(defaultQuantity);
        $('#formTotalPrice').val(unitPrice);

        // Handle quantity change event
        $('#quantitySelect').change(function () {
            var quantity = $(this).val();

            // Update the displayed quantity
            $('#displayQuantity').text(quantity);

            // Update the hidden form field for quantity
            $('#formQuantity').val(quantity);
            // Calculate and update the total price
            var totalPrice = quantity * unitPrice;
            $('#totalPrice').text(totalPrice);

            // Update the hidden form field for total price
            $('#formTotalPrice').val(totalPrice);
        });
    });
</script>

</body>
<?php $this->stop() ?>