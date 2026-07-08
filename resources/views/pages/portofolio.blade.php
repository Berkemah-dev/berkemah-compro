@extends('layouts.app')

@section('title', 'Portofolio - Berkemah Team')
@section('meta_description', 'Portofolio Berkemah Team berisi contoh pekerjaan website, platform BISA, LMS Berkemah, dashboard CargoGate, Dashboard Power BI, Showroom Mechanics, Screening Mechanic, website Klinik Gading Mitra Medika, website PPDB Al Azhar, website wisata Pasabar, portal career Andalan, landing page All Role AI, dashboard HRIS, dashboard SOP, aplikasi keuangan Moneyku, dan solusi operasional digital.')
@section('meta_keywords', 'portofolio Berkemah Team, BISA platform, LMS Berkemah, learning management system, CargoGate, dashboard logistik, Dashboard Power BI, Power BI, reporting dashboard, Showroom Mechanics, sales otomotif, showroom otomotif, Screening Mechanic, assessment mechanic, platform assessment, Gading Mitra Medika, PPDB Al Azhar, website PPDB, Pasabar, portal career Andalan, website career, All Role AI, landing page AI, Moneyku, aplikasi keuangan, website wisata, HRIS dashboard, dashboard SOP, website klinik, software custom')

@section('content')
<main class="pt-32">
<section class="px-margin-mobile md:px-margin-desktop pb-section-gap">
<div class="grid items-center gap-12 mx-auto max-w-container-max lg:grid-cols-[1.05fr_0.95fr]">
<div class="space-y-8">
<span class="inline-flex items-center gap-2 rounded-full bg-secondary-container px-4 py-2 text-label-md font-bold text-primary">
<span class="material-symbols-outlined text-[18px]">workspaces</span>
Portofolio Berkemah Team
</span>
<div class="space-y-5">
<h1 class="font-headline-xl text-headline-xl leading-tight text-on-surface">
Karya Digital yang Rapi, Cepat Dipahami, dan <span class="text-primary">Siap Dipakai</span>
</h1>
<p class="max-w-xl text-body-lg text-on-surface-variant">
Beberapa contoh solusi yang sudah kami susun: mulai dari website layanan, landing page, dashboard operasional, sampai aplikasi custom yang mudah dikelola.
</p>
</div>
<div class="flex flex-wrap gap-4">
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20diskusi%20project%20setelah%20lihat%20portofolio" class="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-8 py-4 font-bold text-on-primary shadow-lg transition-transform hover:scale-105">
<span class="material-symbols-outlined">chat</span>
Diskusi Project
</a>
<a href="#portfolio-list" class="inline-flex items-center justify-center rounded-full bg-secondary-container px-8 py-4 font-bold text-primary transition-colors hover:bg-primary-fixed-dim">
Lihat Karya
</a>
</div>
<div class="grid max-w-2xl grid-cols-3 gap-4 pt-4">
<div class="rounded-lg border border-outline-variant/30 bg-white p-5 shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
<p class="text-headline-md font-bold text-primary">30+</p>
<p class="mt-1 text-[13px] text-on-surface-variant">Project digital</p>
</div>
<div class="rounded-lg border border-outline-variant/30 bg-white p-5 shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
<p class="text-headline-md font-bold text-primary">3-14</p>
<p class="mt-1 text-[13px] text-on-surface-variant">Hari pengerjaan</p>
</div>
<div class="rounded-lg border border-outline-variant/30 bg-white p-5 shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
<p class="text-headline-md font-bold text-primary">1:1</p>
<p class="mt-1 text-[13px] text-on-surface-variant">Support langsung</p>
</div>
</div>
</div>
<div class="relative">
<div class="overflow-hidden rounded-lg border border-outline-variant/30 bg-white p-3 shadow-2xl">
<img class="h-[340px] w-full object-contain md:h-[460px]" data-alt="SOP and CheckFlow dashboard portfolio preview" src="{{ asset('assets/sop.png') }}"/>
</div>
<div class="glass-card absolute -bottom-6 left-6 right-6 rounded-lg p-5 shadow-xl md:left-auto md:w-80">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined rounded-full bg-tertiary-container p-2 text-white">verified</span>
<div>
<p class="font-bold text-on-surface">Dari brief sampai live</p>
<p class="mt-1 text-sm text-on-surface-variant">Kami bantu susun alur, UI, implementasi, deploy, dan perbaikan pasca rilis.</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="portfolio-list" class="bg-surface-container-low px-margin-mobile py-section-gap md:px-margin-desktop">
<div class="mx-auto max-w-container-max">
<div class="mb-12 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Project Pilihan</h2>
<p class="mt-3 max-w-2xl text-body-md text-on-surface-variant">Contoh tipe pekerjaan yang bisa kami bantu. Detail scope, fitur, dan harga selalu disesuaikan dari kebutuhan asli project.</p>
</div>
<div class="relative w-full md:w-80" id="portfolio-filter-wrap">
<button type="button" id="portfolio-filter-button" class="flex h-14 w-full items-center justify-between rounded-full border-2 border-primary bg-white px-5 text-primary shadow-[0px_4px_20px_rgba(0,0,0,0.04)] transition-colors hover:bg-primary-fixed focus:outline-none focus:ring-4 focus:ring-primary/15" aria-haspopup="listbox" aria-expanded="false">
<span class="flex min-w-0 items-center gap-3">
<span class="material-symbols-outlined text-[22px]">filter_list</span>
<span id="portfolio-filter-label" class="truncate text-label-md font-bold">Semua Portofolio</span>
</span>
<span id="portfolio-filter-chevron" class="material-symbols-outlined text-[22px] transition-transform">expand_more</span>
</button>
<div id="portfolio-filter-menu" class="absolute right-0 z-30 mt-3 hidden w-full overflow-hidden rounded-lg border border-outline-variant bg-white p-2 shadow-2xl" role="listbox" aria-label="Filter portofolio">
<button type="button" data-portfolio-option="all" class="portfolio-option flex w-full items-center justify-between rounded-md px-4 py-3 text-left text-sm font-bold text-primary hover:bg-primary-fixed" role="option">Semua Portofolio <span class="material-symbols-outlined text-[18px]">check</span></button>
<button type="button" data-portfolio-option="website" class="portfolio-option flex w-full items-center justify-between rounded-md px-4 py-3 text-left text-sm font-bold text-on-surface hover:bg-primary-fixed" role="option">Website &amp; Landing Page <span class="material-symbols-outlined hidden text-[18px] text-primary">check</span></button>
<button type="button" data-portfolio-option="dashboard" class="portfolio-option flex w-full items-center justify-between rounded-md px-4 py-3 text-left text-sm font-bold text-on-surface hover:bg-primary-fixed" role="option">Dashboard &amp; Analytics <span class="material-symbols-outlined hidden text-[18px] text-primary">check</span></button>
<button type="button" data-portfolio-option="platform" class="portfolio-option flex w-full items-center justify-between rounded-md px-4 py-3 text-left text-sm font-bold text-on-surface hover:bg-primary-fixed" role="option">Platform &amp; Portal <span class="material-symbols-outlined hidden text-[18px] text-primary">check</span></button>
<button type="button" data-portfolio-option="business" class="portfolio-option flex w-full items-center justify-between rounded-md px-4 py-3 text-left text-sm font-bold text-on-surface hover:bg-primary-fixed" role="option">Aplikasi Bisnis <span class="material-symbols-outlined hidden text-[18px] text-primary">check</span></button>
</div>
</div>
</div>

<div id="portfolio-grid" class="grid grid-cols-1 gap-gutter md:grid-cols-2 xl:grid-cols-3">
<a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank" data-portfolio-card data-categories="website platform" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Website PPDB Al Azhar Syifa Budi Parahyangan landing page preview" src="{{ asset('assets/al azhar.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">PPDB</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">School Admission</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Website PPDB Al Azhar</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Landing page penerimaan peserta didik baru dengan informasi sekolah, alur pendaftaran, CTA daftar, login PPDB, dan cek status pendaftaran.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Daftar</span><br><span class="text-on-surface-variant">CTA utama</span></p>
<p><span class="font-bold text-primary">Status</span><br><span class="text-on-surface-variant">cek pendaftaran</span></p>
</div>
</div>
</a>

<a href="https://salmon-octopus-221724.hostingersite.com/login" target="_blank" data-portfolio-card data-categories="dashboard platform business" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="HRIS dashboard admin preview with employee metrics and analytics charts" src="{{ asset('assets/hris.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">HRIS</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Admin Dashboard</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Dashboard HRIS Perusahaan</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Dashboard admin untuk memantau data karyawan, absensi, cuti, reimbursement, payroll, KPI, dan laporan analitik dalam satu layar.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">32 karyawan</span><br><span class="text-on-surface-variant">data terpantau</span></p>
<p><span class="font-bold text-primary">Analitik</span><br><span class="text-on-surface-variant">grafik real-time</span></p>
</div>
</div>
</a>

<a href="https://orchid-llama-232399.hostingersite.com/login" target="_blank" data-portfolio-card data-categories="platform dashboard business" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="BISA platform login and operational approval dashboard preview" src="{{ asset('assets/bisa-platform.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Platform</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Enterprise Dashboard</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">BISA Platform Operasional</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Sistem internal untuk mengelola permintaan, persetujuan, KPI, pelaporan, dan akses pengguna dalam satu dashboard.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">SSO</span><br><span class="text-on-surface-variant">akses aman</span></p>
<p><span class="font-bold text-primary">Real-time</span><br><span class="text-on-surface-variant">approval &amp; KPI</span></p>
</div>
</div>
</a>

<a href="https://deeppink-deer-984905.hostingersite.com/login" target="_blank" data-portfolio-card data-categories="dashboard business" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="CargoGate logistics management dashboard preview with shipment revenue and fleet metrics" src="{{ asset('assets/cargogate.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Logistik</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Management Dashboard</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Dashboard CargoGate</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Dashboard logistik untuk memantau revenue, shipment, armada aktif, AR/AP, status job, master data, dan operasional pengiriman.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Shipment</span><br><span class="text-on-surface-variant">status pekerjaan</span></p>
<p><span class="font-bold text-primary">Armada</span><br><span class="text-on-surface-variant">fleet aktif</span></p>
</div>
</div>
</a>

<a href="https://klinikgadingmitramedika.com/" target="_blank" data-portfolio-card data-categories="website" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Website Klinik Gading Mitra Medika landing page preview" src="{{ asset('assets/gmm.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Klinik</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Company Profile</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Website Klinik Gading Mitra Medika</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Landing page klinik dengan informasi layanan, CTA WhatsApp, highlight layanan 24 jam, dan tampilan yang mudah dibaca pasien.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">24 Jam</span><br><span class="text-on-surface-variant">UGD &amp; rawat inap</span></p>
<p><span class="font-bold text-primary">WhatsApp</span><br><span class="text-on-surface-variant">kontak cepat</span></p>
</div>
</div>
</a>

<a href="https://karir-andalan.com/" target="_blank" data-portfolio-card data-categories="website platform" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Andalan Career recruitment landing page preview with mining team hero section" src="{{ asset('assets/career.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Career</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Recruitment Portal</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Website Career Andalan</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Portal karier untuk menampilkan lowongan, pencarian posisi, pendaftaran kandidat, login pelamar, dan informasi FAQ dalam satu halaman yang rapi.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Lowongan</span><br><span class="text-on-surface-variant">posisi terbuka</span></p>
<p><span class="font-bold text-primary">Daftar</span><br><span class="text-on-surface-variant">kandidat online</span></p>
</div>
</div>
</a>

<a href="https://beige-coyote-664406.hostingersite.com/" target="_blank" data-portfolio-card data-categories="website platform" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Berkemah LMS landing page preview with programming course hero section" src="{{ asset('assets/lms.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">LMS</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Learning Platform</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">LMS Berkemah</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Platform belajar online untuk menampilkan kelas, course, membership, payment, login, registrasi, tracking progres, kuis, dan sertifikat.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Course</span><br><span class="text-on-surface-variant">kelas &amp; modul</span></p>
<p><span class="font-bold text-primary">Progress</span><br><span class="text-on-surface-variant">kuis &amp; sertifikat</span></p>
</div>
</div>
</a>

<a href="https://darkslategray-porcupine-152721.hostingersite.com/login" target="_blank" data-portfolio-card data-categories="dashboard platform business" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Dashboard Power BI reporting and control analytics portal preview" src="{{ asset('assets/poerbi.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Power BI</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Reporting Dashboard</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Dashboard Power BI</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Portal reporting dan analytics untuk akses laporan, pemantauan performa, kontrol data internal, login aman, dan jejak audit terintegrasi.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Reporting</span><br><span class="text-on-surface-variant">laporan terpusat</span></p>
<p><span class="font-bold text-primary">Analytics</span><br><span class="text-on-surface-variant">kontrol kinerja</span></p>
</div>
</div>
</a>

<a href="https://ghostwhite-lark-592992.hostingersite.com/login" target="_blank" data-portfolio-card data-categories="dashboard business" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Showroom Mechanics sales otomotif system login preview for vehicle stock and offer management" src="{{ asset('assets/sales-otomotif.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Otomotif</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Sales Dashboard</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Showroom Mechanics</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Sistem sales otomotif untuk mengelola stok kendaraan, harga jual, simulasi cicilan, penawaran digital, margin, dan follow-up customer.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Stok</span><br><span class="text-on-surface-variant">kendaraan</span></p>
<p><span class="font-bold text-primary">Penawaran</span><br><span class="text-on-surface-variant">digital cepat</span></p>
</div>
</div>
</a>

<a href="https://lightskyblue-quail-167707.hostingersite.com/login" target="_blank" data-portfolio-card data-categories="platform business" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Screening Mechanic assessment platform login preview with secure test and CMS admin" src="{{ asset('assets/screening-mechanic.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Assessment</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Mechanic Test</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Screening Mechanic</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Platform assessment mechanic untuk login peserta dan admin, random soal, CMS admin, secure test, serta pemantauan hasil screening.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Random Soal</span><br><span class="text-on-surface-variant">assessment tertib</span></p>
<p><span class="font-bold text-primary">CMS Admin</span><br><span class="text-on-surface-variant">kelola test</span></p>
</div>
</div>
</a>

<a href="https://pasabar.my.id" target="_blank" data-portfolio-card data-categories="website" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Pasabar travel landing page preview for West Java destinations" src="{{ asset('assets/pasabar.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Wisata</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Landing Page</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Website Wisata Pasabar</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Landing page untuk menampilkan destinasi wisata, hotel, restoran, dan ajakan eksplorasi tempat menarik di Jawa Barat.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Explore</span><br><span class="text-on-surface-variant">CTA utama</span></p>
<p><span class="font-bold text-primary">Travel</span><br><span class="text-on-surface-variant">wisata &amp; kuliner</span></p>
</div>
</div>
</a>

<a href="https://allrole-ai.github.io/" target="_blank" data-portfolio-card data-categories="website" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="All Role AI landing page preview with hero section" src="{{ asset('assets/all role ai.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">AI</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Landing Page</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Landing Page All Role AI</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Landing page bertema AI dengan hero section yang kuat, navigasi sederhana, CTA chat, dan visual gelap yang fokus ke produk.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">AI Chat</span><br><span class="text-on-surface-variant">CTA utama</span></p>
<p><span class="font-bold text-primary">Hero</span><br><span class="text-on-surface-variant">landing page</span></p>
</div>
</div>
</a>

<a href="https://darkred-giraffe-249836.hostingersite.com/login" target="_blank" data-portfolio-card data-categories="dashboard business" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="SOP and CheckFlow dashboard preview for PT DIPSOL INDONESIA" src="{{ asset('assets/sop.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">SOP</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">CheckFlow</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Dashboard SOP &amp; CheckFlow</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Dashboard untuk mengelola SOP, template, check sheet, approval, QR center, dan ringkasan aktivitas produksi harian.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">6 SOP</span><br><span class="text-on-surface-variant">status terpantau</span></p>
<p><span class="font-bold text-primary">Approval</span><br><span class="text-on-surface-variant">tindakan pending</span></p>
</div>
</div>
</a>

<a href="https://lavenderblush-cod-169511.hostingersite.com/dashboard" target="_blank" data-portfolio-card data-categories="platform business" class="block overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<div class="h-56 overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Moneyku finance application login page preview" src="{{ asset('assets/moneyku.png') }}"/>
</div>
<div class="space-y-5 p-7">
<div class="flex flex-wrap gap-2">
<span class="rounded-full bg-primary-fixed px-3 py-1 text-[12px] font-bold text-primary">Finance</span>
<span class="rounded-full bg-surface-container px-3 py-1 text-[12px] font-bold text-on-surface-variant">Money Management</span>
</div>
<div class="group flex items-start justify-between gap-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Aplikasi Keuangan Moneyku</h3>
<p class="mt-3 text-body-md text-on-surface-variant">Aplikasi pengelolaan uang dengan halaman login yang rapi, autentikasi pengguna, dan tampilan brand yang sederhana serta mudah dikenali.</p>
</div>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mt-1">open_in_new</span>
</div>
<div class="grid grid-cols-2 gap-3 border-t border-outline-variant/30 pt-5 text-sm">
<p><span class="font-bold text-primary">Login</span><br><span class="text-on-surface-variant">akses pengguna</span></p>
<p><span class="font-bold text-primary">Finance</span><br><span class="text-on-surface-variant">kelola uang</span></p>
</div>
</div>
</a>

{{--
<article class="hidden overflow-hidden rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-transform hover:-translate-y-2 md:col-span-2 xl:col-span-3">
<div class="grid lg:grid-cols-[1.15fr_0.85fr]">
<div class="relative min-h-[360px] overflow-hidden bg-slate-50 p-6 sm:p-8 lg:min-h-[460px]">
<div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(15,23,42,0.06)_1px,transparent_1px),linear-gradient(to_bottom,rgba(15,23,42,0.06)_1px,transparent_1px)] bg-[length:32px_32px]"></div>
<div class="relative mx-auto flex h-full max-w-2xl flex-col justify-center">
<div class="mb-8 flex items-center justify-center gap-5">
<div class="flex h-20 w-20 items-center justify-center rounded-lg border border-outline-variant/30 bg-white shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
<span class="text-headline-lg font-bold text-[#14365d]">B<span class="text-[#1a755f]">S</span></span>
</div>
<div>
<p class="text-headline-md font-bold text-[#0b2f5b]">BISA</p>
<p class="mt-1 text-sm font-bold text-on-surface-variant">Business Integrated System Application</p>
</div>
</div>
<div class="mx-auto mb-8 h-1 w-32 rounded-full bg-[linear-gradient(to_right,#12345b,#1a755f)]"></div>
<div class="rounded-lg border border-outline-variant/40 bg-white p-7 shadow-xl sm:p-9">
<h3 class="font-headline-md text-headline-md text-on-surface">Masuk ke Akun</h3>
<p class="mt-2 text-sm text-on-surface-variant">Akses dasbor untuk pengelolaan data, persetujuan, dan pelaporan yang terstandar.</p>
<div class="mt-6 space-y-4">
<div>
<p class="mb-2 text-sm font-bold text-on-surface-variant">Alamat surel</p>
<div class="rounded-lg border border-[#c8d4e6] bg-[#e9f1ff] px-4 py-3 text-sm text-on-surface">operator@local.test</div>
</div>
<div>
<p class="mb-2 text-sm font-bold text-on-surface-variant">Kata sandi</p>
<div class="flex items-center justify-between rounded-lg border border-[#c8d4e6] bg-[#e9f1ff] px-4 py-3 text-sm text-on-surface">
<span>••••••••••</span>
<span class="material-symbols-outlined text-[18px] text-on-surface-variant">visibility</span>
</div>
</div>
<div class="flex items-center justify-between text-sm">
<span class="flex items-center gap-2 text-on-surface-variant"><span class="h-4 w-4 rounded border border-[#c8d4e6]"></span>Ingat saya</span>
<span class="font-bold text-[#12345b]">Lupa kata sandi?</span>
</div>
<div class="rounded-lg bg-[#12345b] py-3 text-center font-bold text-white">Masuk</div>
</div>
</div>
</div>
</div>
<div class="flex flex-col justify-center bg-[linear-gradient(135deg,#17375f,#087452)] p-8 text-white sm:p-10">
<span class="mb-6 w-fit rounded-full bg-white/15 px-4 py-2 text-[12px] font-bold">BISA PLATFORM</span>
<h3 class="font-headline-lg text-headline-lg">Satu Pintu untuk Operasional &amp; Persetujuan</h3>
<p class="mt-4 text-body-lg text-white/90">Kelola workflow lintas divisi: permintaan, persetujuan, KPI, hingga pelaporan dalam satu sistem yang terdokumentasi.</p>
<div class="mt-8 space-y-5">
<div class="flex gap-3">
<span class="material-symbols-outlined text-[20px]">check</span>
<div>
<p class="font-bold">Single Sign-On &amp; Audit Trail</p>
<p class="mt-1 text-sm text-white/80">Akses aman, semua aktivitas terekam.</p>
</div>
</div>
<div class="flex gap-3">
<span class="material-symbols-outlined text-[20px]">check</span>
<div>
<p class="font-bold">Integrasi Modul</p>
<p class="mt-1 text-sm text-white/80">SCM, FI/CO, Human Capital, dan BI dalam satu sistem.</p>
</div>
</div>
<div class="flex gap-3">
<span class="material-symbols-outlined text-[20px]">check</span>
<div>
<p class="font-bold">Real-time Dashboard</p>
<p class="mt-1 text-sm text-white/80">KPI, status permohonan, dan notifikasi langsung.</p>
</div>
</div>
</div>
<div class="mt-8 grid grid-cols-2 gap-3 border-t border-white/20 pt-6 text-sm">
<p><span class="font-bold">Enterprise</span><br><span class="text-white/75">operasional</span></p>
<p><span class="font-bold">Dashboard</span><br><span class="text-white/75">approval &amp; KPI</span></p>
</div>
</div>
</div>
</article>
--}}

</div>
<div id="portfolio-empty" class="mt-10 hidden rounded-lg border border-outline-variant/30 bg-white p-8 text-center text-on-surface-variant">
Belum ada project untuk kategori ini.
</div>
<div id="portfolio-pagination" class="mt-10 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
<p id="portfolio-page-info" class="text-sm text-on-surface-variant"></p>
<div class="flex flex-wrap items-center gap-2">
<button type="button" id="portfolio-prev" class="inline-flex items-center justify-center gap-2 rounded-full border border-outline-variant bg-white px-4 py-2 text-sm font-bold text-primary transition-colors hover:bg-primary-fixed disabled:cursor-not-allowed disabled:opacity-40">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
Sebelumnya
</button>
<div id="portfolio-pages" class="flex flex-wrap gap-2"></div>
<button type="button" id="portfolio-next" class="inline-flex items-center justify-center gap-2 rounded-full border border-outline-variant bg-white px-4 py-2 text-sm font-bold text-primary transition-colors hover:bg-primary-fixed disabled:cursor-not-allowed disabled:opacity-40">
Selanjutnya
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
</div>
</section>

<section class="px-margin-mobile py-section-gap md:px-margin-desktop">
<div class="mx-auto grid max-w-container-max gap-10 lg:grid-cols-[0.85fr_1.15fr]">
<div>
<span class="inline-flex rounded-full bg-secondary-container px-4 py-2 text-label-md font-bold text-primary">Cara Kami Menyelesaikan Project</span>
<h2 class="mt-6 font-headline-lg text-headline-lg text-on-surface">Bukan cuma tampilan, kami rapikan alur kerjanya.</h2>
<p class="mt-4 text-body-md text-on-surface-variant">Setiap project dimulai dari kebutuhan nyata. Setelah itu kami bantu pecah menjadi scope, halaman, fitur, dan prioritas pengerjaan.</p>
</div>
<div class="grid gap-4 md:grid-cols-2">
<div class="rounded-lg border border-outline-variant/30 bg-white p-7 shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
<span class="material-symbols-outlined rounded-lg bg-primary-fixed p-3 text-primary">rule</span>
<h3 class="mt-5 font-headline-md text-headline-md">Brief &amp; Scope</h3>
<p class="mt-2 text-on-surface-variant">Kebutuhan dikunci dulu agar estimasi harga dan waktu tidak melebar.</p>
</div>
<div class="rounded-lg border border-outline-variant/30 bg-white p-7 shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
<span class="material-symbols-outlined rounded-lg bg-primary-fixed p-3 text-primary">design_services</span>
<h3 class="mt-5 font-headline-md text-headline-md">UI &amp; Flow</h3>
<p class="mt-2 text-on-surface-variant">Kami susun struktur layar yang mudah dipahami pengguna dan pemilik project.</p>
</div>
<div class="rounded-lg border border-outline-variant/30 bg-white p-7 shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
<span class="material-symbols-outlined rounded-lg bg-primary-fixed p-3 text-primary">code_blocks</span>
<h3 class="mt-5 font-headline-md text-headline-md">Build &amp; Review</h3>
<p class="mt-2 text-on-surface-variant">Progress dicek bertahap supaya revisi bisa cepat masuk tanpa menunggu akhir.</p>
</div>
<div class="rounded-lg border border-outline-variant/30 bg-white p-7 shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
<span class="material-symbols-outlined rounded-lg bg-primary-fixed p-3 text-primary">rocket_launch</span>
<h3 class="mt-5 font-headline-md text-headline-md">Deploy &amp; Handover</h3>
<p class="mt-2 text-on-surface-variant">Project disiapkan untuk live, lalu kami beri catatan teknis dan panduan penggunaan.</p>
</div>
</div>
</div>
</section>

<section class="px-margin-mobile pb-section-gap md:px-margin-desktop">
<div class="mx-auto overflow-hidden rounded-lg bg-primary p-10 text-on-primary shadow-2xl md:p-14 max-w-container-max">
<div class="grid gap-8 md:grid-cols-[1fr_auto] md:items-center">
<div>
<h2 class="font-headline-lg text-headline-lg">Punya ide yang ingin masuk portofolio berikutnya?</h2>
<p class="mt-4 max-w-2xl text-body-lg opacity-90">Ceritakan kebutuhanmu. Kami bantu pilih bentuk paling realistis: website cepat, dashboard operasional, atau sistem custom sesuai budget.</p>
</div>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20buat%20project%20baru" class="inline-flex items-center justify-center gap-2 rounded-full bg-white px-8 py-4 font-bold text-primary transition-transform hover:scale-105">
<span class="material-symbols-outlined">send</span>
Mulai Project
</a>
</div>
</div>
</section>
</main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
var cardsPerPage = 6;
var activeFilter = 'all';
var currentPage = 1;
var cards = Array.prototype.slice.call(document.querySelectorAll('[data-portfolio-card]'));
var filterWrap = document.getElementById('portfolio-filter-wrap');
var filterButton = document.getElementById('portfolio-filter-button');
var filterMenu = document.getElementById('portfolio-filter-menu');
var filterLabel = document.getElementById('portfolio-filter-label');
var filterChevron = document.getElementById('portfolio-filter-chevron');
var filterOptions = Array.prototype.slice.call(document.querySelectorAll('[data-portfolio-option]'));
var pagination = document.getElementById('portfolio-pagination');
var pageInfo = document.getElementById('portfolio-page-info');
var pagesWrap = document.getElementById('portfolio-pages');
var previousButton = document.getElementById('portfolio-prev');
var nextButton = document.getElementById('portfolio-next');
var emptyState = document.getElementById('portfolio-empty');
var listSection = document.getElementById('portfolio-list');

if (!cards.length || !filterButton || !filterMenu || !filterLabel || !pagination || !pagesWrap || !previousButton || !nextButton) {
return;
}

function setFilterMenuOpen(isOpen) {
filterMenu.classList.toggle('hidden', !isOpen);
filterButton.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
if (filterChevron) {
filterChevron.classList.toggle('rotate-180', isOpen);
}
}

function setFilterState() {
filterOptions.forEach(function(option) {
var isActive = option.dataset.portfolioOption === activeFilter;
var checkIcon = option.querySelector('.material-symbols-outlined');
option.setAttribute('aria-selected', isActive ? 'true' : 'false');
option.classList.toggle('bg-primary-fixed', isActive);
option.classList.toggle('text-primary', isActive);
option.classList.toggle('text-on-surface', !isActive);
if (checkIcon) {
checkIcon.classList.toggle('hidden', !isActive);
}
if (isActive) {
filterLabel.textContent = option.textContent.replace('check', '').trim();
}
});
}

function getFilteredCards() {
return cards.filter(function(card) {
if (activeFilter === 'all') {
return true;
}
var categories = (card.dataset.categories || '').split(/\s+/);
return categories.indexOf(activeFilter) !== -1;
});
}

function buildPageButton(pageNumber) {
var button = document.createElement('button');
var isActive = pageNumber === currentPage;
button.type = 'button';
button.textContent = pageNumber;
button.className = isActive
? 'h-10 min-w-10 rounded-full border border-primary bg-primary px-4 text-sm font-bold text-white'
: 'h-10 min-w-10 rounded-full border border-outline-variant bg-white px-4 text-sm font-bold text-primary transition-colors hover:bg-primary-fixed';
button.setAttribute('aria-label', 'Halaman portofolio ' + pageNumber);
button.addEventListener('click', function() {
currentPage = pageNumber;
renderPortfolio(true);
});
return button;
}

function renderPortfolio(shouldScroll) {
var filteredCards = getFilteredCards();
var totalPages = Math.max(1, Math.ceil(filteredCards.length / cardsPerPage));
var startIndex;
var endIndex;

if (currentPage > totalPages) {
currentPage = totalPages;
}

startIndex = (currentPage - 1) * cardsPerPage;
endIndex = startIndex + cardsPerPage;

cards.forEach(function(card) {
card.classList.add('hidden');
});

filteredCards.slice(startIndex, endIndex).forEach(function(card) {
card.classList.remove('hidden');
});

if (emptyState) {
emptyState.classList.toggle('hidden', filteredCards.length > 0);
}

if (pageInfo) {
if (filteredCards.length) {
pageInfo.textContent = 'Menampilkan ' + (startIndex + 1) + '-' + Math.min(endIndex, filteredCards.length) + ' dari ' + filteredCards.length + ' project';
} else {
pageInfo.textContent = 'Tidak ada project pada kategori ini';
}
}

pagesWrap.innerHTML = '';
for (var page = 1; page <= totalPages; page += 1) {
pagesWrap.appendChild(buildPageButton(page));
}

previousButton.disabled = currentPage === 1;
nextButton.disabled = currentPage === totalPages || filteredCards.length === 0;
pagination.classList.toggle('hidden', filteredCards.length <= cardsPerPage);
setFilterState();

if (shouldScroll && listSection) {
listSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
}

filterButton.addEventListener('click', function() {
setFilterMenuOpen(filterMenu.classList.contains('hidden'));
});

filterOptions.forEach(function(option) {
option.addEventListener('click', function() {
activeFilter = option.dataset.portfolioOption || 'all';
currentPage = 1;
setFilterMenuOpen(false);
renderPortfolio(true);
});
});

document.addEventListener('click', function(event) {
if (filterWrap && !filterWrap.contains(event.target)) {
setFilterMenuOpen(false);
}
});

document.addEventListener('keydown', function(event) {
if (event.key === 'Escape') {
setFilterMenuOpen(false);
filterButton.focus();
}
});

previousButton.addEventListener('click', function() {
if (currentPage > 1) {
currentPage -= 1;
renderPortfolio(true);
}
});

nextButton.addEventListener('click', function() {
var totalPages = Math.max(1, Math.ceil(getFilteredCards().length / cardsPerPage));
if (currentPage < totalPages) {
currentPage += 1;
renderPortfolio(true);
}
});

renderPortfolio(false);
});
</script>
@endpush
