@extends('admin.index')
@section('admin-title', 'Admin | Address')
@section('admin-content')

    <div class="pagetitle">
        <h1>Address</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col">
                                <button class="btn btn-primary float-end mt-3" id="addAddress">Add Address</button>
                            </div>
                        </div>
                        <table class="table" id="addressList">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">Content</th>
                                    <th scope="col" style="text-align: center">Location</th>
                                    <th scope="col" style="text-align: center">Action</th>
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
    @include('admin.modals.addressModal')

    <script>
        $(document).ready(function() {
            addressList();


            $("#addressModal").on("hidden.bs.modal", function () {
                $("#addressForm")[0].reset();
                $("#hid").val("");
                $("#addressForm").validate().resetForm();
                $("#addressForm").find('.error').removeClass('error');
            });

        });

        $(document).on('click','#addAddress',function(){
            $("#addressModal").modal("show");
        })

        $('form[id="addressForm"]').validate({
            rules: {
                address: 'required',
            },
            messages: {
                address: 'address is required',
            },
            submitHandler: function() {
                $.ajax({
                    url: BASE_URL + "/admin/add/address",
                    type: "POST",
                    data: $("#addressForm").serialize(),
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.status == 1) {
                            Swal.fire(
                                'Good job!',
                                data.msg,
                                'success'
                            );
                            addressList();
                            $("#addressModal").modal("hide");
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

        function addressList() {
            $("#addressList").DataTable({
                processing: true,
                bDestroy: true,
                bAutoWidth: false,
                serverSide: true,
                lengthChange: false,
                searching: false,
                paging: false,
                ajax: {
                    type: "POST",
                    url: BASE_URL + "/admin/address",
                    data: {
                        _token: $("[name='_token']").val(),
                    },
                },
                columns: [
                    {data: "description",name: "description"},
                    {data: "location",name: "location"},
                    {data: "action",name: "action"},
                     ],
                columnDefs: [{
                    targets: [],
                    orderable: false,
                    searchable: false,
                }, ],
            });
        }

        $(document).on('click','#editAddress',function(){
            var editId = $(this).data('id');
            $.ajax({
                type: "post",
                url: BASE_URL + "/admin/edit/address",
                data: {
                    _token: $("[name='_token']").val(),
                    id: editId,
                },
                success: function (response) {
                    var data = JSON.parse(response);

                    if (data.status == 1) {
                    $('#hid').val(data.data.id)
                     $('#address').val(data.data.description)
                     $('#location').val(data.data.location)
                     $("#addressModal").modal("show");
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
        $(document).on('click','#removeAddress',function(){
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
                        url:  BASE_URL + "/admin/remove/address",
                        data: {
                            _token: $("[name='_token']").val(),
                            id: deleteId,
                        },
                        success: function (response) {
                            var data = JSON.parse(response);
                            if (data.status == 1) {
                                Swal.fire(
                                  'Deleted!',
                                  'Your file has been deleted.',
                                  'success'
                                );
                                addressList();
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
