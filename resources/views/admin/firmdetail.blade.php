@extends('admin.index')
@section('admin-title','Admin | Firm Detail')
@section('admin-content')


<div class="pagetitle">
    <h1>Firm Detail</h1>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card table-responsive">
          <div class="card-body">
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary float-end mt-3" id="addfirmdetails">Add Firm Details</button>
                </div>
            </div>
            <table class="table" id="firmTable">
              <thead>
                <tr>
                  <th scope="col">Firm Name</th>
                  <th scope="col">Firm Type</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
              
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
@section('admin-footer')
@include('admin.modals.firmModal')

<script>

    $(document).ready(function() {
        firmList();
        

    $("#firmModal").on("hidden.bs.modal", function () {
        $("#firmDetailForm")[0].reset();
        $("#hid").val("");
        $("#firmDetailForm").validate().resetForm();
        $("#firmDetailForm").find('.error').removeClass('error');
    });
    
    });

    $(document).on('click', '#addfirmdetails', function() {
        $("#firmModal").modal("show");
    });

    $('form[id="firmDetailForm"]').validate({
      rules: {
        firmname: 'required',
        firmtype: 'required',
        description: 'required',
      },
      messages: {
        firmname: 'firmname is required',
        firmtype: 'firmtype is required',
        description: 'description is required',
      },
      submitHandler: function() {
          $.ajax({
              url: BASE_URL + "/admin/add/firmdetails",
              type: "POST",
              data: $("#firmDetailForm").serialize(),
              success: function(response) {
                  var data = JSON.parse(response);

                  if (data.status == 1) {
                      Swal.fire(
                          'Good job!',
                          data.msg,
                          'success'
                      );
                      firmList();
                      $("#firmModal").modal("hide");
                  } else {
                      Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: data.msg,
                      })
                  }
              },
          });
      },
  });
  function firmList() {
    $("#firmTable").DataTable({
        processing: true,
        bDestroy: true,
        bAutoWidth: false,
        serverSide: true,
        lengthChange: false,
        searching: false,
        paging: false,
        ajax: {
            type: "POST",
            url: BASE_URL + "/admin/firmdetails",
            data: {
                _token: $("[name='_token']").val(),
            },
        },
        columns: [
          {data: "firm_name",name: "firm_name"},
          {data: "firm_type",name: "firm_type"},
          {data: "description",name: "description"},
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