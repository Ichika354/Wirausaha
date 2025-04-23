<!-- Portfolio Section -->
<section class="portfolio section mt-5">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check our latest work</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <!-- Portfolio Filters -->
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($categories as $category)
                    <li data-filter=".{{ Str::slug($category->category) }}">{{ $category->category }}</li>
                @endforeach
            </ul>
            <!-- End Portfolio Filters -->

            <!-- Portfolio Items Container -->
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($products as $product)
                    <div
                        class="col-lg-4 col-md-6 portfolio-item isotope-item {{ Str::slug($product->category->category) }}">
                        <div class="portfolio-content h-100">
                            <img src="data:image/jpeg;base64,{{ $product->photo }}" class="img-fluid"
                                alt="{{ $product->product_name }}">
                            <div class="portfolio-info">
                                <h4>{{ $product->product_name }}</h4>
                                <p>{{ $product->description }}</p>
                                {{-- <a href="data:image/jpeg;base64,{{ $product->photo }}"
                                    title="{{ $product->product_name }}" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a> --}}
                                <a href="{{ route('product.detail', $product->product_id) }}" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                @endforeach
            </div>
            <!-- End Portfolio Items Container -->
        </div>


    </div>

</section><!-- /Portfolio Section -->
