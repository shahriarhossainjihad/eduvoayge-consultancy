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
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLongScollable">Add Video Gallery</button>
                </div>
                <div id="" class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Bio</th>
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
                <h5 class="modal-title" id="exampleModalScrollableTitle">Add Video Gallery Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <form class="teamAddForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control name" name="name" type="text" onkeyup="errorRemove(this);" onblur="errorRemove(this);">
                        <span class="text-danger name_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Position</label>
                        <input class="form-control position" name="position" type="text" onkeyup="errorRemove(this);" onblur="errorRemove(this);">
                        <span class="text-danger position_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Bio</label>
                        <textarea id="" class="form-control bio" name="bio"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Video Gallery Image</h6>
                                <p class="mb-3 text-warning">Note: <span class="fst-italic">Image not
                                        required. If you
                                        add
                                        a Video Gallery Member image
                                        please add a 400 X 400 size image.</span></p>
                                <input type="file" class="image" name="image" id="myDropify" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save_team">Save</button>
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
                <form class="teamEditForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control edit_name" name="name" type="text" onkeyup="errorRemove(this);" onblur="errorRemove(this);">
                        <span class="text-danger edit_name_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Position</label>
                        <input class="form-control edit_position" name="position" type="text" onkeyup="errorRemove(this);" onblur="errorRemove(this);">
                        <span class="text-danger edit_position_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Bio</label>
                        <textarea name="bio" class="form-control edit_bio"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Video Gallery Image</h6>
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
                <button type="button" class="btn btn-primary update_team">Update</button>
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
        const saveTeam = document.querySelector('.save_team');
        saveTeam.addEventListener('click', function(e) {
            e.preventDefault();
            let formData = new FormData($('.teamAddForm')[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/team/store',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status == 200) {
                        $('#exampleModalLongScollable').modal('hide');
                        $('.teamAddForm')[0].reset();
                        toastr.success(res.message);
                        teamView();
                    } else {
                        if (res.error.name) {
                            showError('.name', res.error.name);
                        }
                        if (res.error.position) {
                            showError('.position', res.error.position);
                        }
                        // if (res.error.bio) {
                        //     showError('.bio', res.error.bio);
                        // }
                    }
                }
            });
        })


        // show all Data 
        function teamView() {
            // console.log('hello');
            $.ajax({
                url: '/team/view',
                method: 'GET',
                success: function(res) {
                    const teams = res.data;
                    // console.log(team);
                    $('.showData').empty();
                    if (teams.length > 0) {
                        $.each(teams, function(index, team) {
                            // Calculate the sum of account_transaction balances
                            const tr = document.createElement('tr');
                            tr.innerHTML = `
                                    <td>${index + 1}</td>
                                    <td>
                                     <img src="${team.photo_url ? `/uploads/team/` + team.photo_url : `/dummy/image.jpg`}" alt="cat Image">
                                    </td>
                                    <td>${team.name	 ?? ""}</td>
                                    <td>${team.position ?? ""}</td>
                                    <td>${team.bio ?? ""}</td>
                                    <td>
                                       <a href="#" class="btn btn-primary btn-icon team_edit" data-id=${team.id} data-bs-toggle="modal" data-bs-target="#edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                           <a href="#" class="btn btn-danger btn-icon team_delete" data-id=${team.id}>
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
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLongScollable">Add Team Info<i data-feather="plus"></i></button>
                                    </div>
                                </td>
                            </tr>
                            `);
                    }
                }
            });
        }
        teamView();




        // edit brand
        $(document).on('click', '.team_edit', function(e) {
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
                url: `/team/edit/${id}`,
                type: 'GET',
                success: function(data) {
                    const team = data.team;
                    $('.edit_name').val(team.name);

                    $('.update_team').val(team.id);
                    if (team.position) {
                        $('.edit_position').val(team.position);
                    } else {
                        $('.edit_position').val('');
                    }
                    if (team.bio) {
                        $('.edit_bio').val(team.bio);
                    } else {
                        $('.edit_bio').val('');
                    }
                    if (team.photo_url) {
                        $('.showEditImage').attr('src',
                            'http://127.0.0.1:8000/uploads/team/' + team.photo_url);
                    } else {
                        $('.showEditImage').attr('src',
                            'http://127.0.0.1:8000/dummy/image.jpg');
                    }
                }
            });
        })


        // update team
        $('.update_team').click(function(e) {
            e.preventDefault();
            let id = $(this).val();
            let formData = new FormData($('.teamEditForm')[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: `/team/update/${id}`,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status == 200) {
                        $('#edit').modal('hide');
                        $('.teamEditForm')[0].reset();
                        teamView();
                        toastr.success(res.message);
                    } else {
                        if (res.error.name) {
                            showError('.edit_name', res.error.name);
                        }
                        if (res.error.position) {
                            showError('.edit_position', res.error.position);
                        }
                        // if (res.error.bio) {
                        //     showError('.edit_bio', res.error.bio);
                        // }
                    }
                }
            });
        })

        // gallery Delete
        $(document).on('click', '.team_delete', function(e) {
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
                        url: `/team/destroy/${id}`,
                        type: 'GET',
                        success: function(res) {
                            if (res.status == 200) {
                                toastr.success(res.message);
                                teamView();
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