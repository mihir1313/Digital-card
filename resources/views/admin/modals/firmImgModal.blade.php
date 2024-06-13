<div class="modal fade" id="firmImgModal" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Qr</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form onsubmit="return false" id="firmImgForm">
            @csrf

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-10">
                <input type="hidden" name="img_hid" id="img_hid" value="">
                <input class="form-control" type="file" id="img" name="img" accept="image/png, image/gif, image/jpeg">
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