@extends('admin.index')
@section('admin-title', 'Admin | About')
@section('admin-content')

    <div class="pagetitle">
        <h1>About</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col">
                                <button class="btn btn-primary float-end mt-3" id="addAbout">Add About</button>
                            </div>
                        </div>
                        <table class="table" id="aboutList">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">Content</th>
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
    @include('admin.modals.aboutModal')

    <script>
        $(document).ready(function() {
            aboutList();

            $("#aboutModal").on("hidden.bs.modal", function () {
                $("#aboutForm")[0].reset();
                $("#aboutForm").validate().resetForm();
                $("#aboutForm").find('.error').removeClass('error');
            });

        });
        $(document).on('click', '#addAbout', function() {
            $("#aboutModal").modal("show");
        })

        $('form[id="aboutForm"]').validate({
            rules: {
                about: 'required',
            },
            messages: {
                about: 'about is required',
            },
            submitHandler: function() {
                $.ajax({
                    url: BASE_URL + "/admin/add/about",
                    type: "POST",
                    data: $("#aboutForm").serialize(),
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.status == 1) {
                            Swal.fire(
                                'Good job!',
                                data.msg,
                                'success'
                            );
                            aboutList();
                            $("#aboutModal").modal("hide");
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

        function aboutList() {
            $("#aboutList").DataTable({
                processing: true,
                bDestroy: true,
                bAutoWidth: false,
                serverSide: true,
                lengthChange: false,
                searching: false,
                paging: false,
                ajax: {
                    type: "POST",
                    url: BASE_URL + "/admin/about",
                    data: {
                        _token: $("[name='_token']").val(),
                    },
                },
                columns: [{
                    data: "description",
                    name: "description"
                }, ],
                columnDefs: [{
                    targets: [],
                    orderable: false,
                    searchable: false,
                }, ],
            });
        }
    </script>

@endsection
