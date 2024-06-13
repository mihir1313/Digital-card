<div class="modal fade" id="firmModal" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Firm Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form onsubmit="return false" id="firmDetailForm">
             @csrf

             <div class="row mb-3">

                <label for="inputText" class="col-sm-2 col-form-label">Firm Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="firmname" name="firmname">
                </div>
              </div>
             <div class="row mb-3">
                <input type="hidden" name="hid" id="hid" value="">
                <label for="inputText" class="col-sm-2 col-form-label">Firm Type</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="firmtype" name="firmtype">
                </div>
              </div>
             <div class="row mb-3">
                <input type="hidden" name="hid" id="hid" value="">
                <label for="inputText" class="col-sm-2 col-form-label">Descri..</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="description" name="description">
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