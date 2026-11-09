<section id="pembimbing" class="py-20 lg:py-28 bg-[#FAFAF9] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-100 text-rose-950 text-xs font-semibold tracking-wide">
                <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                <span>Sosok Pembimbing Anda</span>
            </div>
            
            <h2 class="font-serif-title text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">
                Pembimbing Berpengalaman & Bersertifikasi Resmi Kemenag
            </h2>
            
            <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
                Keabsahan dan kekhusyukan ibadah di Tanah Suci ditopang oleh keilmuan pembimbing. Di KBIHU Multazam Jadid At Thariq, Anda dibimbing langsung oleh tokoh yang telah mengantongi lisensi sertifikasi resmi.
            </p>
        </div>

        <!-- Mentors Grid (Spotlight Cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto">
            
            @foreach($kbihu['certified_mentors'] as $mentor)
                <div class="bg-white rounded-3xl p-8 sm:p-10 border border-stone-200/90 shadow-xl shadow-stone-200/50 relative overflow-hidden flex flex-col justify-between group hover:border-[#d4af37] transition duration-300">
                    
                    <!-- Top Golden Accent Bar -->
                    <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-[#4a070f] via-[#d4af37] to-[#2a0508]"></div>

                    <div>
                        <!-- Header with Certification Badge -->
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-6">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-rose-50 text-rose-950 border border-rose-200">
                                <svg class="w-3.5 h-3.5 text-[#d4af37]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $mentor['certification'] }}</span>
                            </span>

                            <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">
                                KBIHU Multazam
                            </span>
                        </div>

                        <!-- Name & Role -->
                        <h3 class="font-serif-title text-2xl sm:text-3xl font-bold text-slate-900 mb-2">
                            {{ $mentor['name'] }}
                        </h3>
                        <p class="text-sm font-semibold text-[#d4af37] mb-4">
                            {{ $mentor['role'] }}
                        </p>

                        <!-- Experience summary -->
                        <div class="p-4 rounded-2xl bg-stone-50 border border-stone-100 mb-6 flex items-start gap-3">
                            <div class="w-8 h-8 rounded-xl bg-[#4a070f] text-[#d4af37] flex items-center justify-center shrink-0 text-xs font-bold mt-0.5">
                                🏅
                            </div>
                            <p class="text-xs text-stone-700 leading-relaxed font-medium">
                                {{ $mentor['experience'] }}
                            </p>
                        </div>

                        <!-- Quote / Philosophy -->
                        <blockquote class="italic text-stone-600 text-sm leading-relaxed border-l-2 border-[#d4af37] pl-4 mb-6">
                            "{{ $mentor['quote'] }}"
                        </blockquote>
                    </div>

                    <!-- Direct Consultation Action -->
                    <div class="pt-6 border-t border-stone-100">
                        <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi bimbingan manasik dengan pembimbing KBIHU Multazam Jadid At Thariq: ' . $mentor['name']) }}" 
                           target="_blank"
                           class="w-full inline-flex items-center justify-center gap-2 py-3 px-5 rounded-xl text-xs font-bold text-slate-800 bg-stone-100 hover:bg-[#4a070f] hover:text-white transition duration-300">
                            <span>Konsultasi dengan Tim Pembimbing</span>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>
