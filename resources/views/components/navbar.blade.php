<header class="sticky top-0 z-40 bg-[#4a070f]/95 backdrop-blur-md border-b border-red-900/60 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo & Title -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3.5 group">
                <div class="relative w-12 h-12 flex items-center justify-center transition group-hover:scale-105 duration-300">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo KBIHU Multazam Jadid At Thariq" class="w-full h-full object-contain filter drop-shadow">
                </div>
                <div>
                    <span class="block text-xs uppercase tracking-wider text-[#d4af37] font-semibold">Kelompok Bimbingan Haji & Umrah</span>
                    <span class="block font-heading text-lg sm:text-xl font-bold text-white tracking-wide leading-tight">
                        MULTAZAM JADID AT THARIQ
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center space-x-8 text-sm font-medium text-stone-200">
                <a href="{{ route('home') }}#beranda" class="hover:text-[#d4af37] transition py-1 border-b-2 border-transparent hover:border-[#d4af37]">Beranda</a>
                <a href="{{ route('home') }}#tentang" class="hover:text-[#d4af37] transition py-1 border-b-2 border-transparent hover:border-[#d4af37]">Tentang Kami</a>
                <a href="{{ route('home') }}#layanan" class="hover:text-[#d4af37] transition py-1 border-b-2 border-transparent hover:border-[#d4af37]">Layanan</a>
                <a href="{{ route('home') }}#pembimbing" class="hover:text-[#d4af37] transition py-1 border-b-2 border-transparent hover:border-[#d4af37]">Pembimbing</a>
                <a href="{{ route('home') }}#keunggulan" class="hover:text-[#d4af37] transition py-1 border-b-2 border-transparent hover:border-[#d4af37]">Keunggulan</a>
                <a href="{{ route('home') }}#faq" class="hover:text-[#d4af37] transition py-1 border-b-2 border-transparent hover:border-[#d4af37]">FAQ</a>
                <a href="{{ route('home') }}#kontak" class="hover:text-[#d4af37] transition py-1 border-b-2 border-transparent hover:border-[#d4af37]">Kontak</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden sm:flex items-center space-x-3">
                <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi pendaftaran KBIHU Multazam Jadid At Thariq') }}" 
                   target="_blank" 
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-xs font-bold text-[#2a0508] bg-gradient-to-r from-[#f5d97a] via-[#d4af37] to-[#c59e2b] hover:from-[#fbe28e] hover:to-[#d4af37] shadow-lg shadow-black/20 hover:shadow-[#d4af37]/20 transition duration-300 transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                    </svg>
                    <span>Konsultasi Cepat</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex lg:hidden">
                <button type="button" id="mobile-menu-btn" class="p-2 rounded-lg text-stone-200 hover:text-white hover:bg-red-900/60 focus:outline-none" aria-label="Toggle Menu">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-[#2a0508] border-b border-red-900 px-4 pt-3 pb-6 space-y-2">
        <a href="{{ route('home') }}#beranda" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-medium text-white hover:bg-red-900/60">Beranda</a>
        <a href="{{ route('home') }}#tentang" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-medium text-stone-200 hover:bg-red-900/60">Tentang Kami</a>
        <a href="{{ route('home') }}#layanan" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-medium text-stone-200 hover:bg-red-900/60">Layanan</a>
        <a href="{{ route('home') }}#pembimbing" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-medium text-stone-200 hover:bg-red-900/60">Pembimbing</a>
        <a href="{{ route('home') }}#keunggulan" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-medium text-stone-200 hover:bg-red-900/60">Keunggulan</a>
        <a href="{{ route('home') }}#faq" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-medium text-stone-200 hover:bg-red-900/60">FAQ</a>
        <a href="{{ route('home') }}#kontak" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-medium text-stone-200 hover:bg-red-900/60">Kontak</a>
        <a href="{{ route('privacy') }}" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-medium text-[#d4af37] hover:bg-red-900/60">Kebijakan Privasi</a>
        <div class="pt-4">
            <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi pendaftaran KBIHU Multazam Jadid At Thariq') }}" 
               target="_blank" 
               class="w-full flex items-center justify-center gap-2 px-5 py-3 rounded-xl text-sm font-bold text-[#2a0508] bg-gradient-to-r from-[#f5d97a] via-[#d4af37] to-[#c59e2b] shadow-md">
                <span>Konsultasi WhatsApp Sekarang</span>
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');

        menuBtn.addEventListener('click', function () {
            const isHidden = mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden', !isHidden);
            closeIcon.classList.toggle('hidden', isHidden);
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    });
</script>
