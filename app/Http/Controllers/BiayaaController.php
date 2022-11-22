<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Biaya;

class BiayaaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['biayas'] = Biaya::orderBy('id', 'desc')->paginate(5);

        return view('components.biaya.ajax-biaya-crud', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $biaya   =   Biaya::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'kegiatan' => $request->kegiatan,
                'lokasi' => $request->lokasi,
                'kode_rek' => $request->kode_rek,
                'nama1' => $request->nama1,
                'nama2' => $request->nama2,
                'nama3' => $request->nama3,
                'nip1' => $request->nip1,
                'nip2' => $request->nip2,
                'nip3' => $request->nip3,
                'jabatan1' => $request->jabatan1,
                'jabatan2' => $request->jabatan2,
                'jabatan3' => $request->jabatan3,
                'pangkat1' => $request->pangkat1,
                'pangkat2' => $request->pangkat2,
                'pangkat3' => $request->pangkat3,
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

            ]
        );

        return response()->json(['success' => true]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $where = array('id' => $request->id);
        $biaya  = Biaya::where($where)->first();

        return response()->json($biaya);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $biaya = Biaya::where('id', $request->id)->delete();

        return response()->json(['success' => true]);
    }
}
