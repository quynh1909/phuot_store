<?php $this->layout("layouts/default", ["title" => "Home"]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>
<div class="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Adventure Gear</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <h2 class="text-center mt-3 animate__animated animate__bounce">Adventure Gear for Your Next Journey</h2>
    <p class="animate__animated animate__fadeInLeft">Explore our handpicked selection of high-quality adventure gear and
        essentials.</p>

    <!-- Featured Products -->
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= $this->e($product['image']) ?>" class="card-img-top"
                        alt="<?= $this->e($product['tensp']) ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $this->e($product['tensp']) ?>
                        </h5>
                        <p class="card-text">
                            <?= $this->e($product['motasp']) ?>
                        </p>
                        <p class="card-text"><strong>Price:
                                <?= $this->e($product['giatien']) ?>
                                $VNĐ
                            </strong></p>
                        <a href="/product<?= $this->e($product['id']) ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- About Us Section -->
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3 text-center">
            <h3 class="animate__animated animate__bounce">Why Choose Us?</h3>
            <p class="animate__animated animate__fadeInLeft">We are passionate about providing the best gear for your
                adventures. Our products are curated for quality, durability, and performance.</p>
            <a href="/about-us" class="btn btn-secondary">Learn More</a>
        </div>
    </div>
</div>
<?php $this->stop() ?>