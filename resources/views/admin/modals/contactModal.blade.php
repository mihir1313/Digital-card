<div class="modal fade" id="advocateModal" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Advocates</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form onsubmit="return false" id="advocateForm">
            @csrf

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Name</label>
              <input type="hidden" name="hid" id="hid" value="">
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Position</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="position" name="position">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Qualifi..</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="qualification" name="qualification">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-10">
                <input type="hidden" name="img_hid" id="img_hid" value="">
                <input class="form-control" type="file" id="img" name="img" accept="image/png, image/gif, image/jpeg">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="mobile_no" name="mobile_no">
              </div>
            </div>
           
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Sequence</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="sequence" name="sequence">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <select class="form-select" id="status" name="status" aria-label="Default select example">
                  <option selected>Select Status</option>
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
                </select>
              </div>
            </div>
          

          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="submit">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>