@extends('layouts.app')

@section('title', 'Mahasiswa IT Lab - Berkemah Team')

@section('content')
<main class="pt-32 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-[1440px] mx-auto relative">
<div class="grid lg:grid-cols-2 gap-gutter items-center">
<div class="space-y-stack-lg">
<div class="inline-flex items-center gap-2 bg-secondary-container text-primary px-4 py-2 rounded-full font-label-md">
<span class="material-symbols-outlined text-[18px]">school</span>
Lab Mahasiswa &amp; Mentoring Coding
</div>
<h1 class="font-headline-xl text-headline-xl leading-tight">
Tugas Kuliah IT Macet? <br/> <span class="text-primary">Kami Siap Debugging.</span>
</h1>
<p class="text-body-lg text-on-surface-variant max-w-lg">
Bantuan pengerjaan proyek kuliah, debugging kode, hingga asistensi laporan praktikum dengan pendekatan edukatif. Kami tidak hanya memberi solusi, tapi membantumu paham.
</p>
<div class="flex flex-wrap gap-stack-md">
<button class="bg-primary text-white px-8 py-4 rounded-lg font-bold text-lg shadow-lg hover:shadow-primary/20 transition-all active:scale-95 flex items-center gap-2">
<span class="material-symbols-outlined">chat_bubble</span>
Tanya Project
</button>
<button class="bg-white border-2 border-primary-container text-primary px-8 py-4 rounded-lg font-bold text-lg hover:bg-primary-container/5 transition-all">
Lihat Portfolio
</button>
</div>
<div class="flex items-center gap-stack-md pt-stack-lg">
<div class="flex -space-x-3">
<div class="w-10 h-10 rounded-full border-2 border-white bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Coding mentor portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9NH7AoduCCAYI3BPBMY5Pcz-p2n2dZMN4QOy6hwfETax4TpOPRiOR3Zdd8604IDxQjluFbPy3uEbXy52ZWgNBT6u9WV9KDpXdyLgM4U3YLQ4RIpVXYOtn58iBB4Cw7XYVLqL6aJlLq0sPz9Dw8KFD1UoN3VJJ9yLJC1bGTf3LBDePi7-Nmu6JG6F1IAy9QtragnJ__oiNE_nUELI3Qf1DoNLj6WLag_2dyroAPBTzSZ2N2w4lCS9i"/>
</div>
<div class="w-10 h-10 rounded-full border-2 border-white bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Female developer portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDszJhVU9PqEXtLpPBCkpkPTbOkb0LdjIfKwfPbjGkCCkmK3XQRzWogYrG7X62VCjYi5TWFDkg7T35di6vt4rbtiHXhdnEo4WBIXE53B14kjOQ-qhBqXHZ5PupAe9JALggETQ4MDTUzSmCO7mVgWea8BAOncN-2TmzQR19G2z3ApO2oHsoT2fNm93irVcs0XGKHhzaLzfOKNvDfbijB3eI6geQTSrOJo9VoVS-SEI-nL8P_pj5PV1xc"/>
</div>
<div class="w-10 h-10 rounded-full border-2 border-white bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Programmer portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAt45T7Tp4HahCPHqz38PhPVACq2LvtiZWW4PsFPF9ei5dXj8RGEt7r0aSimRJMEvxO83Jkfp0EoXjfp-p4Wj7ntU5tV8ChwG2pNJXCzYBKB30iZhNiu_Z0DYrZJRVQiG_aXSRuu3raBeU-PstVCtkjrEU6nu8xOFed8i2H-fSc7WJfCpMdeu6LRilgM-hC_jP168Q6q5NefmXKOgpgrMe0YelXgFkki6Re4B_YiueoagpH2sndnyn"/>
</div>
</div>
<p class="text-label-md text-on-surface-variant"><span class="font-bold text-primary">200+ Mahasiswa</span> telah terbantu semester ini.</p>
</div>
</div>
<div class="relative">
<div class="rounded-xl overflow-hidden shadow-2xl relative aspect-square lg:aspect-video">
<img class="w-full h-full object-cover" data-alt="Student desk with laptop showing code" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2T8z_LyIMGqJN8bA-QgIvCki5eiJvwiE7MW61wdfZB7VLI7L_-Ec4mWxYNigB9AxA0TngBOyNWWPPeNd-nEi-bkJbPMpBBqWj88lo057pZ-j4tNh513vJEbV9n_-p--pvwir8KQC3aWEGn1QFl_uJ1F3c71lMiLIxUBdR9YkwX0zKGTRb7GYWL8O4ig8gIJpGx4IitUwKzc1abwXH8AeOPYOe36371MuUaKT4ox6fdQf-cxa4FHEB"/>
<div class="absolute bottom-6 left-6 glass-card p-4 rounded-lg shadow-xl floating-icon" style="background: rgba(252, 249, 248, 0.7);">
<div class="flex items-center gap-3">
<div class="bg-primary/10 p-2 rounded-full">
<span class="material-symbols-outlined text-primary" data-weight="fill">verified</span>
</div>
<div>
<p class="text-label-md font-bold text-on-surface">Academic Integrity</p>
<p class="text-[12px] text-on-surface-variant">Metode Mentoring 1-on-1</p>
</div>
</div>
</div>
</div>
<div class="absolute -top-10 -right-6 hidden xl:block glass-card p-6 rounded-lg shadow-xl w-64">
<div class="flex gap-1 mb-3">
<div class="w-3 h-3 rounded-full bg-red-400"></div>
<div class="w-3 h-3 rounded-full bg-yellow-400"></div>
<div class="w-3 h-3 rounded-full bg-green-400"></div>
</div>
<pre class="text-[10px] font-mono text-primary leading-relaxed">function debugProject(issue) {
if (issue.type === 'Bug') {
return fixLogic(issue);
}
return mentorStepByStep(issue);
}
</pre>
</div>
</div>
</div>
</main>

<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low">
<div class="max-w-[1440px] mx-auto">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg mb-4">Layanan Khusus Mahasiswa</h2>
<p class="text-body-md text-on-surface-variant max-w-2xl mx-auto">Dari tugas harian hingga Proyek Akhir, mentor kami siap mendampingi setiap langkah belajarmu.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
<div class="bento-item md:col-span-2 lg:col-span-2 bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
<div>
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary">html</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3">Web Development Tasks</h3>
<p class="text-on-surface-variant mb-6">Bantuan pembuatan landing page, styling CSS/Tailwind, hingga integrasi JavaScript interaktif untuk tugas kuliah.</p>
</div>
<div class="flex items-center gap-2 text-primary font-bold">
<span>Mulai dari Rp 50rb</span>
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</div>
</div>
<div class="bento-item bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)]">
<div class="w-12 h-12 bg-secondary-container rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-on-secondary-container">database</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3">CRUD &amp; DB</h3>
<p class="text-on-surface-variant">Perancangan database MySQL/NoSQL dan logika CRUD Laravel, Node.js, atau Java.</p>
</div>
<div class="bento-item bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)]">
<div class="w-12 h-12 bg-surface-container-highest rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-on-surface">schema</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3">ERD &amp; UML</h3>
<p class="text-on-surface-variant">Visualisasi struktur sistem dengan diagram profesional yang mudah dipahami dosen.</p>
</div>
<div class="bento-item bg-primary text-white p-8 rounded-lg shadow-lg">
<div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined">bug_report</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3">Emergency Debugging</h3>
<p class="text-white/80">Deadline besok tapi kode masih error? Tim kami standby 24/7 untuk troubleshooting kritis.</p>
</div>
<div class="bento-item md:col-span-2 lg:col-span-3 bg-white p-8 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] flex flex-col md:flex-row gap-8 items-center">
<div class="flex-1">
<div class="w-12 h-12 bg-secondary-container rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-on-secondary-container">description</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3">Asistensi Laporan &amp; Dokumentasi</h3>
<p class="text-on-surface-variant">Penyusunan laporan teknis, flowchart, hingga panduan instalasi sistem untuk kelengkapan tugas akhir.</p>
</div>
<div class="w-full md:w-64 h-40 rounded-lg overflow-hidden grayscale hover:grayscale-0 transition-all duration-500">
<img class="w-full h-full object-cover" data-alt="Technical documentation workspace" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDORSlINyLIVOnraruyRfAP1EppeoI8QYNY9r3iJQKcP5IjeFPb2vARKI1K5wwZsxkaAS3EZb8yMlb8EsMu1MisrjjCGasAQTTylxyTl73wUHXuAOP0hq6TdWoYxnHHsF5dmn7aLoyRdcAkfP1hWk-I8k5Q04NrnT5L5VcJ5h22XgV2z4oO8GrGf8qxZof4mtIY01_FwdeXmKFE7BTkKLIon3Bb1LI6wRawpgPFBzpjNU61vkfJEPZC"/>
</div>
</div>
</div>
</div>
</section>

<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface">
<div class="max-w-[1200px] mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end gap-stack-lg mb-16">
<div class="max-w-xl">
<h2 class="font-headline-lg text-headline-lg mb-4">Investasi Untuk Masa Depanmu</h2>
<p class="text-body-md text-on-surface-variant">Harga ramah kantong mahasiswa dengan kualitas pengerjaan standar industri IT profesional.</p>
</div>
<div class="flex bg-surface-container-highest p-1 rounded-full shadow-sm border border-outline-variant/20">
<button class="px-6 py-2 rounded-full bg-primary text-white font-bold transition-all">Per Proyek</button>
<button class="px-6 py-2 rounded-full text-on-surface-variant hover:text-primary transition-all">Mentoring Jam</button>
</div>
</div>
<div class="grid md:grid-cols-3 gap-gutter">
<div class="p-8 rounded-lg bg-white border border-outline-variant hover:border-primary transition-colors flex flex-col h-full">
<div class="mb-8">
<p class="text-label-md text-on-surface-variant uppercase tracking-widest mb-2">Daily Tasks</p>
<h3 class="font-headline-md text-headline-md text-on-surface">Starter Lab</h3>
<div class="mt-4 flex items-baseline">
<span class="text-headline-lg font-bold">Rp 100k</span>
<span class="text-on-surface-variant text-label-md">/jam</span>
</div>
</div>
<ul class="space-y-4 mb-10 flex-grow">
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">Styling CSS/HTML Only</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">Simple Algorithm Debug</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">1x Revision</span></li>
</ul>
<button class="w-full py-4 rounded-lg bg-secondary-container text-primary font-bold hover:bg-primary hover:text-white transition-all">Ambil Jam Mentoring</button>
</div>
<div class="p-8 rounded-lg bg-white border-2 border-primary relative shadow-xl transform md:-translate-y-4 flex flex-col h-full">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-white px-4 py-1 rounded-full text-[12px] font-bold">TERPOPULER</div>
<div class="mb-8">
<p class="text-label-md text-primary uppercase tracking-widest mb-2">Project Intensive</p>
<h3 class="font-headline-md text-headline-md text-on-surface">Pro Lab</h3>
<div class="mt-4 flex items-baseline">
<span class="text-headline-lg font-bold text-primary">Rp 300k - Rp 1jt</span>
<span class="text-on-surface-variant text-label-md">/project</span>
</div>
</div>
<ul class="space-y-4 mb-10 flex-grow">
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant font-bold">Full CRUD System</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">Database Design (ERD)</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">Mentoring via Zoom 60min</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">Code Explainer Docs</span></li>
</ul>
<button class="w-full py-4 rounded-lg bg-primary text-white font-bold hover:shadow-lg transition-all">Ambil Paket Project</button>
</div>
<div class="p-8 rounded-lg bg-white border border-outline-variant hover:border-primary transition-colors flex flex-col h-full">
<div class="mb-8">
<p class="text-label-md text-on-surface-variant uppercase tracking-widest mb-2">Thesis / Capstone</p>
<h3 class="font-headline-md text-headline-md text-on-surface">Final Lab</h3>
<div class="mt-4 flex items-baseline">
<span class="text-headline-lg font-bold">Custom</span>
</div>
</div>
<ul class="space-y-4 mb-10 flex-grow">
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">Full System Development</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">Chapter 3-4 Support</span></li>
<li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> <span class="text-on-surface-variant">Unlimited Revisions</span></li>
</ul>
<button class="w-full py-4 rounded-lg bg-secondary-container text-primary font-bold hover:bg-primary hover:text-white transition-all">Konsultasi Custom</button>
</div>
</div>
</div>
</section>

<section class="py-section-gap px-margin-mobile md:px-margin-desktop overflow-hidden">
<div class="max-w-[1440px] mx-auto bg-primary rounded-xl p-stack-lg md:p-16 relative">
<div class="absolute -bottom-20 -right-20 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
<div class="grid lg:grid-cols-2 gap-12 items-center relative z-10">
<div class="flex justify-center">
<div class="relative w-64 h-64 flex items-center justify-center">
<div class="absolute inset-0 bg-white/10 rounded-full animate-pulse"></div>
<div class="relative z-10 bg-white p-8 rounded-full shadow-2xl">
<span class="material-symbols-outlined text-[100px] text-primary" data-weight="fill">verified_user</span>
</div>
</div>
</div>
<div class="text-white">
<h2 class="font-headline-lg text-headline-lg mb-6">Safe, Reliable &amp; Ethical</h2>
<p class="text-body-lg text-white/80 mb-8 leading-relaxed">
Kami mengutamakan <span class="text-white font-bold">integritas akademik</span>. Layanan kami dirancang sebagai media pembelajaran. Setiap baris kode yang kami bantu kerjakan akan dijelaskan melalui sesi mentoring agar kamu siap menghadapi sidang atau presentasi tugas di depan dosen.
</p>
<div class="grid grid-cols-2 gap-6">
<div class="flex items-center gap-3"><span class="material-symbols-outlined">psychology</span><p class="text-label-md">Knowledge Transfer</p></div>
<div class="flex items-center gap-3"><span class="material-symbols-outlined">lock</span><p class="text-label-md">Privacy Guaranteed</p></div>
<div class="flex items-center gap-3"><span class="material-symbols-outlined">timer</span><p class="text-label-md">On-time Delivery</p></div>
<div class="flex items-center gap-3"><span class="material-symbols-outlined">support_agent</span><p class="text-label-md">Direct Mentorship</p></div>
</div>
</div>
</div>
</div>
</section>
@endsection

@push('styles')
<style>
.bento-item {
transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.bento-item:hover {
transform: translateY(-8px);
}
</style>
@endpush
