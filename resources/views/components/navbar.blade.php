<nav class="bg-white shadow-lg fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <div class="shrink-0">
                    <a href="/" class="brand-lockup" aria-label="Berkemah Team">
                        <span class="brand-logo shrink-0" aria-hidden="true">
                            <img src="{{ asset('assets/foto-berkemah.png') }}" alt="" class="h-full w-full rounded-[inherit] object-cover">
                        </span>
                        <span class="text-base min-[380px]:text-lg sm:text-2xl font-extrabold uppercase tracking-[0.08em] sm:tracking-[0.12em] text-black leading-none">
                            BERKEMAH TEAM
                        </span>
                    </a>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="/#home" class="text-gray-700 hover:text-slate-900 px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                    <a href="/#journey" class="text-gray-700 hover:text-slate-900 px-3 py-2 rounded-md text-sm font-medium transition-colors">Perjalanan</a>
                    <a href="/#products" class="text-gray-700 hover:text-slate-900 px-3 py-2 rounded-md text-sm font-medium transition-colors">Produk</a>
                    <a href="/#about" class="text-gray-700 hover:text-slate-900 px-3 py-2 rounded-md text-sm font-medium transition-colors">Tentang</a>
                </div>
            </div>

            <div class="hidden md:block">
                <a href="/#products" class="bg-slate-900 text-white px-6 py-2 rounded-full text-sm font-medium hover:bg-slate-700 transition-all duration-300">
                    Lihat Produk
                </a>
            </div>

            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-slate-900 focus:outline-none p-2 -mr-2" aria-label="Buka menu navigasi">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/#home" class="text-gray-700 hover:text-slate-900 block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="/#journey" class="text-gray-700 hover:text-slate-900 block px-3 py-2 rounded-md text-base font-medium">Perjalanan</a>
            <a href="/#products" class="text-gray-700 hover:text-slate-900 block px-3 py-2 rounded-md text-base font-medium">Produk</a>
            <a href="/#about" class="text-gray-700 hover:text-slate-900 block px-3 py-2 rounded-md text-base font-medium">Tentang</a>
            <a href="/#products" class="bg-slate-900 text-white block px-3 py-2 rounded-md text-base font-medium text-center mt-2">
                Lihat Produk
            </a>
        </div>
    </div>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</nav>
