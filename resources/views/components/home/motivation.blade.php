<section class="about section">

    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('home/img/about.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <p>
                        {{ $text->first()->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
