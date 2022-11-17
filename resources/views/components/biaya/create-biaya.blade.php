<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Biaya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="control-label">Kegiatan</label>
                    <input type="text" class="form-control" id="kegiatan">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kegiatan"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-lokasi"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-tanggal"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Kode Rekening</label>
                    <input type="text" class="form-control" id="kode_rek">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kode_rek"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Nama</label>
                    <input type="text" class="form-control" id="nama">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nama"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="store">SIMPAN</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create post event
    $('body').on('click', '#btn-create-biaya', function() {

        //open modal
        $('#modal-create').modal('show');
    });

    //action create post
    $('#store').click(function(e) {
        e.preventDefault();

        //define variable
        let name = $('#name').val();
        let nip = $('#nip').val();
        let jabatan = $('#jabatan').val();
        let pangkat = $('#pangkat').val();
        let golongan = $('#golongan').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //ajax
        $.ajax({

            url: `/biaya`,
            type: "POST",
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
                let biaya = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.name}</td>
                        <td>${response.data.nip}</td>
                        <td>${response.data.jabatan}</td>
                        <td>${response.data.pangkat}</td>
                        <td>${response.data.golongan}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-biaya" data-id="${response.data.id}" class="btn btn-primary btn-sm"><i
                                                                    class="mdi mdi-tooltip-edit"></i></a>
                            <a href="javascript:void(0)" id="btn-delete-biaya" data-id="${response.data.id}" class="btn btn-danger btn-sm"><i
                                                                    class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                `;

                //append to table
                $('#table-biaya').prepend(biaya);

                //clear form
                $('#name').val('');
                $('#nip').val('');
                $('#jabatan').val('');
                $('#pangkat').val('');
                $('#golongan').val('');

                //close modal
                $('#modal-create').modal('hide');


            },
            error: function(error) {

                if (error.responseJSON.name[0]) {

                    //show alert
                    $('#alert-name').removeClass('d-none');
                    $('#alert-name').addClass('d-block');

                    //add message to alert
                    $('#alert-name').html(error.responseJSON.name[0]);
                }

                if (error.responseJSON.nip[0]) {

                    //show alert
                    $('#alert-nip').removeClass('d-none');
                    $('#alert-nip').addClass('d-block');

                    //add message to alert
                    $('#alert-nip').html(error.responseJSON.nip[0]);
                }
                if (error.responseJSON.jabatan[0]) {

                    //show alert
                    $('#alert-jabatan').removeClass('d-none');
                    $('#alert-jabatan').addClass('d-block');

                    //add message to alert
                    $('#alert-jabatan').html(error.responseJSON.jabatan[0]);
                }
                if (error.responseJSON.golongan[0]) {

                    //show alert
                    $('#alert-golongan').removeClass('d-none');
                    $('#alert-golongan').addClass('d-block');

                    //add message to alert
                    $('#alert-golongan').html(error.responseJSON.golongan[0]);
                }

            }

        });

    });
</script>
