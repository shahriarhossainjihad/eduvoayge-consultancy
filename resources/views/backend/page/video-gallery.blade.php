@extends('backend.master')
@section('admin')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title">Video Gallery Table</h6>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModalLongScollable">Add Video Gallery</button>
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
    <div class="modal fade" id="exampleModalLongScollable" tabindex="-1" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add Video Gallery Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <form class="videoGalleryAddForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control title" name="title" type="text" onkeyup="errorRemove(this);"
                                onblur="errorRemove(this);">
                            <span class="text-danger title_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="" class="form-control description" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Add Video Gallery</h6>
                                    <p class="mb-3 text-warning">Note: <span class="fst-italic">Video is
                                            required. If you
                                            add
                                            a Video
                                            please add 200 Mb size Video.</span></p>
                                    <input type="file" class="image" name="image" id="myDropify" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save_video_gallery">Save</button>
                </div>
            </div>
        </div>
    </div>



    {{-- //Edit Modal --}}
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Update Video Gallery Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <form class="videoGalleryEditForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control edit_title" name="title" type="text"
                                onkeyup="errorRemove(this);" onblur="errorRemove(this);">
                            <span class="text-danger edit_title_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control edit_description"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Video Gallery Image</h6>
                                    <div style="height:150px;position:relative">
                                        <button class="btn btn-info edit_upload_img"
                                            style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">Browse</button>
                                        <img class="img-fluid showEditImage" src=""
                                            style="height:100%; object-fit:cover">
                                    </div>
                                    <input hidden type="file" class="brandImage edit_image" name="image" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary update_video_gallery">Update</button>
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

            // image onload when Video Gallery edit
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

            // save Video Gallery
            const saveVideoGallery = document.querySelector('.save_video_gallery');
            saveVideoGallery.addEventListener('click', function(e) {
                e.preventDefault();
                let formData = new FormData($('.videoGalleryAddForm')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/video/gallery/store',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.status == 200) {
                            $('#exampleModalLongScollable').modal('hide');
                            $('.videoGalleryAddForm')[0].reset();
                            toastr.success(res.message);
                            videoGalleryView();
                        } else {
                            if (res.error.title) {
                                showError('.title', res.error.title);
                            }
                            // if (res.error.bio) {
                            //     showError('.bio', res.error.bio);
                            // }
                        }
                    }
                });
            })


            // show all Data
            function videoGalleryView() {
                // console.log('hello');
                $.ajax({
                    url: '/video/gallery/view',
                    method: 'GET',
                    success: function(res) {
                        const videos = res.data;
                        // console.log(team);
                        $('.showData').empty();
                        if (videos.length > 0) {
                            $.each(videos, function(index, video) {
                                // Calculate the sum of account_transaction balances
                                const tr = document.createElement('tr');
                                tr.innerHTML = `
                                    <td>${index + 1}</td>
                                    <td>${video.title	 ?? ""}</td>
                                    <td>${video.description ?? ""}</td>
                                    <td>
                                        <video width="180" height="100" controls>
                                            <source src="/uploads/video-gallery/${video.url}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </td>
                                    <td>
                                       <a href="#" class="btn btn-primary btn-icon video_edit" data-id=${video.id} data-bs-toggle="modal" data-bs-target="#edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                           <a href="#" class="btn btn-danger btn-icon video_delete" data-id=${video.id}>
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
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLongScollable">Add video Info<i data-feather="plus"></i></button>
                                    </div>
                                </td>
                            </tr>
                            `);
                        }
                    }
                });
            }
            videoGalleryView();




            // edit brand
            $(document).on('click', '.video_edit', function(e) {
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
                    url: `/video/gallery/edit/${id}`,
                    type: 'GET',
                    success: function(data) {
                        const video = data.video;
                        $('.edit_title').val(video.title);

                        $('.update_video_gallery').val(video.id);
                        if (video.description) {
                            $('.edit_description').val(video.description);
                        } else {
                            $('.edit_description').val('');
                        }
                        if (video.url) {
                            $('.showEditImage').attr('src',
                                'http://127.0.0.1:8000/uploads/video-gallery/' + video.url);
                        } else {
                            $('.showEditImage').attr('src',
                                'http://127.0.0.1:8000/dummy/image.jpg');
                        }
                    }
                });
            })


            // update video
            $('.update_video_gallery').click(function(e) {
                e.preventDefault();
                let id = $(this).val();
                // alert(id);
                let formData = new FormData($('.videoGalleryEditForm')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: `/video/gallery/update/${id}`,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.status == 200) {
                            $('#edit').modal('hide');
                            $('.videoGalleryEditForm')[0].reset();
                            videoGalleryView();
                            toastr.success(res.message);
                        } else {
                            if (res.error.title) {
                                showError('.edit_title', res.error.title);
                            }
                        }
                    }
                });
            })

            // gallery Delete
            $(document).on('click', '.video_delete', function(e) {
                e.preventDefault();
                // alert("ok")
                let id = this.getAttribute('data-id');

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to Delete this Team Member",
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
                            url: `/video/gallery/destroy/${id}`,
                            type: 'GET',
                            success: function(res) {
                                if (res.status == 200) {
                                    toastr.success(res.message);
                                    videoGalleryView();
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
