<?php $this->layout("admin/layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<div class="container">

    <!-- SECTION HEADING -->
    <h2 class="text-center animate__animated animate__bounce">Đơn hàng</h2>
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <p class="animate__animated animate__fadeInLeft">Xem tất cả đơn hàng của bạn ở đây</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <!-- Table Starts Here -->
            <table id="contacts" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Notes</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
            </table>
            <!-- Table Ends Here -->
        </div>
    </div>
</div>
</div>
</div>
<?php $this->stop() ?>