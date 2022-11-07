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
                            <td class="pl-9">Kegiatan</td>
                            <td class="pl-3">:</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit</td>
                        </tr>
                        <tr>
                            <td class="pl-9">Kode Rekening</td>
                            <td class="pl-3">:</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td class="pl-9">Unit Kerja</td>
                            <td class="pl-3">:</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>
                    </table>
                    <table class='table w-full'>
                        <thead>
                            <tr>
                                <th class="border border-black">No.</th>
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
                                <td class="border border-black px-2">Rp. </td>
                                <td class="border border-black px-2">aa</td>
                                <td class="border border-black px-2">Rp. </td>
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

                    <table class="w-full">
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="flex justify-between"><span>Lunas dibayar,</span><span>2022</span></td>
                        </tr>
                        <tr>
                            <td class="pl-7">Mengetahui / Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>Plt. KEPALA DINAS KOMUNIKASI DAN INFORMATIKA</td>
                            <td>Mengetahui :</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-20 pl-7">ASISTEN ADMINISTRASI UMUM SEKRETARIS DAERAH <br> Selaku Pengguna
                                    Anggaran</p>
                                <p class="pl-7"><u>Drs. SUJARNO, M.Si</u></p>
                                <P class="pl-7">NIP. 19630107 199003 1 004</P>
                            </td>
                            <td>
                                <p>Pejabat Pelaksana Teknis Kegiatan</p>
                                <p class="mb-20">Bidang Tata Kelola Informatika</p>
                                <p><u>Hartono, S.Sos, M.M</u></p>
                                <P>NIP. 19691015 199003 1 007</P>
                            </td>
                            <td>
                                <p>Bendahara Pengeluaran</p>
                                <p class="mb-20">Dinas komunikasi dan Informatika</p>
                                <p><u>ENDANG WEDININGSIH, S,Sos</u></p>
                                <P>NIP. 19711210 199403 2 002</P>
                            </td>
                        </tr>
                    </table>
                </div>
                <br><br><br>

                <div class="w-full">
                    <div class="flex justify-center">
                        <div class="">
                            <img src="" alt="">
                        </div>
                        <div class="text-center">
                            <h3 class="font-bold text-lg">PEMERINTAH KABUPATEN KARANGANYAR</h3>
                            <h1 class="font-bold text-2xl">DINAS KOMUNIKASI DAN INFORMATIKA</h1>
                            <P>Alamat : Jl Lawu No. 385 B Karanganyar Telepon (0271)495039 ext 228 Faks (0271) 495590
                            </P>
                            <p>Website : diskominfo.karanganyarkab.go.id Email: diskominfo@karanganyarkab.go.id Kode Pos
                                57712</p>
                        </div>
                    </div>
                    <br>
                    <hr class="">
                    <br>

                    <div class="w-full flex flex-col justify-center">
                        <table>
                            <tr>
                                <td colspan="6" class=" font-bold text-center"><p><u>SURAT PERINTAH TUGAS</u></p></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center"><p>Nomor : <span class="text-white">094/169.18/XIII/2002</span></p></td>
                                {{-- <td>:</td>
                                <td>34343645</td> --}}
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td valign="top" class="pl-10">Dasar</td>
                                <td valign="top" class="pr-7">:</td>
                                <td colspan="4">Perintah Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar tanggal 13 Agustus 2022</td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td colspan="6" class=" font-bold text-center"><p class="font-bold">MEMERINTAHKAN : </p></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td rowspan="4" valign="top" class="pl-10">Kepada</td>
                                <td rowspan="4" valign="top" class="pr-7">:</td>    
                                <td rowspan="4" valign="top">1</td>
                                <td class="border border-black">Nama</td>
                                <td class="border border-black">:</td>
                                <td class="pl-4 border border-black">Hartono, S.Sos., M.M</td>
                            </tr>
                            <tr>
                                <td class="border border-black">Pangkat/ Gol Ruang</td>
                                <td class="border border-black">:</td>
                                <td class="pl-4 border border-black">Pembina / IV a</td>
                            </tr>
                            <tr>
                                <td class="border border-black">NIP</td>
                                <td class="border border-black">:</td>
                                <td class="pl-4 border border-black">34462453457367456</td>
                            </tr>
                            <tr>
                                <td class="border border-black">Jabatan</td>
                                <td class="border border-black">:</td>
                                <td class="pl-4 border border-black">Kepal Bidang Tata Kelola Informatika</td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td valign="top" class="pl-10">Untuk</td>
                                <td colspan="2" valign="top">:</td>
                                <td colspan="4">Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022 yang dilaksanakan pada :</td>
                            </tr>
                            <tr><td><br></td></tr>
                            <tr>
                                <td colspan="3"></td>
                                <td>Hari / Tanggal</td>
                                <td>:</td>
                                <td> Sabtu, 13 Agustus 2022</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td>Waktu</td>
                                <td>:</td>
                                <td>19.30 WIB s.d Selesai</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td>Tempat</td>
                                <td>:</td>
                                <td>Pendopo Tri Manunggal, Malanggaten, Kebakkaramat</td>
                            </tr>                      
                        </table>
                    </div>
                    <br><br><br>

                    <div class="w-full">
                        <div class="flex justify-center">
                            <div class="">
                                <img src="" alt="">
                            </div>
                            <div class="text-center">
                                <h3 class="font-bold text-lg">PEMERINTAH KABUPATEN KARANGANYAR</h3>
                                <h1 class="font-bold text-2xl">DINAS KOMUNIKASI DAN INFORMATIKA</h1>
                                <P>Alamat : Jl Lawu No. 385 B Karanganyar Telepon (0271)495039 ext 228 Faks (0271) 495590
                                </P>
                                <p>Website : diskominfo.karanganyarkab.go.id Email: diskominfo@karanganyarkab.go.id Kode Pos
                                    57712</p>
                            </div>
                        </div>
                        <br>
                        <hr class="">
                        <br>

                        <div class="w-full flex justify-center">
                            <table>
                                <tr>
                                    <td class="border border-black px-2">1.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]">Pejabat ang memberi perintah</td>
                                    <td class="border border-black px-2">Plt. Kepala Dinas Komunikasi dan Informatika KAbupaten Karanganyar</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">2.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]">Nama / NIP Pegawai yang diperintah</td>
                                    <td class="border border-black px-2">Hartono</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">3.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>a. Pangkat dan Golongann menurut PP No. 6 Tahun 1997</p></td>
                                    <td class="border border-black px-2">Pembina / IV a</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2"></td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>b. Jabatan</p></td>
                                    <td class="border border-black px-2">Kepala bidang dan tatakelola</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2"></td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>c. Tingkat Menurut Peraturan Perjalanan</p></td>
                                    <td class="border border-black px-2">-</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">4.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]">Maksud Perjalannan Dinas</td>
                                    <td class="border border-black px-2">Sarasehan dan renungan</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">5.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]">Alat Angkut yang dipergunakan</td>
                                    <td class="border border-black px-2">Kendaraan Dinas</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">6.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>a. Tempat Berangkat</p></td>
                                    <td class="border border-black px-2">Karanganyar</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2"></td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>b. Tempat Tujan</p></td>
                                    <td class="border border-black px-2">Pendopo tridfdfdsfg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">7.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>a. Lamanya Perjalanan Dinas</p></td>
                                    <td class="border border-black px-2"></td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2"></td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>b. Tanggal Berangkat</p></td>
                                    <td class="border border-black px-2"> 13 Agustus 2022</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2"></td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>c. Tanggal harus kembali</p></td>
                                    <td class="border border-black px-2">13 Agustus 2022</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">8.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]">Pengukit / NIP</td>
                                    <td class="border border-black px-2"></td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">9.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]">Pembebanan Anggaran</td>
                                    <td class="border border-black px-2"></td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2"></td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>a. Instansi</p></td>
                                    <td class="border border-black px-2">Dinas Komunikasi dan Informatika Karanganyar</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2"></td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]"><p>b. Mata Anggaran</p></td>
                                    <td class="border border-black px-2">APBD TA 2022</td>
                                </tr>
                                <tr>
                                    <td class="border border-black px-2">10.</td>
                                    <td width="40%" class="border border-black px-2 max-w-[40%]">Keterangan lain-lain</td>
                                    <td class="border border-black px-2"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>Dikeluarkan di</td>
                                                <td>:</td>
                                                <td>Karanganyar</td>
                                            </tr>
                                            <tr>
                                                <td>pada tanggal</td>
                                                <td>:</td>
                                                <td>13 Agustus 2022</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>Plt. KEPALA DINAS KOMUNIKASI DAN INFORMATIKA</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>ASISTEN ADMINISTRASI UMUM SEKRETARIS DAERAH</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td><u>Drs. SUJARNO, M.Si</u></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>Pembina Utaman Muda</td>  
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td> NIP: 19630107 0980808 8 099</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class=""></div>
</x-app-layout>
