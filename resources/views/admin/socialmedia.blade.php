@extends('admin.index')
@section('admin-title', 'Admin | Socail Media')
@section('admin-content')

    <div class="pagetitle">
        <h1>Socail Media Links</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card table-responsive">
                    <div class="card-body">
                        <div class="row">

                            <div class="col">
                                <button class="btn btn-primary float-end mt-3" id="addSocailMedia">Add Socail Media</button>
                            </div>
                        </div>
                        <table class="table" id="socailMediaTable">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">FaceBook</th>
                                    <th scope="col" style="text-align: center">Youtube</th>
                                    <th scope="col" style="text-align: center">Instagram</th>
                                    <th scope="col" style="text-align: center">LinkedIn</th>
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

    @include('admin.modals.socialModal')

    <script>
        $(document).ready(function() {

            socialList();


            $("#socialModal").on("hidden.bs.modal", function() {
                $("#socialForm")[0].reset();
                $("#hid").val("");
                $("#socialForm").validate().resetForm();
                $("#socialForm").find('.error').removeClass('error');
            });

        });

        $(document).on('click', '#addSocailMedia', function() {
            $("#socialModal").modal("show");
        });


        $('form[id="socialForm"]').validate({
            rules: {
                facebook: 'required',
                youtube: 'required',
                instagram: 'required',
                linkedin: 'required',
            },
            messages: {
                facebook: 'Facebook link required',
                youtube: 'Youtube link required',
                instagram: 'Instagram link required',
                linkedin: 'Linkedin link required',
            },
            submitHandler: function() {
                $.ajax({
                    url: BASE_URL + "/admin/add/socialmedia",
                    type: "POST",
                    data: $("#socialForm").serialize(),
                    success: function(response) {
                        var data = JSON.parse(response);
                        console.log(data);
                        if (data.status == 1) {
                            Swal.fire(
                                'Good job!',
                                data.msg,
                                'success'
                            );
                            socialList();
                            $("#socialModal").modal("hide");
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

        function socialList() {
            $("#socailMediaTable").DataTable({
                processing: true,
                bDestroy: true,
                bAutoWidth: false,
                serverSide: true,
                lengthChange: false,
                searching: false,
                paging: false,
                ajax: {
                    type: "POST",
                    url: BASE_URL + "/admin/socialmedia",
                    data: {
                        _token: $("[name='_token']").val(),
                    },
                },
                columns: [{
                        data: "facebook",
                        name: "facebook"
                    },
                    {
                        data: "youtube",
                        name: "youtube"
                    },
                    {
                        data: "instagram",
                        name: "instagram"
                    },
                    {
                        data: "linkedIn",
                        name: "linkedIn"
                    }
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
