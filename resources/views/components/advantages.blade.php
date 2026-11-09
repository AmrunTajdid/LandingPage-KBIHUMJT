<section id="keunggulan" class="py-20 lg:py-28 bg-[#FAFAF9] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100 text-emerald-900 text-xs font-semibold tracking-wide">
                <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                <span>Kenapa Memilih Kami?</span>
            </div>
            
            <h2 class="font-serif-title text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">
                6 Pilar Keunggulan KBIHU Multazam Jadid At Thariq
            </h2>
            
            <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
                Kami meletakkan amanah dan kenyamanan ibadah jamaah di atas segalanya dengan standar bimbingan syar'i dan kepengurusan yang terpercaya.
            </p>
        </div>

        <!-- 6 Bento Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($kbihu['advantages'] as $index => $adv)
                <div class="bg-white rounded-3xl p-8 border border-stone-200/90 hover:border-[#d4af37] shadow-lg hover:shadow-xl transition-all duration-300 relative group overflow-hidden flex flex-col justify-between">
                    
                    <div>
                        <!-- Icon Circle with Gold / Emerald Accent -->
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 border border-emerald-100 text-emerald-900 group-hover:bg-emerald-900 group-hover:text-[#d4af37] flex items-center justify-center transition duration-300 mb-6 shadow-sm">
                            @if($adv['icon'] === 'award')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            @elseif($adv['icon'] === 'book-open')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            @elseif($adv['icon'] === 'shield-check')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            @elseif($adv['icon'] === 'users')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            @elseif($adv['icon'] === 'heart-handshake')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            @else
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            @endif
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif-title text-xl font-bold text-slate-900 mb-3 group-hover:text-emerald-900 transition">
                            {{ $adv['title'] }}
                        </h3>

                        <!-- Description -->
                        <p class="text-stone-600 text-xs sm:text-sm leading-relaxed">
                            {{ $adv['desc'] }}
                        </p>
                    </div>

                    <div class="pt-6 mt-6 border-t border-stone-100 flex items-center justify-between">
                        <span class="text-xs font-bold text-[#d4af37]">0{{ $index + 1 }} / 06</span>
                        <span class="text-[11px] text-stone-500 font-semibold">KBIHU Terpercaya</span>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
