<div class="modal fade" id="mainDetailModal" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Main Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form onsubmit="return false" id="DetailsForm">
             @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="phone" name="phone">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <textarea class="form-control" style="height: 100px" id="address" name="address"></textarea>
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