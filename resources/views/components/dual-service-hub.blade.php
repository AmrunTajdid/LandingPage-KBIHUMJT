<section id="layanan" class="py-20 lg:py-28 bg-white relative border-y border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-12">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 text-emerald-800 text-xs font-semibold tracking-wide border border-emerald-200/60">
                <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                <span>Layanan Utama KBIHU</span>
            </div>
            
            <h2 class="font-serif-title text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">
                Program Bimbingan Haji & Paket Umrah Resmi
            </h2>
            
            <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
                Pilih layanan sesuai kebutuhan ibadah Anda. Kami menyediakan pendampingan intensif bagi calon jamaah haji reguler dan penyelenggaraan paket umrah resmi bersama PT Khairah Berkah Mandiri.
            </p>
        </div>

        <!-- Interactive Service Tabs Switcher -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex p-1.5 bg-stone-100 rounded-2xl border border-stone-200 shadow-inner">
                <button type="button" 
                        id="tab-btn-haji" 
                        onclick="switchServiceTab('haji')" 
                        class="service-tab-btn px-6 sm:px-8 py-3 rounded-xl text-xs sm:text-sm font-bold transition-all duration-300 shadow-sm bg-emerald-900 text-white flex items-center gap-2">
                    <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    <span>Bimbingan Ibadah Haji</span>
                </button>

                <button type="button" 
                        id="tab-btn-umrah" 
                        onclick="switchServiceTab('umrah')" 
                        class="service-tab-btn px-6 sm:px-8 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-300 text-stone-600 hover:text-slate-900 flex items-center gap-2">
                    <svg class="w-4 h-4 text-emerald-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Paket Umrah (PT Khairah)</span>
                </button>
            </div>
        </div>

        <!-- ================= TAB 1: BIMBINGAN HAJI CONTENT ================= -->
        <div id="tab-content-haji" class="space-y-12 transition-opacity duration-300">
            
            <!-- Haji Hero Banner Card -->
            <div class="bg-gradient-to-br from-[#064e3b] via-[#043327] to-[#022c22] rounded-3xl p-8 sm:p-10 text-white shadow-xl relative overflow-hidden border border-[#d4af37]/30">
                <div class="absolute -right-10 -bottom-10 w-72 h-72 bg-[#d4af37]/10 rounded-full blur-2xl pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                    <div class="lg:col-span-8 space-y-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-emerald-950/80 text-[#d4af37] text-xs font-semibold border border-[#d4af37]/30">
                            Program Resmi Bimbingan Haji Reguler
                        </span>
                        <h3 class="font-serif-title text-2xl sm:text-3xl font-bold leading-tight">
                            Bimbingan Manasik Intensif, Fiqih Shahih & Pendampingan Armuzna
                        </h3>
                        <p class="text-stone-300 text-sm leading-relaxed max-w-2xl">
                            Kami memastikan setiap calon jamaah haji tidak merasa kebingungan atau cemas. Dari sebelum keberangkatan, saat pelaksanaan wukuf di Arafah, mabit di Muzdalifah, melontar di Mina, hingga thawaf ifadhah di Makkah, Anda didampingi oleh pembimbing bersertifikasi resmi.
                        </p>
                        
                        <div class="pt-2 flex flex-wrap gap-4">
                            <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi pendaftaran Program Bimbingan Haji di KBIHU Multazam Jadid At Thariq') }}" 
                               target="_blank"
                               class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-xs sm:text-sm font-bold text-emerald-950 bg-gradient-to-r from-[#f5d97a] via-[#d4af37] to-[#c59e2b] hover:from-[#fae498] hover:to-[#dfb536] shadow-lg transition transform hover:-translate-y-0.5">
                                <span>Daftar Bimbingan Haji Sekarang</span>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Highlights Box -->
                    <div class="lg:col-span-4 bg-emerald-950/80 rounded-2xl p-6 border border-emerald-800 space-y-4 text-xs">
                        <h4 class="font-bold text-[#d4af37] uppercase tracking-wider text-xs border-b border-emerald-800 pb-2">
                            Fasilitas Bimbingan Haji:
                        </h4>
                        <ul class="space-y-2.5 text-stone-200">
                            @foreach($kbihu['haji_program']['features'] as $feat)
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-[#d4af37] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>{{ $feat }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Manasik Stages Curriculum -->
            <div>
                <div class="mb-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-800">Tahapan Bimbingan</span>
                    <h3 class="font-serif-title text-2xl font-bold text-slate-900 mt-1">
                        Kurikulum Manasik Bertahap & Sistematis
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    @foreach($kbihu['haji_program']['manasik_curriculum'] as $step)
                        <div class="bg-[#FAFAF9] p-5 rounded-2xl border border-stone-200 hover:border-[#d4af37] hover:bg-white hover:shadow-md transition duration-300">
                            <span class="inline-block text-xs font-bold text-[#d4af37] px-2 py-0.5 rounded bg-emerald-950 mb-3">
                                Langkah {{ $step['step'] }}
                            </span>
                            <h4 class="text-sm font-bold text-slate-900 mb-2 leading-snug">
                                {{ $step['title'] }}
                            </h4>
                            <p class="text-xs text-stone-600 leading-relaxed">
                                {{ $step['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- ================= TAB 2: PAKET UMRAH (PT KHAIRAH BERKAH MANDIRI) ================= -->
        <div id="tab-content-umrah" class="hidden space-y-10 transition-opacity duration-300">
            
            <!-- Partnership Banner Notice -->
            <div class="p-6 rounded-2xl bg-gradient-to-r from-emerald-50 via-amber-50/50 to-stone-50 border border-emerald-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-800 text-[#d4af37] flex items-center justify-center font-bold text-lg shrink-0 shadow">
                        🤝
                    </div>
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-900">Kemitraan Resmi Penyelenggara Umrah</span>
                        <h4 class="text-base font-bold text-slate-900">KBIHU Multazam Jadid At Thariq &times; PT Khairah Berkah Mandiri</h4>
                        <p class="text-xs text-stone-600 mt-0.5">
                            Menjamin legalitas izin Kementerian Agama, kepastian tiket pesawat direct, hotel dekat Masjidil Haram, serta bimbingan muthawwif terpercaya.
                        </p>
                    </div>
                </div>

                <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin bertanya jadwal dan info paket Umrah PT Khairah Berkah Mandiri bersama KBIHU Multazam') }}" 
                   target="_blank"
                   class="shrink-0 inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs font-bold text-emerald-950 bg-[#d4af37] hover:bg-amber-400 transition shadow">
                    <span>Tanya Jadwal Keberangkatan</span>
                </a>
            </div>

            <!-- Umrah Package Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($kbihu['umrah_packages'] as $pkg)
                    <div class="bg-white rounded-3xl border border-stone-200/90 hover:border-[#d4af37] shadow-lg hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden group">
                        
                        <!-- Card Header -->
                        <div class="p-6 sm:p-7 border-b border-stone-100 bg-gradient-to-b from-stone-50/70 to-white">
                            <div class="flex justify-between items-start mb-3">
                                <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-900">
                                    {{ $pkg['category'] }}
                                </span>
                                <span class="text-xs font-semibold text-[#d4af37] flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $pkg['duration'] }}
                                </span>
                            </div>

                            <h3 class="font-serif-title text-xl font-bold text-slate-900 group-hover:text-emerald-900 transition">
                                {{ $pkg['name'] }}
                            </h3>
                            <p class="text-xs text-stone-500 mt-2 leading-relaxed">
                                {{ $pkg['desc'] }}
                            </p>
                        </div>

                        <!-- Facilities List -->
                        <div class="p-6 sm:p-7 space-y-4 flex-1">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-800 block">
                                Fasilitas Termasuk:
                            </span>
                            <ul class="space-y-2.5 text-xs text-stone-600">
                                @foreach($pkg['facilities'] as $fac)
                                    <li class="flex items-start gap-2">
                                        <svg class="w-4 h-4 text-emerald-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>{{ $fac }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Card Action -->
                        <div class="p-6 sm:p-7 pt-0 border-t border-stone-100 bg-stone-50/40">
                            <div class="text-[11px] text-stone-500 italic mb-4">
                                *{{ $pkg['notes'] }}
                            </div>
                            
                            <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi dan informasi detail ' . $pkg['name'] . ' (PT Khairah Berkah Mandiri x KBIHU Multazam Jadid At Thariq)') }}" 
                               target="_blank" 
                               class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl text-xs font-bold text-emerald-950 bg-gradient-to-r from-[#f5d97a] via-[#d4af37] to-[#c59e2b] hover:from-[#fae498] hover:to-[#dfb536] shadow transition">
                                <span>Pilih Paket & Tanya Biaya</span>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>

    </div>
</section>

<script>
    function switchServiceTab(tab) {
        const btnHaji = document.getElementById('tab-btn-haji');
        const btnUmrah = document.getElementById('tab-btn-umrah');
        const contentHaji = document.getElementById('tab-content-haji');
        const contentUmrah = document.getElementById('tab-content-umrah');

        if (tab === 'haji') {
            // Button Styles
            btnHaji.className = 'service-tab-btn px-6 sm:px-8 py-3 rounded-xl text-xs sm:text-sm font-bold transition-all duration-300 shadow-sm bg-emerald-900 text-white flex items-center gap-2';
            btnUmrah.className = 'service-tab-btn px-6 sm:px-8 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-300 text-stone-600 hover:text-slate-900 flex items-center gap-2';
            
            // Content Toggle
            contentHaji.classList.remove('hidden');
            contentUmrah.classList.add('hidden');
        } else {
            // Button Styles
            btnUmrah.className = 'service-tab-btn px-6 sm:px-8 py-3 rounded-xl text-xs sm:text-sm font-bold transition-all duration-300 shadow-sm bg-emerald-900 text-white flex items-center gap-2';
            btnHaji.className = 'service-tab-btn px-6 sm:px-8 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-300 text-stone-600 hover:text-slate-900 flex items-center gap-2';
            
            // Content Toggle
            contentHaji.classList.add('hidden');
            contentUmrah.classList.remove('hidden');
        }
    }
</script>
