{{-- {{ dd(config('midtrans.client_key')) }} --}}
<main class="main">

  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Product Details</h1>
            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Product Details</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper init-swiper">

            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>

            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="data:image/jpeg;base64,{{ $product->photo }}" alt="">
              </div>
{{-- 
              <div class="swiper-slide">
                <img src="assets/img/portfolio/product-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/branding-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/books-1.jpg" alt="">
              </div> --}}

            </div>
            {{-- <div class="swiper-pagination"></div> --}}
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Product information</h3>
            <ul>
              <li><strong>Category</strong>: {{ $product->category->category }}</li>
              <li><strong>Product</strong>: {{ $product->product_name }}</li>
              <li><strong>Stock</strong>: {{ $product->stock }}</li>
              <li><strong>Price</strong>: Rp. {{  number_format($product->price, 0, ',', '.') }}</li>
              <li><strong>Description</strong>: {{ $product->detail }}</li>
            </ul>
          </div>
          @if (Auth::user())
          <div class="portfolio-description w-100" data-aos="fade-up" data-aos-delay="300">
            <form action="{{ route('checkout') }}" method="POST">
              @csrf
              <input type="text" name="product_id" value="{{ $product->product_id }}" hidden>
              <input type="number" name="qty" class="form-control mb-3" placeholder="Qty" required>
              <button type="submit" class="btn btn-primary w-100">Checkout</button>
            </form>
          </div>

          @else
          <div class="portfolio-description w-100" data-aos="fade-up" data-aos-delay="300">
              <a href="{{ route('login') }}" class="btn btn-primary w-100">Login</a>
           
          </div> 
          @endif
        </div>

      </div>

    </div>

  </section><!-- /Portfolio Details Section -->

</main>