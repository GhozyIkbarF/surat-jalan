@extends('index')
@section('title', 'SPT')
@section('kpj', 'Surat Perintah Tugasi')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="card-title">Daftar Data Surat Perintah Tugas</h4>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-spt">Tambah
                                        Surat Perintah Tugas</a>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-bordered" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Dasar Perintah</th>
                                            <th>Pegawai yang Diperintah</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Pangkat</th>
                                            <th>Golongan</th>
                                            <th>Maksud Tugas</th>
                                            <th>Hari, Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Tempat</th>
                                            <th>Tempat Ditetapkan</th>
                                            <th>Tanggal Ditetapkan</th>
                                            <th>Yang Menetapkan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-spt">
                                        @foreach ($spt as $s)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $s->dasar_perintah }}</td>
                                                <td>{{ $s->pegawai_diperintah }}</td>
                                                <td>{{ $s->nip }}</td>
                                                <td>{{ $s->jabatan }}</td>
                                                <td>{{ $s->pangkat }}</td>
                                                <td>{{ $s->golongan }}</td>
                                                <td>{{ $s->maksud_tugas }}</td>
                                                <td>{{ $s->hari_tanggal }}</td>
                                                <td>{{ $s->waktu }}</td>
                                                <td>{{ $s->tempat }}</td>
                                                <td>{{ $s->tempat_ditetapkan }}</td>
                                                <td>{{ $s->tanggal_ditetapkan }}</td>
                                                <td>{{ $s->yang_menetapkan }}</td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" id="btn-edit-spt"
                                                        data-id="{{ $s->id }}" class="btn btn-primary btn-sm"><i
                                                            class="mdi mdi-tooltip-edit"></i></a>
                                                    <a href="javascript:void(0)" id="btn-delete-spt"
                                                        data-id="{{ $s->id }}" class="btn btn-danger btn-sm"><i
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
        @include('components.spt.create-spt')
        @include('components.spt.edit-spt')
        @include('components.spt.delete-spt')
        <!-- content-end -->
    </div>
@endsection
