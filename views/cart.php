<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>
<?php
// Kiểm tra xem có thông báo thành công trong session không
if (isset($_SESSION['success_message'])) {
    echo '<div class="alert alert-success" role="alert">';
    echo $_SESSION['success_message'];
    echo '</div>';

    // Xóa thông báo từ session để không hiển thị lại
    unset($_SESSION['success_message']);
}
?>
<section class="cart section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">Đơn hàng của bạn</h2>
                <?php 
                    // die(print_r($orders, true));
                ?>             
                <?php if (empty($orders)): ?>
                    <p>Bạn không có đơn hàng nào</p>
                <?php else: ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Ngày mua</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td>
                                        <?php
                                        // Lấy thông tin sản phẩm từ bảng products bằng id_sanpham từ bảng orders
                                        $product = \App\Models\Product::find($order['id_sanpham']);
                                        if ($product) {
                                            echo $product->tensp;
                                        } else {
                                            echo 'Sản phẩm không tồn tại';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?= $this->e($order['soluong']) ?>
                                    </td>
                                    <td>
                                        <?= $this->e($order['tongtien']) ?>
                                    </td>
                                    <td>
                                        <?= $this->e($order['created_at']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php $this->stop() ?>