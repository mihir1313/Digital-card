<div class="modal fade" id="socialModal" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Social Media</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form onsubmit="return false" id="socialForm">
             @csrf
            <div class="row mb-3">
                <input type="hidden" name="hid" id="hid" value="">
              <label for="inputText" class="col-sm-2 col-form-label">Facebook</label>
              <div class="col-sm-10">
                <input type="url" class="form-control" id="facebook" name="facebook">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Youtube</label>
              <div class="col-sm-10">
                <input type="url" class="form-control" id="youtube" name="youtube">
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Instagram</label>
                <div class="col-sm-10">
                  <input type="url" class="form-control" id="instagram" name="instagram">
                </div>
              </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">LinkedIn</label>
                <div class="col-sm-10">
                  <input type="url" class="form-control" id="linkedIn" name="linkedIn">
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