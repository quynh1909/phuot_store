<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<!-- Vong -->
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

<section class="product-detail section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="product-thumb">
                    <img src="images/product/vong.png" class="img-fluid product-image" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="product-info d-flex">
                    <div>
                        <h2 class="product-title mb-0">Võng siêu nhẹ Cắm trại</h2>
                        <p class="product-p">Naturehike</p>
                    </div>
                    <small class="product-price text-muted ms-auto mt-auto mb-5 h5">330.000 - 360.000 vnđ</small>
                </div>

                <div class="product-description">
                    <strong class="d-block mt-4 mb-2">Mô tả</strong>
                    <p class="lead mb-5">Võng siêu nhẹ Naturehike, với mục tiêu mang tới một kiểu thư giãn vô cùng thoải
                        mái. Đu đưa nhẹ nhàng khi nghỉ ngơi trong tự nhiên, những cơn gió mát Chilling ban trưa. Và
                        những giấc ngủ ngắn vô cùng giá trị khi đi chơi, lái xe du lịch đường dài.</p>
                </div>

                <div class="product-cart-thumb row">
                    <div class="col-lg-6 col-12">
                        <select class="form-select cart-form-select mb-4" id="sizeSelect">
                            <option selected>Size</option>
                            <option value="1">Võng đơn</option>
                            <option value="2">Võng đôi</option>
                        </select>
                        <select class="form-select cart-form-select" id="colorSelect">
                            <option selected>Màu</option>
                            <option value="1">Xanh lá</option>
                            <option value="2">Cam</option>
                        </select>
                    </div>

                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <button type="button" class="btn-warning custom-btn cart-btn" data-bs-toggle="modal"
                            data-bs-target="#cart-modal">Add to Cart</button>
                    </div>
                </div>

                <strong class="d-block mt-4 mb-2 h3">Thông tin chi tiết</strong>
                <ul>
                    <li class="lead mb-5">Thương hiệu: Naturehike</li>
                    <li class="lead mb-5">Tính năng nổi bật: Chống xoáy – lật; Diện tích sử dụng lớn; Gấp siêu gọn; Chịu
                        tải tới 200 kg</li>
                    <li class="lead mb-5">Chất liệu sợi 340T Pongee dai, bền, chống thấm nước</li>
                    <li class="lead mb-5">Size Võng: Đơn (nặng khoảng 600gr); Đôi (nặng khoảng 690gr)</li>
                    <li class="lead mb-5">Kích thước sử dụng: Võng đơn 290 x 148 cm; Võng đôi 290 x 180 cm</li>
                    <li class="lead mb-5">Gấp gọn; Võng đơn 11 x 21 cm; Võng đôi: 13 x 24 cm</li>
                    <li class="lead mb-5">Phụ kiện trong hình mô tả dưới</li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                    <img src="images/product/vong3.png" class="img-fluid product-image" alt=""
                        style="height: 649px;width: 649px;">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <img src="images/product/vong4.png" class="img-fluid product-image" alt=""
                        style="height: 649px;width: 649px;">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <img src="images/product/vong2.png" class="img-fluid product-image" alt=""
                        style="height: 649px;width: 649px;">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <img src="images/product/vong1.png" class="img-fluid product-image" alt=""
                        style="height: 649px;width: 649px;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-product section-padding border-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-5">You might also like</h3>
            </div>

            <div class="col-lg-4 col-12 mb-3">
                <div class="product-thumb">
                    <a href="product-detail.html">
                        <img src="images/product/mangvong.png" class="img-fluid product-image" alt=""
                            style="height: 416px;width: 416px;">
                    </a>

                    <div class="product-top d-flex">
                        <span class="product-alert me-auto">New arrival</span>
                        <a href="#" class="bi-heart-fill product-icon"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="./product-detail" class="product-title-link">Màn võng dã ngoại Naturehike</a>
                            </h5>
                            <p class="product-p">Naturehike</p>
                        </div>
                        <small class="product-price text-muted ms-auto mt-auto mb-5">520.000 vnđ</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mb-3">
                <div class="product-thumb">
                    <a href="product-detail.html">
                        <img src="images/product/thamtraileu.png" class="img-fluid product-image" alt=""
                            style="height: 416px;width: 416px;">
                    </a>

                    <div class="product-top d-flex">
                        <span class="product-alert">Low Price</span>
                        <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="product-detail.html" class="product-title-link">Tấm trải sàn lều</a>
                            </h5>
                            <p class="product-p">Glamping Naturehike</p>
                        </div>
                        <small class="product-price text-muted ms-auto mt-auto mb-5">600.000 vnđ</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="product-thumb">
                    <a href="product-detail.html">
                        <img src="images/product/tuingure.png" class="img-fluid product-image" alt=""
                            style="height: 416px;width: 416px;">
                    </a>

                    <div class="product-top d-flex">
                        <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="product-detail.html" class="product-title-link">Túi ngủ phong bì</a>
                            </h5>
                            <p class="product-p">Naturehike</p>
                        </div>
                        <small class="product-price text-muted ms-auto mt-auto mb-5">465.000 - 570.000 vnđ</small>
                    </div>
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

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <img src="images/product/vong.png" class="img-fluid product-image" alt="">
                    </div>

                    <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                        <h3 class="modal-title" id="exampleModalLabel">Võng siêu nhẹ Cắm trại</h3>
                        <p class="product-price text-muted mt-3">330.000 - 360.000 vnđ</p>
                        <p class="product-p">Size: <span class="ms-1" id="selectedSize"></span></p>
                        <p class="product-p">Màu: <span class="ms-1" id="selectedColor"></span></p>
                        <div class="border-top mt-4 pt-3">
                            <p class="product-p"><strong>Total: <span class="ms-1" id="totalPrice"></span></strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row w-50">
                    <button type="button" class="btn custom-btn cart-btn ms-lg-4">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Thêm JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Lấy các phần tử cần thiết
        var sizeSelect = document.getElementById('sizeSelect');
        var colorSelect = document.getElementById('colorSelect');
        var addToCartBtn = document.querySelector('.cart-btn');
        var totalPriceElement = document.getElementById('totalPrice');
        var selectedSizeElement = document.getElementById('selectedSize');
        var selectedColorElement = document.getElementById('selectedColor');
        var productImage = document.querySelector('.product-image');

        // Mảng chứa thông tin về ảnh tương ứng với mỗi màu
        var colorImages = {
            '1': 'images/product/vongmau1.png',
            '2': 'images/product/vongmau2.png',
        };

        // Xử lý sự kiện khi nút "Add to Cart" được nhấn
        addToCartBtn.addEventListener('click', function () {
            // Lấy giá trị từ các phần tử select
            var selectedSize = sizeSelect.options[sizeSelect.selectedIndex].text;
            var selectedColor = colorSelect.options[colorSelect.selectedIndex].text;

            // Cập nhật thông tin trong modal
            selectedSizeElement.innerText = selectedSize;
            selectedColorElement.innerText = selectedColor;

            // Lấy giá trị từ các phần tử select để cập nhật giá tiền
            var selectedSizeValue = sizeSelect.options[sizeSelect.selectedIndex].value;
            updatePrice(selectedSizeValue);

            // Thay đổi ảnh sản phẩm tương ứng với màu được chọn
            var selectedColorValue = colorSelect.options[colorSelect.selectedIndex].value;
            updateProductImage(selectedColorValue);
        });

        // Xử lý sự kiện khi giá trị của size thay đổi
        sizeSelect.addEventListener('change', function () {
            var selectedSize = sizeSelect.options[sizeSelect.selectedIndex].value;
            updatePrice(selectedSize);
        });

        // Xử lý sự kiện khi giá trị của color thay đổi
        colorSelect.addEventListener('change', function () {
            var selectedColor = colorSelect.options[colorSelect.selectedIndex].value;
            updateProductImage(selectedColor);
        });

        // Hàm cập nhật giá tiền dựa trên giá trị của size
        function updatePrice(selectedSize) {
            var price = 0;

            switch (selectedSize) {
                case '1':
                    price = 330000;
                    break;
                case '2':
                    price = 360000;
                    break;
            }

            // Hiển thị giá mới
            totalPriceElement.innerText = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(price);
        }

        // Hàm cập nhật ảnh sản phẩm dựa trên màu đã chọn
        function updateProductImage(selectedColor) {
            // Lấy đường dẫn ảnh tương ứng với màu
            var imagePath = colorImages[selectedColor];

            // Thay đổi đường dẫn ảnh trong thẻ img
            productImage.src = imagePath;
            // Thay đổi đường dẫn ảnh trong thẻ img của sản phẩm trong modal
            var modalProductImage = document.querySelector('#cart-modal .modal-body .product-image');
            modalProductImage.src = imagePath;
        }

    });



</script>
<?php $this->stop() ?>
</body>

<section class="related-product section-padding border-top">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h3 class="mb-5">Có thể bạn cũng sẽ thích</h3>
            </div>

            <div class="col-lg-4 col-12 mb-3">
                <div class="product-thumb">
                    <a href="product-detail.html">
                        <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg"
                            class="img-fluid product-image" alt="">
                    </a>

                    <div class="product-top d-flex">
                        <span class="product-alert me-auto">New arrival</span>

                        <a href="#" class="bi-heart-fill product-icon"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="product-detail.html" class="product-title-link">Tree pot</a>
                            </h5>

                            <p class="product-p">Original package design from house</p>
                        </div>

                        <small class="product-price text-muted ms-auto mt-auto mb-5">$25</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mb-3">
                <div class="product-thumb">
                    <a href="product-detail.html">
                        <img src="images/product/jordan-nix-CkCUvwMXAac-unsplash.jpeg" class="img-fluid product-image"
                            alt="">
                    </a>

                    <div class="product-top d-flex">
                        <span class="product-alert">Low Price</span>

                        <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="product-detail.html" class="product-title-link">Fashion set</a>
                            </h5>

                            <p class="product-p">Costume package</p>
                        </div>

                        <small class="product-price text-muted ms-auto mt-auto mb-5">$35</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="product-thumb">
                    <a href="product-detail.html">
                        <img src="images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg" class="img-fluid product-image"
                            alt="">
                    </a>

                    <div class="product-top d-flex">
                        <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="product-detail.html" class="product-title-link">Juice Drinks</a>
                            </h5>

                            <p class="product-p">Nature made another world</p>
                        </div>

                        <small class="product-price text-muted ms-auto mt-auto mb-5">$45</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>