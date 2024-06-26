<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="card mt-3">
                <div class="card-header font-weight-bold text-uppercase">Register</div>
                <div class="card-body">

                    <form method="POST" action="/register">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>" name="name"
                                    value="<?= isset($old['name']) ? $this->e($old['name']) : '' ?>" required autofocus>

                                <?php if (isset($errors['name'])): ?>
                                    <span class="invalid-feedback">
                                        <strong>
                                            <?= $this->e($errors['name']) ?>
                                        </strong>
                                    </span>
                                <?php endif ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control <?= isset($errors['email']) ? ' is-invalid' : '' ?>"
                                    name="email" value="<?= isset($old['email']) ? $this->e($old['email']) : '' ?>"
                                    required>

                                <?php if (isset($errors['email'])): ?>
                                    <span class="invalid-feedback">
                                        <strong>
                                            <?= $this->e($errors['email']) ?>
                                        </strong>
                                    </span>
                                <?php endif ?>
                            </div>
                        </div>

                        <div class="form-group row">
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

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label">Confirm Password</label>
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
                        <div class="row">
                            <div class="col-md-8 offset-md-2">

                                <div class="card mt-3">
                                    <div class="card-header font-weight-bold text-uppercase">Register</div>
                                    <div class="card-body">

                                        <form method="POST" action="/register">
                                            <!-- Existing fields -->
                                            <!-- ... -->

                                            <!-- New field for Phone Number -->
                                            <div class="form-group row">
                                                <label for="phone" class="col-md-4 col-form-label">Phone Number</label>
                                                <div class="col-md-6">
                                                    <input id="phone" type="text" class="form-control <?= isset($errors['phone']) ? 'is-invalid' : '' ?>" name="phone" value="<?= isset($old['phone']) ? $this->e($old['phone']) : '' ?>" required>

                                                    <?php if (isset($errors['phone'])) : ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?= $this->e($errors['phone']) ?></strong>
                                                        </span>
                                                    <?php endif ?>
                                                </div>
                                            </div>

                                            <!-- New field for Address -->
                                            <div class="form-group row">
                                                <label for="address" class="col-md-4 col-form-label">Address</label>
                                                <div class="col-md-6">
                                                    <input id="address" type="text" class="form-control <?= isset($errors['address']) ? 'is-invalid' : '' ?>" name="address" value="<?= isset($old['address']) ? $this->e($old['address']) : '' ?>" required>

                                                    <?php if (isset($errors['address'])) : ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?= $this->e($errors['address']) ?></strong>
                                                        </span>
                                                    <?php endif ?>
                                                </div>
                                            </div>

                                            <!-- Existing submit button -->
                                            <div class="form-group row">
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

                <div class="form-group row">
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
<?php $this->stop() ?>