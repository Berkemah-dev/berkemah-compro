@extends('layouts.app')

@section('title', 'Solusi Digitalisasi UMKM - Berkemah Team')

@section('content')
<main class="pt-20">
<section class="relative px-margin-mobile md:px-margin-desktop py-section-gap overflow-hidden">
<div class="relative z-10 max-w-container-max mx-auto grid md:grid-cols-2 gap-stack-lg items-center">
<div class="space-y-stack-lg">
<div class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-container text-on-secondary-container rounded-full font-label-md text-label-md">
<span class="material-symbols-outlined text-[18px]">verified</span>
Solusi Digital Terpercaya untuk UMKM
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface leading-tight">
Bawa Bisnis Lokal Anda Ke <span class="text-primary">Level Dunia</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-[500px]">
Kami membantu pemilik UMKM mendigitalkan operasional, meningkatkan profesionalisme, dan menjangkau lebih banyak pelanggan dengan teknologi yang mudah digunakan.
</p>
<div class="flex flex-wrap gap-stack-md">
<button class="bg-primary text-on-primary px-8 py-4 rounded-xl font-bold flex items-center gap-2 shadow-lg hover:shadow-primary/20 transition-all active:scale-95">
<span class="material-symbols-outlined">chat</span>
Mulai Chat WhatsApp
</button>
<button class="bg-secondary-container text-primary px-8 py-4 rounded-xl font-bold hover:bg-primary-fixed-dim transition-all">
Lihat Paket Harga
</button>
</div>
</div>
<div class="relative">
<div class="rounded-lg overflow-hidden shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
<img class="w-full aspect-square object-cover" data-alt="Small business owner showing products on tablet" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBs7W4x075hTHYHUwe916IXbJt6mzpssQ0sot3QHKsoWJIFnmNfTA1h7utPJz9shkln2INapiupkCVL3ATaodfPfG9ij7H0oRcCFCDQvXUV3cgc_uVQxOfLoFe9SDZBVFRI9-LqyO5OwQRsD84e8Uh4QOV58RSaoMWmiwaceeeobLnstXQIDmPI_ClD9FhIVcJTsJoQwN9k5734a6sK497dFh3cDUgMReelu97-oOZuOagjML-J4XKh"/>
</div>
<div class="absolute -bottom-8 -left-8 glass-card p-6 rounded-lg shadow-xl max-w-[240px] animate-bounce">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center">
<span class="material-symbols-outlined">trending_up</span>
</div>
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant">Penjualan Naik</p>
<p class="font-headline-md text-headline-md text-tertiary">+45%</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="px-margin-mobile md:px-margin-desktop py-section-gap bg-surface-container-low">
<div class="max-w-container-max mx-auto">
<div class="text-center mb-section-gap">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Mengapa UMKM Butuh Digitalisasi?</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-stack-sm">Transformasi sederhana dengan dampak yang luar biasa.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] md:col-span-2 flex flex-col md:flex-row gap-stack-lg items-center">
<div class="space-y-stack-md flex-1">
<div class="w-14 h-14 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined" style="font-size: 32px;">verified_user</span>
</div>
<h3 class="font-headline-md text-headline-md">Profesionalisme Instan</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Tingkatkan kepercayaan pelanggan dengan profil bisnis digital, email profesional, dan katalog online yang tertata rapi. Bisnis kecil Anda akan terlihat seperti perusahaan besar.</p>
</div>
<div class="flex-1 w-full h-48 rounded-xl overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Smartphone showing business landing page" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcnq2DUk2y6qyGd6tXooIJh9rsyCfPGle4I7wtC8FjGbz_9UlXVUMTTOFzMcIURmPgSYIkCdZeyi4iNCX7KTS4FSfxCeIQHU2uQqGKpEGsenEr1yWU781_fCC4Nlhped7OwV5HHtlI8lEmVVkCvXV-_1DbE-XRwRlktmZAcSQrlqTCSmuoYTN9yKlWBi-LMSGPH5VSKxPUJb6W0B4rOagHKt0AHgb4TbgWC8I2EwkqAXiXTV450pza"/>
</div>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
<div class="space-y-stack-md">
<div class="w-14 h-14 rounded-xl bg-tertiary-fixed-dim flex items-center justify-center">
<span class="material-symbols-outlined" style="font-size: 32px;">shopping_cart_checkout</span>
</div>
<h3 class="font-headline-md text-headline-md">Order Lebih Mudah</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Hindari salah catat pesanan. Sistem kami memungkinkan pelanggan memesan langsung lewat link khusus yang terintegrasi ke WhatsApp Anda.</p>
</div>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
<div class="space-y-stack-md">
<div class="w-14 h-14 rounded-xl bg-secondary-fixed-dim flex items-center justify-center">
<span class="material-symbols-outlined" style="font-size: 32px;">analytics</span>
</div>
<h3 class="font-headline-md text-headline-md">Data Terorganisir</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Pantau siapa pelanggan setia Anda dan produk apa yang paling laku setiap harinya melalui dashboard sederhana.</p>
</div>
</div>
<div class="bg-primary p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] md:col-span-2 text-on-primary flex flex-col md:flex-row gap-stack-lg items-center">
<div class="space-y-stack-md flex-1">
<h3 class="font-headline-md text-headline-md">Dukungan Mentoring 24/7</h3>
<p class="font-body-md text-body-md opacity-90">Kami bukan hanya sekedar penyedia jasa. Kami adalah partner Anda. Tim kami siap membantu kapan saja Anda mengalami kendala teknis dalam mengelola sistem digital Anda.</p>
<button class="bg-white text-primary px-6 py-3 rounded-full font-bold active:scale-95 transition-transform">Pelajari Mentoring</button>
</div>
<div class="flex-1">
<div class="grid grid-cols-2 gap-4">
<div class="h-24 bg-white/10 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-4xl">support_agent</span>
</div>
<div class="h-24 bg-white/10 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-4xl">lightbulb</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="px-margin-mobile md:px-margin-desktop py-section-gap">
<div class="max-w-container-max mx-auto">
<div class="text-center mb-section-gap">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Paket Digitalisasi UMKM</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-stack-sm">Pilih yang paling sesuai dengan skala bisnis Anda saat ini.</p>
</div>
<div class="grid md:grid-cols-3 gap-gutter max-w-5xl mx-auto">
<div class="bg-white border border-outline-variant p-10 rounded-lg hover:shadow-xl transition-all flex flex-col h-full">
<div class="mb-stack-lg">
<span class="px-4 py-1 bg-surface-container text-on-surface-variant rounded-full font-label-sm text-label-sm">UMKM STARTER</span>
<h3 class="font-headline-xl text-headline-xl mt-stack-md">Rp 300rb<span class="text-body-md font-normal text-on-surface-variant">/sekali bayar</span></h3>
</div>
<ul class="space-y-4 mb-stack-lg flex-grow">
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Digital Business Card (Linktree-style)</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Katalog Produk WhatsApp (Max 10)</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Optimasi Google Maps (GMB)</span></li>
<li class="flex items-center gap-3 text-on-surface-variant"><span class="material-symbols-outlined opacity-30">cancel</span> <span class="line-through">Website Domain .com / .id</span></li>
</ul>
<button class="w-full py-4 border-2 border-primary text-primary rounded-xl font-bold hover:bg-primary-fixed transition-colors">Ambil Paket 300K</button>
</div>
<div class="relative bg-white border-2 border-primary p-10 rounded-lg shadow-2xl flex flex-col h-full">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-white px-6 py-1 rounded-full text-label-sm font-bold">TERLARIS</div>
<div class="mb-stack-lg">
<span class="px-4 py-1 bg-primary-fixed text-primary rounded-full font-label-sm text-label-sm">UMKM BUSINESS</span>
<h3 class="font-headline-xl text-headline-xl mt-stack-md">Rp 750rb - 1jt<span class="text-body-md font-normal text-on-surface-variant">/sekali bayar</span></h3>
</div>
<ul class="space-y-4 mb-stack-lg flex-grow">
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface font-bold">Landing Page Khusus (.com/.id)</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Sistem Pemesanan Otomatis</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Dashboard Laporan Penjualan</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Mentoring Iklan Media Sosial</span></li>
</ul>
<button class="w-full py-4 bg-primary text-on-primary rounded-xl font-bold shadow-lg shadow-primary/20 active:scale-95 transition-transform">Ambil Paket 750K+</button>
</div>
<div class="bg-white border border-outline-variant p-10 rounded-lg hover:shadow-xl transition-all flex flex-col h-full">
<div class="mb-stack-lg">
<span class="px-4 py-1 bg-surface-container text-on-surface-variant rounded-full font-label-sm text-label-sm">CUSTOM</span>
<h3 class="font-headline-xl text-headline-xl mt-stack-md">Custom<span class="text-body-md font-normal text-on-surface-variant">/sesuai scope</span></h3>
</div>
<ul class="space-y-4 mb-stack-lg flex-grow">
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Kebutuhan fitur khusus sesuai bisnis</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Desain &amp; flow yang disesuaikan</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Integrasi tambahan bila diperlukan</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-tertiary">check_circle</span> <span class="text-on-surface">Estimasi setelah konsultasi</span></li>
</ul>
<button class="w-full py-4 border-2 border-primary text-primary rounded-xl font-bold hover:bg-primary-fixed transition-colors">Konsultasi Custom</button>
</div>
</div>
</div>
</section>

<section class="px-margin-mobile md:px-margin-desktop py-section-gap bg-secondary-container/30">
<div class="max-w-container-max mx-auto">
<div class="flex flex-col md:flex-row gap-section-gap items-center">
<div class="flex-1 grid grid-cols-2 gap-4">
<div class="space-y-4">
<div class="rounded-lg overflow-hidden h-64">
<img class="w-full h-full object-cover" data-alt="Shop owner with tablet and digital dashboard" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOymERK-zTwfeyj2OeIc0xlMH2muPqPMdF_kNgoag74DXGE5cAFJIowt1aqheNNPgeYzNzFxki4rPCHWQCD7eKOxo7XGXAZHlfRb79dQMsCNRibLyT9pj8EY1SZPnsXVplotoptbpYcTtl4TiLAmJ87t2GjzvOZmOzc9ZlvWp2nDd4tl_v8cXs9mRezjoRtIDy6GRxXUrGizFE6BPAKkqsWbTmUJ-Rz-bkIGjY0ZVCBo3xbrzPB4t_"/>
</div>
<div class="bg-white p-6 rounded-lg shadow-sm">
<p class="font-headline-md text-headline-md text-primary">150+</p>
<p class="font-label-md text-label-md text-on-surface-variant">UMKM Terbantu</p>
</div>
</div>
<div class="space-y-4 pt-8">
<div class="bg-primary p-6 rounded-lg shadow-sm text-on-primary">
<span class="material-symbols-outlined text-4xl">speed</span>
<p class="font-label-md text-label-md mt-2">Proses Cepat 3-7 Hari</p>
</div>
<div class="rounded-lg overflow-hidden h-64">
<img class="w-full h-full object-cover" data-alt="Handshake in modern office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0qYppPhGILbTkwt0keqk-wCMip3lED3DLziNgeEGo_pZUd9VrAxp5M7y8bHgQ6nMF2aoGk4dMAuQBFu5WN3QbIfjVJPPJljGS-NLsOXUP0JrOi7Ua9Tc_gNENyEanw8oQeDs9lcci9GIMuq5GK8nluYH-B7xEINsa9Tx-SPcgQ7iu-4N3_VreCkLkvZtSoQ-Rgjg0X6MvigXrJX1_ML1E2esy_XQ8j_LOPx-OzC2elsBSePIqjbjn"/>
</div>
</div>
</div>
<div class="flex-1 space-y-stack-lg">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Cara Kami Bekerja Untuk Anda</h2>
<div class="space-y-8">
<div class="flex gap-stack-md">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-white border-2 border-primary flex items-center justify-center font-bold text-primary">1</div>
<div>
<h4 class="font-headline-md text-headline-md text-on-surface">Konsultasi Bisnis</h4>
<p class="text-on-surface-variant">Kami mengobrol santai untuk memahami tantangan unik bisnis Anda.</p>
</div>
</div>
<div class="flex gap-stack-md">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-white border-2 border-primary flex items-center justify-center font-bold text-primary">2</div>
<div>
<h4 class="font-headline-md text-headline-md text-on-surface">Pembuatan Sistem</h4>
<p class="text-on-surface-variant">Tim Berkemah Team membangun tools digital yang mudah Anda gunakan sehari-hari.</p>
</div>
</div>
<div class="flex gap-stack-md">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-white border-2 border-primary flex items-center justify-center font-bold text-primary">3</div>
<div>
<h4 class="font-headline-md text-headline-md text-on-surface">Training &amp; Serah Terima</h4>
<p class="text-on-surface-variant">Kami ajarkan cara pakainya sampai Anda mahir dan siap berjualan secara digital.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="px-margin-mobile md:px-margin-desktop py-section-gap">
<div class="max-w-container-max mx-auto bg-primary rounded-lg p-12 text-center text-on-primary relative overflow-hidden">
<div class="absolute top-0 right-0 p-8 opacity-10">
<span class="material-symbols-outlined text-[200px]" style="font-variation-settings: 'FILL' 1;">storefront</span>
</div>
<div class="relative z-10 space-y-stack-lg">
<h2 class="font-headline-xl text-headline-xl">Siap Digitalkan Bisnis Anda?</h2>
<p class="font-body-lg text-body-lg opacity-90 max-w-2xl mx-auto">Jangan biarkan kompetitor mendahului Anda. Konsultasikan kebutuhan digital UMKM Anda secara gratis hari ini.</p>
<div class="flex flex-col sm:flex-row justify-center gap-stack-md pt-4">
<a class="bg-[#25D366] text-white px-10 py-5 rounded-xl font-bold flex items-center justify-center gap-3 hover:bg-[#20ba59] transition-colors shadow-xl" href="https://wa.me/yourlink">
<svg class="w-6 h-6 fill-current" viewbox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.888 11.888-11.888 3.176 0 6.161 1.237 8.404 3.48s3.481 5.229 3.481 8.404c0 6.556-5.332 11.888-11.888 11.888-2.013 0-3.988-.512-5.735-1.483l-6.249 1.694zm6.303-4.755l.36.214c1.45.86 3.12 1.314 4.827 1.314 5.148 0 9.337-4.189 9.337-9.337 0-2.492-.97-4.834-2.731-6.595s-4.102-2.731-6.595-2.731c-5.148 0-9.337 4.189-9.337 9.337 0 1.83.533 3.614 1.542 5.176l.235.361-1.011 3.691 3.784-1.025zm11.332-6.541c-.266-.134-1.574-.776-1.819-.865-.244-.09-.422-.134-.599.134-.177.267-.688.865-.843 1.043-.155.178-.311.2-.577.067-.266-.134-1.126-.415-2.144-1.325-.792-.706-1.327-1.578-1.482-1.846-.155-.267-.017-.411.117-.544.12-.12.266-.311.399-.467.133-.156.177-.267.266-.445.089-.178.045-.334-.022-.467-.067-.133-.599-1.445-.821-1.98-.216-.519-.434-.448-.599-.456-.155-.008-.333-.01-.511-.01-.177 0-.466.067-.71.334-.244.267-.932.912-.932 2.224s.954 2.581 1.087 2.759c.133.178 1.878 2.868 4.549 4.021.635.275 1.131.439 1.517.562.639.202 1.22.174 1.679.106.512-.075 1.574-.643 1.796-1.265.222-.622.222-1.157.155-1.267-.067-.111-.244-.178-.511-.311z"></path></svg>
Hubungi via WhatsApp
</a>
<button class="bg-white/10 backdrop-blur-md text-white border border-white/30 px-10 py-5 rounded-xl font-bold hover:bg-white/20 transition-all">
Jadwalkan Demo Gratis
</button>
</div>
</div>
</div>
</section>
</main>
@endsection

@push('scripts')
<script>
document.querySelectorAll('button').forEach(function(button) {
button.addEventListener('mouseenter', function() {
if (!button.classList.contains('active\\:scale-95')) {
button.style.transform = 'translateY(-2px)';
}
});
button.addEventListener('mouseleave', function() {
button.style.transform = '';
});
});
</script>
@endpush
