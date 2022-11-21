<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="pegawai_id">

                <div class="form-group">
                    <label for="name" class="control-label">Nama</label>
                    <input type="text" class="form-control" id="name-edit">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-name-edit"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">NIP</label>
                    <input type="text" class="form-control" id="nip-edit">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nip-edit"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan-edit">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-jabatan-edit"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Pangkat</label>
                    <input type="text" class="form-control" id="pangkat-edit">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-pangkat-edit"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Golongan</label>
                    <input type="text" class="form-control" id="golongan-edit">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-golongan-edit"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">BATAL</button>
                <button type="button" class="btn btn-primary" id="update">UPDATE</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create post event
    $('body').on('click', '#btn-edit-pegawai', function() {

        let pegawai_id = $(this).data('id');

        //fetch detail post with ajax
        $.ajax({
            url: `/pegawai/${pegawai_id}`,
            type: "GET",
            cache: false,
            success: function(response) {

                //fill data to form
                $('#pegawai_id').val(response.data.id);
                $('#name-edit').val(response.data.name);
                $('#nip-edit').val(response.data.nip);
                $('#jabatan-edit').val(response.data.jabatan);
                $('#pangkat-edit').val(response.data.pangkat);
                $('#golongan-edit').val(response.data.golongan);

                //open modal
                $('#modal-edit').modal('show');
            }
        });
    });

    //action update post
    $('#update').click(function(e) {
        e.preventDefault();

        //define variable
        let pegawai_id = $('#pegawai_id').val();
        let name = $('#name-edit').val();
        let nip = $('#nip-edit').val();
        let jabatan = $('#jabatan-edit').val();
        let pangkat = $('#pangkat-edit').val();
        let golongan = $('#golongan-edit').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //ajax
        $.ajax({

            url: `/pegawai/${pegawai_id}`,
            type: "PUT",
            cache: false,
            data: {
                "name": name,
                "nip": nip,
                "jabatan": jabatan,
                "pangkat": pangkat,
                "golongan": golongan,
                "_token": token
            },
            success: function(response) {

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let pegawai = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.name}</td>
                        <td>${response.data.nip}</td>
                        <td>${response.data.jabatan}</td>
                        <td>${response.data.pangkat}</td>
                        <td>${response.data.golongan}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-pegawai" data-id="${response.data.id}" class="btn btn-primary btn-sm"><i class="mdi mdi-tooltip-edit"></i></a>
                            <a href="javascript:void(0)" id="btn-delete-pegawai" data-id="${response.data.id}" class="btn btn-danger btn-sm"><i
                                                                    class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                `;

                //append to post data
                $(`#index_${response.data.id}`).replaceWith(pegawai);

                //close modal
                $('#modal-edit').modal('hide');


            },
            error: function(error) {

                if (error.responseJSON.name[0]) {

                    //show alert
                    $('#alert-name-edit').removeClass('d-none');
                    $('#alert-name-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-name-edit').html(error.responseJSON.name[0]);
                }

                if (error.responseJSON.nip[0]) {

                    //show alert
                    $('#alert-nip-edit').removeClass('d-none');
                    $('#alert-nip-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-nip-edit').html(error.responseJSON.nip[0]);
                }
                if (error.responseJSON.jabatan[0]) {

                    //show alert
                    $('#alert-jabatan-edit').removeClass('d-none');
                    $('#alert-jabatan-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-jabatan-edit').html(error.responseJSON.jabatan[0]);
                }
                if (error.responseJSON.golongan[0]) {

                    //show alert
                    $('#alert-golongan-edit').removeClass('d-none');
                    $('#alert-golongan-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-golongan-edit').html(error.responseJSON.golongan[0]);
                }

            }

        });

    });
</script>
