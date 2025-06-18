<!-- Edit Modal -->
<div class="modal fade " id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" style="z-index: 999999; ">
  <div class="modal-dialog modal-xl"> <!-- modal-xl for large content like forms -->
    <div class="modal-content " style="min-height: 80vh;">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <!-- Place your edit form here (Your large product form HTML) -->
        <!-- Example: -->
        <div class="container">
          <div class="row">
            <!-- Your full form layout starts here -->
            <div class="col-lg-8 mt-4">
              <label class="form-label">Product Title</label>
              <input type="text" class="form-control" />

              <label class="form-label mt-4">Product Description</label>
              <textarea class="form-control" rows="5"></textarea>

              <div class="row mt-5">
                <div class="col-lg-6 ">
                  <label class="form-label">Gender</label>
                  <select class="form-select">
                    <option selected disabled>Select one</option>
                    <option>Woman</option>
                    <option>Man</option>
                  </select>
                </div>
                <div class="col-lg-6 ">
                  <label class="form-label">Category</label>
                  <select class="form-select">
                    <option selected disabled>Select one</option>
                    <option>Shirt</option>
                    <option>Pants</option>
                  </select>
                </div>
              </div>

              <div class="row mt-3 mt-5">
                <div class="col-lg-6">
                  <label class="form-label">Price</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="col-lg-6">
                  <label class="form-label">Stock</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>

            <div class="col-lg-4 mt-3 mt-lg-0">
              <label class="form-label">Upload Image</label>
              <input type="file" class="form-control" onchange="previewImage(event)" />
              
              <img id="imagePreview" src="resources/images/general-img-landscape.png" class="img-fluid mt-3 mx-auto" alt="Preview" />
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>
