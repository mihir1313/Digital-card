<div class="modal fade" id="categoryModal" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Law Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form onsubmit="return false" id="categoryForm">
             @csrf

             <div class="row mb-3">
                <input type="hidden" name="hid" id="hid" value="">
                <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="category" name="category">
                </div>
              </div>
          
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>