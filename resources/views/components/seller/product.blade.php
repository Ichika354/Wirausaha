<div class="card">
    <h5 class="card-header">Product List</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>No</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    use Carbon\Carbon;
                    \Carbon\Carbon::setLocale('id'); // Set locale ke bahasa Indonesia
                @endphp
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->category->category }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->detail }}</td>
                        <td>
                            <a href="javascript:void(0);" class="open-modal"
                                data-photo="data:image/jpeg;base64,{{ $product->photo }}">
                                <i class="menu-icon tf-icons mdi mdi-image"></i>
                            </a>
                            {{-- <img src="data:image/jpeg;base64,{{ $product->photo }}" alt="{{ $product->product_name }}" class="img-fuild" width="100"> --}}
                        </td>
                        <td>{{ Carbon::parse($product->created_at)->translatedFormat('d F Y H:i') }}</td>
                        <td>{{ Carbon::parse($product->updated_at)->translatedFormat('d F Y H:i') }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="javascript:void(0);" class="dropdown-item edit-product"
                                        data-id="{{ $product->product_id }}" data-name="{{ $product->product_name }}"
                                        data-price="{{ $product->price }}" data-stock="{{ $product->stock }}"
                                        data-category="{{ $product->category_id }}"
                                        data-description="{{ $product->detail }}" data-photo="{{ $product->photo }}">
                                        <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                    </a>
                                    <form id="deleteForm-{{ $product->product_id }}"
                                        action="{{ route('product.seller.delete', $product->product_id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Tombol Delete -->
                                        <button type="submit" class="dropdown-item deleteButton"
                                            data-id="{{ $product->product_id }}">
                                            <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<div class="buy-now">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
        Add Product
    </button>
</div>

{{-- modal --}}
@include('components.seller.add-product')
@include('components.seller.image')
@include('components.seller.edit-product')
