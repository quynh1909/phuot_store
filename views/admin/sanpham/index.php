<?php $this->layout("admin/layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<div class="container">

    <!-- SECTION HEADING -->
    <h2 class="text-center animate__animated animate__bounce">Sản phẩm</h2>
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <p class="animate__animated animate__fadeInLeft">Xem tất cả sản phẩm của bạn ở đây</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <!-- FLASH MESSAGES -->

            <a href="/sanpham/add" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i> Sản phẩm mới</a>

            <!-- Table Starts Here -->
            <table id="products" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Mô tả sản phẩm</th>
                        <th scope="col">Giá tiền</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td>
                                <?= $this->e($product->tensp) ?>
                            </td>
                            <td>
                                <?= $this->e($product->motasp) ?>
                            </td>
                            <td>
                                <?= $this->e($product->giatien) ?>
                            </td>
                            <td>
                                <img src="images\product\<?= $this->e($product->hinhanh) ?>" width="100" height="80"
                                    class="mx-auto d-block">
                            </td>
                            <td>
                                <?= $this->e(date("d-m-Y", strtotime($product->created_at))) ?>
                            </td>
                            <td class="d-flex justify-content-center">
                                <a href="<?= '/sanpham/edit/' . $this->e($product->id) ?>" class="btn btn-xs btn-warning">
                                    <i alt="Edit" class="fa fa-pencil"></i> Sửa</a>
                                <form class="form-inline ml-1" action="<?= '/sanpham/delete/' . $this->e($product->id) ?>"
                                    method="POST">
                                    <button type="submit" class="btn btn-xs btn-danger" name="delete-products">
                                        <i alt="Delete" class="fa fa-trash"></i> Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <!-- Table Ends Here -->
        </div>
    </div>
</div>

<div id="delete-confirm" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Xác nhận</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">Bạn có muốn xóa sản phẩm này?</div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-danger" id="delete">Xóa</button>
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        new DataTable('#products');
    });
</script>

<script>
    $(document).ready(function () {
        new DataTable('#products');
        $('button[name="delete-products"]').on('click', function (e) {
            e.preventDefault();
            const form = $(this).closest('form');
            const nameTd = $(this).closest('tr').find('td:first');
            if (nameTd.length > 0) {
                $('.modal-body').html(
                    `Do you want to delete "${nameTd.text()}"?`
                );
            }
            $('#delete-confirm')
                .modal({
                    backdrop: 'static',
                    keyboard: false
                })
                .one('click', '#delete', function () {
                    form.trigger('submit');
                });

        });
    });
</script>
<?php $this->stop() ?>