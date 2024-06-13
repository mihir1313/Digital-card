@extends('admin.index')
@section('admin-title', 'Admin | Category')
@section('admin-content')

<div class="pagetitle">
    <h1>Law Category</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col">
                            <button class="btn btn-primary float-end mt-3" id="addCategory">Add Category</button>
                        </div>
                    </div>
                    <table class="table" id="categoryTable">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center">Category</th>
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
@include('admin.modals.categoryModal')

<script>
    $(document).ready(function() {
        categoryList();
        

    $("#categoryModal").on("hidden.bs.modal", function () {
        $("#categoryForm")[0].reset();
        $("#hid").val("");
        $("#categoryForm").validate().resetForm();
        $("#categoryForm").find('.error').removeClass('error');
    });
    
    });

    $(document).on('click', '#addCategory', function() {
        $("#categoryModal").modal("show");
    });


    $('form[id="categoryForm"]').validate({
        rules: {
            category: 'required',
        },
        messages: {
            category: 'category is required',
        },
        submitHandler: function() {
            $.ajax({
                url: BASE_URL + "/admin/add/category",
                type: "POST",
                data: $("#categoryForm").serialize(),
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status == 1) {
                        Swal.fire(
                            'Good job!',
                            data.msg,
                            'success'
                        );
                        categoryList();
                        $("#categoryModal").modal("hide");
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

    function categoryList() {
        $("#categoryTable").DataTable({
            processing: true,
            bDestroy: true,
            bAutoWidth: false,
            serverSide: true,
            lengthChange: false,
            searching: false,
            paging: false,
            ajax: {
                type: "POST",
                url: BASE_URL + "/admin/category",
                data: {
                    _token: $("[name='_token']").val(),
                },
            },
            columns: [
                {data: "category",name: "category"},
                {data: "action",name: "action"},
                 ],
            columnDefs: [{
                targets: [],
                orderable: false,
                searchable: false,
            }, ],
        });
    }

    $(document).on('click','#editCategory',function(){
        var editId = $(this).data('id');
$.ajax({
    type: "post",
    url: BASE_URL + "/admin/edit/category",
    data: {
        _token: $("[name='_token']").val(),
        id: editId,
    },
    success: function (response) {
        var data = JSON.parse(response);

        if (data.status == 1) {
        $('#hid').val(data.data.id)
         $('#category').val(data.data.category)
         $("#categoryModal").modal("show");
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
    $(document).on('click','#removeCateory',function(){
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
            url:  BASE_URL + "/admin/remove/category",
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
                    categoryList();
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
