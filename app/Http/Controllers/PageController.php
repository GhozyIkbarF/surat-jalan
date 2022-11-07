<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('layouts.main');
    }
    public function datasppd()
    {
        return view('pages.datasppd');
    }
    public function dataspt()
    {
        return view('pages.dataspt');
    }
    public function datauang()
    {
        return view('pages.datauang');
    }
}
