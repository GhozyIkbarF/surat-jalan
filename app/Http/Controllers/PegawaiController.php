<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all Pegawais from Models
        $Pegawai = Pegawai::latest()->get();

        //return view with data
        return view('pages.pegawai', compact('Pegawai'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'nip'   => 'required|unique:pegawais',
            'jabatan'     => 'required',
            'pangkat'     => 'required',
            'golongan'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create pegawai
        $pegawai = Pegawai::create([
            'name'     => $request->name,
            'nip'   => $request->nip,
            'jabatan'   => $request->jabatan,
            'pangkat'   => $request->pangkat,
            'golongan'   => $request->golongan
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $pegawai
        ]);
    }

    /**
     * show
     *
     * @param  mixed $pegawai
     * @return void
     */
    public function show(Pegawai $pegawai)
    {
        //return response
        return response()->json([
            'success' => true,
            'message' => 'Detail Data pegawai',
            'data'    => $pegawai
        ]);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $pegawai
     * @return void
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'nip'   => 'required|unique:pegawais',
            'jabatan'     => 'required',
            'pangkat'     => 'required',
            'golongan'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create pegawai
        $pegawai->update([
            'name'     => $request->name,
            'nip'   => $request->nip,
            'jabatan'   => $request->jabatan,
            'pangkat'   => $request->pangkat,
            'golongan'   => $request->golongan
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diupdate!',
            'data'    => $pegawai
        ]);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        //delete pegawai by ID
        Pegawai::where('id', $id)->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Pegawai Berhasil Dihapus!.',
        ]);
    }
}
