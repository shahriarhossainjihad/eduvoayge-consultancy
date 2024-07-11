@extends('backend.master')
@section('admin')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="card-title">Gallery Table</h6>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLongScollable">Add Gallery</button>
                </div>
                <div id="" class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="showData">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLongScollable" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Add Gallery Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <form class="gallaryAddForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Title</label>
                        <input class="form-control title" name="name" type="text" onkeyup="errorRemove(this);" onblur="errorRemove(this);">
                        <span class="text-danger title_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Description</label>
                        <textarea id="" class="form-control description" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Gallery Image</h6>
                                <p class="mb-3 text-warning">Note: <span class="fst-italic">Image not
                                        required. If you
                                        add
                                        a category image
                                        please add a 400 X 400 size image.</span></p>
                                <input type="file" class="image" name="image" id="myDropify" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save_gallery">Save</button>
            </div>
        </div>
    </div>
</div>



{{-- //Edit Modal --}}
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Add Gallery Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <form class="gallaryEditForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Title</label>
                        <input class="form-control edit_title" name="name" type="text" onkeyup="errorRemove(this);" onblur="errorRemove(this);">
                        <span class="text-danger edit_title_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-control edit_description"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Gallery Image</h6>
                                <div style="height:150px;position:relative">
                                    <button class="btn btn-info edit_upload_img" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">Browse</button>
                                    <img class="img-fluid showEditImage" src="" style="height:100%; object-fit:cover">
                                </div>
                                <input hidden type="file" class="brandImage edit_image" name="image" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update_galary">Update</button>
            </div>
        </div>
    </div>
</div>

<script>
    function errorRemove(element) {
        tag = element.tagName.toLowerCase();
        if (element.value != '') {
            // console.log('ok');
            if (tag == 'select') {
                $(element).closest('.mb-3').find('.text-danger').hide();
            } else {
                $(element).siblings('span').hide();
                $(element).css('border-color', 'green');
            }
        }
    }

    $(document).ready(function() {
        // showError Function
        function showError(name, message) {
            $(name).css('border-color', 'red');
            $(name).focus();
            $(`${name}_error`).show().text(message);
        }

        // image onload when brand edit
        const edit_upload_img = document.querySelector('.edit_upload_img');
        const edit_image = document.querySelector('.edit_image');
        edit_upload_img.addEventListener('click', function(e) {
            e.preventDefault();
            edit_image.click();

            edit_image.addEventListener('change', function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('.showEditImage').src = e.target.result;
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        // save Gallery
        const saveGallery = document.querySelector('.save_gallery');
        saveGallery.addEventListener('click', function(e) {
            e.preventDefault();
            let formData = new FormData($('.gallaryAddForm')[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/galary/store',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status == 200) {
                        $('#exampleModalLongScollable').modal('hide');
                        $('.gallaryAddForm')[0].reset();
                        toastr.success(res.message);
                        galaryView();
                    } else {
                        if (res.error.name) {
                            showError('.name', res.error.name);
                        }
                    }
                }
            });
        })


        // show all Data 
        function galaryView() {
            // console.log('hello');
            $.ajax({
                url: '/galary/view',
                method: 'GET',
                success: function(res) {
                    const galary = res.data;
                    // console.log(galary);
                    $('.showData').empty();
                    if (galary.length > 0) {
                        $.each(galary, function(index, bank) {
                            // Calculate the sum of account_transaction balances
                            const tr = document.createElement('tr');
                            tr.innerHTML = `
                                    <td>${index + 1}</td>
                                    <td>${bank.title ?? ""}</td>
                                    <td>${bank.description ?? ""}</td>
                                    <td>
                                     <img src="${bank.url ? `/uploads/galary/` + bank.url : `/dummy/image.jpg`}" alt="cat Image">
                                    </td>
                                    <td>
                                    
                                       <a href="#" class="btn btn-primary btn-icon btn-sm galary_edit" data-id=${bank.id} data-bs-toggle="modal" data-bs-target="#edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                           <a href="#" class="btn btn-danger btn-icon btn-sm galary_delete" data-id=${bank.id}>
                                    <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                    </td>
                                `;
                            $('.showData').append(tr);
                        });
                    } else {
                        $('.showData').html(`
                            <tr>
                                <td colspan='9'>
                                    <div class="text-center text-warning mb-2">Data Not Found</div>
                                    <div class="text-center">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLongScollable">Add Gallery Info<i data-feather="plus"></i></button>
                                    </div>
                                </td>
                            </tr>
                            `);
                    }
                }
            });
        }
        galaryView();




        // edit brand
        $(document).on('click', '.galary_edit', function(e) {
            e.preventDefault();
            // alert('ok');
            let id = this.getAttribute('data-id');
            // alert(id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: `/galary/edit/${id}`,
                type: 'GET',
                success: function(data) {
                    // console.log(data.brand.name);
                    $('.edit_title').val(data.galary.title);

                    $('.update_galary').val(data.galary.id);
                    if (data.galary.description) {
                        $('.edit_description').val(data.galary.description);
                    } else {
                        $('.edit_description').val('');
                    }
                    if (data.galary.url) {
                        $('.showEditImage').attr('src',
                            'http://127.0.0.1:8000/uploads/galary/' + data.galary.url);
                    } else {
                        $('.showEditImage').attr('src',
                            'http://127.0.0.1:8000/dummy/image.jpg');
                    }
                }
            });
        })


        // update galary
        $('.update_galary').click(function(e) {
            e.preventDefault();
            let id = $(this).val();
            let formData = new FormData($('.gallaryEditForm')[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: `/galary/update/${id}`,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status == 200) {
                        $('#edit').modal('hide');
                        $('.gallaryEditForm')[0].reset();
                        galaryView();
                        toastr.success(res.message);
                    } else {
                        showError('.edit_category_name', res.error.name)
                    }
                }
            });
        })

        // gallery Delete
        $(document).on('click', '.galary_delete', function(e) {
            e.preventDefault();
            // alert("ok")
            let id = this.getAttribute('data-id');

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to Delete this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: `/galary/destroy/${id}`,
                        type: 'GET',
                        success: function(res) {
                            if (res.status == 200) {
                                toastr.success(res.message);
                                galaryView();
                            } else {
                                toastr.warning(res.message);
                            }
                        }
                    });
                }
            });
        })

    })
</script>

@endsection