<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->e($var) ?>
<?php $this->start("page") ?>

<header class="site-header section-padding d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12">
                <h1>
                    <span class="d-block text-primary">Câu hỏi của bạn</span>
                    <span class="d-block text-dark">và chúng tôi sẽ trả lời nó</span>
                </h1>
            </div>
        </div>
    </div>
</header>
<section class="faq section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12">
                <h2>Thông tin chung.</h2>
                <div class="accordion" id="accordionGeneral">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordionGeneralOne" aria-expanded="true"
                                aria-controls="accordionGeneralOne">
                                Website bán đồ đi phượt.
                            </button>
                        </h2>

                        <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionGeneral">

                            <div class="accordion-body">
                                <p class="large-paragraph"><strong>3/2, Xuân Khánh, Ninh Kiều, Cần Thơ</strong> .</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordionGeneralTwo" aria-expanded="false"
                                aria-controls="accordionGeneralTwo">
                                Các thành viên đồng sáng lập.
                            </button>
                        </h2>

                        <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionGeneral">

                            <div class="accordion-body">
                                <p class="large-paragraph"><a href="https://www.tooplate.com/free-templates"
                                        target="_blank">Tooplate</a> is a great website to download free HTML website
                                    templates for your business or personal use. Tooplate website has been online for
                                    almost 8 years now. Thank you for visiting our website.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordionGeneralThree" aria-expanded="false"
                                aria-controls="accordionGeneralThree">
                                Tôi có thể hỗ trợ bạn bằng cách nào?
                            </button>
                        </h2>

                        <div id="accordionGeneralThree" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionGeneral">

                            <div class="accordion-body">
                                <p class="large-paragraph">You can support our Tooplate website by sharing it to your
                                    friends or colleagues on the web or social media.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <h2 class="mt-5">Về <span>sản phẩm của chúng tôi</span></h2>

                <div class="accordion" id="accordionProduct">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordionProductOne" aria-expanded="true"
                                aria-controls="accordionProductOne">
                                Làm thế nào để tạo ra một sản phẩm tốt?
                            </button>
                        </h2>

                        <div id="accordionProductOne" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionProduct">

                            <div class="accordion-body">
                                <p class="large-paragraph"><strong>Lorem ipsum dolor</strong> sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                    lacus vel facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordionProductTwo" aria-expanded="false"
                                aria-controls="accordionProductTwo">
                                Trải ngiệm sản phẩm của bạn như thế nào?
                            </button>
                        </h2>

                        <div id="accordionProductTwo" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionProduct">

                            <div class="accordion-body">
                                <p class="large-paragraph">Lorem ipsum is placeholder text commonly used in the graphic,
                                    print, and publishing industries for previewing layouts and visual mockups.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

</main>
<?php $this->stop() ?>