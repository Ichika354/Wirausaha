<section id="hero" class="hero section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">{{ $text->first()->title }}</h1>
                <p data-aos="fade-up" data-aos-delay="100">{{ $text->first()->subtitle }}</p>
                <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                    <a href="#about" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{ asset('home/img/hero-img.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>
