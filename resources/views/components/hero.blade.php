<section id="beranda" class="relative bg-gradient-to-b from-[#022c22] via-[#064e3b] to-[#043327] text-white pt-16 pb-24 md:pt-20 md:pb-32 overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>

    <!-- Decorative Glow Circles -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#d4af37]/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 -right-32 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Copywriting & Actions -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Bismillah / Top Label -->
                <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-emerald-950/70 border border-[#d4af37]/40 text-[#d4af37] text-xs font-medium tracking-wide shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-[#d4af37] animate-ping"></span>
                    <span>Kelompok Bimbingan Ibadah Haji & Umrah Resmi</span>
                </div>

                <!-- Main Headline -->
                <h1 class="font-serif-title text-3xl sm:text-4xl md:text-5xl lg:text-[3.25rem] font-bold text-white leading-tight tracking-tight">
                    Membimbing Sepenuh Hati Menuju 
                    <span class="text-gold-gradient block mt-1">Haji Mabrur & Umrah Berkah</span>
                    Sesuai Sunnah
                </h1>

                <!-- Sub-headline -->
                <p class="text-base sm:text-lg text-stone-200 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                    Dapatkan bimbingan manasik intensif dari pembimbing <strong>bersertifikasi resmi Kemenag RI</strong> serta program umrah berkualitas dalam kemitraan resmi bersama <strong>PT Khairah Berkah Mandiri</strong>.
                </p>

                <!-- Action Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi pendaftaran Bimbingan Haji di KBIHU Multazam Jadid At Thariq') }}" 
                       target="_blank" 
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-xl text-sm font-bold text-emerald-950 bg-gradient-to-r from-[#f5d97a] via-[#d4af37] to-[#c59e2b] hover:from-[#fae498] hover:to-[#dfb536] shadow-xl shadow-black/30 hover:shadow-[#d4af37]/25 transition duration-300 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                        </svg>
                        <span>Daftar Bimbingan Haji</span>
                    </a>

                    <a href="#layanan" 
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl text-sm font-semibold text-white bg-white/10 hover:bg-white/20 border border-white/20 hover:border-[#d4af37] transition duration-300 backdrop-blur-sm">
                        <span>Pilihan Paket Umrah</span>
                        <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Trust Points Badges -->
                <div class="pt-6 border-t border-emerald-800/60 grid grid-cols-2 sm:grid-cols-3 gap-4 text-left">
                    <div class="flex items-center space-x-2.5">
                        <div class="w-8 h-8 rounded-lg bg-emerald-900/80 border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-white">Pembimbing Resmi</p>
                            <p class="text-[11px] text-stone-300">Tersertifikasi Kemenag</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2.5">
                        <div class="w-8 h-8 rounded-lg bg-emerald-900/80 border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-white">Mitra PT Khairah</p>
                            <p class="text-[11px] text-stone-300">Berkah Mandiri (PPIU)</p>
                        </div>
                    </div>

                    <div class="col-span-2 sm:col-span-1 flex items-center space-x-2.5">
                        <div class="w-8 h-8 rounded-lg bg-emerald-900/80 border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-white">Peduli Lansia</p>
                            <p class="text-[11px] text-stone-300">Penuh Kekeluargaan</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Visual Bento & Logo Showcase -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-sm sm:max-w-md lg:max-w-none">
                    
                    <!-- Decorative Golden Frame -->
                    <div class="absolute -inset-1.5 rounded-3xl bg-gradient-to-tr from-[#d4af37] via-amber-200 to-emerald-600 opacity-30 blur-lg"></div>

                    <!-- Main Showcase Card -->
                    <div class="relative bg-gradient-to-b from-[#064e3b] to-[#022c22] border border-[#d4af37]/40 rounded-3xl p-6 sm:p-8 shadow-2xl overflow-hidden text-center">
                        
                        <!-- Logo Centered (Transparent without background box) -->
                        <div class="relative mx-auto w-32 h-32 sm:w-40 sm:h-40 mb-6 flex items-center justify-center">
                            <div class="absolute inset-2 rounded-full bg-white/10 blur-xl pointer-events-none"></div>
                            <img src="{{ asset('images/logo.png') }}" alt="Logo Resmi KBIHU Multazam Jadid At Thariq" class="w-full h-full object-contain filter drop-shadow-[0_8px_20px_rgba(0,0,0,0.5)] transition hover:scale-105 duration-300 relative z-10">
                        </div>

                        <!-- Card Info -->
                        <span class="inline-block text-xs uppercase tracking-widest text-[#d4af37] font-semibold mb-1">KBIHU Resmi Kemenag</span>
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-white mb-2">
                            MULTAZAM JADID AT THARIQ
                        </h3>
                        <p class="text-xs text-stone-300 leading-relaxed max-w-xs mx-auto mb-6">
                            Menyelenggarakan bimbingan manasik komprehensif, fiqih sesuai tuntunan Rasulullah SAW, serta pendampingan langsung di Tanah Suci.
                        </p>

                        <!-- Highlight Micro-Stats Bento -->
                        <div class="grid grid-cols-2 gap-3 pt-4 border-t border-emerald-800/80 text-left">
                            <div class="bg-emerald-950/70 p-3 rounded-xl border border-emerald-800/50">
                                <span class="block text-xl font-bold text-[#d4af37]">15+ Th</span>
                                <span class="text-[11px] text-stone-300">Pengalaman Pembimbing</span>
                            </div>
                            <div class="bg-emerald-950/70 p-3 rounded-xl border border-emerald-800/50">
                                <span class="block text-xl font-bold text-[#d4af37]">100%</span>
                                <span class="text-[11px] text-stone-300">Resmi & Bersertifikasi</span>
                            </div>
                        </div>

                    </div>

                    <!-- Floating Badge: Mitra Resmi PT Khairah Berkah Mandiri -->
                    <div class="absolute -bottom-6 -left-4 sm:-left-6 bg-white rounded-2xl p-3.5 shadow-xl border border-amber-200 flex items-center space-x-3 max-w-[260px] sm:max-w-xs animate-bounce" style="animation-duration: 4s;">
                        <div class="w-10 h-10 rounded-xl bg-emerald-800 text-[#d4af37] flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-stone-500 uppercase font-semibold">Kerjasama Umrah Resmi</p>
                            <p class="text-xs font-bold text-slate-900 leading-tight">PT Khairah Berkah Mandiri</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
