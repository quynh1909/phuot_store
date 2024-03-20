<?php $this->layout("admin/layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<div class="container">
    <!-- SECTION HEADING -->
    <h2 class="text-center animate__animated animate__bounce">Bài viết</h2>
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <p class="animate__animated animate__fadeInLeft">Thêm bài viết tại đây.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <form action="/baiviet" method="POST" class="col-md-6 offset-md-3" enctype="multipart/form-data">

                <!-- Name -->
                <div class="form-group">
                    <label for="tenbv">Tên bài viết</label>
                    <input type="text" name="tenbv" class="form-control<?= isset($errors['tenbv']) ? ' is-invalid' : '' ?>" maxlen="255" id="tenbv" placeholder="Nhập tên bài viết" value="<?= $tenbv ?>" />
                    <?php if (isset($errors['tenbv'])): ?>
                        <span class="invalid-feedback">
                            <strong><?= $errors['tenbv'] ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Content -->
                <div class="form-group">
                    <label for="noidungbv">Nội dung bài viết </label>
                    <textarea name="noidungbv" id="noidungbv" class="form-control<?= isset($errors['noidungbv']) ? ' is-invalid' : '' ?>" placeholder="Nhập nội dung (maximum character limit: 255)"><?= $noidungbv ?></textarea>
                    <?php if (isset($errors['noidungbv'])): ?>
                        <span class="invalid-feedback">
                            <strong><?= $errors['noidungbv'] ?></strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="hinhanhbv">Hình ảnh</label>
                    <input type="file" name="hinhanhbv" class="form-control-file<?= isset($errors['hinhanhbv']) ? ' is-invalid' : '' ?>" id="hinhanhbv" accept="image/*" />
                    <?php if (isset($errors['hinhanhbv'])): ?>
                        <span class="invalid-feedback">
                            <strong><?= $errors['hinhanhbv'] ?></strong>
                        </span>
                    <?php endif ?>
                </div>


                <!-- Submit -->
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Thêm bài viết</button>
            </form>

        </div>
    </div>
</div>
<?php $this->stop() ?>