<!-- boostrap model -->
<div class="modal fade" id="ajax-biaya-model" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ajaxBiayaModel"></h4>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="addEditBiayaForm" name="addEditBiayaForm" class="form-horizontal"
                    method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Kegiatan</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan"
                                placeholder="Masukkan Kegiatan" value="" maxlength="100" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Lokasi</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="lokasi" name="lokasi"
                                placeholder="Masukkan Lokasi" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Lokasi</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                placeholder="Masukkan Lokasi" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Kode Rekening</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kode_rek" name="kode_rek"
                                placeholder="Masukkan  Rekening" value="" required="">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Nama Pertama</label>
                        <select name="nama1" id="nama1" class="form-control">
                            <option value="">Select One</option>
                            @foreach ($pegawai as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Nama Kedua</label>
                        <select name="nama2" id="nama2" class="form-control">
                            <option value="">Select One</option>
                            @foreach ($pegawai as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Nama Ketiga</label>
                        <select name="nama3" id="nama3" class="form-control">
                            <option value="">Select One</option>
                            @foreach ($pegawai as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    {{-- akhir nama --}}
                    {{-- uang harian --}}
                    <div class="form-group">
                        <label for="name" class="control-label">Uang Harian Pertama</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="uang_harian1" name="uang_harian1"
                                placeholder="Masukkan  Rekening" value="" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Uang Harian Kedua</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="uang_harian2" name="uang_harian2"
                                placeholder="Masukkan  Rekening" value="" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Uang Harian Ketiga</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="uang_harian3" name="uang_harian3"
                                placeholder="Masukkan  Rekening" value="" required="">
                        </div>
                    </div>
                    {{-- uang transport --}}
                    <div class="form-group">
                        <label for="name" class="control-label">Uang Transport Pertama</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="uang_transport1" name="uang_transport1"
                                placeholder="Masukkan  Rekening" value="" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Uang Transport Kedua</label>
                        <input type="text" class="form-control" id="uang_transport2" name="uang_transport2"
                            placeholder="Masukkan  Rekening" value="" required="">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Uang Transport Ketiga</label>
                        <input type="text" class="form-control" id="uang_transport3" name="uang_transport3"
                            placeholder="Masukkan  Rekening" value="" required="">
                    </div>
                    {{-- biaya transport --}}
                    <div class="form-group">
                        <label for="name" class="control-label">Biaya Transport Pertama</label>
                        <input type="text" class="form-control" id="biaya_transport1"
                            placeholder="Masukkan  Rekening" value="" required="">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Biaya Transport Kedua</label>
                        <input type="text" class="form-control" id="biaya_transport2"
                            placeholder="Masukkan  Rekening" value="" required="">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Biaya Transport Ketiga</label>
                        <input type="text" class="form-control" id="biaya_transport3"
                            placeholder="Masukkan  Rekening" value="" required="">
                    </div>
                    {{-- biaya penerimaan --}}
                    <div class="form-group">
                        <label for="name" class="control-label">Penerimaan Pertama</label>
                        <input type="text" class="form-control" id="penerimaan1" placeholder="Masukkan  Rekening"
                            value="" required="">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Penerimaan Kedua</label>
                        <input type="text" class="form-control" id="penerimaan2" placeholder="Masukkan  Rekening"
                            value="" required="">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Penerimaan Ketiga</label>
                        <input type="text" class="form-control" id="penerimaan3" placeholder="Masukkan  Rekening"
                            value="" required="">
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBiaya">Save
                            changes
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- end bootstrap model -->

<script type="text/javascript">
    $(document).ready(function($) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#addNewBook').click(function() {
            $('#addEditBookForm').trigger("reset");
            $('#ajaxBookModel').html("Add Book");
            $('#ajax-book-model').modal('show');
        });

        $('body').on('click', '.edit', function() {
            var id = $(this).data('id');

            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('edit-book') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    $('#ajaxBookModel').html("Edit Book");
                    $('#ajax-book-model').modal('show');
                    $('#id').val(res.id);
                    $('#title').val(res.title);
                    $('#code').val(res.code);
                    $('#author').val(res.author);
                }
            });
        });
        $('body').on('click', '.delete', function() {
            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('delete-book') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        window.location.reload();
                    }
                });
            }
        });
        $('body').on('click', '#btn-save', function(event) {
            var id = $("#id").val();
            var title = $("#title").val();
            var code = $("#code").val();
            var author = $("#author").val();
            $("#btn-save").html('Please Wait...');
            $("#btn-save").attr("disabled", true);

            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('add-update-book') }}",
                data: {
                    id: id,
                    title: title,
                    code: code,
                    author: author,
                },
                dataType: 'json',
                success: function(res) {
                    window.location.reload();
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                }
            });
        });
    });
</script>
