@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan | Berkemah Team')
@section('meta_description', 'Halaman yang Anda cari tidak ditemukan. Mari kembali ke beranda Berkemah Team.')

@section('content')
<main class="flex flex-col px-4 pt-32 pb-16 min-h-screen sm:px-6 lg:px-8 lg:pt-40">
    <div class="w-full max-w-3xl mx-auto my-auto text-center">
        {{-- Fluid & Organic 404 Graphic --}}
        <div class="relative flex justify-center mb-12">
            <style>
                @keyframes float-blob {
                    0% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; transform: translate(0, 0) rotate(0deg); }
                    50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; transform: translate(-10px, -15px) rotate(5deg); }
                    100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; transform: translate(0, 0) rotate(0deg); }
                }
                @keyframes float-blob-alt {
                    0% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; transform: translate(0, 0) rotate(0deg); }
                    50% { border-radius: 70% 30% 50% 50% / 60% 40% 50% 40%; transform: translate(15px, 10px) rotate(-5deg); }
                    100% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; transform: translate(0, 0) rotate(0deg); }
                }
                @keyframes bounce-num-1 { 
                    0%, 100% { transform: translateY(0) rotate(-4deg); } 
                    50% { transform: translateY(-20px) rotate(4deg); } 
                }
                @keyframes bounce-num-2 { 
                    0%, 100% { transform: translateY(-10px) rotate(2deg) scale(0.95); } 
                    50% { transform: translateY(10px) rotate(-2deg) scale(1.05); } 
                }
                @keyframes bounce-num-3 { 
                    0%, 100% { transform: translateY(0) rotate(5deg); } 
                    50% { transform: translateY(-15px) rotate(-5deg); } 
                }
                @keyframes search-glass {
                    0% { transform: translate(0, 0) rotate(0deg); }
                    30% { transform: translate(-45px, -20px) rotate(-15deg); }
                    60% { transform: translate(35px, 15px) rotate(12deg); }
                    80% { transform: translate(15px, 35px) rotate(5deg); }
                    100% { transform: translate(0, 0) rotate(0deg); }
                }
            </style>
            
            <div class="relative w-full max-w-[460px] h-[300px] flex items-center justify-center">
                <!-- Organic Liquid Blob Background -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-[260px] h-[260px] sm:w-[320px] sm:h-[320px] bg-primary/10 absolute mix-blend-multiply transition-all" style="animation: float-blob 10s ease-in-out infinite;"></div>
                    <div class="w-[240px] h-[240px] sm:w-[280px] sm:h-[280px] bg-primary-fixed/60 absolute mix-blend-multiply transition-all" style="animation: float-blob-alt 12s ease-in-out infinite;"></div>
                    <!-- Soft center glow -->
                    <div class="w-[150px] h-[150px] bg-primary/20 absolute blur-2xl rounded-full"></div>
                </div>

                <!-- Playful Bouncing 404 Characters -->
                <div class="relative z-10 flex items-center justify-center gap-2 select-none md:gap-4">
                    <span class="text-[110px] sm:text-[140px] font-black text-primary drop-shadow-sm inline-block" style="animation: bounce-num-1 4s ease-in-out infinite;">4</span>
                    <span class="text-[110px] sm:text-[140px] font-black text-outline-variant drop-shadow-sm inline-block" style="animation: bounce-num-2 5s ease-in-out infinite;">0</span>
                    <span class="text-[110px] sm:text-[140px] font-black text-primary drop-shadow-sm inline-block" style="animation: bounce-num-3 4.5s ease-in-out infinite;">4</span>
                </div>

                <!-- Animated Magnifying Glass -->
                <div class="absolute z-20 w-28 h-28 sm:w-32 sm:h-32 text-primary pointer-events-none" style="animation: search-glass 8s ease-in-out infinite; left: 45%; top: 15%;">
                    <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full drop-shadow-md">
                        <!-- Glass reflection -->
                        <circle cx="45" cy="45" r="30" fill="rgba(255,255,255,0.8)" />
                        <path d="M 28 28 Q 45 15 62 28" stroke="white" stroke-width="5" stroke-linecap="round" fill="none" opacity="0.9"/>
                        <!-- Frame -->
                        <circle cx="45" cy="45" r="30" stroke="currentColor" stroke-width="8" />
                        <!-- Handle -->
                        <path d="M 64 64 L 84 84" stroke="currentColor" stroke-width="14" stroke-linecap="round" />
                        <!-- Inner detail on handle -->
                        <path d="M 70 70 L 80 80" stroke="#dae1ff" stroke-width="4" stroke-linecap="round" />
                        <!-- Ring at the end -->
                        <circle cx="89" cy="89" r="4" fill="none" stroke="currentColor" stroke-width="3" />
                    </svg>
                </div>

                <!-- Tiny organic floating elements -->
                <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 460 300">
                    <!-- Soft Cloud 1 -->
                    <path d="M 360 60 Q 370 45 390 50 Q 410 45 415 65 Q 425 75 405 85 L 360 85 Q 340 75 360 60 Z" fill="#dae1ff" opacity="0.9" style="animation: bounce-num-3 7s infinite;" />
                    <!-- Soft Cloud 2 -->
                    <path d="M 80 230 Q 90 215 110 220 Q 130 215 135 235 Q 145 245 125 255 L 80 255 Q 60 245 80 230 Z" fill="#e5e2e1" opacity="0.7" style="animation: bounce-num-1 6s infinite; animation-delay: 1s;" />
                    <!-- Dot -->
                    <circle cx="90" cy="70" r="4" fill="#dae1ff" class="animate-pulse" style="animation-duration: 3s;" />
                </svg>

                <!-- Floating Badges -->
                <div class="absolute bottom-4 right-4 sm:right-10 bg-white border border-outline-variant/30 rounded-full px-4 py-2 flex items-center gap-2 shadow-sm" style="animation: bounce-num-2 6s ease-in-out infinite; animation-delay: 1.5s;">
                    <div class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-error opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-error"></span>
                    </div>
                    <span class="text-[11px] sm:text-xs font-bold text-on-surface-variant">Jejak Hilang</span>
                </div>
            </div>
        </div>

        {{-- Copywriting --}}
        <h2 class="font-bold tracking-tight font-headline-md text-headline-xl-mobile sm:text-headline-xl text-on-surface">
            Waduh, sepertinya kita tersesat!
        </h2>
        
        <p class="max-w-xl mx-auto mt-6 text-body-lg text-on-surface-variant">
            Halaman yang Anda cari mungkin telah dipindahkan, diganti namanya, atau mungkin tidak pernah ada. Jangan khawatir, mari kita kembali ke jalur yang benar.
        </p>

        {{-- Actions --}}
        <div class="flex flex-col items-center justify-center gap-4 mt-12 sm:flex-row">
            <a href="{{ route('home') }}" class="inline-flex items-center justify-center w-full gap-2 px-8 py-4 font-bold transition-all rounded-full sm:w-auto bg-primary text-on-primary hover:shadow-[0_8px_20px_rgba(0,80,203,0.3)] active:scale-95">
                <span class="material-symbols-outlined text-[20px]">home</span>
                Kembali ke Beranda
            </a>
            
            <a href="https://wa.me/62881023806530?text=Halo%20tim%20Berkemah,%20saya%20menemukan%20halaman%20error%20404." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full gap-2 px-8 py-4 font-bold transition-colors border-2 rounded-full sm:w-auto border-outline-variant text-on-surface hover:border-primary hover:text-primary active:scale-95">
                <span class="material-symbols-outlined text-[20px]">support_agent</span>
                Hubungi Bantuan
            </a>
        </div>
    </div>
</main>
@endsection
