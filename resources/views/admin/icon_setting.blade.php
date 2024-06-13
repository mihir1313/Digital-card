@extends('admin.index')
@section('admin-title', 'Admin | Icon Setting')
@section('admin-content')

    <div class="pagetitle">
        <h1>Icon Setting</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Icons Setting</h5>

                                    <form onsubmit="return false" id="iconSettingForm">
                                      @csrf
                                      <div class="row mb-3">
                                        <label for="phone" class="col-sm-2 col-form-label"><i class="bi bi-telephone mx-3"></i>Phone</label>
                                 
                                      
                                        <div class="col-sm-6">
                                          <input type="number" id="phone" name="phone" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                                <select class="form-select" id="phoneStatus" name="phoneStatus" aria-label="Default select example">
                                                  <option value=''>Select Status</option>
                                                  <option value="1">Active</option>
                                                  <option value="0">InActive</option>
                                                </select>
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label for="whatsApp" class="col-sm-2 col-form-label"><i class="bi bi-whatsapp mx-3"></i>WhatsApp</label>
                                        <div class="col-sm-6">
                                          <input type="number" id="whatsApp" name="whatsApp" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select" id="whatsAppStatus" name="whatsAppStatus" aria-label="Default select example">
                                                <option value=''>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                    </div>
                                      </div>
                                      <div class="row mb-3">
                                        
                                        <label for="location" class="col-sm-2 col-form-label"><i class="bi bi-pin-map mx-3"></i>Location</label>
                                        <div class="col-sm-6">
                                          <input type="url" id="location" name="location" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select" id="locationStatus" name="locationStatus" aria-label="Default select example">
                                                <option value=''>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                    </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label for="mail" class="col-sm-2 col-form-label"><i class="bi bi-envelope mx-3"></i>Mail</label>
                                        <div class="col-sm-6">
                                          <input type="email" id="mail" name="mail" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select" id="mailStatus" name="mailStatus" aria-label="Default select example">
                                                <option value=''>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                    </div>
                                      </div>
                                      <div class="row mb-3">
                                        
                                        <label for="website" class="col-sm-2 col-form-label"><i class="bi bi-globe mx-3"></i>Website</label>
                                        <div class="col-sm-6">
                                          <input class="form-control" id="website" name="website" type="url" >
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select" id="websiteStatus" name="websiteStatus" aria-label="Default select example">
                                                <option value=''>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                    </div>
                                      </div>
                                     
                                     
                      
                                      <div class="row mb-3">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-4 d-flex justify-content-center">
                                          <button type="submit" class="btn btn-primary">
                                            Save
                                          </button>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                      </div>
                                    </form><!-- End General Form Elements -->
                      
                                  </div>
                                </div>
                      
                            </div>
                       
                    </div>
                

            {{--  </div>  --}}
        </div>
    </section>

@endsection
@section('admin-footer')
    @include('admin.modals.qrModal')

    <script>

    $(document).ready(function(){
      iconSettingList();
    })
      $('form[id="iconSettingForm"]').validate({
        rules: {
            phone: 'required',
            whatsApp: 'required',
            location: 'required',
            mail: 'required',
            website: 'required',

            phoneStatus: 'required',
            whatsAppStatus: 'required',
            locationStatus: 'required',
            mailStatus: 'required',
            websiteStatus: 'required',
        },
        messages: {
          phone: 'Phone is required',
          whatsApp: 'WhatsApp is required',
          location: 'Location is required',
          mail: 'Mail is required',
          website: 'Website is required',

          phoneStatus: 'Phone status is required',
            whatsAppStatus: 'WhatsApp status is required',
            locationStatus: 'Location status is required',
            mailStatus: 'Mail status is required',
            websiteStatus: 'Website status is required',
          
        },
        submitHandler: function() {
            $.ajax({
                url: BASE_URL + "/admin/add/icon-setting",
                type: "POST",
                data: $("#iconSettingForm").serialize(),
                success: function(response) {
                  var result = JSON.parse(response);
                  iconSettingList(result.id);
                  console.log(result);
                  if (result.status == 1) {
                    Swal.fire(
                                'Good job!',
                                result.msg,
                                'success'
                            );
      
                } else {
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.msg,
                });
                }
                },
            });
        },
    });

    function iconSettingList(id) {
     var id = id ? id : "";
     $.ajax({
      type: "post",
      url: BASE_URL + "/admin/fill/icon-setting",
      data: {
          _token: $("[name='_token']").val(),
          id: id,
      },
      success: function(response) {
          var data = JSON.parse(response);
          console.log(data)
          if (data.status == 1) {
              $('#phone').val(data.data.phone);
              $('#whatsApp').val(data.data.whatsapp);
              $('#location').val(data.data.location);
              $('#mail').val(data.data.mail);
              $('#website').val(data.data.website);
              $('select[name="phoneStatus"]')
              .val(data.data.phone_status)
              .trigger("change");
              $('select[name="whatsAppStatus"]')
              .val(data.data.whatsapp_status)
              .trigger("change");
              $('select[name="locationStatus"]')
              .val(data.data.location_status)
              .trigger("change");
              $('select[name="mailStatus"]')
              .val(data.data.mail_status)
              .trigger("change");
              $('select[name="websiteStatus"]')
              .val(data.data.website_status)
              .trigger("change");
          } else {
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: data.msg,
              });
          }
      },
  })
      return false;
     
    }
    </script>

@endsection
