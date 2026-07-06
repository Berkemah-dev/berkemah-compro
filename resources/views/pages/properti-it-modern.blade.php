@extends('layouts.app')

@section('title', 'Properti IT Modern - Berkemah Team')

@section('content')
<section class="pt-32 pb-20 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="text-center mb-16">
<span class="inline-block px-4 py-1.5 bg-secondary-container text-primary font-label-sm text-label-sm rounded-full mb-6 uppercase tracking-wider">Desain Sistem &amp; Properti IT</span>
<h1 class="font-headline-xl text-headline-xl mb-6">Properti IT Modern</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
Kami menyediakan solusi properti IT modern untuk menunjang kebutuhan digital Anda. Dari server, cloud infrastructure, hingga perangkat keras dan lunak terbaru.
</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-16">
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform border border-outline-variant/20">
<div class="w-14 h-14 bg-primary-container/10 rounded-xl flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary text-3xl">dns</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3">Cloud Infrastructure</h3>
<p class="text-on-surface-variant">Solusi cloud computing yang scalable dan aman untuk bisnis Anda. Mulai dari cloud hosting hingga infrastruktur hybrid.</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform border border-outline-variant/20">
<div class="w-14 h-14 bg-primary-container/10 rounded-xl flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary text-3xl">security</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3">Keamanan Siber</h3>
<p class="text-on-surface-variant">Layanan keamanan digital komprehensif termasuk firewall, enkripsi data, dan penetration testing berkala.</p>
</div>
<div class="bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-transform border border-outline-variant/20">
<div class="w-14 h-14 bg-primary-container/10 rounded-xl flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary text-3xl">devices</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3">Perangkat IT</h3>
<p class="text-on-surface-variant">Pengadaan dan konfigurasi perangkat keras IT termasuk workstation, server rack, dan perangkat jaringan enterprise.</p>
</div>
</div>

<section class="bg-primary-container rounded-xl p-12 mb-16">
<div class="max-w-4xl mx-auto text-center">
<h2 class="font-headline-lg text-headline-lg mb-6 text-on-primary-container">Design System Terintegrasi</h2>
<p class="font-body-lg text-body-lg mb-8 opacity-90">Kami menerapkan design system modern yang konsisten di seluruh properti IT Anda, memastikan pengalaman pengguna yang seragam dan profesional.</p>
<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
<div class="bg-white/20 p-6 rounded-lg">
<span class="material-symbols-outlined text-4xl text-primary">palette</span>
<p class="font-label-md text-label-md mt-2">Color System</p>
</div>
<div class="bg-white/20 p-6 rounded-lg">
<span class="material-symbols-outlined text-4xl text-primary">text_fields</span>
<p class="font-label-md text-label-md mt-2">Typography</p>
</div>
<div class="bg-white/20 p-6 rounded-lg">
<span class="material-symbols-outlined text-4xl text-primary">grid_view</span>
<p class="font-label-md text-label-md mt-2">Layout Grid</p>
</div>
<div class="bg-white/20 p-6 rounded-lg">
<span class="material-symbols-outlined text-4xl text-primary">mood</span>
<p class="font-label-md text-label-md mt-2">Components</p>
</div>
</div>
</div>
</section>

<section class="mb-16">
<h2 class="font-headline-lg text-headline-lg text-center mb-12">Paket Properti IT</h2>
<div class="grid md:grid-cols-3 gap-gutter">
<div class="bg-white border border-outline-variant p-8 rounded-lg hover:shadow-xl transition-all flex flex-col">
<div class="mb-6">
<span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full font-label-sm text-label-sm">BASIC</span>
<h3 class="font-headline-xl text-headline-xl mt-4">Rp 2.5jt<span class="text-body-md font-normal text-on-surface-variant">/bulan</span></h3>
</div>
<ul class="space-y-3 mb-8 flex-grow">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-[18px]">check</span> Cloud Hosting 2GB</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-[18px]">check</span> SSL Certificate</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-[18px]">check</span> Support 8/5</li>
</ul>
<button class="w-full bg-secondary-container text-primary py-3 rounded-lg font-bold hover:bg-primary hover:text-white transition-colors">Pilih Basic</button>
</div>
<div class="bg-primary text-white border-2 border-primary p-8 rounded-lg shadow-2xl scale-105 relative flex flex-col">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-tertiary text-white px-4 py-1 rounded-full text-[12px] font-bold">REKOMENDASI</div>
<div class="mb-6">
<span class="px-3 py-1 bg-white/20 rounded-full font-label-sm text-label-sm">PROFESSIONAL</span>
<h3 class="font-headline-xl text-headline-xl mt-4">Rp 5.9jt<span class="text-body-md font-normal opacity-80">/bulan</span></h3>
</div>
<ul class="space-y-3 mb-8 flex-grow">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">check</span> Cloud Hosting 8GB</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">check</span> Load Balancer</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">check</span> Backup Otomatis</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">check</span> Support 24/7</li>
</ul>
<button class="w-full bg-white text-primary py-3 rounded-lg font-bold hover:bg-surface-container-low transition-colors">Pilih Professional</button>
</div>
<div class="bg-white border border-outline-variant p-8 rounded-lg hover:shadow-xl transition-all flex flex-col">
<div class="mb-6">
<span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full font-label-sm text-label-sm">ENTERPRISE</span>
<h3 class="font-headline-xl text-headline-xl mt-4">Custom<span class="text-body-md font-normal text-on-surface-variant"></span></h3>
</div>
<ul class="space-y-3 mb-8 flex-grow">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-[18px]">check</span> Dedicated Server</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-[18px]">check</span> Custom Infrastructure</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-[18px]">check</span> SLA 99.9%</li>
</ul>
<button class="w-full bg-secondary-container text-primary py-3 rounded-lg font-bold hover:bg-primary hover:text-white transition-colors">Minta Penawaran</button>
</div>
</div>
</section>

<section class="bg-surface-container-low rounded-xl p-12 mb-16">
<div class="text-center mb-12">
<h2 class="font-headline-lg text-headline-lg mb-4">Teknologi yang Kami Gunakan</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Stack teknologi modern untuk performa maksimal properti IT Anda.</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
<div class="bg-white p-6 rounded-lg text-center shadow-sm hover:-translate-y-1 transition-transform">
<span class="material-symbols-outlined text-primary text-3xl">cloud</span>
<p class="font-label-md text-label-md mt-2 font-bold">AWS</p>
</div>
<div class="bg-white p-6 rounded-lg text-center shadow-sm hover:-translate-y-1 transition-transform">
<span class="material-symbols-outlined text-primary text-3xl">database</span>
<p class="font-label-md text-label-md mt-2 font-bold">Docker</p>
</div>
<div class="bg-white p-6 rounded-lg text-center shadow-sm hover:-translate-y-1 transition-transform">
<span class="material-symbols-outlined text-primary text-3xl">api</span>
<p class="font-label-md text-label-md mt-2 font-bold">Kubernetes</p>
</div>
<div class="bg-white p-6 rounded-lg text-center shadow-sm hover:-translate-y-1 transition-transform">
<span class="material-symbols-outlined text-primary text-3xl">lock</span>
<p class="font-label-md text-label-md mt-2 font-bold">Cloudflare</p>
</div>
<div class="bg-white p-6 rounded-lg text-center shadow-sm hover:-translate-y-1 transition-transform">
<span class="material-symbols-outlined text-primary text-3xl">monitoring</span>
<p class="font-label-md text-label-md mt-2 font-bold">Datadog</p>
</div>
<div class="bg-white p-6 rounded-lg text-center shadow-sm hover:-translate-y-1 transition-transform">
<span class="material-symbols-outlined text-primary text-3xl">code</span>
<p class="font-label-md text-label-md mt-2 font-bold">GitHub</p>
</div>
</div>
</section>

<section class="mb-16">
<div class="grid md:grid-cols-2 gap-gutter">
<div class="bg-white rounded-lg p-8 border border-outline-variant/20 shadow-[0px_4px_20px_rgba(0,0,0,0.05)]">
<h3 class="font-headline-md text-headline-md mb-4">Benefit yang Anda Dapat</h3>
<ul class="space-y-3 text-on-surface-variant">
<li class="flex items-start gap-3"><span class="material-symbols-outlined text-tertiary text-[20px] mt-0.5">check_circle</span><span>Arsitektur yang siap berkembang tanpa bongkar ulang total.</span></li>
<li class="flex items-start gap-3"><span class="material-symbols-outlined text-tertiary text-[20px] mt-0.5">check_circle</span><span>Monitoring dasar untuk performa, error, dan uptime.</span></li>
<li class="flex items-start gap-3"><span class="material-symbols-outlined text-tertiary text-[20px] mt-0.5">check_circle</span><span>Keamanan berlapis dari sisi akses, backup, dan environment.</span></li>
<li class="flex items-start gap-3"><span class="material-symbols-outlined text-tertiary text-[20px] mt-0.5">check_circle</span><span>Dokumentasi teknis supaya tim Anda gampang lanjut tanpa bergantung penuh.</span></li>
<li class="flex items-start gap-3"><span class="material-symbols-outlined text-tertiary text-[20px] mt-0.5">check_circle</span><span>Support implementasi yang jelas, bukan cuma serah file.</span></li>
</ul>
</div>
<div class="bg-primary text-white rounded-lg p-8 shadow-2xl">
<h3 class="font-headline-md text-headline-md mb-4">Kenapa Paket Ini Menjual</h3>
<p class="opacity-90 mb-6">Untuk bisnis yang butuh hasil cepat, tampilan rapi, dan sistem yang mudah dipresentasikan ke tim maupun klien.</p>
<ul class="space-y-3">
<li class="flex items-start gap-3"><span class="material-symbols-outlined text-[20px] mt-0.5">bolt</span><span>Setup lebih cepat karena fondasi sudah dipilih dengan tepat.</span></li>
<li class="flex items-start gap-3"><span class="material-symbols-outlined text-[20px] mt-0.5">shield</span><span>Risiko downtime lebih rendah dengan konfigurasi yang rapi.</span></li>
<li class="flex items-start gap-3"><span class="material-symbols-outlined text-[20px] mt-0.5">groups</span><span>Lebih mudah dijual ke stakeholder karena manfaatnya langsung terlihat.</span></li>
</ul>
</div>
</div>
</section>

<section class="text-center">
<h2 class="font-headline-lg text-headline-lg mb-6">Siap Modernisasi Properti IT Anda?</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-8">Konsultasikan kebutuhan infrastruktur IT Anda dengan tim ahli kami. Gratis!</p>
<div class="flex flex-col sm:flex-row justify-center gap-4">
<a href="https://wa.me/62881023806530" class="bg-primary text-white px-8 py-4 rounded-full font-bold hover:scale-105 transition-transform shadow-lg inline-flex items-center justify-center">Konsultasi 0881023806530</a>
<button class="bg-secondary-container text-primary px-8 py-4 rounded-full font-bold hover:bg-primary hover:text-white transition-colors">Lihat Dokumentasi</button>
</div>
</section>
</section>
@endsection

@push('styles')
<style>
.service-card:hover .service-icon {
transform: scale(1.1) rotate(5deg);
}
</style>
@endpush
