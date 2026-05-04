@extends('layouts.app')

@section('title', 'Mahya HRIS | Berkemah Team')
@section('meta_description', 'Mahya HRIS adalah platform SDM modern dari Berkemah Team. Solusi lengkap untuk absensi, cuti, payroll, dan manajemen karyawan.')
@section('meta_keywords', 'Mahya HRIS, HRIS Indonesia, SaaS HRIS, absensi online, payroll otomatis, ESS, Berkemah Team')

@push('styles')
<style>
    /* Custom utility classes for Premium SaaS Look */
    .bento-card {
        background: #ffffff;
        border: 1px solid rgba(226, 232, 240, 0.8);
        border-radius: 1.5rem;
        box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.03);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        position: relative;
    }
    .bento-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px -4px rgba(0, 0, 0, 0.08);
    }
    .bento-card.bg-blue {
        background: linear-gradient(145deg, #eff6ff, #ffffff);
        border-color: #dbeafe;
    }
    .glass-pill {
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }
    .text-gradient-blue {
        background: linear-gradient(to right, #1d4ed8, #3b82f6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
    }
    
    /* Mockup UI Elements */
    .mockup-window {
        background: #ffffff;
        border-radius: 1rem;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        border: 1px solid #e2e8f0;
        overflow: hidden;
    }
    .mockup-header {
        height: 2.5rem;
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        padding: 0 1rem;
        gap: 0.375rem;
    }
    .mockup-dot {
        width: 0.75rem;
        height: 0.75rem;
        border-radius: 9999px;
    }
    .dot-red { background: #fca5a5; }
    .dot-yellow { background: #fcd34d; }
    .dot-green { background: #86efac; }
</style>
@endpush

@section('content')
<!-- Hero Showcase Section -->
<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden bg-slate-50">
    <!-- Glowing Background Effects -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[500px] opacity-40 pointer-events-none">
        <div class="absolute top-20 left-1/4 w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-[100px] opacity-70"></div>
        <div class="absolute top-10 right-1/4 w-96 h-96 bg-indigo-300 rounded-full mix-blend-multiply filter blur-[100px] opacity-70"></div>
    </div>

    <div class="relative section-shell px-4 sm:px-6 lg:px-8 text-center z-10">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-pill mb-8">
            <span class="flex h-2 w-2 relative">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
            </span>
            <span class="text-xs font-bold uppercase tracking-wider text-blue-800">Mahya HRIS v2.0</span>
        </div>

        <!-- Typography -->
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black tracking-tight text-slate-900 leading-[1.1] max-w-4xl mx-auto">
            Sistem HR Modern untuk <br class="hidden md:block" />
            <span class="text-gradient-blue">Tim yang Bergerak Cepat</span>
        </h1>
        <p class="mt-8 text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto">
            Otomatisasi absensi, payroll, dan persetujuan berjenjang dalam satu aplikasi. Tinggalkan cara lama, mulai bekerja lebih cerdas.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="#hris-demo" class="px-8 py-4 rounded-full bg-blue-600 text-white font-bold text-lg shadow-[0_10px_30px_rgba(37,99,235,0.3)] hover:bg-blue-700 hover:shadow-[0_15px_40px_rgba(37,99,235,0.4)] hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                Minta Demo Sekarang
            </a>
            <a href="#fitur" class="px-8 py-4 rounded-full bg-white border border-slate-200 text-slate-700 font-bold text-lg hover:bg-slate-50 hover:border-slate-300 transition-all duration-300 w-full sm:w-auto">
                Eksplorasi Modul
            </a>
        </div>
    </div>

    <!-- The Product Showcase (Massive Image Placeholder) -->
    <div class="relative mt-20 max-w-6xl mx-auto px-4 sm:px-6 z-20">
        <div class="mockup-window border-4 border-white shadow-2xl bg-slate-100 aspect-video relative flex flex-col group">
            <div class="mockup-header">
                <div class="mockup-dot dot-red"></div>
                <div class="mockup-dot dot-yellow"></div>
                <div class="mockup-dot dot-green"></div>
                <div class="mx-auto text-[10px] font-medium text-slate-400 uppercase tracking-widest">Mahya HRIS Dashboard</div>
            </div>
            
            <!-- App Placeholder Area -->
            <div class="flex-1 relative bg-slate-50 overflow-hidden flex items-center justify-center p-8">
                <!-- Abstract UI Representation -->
                <div class="w-full h-full max-w-4xl flex flex-col gap-6 opacity-30 group-hover:opacity-100 transition-opacity duration-700">
                    <div class="flex gap-6">
                        <!-- Sidebar mockup -->
                        <div class="w-48 hidden md:flex flex-col gap-3">
                            <div class="h-8 bg-blue-200 rounded-lg w-3/4 mb-4"></div>
                            <div class="h-4 bg-slate-200 rounded w-full"></div>
                            <div class="h-4 bg-slate-200 rounded w-5/6"></div>
                            <div class="h-4 bg-slate-200 rounded w-full"></div>
                            <div class="h-4 bg-slate-200 rounded w-4/6"></div>
                            <div class="h-4 bg-slate-200 rounded w-full mt-6"></div>
                            <div class="h-4 bg-slate-200 rounded w-5/6"></div>
                        </div>
                        <!-- Main content mockup -->
                        <div class="flex-1 flex flex-col gap-6">
                            <!-- Top stats -->
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-24 bg-white rounded-xl border border-slate-200 shadow-sm p-4 flex flex-col justify-between">
                                    <div class="h-3 bg-slate-100 rounded w-1/2"></div>
                                    <div class="h-8 bg-blue-100 rounded w-3/4"></div>
                                </div>
                                <div class="h-24 bg-white rounded-xl border border-slate-200 shadow-sm p-4 flex flex-col justify-between">
                                    <div class="h-3 bg-slate-100 rounded w-1/2"></div>
                                    <div class="h-8 bg-green-100 rounded w-3/4"></div>
                                </div>
                                <div class="h-24 bg-white rounded-xl border border-slate-200 shadow-sm p-4 flex flex-col justify-between">
                                    <div class="h-3 bg-slate-100 rounded w-1/2"></div>
                                    <div class="h-8 bg-purple-100 rounded w-3/4"></div>
                                </div>
                            </div>
                            <!-- Chart area -->
                            <div class="flex-1 bg-white rounded-xl border border-slate-200 shadow-sm p-6">
                                <div class="h-4 bg-slate-100 rounded w-1/4 mb-6"></div>
                                <div class="w-full h-48 bg-gradient-to-t from-blue-50 to-white rounded-lg border-b-2 border-blue-200 relative">
                                    <!-- Fake chart bars -->
                                    <div class="absolute bottom-0 left-10 w-8 h-1/2 bg-blue-400 rounded-t-sm"></div>
                                    <div class="absolute bottom-0 left-24 w-8 h-3/4 bg-blue-500 rounded-t-sm"></div>
                                    <div class="absolute bottom-0 left-36 w-8 h-1/4 bg-blue-300 rounded-t-sm"></div>
                                    <div class="absolute bottom-0 left-48 w-8 h-full bg-blue-600 rounded-t-sm"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Placeholder Text -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="bg-white/90 backdrop-blur px-8 py-4 rounded-2xl shadow-xl text-center border border-slate-100">
                        <svg class="w-12 h-12 text-blue-600 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        <p class="font-bold text-slate-800 text-lg">Area Gambar Aplikasi</p>
                        <p class="text-slate-500 text-sm">(Akan diganti dengan screenshot asli)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating decorative elements -->
        <div class="absolute -right-6 top-1/3 glass-pill px-6 py-4 rounded-2xl hidden lg:block shadow-xl animate-bounce" style="animation-duration: 3s;">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div>
                    <p class="text-xs text-slate-500 font-bold uppercase">Payroll Selesai</p>
                    <p class="text-sm font-bold text-slate-900">100% Terkirim</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bento Grid Features Section -->
<section id="fitur" class="py-24 bg-white relative">
    <div class="section-shell px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">Semua yang Anda butuhkan, <br />di dalam satu platform.</h2>
            <p class="mt-6 text-lg text-slate-600">Tidak perlu lagi membuka banyak aplikasi. Mahya HRIS merangkum proses krusial HR dalam antarmuka yang sangat mudah dipahami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Large Card 1 -->
            <div class="bento-card bg-blue md:col-span-2 p-8 lg:p-10 flex flex-col justify-between min-h-[300px] group cursor-pointer">
                <div class="relative z-10 max-w-md">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-600 mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Manajemen Karyawan Terpusat</h3>
                    <p class="text-slate-600 leading-relaxed">Kelola direktori tim, struktur organisasi, hingga dokumen penting karyawan tanpa khawatir file tercecer.</p>
                </div>
                <!-- Abstract UI Graphic -->
                <div class="absolute right-0 bottom-0 w-2/3 h-3/4 opacity-40 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTAwIDBMMjAwIDEwMEwxMDAgMjAwTDAgMTAwTDEwMCAwWiIgZmlsbD0iI2RiZWFmZSIvPjwvc3ZnPg==')] bg-no-repeat bg-right-bottom mix-blend-multiply group-hover:opacity-60 group-hover:scale-105 transition-all duration-500 origin-bottom-right"></div>
            </div>

            <!-- Small Card 1 -->
            <div class="bento-card p-8 lg:p-10 min-h-[300px] group cursor-pointer border-indigo-100 hover:border-indigo-300">
                <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 mb-6 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-700 transition-colors">Absensi Real-time</h3>
                <p class="text-slate-600 leading-relaxed text-sm">Pemantauan kehadiran harian, timesheet, dan keterlambatan terpantau akurat secara langsung.</p>
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <!-- Small Card 2 -->
            <div class="bento-card p-8 lg:p-10 min-h-[300px] group cursor-pointer border-green-100 hover:border-green-300">
                <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center text-green-600 mb-6 group-hover:scale-110 group-hover:bg-green-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-green-700 transition-colors">Approval Cepat</h3>
                <p class="text-slate-600 leading-relaxed text-sm">Persetujuan cuti dan lembur berjenjang. Tidak ada lagi proses macet karena birokrasi manual.</p>
                <div class="absolute inset-0 bg-gradient-to-br from-green-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <!-- Large Card 2 -->
            <div class="bento-card md:col-span-2 p-8 lg:p-10 bg-white border border-blue-100 hover:border-blue-300 min-h-[300px] group cursor-pointer overflow-hidden">
                <div class="relative z-10 max-w-md">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 mb-6 shadow-sm group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Payroll 1-Klik</h3>
                    <p class="text-slate-600 leading-relaxed">Komponen gaji, lembur, BPJS, dan potongan PPh21 dihitung secara otomatis. Slip gaji digital langsung terkirim ke ESS karyawan.</p>
                </div>
                <!-- Graphic element -->
                <div class="absolute right-0 top-0 bottom-0 w-1/2 bg-gradient-to-l from-blue-50/50 to-transparent pointer-events-none group-hover:from-blue-100/50 transition-colors duration-500"></div>
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-400/20 transition-all duration-500 group-hover:scale-150"></div>
            </div>
        </div>
    </div>
</section>

<!-- Modules / Details Section -->
<section class="py-24 bg-slate-50 border-t border-slate-100">
    <div class="section-shell px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
        <div class="mb-16 text-center">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/50 text-blue-700 text-xs font-bold uppercase tracking-widest mb-4">Eksplorasi Fitur</span>
            <h2 class="text-3xl md:text-4xl font-black text-slate-900">Modul Lengkap Kami</h2>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">Kami menyediakan berbagai modul yang siap digunakan untuk menunjang produktivitas tim Anda dari ujung ke ujung.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Modul Item Card 1 -->
            <div class="bg-white rounded-2xl p-8 border border-slate-200/60 shadow-sm hover:shadow-[0_20px_40px_-15px_rgba(37,99,235,0.15)] hover:-translate-y-2 hover:border-blue-200 transition-all duration-300 group cursor-pointer flex flex-col h-full">
                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </div>
                <h4 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition-colors">Employee Self Service (ESS)</h4>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed flex-1">Karyawan dapat mengakses KPI, slip gaji, riwayat absensi, hingga mengajukan cuti dan reimburse secara mandiri melalui satu portal.</p>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center text-sm font-semibold text-blue-600 opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                    Pelajari lebih lanjut <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </div>
            </div>
            
            <!-- Modul Item Card 2 -->
            <div class="bg-white rounded-2xl p-8 border border-slate-200/60 shadow-sm hover:shadow-[0_20px_40px_-15px_rgba(37,99,235,0.15)] hover:-translate-y-2 hover:border-blue-200 transition-all duration-300 group cursor-pointer flex flex-col h-full">
                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                </div>
                <h4 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition-colors">Laporan & Analitik</h4>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed flex-1">Ringkasan eksekutif untuk HR dan Manajemen. Pantau metrik absensi, biaya payroll, dan performa SDM dengan laporan siap pakai.</p>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center text-sm font-semibold text-blue-600 opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                    Pelajari lebih lanjut <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </div>
            </div>
            
            <!-- Modul Item Card 3 -->
            <div class="bg-white rounded-2xl p-8 border border-slate-200/60 shadow-sm hover:shadow-[0_20px_40px_-15px_rgba(37,99,235,0.15)] hover:-translate-y-2 hover:border-blue-200 transition-all duration-300 group cursor-pointer flex flex-col h-full">
                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                </div>
                <h4 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition-colors">Aset & Inventaris</h4>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed flex-1">Catat kepemilikan dan penugasan aset perusahaan ke karyawan. Tidak ada lagi laptop atau alat kantor yang hilang tanpa jejak.</p>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center text-sm font-semibold text-blue-600 opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                    Pelajari lebih lanjut <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </div>
            </div>
            
            <!-- Modul Item Card 4 -->
            <div class="bg-white rounded-2xl p-8 border border-slate-200/60 shadow-sm hover:shadow-[0_20px_40px_-15px_rgba(37,99,235,0.15)] hover:-translate-y-2 hover:border-blue-200 transition-all duration-300 group cursor-pointer flex flex-col h-full">
                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <h4 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition-colors">Alat Admin & Kepatuhan</h4>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed flex-1">Atur jadwal kerja rumit, manajemen hak akses, log audit, hingga aturan tukar shift untuk menjaga operasional tetap rapi dan patuh.</p>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center text-sm font-semibold text-blue-600 opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                    Pelajari lebih lanjut <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Massive CTA Section -->
<section id="hris-demo" class="py-12 md:py-24 bg-white">
    <div class="section-shell px-4 sm:px-6 lg:px-8">
        <div class="bg-blue-600 rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden shadow-2xl flex flex-col lg:flex-row items-center gap-12">
            <!-- Background Graphic -->
            <div class="absolute top-0 right-0 w-full h-full pointer-events-none opacity-20">
                <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" class="absolute right-0 transform translate-x-1/3 -translate-y-1/4">
                    <defs>
                        <linearGradient id="b" gradientTransform="rotate(-45 .5 .5)"><stop offset="0%" stop-color="#fff"/><stop offset="100%" stop-color="#fff" stop-opacity="0"/></linearGradient>
                    </defs>
                    <circle cx="500" cy="500" r="500" fill="url(#b)"/>
                </svg>
            </div>

            <!-- Content -->
            <div class="flex-1 text-white z-10">
                <h2 class="text-4xl md:text-5xl font-black mb-6 leading-tight">Siap mentransformasi HR perusahaan Anda?</h2>
                <p class="text-blue-100 text-lg md:text-xl leading-relaxed mb-8 max-w-lg">
                    Dapatkan demo gratis hari ini. Tim kami akan menyesuaikan Mahya HRIS agar pas dengan alur kerja spesifik di perusahaan Anda.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex items-center gap-2 text-blue-100">
                        <svg class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Setup Cepat
                    </div>
                    <div class="flex items-center gap-2 text-blue-100">
                        <svg class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Dukungan Penuh
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="w-full max-w-md bg-white rounded-3xl p-8 shadow-xl z-10 relative">
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Minta Jadwal Demo</h3>
                <form action="{{ route('interest.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input name="name" type="text" class="w-full rounded-xl bg-slate-50 border-none px-4 py-3.5 text-slate-900 focus:ring-2 focus:ring-blue-500 transition-all outline-none" placeholder="Nama Lengkap" required>
                    </div>
                    <div>
                        <input name="company" type="text" class="w-full rounded-xl bg-slate-50 border-none px-4 py-3.5 text-slate-900 focus:ring-2 focus:ring-blue-500 transition-all outline-none" placeholder="Nama Perusahaan" required>
                    </div>
                    <div>
                        <input name="email" type="email" class="w-full rounded-xl bg-slate-50 border-none px-4 py-3.5 text-slate-900 focus:ring-2 focus:ring-blue-500 transition-all outline-none" placeholder="Email Kerja" required>
                    </div>
                    <button type="submit" class="w-full py-4 rounded-xl bg-slate-900 text-white font-bold text-lg hover:bg-slate-800 shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        Kirim Permintaan
                    </button>
                </form>
                <p class="text-xs text-center text-slate-400 mt-4">Kami akan membalas dalam waktu kurang dari 24 jam kerja.</p>
            </div>
        </div>
    </div>
</section>
@endsection
