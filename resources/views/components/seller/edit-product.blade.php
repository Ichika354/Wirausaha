<div class="modal fade" id="editProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" id="editProductForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h4 class="modal-title" id="editProductModalLabel">Edit Produk</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col mb-3 text-center">
                        <img id="editProductImage" src="" alt="Product Image" class="img-fluid"
                            style="max-height: 200px;">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="editProduct" class="form-control" placeholder="Baju"
                                name="product" />
                            <label for="editProduct">Product Name</label>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="editStock" class="form-control" placeholder="20" name="stock"
                                oninput="validateNumberInput(this)" />
                            <label for="editStock">Stock</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="editPrice" class="form-control" placeholder="50000" name="price"
                                oninput="validateNumberInput(this)" />
                            <label for="editPrice">Price</label>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <select id="editCategory" class="form-select form-select-lg" name="category">
                                <option>Category Select</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category_id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" id="editPhoto" name="photo" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-3">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="editDescription" placeholder="Ukuran S M L XL.." name="description"></textarea>
                            <label for="editDescription">Description</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
