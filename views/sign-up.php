<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<section class="sign-in-form section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mx-auto col-12">

                <h1 class="hero-title text-center mb-5">Sign Up</h1>

                <div class="social-login d-flex flex-column w-50 m-auto">

                    <a href="#" class="btn custom-btn social-btn mb-4">
                        <i class="bi bi-google me-3"></i>

                        Continue with Google
                    </a>

                    <a href="#" class="btn custom-btn social-btn">
                        <i class="bi bi-facebook me-3"></i>

                        Continue with Facebook
                    </a>
                </div>

                <div class="div-separator w-50 m-auto my-5"><span>or</span></div>

                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto">
                        <form method="POST" action="/signup">
                            <div class="form-group row mb-2">
                                <label for="name" class="col-md-4 col-form-label ">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
                                        name="name" value="<?= isset($old['name']) ? $this->e($old['name']) : '' ?>"
                                        required autofocus>


                                    <?php if (isset($errors['name'])): ?>
                                        <span class="invalid-feedback">
                                            <strong>
                                                <?= $this->e($errors['name']) ?>
                                            </strong>
                                        </span>
                                    <?php endif ?>
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label f or="email" class="col-md-4 col-form-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control <?= isset($errors['email']) ? ' is-invalid' : '' ?>"
                                        name="email" value="<?= isset($old['email']) ? $this->e($old['email']) : '' ?>"
                                        required>

                                    <?php if (isset($errors['email'])): ?>
                                        <span class="invalid
-                                               feedback">
                                            <strong>
                                                <?= $this->e($errors['email']) ?>
                                            </strong>

                                        </span>

                                    <?php endif ?>
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="password" class="col-md-4 col-form-label">Password</label>
                                <div class="col-md-6">

                                    <input id="password" type="password"
                                        class="form-control <?= isset($errors['password']) ? ' is-invalid' : '' ?>"
                                        name="password" required>

                                    <?php if (isset($errors['password'])): ?>

                                        <span class="invalid-feedback">

                                            <strong>
                                                <?= $this->e($errors['password']) ?>
                                            </strong>
                                        </span>
                                    <?php endif ?>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="password-confirm" class="col-md-4 col-form-label">Confirm
                                    Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password"
                                        class="form-control <?= isset($errors['password_confirmation']) ? ' is-invalid' : '' ?>"
                                        name="password_confirmation" required>

                                    <?php if (isset($errors['password_confirmation'])): ?>
                                        <span class="invalid-feedback">
                                            <strong>
                                                <?= $this->e($errors['password_confirmation']) ?>
                                            </strong>
                                        </span>
                                    <?php endif ?>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Thêm JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successMessage = <?= isset($messages['success']) ? json_encode($messages['success']) : 'Người dùng đã tạo hãy đăng nhập.' ?>;
        var errorMessage = <?= isset($errors) ? json_encode($errors) : 'Nhập hãy kiểm tra thông tin nhập.' ?>;

        if (successMessage) {
            alert(successMessage);
            window.location.href = '/signin'; // Chuyển hướng đến trang đăng nhập
        }

        if (errorMessage) {
            alert(errorMessage);
        }
    });
</script>

<?php $this->stop() ?>