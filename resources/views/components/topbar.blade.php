<div class="bg-[#022c22] text-stone-300 text-xs border-b border-emerald-900/40 hidden md:block">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2.5 flex justify-between items-center">
        <!-- Lokasi & Jam Operasional -->
        <div class="flex items-center space-x-6">
            <div class="flex items-center space-x-2">
                <svg class="w-3.5 h-3.5 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Jl. Rawa Bebek Rt 12 Rw 01 No.58, Pulogebang, Cakung, Jakarta Timur</span>
            </div>
            <div class="flex items-center space-x-2 text-stone-400">
                <svg class="w-3.5 h-3.5 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>{{ $kbihu['contact']['operational_hours'] }}</span>
            </div>
        </div>

        <!-- Partnership Pill & Direct WA -->
        <div class="flex items-center space-x-5">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-emerald-900/60 text-emerald-200 border border-emerald-700/50">
                <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37] animate-pulse"></span>
                Mitra Resmi Umrah: PT Khairah Berkah Mandiri
            </span>
            <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin bertanya informasi pendaftaran di KBIHU Multazam Jadid At Thariq') }}" 
               target="_blank" 
               class="hover:text-[#d4af37] transition flex items-center gap-1.5 font-medium">
                <svg class="w-3.5 h-3.5 text-[#d4af37]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.592 2.654-.696c1.001.558 1.942.844 3.006.844h.005c3.178 0 5.766-2.587 5.767-5.766 0-3.18-2.588-5.767-5.767-5.767zm0 10.428h-.004c-.927 0-1.802-.271-2.581-.762l-.185-.11-1.923.504.513-1.874-.121-.193c-.544-.866-.867-1.815-.866-2.927.001-2.627 2.138-4.764 4.766-4.764 2.628 0 4.765 2.137 4.765 4.764 0 2.627-2.137 4.764-4.765 4.764z"/>
                </svg>
                <span>{{ $kbihu['contact']['phone_display'] }}</span>
            </a>
        </div>
    </div>
</div>
