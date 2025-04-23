<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Product Details</h1>
                        <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                            voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                            Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
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

                <div class="col-lg-6">
                    <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                        <h3>Detail Product</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $product->category->category }}</li>
                            <li><strong>Product</strong>: {{ $product->product_name }}</li>
                            <li><strong>Price</strong>: Rp. {{ number_format($product->price, 0, ',', '.') }}</li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                        <h3>Detail Order</h3>
                        <ul>
                            <li><strong>Order ID</strong>: {{ $order->order_id }}</li>
                            <li><strong>Jumlah</strong>: {{ $order->qty }}</li>
                            <li><strong>Total Harga</strong>: Rp. {{ number_format($order->total_price, 0, ',', '.') }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-success w-25" id="pay-button">Pay</button>
                </div>
            </div>
        </div>
    </section><!-- /Portfolio Details Section -->
    <script>
        document.getElementById('pay-button').onclick = function() {
            snap.pay("{{ $snapToken }}", {
                onSuccess: function(result) {
                    console.log(result);
                    alert("Pembayaran berhasil!");
                    window.location.href = "{{ route('home') }}";
                },
                onPending: function(result) {
                    console.log(result);
                    alert("Pembayaran sedang diproses!");
                },
                onError: function(result) {
                    console.log(result);
                    alert("Pembayaran gagal!");
                }
            });
        };
    </script>
</main>
