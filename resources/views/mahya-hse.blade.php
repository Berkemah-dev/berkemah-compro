@extends('layouts.app')

@section('title', 'Mahya HSE | Berkemah Team')
@section('meta_description', 'Mahya HSE adalah modul keselamatan kerja dari Berkemah Team untuk inspeksi, incident report, audit trail, dan kepatuhan operasional.')
@section('meta_keywords', 'Mahya HSE, HSE Indonesia, inspeksi, incident report, compliance, Berkemah Team')

@section('content')
<section class="page-section pt-24" data-reveal>
    <div class="section-shell">
        <div class="hero-panel">
            <div class="grid gap-10 px-6 py-12 md:px-10 lg:grid-cols-[1fr_0.9fr] lg:items-center">
                <div>
                    <div class="product-logo product-logo-hse">
                        <span class="product-logo-mark" aria-hidden="true">HS</span>
                        <span class="text-sm font-semibold text-green-700">Mahya HSE</span>
                    </div>
                    <h1 class="mt-6 text-4xl font-black tracking-tight text-slate-900 md:text-6xl">Coming soon, tapi arahnya sudah jelas: keselamatan kerja yang rapi dan mudah dipantau.</h1>
                    <p class="section-lead">Mahya HSE sedang dipersiapkan sebagai modul untuk inspeksi, incident report, checklist, audit trail, dan kepatuhan operasional yang terstruktur.</p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="/#products" class="primary-btn">Lihat Produk Lain</a>
                        <a href="/" class="secondary-btn">Kembali ke Home</a>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="feature-card border-t-4 border-green-600">
                        <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-green-50 text-green-700" aria-hidden="true">⌁</div>
                        <h2 class="text-xl font-bold text-slate-900">Checklist</h2>
                        <p class="mt-3 text-slate-600">Biar inspeksi lapangan konsisten.</p>
                    </div>
                    <div class="feature-card border-t-4 border-green-600">
                        <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-green-50 text-green-700" aria-hidden="true">!</div>
                        <h2 class="text-xl font-bold text-slate-900">Incident report</h2>
                        <p class="mt-3 text-slate-600">Catat kejadian dengan alur yang mudah ditelusuri.</p>
                    </div>
                    <div class="feature-card border-t-4 border-green-600">
                        <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-green-50 text-green-700" aria-hidden="true">◌</div>
                        <h2 class="text-xl font-bold text-slate-900">Audit trail</h2>
                        <p class="mt-3 text-slate-600">Semua jejak kerja tetap terpantau.</p>
                    </div>
                    <div class="feature-card border-t-4 border-green-600">
                        <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-green-50 text-green-700" aria-hidden="true">✓</div>
                        <h2 class="text-xl font-bold text-slate-900">Kepatuhan</h2>
                        <p class="mt-3 text-slate-600">Membantu tim lebih disiplin terhadap standar HSE.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-white/90" data-reveal>
    <div class="section-shell">
        <div class="grid gap-6 lg:grid-cols-2">
            <article class="trust-card border-l-4 border-green-600">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-green-700">Arah produk</p>
                <h2 class="mt-3 text-2xl font-black text-slate-900">Dirancang untuk tim lapangan yang butuh alur jelas tanpa ribet.</h2>
                <p class="mt-4 text-slate-600 leading-8">Mahya HSE akan hadir sebagai modul yang membantu perusahaan menyatukan data inspeksi, kejadian, dan kepatuhan dalam satu tempat.</p>
            </article>

            <article class="trust-card border-l-4 border-green-600">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-green-700">Status</p>
                <h2 class="mt-3 text-2xl font-black text-slate-900">Coming soon, dengan fondasi desain dan struktur yang sudah ditata.</h2>
                <p class="mt-4 text-slate-600 leading-8">Kami sengaja menampilkan halaman ini sebagai preview supaya publik tahu arah produk tetap serius dan terarah.</p>
            </article>
        </div>
    </div>
</section>
@endsection