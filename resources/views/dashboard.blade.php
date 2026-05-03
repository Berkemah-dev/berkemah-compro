@extends('layouts.app')

@section('title', 'Dashboard - Mahya HRIS')

@section('content')
<section class="pt-16 min-h-screen bg-gradient-to-br from-white via-green-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">
                Selamat Datang di <span class="text-green-600">Mahya</span> <span class="text-blue-600">HRIS</span>
            </h1>
            <p class="text-xl text-gray-600">Dashboard Perusahaan: {{ session('company_name', 'PT Berkemah Digital') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold">Total Karyawan</h3>
                    <span class="text-3xl">👥</span>
                </div>
                <p class="text-4xl font-bold text-green-600">150</p>
                <p class="text-gray-600 mt-2">Karyawan aktif</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold">Kehadiran Hari Ini</h3>
                    <span class="text-3xl">✅</span>
                </div>
                <p class="text-4xl font-bold text-blue-600">142</p>
                <p class="text-gray-600 mt-2">Hadir dari 150 karyawan</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold">Pengajuan Cuti</h3>
                    <span class="text-3xl">📅</span>
                </div>
                <p class="text-4xl font-bold text-orange-500">8</p>
                <p class="text-gray-600 mt-2">Menunggu persetujuan</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6">Menu Utama</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="/employees" class="p-4 bg-green-50 rounded-xl text-center hover:bg-green-100 transition-colors">
                    <div class="text-3xl mb-2">👥</div>
                    <p class="font-semibold">Karyawan</p>
                </a>
                <a href="/attendance" class="p-4 bg-blue-50 rounded-xl text-center hover:bg-blue-100 transition-colors">
                    <div class="text-3xl mb-2">⏰</div>
                    <p class="font-semibold">Absensi</p>
                </a>
                <a href="/leave" class="p-4 bg-orange-50 rounded-xl text-center hover:bg-orange-100 transition-colors">
                    <div class="text-3xl mb-2">📅</div>
                    <p class="font-semibold">Cuti</p>
                </a>
                <a href="/payroll" class="p-4 bg-purple-50 rounded-xl text-center hover:bg-purple-100 transition-colors">
                    <div class="text-3xl mb-2">💰</div>
                    <p class="font-semibold">Payroll</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
