@extends('admin.index')
@section('admin-title', 'Admin | QR')
@section('admin-content')

    <div class="pagetitle">
        <h1>QR</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col">
                                <button class="btn btn-primary float-end mt-3" id="addQr">Add QR</button>
                            </div>
                        </div>
                        <table class="table" id="qrTable">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">QR</th>
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
    @include('admin.modals.qrModal')

    <script>
        $(document).ready(function() {
            qrList();

        });
        $(document).on('click', '#addQr', function() {
            $("#qrModal").modal("show");
        })

        $('form[id="qrForm"]').validate({
            rules: {
                img: 'required',
            },
            messages: {
                img: 'Image is required',
            },
            submitHandler: function() {
              var formData = new FormData($('#qrForm')[0]);
              $.ajax({
                  url: BASE_URL +"/admin/add/qr",
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
                              
                              qrList();
                              $("#qrModal").modal("hide");
            
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

          function qrList(){
            $("#qrTable").DataTable({
                processing: true,
                bDestroy: true,
                bAutoWidth: false,
                serverSide: true,
                lengthChange: false,
                searching: false,
                paging: false,
                ajax: {
                    type: "POST",
                    url: BASE_URL + "/admin/qr",
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
