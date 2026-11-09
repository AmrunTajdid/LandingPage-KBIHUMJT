<section id="struktur" class="py-20 lg:py-28 bg-white relative border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-6">
            <div class="max-w-2xl space-y-3">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-50 text-rose-950 text-xs font-semibold tracking-wide border border-rose-200/60">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                    <span>Tata Kelola Organisasi</span>
                </div>
                
                <h2 class="font-serif-title text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">
                    Struktur Organisasi KBIHU Multazam Jadid At Thariq
                </h2>
                
                <p class="text-stone-600 text-sm leading-relaxed">
                    Dikelola oleh jajaran pengurus yang amanah, berpengalaman, dan berdedikasi tinggi dalam memberikan pelayanan terbaik bagi para tamu Allah.
                </p>
            </div>

            <!-- Button to open official image lightbox -->
            <div>
                <button type="button" 
                        onclick="openStructureModal()" 
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-xs sm:text-sm font-bold text-white bg-[#4a070f] hover:bg-[#2a0508] border border-[#d4af37]/40 shadow-md transition duration-300">
                    <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Lihat Bagan Resmi Organisasi</span>
                </button>
            </div>
        </div>

        <!-- Organizational Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($kbihu['organization_structure'] as $org)
                <div class="bg-[#FAFAF9] rounded-2xl p-6 border border-stone-200 hover:border-[#d4af37] hover:bg-white hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Role Badge -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-bold bg-rose-100 text-rose-950">
                                {{ $org['role'] }}
                            </span>
                            <span class="text-[10px] font-semibold text-stone-500 uppercase">
                                {{ $org['badge'] }}
                            </span>
                        </div>

                        <!-- Name -->
                        <h4 class="font-bold text-slate-900 text-base sm:text-lg mb-2 leading-snug">
                            {{ $org['name'] }}
                        </h4>

                        <!-- Description -->
                        <p class="text-xs text-stone-600 leading-relaxed">
                            {{ $org['desc'] }}
                        </p>
                    </div>

                    <div class="pt-4 mt-4 border-t border-stone-200/60 flex items-center gap-1.5 text-[11px] text-[#d4af37] font-semibold">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                        <span>Pengurus KBIHU Resmi</span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
