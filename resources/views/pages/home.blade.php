@extends('layouts.app')

@section('title', 'Berkemah Team | Website UMKM & Bantuan Tugas Mahasiswa')

@push('styles')
<style>
.testimonial-slider {
    --testimonial-gap: 24px;
}
.testimonial-track {
    align-items: stretch;
    display: flex;
    gap: var(--testimonial-gap);
    will-change: transform;
}
.testimonial-slide {
    flex: 0 0 100%;
    min-height: 320px;
}
@media (min-width: 768px) {
    .testimonial-slide {
        flex-basis: calc((100% - var(--testimonial-gap)) / 2);
    }
}
@media (min-width: 1024px) {
    .testimonial-slide {
        flex-basis: calc((100% - (var(--testimonial-gap) * 2)) / 3);
    }
}
@media (prefers-reduced-motion: reduce) {
    .testimonial-track {
        transform: none !important;
    }
}
</style>
@endpush

@section('content')
<section class="pt-32 pb-20 hero-gradient" id="home">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="space-y-8">
<div class="flex flex-wrap gap-2">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">Website Usaha</span>
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">Bantu Jualan Online</span>
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">Bantuan Tugas Mahasiswa</span>
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">Harga Bersahabat</span>
</div>
<h1 class="font-headline-xl text-headline-xl lg:text-[48px] leading-tight text-on-background">
Bikin Bisnis atau Tugas Kamu Lebih <span class="text-primary">Rapi, Mudah Dilihat, dan Siap Dipakai</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
Kamu cukup cerita kebutuhanmu. Kami bantu ubah jadi website, halaman jualan, atau aplikasi sederhana yang mudah dipakai dan mudah dijelaskan.
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
<p class="text-[12px] text-on-surface-variant">Dibantu dari ide sampai siap dipakai</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="py-section-gap bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background mb-4">Punya Ide atau Masalah, Tapi Bingung Mulai dari Mana?</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Tenang, kami bantu dari obrolan awal sampai hasilnya siap digunakan.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">store</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Usaha Belum Punya Website</h3>
<p class="text-on-surface-variant font-body-md">Pelanggan sering tanya info yang sama? Website bisa jadi tempat semua informasi penting bisnismu.</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">view_kanban</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Catatan Masih Berantakan</h3>
<p class="text-on-surface-variant font-body-md">Pesanan, stok, atau data pelanggan masih tersebar di buku, chat, dan file yang berbeda-beda?</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">chat_bubble</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Istilah Teknologi Bikin Pusing</h3>
<p class="text-on-surface-variant font-body-md">Kami jelaskan pilihan solusi dengan bahasa sehari-hari, jadi kamu tetap paham arah pengerjaannya.</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">school</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Tugas Kuliah Mentok</h3>
<p class="text-on-surface-variant font-body-md">Ada tugas aplikasi atau website, tapi bingung mulai dari mana atau error terus?</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">bug_report</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Website Sering Bermasalah</h3>
<p class="text-on-surface-variant font-body-md">Website lambat, tampilannya rusak, atau tombolnya tidak jalan? Kami bantu cek dan rapikan.</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform">
<div class="bg-primary/10 w-12 h-12 flex items-center justify-center rounded-full text-primary mb-6">
<span class="material-symbols-outlined">payments</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-background">Budget Perlu Dijaga</h3>
<p class="text-on-surface-variant font-body-md">Kami bantu pilih versi paling penting dulu, jadi biaya tetap masuk akal.</p>
</div>
</div>
</div>
</section>

<section class="py-section-gap mt-6 md:mt-10">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background">Untuk Usaha dan Tugas Kuliah</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">Setiap kebutuhan punya cara bantu yang berbeda. Kami sesuaikan dengan tujuanmu.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<div class="bg-primary-container p-12 rounded-lg text-on-primary-container flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-[48px] mb-6">corporate_fare</span>
<h3 class="font-headline-xl text-headline-xl mb-6">Untuk UMKM &amp; Bisnis</h3>
<p class="font-body-lg text-body-lg mb-8 opacity-90">Bantu usaha terlihat lebih terpercaya dan lebih mudah dihubungi pelanggan.</p>
<ul class="space-y-4 mb-10">
<li class="flex items-center gap-3"><span class="material-symbols-outlined">check_circle</span> Website profil usaha</li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined">check_circle</span> Katalog, stok, dan pesanan lebih rapi</li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined">check_circle</span> Perawatan website setelah jadi</li>
</ul>
</div>
<a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20website" class="bg-white text-primary px-8 py-4 rounded-full font-bold w-fit hover:bg-surface-container-low transition-colors inline-flex items-center justify-center">Tanya Website</a>
</div>
<div class="relative overflow-hidden rounded-lg border border-primary/15 bg-[linear-gradient(135deg,#ffffff_0%,#eef4ff_54%,#dfeaff_100%)] p-8 text-on-secondary-container shadow-[0px_10px_32px_rgba(0,102,255,0.08)] flex flex-col justify-between md:p-12">
<div class="absolute -right-14 -top-14 h-40 w-40 rounded-full bg-primary/10"></div>
<div class="absolute -bottom-16 left-10 h-36 w-36 rounded-full bg-tertiary/10"></div>
<div>
<div class="mb-7 flex h-16 w-16 items-center justify-center rounded-lg bg-white text-primary shadow-[0px_8px_24px_rgba(0,102,255,0.12)]">
<span class="material-symbols-outlined text-[36px]">history_edu</span>
</div>
<h3 class="font-headline-xl text-headline-xl mb-5 text-primary">Untuk Mahasiswa</h3>
<p class="font-body-lg text-body-lg mb-8 max-w-lg text-on-surface-variant">Bantuan tugas aplikasi, website, atau laporan agar kamu lebih paham saat presentasi.</p>
<ul class="space-y-4 mb-10 text-on-surface-variant">
<li class="flex items-center gap-3"><span class="material-symbols-outlined flex h-7 w-7 items-center justify-center rounded-full bg-white text-[18px] text-primary shadow-sm">check</span> Bantu susun alur tugas</li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined flex h-7 w-7 items-center justify-center rounded-full bg-white text-[18px] text-primary shadow-sm">check</span> Rapikan tampilan dan data</li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined flex h-7 w-7 items-center justify-center rounded-full bg-white text-[18px] text-primary shadow-sm">check</span> Perbaiki error sampai bisa demo</li>
</ul>
</div>
<a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20bantuan%20tugas%20mahasiswa" class="relative z-10 bg-primary text-white px-8 py-4 rounded-full font-bold w-fit shadow-lg shadow-primary/20 hover:-translate-y-0.5 hover:bg-primary-container transition-all inline-flex items-center justify-center gap-2">Tanya Tugas <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
</div>
</div>
</section>

<section class="py-section-gap bg-surface-container-lowest" id="services">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background">Hal yang Bisa Kami Bantu</h2>
</div>
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-gutter">
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">public</span>
</div>
<p class="font-label-md text-label-md font-bold">Buat Website</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">rocket_launch</span>
</div>
<p class="font-label-md text-label-md font-bold">Mudah Dicari Google</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">storefront</span>
</div>
<p class="font-label-md text-label-md font-bold">Iklan Online</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">dashboard_customize</span>
</div>
<p class="font-label-md text-label-md font-bold">Aplikasi Sesuai Kebutuhan</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">cast_for_education</span>
</div>
<p class="font-label-md text-label-md font-bold">Bimbingan Tugas</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">pest_control</span>
</div>
<p class="font-label-md text-label-md font-bold">Perbaiki Error</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">database</span>
</div>
<p class="font-label-md text-label-md font-bold">Rapikan Data</p>
</div>
<div class="p-6 text-center group">
<div class="w-16 h-16 bg-surface-container mx-auto rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-all duration-300">
<span class="material-symbols-outlined text-[32px]">verified_user</span>
</div>
<p class="font-label-md text-label-md font-bold">Cek Keamanan</p>
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
<p class="text-on-surface-variant text-[14px]">Kami jelaskan dengan bahasa sehari-hari, tanpa istilah yang bikin tambah bingung.</p>
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
<h4 class="font-label-md text-label-md font-bold mb-1">Waktu Pengerjaan Jelas</h4>
<p class="text-on-surface-variant text-[14px]">Dari awal kamu tahu perkiraan selesai, apa saja yang dibuat, dan progresnya sampai mana.</p>
</div>
</div>
<div class="flex items-start gap-4 p-6">
<div class="bg-primary text-white p-3 rounded-lg"><span class="material-symbols-outlined">support_agent</span></div>
<div>
<h4 class="font-label-md text-label-md font-bold mb-1">Dibantu Setelah Jadi</h4>
<p class="text-on-surface-variant text-[14px]">Setelah selesai, kamu tetap bisa tanya kalau ada bagian yang belum jelas atau perlu dicek.</p>
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
<h4 class="font-label-md text-label-md font-bold mb-1">Dibuat Sesuai Kebutuhan</h4>
<p class="text-on-surface-variant text-[14px]">Kami pilih cara paling pas untuk kebutuhanmu, tanpa fitur berlebihan yang malah bikin mahal.</p>
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
<h5 class="font-bold text-label-md mb-2">Rencana Tampilan</h5>
<p class="text-[13px] text-on-surface-variant">Kami susun halaman dan alurnya agar mudah dipakai.</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-primary/20 text-primary rounded-full flex items-center justify-center font-bold mx-auto mb-4">4</div>
<h5 class="font-bold text-label-md mb-2">Pengerjaan</h5>
<p class="text-[13px] text-on-surface-variant">Kami mulai membuat website atau aplikasinya.</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-primary/20 text-primary rounded-full flex items-center justify-center font-bold mx-auto mb-4">5</div>
<h5 class="font-bold text-label-md mb-2">Review</h5>
<p class="text-[13px] text-on-surface-variant">Cek hasil sementara &amp; revisi jika perlu.</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-primary/20 text-primary rounded-full flex items-center justify-center font-bold mx-auto mb-4">6</div>
<h5 class="font-bold text-label-md mb-2">Serah Terima</h5>
<p class="text-[13px] text-on-surface-variant">Hasilnya siap dipakai dan kamu tahu cara menggunakannya.</p>
</div>
</div>
</div>
</section>

<section class="py-section-gap" id="pricing">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-headline-lg text-headline-lg text-center mb-16">Paket Harga Fleksibel</h2>
<div class="grid grid-cols-1 items-stretch md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<div class="bg-white p-8 rounded-lg border border-outline-variant hover:border-primary transition-colors flex h-full flex-col justify-between md:min-h-[560px]">
<div>
<h4 class="font-headline-md text-headline-md mb-1">Starter UMKM</h4>
<p class="text-body-md font-bold text-on-surface-variant">Website Sederhana</p>
<p class="text-primary font-bold text-headline-md mt-4">Mulai Rp1 Juta</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Cocok untuk usaha yang baru mulai dan ingin terlihat lebih profesional di internet.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Hingga 5 halaman website</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Domain &amp; hosting aktif 1 tahun</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Nyaman dibuka dari HP maupun laptop</li>
</ul>
</div>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20ambil%20paket%20Starter%20UMKM" class="w-full border border-primary text-primary py-3 rounded-lg font-bold hover:bg-primary-fixed transition-colors inline-flex items-center justify-center">Ambil Paket ini</a>
</div>
<div class="bg-primary text-white p-8 rounded-lg shadow-xl relative flex h-full flex-col justify-between md:min-h-[560px]">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-tertiary text-white px-4 py-1 rounded-full text-[12px] font-bold">PALING POPULER</div>
<div>
<h4 class="font-headline-md text-headline-md mb-1">Usaha Lebih Rapi</h4>
<p class="text-body-md font-bold text-white/80">Website + Kelola Usaha</p>
<p class="font-bold text-headline-md mt-4">Mulai Rp3 Juta</p>
<p class="opacity-80 text-[14px] mt-4 mb-6">Cocok untuk usaha yang mulai berkembang dan ingin lebih mudah mengelola pelanggan serta pesanan.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px]">check</span> Mudah mengubah isi website sendiri</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px]">check</span> Tombol WhatsApp agar pelanggan mudah menghubungi</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px]">check</span> Melihat ringkasan penjualan dengan mudah</li>
</ul>
</div>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20ambil%20paket%20Usaha%20Lebih%20Rapi" class="w-full bg-white text-primary py-3 rounded-lg font-bold hover:bg-surface-container-low transition-colors inline-flex items-center justify-center">Ambil Paket ini</a>
</div>
<div class="bg-white p-8 rounded-lg border border-outline-variant hover:border-primary transition-colors flex h-full flex-col justify-between md:min-h-[560px]">
<div>
<h4 class="font-headline-md text-headline-md mb-1">Tugas Mahasiswa</h4>
<p class="text-body-md font-bold text-on-surface-variant">Bantuan Tugas &amp; Skripsi</p>
<p class="text-primary font-bold text-headline-md mt-4">Mulai Rp300 Ribu</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Pendampingan untuk menyelesaikan bagian yang membuatmu kesulitan.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Membantu memperbaiki program yang bermasalah</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Membantu membuat bagian tertentu sesuai kebutuhan</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Penjelasan yang mudah dipahami</li>
</ul>
</div>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20ambil%20paket%20Tugas%20Mahasiswa" class="w-full border border-primary text-primary py-3 rounded-lg font-bold hover:bg-primary-fixed transition-colors inline-flex items-center justify-center">Ambil Paket ini</a>
</div>
<div class="bg-white p-8 rounded-lg border border-outline-variant hover:border-primary transition-colors flex h-full flex-col justify-between md:min-h-[560px]">
<div>
<h4 class="font-headline-md text-headline-md mb-1">Kebutuhan Khusus</h4>
<p class="text-body-md font-bold text-on-surface-variant">Proyek Sesuai Permintaan</p>
<p class="text-primary font-bold text-headline-md mt-4">Hubungi Kami</p>
<p class="text-on-surface-variant text-[14px] mt-4 mb-6">Punya kebutuhan yang berbeda? Kami akan menyesuaikan solusi sesuai yang kamu inginkan.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Dibuat sesuai kebutuhanmu</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Bisa disesuaikan dengan sistem yang sudah ada</li>
<li class="flex items-center gap-2 text-[14px]"><span class="material-symbols-outlined text-[18px] text-tertiary">check</span> Pendampingan lebih intensif</li>
</ul>
</div>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20konsultasi%20untuk%20proyek%20sesuai%20permintaan" class="w-full border border-primary text-primary py-3 rounded-lg font-bold hover:bg-primary-fixed transition-colors inline-flex items-center justify-center">Konsultasi Sekarang</a>
</div>
</div>
</div>
</section>

<section class="py-section-gap bg-surface-container-lowest" id="testimonials">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-background mb-4">Apa Kata Mereka?</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Cerita singkat dari klien yang pernah kami bantu.</p>
</div>
<div class="testimonial-slider overflow-hidden" data-testimonial-slider>
<div class="testimonial-track" data-testimonial-track>
<article class="testimonial-slide bg-white p-8 rounded-lg border border-outline-variant/30 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="text-primary mb-4">
<span class="material-symbols-outlined text-[32px]">format_quote</span>
</div>
<p class="font-body-md text-on-surface-variant mb-6 flex-grow italic">"Awalnya cuma mau bikin website sederhana, tapi akhirnya dibantu juga susun isi dan alur kontak ke pelanggan."</p>
<div class="border-t border-outline-variant/30 pt-4">
<p class="font-bold text-label-md text-on-background">Owner UMKM</p>
<p class="text-[12px] text-primary">Klien Bisnis</p>
</div>
</article>
<article class="testimonial-slide bg-white p-8 rounded-lg border border-outline-variant/30 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="text-primary mb-4">
<span class="material-symbols-outlined text-[32px]">format_quote</span>
</div>
<p class="font-body-md text-on-surface-variant mb-6 flex-grow italic">"Tugas kuliah saya awalnya error terus, akhirnya dibantu rapihin sampai bisa demo."</p>
<div class="border-t border-outline-variant/30 pt-4">
<p class="font-bold text-label-md text-on-background">Mahasiswa</p>
<p class="text-[12px] text-primary">Klien Akademik</p>
</div>
</article>
<article class="testimonial-slide bg-white p-8 rounded-lg border border-outline-variant/30 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="text-primary mb-4">
<span class="material-symbols-outlined text-[32px]">format_quote</span>
</div>
<p class="font-body-md text-on-surface-variant mb-6 flex-grow italic">"Penjelasannya mudah dipahami, jadi saya ngerti harus mulai dari mana."</p>
<div class="border-t border-outline-variant/30 pt-4">
<p class="font-bold text-label-md text-on-background">Pemilik Bisnis Jasa</p>
<p class="text-[12px] text-primary">Klien Bisnis</p>
</div>
</article>
<article class="testimonial-slide bg-white p-8 rounded-lg border border-outline-variant/30 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="text-primary mb-4">
<span class="material-symbols-outlined text-[32px]">format_quote</span>
</div>
<p class="font-body-md text-on-surface-variant mb-6 flex-grow italic">"Data dan laporan tugas saya jadi lebih rapi dan enak dipresentasikan."</p>
<div class="border-t border-outline-variant/30 pt-4">
<p class="font-bold text-label-md text-on-background">Mahasiswa Semester Akhir</p>
<p class="text-[12px] text-primary">Klien Akademik</p>
</div>
</article>
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
<p class="mt-4 text-on-surface-variant text-[14px]">Bisa banget. Kamu tinggal klik tombol WhatsApp, lalu ceritakan kebutuhanmu. Kami bantu arahkan tanpa biaya konsultasi awal.</p>
</details>
<details class="group bg-surface-container rounded-lg p-4 border border-outline-variant/30">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-body-md">
Berapa lama waktu pengerjaan websitenya?
<span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-[14px]">Untuk website sederhana biasanya 5-7 hari kerja. Kalau fiturnya lebih banyak, kami jelaskan dulu perkiraan waktunya sebelum mulai.</p>
</details>
<details class="group bg-surface-container rounded-lg p-4 border border-outline-variant/30">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-body-md">
Apa tugas mahasiswa bisa dibantu sampai selesai?
<span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-[14px]">Bisa. Kami bantu sesuai kebutuhan, lalu jelaskan alurnya supaya kamu tetap paham saat presentasi atau ditanya dosen.</p>
</details>
</div>
</div>
</section>

<section class="py-section-gap bg-primary text-white overflow-hidden relative">
<div class="max-w-4xl mx-auto px-margin-mobile md:px-margin-desktop text-center relative z-10">
<h2 class="font-headline-xl text-headline-xl mb-6">Yuk, Ceritakan Kebutuhanmu Sekarang</h2>
<p class="font-body-lg text-body-lg mb-10 opacity-90">Mau bikin website, merapikan usaha, atau menyelesaikan tugas? Ceritakan dulu, nanti kami bantu pilih langkah paling pas.</p>
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

document.addEventListener('DOMContentLoaded', function() {
    var slider = document.querySelector('[data-testimonial-slider]');
    if (!slider) {
        return;
    }

    var track = slider.querySelector('[data-testimonial-track]');
    var originalSlides = Array.prototype.slice.call(track.children);
    var reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    var animationFrame = null;
    var lastTimestamp = null;
    var loopWidth = 0;
    var position = 0;
    var speed = 36;

    originalSlides.forEach(function(slide) {
        var clone = slide.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        track.appendChild(clone);
    });

    function setPosition(value) {
        position = value;
        track.style.transform = 'translate3d(-' + position + 'px, 0, 0)';
    }

    function measureLoop() {
        var firstClone = track.children[originalSlides.length];
        loopWidth = firstClone ? firstClone.offsetLeft : track.scrollWidth / 2;

        if (position >= loopWidth) {
            setPosition(position % loopWidth);
        }
    }

    function stopMarquee() {
        if (animationFrame) {
            window.cancelAnimationFrame(animationFrame);
            animationFrame = null;
        }
        lastTimestamp = null;
    }

    function animate(timestamp) {
        if (!lastTimestamp) {
            lastTimestamp = timestamp;
        }

        var elapsed = timestamp - lastTimestamp;
        lastTimestamp = timestamp;
        position += (speed * elapsed) / 1000;

        if (loopWidth > 0 && position >= loopWidth) {
            position -= loopWidth;
        }

        setPosition(position);
        animationFrame = window.requestAnimationFrame(animate);
    }

    function startMarquee() {
        stopMarquee();
        measureLoop();

        if (reducedMotionQuery.matches || loopWidth <= 0) {
            setPosition(0);
            return;
        }

        animationFrame = window.requestAnimationFrame(animate);
    }

    startMarquee();

    window.addEventListener('resize', function() {
        measureLoop();
    });

    if (reducedMotionQuery.addEventListener) {
        reducedMotionQuery.addEventListener('change', startMarquee);
    }
});
</script>
@endpush
