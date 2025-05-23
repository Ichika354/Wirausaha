<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="addProductForm" class="modal-content" action="{{ route('product.seller.add') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel3">Modal title</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="product" class="form-control" placeholder="Baju"
                                name="product" />
                            <label for="product">Product Name</label>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="stock" class="form-control" placeholder="20" name="stock"
                                oninput="validateNumberInput(this)" />
                            <label for="stock">Stock</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="price" class="form-control" placeholder="50000" name="price"
                                oninput="validateNumberInput(this)" />
                            <label for="price">Price</label>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <select id="category" class="form-select form-select-lg" name="category">
                                <option>Category Select</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category_id }}">{{ $category->category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" id="photo" name="photo" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="deskription" placeholder="Ukuran S M L XL.." name="description"></textarea>
                            <label for="deskription">Description</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
