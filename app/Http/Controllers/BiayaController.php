<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biaya = Biaya::latest()->get();
        $pegawai = Pegawai::all();
        return view('pages.biaya', [
            'pegawai' => $pegawai,
            'biaya' => $biaya,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'kegiatan'     => 'required',
            'lokasi'   => 'required',
            'tanggal'     => 'required',
            'kode_rek'     => 'required',
            'nama1'     => 'required',
            'nip1' => 'required',
            'jabatan1' => 'required',
            'golongan1'     => 'required',
            'penerimaan1'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create biaya
        $biaya = Biaya::create([
            'kegiatan'    => $request->kegiatan,
            'lokasi'   => $request->lokasi,
            'tanggal'    => $request->tanggal,
            'kode_rek'    => $request->kode_rek,

            'nama1'    => $request->nama1,
            'nama2'    => $request->nama2,
            'nama3'    => $request->nama3,

            'nip1'    => $request->nip1,
            'nip2'    => $request->nip2,
            'nip3'    => $request->nip3,

            'jabatan1' =>  $request->jabatan1,
            'jabatan2' => $request->jabatan2,
            'jabatan3' => $request->jabatan3,

            'pangkat1'     => $request->pangkat1,
            'pangkat2'    => $request->pangkat2,
            'pangkat3'    => $request->pangkat3,

            'golongan1'     => $request->golongan1,
            'golongan2'    => $request->golongan2,
            'golongan3'    => $request->golongan3,

            'uang_harian1'     => $request->uang_harian1,
            'uang_harian2'    => $request->uang_harian2,
            'uang_harian3'    => $request->uang_harian3,

            'uang_transport1'     =>  $request->uang_transport1,
            'uang_transport2'    => $request->uang_transport2,
            'uang_transport3'    => $request->uang_transport3,

            'biaya_transport1'     =>  $request->biaya_transport1,
            'biaya_transport2'    => $request->biaya_transport2,
            'biaya_transport3'    => $request->biaya_transport3,

            'penerimaan1'     =>  $request->penerimaan1,
            'penerimaan2'    => $request->penerimaan2,
            'penerimaan3'    => $request->penerimaan3,
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $biaya
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function show(Biaya $biaya)
    {

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Biaya',
            'data'    => $biaya
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function edit(Biaya $biaya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biaya $biaya)
    {
        $validator = Validator::make($request->all(), [
            'kegiatan'     => 'required',
            'lokasi'   => 'required',
            'tanggal'     => 'required',
            'kode_rek'     => 'required',
            'nama1'     => 'required',
            'jabatan1' => 'required',
            'golongan1'     => 'required',
            'penerimaan1'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create Biaya
        $biaya->update([
            'kegiatan'    => $request->kegiatan,
            'lokasi'   => $request->lokasi,
            'tanggal'    => $request->tanggal,
            'kode_rek'    => $request->kode_rek,

            'nama1'    => $request->nama1,
            'nama2'    => $request->nama2,
            'nama3'    => $request->nama3,

            'nip1'    => $request->nip1,
            'nip2'    => $request->nip2,
            'nip3'    => $request->nip3,

            'jabatan1' =>  $request->jabatan1,
            'jabatan2' => $request->jabatan2,
            'jabatan3' => $request->jabatan3,

            'pangkat1'     => $request->pangkat1,
            'pangkat2'    => $request->pangkat2,
            'pangkat3'    => $request->pangkat3,

            'golongan1'     => $request->golongan1,
            'golongan2'    => $request->golongan2,
            'golongan3'    => $request->golongan3,

            'uang_harian1'     => $request->uang_harian1,
            'uang_harian2'    => $request->uang_harian2,
            'uang_harian3'    => $request->uang_harian3,

            'uang_transport1'     =>  $request->uang_transport1,
            'uang_transport2'    => $request->uang_transport2,
            'uang_transport3'    => $request->uang_transport3,

            'biaya_transport1'     =>  $request->biaya_transport1,
            'biaya_transport2'    => $request->biaya_transport2,
            'biaya_transport3'    => $request->biaya_transport3,

            'penerimaan1'     =>  $request->penerimaan1,
            'penerimaan2'    => $request->penerimaan2,
            'penerimaan3'    => $request->penerimaan3,
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $biaya
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete biaya by ID
        Biaya::where('id', $id)->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Biaya Berhasil Dihapus!.',
        ]);
    }
}
