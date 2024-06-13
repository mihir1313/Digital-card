@extends('admin.index')
@section('admin-title','Admin | Details')
@section('admin-content')


<div class="pagetitle">
    <h1>Main Details</h1>
    <nav>
       
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary float-end mt-3" id="addDetails">Add Main Detail</button>
                        </div>
                    </div>
                    <table class="table" id="mainDetailList">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center">Phone</th>
                                <th scope="col" style="text-align: center">Mail</th>
                                <th scope="col" style="text-align: center">Contact</th>
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

@include('admin.modals.mainDetailModal')


<script>
    $(document).ready(function() {
        detailList();
    });
    $(document).on('click', '#addDetails', function() {
        $("#mainDetailModal").modal("show");
    })

    $('form[id="DetailsForm"]').validate({
        rules: {
            phone: 'required',
            email: 'required',
            address: 'required',
        },
        messages: {
            phone: 'Phone is required',
            email: 'Email is required',
            address: 'Address is required',
        },
        submitHandler: function() {
            $.ajax({
                url: BASE_URL + "/admin/add/maindetail",
                type: "POST",
                data: $("#DetailsForm").serialize(),
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status == 1) {
                        Swal.fire(
                            'Good job!',
                            data.msg,
                            'success'
                        );
                        detailList();
                        $("#mainDetailModal").modal("hide");
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

    function detailList() {
        $("#mainDetailList").DataTable({
            processing: true,
            bDestroy: true,
            bAutoWidth: false,
            serverSide: true,
            lengthChange: false,
            searching: false,
            paging: false,
            ajax: {
                type: "POST",
                url: BASE_URL + "/admin/maindetail",
                data: {
                    _token: $("[name='_token']").val(),
                },
            },
            columns: [
                {data: "phone", name: "phone"},
                {data: "email", name: "email"},
                {data: "address", name: "address"},
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