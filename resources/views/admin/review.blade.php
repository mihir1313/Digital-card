@extends('admin.index')
@section('admin-title', 'Admin | Review')
@section('admin-content')

    <div class="pagetitle">
        <h1>Review</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card table-responsive">
                    <div class="card-body">
                        <div class="row">

                            <div class="col">
                                <button class="btn btn-primary float-end mt-3" id="addReview">Add Review</button>
                            </div>
                        </div>
                        <table class="table" id="reviewTable">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">Name</th>
                                    <th scope="col" style="text-align: center">Occupation</th>
                                    <th scope="col" style="text-align: center">Description</th>
                                    <th scope="col" style="text-align: center">Star</th>
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

    @include('admin.modals.reviewModal')

    <script>
        $(document).ready(function() {

            reviewList();


            $("#reviewModal").on("hidden.bs.modal", function() {
                $("#reviewForm")[0].reset();
                $("#hid").val("");
                $("#reviewForm").validate().resetForm();
                $("#reviewForm").find('.error').removeClass('error');
            });

        });

        $(document).on('click', '#addReview', function() {
            $("#reviewModal").modal("show");
        });


        $('form[id="reviewForm"]').validate({
            rules: {
                name: 'required',
                star: 'required',
                description: 'required',
            },
            messages: {
                name: 'Name is required',
                star: 'Star is required',
                description: 'Description is required',
            },
            submitHandler: function() {
                $.ajax({
                    url: BASE_URL + "/admin/add/review",
                    type: "POST",
                    data: $("#reviewForm").serialize(),
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.status == 1) {
                            Swal.fire(
                                'Good job!',
                                data.msg,
                                'success'
                            );
                            reviewList();
                            $("#reviewModal").modal("hide");
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

        function reviewList() {
            $("#reviewTable").DataTable({
                processing: true,
                bDestroy: true,
                bAutoWidth: false,
                serverSide: true,
                lengthChange: false,
                searching: false,
                paging: false,
                ajax: {
                    type: "POST",
                    url: BASE_URL + "/admin/review",
                    data: {
                        _token: $("[name='_token']").val(),
                    },
                },
                columns: [{
                        data: "name",
                        name: "name"
                    },
                    {
                        data: "occupation",
                        name: "occupation"
                    },
                    {
                        data: "description",
                        name: "description"
                    },
                    {
                        data: "stars",
                        name: "stars"
                    },
                    {
                        data: "action",
                        name: "action"
                    },
                ],
                columnDefs: [{
                    targets: [],
                    orderable: false,
                    searchable: false,
                }, ],
            });
        }

        $(document).on('click', '#editReview', function() {
            var editId = $(this).data('id');
            $.ajax({
                type: "post",
                url: BASE_URL + "/admin/edit/review",
                data: {
                    _token: $("[name='_token']").val(),
                    id: editId,
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status == 1) {
                        $('#hid').val(data.data.id);
                        $('#name').val(data.data.name);
                        $('#occupation').val(data.data.occupation);
                        $('#star').val(data.data.stars);
                        $('#description').val(data.data.description);
                        $("#reviewModal").modal("show");
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.msg,
                        });
                    }
                },
            });
        });


        $(document).on('click','#removeReview',function(){
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
                url:  BASE_URL + "/admin/remove/review",
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
                        reviewList();
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
        });
    </script>

@endsection
