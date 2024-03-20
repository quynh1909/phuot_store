<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="clearfix">
            <img src="/images/baiviet/<?= $this->e($post['hinhanhbv']) ?>" class="col-md-6 float-md-end mb-3 ms-md-3"
                alt="Ảnh">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    <?= $this->e($post['tenbv']) ?>
                </h3>
                <!-- Content of the blog post -->
                <article class="blog-post">
                    <?= $this->e($post['noidungbv']) ?>
                </article>
            </div>
        </div>
    </div>
    <div class="row g-5">
        <div class="">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h4 class="fst-italic">Bình luận</h4>
                    <?php foreach ($reviews as $review): ?>
                        <?php echo $this->e($review->user->name) . ': ' . $this->e($review->danhgia); ?>
                        <br> <!-- Thêm dòng mới giữa các bình luận -->
                    <?php endforeach ?>
                    <br>
                    <?php if (\App\SessionGuard::isUserLoggedIn()): ?>
                        <form class="form-inline ml-1" action="/danhgia" method="POST">
                            <!-- Hidden field for user_id -->
                            <input type="hidden" name="user_id" value=" <?= \App\SessionGuard::user()->id ?>" />
                            <input type="hidden" name="post_id" value="<?= $this->e($post['id']) ?>" />
                            <input type="text" name="danhgia"
                                class="form-control<?= isset($errors['danhgia']) ? ' is-invalid' : '' ?>" maxlen="255"
                                id="danhgia" placeholder="Nhập đánh giá của bạn" style="width:45%" <?= isset($old['danhgia']) ? 'value="' . $this->e($old['danhgia']) . '"' : '' ?> />
                            <?php if (isset($errors['danhgia'])): ?>
                                <span class="invalid-feedback">
                                    <strong>
                                        <?= $this->e($errors['danhgia']) ?>
                                    </strong>
                                </span>
                            <?php endif ?>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary mt-2">Thêm bình
                                luận</button>
                        </form>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->stop() ?>