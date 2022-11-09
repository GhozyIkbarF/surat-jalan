<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        //get all posts from Models
        $pegawai = Pegawai::latest()->get();

        //return view with data
        return view('pages.pegawai', compact('pegawai'));
    }
}
