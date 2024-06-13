@extends('admin.index')
@section('admin-title','Admin | Advocates')
@section('admin-content')

  <div class="pagetitle">
    <h1>Advocate</h1>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card table-responsive">
          <div class="card-body">
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary float-end mt-3" id="addAdvocate">Add Advocate</button>
                </div>
            </div>
            <table class="table" id="advocateTable">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Image</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Sequence</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
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
@include('admin.modals.contactModal')

<script>

    $(document).ready(function(){
      advocateList();

      $("#advocateModal").on("hidden.bs.modal", function() {
        $("#advocateForm")[0].reset();
        $("#hid").val("");
        $('#img_hid').val('');

        $("#advocateForm").validate().resetForm();
        $("#advocateForm").find('.error').removeClass('error');
    });
        
});

$(document).on('click','#addAdvocate',function(){
    $("#advocateModal").modal("show");
})



$('form[id="advocateForm"]').validate({
  rules: {
      name: 'required',
      qualification: 'required',
      {{--  mobile_no: {
        required: true,
        digits: true,  
        minlength: 10,  
        maxlength: 10   
      },  --}}
      sequence: {
        required: true,
        digits: true,  
        minlength: 1,  
        maxlength: 2   
      },
      status: 'required',
  },
  messages: {
      name: 'Name is required',
      qualification: 'qualification is required',
      {{--  mobile_no: {
        required: 'Phone is required',
        minlength: 'Phone must be exactly 10 digits',
        digits: 'Phone must contain only numeric characters',
        maxlength: 'Phone must be exactly 10 digits'
      },  --}}
      sequence: {
        required: 'Sequence is required',
        minlength: 'Sequence must be exactly 1 digits',
        digits: 'Sequence must contain only numeric characters',
        maxlength: 'Sequence must be exactly 1 digits'
      },
      status: 'status is required',
  },
  submitHandler: function() {
    var formData = new FormData($('#advocateForm')[0]);
    $.ajax({
        url: BASE_URL +"/admin/add/advocate",
        type: 'post',
        contentType: false,
        cache: false,
        processData: false,
        data: formData,
        success: function (response) {
            var result = JSON.parse(response);
          console.log(result)
            if (result.status == 1) {
                $("#advocateModal").modal("hide");
                advocateList();
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
  
        }
    })
  },
});

{{-- $('#submit').on("click", function () {




  var formData = new FormData($('#advocateForm')[0]);
  $.ajax({
      url: BASE_URL +"/admin/add/advocate",
      type: 'post',
      contentType: false,
      cache: false,
      processData: false,
      data: formData,
      success: function (response) {
          var result = JSON.parse(response);

          if (result.status == 1) {
              $("#advocateModal").modal("hide");
              advocateList();

          } else {
             
          }

      }
  })
}) --}}


function advocateList() {
  $("#advocateTable").DataTable({
      processing: true,
      bDestroy: true,
      bAutoWidth: false,
      serverSide: true,
      lengthChange: false,
      searching: false,
      paging: false,
      ajax: {
          type: "POST",
          url: BASE_URL + "/admin/advocate",
          data: {
              _token: $("[name='_token']").val(),
          },
      },
      columns: [
          {data: "name",name: "name"},
          {data: "position",name: "position"},
          {data: "qualification",name: "qualification"},
          {data: "img",name: "img"},
          {data: "phone",name: "phone"},
          {data: "sequence",name: "sequence"},
          {data: "status",name: "status"},
          {data: "action",name: "action"},
           ],
      columnDefs: [{
          targets: [],
          orderable: false,
          searchable: false,
      }, ],
  });
}

$(document).on('click','#edit',function(){
  var editId = $(this).data('id');
  $.ajax({
      type: "post",
      url: BASE_URL + "/admin/edit/advocate",
      data: {
          _token: $("[name='_token']").val(),
          id: editId,
      },
      success: function(response) {
          var data = JSON.parse(response);
          console.log(data)
          if (data.status == 1) {
              $('#hid').val(data.data.id);
              $('#name').val(data.data.name);
              $('#position').val(data.data.position);
              $('#qualification').val(data.data.qualification);
              $('#sequence').val(data.data.sequence);
              $('#img_hid').val(data.data.img);
              $('#mobile_no').val(data.data.phone);
              $('select[name="status"]')
              .val(data.data.status)
              .trigger("change");
              $("#advocateModal").modal("show");
          } else {
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: data.msg,
              });
          }
      },
  });
})
$(document).on('click','#remove',function(){
  var deleteId = $(this).data('id');
  Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
  
          $.ajax({
              type: "post",
              url:  BASE_URL + "/admin/remove/advocate",
              data: {
                  _token: $("[name='_token']").val(),
                  id: deleteId,
              },
              success: function (response) {
                  var data = JSON.parse(response);
                  if (data.status == 1) {
                      Swal.fire(
                        'Deleted!',
                        'Record has been deleted.',
                        'success'
                      );
                      advocateList();
                  } else{
                      Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: data.msg,
                      })
                  }
              },
          });
      }
    })
})
    </script>
@endsection