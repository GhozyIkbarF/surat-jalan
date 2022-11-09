@extends('layouts.main')
@section('title','Daftar Data Pegawai')
@section('sng','Data Pegawai')
@section('kpj','Pegawai')
@section('content')
<div class="card">
    <div class="card-body">
      <div class="d-sm-flex justify-content-between align-items-center">
        <div>
          <h4 class="card-title">Daftar Data Pegawai</h4>
        </div>
        <div>
          <a href="javascript:void(0)" class="btn btn-success btn-md tambah" id="createNewPegawai">
            Tambah Data
          </a>
        </div>
      </div>
      <div class="table-responsive mt-3 w-full">
        <table class="table table-striped table-bordered data-table"  style="width:100%;" >
          <thead>
            <tr>
              <td>No</td>
              <td>Nama</td>
              <td>NIP</td>
              <td>Jabatan</td>
              <td>Pangkat</td>
              <td>Golongan</td>
              <td>Aksi</td>
            </tr>
          </thead>
        </table>
<!-- Modal -->
<div class="modal fade" id="ajaxModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modelHeading">Tambah Pegawai</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="pegawaiForm" name="pegawaiForm" class="form-horizontal">
          <input type="hidden" name="pegawai_id" id="pegawai_id">
           <div class="form-group">
               <label for="name" class="col-sm-2 control-label">Name</label>
               <div class="col-sm-12">
                   <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="" maxlength="50" required="">
               </div>
           </div>
           <div class="form-group">
            <label for="nip" class="col-sm-2 control-label">NIP</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" value="" maxlength="50" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" value="" maxlength="50" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="pangkat" class="col-sm-2 control-label">Pangkat</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="pangkat" name="pangkat" placeholder="Masukkan Pangkat" value="" maxlength="50" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="golongan" class="col-sm-2 control-label">Golongan</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="golongan" name="golongan" placeholder="n golongan" value="" maxlength="50" required="">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning text-white" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"  id="saveBtn" value="create">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
@endsection







