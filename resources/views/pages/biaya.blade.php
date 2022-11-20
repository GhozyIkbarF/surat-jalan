@extends('index')
@section('title', 'Biaya')
@section('kpj', 'Biaya')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="card-title">Daftar Data Biaya</h4>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-biaya">Tambah
                                        Biaya</a>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-bordered" style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th>No</td>
                                            <th>Kegiatan</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal</th>
                                            <th>Kode Rekening</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Pangkat</th>
                                            <th>Golongan</th>
                                            <th>Uang Harian</th>
                                            <th>Uang Transport</th>
                                            <th>Biaya Ttransport</th>
                                            <th>Penerimaan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-biaya">
                                        @foreach ($biaya as $b)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $b->kegiatan }}</td>
                                                <td>{{ $b->lokasi }}</td>
                                                <td>{{ $b->tanggal }}</td>
                                                <td>{{ $b->kode_rek }}</td>
                                                <td>{{ $b->nama }}</td>
                                                <td>{{ $b->nip }}</td>
                                                <td>{{ $b->jabatan }}</td>
                                                <td>{{ $b->pangkat }}</td>
                                                <td>{{ $b->golongan }}</td>
                                                <td>@currency($b->uang_harian1)</td>
                                                <td> @currency($b->uang_transport1) </td>
                                                <td> @currency($b->biaya_transport1) </td>
                                                <td> @currency($b->penerimaan1) </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" id="btn-edit-biaya"
                                                        data-id="{{ $b->id }}" class="btn btn-primary btn-sm"><i
                                                            class="mdi mdi-tooltip-edit"></i></a>
                                                    <a href="javascript:void(0)" id="btn-delete-biaya"
                                                        data-id="{{ $b->id }}" class="btn btn-danger btn-sm"><i
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
        @include('components.biaya.create-biaya')
        @include('components.biaya.edit-biaya')
        @include('components.biaya.delete-biaya')
        <!-- content-end -->

    </div>
@endsection
