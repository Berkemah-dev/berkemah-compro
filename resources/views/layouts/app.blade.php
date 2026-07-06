<!DOCTYPE html>
<html class="light scroll-smooth" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>@yield('title', 'Berkemah Team | Solusi Digital UMKM & Mahasiswa')</title>
<link rel="icon" type="image/png" href="{{ asset('assets/foto-berkemah.png') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/foto-berkemah.png') }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100..900&amp;display=swap" rel="stylesheet"/>
<script>
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "secondary-container": "#d9e3f2",
                "outline-variant": "#c2c6d8",
                "secondary-fixed-dim": "#bdc7d6",
                "tertiary-fixed": "#6bff8f",
                "secondary-fixed": "#d9e3f2",
                "surface": "#fcf9f8",
                "inverse-surface": "#313030",
                "primary-fixed-dim": "#b3c5ff",
                "on-error": "#ffffff",
                "error-container": "#ffdad6",
                "background": "#fcf9f8",
                "surface-dim": "#dcd9d9",
                "surface-container-lowest": "#ffffff",
                "surface-container-low": "#f6f3f2",
                "on-surface": "#1c1b1b",
                "on-primary-fixed-variant": "#003fa4",
                "tertiary": "#00682c",
                "on-secondary-fixed-variant": "#3e4853",
                "on-primary-container": "#f8f7ff",
                "inverse-on-surface": "#f3f0ef",
                "surface-container-highest": "#e5e2e1",
                "on-error-container": "#93000a",
                "error": "#ba1a1a",
                "outline": "#727687",
                "surface-bright": "#fcf9f8",
                "on-tertiary-fixed-variant": "#005321",
                "primary-fixed": "#dae1ff",
                "surface-variant": "#e5e2e1",
                "surface-container": "#f0eded",
                "on-tertiary-container": "#e7ffe5",
                "primary-container": "#0066ff",
                "on-secondary": "#ffffff",
                "on-background": "#1c1b1b",
                "on-tertiary-fixed": "#002109",
                "tertiary-fixed-dim": "#4ae176",
                "surface-container-high": "#eae7e7",
                "on-secondary-container": "#5b6572",
                "secondary": "#555f6c",
                "on-surface-variant": "#424656",
                "on-primary": "#ffffff",
                "tertiary-container": "#00843a",
                "on-primary-fixed": "#001849",
                "on-tertiary": "#ffffff",
                "surface-tint": "#0054d6",
                "primary": "#0050cb",
                "on-secondary-fixed": "#131c27",
                "inverse-primary": "#b3c5ff"
            },
            borderRadius: {
                DEFAULT: "1rem",
                lg: "2rem",
                xl: "3rem",
                full: "9999px"
            },
            spacing: {
                "stack-sm": "8px",
                "stack-md": "16px",
                "gutter": "24px",
                "container-max": "1200px",
                "stack-lg": "32px",
                "section-gap": "80px",
                "margin-mobile": "16px",
                "margin-desktop": "32px"
            },
            fontFamily: {
                "headline-md": ["Plus Jakarta Sans"],
                "headline-xl-mobile": ["Plus Jakarta Sans"],
                "headline-lg": ["Plus Jakarta Sans"],
                "label-sm": ["Plus Jakarta Sans"],
                "label-md": ["Plus Jakarta Sans"],
                "body-lg": ["Plus Jakarta Sans"],
                "headline-xl": ["Plus Jakarta Sans"],
                "headline-lg-mobile": ["Plus Jakarta Sans"],
                "body-md": ["Plus Jakarta Sans"]
            },
            fontSize: {
                "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                "headline-xl-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                "headline-xl": ["40px", {"lineHeight": "52px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
            }
        }
    }
}
</script>
<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    .glass-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .glass-header {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    .floating-icon {
        animation: floating 3s ease-in-out infinite;
    }
    @keyframes pulse {
        0%, 100% { opacity: 0.5; }
        50% { opacity: 1; }
    }
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    .hero-gradient {
        background: radial-gradient(circle at 0% 0%, rgba(0, 102, 255, 0.05) 0%, transparent 50%), radial-gradient(circle at 100% 100%, rgba(0, 84, 214, 0.05) 0%, transparent 50%);
    }
</style>
@stack('styles')
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden selection:bg-primary-fixed selection:text-on-primary-fixed">
<nav class="fixed top-0 w-full z-50 border-b border-white/50 bg-surface/85 backdrop-blur-md glass-header shadow-[0px_4px_20px_rgba(0,0,0,0.05)]">
    <div class="flex items-center justify-between gap-4 px-margin-mobile md:px-margin-desktop h-20">
        <a href="{{ route('home') }}" class="flex items-center gap-3 min-w-0">
            <span class="flex h-11 w-11 shrink-0 items-center justify-center overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm sm:h-12 sm:w-12" aria-hidden="true">
                <img src="{{ asset('assets/foto-berkemah.png') }}" alt="" class="h-full w-full object-cover">
            </span>
            <span class="hidden sm:block min-w-0 truncate font-headline-md text-headline-md font-bold tracking-tight text-primary">Berkemah Team</span>
        </a>

        <div class="hidden md:flex items-center gap-gutter lg:gap-8">
            <a href="{{ route('layanan') }}" class="text-body-md @if(request()->routeIs('layanan')) text-primary font-bold border-b-2 border-primary pb-1 @else text-on-surface-variant hover:text-primary @endif transition-colors">Layanan</a>
            <a href="{{ route('umkm') }}" class="text-body-md @if(request()->routeIs('umkm')) text-primary font-bold border-b-2 border-primary pb-1 @else text-on-surface-variant hover:text-primary @endif transition-colors">UMKM</a>
            <a href="{{ route('mahasiswa') }}" class="text-body-md @if(request()->routeIs('mahasiswa')) text-primary font-bold border-b-2 border-primary pb-1 @else text-on-surface-variant hover:text-primary @endif transition-colors">Mahasiswa</a>
            <a href="{{ route('properti-it-modern') }}" class="text-body-md @if(request()->routeIs('properti-it-modern')) text-primary font-bold border-b-2 border-primary pb-1 @else text-on-surface-variant hover:text-primary @endif transition-colors">Properti IT</a>
        </div>

        <div class="hidden md:flex items-center gap-stack-md">
            <a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20website" class="bg-primary text-on-primary px-6 py-2.5 rounded-full font-bold active:scale-95 transition-transform">Tanya Website</a>
        </div>

        <div class="flex items-center gap-2 md:hidden">
            <button id="mobile-menu-button" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white p-2.5 text-slate-700 shadow-sm transition hover:border-primary hover:text-primary" aria-label="Buka menu navigasi" aria-expanded="false">
                <span class="material-symbols-outlined text-[22px]">menu</span>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden border-t border-slate-200 bg-surface/95 px-margin-mobile pb-4 pt-3 shadow-[0_18px_30px_rgba(0,0,0,0.08)]">
        <div class="grid gap-2">
            <a href="{{ route('layanan') }}" class="rounded-2xl px-4 py-3 text-body-md @if(request()->routeIs('layanan')) text-primary font-bold bg-primary/5 @else text-on-surface-variant hover:bg-surface-container-low hover:text-primary @endif transition-colors">Layanan</a>
            <a href="{{ route('umkm') }}" class="rounded-2xl px-4 py-3 text-body-md @if(request()->routeIs('umkm')) text-primary font-bold bg-primary/5 @else text-on-surface-variant hover:bg-surface-container-low hover:text-primary @endif transition-colors">UMKM</a>
            <a href="{{ route('mahasiswa') }}" class="rounded-2xl px-4 py-3 text-body-md @if(request()->routeIs('mahasiswa')) text-primary font-bold bg-primary/5 @else text-on-surface-variant hover:bg-surface-container-low hover:text-primary @endif transition-colors">Mahasiswa</a>
            <a href="{{ route('properti-it-modern') }}" class="rounded-2xl px-4 py-3 text-body-md @if(request()->routeIs('properti-it-modern')) text-primary font-bold bg-primary/5 @else text-on-surface-variant hover:bg-surface-container-low hover:text-primary @endif transition-colors">Properti IT</a>
            <a href="https://wa.me/62881023806530?text=Mau%20tanya-tanya%20soal%20website" class="mt-2 rounded-full bg-primary px-6 py-3 font-bold text-on-primary transition active:scale-[0.99] text-center">Tanya Website</a>
        </div>
    </div>
</nav>

@yield('content')

<footer class="mt-section-gap border-t border-outline-variant bg-surface-container-highest/90 px-margin-mobile py-14 md:px-margin-desktop md:py-16">
    <div class="mx-auto flex max-w-container-max flex-col gap-12">
        <div class="grid gap-10 md:grid-cols-[1.2fr_0.8fr_0.8fr] md:items-start">
            <div class="space-y-5">
                <a href="{{ route('home') }}" class="flex items-center gap-4">
                    <span class="flex h-14 w-14 shrink-0 items-center justify-center overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm" aria-hidden="true">
                        <img src="{{ asset('assets/foto-berkemah.png') }}" alt="" class="h-full w-full object-cover">
                    </span>
                    <span class="font-headline-md text-2xl font-extrabold tracking-tight text-on-surface">Berkemah Team</span>
                </a>
                <p class="max-w-xl text-body-md text-on-surface-variant">Membantu UMKM dan mahasiswa dengan produk digital yang rapi, cepat dipahami, dan nyaman dipakai di layar kecil maupun besar.</p>
            </div>
            <div>
                <h4 class="text-sm font-bold uppercase tracking-[0.15em] text-on-surface-variant">Produk</h4>
                <ul class="mt-4 space-y-3 text-body-md text-on-surface">
                    <li><a href="{{ route('layanan') }}" class="hover:text-primary transition-colors">Layanan</a></li>
                    <li><a href="{{ route('umkm') }}" class="hover:text-primary transition-colors">UMKM</a></li>
                    <li><a href="{{ route('mahasiswa') }}" class="hover:text-primary transition-colors">Mahasiswa</a></li>
                    <li><a href="{{ route('properti-it-modern') }}" class="hover:text-primary transition-colors">Properti IT</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-bold uppercase tracking-[0.15em] text-on-surface-variant">Kontak</h4>
                <ul class="mt-4 space-y-3 text-body-md text-on-surface">
                    <li><a href="https://wa.me/62881023806530" class="hover:text-primary transition-colors">0881023806530</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Instagram</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col gap-4 border-t border-outline-variant pt-6 text-sm text-on-surface-variant md:flex-row md:items-center md:justify-between">
            <p>&copy; 2026 Berkemah Team. All rights reserved.</p>
            <div class="flex flex-wrap gap-x-6 gap-y-2">
                <a class="hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
                <a class="hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
                <a class="hover:text-primary transition-colors" href="#">Bantuan</a>
            </div>
        </div>
    </div>
</footer>

@stack('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var nav = document.querySelector('nav');
    var menuButton = document.getElementById('mobile-menu-button');
    var mobileMenu = document.getElementById('mobile-menu');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', function() {
            var isHidden = mobileMenu.classList.toggle('hidden');
            menuButton.setAttribute('aria-expanded', String(!isHidden));
        });
    }

    window.addEventListener('scroll', function() {
        if (window.scrollY > 20) {
            nav.classList.add('shadow-md');
        } else {
            nav.classList.remove('shadow-md');
        }
    });
});
</script>
</body>
</html>
