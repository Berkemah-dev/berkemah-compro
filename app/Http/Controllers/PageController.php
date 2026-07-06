<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function layanan()
    {
        return view('pages.layanan');
    }

    public function portofolio()
    {
        return view('pages.portofolio');
    }

    public function mahasiswa()
    {
        return view('pages.mahasiswa');
    }

    public function umkm()
    {
        return view('pages.umkm');
    }

    public function propertiItModern()
    {
        return view('pages.properti-it-modern');
    }
}
