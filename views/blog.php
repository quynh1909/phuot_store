<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>


<header class="site-header section-padding d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12">
                <h1>
                    <span class="d-block text-primary">Các địa điểm du lich</span>
                    <span class="d-block text-dark">được quan tâm nhất gần đây</span>
                </h1>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($posts as $post): ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>
                                    <?= $this->e($post->tenbv) ?>
                                </title>
                                <image xlink:href="images\baiviet\<?= $this->e($post->hinhanhbv) ?>" width="100%"
                                    height="100%" preserveAspectRatio="xMidYMid slice" />
                            </svg>
                            <div class="card-body">
                                <h4 class="card-text">
                                    <?= $this->e($post->tenbv) ?>
                                </h4>
                                <?php
                                $content = $this->e($post->noidungbv);
                                if (strlen($content) > 100) {
                                    $content = substr($content, 0, 100) . '...';
                                }
                                ?>
                                <p class="card-text">
                                    <?= $content ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href=<?= '/blog-detail/' . $this->e($post['id']) ?>><button type="button"
                                                class="btn btn-sm btn-outline-secondary">Xem</button></a>
                                    </div>
                                    <small class="text-body-secondary">
                                        <?= $this->e($post->created_at) ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                <!--  -->
            </div>
        </div>
    </div>

</main>
<?php $this->stop() ?>