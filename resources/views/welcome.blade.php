@extends('layouts.app')

@section('title', 'Berkemah Team | Mahya HRIS & Mahya HSE')
@section('meta_description', 'Berkemah Team adalah startup SaaS dari Bandung yang membangun Mahya HRIS dan Mahya HSE untuk membantu perusahaan menata operasional SDM dan keselamatan kerja dengan lebih rapi.')
@section('meta_keywords', 'Berkemah Team, Mahya HRIS, Mahya HSE, startup SaaS Bandung, software HRIS Indonesia, software HSE')

@section('content')
@if (session('success'))
<div class="section-shell px-4 pt-28 sm:px-6 lg:px-8">
    <div class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-slate-800 shadow-sm">
        {{ session('success') }}
    </div>
</div>
@endif

<section id="home" class="relative overflow-hidden pt-24" data-reveal>
    <div class="absolute inset-0">
        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQ-IaBxIPwgUu0-ERZbQYGcRmGFxwJB5_22FXyJY7nOv_zD6sxImQFcq8fQTw8h53SPOT9VSAuMe13pxJQKNs58UAooQcFxEwzDWsiE3_9Iq9Xqfp8yorOnH52GAIYVOoYux0Bkrrm_nYHBUsI8QiXE_Luc9xEDghyeGvJwUpsLe6YO7GyTJd1PEIdVsXSb7dI4Ja9DuHxcqJjdW4QplVDoGGDZorZM1S2n5d262WHSg2T58UNySoaYNHkP8fYj8q1nJlIG953-FOO" alt="Latar Berkemah" class="h-full w-full object-cover" />
        <div class="absolute inset-0 bg-slate-950/55"></div>
    </div>

    <div class="relative section-shell px-4 pb-20 pt-20 sm:px-6 lg:px-8 lg:pb-24">
        <div class="max-w-4xl">
            <span class="inline-flex rounded-full border border-white/40 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-white">Berkemah Team | Bandung</span>
            <h1 class="mt-6 text-4xl font-black leading-tight tracking-tight text-white md:text-6xl">SaaS yang merapikan kerja HR dan keselamatan kerja, supaya tim Anda lebih cepat bergerak dan lebih mudah dikendalikan.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-relaxed text-slate-100 copy-justify">Berkemah lahir pada 2023 dari tim kecil yang ingin membuat software operasional yang benar-benar enak dipakai. Kami membangun Mahya HRIS dan Mahya HSE untuk membantu perusahaan mengurangi kerja manual, memperjelas alur approval, dan menjaga proses harian tetap rapi dari awal sampai selesai.</p>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="/#journey" class="inline-flex items-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Lihat Perjalanan Kami</a>
                <a href="/#products" class="inline-flex items-center rounded-full border border-white/60 bg-white/10 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/20">Lihat Produk</a>
            </div>
        </div>
    </div>
</section>

<section id="about" class="page-section" data-reveal>
    <div class="section-shell">
        <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr]">
            <div class="space-y-6">
                <span class="text-xs font-bold uppercase tracking-[0.25em] text-slate-700">Tentang Berkemah</span>
                <h2 class="section-title">Berawal dari tim kecil, tumbuh menjadi startup dengan standar produk yang serius.</h2>
                <p class="section-lead copy-justify">Kami percaya UI yang bersih dan UX yang rapi bukan sekadar soal tampilan. Itu adalah cara agar tim lebih cepat paham, lebih minim salah langkah, dan lebih mudah mengambil keputusan berdasarkan data yang jelas.</p>
                <div class="grid gap-4 sm:grid-cols-3">
                    <div class="stat-card">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Didirikan</p>
                        <p class="mt-2 text-lg font-bold text-slate-900">2023</p>
                    </div>
                    <div class="stat-card">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Lokasi</p>
                        <p class="mt-2 text-lg font-bold text-slate-900">Bandung</p>
                    </div>
                    <div class="stat-card">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Fokus</p>
                        <p class="mt-2 text-lg font-bold text-slate-900">HRIS + HSE</p>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-[0_20px_45px_rgba(15,23,42,0.08)]">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHQF4VDBfuCV-rlJWf1ffbo6PIQCt8IbU_2x-aj5mJnLfkI8QtA0iYinDci0mXQJ1o21ErV6SDhqLDNoPDHdI4_mcDEysTHXh1Cbps4gCy3Ozxu1vV3tzRveHtWXt0Kqj2vdRbrA75lRZ6-ZtDjdMTP1As4vDLEX7juF63MpL7FDkkzkZUaCml7jqTQy87TKjyHBGBqEmhCpgA1PRDtHTKLLTNgxywfD9V2xg_uR65ZBK6D6lwlOZQpiJ4b6FGOU5n85CrqcnJ9C0X" alt="Perjalanan Berkemah" class="h-80 w-full rounded-2xl object-cover" />
                <p class="mt-4 text-sm leading-relaxed text-slate-600 copy-justify">Filosofi kami sederhana: desain harus memudahkan, fitur harus berdampak, dan produk harus siap dipakai publik tanpa membuat pengguna baru kebingungan.</p>
            </div>
        </div>
    </div>
</section>

<section id="vision-mission" class="page-section bg-slate-50" data-reveal>
    <div class="section-shell">
        <div class="text-center">
            <h2 class="section-title">Visi dan Misi</h2>
            <p class="section-lead mx-auto copy-justify">Arah kami bukan sekadar membuat software terlihat modern, tapi memastikan software itu benar-benar membantu proses kerja harian, dari input data sampai approval dan pelaporan.</p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-2">
            <article class="trust-card border-l-4 border-slate-500">
                <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl border border-slate-200 bg-slate-50 text-slate-700" aria-hidden="true">
                    <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3l7 4v5c0 4.4-3 8.4-7 9-4-0.6-7-4.6-7-9V7l7-4z" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M9.5 12.1l1.8 1.8 3.8-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-700">Visi</p>
                <h3 class="mt-3 text-2xl font-black text-slate-900">Menjadi standar baru platform operasional untuk perusahaan bertumbuh di Indonesia.</h3>
                <p class="mt-4 text-slate-600 leading-8 copy-justify">Kami ingin setiap tim bisa menjalankan proses SDM dan keselamatan kerja secara terstruktur, terukur, dan mudah dipantau oleh manajemen tanpa menambah beban administrasi.</p>
            </article>

            <article class="trust-card border-l-4 border-slate-400">
                <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl border border-slate-200 bg-slate-50 text-slate-700" aria-hidden="true">
                    <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 5h12v14H6z" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M8.5 9h7M8.5 12h7M8.5 15h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-700">Misi</p>
                <h3 class="mt-3 text-2xl font-black text-slate-900">Membangun produk yang cepat dipahami, kuat dipakai harian, dan jelas dampaknya.</h3>
                <p class="mt-4 text-slate-600 leading-8 copy-justify">Setiap fitur kami rancang agar mengurangi kerja manual, mempercepat keputusan operasional, dan meningkatkan kualitas koordinasi antar tim yang selama ini sering tersendat karena data tersebar.</p>
            </article>
        </div>
    </div>
</section>

<section id="why-berkemah" class="page-section bg-slate-50" data-reveal>
    <div class="section-shell">
        <div class="grid gap-10 lg:grid-cols-[1fr_1fr] lg:items-start">
            <div>
                <h2 class="section-title">Kenapa Berkemah?</h2>
                <p class="section-lead copy-justify">Karena kami membangun produk dari sudut pandang implementasi nyata di lapangan, bukan hanya dari kebutuhan demo. Fokus kami ada pada kejelasan alur, kecepatan adopsi, dan stabilitas penggunaan jangka panjang.</p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="trust-card">
                    <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-50 text-slate-700" aria-hidden="true">✦</div>
                    <h3 class="text-lg font-bold text-slate-900">Bahasa produk yang jelas</h3>
                    <p class="mt-2 text-slate-600 copy-justify">Istilah fitur dibuat mudah dipahami tim non-teknis, jadi proses onboarding tidak terasa berat.</p>
                </div>
                <div class="trust-card">
                    <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-50 text-slate-700" aria-hidden="true">↳</div>
                    <h3 class="text-lg font-bold text-slate-900">Implementasi bertahap</h3>
                    <p class="mt-2 text-slate-600 copy-justify">Onboarding bisa dimulai dari modul inti tanpa mengganggu operasi harian tim Anda.</p>
                </div>
                <div class="trust-card">
                    <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-50 text-slate-700" aria-hidden="true">⌂</div>
                    <h3 class="text-lg font-bold text-slate-900">Dibangun untuk konteks lokal</h3>
                    <p class="mt-2 text-slate-600 copy-justify">Struktur alur sesuai kebutuhan perusahaan di Indonesia, bukan sekadar meniru pola produk luar.</p>
                </div>
                <div class="trust-card">
                    <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-50 text-slate-700" aria-hidden="true">◎</div>
                    <h3 class="text-lg font-bold text-slate-900">UI modern, UX runtut</h3>
                    <p class="mt-2 text-slate-600 copy-justify">Tampilan bersih dengan navigasi yang tidak membingungkan, sehingga tim cepat paham tanpa banyak pelatihan tambahan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="journey" class="page-section bg-slate-50" data-reveal>
    <div class="section-shell">
        <div class="text-center">
            <h2 class="section-title">Perjalanan Berkemah</h2>
            <p class="section-lead mx-auto copy-justify">Dari fondasi kecil sampai pengembangan produk yang matang, setiap fase kami fokus pada kebutuhan operasional yang nyata dan bisa langsung dirasakan manfaatnya.</p>
        </div>

        <div class="timeline-wrap mt-12">
            <div class="timeline-line" aria-hidden="true"></div>

            <article class="timeline-item">
                <span class="timeline-dot bg-slate-500" aria-hidden="true"></span>
                <div class="trust-card">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-700">2023</p>
                    <h3 class="mt-2 text-xl font-bold text-slate-900">Titik Awal</h3>
                    <p class="mt-3 text-slate-600 copy-justify">Berkemah didirikan dan mulai membangun fondasi sistem untuk merapikan proses internal perusahaan sejak awal.</p>
                </div>
            </article>

            <article class="timeline-item">
                <span class="timeline-dot bg-slate-400" aria-hidden="true"></span>
                <div class="trust-card">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-700">2024</p>
                    <h3 class="mt-2 text-xl font-bold text-slate-900">Validasi Lapangan</h3>
                    <p class="mt-3 text-slate-600 copy-justify">Riset pengguna memperkuat arah produk: perusahaan butuh sistem yang jelas, bukan sekadar dashboard yang ramai fitur tetapi sulit dipakai.</p>
                </div>
            </article>

            <article class="timeline-item">
                <span class="timeline-dot bg-slate-500" aria-hidden="true"></span>
                <div class="trust-card">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-600">Sekarang</p>
                    <h3 class="mt-2 text-xl font-bold text-slate-900">Ekosistem Mahya</h3>
                    <p class="mt-3 text-slate-600 copy-justify">Berkemah mengembangkan dua produk utama: Mahya HRIS dan Mahya HSE sebagai ekosistem operasional modern untuk kebutuhan tim yang bertumbuh.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section id="products" class="page-section bg-slate-950 text-white" data-reveal>
    <div class="section-shell">
        <div class="text-center">
            <h2 class="text-3xl font-black tracking-tight md:text-5xl">Produk Berkemah</h2>
            <p class="mx-auto mt-4 max-w-3xl text-slate-300 copy-justify">Dirancang untuk kebutuhan operasional perusahaan: cepat dipahami, stabil dijalankan, dan siap dipakai tim berkembang yang butuh hasil nyata, bukan sekadar tampilan bagus.</p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-2">
            <a href="{{ route('mahya.hris') }}" class="group rounded-3xl border border-blue-400/30 bg-slate-900 p-8 transition hover:-translate-y-1 hover:border-blue-300">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                            <span class="inline-flex h-12 w-12 items-center justify-center overflow-hidden rounded-xl border border-blue-300/50 bg-blue-500/20" aria-hidden="true">
                                <img src="{{ asset('assets/logo-mahya.png') }}" alt="" class="h-full w-full object-cover">
                            </span>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-blue-200">Mahya</p>
                            <h3 class="text-2xl font-bold text-white">Mahya HRIS</h3>
                        </div>
                    </div>
                    <span class="rounded-full border border-blue-300/40 px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-blue-200">Active</span>
                </div>

                <p class="mt-6 text-slate-300 copy-justify">Platform HRIS untuk absensi, cuti, payroll, dan data karyawan dalam satu alur kerja yang konsisten, sehingga admin tidak perlu lompat dari satu alat ke alat lain.</p>

                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="rounded-full border border-slate-600 px-3 py-1 text-sm text-slate-200">Absensi</span>
                    <span class="rounded-full border border-slate-600 px-3 py-1 text-sm text-slate-200">Payroll</span>
                    <span class="rounded-full border border-slate-600 px-3 py-1 text-sm text-slate-200">Approval</span>
                    <span class="rounded-full border border-slate-600 px-3 py-1 text-sm text-slate-200">Master Data</span>
                </div>
            </a>

            <a href="{{ route('mahya.hse') }}" class="group rounded-3xl border border-green-400/30 bg-slate-900 p-8 transition hover:-translate-y-1 hover:border-green-300">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl border border-green-300/50 bg-green-500/20 text-green-200" aria-hidden="true">
                            <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 17L12 6L20 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.5 17L12 11.5L15.5 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-green-200">Mahya</p>
                            <h3 class="text-2xl font-bold text-white">Mahya HSE</h3>
                        </div>
                    </div>
                    <span class="rounded-full border border-green-300/40 px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-green-200">Coming Soon</span>
                </div>

                <p class="mt-6 text-slate-300 copy-justify">Modul keselamatan kerja untuk inspeksi, incident report, audit trail, dan kepatuhan operasional yang tertata dari lapangan sampai pelaporan.</p>

                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="rounded-full border border-slate-600 px-3 py-1 text-sm text-slate-200">Checklist</span>
                    <span class="rounded-full border border-slate-600 px-3 py-1 text-sm text-slate-200">Incident</span>
                    <span class="rounded-full border border-slate-600 px-3 py-1 text-sm text-slate-200">Audit</span>
                    <span class="rounded-full border border-slate-600 px-3 py-1 text-sm text-slate-200">Compliance</span>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="hris-benefits" class="page-section bg-slate-50" data-reveal>
    <div class="section-shell">
        <div class="text-center">
            <h2 class="section-title">Keuntungan Mahya HRIS dibanding solusi lain</h2>
            <p class="section-lead mx-auto copy-justify">Bukan hanya fitur, tetapi kemudahan implementasi dan kejelasan operasional yang jadi pembeda utama ketika perusahaan mulai memilih solusi yang tepat.</p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-2">
            <article class="trust-card border-l-4 border-slate-500">
                <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-50 text-slate-700" aria-hidden="true">HR</div>
                <h3 class="text-xl font-bold text-slate-900">Apa yang tim dapat di Mahya HRIS</h3>
                <ul class="mt-4 space-y-3 text-slate-600">
                    <li class="flex items-start gap-3"><span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-50 text-slate-700" aria-hidden="true">✓</span><span>Alur approval lebih ringkas dan mudah dipantau.</span></li>
                    <li class="flex items-start gap-3"><span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-50 text-slate-700" aria-hidden="true">◧</span><span>Data karyawan, absensi, dan payroll dalam satu sistem.</span></li>
                    <li class="flex items-start gap-3"><span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-50 text-slate-700" aria-hidden="true">✦</span><span>Tampilan bersih untuk mempercepat adaptasi pengguna baru.</span></li>
                    <li class="flex items-start gap-3"><span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-50 text-slate-700" aria-hidden="true">⌁</span><span>Bahasa produk disusun agar relevan dengan tim lokal.</span></li>
                </ul>
            </article>

            <article class="trust-card border-l-4 border-slate-400">
                <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-100 text-slate-700" aria-hidden="true">≠</div>
                <h3 class="text-xl font-bold text-slate-900">Tantangan umum di solusi lain</h3>
                <ul class="mt-4 space-y-3 text-slate-600">
                    <li class="flex items-start gap-3"><span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-700" aria-hidden="true">!</span><span>Modul terpisah-pisah dan butuh banyak alat tambahan.</span></li>
                    <li class="flex items-start gap-3"><span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-700" aria-hidden="true">⌛</span><span>Onboarding lama karena UI terlalu kompleks.</span></li>
                    <li class="flex items-start gap-3"><span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-700" aria-hidden="true">◔</span><span>Istilah fitur tidak selalu sesuai konteks tim lokal.</span></li>
                    <li class="flex items-start gap-3"><span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-700" aria-hidden="true">⇄</span><span>Pelaporan operasional sulit dipadukan lintas proses.</span></li>
                </ul>
            </article>
        </div>
    </div>
</section>


<footer class="border-t border-slate-200 bg-slate-50 py-12">
    <div class="section-shell px-4 sm:px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-4">
            <div class="md:col-span-2">
                <div class="flex items-center gap-4">
                    <span class="brand-logo h-14 w-14" aria-hidden="true">
                        <img src="{{ asset('assets/foto-berkemah.png') }}" alt="" class="h-full w-full rounded-[inherit] object-cover">
                    </span>
                    <h3 class="text-3xl font-extrabold uppercase tracking-[0.12em] text-black">BERKEMAH TEAM</h3>
                </div>
                <p class="mt-4 max-w-xl text-slate-600">Startup SaaS dari Bandung yang membangun pengalaman produk publik dengan standar UI modern, bahasa yang jelas, dan alur yang siap dipakai oleh perusahaan nyata.</p>
                <div class="mt-6 flex items-center gap-3">
                    <a href="https://instagram.com" target="_blank" rel="noreferrer" class="social-link" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3.5" y="3.5" width="17" height="17" rx="5" stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="17.2" cy="6.8" r="1.2" fill="currentColor"/>
                        </svg>
                    </a>
                    <a href="https://tiktok.com" target="_blank" rel="noreferrer" class="social-link" aria-label="TikTok">
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8 3c.5 1.6 1.7 2.8 3.2 3.3v3a8 8 0 0 1-3.2-.9v5.8a5.8 5.8 0 1 1-5.8-5.8c.3 0 .6 0 .9.1v3.1a2.7 2.7 0 1 0 1.9 2.6V3h3z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" rel="noreferrer" class="social-link" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.2 8.8H3V21h3.2V8.8zM4.6 7.3a1.9 1.9 0 1 0 0-3.8 1.9 1.9 0 0 0 0 3.8zM21 21v-6.6c0-3.5-1.9-5.2-4.5-5.2-2.1 0-3 1.1-3.5 1.9V8.8H9.8c0 1.6 0 12.2 0 12.2H13v-6.8c0-.4 0-.7.1-1 .3-.7 1-1.5 2.2-1.5 1.5 0 2.2 1.1 2.2 2.8V21H21z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="text-sm font-bold uppercase tracking-[0.15em] text-slate-500">Produk</h4>
                <ul class="mt-4 space-y-2 text-slate-700">
                    <li><a href="{{ route('mahya.hris') }}" class="hover:text-slate-900">Mahya HRIS</a></li>
                    <li><a href="{{ route('mahya.hse') }}" class="hover:text-slate-900">Mahya HSE</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-bold uppercase tracking-[0.15em] text-slate-500">Company</h4>
                <ul class="mt-4 space-y-2 text-slate-700">
                    <li><a href="/#about" class="hover:text-slate-900">Tentang</a></li>
                    <li><a href="/#journey" class="hover:text-slate-900">Perjalanan</a></li>
                    <li><a href="mailto:info@mahyahris.com" class="hover:text-slate-900">info@mahyahris.com</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-10 border-t border-slate-200 pt-6 text-center text-sm text-slate-700">
            &copy; 2026 Berkemah Team. All rights reserved.
        </div>
    </div>
</footer>
@endsection
