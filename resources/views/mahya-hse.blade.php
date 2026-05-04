@extends('layouts.app')

@section('title', 'Mahya HSE | Berkemah Team')
@section('meta_description', 'Mahya HSE adalah modul keselamatan kerja dari Berkemah Team untuk inspeksi, incident report, audit trail, dan kepatuhan operasional.')
@section('meta_keywords', 'Mahya HSE, HSE Indonesia, inspeksi, incident report, compliance, Berkemah Team')

@push('styles')
<style>
    /* Custom utility classes for Premium SaaS Look - HSE Edition */
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
    .bento-card.bg-green {
        background: linear-gradient(145deg, #f0fdf4, #ffffff);
        border-color: #dcfce7;
    }
    .glass-pill {
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }
    .text-gradient-green {
        background: linear-gradient(to right, #15803d, #22c55e);
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
        <div class="absolute top-20 right-1/4 w-96 h-96 bg-green-400 rounded-full mix-blend-multiply filter blur-[100px] opacity-60"></div>
        <div class="absolute top-10 left-1/4 w-96 h-96 bg-emerald-300 rounded-full mix-blend-multiply filter blur-[100px] opacity-60"></div>
    </div>

    <div class="relative section-shell px-4 sm:px-6 lg:px-8 text-center z-10">
        <!-- Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full glass-pill mb-8">
            <span class="inline-flex items-center justify-center px-2 py-0.5 rounded-full bg-amber-100 text-amber-800 text-[10px] font-black uppercase tracking-wider">
                Coming Soon
            </span>
            <span class="text-xs font-bold uppercase tracking-wider text-green-800">Mahya HSE Platform</span>
        </div>

        <!-- Typography -->
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black tracking-tight text-slate-900 leading-[1.1] max-w-4xl mx-auto">
            Keselamatan Kerja yang <br class="hidden md:block" />
            <span class="text-gradient-green">Terukur & Disiplin</span>
        </h1>
        <p class="mt-8 text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto">
            Modul cerdas untuk inspeksi lapangan, pencatatan insiden, dan menjaga kepatuhan operasional perusahaan tanpa kerumitan administrasi.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="/#products" class="px-8 py-4 rounded-full bg-green-600 text-white font-bold text-lg shadow-[0_10px_30px_rgba(22,163,74,0.3)] hover:bg-green-700 hover:shadow-[0_15px_40px_rgba(22,163,74,0.4)] hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                Lihat Produk Lain
            </a>
            <a href="#fitur" class="px-8 py-4 rounded-full bg-white border border-slate-200 text-slate-700 font-bold text-lg hover:bg-slate-50 hover:border-slate-300 transition-all duration-300 w-full sm:w-auto">
                Intip Fitur HSE
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
                <div class="mx-auto text-[10px] font-medium text-slate-400 uppercase tracking-widest">Mahya HSE Dashboard</div>
            </div>
            
            <!-- App Placeholder Area (Under Construction Theme) -->
            <div class="flex-1 relative bg-slate-50 overflow-hidden flex items-center justify-center p-8 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9IiNlMmU4ZjAiLz48L3N2Zz4=')]">
                <!-- Abstract UI Representation -->
                <div class="w-full h-full max-w-4xl flex flex-col gap-6 opacity-30 group-hover:opacity-100 transition-opacity duration-700 filter blur-[2px]">
                    <div class="flex gap-6">
                        <!-- Sidebar mockup -->
                        <div class="w-48 hidden md:flex flex-col gap-3">
                            <div class="h-8 bg-green-200 rounded-lg w-3/4 mb-4"></div>
                            <div class="h-4 bg-slate-200 rounded w-full"></div>
                            <div class="h-4 bg-slate-200 rounded w-5/6"></div>
                            <div class="h-4 bg-slate-200 rounded w-full mt-6"></div>
                        </div>
                        <!-- Main content mockup -->
                        <div class="flex-1 flex flex-col gap-6">
                            <!-- Top stats -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="h-24 bg-white rounded-xl border border-slate-200 shadow-sm p-4 flex flex-col justify-between border-l-4 border-l-green-500">
                                    <div class="h-3 bg-slate-100 rounded w-1/2"></div>
                                    <div class="h-8 bg-green-100 rounded w-1/4"></div>
                                </div>
                                <div class="h-24 bg-white rounded-xl border border-slate-200 shadow-sm p-4 flex flex-col justify-between border-l-4 border-l-red-500">
                                    <div class="h-3 bg-slate-100 rounded w-1/2"></div>
                                    <div class="h-8 bg-red-100 rounded w-1/4"></div>
                                </div>
                            </div>
                            <!-- Map/Grid area -->
                            <div class="flex-1 bg-white rounded-xl border border-slate-200 shadow-sm p-6 flex flex-col">
                                <div class="h-4 bg-slate-100 rounded w-1/4 mb-6"></div>
                                <div class="flex-1 bg-slate-50 border border-slate-100 rounded-lg flex items-center justify-center">
                                    <div class="w-32 h-32 rounded-full border-4 border-dashed border-green-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Placeholder Text - Building Mode -->
                <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none z-10">
                    <div class="bg-amber-100 text-amber-800 px-6 py-2 rounded-full font-bold uppercase tracking-widest text-sm mb-4 shadow-lg border border-amber-200">
                        Under Construction
                    </div>
                    <div class="bg-white/90 backdrop-blur px-10 py-6 rounded-2xl shadow-xl text-center border border-slate-100 max-w-sm">
                        <svg class="w-16 h-16 text-green-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                        <p class="font-black text-slate-800 text-xl mb-1">Ruang Pratinjau UI</p>
                        <p class="text-slate-500 text-sm">Gambar antarmuka Mahya HSE akan ditempatkan di sini saat modul siap meluncur.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating decorative elements -->
        <div class="absolute -left-6 bottom-1/4 glass-pill px-6 py-4 rounded-2xl hidden lg:block shadow-xl animate-bounce" style="animation-duration: 4s;">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                </div>
                <div>
                    <p class="text-xs text-slate-500 font-bold uppercase">Incident Log</p>
                    <p class="text-sm font-bold text-slate-900">1 Laporan Masuk</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bento Grid Features Section -->
<section id="fitur" class="py-24 bg-white relative border-t border-slate-100">
    <div class="section-shell px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">Lebih dari sekadar checklist.</h2>
            <p class="mt-6 text-lg text-slate-600">Mahya HSE membangun kultur aman dengan sistem pencatatan yang cerdas dan alur yang terstandarisasi untuk tim di lapangan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <!-- Card 1 -->
            <div class="bento-card bg-green p-8 lg:p-10 flex flex-col justify-between min-h-[300px] group cursor-pointer">
                <div class="relative z-10 max-w-md">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-green-600 mb-6 group-hover:scale-110 group-hover:bg-green-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-green-700 transition-colors">Inspeksi & Checklist Digital</h3>
                    <p class="text-slate-600 leading-relaxed">Tinggalkan kertas. Buat format inspeksi khusus (kendaraan, APD, lokasi) yang bisa diisi langsung lewat perangkat seluler oleh pengawas lapangan.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bento-card p-8 lg:p-10 min-h-[300px] group cursor-pointer border-red-100 hover:border-red-300">
                <div class="relative z-10 max-w-md">
                    <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center text-red-600 mb-6 group-hover:scale-110 group-hover:bg-red-600 group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-red-700 transition-colors">Incident Report Responsif</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Catat kejadian (near-miss, kecelakaan ringan/berat) dengan detail lokasi, foto, dan kronologi. Notifikasi otomatis ke atasan terkait untuk eskalasi cepat.</p>
                </div>
                <div class="absolute inset-0 bg-gradient-to-br from-red-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <!-- Card 3 -->
            <div class="bento-card p-8 lg:p-10 min-h-[300px] group cursor-pointer border-amber-100 hover:border-amber-300">
                <div class="relative z-10 max-w-md">
                    <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 mb-6 group-hover:scale-110 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-700 transition-colors">Manajemen Kepatuhan</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Sistem akan mengingatkan kapan sertifikat ISO, izin alat berat (SILO/SIO), atau pelatihan K3 karyawan perlu diperbarui.</p>
                </div>
                <div class="absolute inset-0 bg-gradient-to-br from-amber-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <!-- Card 4 -->
            <div class="bento-card p-8 lg:p-10 min-h-[300px] bg-white border border-emerald-100 hover:border-emerald-300 group cursor-pointer overflow-hidden">
                <div class="relative z-10 max-w-md">
                    <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 mb-6 shadow-sm group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-emerald-700 transition-colors">Audit Trail Transparan</h3>
                    <p class="text-slate-600 leading-relaxed">Jejak digital yang solid. Lacak siapa yang menyetujui dokumen JSA (Job Safety Analysis) atau hasil inspeksi harian.</p>
                </div>
                <div class="absolute right-0 top-0 bottom-0 w-1/2 bg-gradient-to-l from-emerald-50/50 to-transparent pointer-events-none group-hover:from-emerald-100/50 transition-colors duration-500"></div>
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl group-hover:bg-emerald-400/20 transition-all duration-500 group-hover:scale-150"></div>
            </div>
        </div>
    </div>
</section>

<!-- Roadmap / Status Banner Section -->
<section class="py-24 bg-slate-50 border-t border-slate-100">
    <div class="section-shell px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-lg border border-slate-200 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-green-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 transform translate-x-1/2 -translate-y-1/2"></div>
            
            <div class="flex flex-col md:flex-row items-center gap-8 text-center md:text-left">
                <div class="w-24 h-24 bg-slate-100 rounded-2xl flex items-center justify-center shrink-0">
                    <svg class="w-12 h-12 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                </div>
                
                <div>
                    <div class="inline-block px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-xs font-bold uppercase tracking-widest mb-4">
                        Status Pengembangan
                    </div>
                    <h3 class="text-2xl md:text-3xl font-black text-slate-900 mb-4">Arah Pengembangan Mahya HSE</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Kami sengaja menampilkan halaman ini untuk memberikan transparansi kepada Anda. Mahya HSE dirancang berdampingan dengan HRIS untuk memberikan data yang sinkron antara status pekerja dan kepatuhan keselamatan lapangan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection