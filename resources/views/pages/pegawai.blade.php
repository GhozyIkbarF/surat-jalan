<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pegawai</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('includes.style')
</head>

<body>
    <div class="container-scroller">
        @include('includes.pegawai.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('includes.sidebar')
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
                                            <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-pegawai">Tambah Pegawai</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-hover table-bordered" style="text-align:start" id="tabel">
                                            <thead class="table-success">
                                                <tr>
                                                    {{-- <th>No</td> --}}
                                                    <th>Nama</td>
                                                    <th>NIP</td>
                                                    <th>Jabatan</td>
                                                    <th>Pangkat</td>
                                                    <th>Golongan</td>
                                                    <th>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle" id="table-pegawai">
                                                @foreach ($Pegawai as $p)
                                                    <tr>
                                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                                        <td>{{ $p->name }}</td>
                                                        <td>{{ $p->nip }}</td>
                                                        <td>{{ $p->jabatan }}</td>
                                                        <td>{{ $p->pangkat }}</td>
                                                        <td>{{ $p->golongan }}</td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <a href="" id=""
                                                                    data-id=""
                                                                    class="btn btn-primary btn-md"><i
                                                                        class="mdi mdi-printer"></i></a>
                                                                <a href="javascript:void(0)" id="btn-edit-pegawai"
                                                                    data-id="{{ $p->id }}"
                                                                    class="btn btn-warning btn-md"><i
                                                                        class="mdi mdi-tooltip-edit"></i></a>
                                                                <a href="javascript:void(0)" id="btn-delete-pegawai"
                                                                    data-id="{{ $p->id }}"
                                                                    class="btn btn-danger btn-md"><i
                                                                        class="mdi mdi-delete"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbodyclass=>
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
                @include('includes.footer')
            </div>
        </div>
    </div>
    <!-- @include('includes.script') -->
</body>

</html>
