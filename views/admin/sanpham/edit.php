<?php $this->layout("admin/layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<div class="container">
    <!-- SECTION HEADING -->
    <h2 class="text-center animate__animated animate__bounce">Sản phẩm</h2>
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <p class="animate__animated animate__fadeInLeft">Cập nhật sản phẩm tại đây.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <form action="<?= '/sanpham/' . $this->e($product['id']) ?>" method="post" class="col-md-6 offset-md-3" enctype="multipart/form-data">

                <!-- Tên -->
                <div class="form-group">
                    <label for="tensp">Tên sản phẩm</label>
                    <input type="text" name="tensp" class="form-control<?= isset($errors['tensp']) ? ' is-invalid' : '' ?>" maxlen="255" id="tensp" placeholder="Enter Name" value="<?= $this->e($product['tensp']) ?>" />

                    <?php if (isset($errors['tensp'])) : ?>
                        <span class="invalid-feedback">
                            <strong>
                                <?= $this->e($errors['tensp']) ?>
                            </strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Mô tả -->
                <div class="form-group">
                    <label for="motasp">Mô tả sản phẩm</label>
                    <textarea name="motasp" id="motasp" class="form-control<?= isset($errors['motasp']) ? ' is-invalid' : '' ?>" placeholder="Nhập nội dung bài viết (maximum character limit: 255)"><?= $this->e($product['motasp']) ?></textarea>

                    <?php if (isset($errors['motasp'])) : ?>
                        <span class="invalid-feedback">
                            <strong>
                                <?= $this->e($errors['motasp']) ?>
                            </strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Giá tiền -->
                <div class="form-group">
                    <label for="giatien">Giá tiền</label>
                    <input type="currency" name="giatien"
                        class="form-control<?= isset($errors['giatien']) ? ' is-invalid' : '' ?>" maxlen="255" id="giatien"
                        placeholder="Nhập giá tiền"
                        value="<?= $this->e($product['giatien']) ?>" />

                    <?php if (isset($errors['giatien'])): ?>
                        <span class="invalid-feedback">
                            <strong>
                                <?= $this->e($errors['giatien']) ?>
                            </strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="hinhanh">Hình ảnh</label>
                    <input type="file" name="hinhanh" class="form-control-file<?= isset($errors['hinhanh']) ? ' is-invalid' : '' ?>" id="hinhanh" accept="image/*" />

                    <?php if (isset($errors['hinhanh'])) : ?>
                        <span class="invalid-feedback">
                            <strong>
                                <?= $this->e($errors['hinhanh']) ?>
                            </strong>
                        </span>
                    <?php endif ?>
                </div>

                <button type="submit" name="submit" id="submit" class="btn btn-primary">Cập nhật</button>
            </form>

        </div>
    </div>
</div>
<?php $this->stop() ?>