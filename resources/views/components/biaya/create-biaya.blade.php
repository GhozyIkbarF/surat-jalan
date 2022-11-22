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
                {{-- kegiatan --}}
                <div class="form-group">
                    <label for="name" class="control-label">Kegiatan</label>
                    <input type="text" class="form-control" id="kegiatan">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kegiatan"></div>
                </div>
                {{-- lokasi --}}
                <div class="form-group">
                    <label for="name" class="control-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-lokasi"></div>
                </div>
                {{-- tanggal --}}
                <div class="form-group">
                    <label for="name" class="control-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-tanggal"></div>
                </div>
                {{-- kode rekening --}}
                <div class="form-group">
                    <label for="name" class="control-label">Kode Rekening</label>
                    <input type="text" class="form-control" id="kode_rek">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kode_rek"></div>
                </div>

                {{-- nama --}}
                <div class="form-group">
                    <label for="name" class="control-label">Nama Pertama</label>
                    <select name="nama1" id="nama1" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-name"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Nama Kedua</label>
                    <select name="nama2" id="nama2" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-name"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Nama Ketiga</label>
                    <select name="nama3" id="nama3" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-name"></div>
                </div>
                {{-- akhir nama --}}
                {{-- nip --}}
                <div class="form-group">
                    <label for="name" class="control-label">NIP Pertama</label>
                    <select name="nip1" id="nip1" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->nip }}">{{ $item->nip }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nip"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">NIP Kedua</label>
                    <select name="nip2" id="nip2" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->nip }}">{{ $item->nip }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nip"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">NIP Ketiga</label>
                    <select name="nip3" id="nip3" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->nip }}">{{ $item->nip }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nip"></div>
                </div>
                {{-- jabatan --}}
                <div class="form-group">
                    <label for="name" class="control-label">Jabatan Pertama</label>
                    <select name="jabatan1" id="jabatan1" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-jabatan"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Jabatan Kedua</label>
                    <select name="jabatan2" id="jabatan2" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-jabatan"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Jabatan Ketiga</label>
                    <select name="jabatan3" id="jabatan3" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-jabatan"></div>
                </div>
                {{-- pangkat --}}
                <div class="form-group">
                    <label for="name" class="control-label">Pangkat Pertama</label>
                    <select name="pangkat1" id="pangkat1" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->pangkat }}">{{ $item->pangkat }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-pangkat"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Pangkat Kedua</label>
                    <select name="pangkat2" id="pangkat2" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->pangkat }}">{{ $item->pangkat }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-pangkat"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Pangkat Ketiga</label>
                    <select name="pangkat3" id="pangkat3" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->pangkat }}">{{ $item->pangkat }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-pangkat"></div>
                </div>
                {{-- golongan --}}
                <div class="form-group">
                    <label for="name" class="control-label">Golongan Pertama</label>
                    <select name="golongan1" id="golongan1" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->golongan }}">{{ $item->golongan }} - {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-golongan"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Golongan Kedua</label>
                    <select name="golongan2" id="golongan2" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->golongan }}">{{ $item->golongan }} - {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-golongan"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Golongan Ketiga</label>
                    <select name="golongan3" id="golongan3" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($biaya as $item)
                            <option value="{{ $item->golongan }}">{{ $item->golongan }} - {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-golongan"></div>
                </div>
                {{-- uang harian --}}
                <div class="form-group">
                    <label for="name" class="control-label">Uang Harian Pertama</label>
                    <input type="text" class="form-control" id="uang_harian1">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-harian"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Uang Harian Kedua</label>
                    <input type="text" class="form-control" id="uang_harian2">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-harian"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Uang Harian Ketiga</label>
                    <input type="text" class="form-control" id="uang_harian3">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-harian"></div>
                </div>
                {{-- uang transport --}}
                <div class="form-group">
                    <label for="name" class="control-label">Uang Transport Pertama</label>
                    <input type="text" class="form-control" id="uang_transport1">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-transport"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Uang Transport Kedua</label>
                    <input type="text" class="form-control" id="uang_transport2">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-transport"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Uang Transport Ketiga</label>
                    <input type="text" class="form-control" id="uang_transport3">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-transport"></div>
                </div>
                {{-- biaya transport --}}
                <div class="form-group">
                    <label for="name" class="control-label">Biaya Transport Pertama</label>
                    <input type="text" class="form-control" id="biaya_transport1">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-biaya"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Biaya Transport Kedua</label>
                    <input type="text" class="form-control" id="biaya_transport2">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-biaya"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Biaya Transport Ketiga</label>
                    <input type="text" class="form-control" id="biaya_transport3">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-biaya"></div>
                </div>
                {{-- biaya penerimaan --}}
                <div class="form-group">
                    <label for="name" class="control-label">Penerimaan Pertama</label>
                    <input type="text" class="form-control" id="penerimaan1">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-penerimaan"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Penerimaan Kedua</label>
                    <input type="text" class="form-control" id="penerimaan2">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-penerimaan"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Penerimaan Ketiga</label>
                    <input type="text" class="form-control" id="penerimaan3">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-penerimaan"></div>
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
        let kegiatan = $('#kegiatan').val();
        let lokasi = $('#lokasi').val();
        let tanggal = $('#tanggal').val();
        let kode_rek = $('#kode_rek').val();

        let nama1 = $('#nama1').val();
        let nama2 = $('#nama2').val();
        let nama3 = $('#nama3').val();

        let nip1 = $('#nip1').val();
        let nip2 = $('#nip2').val();
        let nip3 = $('#nip3').val();

        let jabatan1 = $('#jabatan1').val();
        let jabatan2 = $('#jabatan2').val();
        let jabatan3 = $('#jabatan3').val();

        let pangkat1 = $('#pangkat1').val();
        let pangkat2 = $('#pangkat2').val();
        let pangkat3 = $('#pangkat3').val();

        let golongan1 = $('#golongan1').val();
        let golongan2 = $('#golongan2').val();
        let golongan3 = $('#golongan3').val();

        let uang_harian1 = $('#uang_harian1').val();
        let uang_harian2 = $('#uang_harian2').val();
        let uang_harian3 = $('#uang_harian3').val();

        let uang_transport1 = $('#uang_transport1').val();
        let uang_transport2 = $('#uang_transport2').val();
        let uang_transport3 = $('#uang_transport3').val();

        let biaya_transport1 = $('#biaya_transport1').val();
        let biaya_transport2 = $('#biaya_transport2').val();
        let biaya_transport3 = $('#biaya_transport3').val();

        let penerimaan1 = $('#penerimaan1').val();
        let penerimaan2 = $('#penerimaan2').val();
        let penerimaan3 = $('#penerimaan3').val();

        let token = $("meta[name='csrf-token']").attr("content");

        //ajax
        $.ajax({

            url: `/biaya`,
            type: "POST",
            cache: false,
            data: {
                "kegiatan": kegiatan,
                "lokasi": lokasi,
                "tanggal": tanggal,
                "kode_rek": kode_rek,
                "nama1": nama1,
                "nama2": nama2,
                "nama3": nama3,
                "nip1": nip1,
                "nip2": nip2,
                "nip3": nip3,
                "jabatan1": jabatan1,
                "jabatan2": jabatan2,
                "jabatan3": jabatan3,
                "pangkat1": pangkat1,
                "pangkat2": pangkat2,
                "pangkat3": pangkat3,
                "golongan1": golongan1,
                "golongan2": golongan2,
                "golongan3": golongan3,
                "uang_harian1": uang_harian1,
                "uang_harian2": uang_harian2,
                "uang_harian3": uang_harian3,
                "uang_transport1": uang_transport1,
                "uang_transport2": uang_transport2,
                "uang_transport3": uang_transport3,
                "biaya_transport1": biaya_transport1,
                "biaya_transport2": biaya_transport2,
                "biaya_transport3": biaya_transport3,
                "penerimaan1": penerimaan1,
                "penerimaan2": penerimaan2,
                "penerimaan3": penerimaan3,
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
                        <td>${response.data.kegiatan}</td>
                        <td>${response.data.lokasi}</td>
                        <td>${response.data.tanggal}</td>
                        <td>${response.data.kode_rek}</td>
                        <td>${response.data.nama1}</td>
                        <td>${response.data.nama2}</td>
                        <td>${response.data.nama3}</td>
                        <td>${response.data.nip1}</td>
                        <td>${response.data.nip2}</td>
                        <td>${response.data.nip3}</td>
                        <td>${response.data.jabatan1}</td>
                        <td>${response.data.jabatan2}</td>
                        <td>${response.data.jabatan3}</td>
                        <td>${response.data.pangkat1}</td>
                        <td>${response.data.pangkat2}</td>
                        <td>${response.data.pangkat3}</td>
                        <td>${response.data.golongan1}</td>
                        <td>${response.data.golongan2}</td>
                        <td>${response.data.golongan3}</td>
                        <td>${response.data.uang_harian1}</td>
                        <td>${response.data.uang_harian2}</td>
                        <td>${response.data.uang_harian3}</td>
                        <td>${response.data.uang_transport1}</td>
                        <td>${response.data.uang_transport2}</td>
                        <td>${response.data.uang_transport3}</td>
                        <td>${response.data.biaya_transport1}</td>
                        <td>${response.data.biaya_transport2}</td>
                        <td>${response.data.biaya_transport3}</td>
                        <td>${response.data.penerimaan1}</td>
                        <td>${response.data.penerimaan2}</td>
                        <td>${response.data.penerimaan3}</td>
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
                $('#kegiatan').val('');
                $('#lokasi').val('');
                $('#tanggal').val('');
                $('#kode_rek').val('');

                $('#nama1').val('');
                $('#nama2').val('');
                $('#nama3').val('');

                $('#nip1').val('');
                $('#nip2').val('');
                $('#nip3').val('');

                $('#jabatan1').val('');
                $('#jabatan2').val('');
                $('#jabatan3').val('');

                $('#pangkat1').val('');
                $('#pangkat2').val('');
                $('#pangkat3').val('');

                $('#golongan1').val('');
                $('#golongan2').val('');
                $('#golongan3').val('');

                $('#uang_harian1').val('');
                $('#uang_harian2').val('');
                $('#uang_harian3').val('');

                $('#uang_transport1').val('');
                $('#uang_transport2').val('');
                $('#uang_transport3').val('');

                $('#biaya_transport1').val('');
                $('#biaya_transport2').val('');
                $('#biaya_transport3').val('');

                $('#penerimaan1').val('');
                $('#penerimaan2').val('');
                $('#penerimaan3').val('');


                //close modal
                $('#modal-create').modal('hide');


            },
            // error: function(error) {

            //     if (error.responseJSON.kegiatan[0]) {

            //         //show alert
            //         $('#alert-kegiatan').removeClass('d-none');
            //         $('#alert-kegiatan').addClass('d-block');

            //         //add message to alert
            //         $('#alert-kegiatan').html(error.responseJSON.kegiatan[0]);
            //     }

            //     if (error.responseJSON.lokasi[0]) {

            //         //show alert
            //         $('#alert-lokasi').removeClass('d-none');
            //         $('#alert-lokasi').addClass('d-block');

            //         //add message to alert
            //         $('#alert-lokasi').html(error.responseJSON.lokasi[0]);
            //     }
            //     if (error.responseJSON.tanggal[0]) {

            //         //show alert
            //         $('#alert-tanggal').removeClass('d-none');
            //         $('#alert-tanggal').addClass('d-block');

            //         //add message to alert
            //         $('#alert-tanggal').html(error.responseJSON.tanggal[0]);
            //     }
            //     if (error.responseJSON.kode_rek[0]) {

            //         //show alert
            //         $('#alert-kode_rek').removeClass('d-none');
            //         $('#alert-kode_rek').addClass('d-block');

            //         //add message to alert
            //         $('#alert-kode_rek').html(error.responseJSON.kode_rek[0]);
            //     }
            //     // alert name
            //     if (error.responseJSON.name[0]) {

            //         //show alert
            //         $('#alert-name').removeClass('d-none');
            //         $('#alert-name').addClass('d-block');

            //         //add message to alert
            //         $('#alert-name').html(error.responseJSON.name[0]);
            //     }
            //     if (error.responseJSON.name[0]) {

            //         //show alert
            //         $('#alert-name').removeClass('d-none');
            //         $('#alert-name').addClass('d-block');

            //         //add message to alert
            //         $('#alert-name').html(error.responseJSON.name[0]);
            //     }

            //     if (error.responseJSON.nip[0]) {

            //         //show alert
            //         $('#alert-nip').removeClass('d-none');
            //         $('#alert-nip').addClass('d-block');

            //         //add message to alert
            //         $('#alert-nip').html(error.responseJSON.nip[0]);
            //     }

            //     if (error.responseJSON.jabatan[0]) {

            //         //show alert
            //         $('#alert-jabatan').removeClass('d-none');
            //         $('#alert-jabatan').addClass('d-block');

            //         //add message to alert
            //         $('#alert-jabatan').html(error.responseJSON.jabatan[0]);
            //     }

            //     if (error.responseJSON.pangkat[0]) {

            //         //show alert
            //         $('#alert-pangkat').removeClass('d-none');
            //         $('#alert-pangkat').addClass('d-block');

            //         //add message to alert
            //         $('#alert-pangkat').html(error.responseJSON.pangkat[0]);
            //     }

            //     if (error.responseJSON.golongan[0]) {

            //         //show alert
            //         $('#alert-golongan').removeClass('d-none');
            //         $('#alert-golongan').addClass('d-block');

            //         //add message to alert
            //         $('#alert-golongan').html(error.responseJSON.golongan[0]);
            //     }

            //     if (error.responseJSON.harian[0]) {

            //         //show alert
            //         $('#alert-harian').removeClass('d-none');
            //         $('#alert-harian').addClass('d-block');

            //         //add message to alert
            //         $('#alert-harian').html(error.responseJSON.harian[0]);
            //     }

            //     if (error.responseJSON.transport[0]) {

            //         //show alert
            //         $('#alert-transport').removeClass('d-none');
            //         $('#alert-transport').addClass('d-block');

            //         //add message to alert
            //         $('#alert-transport').html(error.responseJSON.transport[0]);
            //     }

            //     if (error.responseJSON.biaya[0]) {

            //         //show alert
            //         $('#alert-biaya').removeClass('d-none');
            //         $('#alert-biaya').addClass('d-block');

            //         //add message to alert
            //         $('#alert-biaya').html(error.responseJSON.biaya[0]);
            //     }

            //     if (error.responseJSON.penerimaan[0]) {

            //         //show alert
            //         $('#alert-penerimaan').removeClass('d-none');
            //         $('#alert-penerimaan').addClass('d-block');

            //         //add message to alert
            //         $('#alert-penerimaan').html(error.responseJSON.penerimaan[0]);
            //     }

            // }

        });

    });
</script>
