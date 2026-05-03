@extends('layouts.app')

@section('title', 'Mahya HRIS | Berkemah Team')
@section('meta_description', 'Mahya HRIS adalah platform SDM dari Berkemah Team dengan menu Dashboard, Manajemen Karyawan, Absensi & Waktu, Cuti, Payroll, ESS, Laporan, Kepatuhan, Master Data, dan Alat Admin.')
@section('meta_keywords', 'Mahya HRIS, HRIS Indonesia, absensi, payroll, approval, dashboard, ESS, laporan SDM, Berkemah Team')

@push('styles')
<style>
    .feature-card, .trust-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        border: 1px solid rgb(226 232 240);
        background: linear-gradient(to bottom right, white, rgb(248 250 252));
    }
    .feature-card:hover, .trust-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border-color: rgb(203 213 225);
    }
    .hero-panel {
        border-radius: 1.5rem;
        border: 1px solid rgb(226 232 240);
        background: linear-gradient(to bottom right, white, rgb(248 250 252));
        box-shadow: 0 25px 50px rgba(0,0,0,0.08);
    }
</style>
@endpush

@section('content')
@if (session('success'))
<div class="section-shell px-4 pt-28 sm:px-6 lg:px-8">
    <div class="rounded-2xl border border-blue-200 bg-blue-50 px-5 py-4 text-blue-900 shadow-sm">
        {{ session('success') }}
    </div>
</div>
@endif

@php
$menuGroups = [
    [
        'title' => 'Dashboard',
        'lead' => 'Ringkasan utama untuk admin, HR, dan manager agar kondisi operasional bisa dipantau cepat.',
        'accent' => 'blue',
        'items' => [
            'Dashboard utama untuk melihat status HR secara menyeluruh.',
            'Dashboard Saya untuk employee agar akses pribadi lebih cepat.',
        ],
    ],
    [
        'title' => 'Manajemen Karyawan',
        'lead' => 'Pusat data karyawan, posisi, tim, dan struktur organisasi yang dipakai sebagai sumber data utama.',
        'accent' => 'blue',
        'items' => [
            'Daftar karyawan dan data personal yang tersusun rapi.',
            'Organisasi, direktori, tim, ringkasan, dan struktur yang mudah dibaca.',
            'Dokumen dan master data karyawan untuk kebutuhan administrasi.',
        ],
    ],
    [
        'title' => 'Absensi & Waktu',
        'lead' => 'Mengelola kehadiran harian, timesheet, lembur, persetujuan lembur, dan laporan kehadiran.',
        'accent' => 'blue',
        'items' => [
            'Riwayat semua karyawan untuk memantau kehadiran dan keterlambatan.',
            'Timesheet untuk melihat jam kerja yang lebih detail.',
            'Lembur, persetujuan lembur, dan laporan operasional yang saling terhubung.',
        ],
    ],
    [
        'title' => 'Manajemen Cuti',
        'lead' => 'Proses pengajuan dan persetujuan cuti dibuat jelas, terurut, dan mudah dipantau oleh atasan.',
        'accent' => 'blue',
        'items' => [
            'Permohonan cuti untuk employee.',
            'Persetujuan cuti untuk HR dan manager.',
            'Kalender cuti dan saldo cuti agar status tim mudah dibaca.',
        ],
    ],
    [
        'title' => 'Penggajian & Slip Gaji',
        'lead' => 'Mengatur payroll dari ringkasan sampai pembayaran, termasuk komponen gaji, pajak, dan BPJS.',
        'accent' => 'blue',
        'items' => [
            'Ringkasan payroll, daftar payroll, dan kelola payroll.',
            'Generate, approve, dan pembayaran payroll dalam satu alur.',
            'Komponen gaji seperti tunjangan dan potongan, plus pajak & BPJS.',
        ],
    ],
    [
        'title' => 'Aset & Inventaris',
        'lead' => 'Mencatat aset perusahaan, penugasan, dan kepemilikan agar barang kantor lebih terkontrol.',
        'accent' => 'blue',
        'items' => [
            'Daftar aset yang bisa dipantau statusnya.',
            'Penugasan aset ke karyawan atau unit kerja.',
        ],
    ],
    [
        'title' => 'Task Management',
        'lead' => 'Membantu tim mengelola tugas internal supaya pekerjaan administratif tidak tercecer.',
        'accent' => 'blue',
        'items' => [
            'Tugas saya dan tugas internal yang bisa dipantau per orang.',
        ],
    ],
    [
        'title' => 'Legal & Dokumen',
        'lead' => 'Menyediakan alat untuk dokumen HR, surat tugas, kalkulator pesangon, dan kebutuhan pajak progresif.',
        'accent' => 'blue',
        'items' => [
            'Surat tugas, generator surat, kalkulator pesangon, dan PPh21 progresif.',
        ],
    ],
    [
        'title' => 'Manajemen Reimburse',
        'lead' => 'Proses klaim dan penggantian biaya dibuat lebih rapi dan lebih mudah diawasi.',
        'accent' => 'blue',
        'items' => [
            'Reimburse karyawan dan approval reimburse dalam satu alur.',
        ],
    ],
    [
        'title' => 'Pelatihan & Kompetensi',
        'lead' => 'Mengelola program pengembangan, pendaftaran pelatihan, dan kompetensi tim.',
        'accent' => 'blue',
        'items' => [
            'Program pelatihan, pendaftaran pelatihan, dan kompetensi.',
        ],
    ],
    [
        'title' => 'Karir & Promosi',
        'lead' => 'Mendukung proses promosi dan perkembangan karir yang lebih terstruktur.',
        'accent' => 'blue',
        'items' => [
            'Promosi dan catatan karir karyawan.',
        ],
    ],
    [
        'title' => 'KPI & Kinerja',
        'lead' => 'Membantu memantau target, performa, dan perkembangan kinerja secara berkala.',
        'accent' => 'blue',
        'items' => [
            'KPI individu dan ringkasan kinerja.',
        ],
    ],
    [
        'title' => 'Employee Self Service (ESS)',
        'lead' => 'Menu pribadi karyawan untuk akses cepat ke data yang paling sering dipakai.',
        'accent' => 'blue',
        'items' => [
            'Kinerja: KPI Saya, Kompetensi Saya.',
            'Keuangan: Payroll Saya, Reimburse Saya.',
            'Absensi & Cuti: Absen Masuk, Absen Pulang, Riwayat Absensi, Cuti Saya.',
            'Pengembangan: Pelatihan Saya, Lembur Saya, Promosi Saya.',
            'Dokumen & Aset: Dokumen Saya, Aset Saya, Surat Tugas, Tugas Saya.',
        ],
    ],
    [
        'title' => 'Laporan & Analitik',
        'lead' => 'Menyediakan ringkasan dan laporan detail untuk membantu pimpinan mengambil keputusan.',
        'accent' => 'blue',
        'items' => [
            'Ringkasan laporan, absensi, cuti, payroll, aset, dan SDM.',
        ],
    ],
    [
        'title' => 'Kepatuhan & Kebijakan',
        'lead' => 'Menjaga standar kerja tetap rapi lewat kebijakan, kalender libur, dan aturan operasional.',
        'accent' => 'blue',
        'items' => [
            'Dashboard kepatuhan, kalender libur, tukar shift, dan aturan lembur.',
        ],
    ],
    [
        'title' => 'Master Data',
        'lead' => 'Fondasi konfigurasi sistem seperti departemen, posisi, jenis cuti, kebijakan cuti, dan impor data.',
        'accent' => 'blue',
        'items' => [
            'Departemen & posisi, jenis cuti, kebijakan cuti, dan pusat impor master data.',
        ],
    ],
    [
        'title' => 'Alat Admin',
        'lead' => 'Panel untuk admin dan superadmin mengelola lokasi, jadwal, akses, notifikasi, audit, dan alur persetujuan.',
        'accent' => 'blue',
        'items' => [
            'Master: lokasi dan jadwal kerja.',
            'Manajemen akses: pengguna, peran, dan izin.',
            'Notifikasi: notifikasi admin, email send, log email, dan template.',
            'Sistem: audit logs, perangkat biometrik, dan approval flows.',
            'Pengaturan perusahaan dan notifikasi.',
        ],
    ],
];

$workflowSteps = [
    [
        'step' => '1',
        'title' => 'Login sesuai peran',
        'text' => 'User akan melihat menu yang relevan sesuai role: Super Admin, Admin, HR, Manager, atau Employee.',
    ],
    [
        'step' => '2',
        'title' => 'Ambil data harian',
        'text' => 'Absensi, cuti, lembur, dan reimbursement diproses dari menu yang jelas dan terpisah.',
    ],
    [
        'step' => '3',
        'title' => 'Kelola approval',
        'text' => 'Approval untuk cuti, lembur, dan payroll berjalan berurutan agar tidak ada proses yang tertinggal.',
    ],
    [
        'step' => '4',
        'title' => 'Pantau laporan',
        'text' => 'HR dan manajemen bisa melihat ringkasan, laporan, dan analitik untuk mengambil keputusan lebih cepat.',
    ],
];
@endphp

<section class="relative overflow-hidden pt-24" data-reveal>
    <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-white to-slate-100"></div>
    <div class="absolute -left-24 top-12 h-72 w-72 rounded-full bg-slate-300/30 blur-3xl"></div>
    <div class="absolute right-0 top-28 h-80 w-80 rounded-full bg-slate-200/40 blur-3xl"></div>

    <div class="relative section-shell px-4 pb-20 pt-12 sm:px-6 lg:px-8 lg:pb-24 lg:pt-18">
        <div class="hero-panel border-blue-100 bg-white/95">
            <div class="grid gap-10 px-6 py-12 md:px-10 lg:grid-cols-[1fr_0.95fr] lg:items-center">
                <div>
                    <div class="product-logo product-logo-hris">
                        <span class="product-logo-mark" aria-hidden="true">
                            <img src="{{ asset('assets/logo-mahya.png') }}" alt="" class="h-full w-full rounded-[inherit] object-cover">
                        </span>
                        <span class="text-sm font-semibold text-slate-700">Mahya HRIS</span>
                    </div>
                    <span class="inline-flex rounded-full border border-slate-200 bg-slate-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-slate-700">Menu lengkap HRIS</span>
                    <h1 class="mt-6 text-4xl font-black tracking-tight text-slate-900 md:text-6xl">Satu sistem HR yang menjelaskan semua menu penting, dari absensi sampai laporan.</h1>
                    <p class="section-lead copy-justify">Mahya HRIS membantu HR, manager, dan karyawan bekerja di satu sistem yang jelas. Setiap menu dibagi rapi agar Anda mudah melihat fungsi, alur kerja, dan peran yang menggunakannya. Bagian ini cocok kalau Anda ingin tahu isi menu Mahya HRIS secara lengkap sebelum minta demo.</p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#menu-hris" class="primary-btn">Lihat Menu Lengkap</a>
                        <a href="#hris-demo" class="secondary-btn">Minta Demo</a>
                        <a href="/" class="secondary-btn">Kembali ke Home</a>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="feature-card border-t-4 border-slate-600">
                        <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-100 text-slate-700" aria-hidden="true">HD</div>
                        <h2 class="text-xl font-bold text-slate-900">Dashboard</h2>
                        <p class="mt-3 text-slate-600">Ringkasan operasional untuk melihat kondisi HR dengan cepat.</p>
                    </div>
                    <div class="feature-card border-t-4 border-slate-600">
                        <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-100 text-slate-700" aria-hidden="true">EM</div>
                        <h2 class="text-xl font-bold text-slate-900">Employee Self Service</h2>
                        <p class="mt-3 text-slate-600">Menu pribadi employee untuk akses data yang paling sering dipakai.</p>
                    </div>
                    <div class="feature-card border-t-4 border-slate-600">
                        <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-100 text-slate-700" aria-hidden="true">PW</div>
                        <h2 class="text-xl font-bold text-slate-900">Payroll</h2>
                        <p class="mt-3 text-slate-600">Alur gaji, slip, pembayaran, dan komponen gaji dalam satu proses.</p>
                    </div>
                    <div class="feature-card border-t-4 border-slate-600">
                        <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-100 text-slate-700" aria-hidden="true">RP</div>
                        <h2 class="text-xl font-bold text-slate-900">Laporan</h2>
                        <p class="mt-3 text-slate-600">Laporan absensi, cuti, payroll, aset, dan SDM untuk manajemen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-hris" class="page-section bg-slate-50" data-reveal>
    <div class="section-shell">
        <div class="grid gap-6 lg:grid-cols-2">
            <article class="trust-card border-l-4 border-slate-600">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-700">Kenapa dipilih</p>
                <h2 class="mt-3 text-2xl font-black text-slate-900">Lebih rapi, lebih cepat dipahami, dan lebih mudah dipakai publik internal.</h2>
                <p class="mt-4 text-slate-600 leading-8 copy-justify">Mahya HRIS disusun untuk perusahaan yang ingin mengurangi kerja manual dan membuat data HR berada di satu alur yang jelas. Semua menu dirancang agar mudah dipelajari, tidak membingungkan, dan tetap terasa profesional saat dipakai setiap hari.</p>
            </article>

            <article class="trust-card border-l-4 border-slate-600">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-700">Keunggulan</p>
                <h2 class="mt-3 text-2xl font-black text-slate-900">Tampilan bersih, struktur jelas, dan bahasa produk yang gampang dicerna.</h2>
                <p class="mt-4 text-slate-600 leading-8 copy-justify">Pendekatan ini membuat tim baru lebih cepat adaptasi dan tim lama lebih nyaman menjalankan proses harian. Setiap menu punya fungsi yang saling terhubung, sehingga data tidak tercecer di banyak tempat.</p>
            </article>
        </div>
    </div>
</section>

<section id="menu-hris" class="page-section bg-white" data-reveal>
    <div class="section-shell">
        <div class="text-center">
            <span class="inline-flex rounded-full border border-slate-200 bg-slate-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-slate-700">Menu Mahya HRIS</span>
            <h2 class="mt-5 section-title">Daftar menu dan fitur lengkap</h2>
            <p class="section-lead mx-auto copy-justify">Di bawah ini adalah penjelasan tiap menu yang ada di Mahya HRIS. Saya kelompokkan supaya lebih mudah dibaca, mulai dari dashboard, operasional harian, sampai alat admin.</p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-2 xl:grid-cols-3">
            @foreach ($menuGroups as $group)
                <article class="feature-card border-t-4 border-slate-600">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-700">Mahya HRIS</p>
                            <h3 class="mt-2 text-2xl font-black text-slate-900">{{ $group['title'] }}</h3>
                        </div>
                        <span class="inline-flex rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-[11px] font-bold uppercase tracking-[0.2em] text-slate-700">Menu</span>
                    </div>
                    <p class="mt-4 text-sm leading-7 text-slate-600 copy-justify">{{ $group['lead'] }}</p>
                    <ul class="mt-5 space-y-3 text-slate-700">
                        @foreach ($group['items'] as $item)
                            <li class="flex items-start gap-3">
                                <span class="mt-1 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-slate-100 text-[11px] font-bold text-slate-700" aria-hidden="true">✓</span>
                                <span class="text-sm leading-6">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section bg-slate-50" data-reveal>
    <div class="section-shell">
        <div class="text-center">
            <span class="inline-flex rounded-full border border-slate-200 bg-slate-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-slate-700">Alur kerja</span>
            <h2 class="mt-5 section-title">Cara kerja Mahya HRIS dari awal sampai laporan</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-4">
            @foreach ($workflowSteps as $workflow)
                <article class="trust-card border-l-4 border-slate-600">
                    <div class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-100 text-sm font-black text-slate-700">{{ $workflow['step'] }}</div>
                    <h3 class="mt-4 text-xl font-bold text-slate-900">{{ $workflow['title'] }}</h3>
                    <p class="mt-3 text-slate-600 leading-7 copy-justify">{{ $workflow['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="hris-demo" class="page-section bg-gradient-to-br from-slate-900 to-slate-800 text-white" data-reveal>
    <div class="section-shell">
        <div class="grid gap-8 rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-[0_20px_60px_rgba(15,23,42,0.18)] lg:grid-cols-[1fr_0.95fr] lg:p-10">
            <div>
                <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-white">Minta Demo HRIS</span>
                <h2 class="mt-5 text-3xl font-black tracking-tight md:text-5xl">Kalau ingin lihat alurnya langsung, mulai dari halaman HRIS ini.</h2>
                <p class="mt-4 max-w-2xl text-slate-300 copy-justify">Ceritakan kebutuhan tim Anda, lalu kami bantu arahkan alur yang paling pas untuk absensi, approval, payroll, dan data karyawan. Informasi yang masuk dari halaman HRIS ini akan lebih spesifik dan lebih cepat ditindaklanjuti.</p>
                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-400">Yang dibahas</p>
                        <p class="mt-2 text-sm text-slate-300">Kebutuhan modul, role pengguna, alur approval, dan struktur data HR.</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-400">Output</p>
                        <p class="mt-2 text-sm text-slate-300">Gambaran implementasi yang lebih jelas sebelum tim Anda mulai memakai sistem.</p>
                    </div>
                </div>
            </div>

                <form action="{{ route('interest.store') }}" method="POST" class="rounded-[1.75rem] border border-slate-200 bg-white p-6 text-slate-900 shadow-lg">
                    @csrf
                    <div class="grid gap-4">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">Nama</label>
                            <input id="name" name="name" type="text" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder:text-slate-400 focus:border-slate-400 focus:outline-none" placeholder="Nama Anda" required>
                        </div>
                        <div>
                            <label for="company" class="mb-2 block text-sm font-semibold text-slate-700">Perusahaan</label>
                            <input id="company" name="company" type="text" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder:text-slate-400 focus:border-slate-400 focus:outline-none" placeholder="Nama perusahaan" required>
                        </div>
                        <div>
                            <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Email</label>
                            <input id="email" name="email" type="email" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder:text-slate-400 focus:border-slate-400 focus:outline-none" placeholder="nama@perusahaan.com" required>
                        </div>
                        <div>
                            <label for="message" class="mb-2 block text-sm font-semibold text-slate-700">Kebutuhan</label>
                            <textarea id="message" name="message" rows="4" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder:text-slate-400 focus:border-slate-400 focus:outline-none" placeholder="Ceritakan kebutuhan tim Anda"></textarea>
                        </div>
                        <button type="submit" class="primary-btn w-full justify-center bg-slate-800 hover:bg-slate-700">Kirim Minat</button>
                    </div>
                </form>
        </div>
    </div>
</section>
@endsection
