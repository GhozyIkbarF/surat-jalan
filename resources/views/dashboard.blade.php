<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm p-5">
                <a href="/pegawai/cetak_pdf" class="inline text-white px-5 py-4 bg-black" target="_blank">CETAK PDF</a>
                <div class="container">
                    <center>
                        <h4 class="">DAFTAR PENERIMAAN UANG PERJALANAN DINAS</h4>
                        <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sit</P>
                        <p>Lokasi: Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </center>
                    <br>
                    <table>
                        <tr>
                            <td>Kegiatan</td>
                            <td>:</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit</td>
                        </tr>
                        <tr>
                            <td>Kode Rekening</td>
                            <td>:</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Unit Kerja</td>
                            <td>:</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>
                    </table>

                    <br />
                    <table class='table w-full'>
                        <thead>
                            <tr>
                                <th class="border border-black">No</th>
                                <th class="border border-black">Nama / NIP</th>
                                <th class="border border-black">Jabatan / Pangkat / Gol. Eslon</th>
                                <th class="border border-black">Uang Harian</th>
                                <th class="border border-black">Uang Transport</th>
                                <th class="border border-black">Biaya Transport</th>
                                <th class="border border-black">Penerimaan</th>
                                <th class="border border-black">Tanda Tangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            {{-- @foreach ($pegawai as $p) --}}
                            <tr>
                                <td class="border border-black px-2">{{ $i++ }}</td>
                                <td class="border border-black px-2">rh</td>
                                <td class="border border-black px-2">th</td>
                                <td class="border border-black px-2">th</td>
                                <td class="border border-black px-2">th</td>
                                <td class="border border-black px-2">aa</td>
                                <td class="border border-black px-2">aa</td>
                                <td class="border border-black px-2">aa</td>
                            </tr>
                            {{-- @endforeach --}}
                            <tr>
                                <td colspan="3" class="text-center border border-black px-2">Jumlah</td>
                                <td class="border border-black px-2"></td>
                                <td class="border border-black px-2"></td>
                                <td class="border border-black px-2"></td>
                                <td class="border border-black px-2"></td>
                                <td class="border border-black px-2"></td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <div class="w-full flex justify-end">
                        <p>Lunas dibayar,<span class="px-24"></span>2022</p>
                    </div>
                    <br>

                    <table class="w-full">
                        <tr>
                            <td>Mengetahui / Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>Plt. KEPALA DINAS KOMUNIKASI DAN INFORMATIKA</td>
                            <td>Mengetahui :</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-20">ASISTEN ADMINISTRASI UMUM SEKRETARIS DAERAH <br> Selaku Pengguna Anggaran</p>
                                <p><u>Drs. SUJARNO, M.Si</u></p>
                                <P>NIP. 19630107 199003 1 004</P>
                            </td>
                            <td>
                                <p>Pejabat Pelaksana Teknis Kegiatan</p>
                                <p class="mb-20">Bidang Tata Kelola Informatika</p>
                                <p><u>Hartono, S.Sos, M.M</u></p>
                                <P>NIP. 19691015 199003 1 007</P>
                            </td>
                            <td>
                                <p>Bendahara Pengeluaran</p>
                                <p class="mb-20">Dinas komunnikasi dan Informatika</p>
                                <p><u>ENDANG WEDININGSIH, S,Sos</u></p>
                                <P>NIP. 19711210 199403</P>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
