<footer class="bg-[#200406] text-stone-300 border-t border-red-950/70 pt-16 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-red-950/50">
            
            <!-- Col 1: Identity & Logo -->
            <div class="lg:col-span-5 space-y-4">
                <div class="flex items-center space-x-3.5">
                    <div class="w-12 h-12 flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo KBIHU Multazam Jadid At Thariq" class="w-full h-full object-contain filter drop-shadow">
                    </div>
                    <div>
                        <span class="block text-xs uppercase tracking-wider text-[#d4af37] font-semibold">KBIHU Resmi Kemenag RI</span>
                        <span class="block font-heading text-lg font-bold text-white tracking-wide">
                            MULTAZAM JADID AT THARIQ
                        </span>
                    </div>
                </div>

                <p class="text-xs text-stone-400 leading-relaxed max-w-sm">
                    Kelompok Bimbingan Ibadah Haji dan Umrah (KBIHU) Multazam Jadid At Thariq melayani bimbingan manasik komprehensif bersama pembimbing bersertifikasi resmi dan menyelenggarakan paket umrah dalam kemitraan resmi bersama PT Khairah Berkah Mandiri.
                </p>

                <!-- Partnership Tag in Footer -->
                <div class="pt-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs bg-red-950/60 text-[#d4af37] border border-red-900/60">
                        <span>🤝 Mitra Resmi Umrah: PT Khairah Berkah Mandiri (PPIU)</span>
                    </span>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="lg:col-span-3 space-y-4">
                <h4 class="text-xs font-bold text-white uppercase tracking-wider border-b border-red-900/60 pb-2">
                    Navigasi Cepat
                </h4>
                <ul class="space-y-2 text-xs text-stone-400">
                    <li><a href="{{ route('home') }}#beranda" class="hover:text-[#d4af37] transition">Beranda Utama</a></li>
                    <li><a href="{{ route('home') }}#tentang" class="hover:text-[#d4af37] transition">Tentang KBIHU</a></li>
                    <li><a href="{{ route('home') }}#layanan" class="hover:text-[#d4af37] transition">Bimbingan Haji Reguler</a></li>
                    <li><a href="{{ route('home') }}#layanan" class="hover:text-[#d4af37] transition">Paket Umrah Khairah Berkah</a></li>
                    <li><a href="{{ route('home') }}#pembimbing" class="hover:text-[#d4af37] transition">Profil Pembimbing Bersertifikasi</a></li>
                    <li><a href="{{ route('home') }}#struktur" class="hover:text-[#d4af37] transition">Struktur Organisasi</a></li>
                    <li><a href="{{ route('home') }}#faq" class="hover:text-[#d4af37] transition">Tanya Jawab (FAQ)</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-[#d4af37] hover:underline font-medium transition">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <!-- Col 3: Official Office Address -->
            <div class="lg:col-span-4 space-y-4">
                <h4 class="text-xs font-bold text-white uppercase tracking-wider border-b border-red-900/60 pb-2">
                    Sekretariat KBIHU
                </h4>
                <p class="text-xs text-stone-400 leading-relaxed">
                    {{ $kbihu['contact']['address'] }}
                </p>
                <div class="space-y-1.5 text-xs text-stone-300">
                    <p><strong class="text-stone-400">WhatsApp Admin:</strong> {{ $kbihu['contact']['phone_display'] }}</p>
                    <p><strong class="text-stone-400">Jam Layanan:</strong> {{ $kbihu['contact']['operational_hours'] }}</p>
                </div>
                <div class="pt-2">
                    <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin bertanya informasi pendaftaran di KBIHU Multazam Jadid At Thariq') }}" 
                       target="_blank" 
                       class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-xs font-bold text-[#2a0508] bg-[#d4af37] hover:bg-amber-400 transition">
                        <span>Chat WhatsApp Admin</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-stone-400 gap-4">
            <p>&copy; {{ date('Y') }} KBIHU Multazam Jadid At Thariq. Seluruh hak cipta dilindungi.</p>
            <div class="flex items-center gap-4">
                <a href="{{ route('privacy') }}" class="hover:text-[#d4af37] transition underline decoration-stone-600">Kebijakan Privasi</a>
                <span>&bull;</span>
                <span>Membimbing Menuju Kemabruran Ibadah Sesuai Sunnah</span>
            </div>
        </div>

    </div>
</footer>
