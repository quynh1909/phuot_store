<?php $this->layout("admin/layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<!-- Main Content -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom shadow">
        <h1 class="h2">Thống kê</h1>
    </div>
    <!-- Statistics cards -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow">
                <h5 class="card-title">Card 1</h5>
                <p class="card-text">Some quick example text to build on the card.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow">
                <h5 class="card-title">Card 2</h5>
                <p class="card-text">Some quick example text to build on the card.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow">
                <h5 class="card-title">Card 3</h5>
                <p class="card-text">Some quick example text to build on the card.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow">
                <h5 class="card-title">Card 3</h5>
                <p class="card-text">Some quick example text to build on the card.</p>
            </div>
        </div>
    </div>
</main>
</div>
</div>
<?php $this->stop() ?>