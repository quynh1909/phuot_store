<?php $this->layout("admin/layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<div class="container">
    <!-- SECTION HEADING -->
    <h2 class="text-center animate__animated animate__bounce">posts</h2>
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <p class="animate__animated animate__fadeInLeft">Update your posts here.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <form action="<?= '/baiviet/' . $this->e($post['id']) ?>" method="POST" class="col-md-6 offset-md-3"
                enctype="multipart/form-data">

                <!-- Tên -->
                <div class="form-group">
                    <label for="tenbv">Tên bài viết</label>
                    <input type="text" name="tenbv"
                        class="form-control<?= isset($errors['tenbv']) ? ' is-invalid' : '' ?>" maxlen="255" id="tenbv"
                        placeholder="Enter Name" value="<?= $this->e($post['tenbv']) ?>" />

                    <?php if (isset($errors['tenbv'])): ?>
                        <span class="invalid-feedback">
                            <strong>
                                <?= $this->e($errors['tenbv']) ?>
                            </strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Bài viết -->
                <div class="form-group">
                    <label for="noidungbv">Nội dung bài viết</label>
                    <textarea name="noidungbv" id="noidungbv"
                        class="form-control<?= isset($errors['notes']) ? ' is-invalid' : '' ?>"
                        placeholder="Nhập nội dung bài viết (maximum character limit: 255)"><?= $this->e($post['noidungbv']) ?></textarea>

                    <?php if (isset($errors['noidungbv'])): ?>
                        <span class="invalid-feedback">
                            <strong>
                                <?= $this->e($errors['noidungbv']) ?>
                            </strong>
                        </span>
                    <?php endif ?>
                </div>

                <!-- Hình ảnh -->
                <div class="form-group">
                    <label for="hinhanhbv">Hình ảnh</label>
                    <input type="file" name="hinhanhbv"
                        class="form-control-file<?= isset($errors['hinhanhbv']) ? ' is-invalid' : '' ?>" id="hinhanhbv"
                        accept="image/*" />
                    <?php if (isset($errors['hinhanhbv'])): ?>
                        <span class="invalid-feedback">
                            <strong>
                                <?= $this->e($errors['hinhanhbv']) ?>
                            </strong>
                        </span>
                    <?php endif ?>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Update post</button>
            </form>

        </div>
    </div>
</div>
<?php $this->stop() ?>