<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard') }} /" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Seller</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('dashboard/vendor/fonts/materialdesignicons.css') }}" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('dashboard/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('dashboard/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('components.sidebarsel')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navsel')
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row gy-4">
                            @yield('content')
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('components.footsel')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('dashboard/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('dashboard/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('dashboard/js/dashboards-analytics.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        function validateNumberInput(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
        }
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            })
        </script>
    @endif

    <script>
        if (window.location.hash === '#success') {
            history.replaceState(null, null, ' ');
        } else if (window.performance && window.performance.navigation.type === window.performance.navigation
            .TYPE_BACK_FORWARD) {
            window.location.href = '{{ route('product.seller') }}';
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tambahkan event listener untuk semua elemen dengan class 'open-modal'
            document.querySelectorAll('.open-modal').forEach(function(element) {
                element.addEventListener('click', function() {
                    // Ambil data-photo dari elemen yang diklik
                    const photo = this.getAttribute('data-photo');
                    // Set src dari img di dalam modal dengan foto yang diambil
                    document.getElementById('modalPhoto').setAttribute('src', photo);
                    // Tampilkan modal
                    $('#photoModal').modal('show');
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tambahkan event listener untuk semua elemen dengan class 'edit-product'
            document.querySelectorAll('.edit-product').forEach(function(element) {
                element.addEventListener('click', function() {
                    // Ambil data dari elemen yang diklik
                    const id = this.getAttribute('data-id');
                    const name = this.getAttribute('data-name');
                    const price = this.getAttribute('data-price');
                    const stock = this.getAttribute('data-stock');
                    const category = this.getAttribute('data-category');
                    const description = this.getAttribute('data-description');
                    const photo = this.getAttribute('data-photo');

                    // Set data ke dalam form modal
                    document.getElementById('editProduct').value = name;
                    document.getElementById('editPrice').value = price;
                    document.getElementById('editStock').value = stock;
                    document.getElementById('editCategory').value = category;
                    document.getElementById('editDescription').value = description;

                    // Set photo ke elemen img
                    document.getElementById('editProductImage').src =
                        `data:image/jpeg;base64,${photo}`;

                    const formAction = `{{ url('product-seller/edit') }}/${id}`;
                    document.getElementById('editProductForm').setAttribute('action', formAction);


                    // Tampilkan modal
                    $('#editProductModal').modal('show');
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.deleteButton').forEach(function(element) {
                element.addEventListener('click', function(event) {
                    event.preventDefault();
                    const productId = this.getAttribute('data-id');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Product will delete permanently if you click yes",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm-' + productId).submit();
                        }
                    });
                });
            });
        });
    </script>



</body>

</html>
