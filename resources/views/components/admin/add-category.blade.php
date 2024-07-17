<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <form class="modal-content" action="{{ route('category.admin.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel3">Add Category</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row g-2">
                  <div class="col mb-3">
                      <div class="form-floating form-floating-outline">
                          <input type="text" id="category" class="form-control" placeholder="Baju"
                              name="category" />
                          <label for="category">Category Name</label>
                      </div>
                  </div>
              </div>
              <div class="row g-2">
                  <div class="col mb-3">
                      <div class="form-floating form-floating-outline">
                          <input type="text" id="icon" class="form-control" placeholder="fa-solid fa-bowl" name="icon"
                              />
                          <label for="icon">Icon</label>
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
