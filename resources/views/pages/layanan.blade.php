@extends('layouts.app')

@section('title', 'Layanan Kami - Berkemah Team')

@section('content')
<section class="relative pt-32 pb-16 px-margin-mobile md:px-margin-desktop overflow-hidden">
<div class="max-w-container-max mx-auto text-center">
<span class="inline-block px-4 py-1.5 bg-secondary-container text-primary font-label-sm text-label-sm rounded-full mb-6 uppercase tracking-wider">Solusi IT Terintegrasi</span>
<h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface mb-6">Empowering Digital Evolution</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
Dari pengembangan aplikasi hingga keamanan siber, kami menyediakan layanan IT kelas dunia yang disesuaikan untuk pertumbuhan bisnis UMKM dan edukasi mahasiswa.
</p>
</div>
</section>

<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">terminal</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Web Development</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Website responsif dan performa tinggi menggunakan stack teknologi modern seperti React, Vue, dan Node.js.</p>
<button class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Consultation <span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">query_stats</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">SEO Optimization</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Tingkatkan visibilitas bisnis Anda di mesin pencari dengan strategi audit teknis dan content marketing.</p>
<button class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Consultation <span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">campaign</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Digital Ads</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Manajemen kampanye berbayar di Google Ads dan Social Media untuk ROI yang maksimal dan tepat sasaran.</p>
<button class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Consultation <span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">data_object</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Custom Software</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Solusi perangkat lunak tailor-made untuk otomasi bisnis dan kebutuhan operasional spesifik Anda.</p>
<button class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Consultation <span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">school</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Mentoring</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Bimbingan teknis intensif bagi mahasiswa dan pengembang junior untuk menguasai industri IT global.</p>
<button class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Consultation <span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">bug_report</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Bug Fixing</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Layanan pemecahan masalah cepat untuk aplikasi atau website yang bermasalah atau mengalami downtime.</p>
<button class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Consultation <span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">database</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">DB Management</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Desain, optimasi, dan pemeliharaan database SQL/NoSQL untuk integritas data yang tak tertandingi.</p>
<button class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Consultation <span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
</div>
<div class="service-card group bg-surface-container-lowest p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] hover:shadow-[0px_10px_32px_rgba(0,102,255,0.1)] transition-all duration-300 flex flex-col h-full border border-outline-variant/20">
<div class="service-icon w-16 h-16 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">admin_panel_settings</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Security Audit</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Identifikasi celah keamanan digital Anda dan implementasi perlindungan berlapis terhadap ancaman siber.</p>
<button class="w-full py-3 bg-secondary-container text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-colors flex items-center justify-center gap-2">Consultation <span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
</div>
</div>
</section>

<section class="bg-primary-container py-section-gap px-margin-mobile md:px-margin-desktop text-on-primary">
<div class="max-w-container-max mx-auto flex flex-col lg:flex-row items-center gap-stack-lg">
<div class="lg:w-1/2">
<h2 class="font-headline-lg text-headline-lg mb-6">Mengapa Berkemah Team?</h2>
<div class="space-y-6">
<div class="flex gap-4">
<span class="material-symbols-outlined text-tertiary-fixed text-3xl">verified</span>
<div>
<p class="font-bold text-lg">Kualitas Korporat</p>
<p class="opacity-80">Standar pengerjaan profesional dengan dokumentasi yang lengkap.</p>
</div>
</div>
<div class="flex gap-4">
<span class="material-symbols-outlined text-tertiary-fixed text-3xl">rocket_launch</span>
<div>
<p class="font-bold text-lg">Pengerjaan Cepat</p>
<p class="opacity-80">Metodologi Agile memastikan proyek Anda selesai tepat waktu.</p>
</div>
</div>
<div class="flex gap-4">
<span class="material-symbols-outlined text-tertiary-fixed text-3xl">support_agent</span>
<div>
<p class="font-bold text-lg">Dukungan Berkelanjutan</p>
<p class="opacity-80">Maintenance dan konsultasi paska proyek yang handal.</p>
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
var header = document.querySelector('header');
if (window.scrollY > 20) {
header.classList.add('shadow-md');
header.classList.remove('shadow-sm');
} else {
header.classList.remove('shadow-md');
header.classList.add('shadow-sm');
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
