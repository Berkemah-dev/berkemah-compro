@extends('layouts.app')

@section('title', 'Layanan Kami - Berkemah Team')

@section('content')
<section class="relative pt-32 pb-16 px-margin-mobile md:px-margin-desktop overflow-hidden">
<div class="max-w-container-max mx-auto text-center">
<span class="inline-block px-4 py-1.5 bg-secondary-container text-primary font-label-sm text-label-sm rounded-full mb-6 uppercase tracking-wider">Website Usaha, Jualan Online, dan Bantuan Tugas</span>
<h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface mb-6">Bikin Bisnis atau Tugas Kamu Lebih Rapi, Mudah Dilihat, dan Siap Dipakai</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
Kamu cukup cerita kebutuhanmu. Kami bantu ubah jadi website, halaman jualan, atau aplikasi sederhana yang mudah dipakai dan mudah dijelaskan.
</p>
</div>
</section>

<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">terminal</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Buat Website</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Pelanggan sering tanya info yang sama? Kami buatkan website untuk menaruh profil usaha, katalog, kontak, dan informasi penting lainnya.</p>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20tanya%20layanan%20Buat%20Website" class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Tanya Layanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">query_stats</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Mudah Dicari Google</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Kami bantu susun isi website agar mudah dibaca pelanggan dan punya peluang lebih baik ditemukan saat dicari di Google.</p>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20tanya%20layanan%20Mudah%20Dicari%20Google" class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Tanya Layanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">campaign</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Iklan Online</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Bantu siapkan iklan online agar produk atau layananmu bisa menjangkau calon pelanggan yang lebih tepat.</p>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20tanya%20layanan%20Iklan%20Online" class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Tanya Layanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">data_object</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Aplikasi Sesuai Kebutuhan</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Kalau catatan, pesanan, atau stok masih tersebar, kami bantu buat alur sederhana supaya pekerjaan harian lebih rapi.</p>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20tanya%20layanan%20Aplikasi%20Sesuai%20Kebutuhan" class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Tanya Layanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">school</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Bimbingan Tugas</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Ada tugas aplikasi, website, atau laporan yang bikin mentok? Kami bantu susun alur, rapikan bagian penting, dan jelaskan sampai paham.</p>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20tanya%20layanan%20Bimbingan%20Tugas" class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Tanya Layanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">bug_report</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Perbaiki Error</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Website atau aplikasi lambat, tampilannya rusak, atau tombolnya tidak jalan? Kami bantu cek masalahnya dan rapikan kembali.</p>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20tanya%20layanan%20Perbaiki%20Error" class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Tanya Layanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">database</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Rapikan Data</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Bantu rapikan data produk, pelanggan, pesanan, atau tugas supaya lebih mudah dicari, dibaca, dan dikelola.</p>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20tanya%20layanan%20Rapikan%20Data" class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Tanya Layanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">admin_panel_settings</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Cek Keamanan</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Kami bantu cek bagian penting agar website atau aplikasi lebih nyaman dipakai dan tidak mudah disalahgunakan.</p>
<a href="https://wa.me/62881023806530?text=Halo%20Berkemah%20Team%2C%20saya%20mau%20tanya%20layanan%20Cek%20Keamanan" class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Tanya Layanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
</div>
</div>
</section>

<section class="bg-primary-container py-section-gap px-margin-mobile md:px-margin-desktop text-on-primary">
<div class="max-w-container-max mx-auto flex flex-col lg:flex-row items-center gap-stack-lg">
<div class="lg:w-1/2">
<h2 class="font-headline-lg text-headline-lg mb-6">Kenapa Harus Pilih Berkemah Team?</h2>
<div class="space-y-6">
<div class="flex gap-4">
<span class="material-symbols-outlined text-tertiary-fixed text-3xl">verified</span>
<div>
<p class="font-bold text-lg">Bahasa Tidak Ribet</p>
<p class="opacity-80">Kami jelaskan dengan bahasa sehari-hari, tanpa istilah yang bikin tambah bingung.</p>
</div>
</div>
<div class="flex gap-4">
<span class="material-symbols-outlined text-tertiary-fixed text-3xl">rocket_launch</span>
<div>
<p class="font-bold text-lg">Waktu Pengerjaan Jelas</p>
<p class="opacity-80">Dari awal kamu tahu perkiraan selesai, apa saja yang dibuat, dan progresnya sampai mana.</p>
</div>
</div>
<div class="flex gap-4">
<span class="material-symbols-outlined text-tertiary-fixed text-3xl">support_agent</span>
<div>
<p class="font-bold text-lg">Dibantu Setelah Jadi</p>
<p class="opacity-80">Setelah selesai, kamu tetap bisa tanya kalau ada bagian yang belum jelas atau perlu dicek.</p>
</div>
</div>
</div>
</div>
<div class="lg:w-1/2 mt-12 lg:mt-0">
<div class="relative rounded-lg overflow-hidden shadow-2xl">
<img class="w-full h-[400px] object-cover" data-alt="Modern IT workspace with developer working on multiple monitors" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1KpU0nkhGbbW13KylF1oDFpBw2jTE15uKz7CSYwrSoBYN5zxwlW--NmF80Ja2rRI9tIHSBrmQpbFWxKuTFXn_nN-I-WZx7dPZ8vWD3ecmZqqw3RRNAJEVM7A_BoyMlzDFGn3_wYElhYEvDcb9RtOlVpVGqB8tYbhb1727fYSotD-xg3wWFaDP8kDBnm32mH6QwCw8-rNeNzjE3BGU36T3iv6xrxKtppSyoNkcN90Mi9vmRB6Wd6a3"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
</div>
</div>
</div>
</section>
@endsection

@push('styles')
<style>
.service-card:hover .service-icon {
transform: scale(1.1) rotate(5deg);
}
</style>
@endpush

@push('scripts')
<script>
window.addEventListener('scroll', function() {
var nav = document.querySelector('nav');
if (!nav) {
return;
}
if (window.scrollY > 20) {
nav.classList.add('shadow-md');
} else {
nav.classList.remove('shadow-md');
}
});
var cards = document.querySelectorAll('.service-card');
cards.forEach(function(card) {
card.addEventListener('mouseenter', function() {
card.style.transform = 'translateY(-4px)';
});
card.addEventListener('mouseleave', function() {
card.style.transform = 'translateY(0)';
});
});
</script>
@endpush
