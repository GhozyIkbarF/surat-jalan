<?php

namespace App\Http\Controllers;

use App\Models\Spt;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spt = Spt::latest()->get();
        $pegawai = Pegawai::all();
        return view('pages.biaya', compact([
            'pegawai' => $pegawai,
            'spt' => $spt,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dasar_perintah'     => 'required',
            'pegawai_diperintah1'   => 'required',
            'golongan1'     => 'required',
            'nip1'     => 'required',
            'jabatan1'     => 'required',
            'maksud_tugas' => 'required',
            'hari_tanggal' => 'required',
            'waktu'     => 'required',
            'tempat'     => 'required',
            'tempat_ditetapkan'   => 'required',
            'tanggal_ditetapkan'   => 'required',
            'yang_menetapkan'   => 'required',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create biaya
        $spt = Spt::create([
            'dasar_perintah'    => $request->dasar_perintah,

            'pegawai_diperintah1'    => $request->pegawai_diperintah1,
            'pegawai_diperintah2'    => $request->pegawai_diperintah2,
            'pegawai_diperintah3'    => $request->pegawai_diperintah3,

            'golongan1'    => $request->golongan1,
            'golongan2'    => $request->golongan2,
            'golongan3'    => $request->golongan3,

            'nip1'    => $request->nip1,
            'nip2'    => $request->nip2,
            'nip3'    => $request->nip3,

            'jabatan1'    => $request->jabatan1,
            'jabatan2'    => $request->jabatan2,
            'jabatan3'    => $request->jabatan3,

            'maksud_tugas'    => $request->maksud_tugas,
            'hari_tanggal'    => $request->hari_tanggal,
            'waktu'    => $request->waktu,
            'tempat'    => $request->tempat,
            'tempat_ditetapkan'    => $request->tempat_ditetapkan,
            'tanggal_ditetapkan'    => $request->tanggal_ditetapkan,
            'yang_menetapkan'    => $request->yang_menetapkan,
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $spt
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spt  $spt
     * @return \Illuminate\Http\Response
     */
    public function show(Spt $spt)
    {
        //return response
        return response()->json([
            'success' => true,
            'message' => 'Detail Data pegawai',
            'data'    => $spt
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spt  $spt
     * @return \Illuminate\Http\Response
     */
    public function edit(Spt $spt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spt  $spt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spt $spt)
    {
        $validator = Validator::make($request->all(), [
            'dasar_perintah'     => 'required',
            'pegawai_diperintah1'   => 'required',
            'golongan1'     => 'required',
            'nip1'     => 'required',
            'jabatan1'     => 'required',
            'maksud_tugas' => 'required',
            'hari_tanggal' => 'required',
            'waktu'     => 'required',
            'tempat'     => 'required',
            'tempat_ditetapkan'   => 'required',
            'tanggal_ditetapkan'   => 'required',
            'yang_menetapkan'   => 'required',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create spt
        $spt->update([
            'dasar_perintah'    => $request->dasar_perintah,

            'pegawai_diperintah1'    => $request->pegawai_diperintah1,
            'pegawai_diperintah2'    => $request->pegawai_diperintah2,
            'pegawai_diperintah3'    => $request->pegawai_diperintah3,

            'golongan1'    => $request->golongan1,
            'golongan2'    => $request->golongan2,
            'golongan3'    => $request->golongan3,

            'nip1'    => $request->nip1,
            'nip2'    => $request->nip2,
            'nip3'    => $request->nip3,

            'jabatan1'    => $request->jabatan1,
            'jabatan2'    => $request->jabatan2,
            'jabatan3'    => $request->jabatan3,

            'maksud_tugas'    => $request->maksud_tugas,
            'hari_tanggal'    => $request->hari_tanggal,
            'waktu'    => $request->waktu,
            'tempat'    => $request->tempat,
            'tempat_ditetapkan'    => $request->tempat_ditetapkan,
            'tanggal_ditetapkan'    => $request->tanggal_ditetapkan,
            'yang_menetapkan'    => $request->yang_menetapkan,
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $spt
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spt  $spt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete pegawai by ID
        Spt::where('id', $id)->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Surat Perintah Tugas Berhasil Dihapus!.',
        ]);
    }
}
