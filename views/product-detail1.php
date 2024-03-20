<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<!-- leu 2 nguoi -->
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
                    <img src="images/product/leu2ng.png" class="img-fluid product-image" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="product-info d-flex">
                    <div>
                        <h2 class="product-title mb-0">Lều 2 người 2 lớp</h2>
                        <p class="product-p">Naturehike</p>
                    </div>
                    <small class="product-price text-muted ms-auto mt-auto mb-5">1.930.000 vnđ - 2.830.000 vnđ</small>
                </div>

                <div class="product-description">
                    <strong class="d-block mt-4 mb-2">Mô tả</strong>
                    <p class="lead mb-5">Đây là mô tả sản phẩm</p>
                </div>

                <div class="product-cart-thumb row">
                    <div class="col-lg-6 col-12">
                        <select class="form-select cart-form-select mb-4" id="sizeSelect">
                            <option selected>Size</option>
                            <option value="1">Lều đơn</option>
                            <option value="2">Lều đôi</option>
                            <option value="3">Lều 3 người</option>
                        </select>
                        <select class="form-select cart-form-select" id="colorSelect">
                            <option selected>Màu</option>
                            <option value="1">Xanh lá</option>
                            <option value="2">Cam</option>
                            <option value="3">Trắng</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <button type="button" class="btn-warning custom-btn cart-btn" data-bs-toggle="modal"
                            data-bs-target="#cart-modal" onclick="addToCart()">Add to Cart</button>
                    </div>
                </div>

                <strong class="d-block mt-4 mb-2 h3">Thông tin chi tiết</strong>
                <ul>
                    <li class="lead mb-5">Thương hiệu: Naturehike</li>
                    <li class="lead mb-5">Kích thước gấp gọn: 40x13cm</li>
                    <li class="lead mb-5">Chất liệu: vải silicon bọc nylon, vải lưới, khung nhôm, đinh Duraflex</li>
                    <li class="lead mb-5">Chỉ số chống nước: PU3000 – PU4000mm</li>
                    <li class="lead mb-5">Khối lượng: 1890g – 2050g</li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                    <img src="images/product/leu2ng.png" class="img-fluid product-image" alt=""
                        style="height: 649px;width: 649px;">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <img src="images/product/leu2ng1.png" class="img-fluid product-image" alt=""
                        style="height: 649px;width: 649px;">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <img src="images/product/leu2ng2.png" class="img-fluid product-image" alt=""
                        style="height: 649px;width: 649px;">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <img src="images/product/leu2ng3.png" class="img-fluid product-image" alt=""
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
                    <a href="./product-detail2">
                        <img src="images/product/leutubung.png" class="img-fluid product-image" alt=""
                            style="height: 416px;width: 416px;">
                    </a>

                    <div class="product-top d-flex">
                        <span class="product-alert me-auto">New arrival</span>
                        <a href="#" class="bi-heart-fill product-icon"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="./product-detail2" class="product-title-link">Lều trại tự bung</a>
                            </h5>
                            <p class="product-p">Naturehike</p>
                        </div>
                        <small class="product-price text-muted ms-auto mt-auto mb-5">3.300.000 vnđ</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mb-3">
                <div class="product-thumb">
                    <a href="product-detail3">
                        <img src="images/product/vong.png" class="img-fluid product-image" alt=""
                            style="height: 416px;width: 416px;">
                    </a>

                    <div class="product-top d-flex">
                        <span class="product-alert">Low Price</span>
                        <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="product-detail3" class="product-title-link">Võng siêu nhẹ Cắm trại, đi rừng</a>
                            </h5>
                            <p class="product-p">Naturehike</p>
                        </div>
                        <small class="product-price text-muted ms-auto mt-auto mb-5">330.000 vnđ</small>
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
                        <img src="images/product/leu2ng.png" class="img-fluid product-image" alt="">
                    </div>

                    <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                        <h3 class="modal-title" id="exampleModalLabel">Lều 2 người 2 lớp</h3>

                        <h3 class="modal-title" id="name">Lều 2 người 2 lớp</h3>

                        <p class="product-price text-muted mt-3">1.930.000 - 2.830.000 vnđ</p>
                        <p class="product-p">Size: <span class="ms-1" id="selectedSize"></span></p>
                        <p class="product-p">Màu: <span class="ms-1" id="selectedColor"></span></p>
                        <div class="border-top mt-4 pt-3">
                            <p class="product-p"><strong>Total: <span class="ms-1" id="totalPrice"></span></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row w-50">
                    <button type="button" class="btn custom-btn cart-btn ms-lg-4">Checkout</button>
                    <!-- Thêm thuộc tính data-product để chứa thông tin sản phẩm -->
                    <button type="button" class="btn custom-btn cart-btn ms-lg-4" data-bs-toggle="modal"
                        data-bs-target="#cart-modal" onclick="checkoutBtn()" id="checkout">Check Out</button>

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
            '1': 'images/product/leu2ng.png',
            '2': 'images/product/leu2ng1.png',
            '3': 'images/product/leu2ng2.png'
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
                    price = 1930000;
                    break;
                case '2':
                    price = 2230000;
                    break;
                case '3':
                    price = 2830000;
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