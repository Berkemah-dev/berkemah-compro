@extends('layouts.app')

@section('title', 'Berkemah Team | Solusi Digital UMKM & Mahasiswa')

@section('content')
<section class="pt-32 pb-20 hero-gradient" id="home">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="space-y-8">
<div class="flex flex-wrap gap-2">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">Website Company Profile</span>
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">Digitalisasi UMKM</span>
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">Project Mahasiswa</span>
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">Harga Terjangkau</span>
</div>
<h1 class="font-headline-xl text-headline-xl lg:text-[48px] leading-tight text-on-background">
Bantu Bisnis &amp; Project IT Kamu Jadi Lebih <span class="text-primary">Rapi, Digital, dan Siap Dipakai</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
Bingung cari partner IT yang nggak bikin pusing? Kami bantu UMKM naik kelas dan Mahasiswa selesaikan project dengan hasil profesional tanpa ribet.
</p>
<div class="flex flex-wrap gap-4 pt-4">
<a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20website" class="bg-primary text-on-primary px-8 py-4 rounded-full font-bold text-body-md hover:scale-105 transition-transform shadow-lg inline-flex items-center justify-center">
Tanya Website via WA
</a>
<a href="#pricing" class="bg-secondary-container text-primary px-8 py-4 rounded-full font-bold text-body-md hover:bg-primary-fixed-dim transition-colors inline-flex items-center justify-center">
Lihat Harga
</a>
</div>
</div>
<div class="relative">
<div class="w-full aspect-video rounded-lg overflow-hidden shadow-[0px_10px_32px_rgba(0,102,255,0.1)]">
<img class="w-full h-full object-cover" data-alt="Modern digital workspace with laptop displaying dashboard and mentor helping SME owner" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjVikDiNjkhQ0oLA-g2p-0gCY1C0kaX8fFzgwE9itxu8gtnsKbTxgD8NBMtsGeKQ1DeBLjXGoMv6c_wIom4SilZMgCkS8D8MiY-zzriCBN0tKzaxpmm5tj7oy8zE-H7-jUxg93qF070U1JAI77H0_B_9olRUVTBLf24At_IntAraL0e91zcYbjOe1FGI0A0F2T8OiwK76DGeeYap8ki2RUxb3JZuTUKxeEE4ty2AekCyKLIWbptTjn"/>
</div>
<div class="absolute -bottom-6 -left-6 glass-card p-4 rounded-lg shadow-xl border border-white/20 hidden md:block">
<div class="flex items-center gap-3">
<div class="bg-tertiary-container p-2 rounded-full text-white">
<span class="material-symbols-outlined">verified</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">100+ UMKM Dibantu</p>
<p class="text-[12px] text-on-surface-variant">Solusi IT terpercaya &amp; efisien</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="py-section-gap bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background mb-4">Punya Kebutuhan IT, Tapi Bingung Mulai dari Mana?</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Kami paham banget masalah yang sering bikin kamu pusing...</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">store</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">UMKM Belum Go Digital</h3>
<p class="text-on-surface-variant font-body-md">Masih jualan manual dan pengen punya website biar makin dipercaya pelanggan?</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">view_kanban</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Data Masih Berantakan</h3>
<p class="text-on-surface-variant font-body-md">Pencatatan masih pakai buku atau Excel manual yang sering error dan susah dicari?</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">chat_bubble</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Bahasa IT Terlalu Ribet</h3>
<p class="text-on-surface-variant font-body-md">Pernah tanya jasa IT tapi malah dikasih istilah teknis yang bikin makin bingung?</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">school</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Project Kuliah Mandek</h3>
<p class="text-on-surface-variant font-body-md">Ada tugas project coding atau skripsi tapi bingung nyusun logikanya gimana?</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">bug_report</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Website Sering Error</h3>
<p class="text-on-surface-variant font-body-md">Udah punya website tapi sering down atau lambat? Perlu tangan ahli buat benerin.</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">payments</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Budget Terbatas</h3>
<p class="text-on-surface-variant font-body-md">Mau sewa agency mahal banget? Cari yang pas di kantong tapi kualitas profesional.</p>
</div>
</div>
</div>
</section>

<section class="py-section-gap mt-6 md:mt-10">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background">Satu Tim, Dua Kebutuhan Utama</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">Kami merancang layanan khusus untuk segmentasi yang berbeda.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<div class="bg-primary-container p-12 rounded-lg text-on-primary-container flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-[48px] mb-6">corporate_fare</span>
<h3 class="font-headline-xl text-headline-xl mb-6">Untuk UMKM &amp; Bisnis</h3>
<p class="font-body-lg text-body-lg mb-8 opacity-90">Fokus pada pertumbuhan bisnis, kepercayaan brand, dan efisiensi operasional.</p>
<ul class="space-y-4 mb-10">
<li class="flex items-center gap-3"><span class="material-symbols-outlined">check_circle</span> Landing Page &amp; Company Profile</li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined">check_circle</span> Sistem Kasir &amp; Inventori Digital</li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined">check_circle</span> Maintenance &amp; SEO Optimization</li>
</ul>
</div>
<a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20website" class="bg-white text-primary px-8 py-4 rounded-full font-bold w-fit hover:bg-surface-container-low transition-colors inline-flex items-center justify-center">Tanya Website</a>
</div>
<div class="bg-secondary-container p-12 rounded-lg text-on-secondary-container flex flex-col justify-between border border-outline-variant">
<div>
<span class="material-symbols-outlined text-[48px] mb-6">history_edu</span>
<h3 class="font-headline-xl text-headline-xl mb-6 text-primary">Untuk Mahasiswa</h3>
<p class="font-body-lg text-body-lg mb-8 text-on-secondary-fixed-variant">Bimbingan teknis dan implementasi project untuk kebutuhan akademik.</p>
<ul class="space-y-4 mb-10">
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">check_circle</span> Bimbingan Logic &amp; Coding</li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">check_circle</span> Implementasi Database &amp; UI/UX</li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">check_circle</span> Debugging &amp; Troubleshooting Project</li>
</ul>
</div>
<a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20website" class="bg-primary text-white px-8 py-4 rounded-full font-bold w-fit hover:opacity-90 transition-all inline-flex items-center justify-center">Tanya Website</a>
</div>
</div>
</div>
</section>

<section class="py-section-gap bg-surface-container-lowest" id="services">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background">Layanan yang Bisa Kami Bantu</h2>
</div>
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-gutter">
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">public</span>
</div>
<p class="font-label-md text-label-md font-bold">Web Development</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">rocket_launch</span>
</div>
<p class="font-label-md text-label-md font-bold">SEO &amp; SEM</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">storefront</span>
</div>
<p class="font-label-md text-label-md font-bold">Digital Ads</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">dashboard_customize</span>
</div>
<p class="font-label-md text-label-md font-bold">Custom Software</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">cast_for_education</span>
</div>
<p class="font-label-md text-label-md font-bold">Mentoring IT</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">pest_control</span>
</div>
<p class="font-label-md text-label-md font-bold">Fixing Bugs</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">database</span>
</div>
<p class="font-label-md text-label-md font-bold">DB Management</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">verified_user</span>
</div>
<p class="font-label-md text-label-md font-bold">Security Audit</p>
</div>
</div>
</div>
</section>

<section class="py-section-gap bg-surface">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background">Kenapa Harus Pilih Berkemah Team?</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<div class="flex items-start gap-4 p-6">
<div class="bg-primary text-white p-3 rounded-lg"><span class="material-symbols-outlined">forum</span></div>
<div>
<h4 class="font-label-md text-label-md font-bold mb-1">Bahasa Tidak Ribet</h4>
<p class="text-on-surface-variant text-[14px]">Kami jelaskan secara sederhana tanpa banyak jargon IT yang membingungkan.</p>
</div>
</div>
<div class="flex items-start gap-4 p-6">
<div class="bg-primary text-white p-3 rounded-lg"><span class="material-symbols-outlined">handshake</span></div>
<div>
<h4 class="font-label-md text-label-md font-bold mb-1">Bisa Konsultasi Dulu</h4>
<p class="text-on-surface-variant text-[14px]">Ngobrol gratis sampai nemu solusi yang paling pas buat budget kamu.</p>
</div>
</div>
<div class="flex items-start gap-4 p-6">
<div class="bg-primary text-white p-3 rounded-lg"><span class="material-symbols-outlined">schedule</span></div>
<div>
<h4 class="font-label-md text-label-md font-bold mb-1">Pengerjaan Tepat Waktu</h4>
<p class="text-on-surface-variant text-[14px]">Deadline adalah janji. Kami kerja secara agile dan transparan.</p>
</div>
</div>
<div class="flex items-start gap-4 p-6">
<div class="bg-primary text-white p-3 rounded-lg"><span class="material-symbols-outlined">support_agent</span></div>
<div>
<h4 class="font-label-md text-label-md font-bold mb-1">Support Pasca Project</h4>
<p class="text-on-surface-variant text-[14px]">Nggak bakal kami lepas gitu aja. Ada masa garansi dan bantuan teknis.</p>
</div>
</div>
<div class="flex items-start gap-4 p-6">
<div class="bg-primary text-white p-3 rounded-lg"><span class="material-symbols-outlined">sell</span></div>
<div>
<h4 class="font-label-md text-label-md font-bold mb-1">Harga Sangat Fleksibel</h4>
<p class="text-on-surface-variant text-[14px]">Bisa disesuaikan dengan skala bisnis UMKM atau kantong mahasiswa.</p>
</div>
</div>
<div class="flex items-start gap-4 p-6">
<div class="bg-primary text-white p-3 rounded-lg"><span class="material-symbols-outlined">lightbulb</span></div>
<div>
<h4 class="font-label-md text-label-md font-bold mb-1">Update Teknologi</h4>
<p class="text-on-surface-variant text-[14px]">Menggunakan tech stack modern yang cepat, aman, dan mudah di-scale.</p>
</div>
</div>
</div>
</div>
</section>

<section class="py-section-gap bg-surface-container-low overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-headline-lg text-headline-lg text-center mb-16">Cara Kerjanya Simpel</h2>
<div class="relative grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">
<div class="text-center">
<div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold mx-auto mb-4">1</div>
<h5 class="font-bold text-label-md mb-2">Konsultasi</h5>
<p class="text-[13px] text-on-surface-variant">Ceritakan ide atau masalahmu via WA.</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-primary/20 text-primary rounded-full flex items-center justify-center font-bold mx-auto mb-4">2</div>
<h5 class="font-bold text-label-md mb-2">Penawaran</h5>
<p class="text-[13px] text-on-surface-variant">Kami berikan solusi &amp; rincian biaya.</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-primary/20 text-primary rounded-full flex items-center justify-center font-bold mx-auto mb-4">3</div>
<h5 class="font-bold text-label-md mb-2">Perancangan</h5>
<p class="text-[13px] text-on-surface-variant">Pembuatan UI/UX &amp; logic sistem.</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-primary/20 text-primary rounded-full flex items-center justify-center font-bold mx-auto mb-4">4</div>
<h5 class="font-bold text-label-md mb-2">Eksekusi</h5>
<p class="text-[13px] text-on-surface-variant">Tim kami mulai coding &amp; develop.</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-primary/20 text-primary rounded-full flex items-center justify-center font-bold mx-auto mb-4">5</div>
<h5 class="font-bold text-label-md mb-2">Review</h5>
<p class="text-[13px] text-on-surface-variant">Cek hasil sementara &amp; revisi jika perlu.</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-primary/20 text-primary rounded-full flex items-center justify-center font-bold mx-auto mb-4">6</div>
<h5 class="font-bold text-label-md mb-2">Delivery</h5>
<p class="text-[13px] text-on-surface-variant">Project selesai &amp; siap digunakan!</p>
</div>
</div>
</div>
</section>

<section class="py-section-gap">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-headline-lg text-headline-lg text-center mb-16">Paket Harga Fleksibel</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<div class="bg-white p-8 rounded-lg border border-outline-variant hover:border-primary transition-colors flex flex-col justify-between">
<div>
<h4 class="font-headline-md text-headline-md mb-2">Starter UMKM</h4>
<p class="text-primary font-bold text-headline-md">Mulai 1jt+</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Cocok untuk profil bisnis baru.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> 5 Halaman Statis</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Domain &amp; Hosting 1 Th</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Mobile Responsive</li>
</ul>
</div>
<button class="w-full border border-primary text-primary py-3 rounded-lg font-bold hover:bg-primary-fixed transition-colors">Ambil Paket Ini</button>
</div>
<div class="bg-primary text-white p-8 rounded-lg shadow-xl scale-105 relative flex flex-col justify-between">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-tertiary text-white px-4 py-1 rounded-full text-[12px] font-bold">PALING POPULER</div>
<div>
<h4 class="font-headline-md text-headline-md mb-2">Business Digital</h4>
<p class="font-bold text-headline-md">Mulai 3jt+</p>
<p class="opacity-80 text-[14px] mt-4 mb-6">Untuk sistem jualan &amp; dashboard.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px]">check</span> Sistem CMS Admin</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px]">check</span> Integrasi WhatsApp Chat</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px]">check</span> Laporan Penjualan Dasar</li>
</ul>
</div>
<button class="w-full bg-white text-primary py-3 rounded-lg font-bold hover:bg-surface-container-low transition-colors">Ambil Paket Ini</button>
</div>
<div class="bg-white p-8 rounded-lg border border-outline-variant hover:border-primary transition-colors flex flex-col justify-between">
<div>
<h4 class="font-headline-md text-headline-md mb-2">Project Mahasiswa</h4>
<p class="text-primary font-bold text-headline-md">Mulai 300rb+</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Bantuan teknis &amp; per bagian.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Debugging &amp; Perbaikan</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Modul Logic Spesifik</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Dokumentasi Code</li>
</ul>
</div>
<button class="w-full border border-primary text-primary py-3 rounded-lg font-bold hover:bg-primary-fixed transition-colors">Ambil Paket Ini</button>
</div>
<div class="bg-white p-8 rounded-lg border border-outline-variant hover:border-primary transition-colors flex flex-col justify-between">
<div>
<h4 class="font-headline-md text-headline-md mb-2">Custom System</h4>
<p class="text-primary font-bold text-headline-md">Nego</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Kebutuhan khusus &amp; skala besar.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Full Custom Architecture</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Integrasi API Pihak Ketiga</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Priority Support 24/7</li>
</ul>
</div>
<button class="w-full border border-primary text-primary py-3 rounded-lg font-bold hover:bg-primary-fixed transition-colors">Minta Penawaran Custom</button>
</div>
</div>
</div>
</section>

<section class="py-section-gap bg-surface-container-low" id="pricing">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-headline-lg text-headline-lg text-center mb-16">Paket Harga Fleksibel</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<div class="group overflow-hidden rounded-lg bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)]">
<div class="h-48 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Website company profile coffee roastery" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsUQTULsqrHlzNaV_22dlrpvCw5c1364K-fZJxQbrvOIABd7MUdl-vqbQDbOZiNjW1qEEbTPCKb2GRJyxQOFuJBgtfh5FeG7XYho681kt86SZiEph_thXqrFaGZkmgFvU2Yj4q_hD1Lt48p7hI3o2kF81LI0a0VmY_pxc_UOlL8dc7ohN9arKxSSV_2PMU6-7I5zounZHWEl-eV5Ut04aZxQmIJVkgZtvUhGCojhKCKNdNVBck-qOV"/>
<p class="text-primary font-bold text-headline-md">Rp 300K</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Cocok untuk landing page ringkas, profil bisnis baru, atau katalog awal.</p>
<span class="text-[12px] text-primary font-bold">UMKM</span>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> 3 Halaman Statis</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Mobile Responsive</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> CTA WhatsApp</li>
<div class="group overflow-hidden rounded-lg bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)]">
<button class="w-full py-4 border-2 border-primary text-primary rounded-xl font-bold hover:bg-primary-fixed transition-colors">Ambil Paket 300K</button>
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="POS system dashboard for retail boutique" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCz5k_ZiM4GtzvFlRitjk4VrC2c0_zVIEoMKoYo6h9LhbXnQk7uHLQpesO_fBqw-Ot7-GTOeoQX2-4QEI2EGusPdSUXIoKOlQOnyQr6SpV0h6pCJQJqPUqQwPmm-xO45NkUIoaDxWto0PgDQ9J1Lv9cvQ6W0US3P1NEyxq5XUN65b41VC76d9IyfqJoNEIhXc6AjTZ7fH1cAJgYf8N1artB7mRqX2_tDsgs0pTCIObSnMAUWeGa9sTD"/>
</div>
<div class="p-6">
<span class="text-[12px] text-primary font-bold">UMKM</span>
<h4 class="font-bold text-body-lg mt-1">Sistem Inventori Toko Baju</h4>
<p class="font-bold text-headline-md">Rp 750K - Rp 1JT</p>
<p class="opacity-80 text-[14px] mt-4 mb-6">Untuk sistem jualan yang lebih siap pakai, dashboard, dan alur order yang jelas.</p>
<div class="group overflow-hidden rounded-lg bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)]">
<div class="h-48 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Library management system student project" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxxcWX5nfkO8b2cC5pWL3Ie0fIh3zgmwXXSMdiZVS_GJHdtjCywl4WFEvX8m0i4xNoiT-30xS6EpWXC3RJEiCqwPKjWBzvioXpNyR-CRJkSED3czYUosepRq4Jp1suu8Nz_eedHJT0rgGda7IwyVQXu7LdCNphU3eMJvT4WOULQnMvboYWf_qNrK00qoVTmrWvq3gW-4qVyXSpCRWM_xGmigxqCOd9rWMPbMu4XxISmHSQ2hUm9qiw"/>
</div>
<div class="p-6">
<button class="w-full bg-white text-primary py-3 rounded-lg font-bold hover:bg-surface-container-low transition-colors">Ambil Paket 750K+</button>
<h4 class="font-bold text-body-lg mt-1">Aplikasi Library Management</h4>
</div>
</div>
</div>
<p class="text-primary font-bold text-headline-md">Rp 100K - Rp 300K</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Bantuan teknis per tugas, sesuai bagian yang kamu butuhkan.</p>

<section class="py-section-gap bg-surface-container-lowest">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background mb-4">Apa Kata Mereka?</h2>
<button class="w-full border border-primary text-primary py-3 rounded-lg font-bold hover:bg-primary-fixed transition-colors">Mulai dari 100K</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<div class="bg-white p-8 rounded-lg border border-outline-variant/30 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="text-primary mb-4">
<p class="text-primary font-bold text-headline-md">Custom</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Kebutuhan khusus &amp; skala besar dengan scope dan budget yang disesuaikan.</p>
<p class="font-body-md text-on-surface-variant mb-6 flex-grow italic">"Awalnya cuma mau bikin website sederhana, tapi akhirnya dibantu juga susun isi dan alur kontak ke pelanggan."</p>
<div class="border-t border-outline-variant/30 pt-4">
<p class="font-bold text-label-md text-on-background">Owner UMKM</p>
<p class="text-[12px] text-primary">Klien Bisnis</p>
</div>
<button class="w-full border border-primary text-primary py-3 rounded-lg font-bold hover:bg-primary-fixed transition-colors">Konsultasi Custom</button>
<div class="bg-white p-8 rounded-lg border border-outline-variant/30 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="text-primary mb-4">
<span class="material-symbols-outlined text-[32px]">format_quote</span>
</div>
<p class="font-body-md text-on-surface-variant mb-6 flex-grow italic">"Project kuliah saya awalnya error terus, akhirnya dibantu rapihin sampai bisa demo."</p>
<div class="border-t border-outline-variant/30 pt-4">
<p class="font-bold text-label-md text-on-background">Mahasiswa IT</p>
<p class="text-[12px] text-primary">Klien Akademik</p>
</div>
</div>
<div class="bg-white p-8 rounded-lg border border-outline-variant/30 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="text-primary mb-4">
<span class="material-symbols-outlined text-[32px]">format_quote</span>
</div>
<p class="font-body-md text-on-surface-variant mb-6 flex-grow italic">"Penjelasannya mudah dipahami, jadi saya ngerti harus mulai dari mana."</p>
<div class="border-t border-outline-variant/30 pt-4">
<p class="font-bold text-label-md text-on-background">Pemilik Bisnis Jasa</p>
<p class="text-[12px] text-primary">Klien Bisnis</p>
</div>
</div>
<div class="bg-white p-8 rounded-lg border border-outline-variant/30 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="text-primary mb-4">
<span class="material-symbols-outlined text-[32px]">format_quote</span>
</div>
<p class="font-body-md text-on-surface-variant mb-6 flex-grow italic">"Database dan laporan project saya jadi lebih rapi dan enak dipresentasikan."</p>
<div class="border-t border-outline-variant/30 pt-4">
<p class="font-bold text-label-md text-on-background">Mahasiswa Sistem Informasi</p>
<p class="text-[12px] text-primary">Klien Akademik</p>
</div>
</div>
</div>
</div>
</section>

<section class="py-section-gap" id="faq">
<div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-headline-lg text-headline-lg text-center mb-12">Tanya Jawab (FAQ)</h2>
<div class="space-y-4">
<details class="group bg-surface-container rounded-lg p-4 border border-outline-variant/30">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-body-md">
Apakah bisa konsultasi via WhatsApp dulu?
<span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-[14px]">Bisa banget! Kamu tinggal klik tombol WA di pojok kanan bawah atau klik "Konsultasi Gratis" di atas. Tim kami siap dengerin curhatan IT kamu tanpa dipungut biaya.</p>
</details>
<details class="group bg-surface-container rounded-lg p-4 border border-outline-variant/30">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-body-md">
Berapa lama waktu pengerjaan websitenya?
<span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-[14px]">Untuk Landing Page UMKM biasanya selesai dalam 5-7 hari kerja. Untuk sistem yang lebih kompleks atau project mahasiswa, waktu pengerjaan akan disesuaikan dengan tingkat kerumitan fiturnya.</p>
</details>
<details class="group bg-surface-container rounded-lg p-4 border border-outline-variant/30">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-body-md">
Apa project mahasiswa dikerjakan sampai selesai?
<span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-[14px]">Iya, kami bantu kerjakan sesuai request, tapi kami juga akan jelasin logikanya supaya kamu paham pas ditanya dosen. Kami bantu dari struktur DB sampai aplikasi jalan sempurna.</p>
</details>
</div>
</div>
</section>

<section class="py-section-gap bg-primary text-white overflow-hidden relative">
<div class="max-w-4xl mx-auto px-margin-mobile md:px-margin-desktop text-center relative z-10">
<h2 class="font-headline-xl text-headline-xl mb-6">Yuk, Ceritakan Kebutuhan IT Kamu Sekarang</h2>
<p class="font-body-lg text-body-lg mb-10 opacity-90">Jangan biarkan ide atau tugasmu numpuk. Kita bikin jadi nyata bareng Berkemah Team.</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20website" class="bg-white text-primary px-10 py-5 rounded-full font-bold text-body-lg shadow-lg hover:scale-105 transition-transform inline-flex items-center justify-center">Tanya Website</a>
<a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20website" class="border-2 border-white text-white px-10 py-5 rounded-full font-bold text-body-lg hover:bg-white hover:text-primary transition-colors inline-flex items-center justify-center">Chat WA untuk Website</a>
</div>
</div>
</section>
@endsection

@push('scripts')
<script>
window.addEventListener('scroll', function() {
    var nav = document.querySelector('nav');
    if (window.scrollY > 50) {
        nav.classList.add('shadow-lg');
    } else {
        nav.classList.remove('shadow-lg');
    }
});
</script>
@endpush
