@extends('admin.index')
@section('admin-title', 'Admin | Firm Image')
@section('admin-content')

<div class="pagetitle">
    <h1>Firm Image</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col">
                            <button class="btn btn-primary float-end mt-3" id="addFirmImg">Add Firm Image</button>
                        </div>
                    </div>
                    <table class="table" id="FirmImgTable">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center">Image</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('admin-footer')

@include('admin.modals.firmImgModal')

<script>
    $(document).ready(function() {
        firmImgList();

        $("#firmImgModal").on("hidden.bs.modal", function () {
            $("#firmImgForm")[0].reset();
            $("#firmImgForm").validate().resetForm();
            $("#firmImgForm").find('.error').removeClass('error');
        });

    });
    $(document).on('click', '#addFirmImg', function() {
        $("#firmImgModal").modal("show");
    })

    $('form[id="firmImgForm"]').validate({
        rules: {
            img: 'required',
        },
        messages: {
            img: 'Image is required',
        },
        submitHandler: function() {
          var formData = new FormData($('#firmImgForm')[0]);
          $.ajax({
              url: BASE_URL +"/admin/add/firmimg",
              type: 'post',
              contentType: false,
              cache: false,
              processData: false,
              data: formData,
              success: function (response) {
                  var result = JSON.parse(response);
                console.log(result)
                  if (result.status == 1) {
                      
                      Swal.fire(
                          'Good job!',
                          result.msg,
                          'success'
                          );
                          
                          firmImgList();
                          $("#firmImgModal").modal("hide");
        
                  } else {
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: data.msg,
                  });
                  }
        
              }
          })
        },
      });

      function firmImgList(){
        $("#FirmImgTable").DataTable({
            processing: true,
            bDestroy: true,
            bAutoWidth: false,
            serverSide: true,
            lengthChange: false,
            searching: false,
            paging: false,
            ajax: {
                type: "POST",
                url: BASE_URL + "/admin/firmimg",
                data: {
                    _token: $("[name='_token']").val(),
                },
            },
            columns: [
                {data: "img", name: "img"},
                 ],
            columnDefs: [{
                targets: [],
                orderable: false,
                searchable: false,
            }, ],
        });
      }
</script>
@endsection
