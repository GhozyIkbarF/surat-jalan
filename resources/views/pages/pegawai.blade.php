@extends('index')
@section('title', 'Pegawai')
@section('kpj', 'Pegawai')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="card-title">Daftar Data Pegawai</h4>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-pegawai">Tambah
                                        Pegawai</a>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-bordered" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th>No</td>
                                            <th>Nama</td>
                                            <th>NIP</td>
                                            <th>Jabatan</td>
                                            <th>Pangkat</td>
                                            <th>Golongan</td>
                                            <th>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody id="table-pegawai">
                                        @foreach ($Pegawai as $p)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $p->nama }}</td>
                                                <td>{{ $p->nip }}</td>
                                                <td>{{ $p->jabatan }}</td>
                                                <td>{{ $p->pangkat }}</td>
                                                <td>{{ $p->golongan }}</td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" id="btn-edit-pegawai"
                                                        data-id="{{ $p->id }}" class="btn btn-primary btn-sm"><i
                                                            class="mdi mdi-tooltip-edit"></i></a>
                                                    <a href="javascript:void(0)" id="btn-delete-pegawai"
                                                        data-id="{{ $p->id }}" class="btn btn-danger btn-sm"><i
                                                            class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.pegawai.create-pegawai')
        @include('components.pegawai.edit-pegawai')
        @include('components.pegawai.delete-pegawai')
        <!-- content-end -->
    </div>
@endsection
