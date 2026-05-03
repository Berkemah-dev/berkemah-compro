<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function check(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $company = Company::where('name', 'like', '%' . $request->name . '%')->first();

        if ($company && $company->using_mahya_hris) {
            return response()->json([
                'status' => 'using',
                'message' => 'Perusahaan Anda sudah menggunakan Mahya HRIS!'
            ]);
        }

        return response()->json([
            'status' => 'not_using',
            'message' => 'Perusahaan Anda belum menggunakan Mahya HRIS.'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:companies',
        ]);

        Company::create([
            'name' => $request->name,
            'using_mahya_hris' => false,
            'using_mahya_hse' => false,
        ]);

        return redirect()->back()->with('success', 'Perusahaan berhasil didaftarkan!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        $company = Company::where('name', $request->name)->first();

        if ($company && $company->using_mahya_hris) {
            return redirect('/dashboard')->with('success', 'Selamat datang kembali!');
        }

        return redirect()->back()->with('error', 'Perusahaan tidak ditemukan atau belum menggunakan Mahya HRIS.');
    }
}
