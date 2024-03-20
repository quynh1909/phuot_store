<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>




<section class="contact section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4">Liên <span>hệ</span></h2>

                <form class="contact-form me-lg-5 pe-lg-3" role="form">

                    <div class="form-floating">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>

                        <label for="name">Tên đầy đủ</label>
                    </div>

                    <div class="form-floating my-4">
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                            placeholder="Email address" required>

                        <label for="email">Địa chỉ email</label>
                    </div>

                    <div class="form-floating my-4">
                        <input type="subject" name="subject" id="subject" class="form-control" placeholder="Subject"
                            required>

                        <label for="subject">Chủ đề</label>
                    </div>

                    <div class="form-floating mb-4">
                        <textarea id="message" name="message" class="form-control" placeholder="Leave a comment here"
                            required style="height: 160px"></textarea>

                        <label for="message">Nội dung của bạn</label>
                    </div>

                    <div class="col-lg-5 col-6">
                        <button type="submit" class="form-control">Gửi</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 col-12 mt-5 ms-auto">
                <div class="row">
                    <div class="col-6 border-end contact-info">
                        <h6 class="mb-3">Cơ sở mới</h6>

                        <a href="mailto:hello@company.com" class="custom-link">
                            quynhb2014603@student.ctu.edu.vn
                            <i class="bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                    <div class="col-6 contact-info">
                        <h6 class="mb-3">Studio</h6>

                        <a href="mailto:studio@company.com" class="custom-link">
                            ngoanb2014590@student.ctu.edu.vn
                            <i class="bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                    <div class="col-6 border-top border-end contact-info">
                        <h6 class="mb-3">Văn phòng</h6>

                        <p class="text-muted">3/2, Xuân Khánh, Ninh Kiều, Cần Thơ</p>
                    </div>

                    <div class="col-6 border-top contact-info">
                        <h6 class="mb-3">Mạng xã hội</h6>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-messenger"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php $this->stop() ?>