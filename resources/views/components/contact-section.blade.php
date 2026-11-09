<section id="kontak" class="py-20 lg:py-28 bg-white relative border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left Column: Official Office Information -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-50 text-rose-950 text-xs font-semibold tracking-wide border border-rose-200/60">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                    <span>Sekretariat & Pelayanan</span>
                </div>

                <h2 class="font-serif-title text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">
                    Kunjungi Kantor Kami atau Konsultasi Online
                </h2>

                <p class="text-stone-600 text-sm leading-relaxed">
                    Kami menyambut hangat kedatangan calon jamaah dan keluarga untuk bersilaturahmi, berdiskusi mengenai porsi haji, jadwal manasik, atau informasi program umrah bersama PT Khairah Berkah Mandiri.
                </p>

                <!-- Contact Info Cards -->
                <div class="space-y-4 pt-2">
                    
                    <!-- Address Card -->
                    <div class="p-5 rounded-2xl bg-[#FAFAF9] border border-stone-200 flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-[#4a070f] text-[#d4af37] flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-slate-900 uppercase tracking-wider block">Alamat Sekretariat:</span>
                            <p class="text-xs sm:text-sm text-stone-600 mt-1 leading-relaxed">
                                {{ $kbihu['contact']['address'] }}
                            </p>
                            <a href="https://maps.google.com/?q={{ urlencode($kbihu['contact']['address']) }}" 
                               target="_blank" 
                               class="inline-flex items-center gap-1.5 text-xs font-bold text-rose-950 hover:text-red-900 mt-2">
                                <span>Buka Petunjuk Arah di Google Maps</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- WhatsApp Card -->
                    <div class="p-5 rounded-2xl bg-[#FAFAF9] border border-stone-200 flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-[#4a070f] text-[#d4af37] flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-slate-900 uppercase tracking-wider block">Layanan WhatsApp Admin:</span>
                            <p class="text-xs sm:text-sm font-semibold text-rose-950 mt-1">
                                {{ $kbihu['contact']['phone_display'] }}
                            </p>
                            <span class="text-[11px] text-stone-500 block mt-0.5">
                                Responsif setiap hari jam kerja
                            </span>
                        </div>
                    </div>

                    <!-- Hours Card -->
                    <div class="p-5 rounded-2xl bg-[#FAFAF9] border border-stone-200 flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-[#4a070f] text-[#d4af37] flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-slate-900 uppercase tracking-wider block">Jam Layanan Kantor:</span>
                            <p class="text-xs sm:text-sm text-stone-700 mt-1 font-medium">
                                {{ $kbihu['contact']['operational_hours'] }}
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Right Column: Instant WhatsApp Form Generator -->
            <div class="lg:col-span-7">
                <div class="bg-gradient-to-b from-[#4a070f] to-[#200406] rounded-3xl p-8 sm:p-10 text-white shadow-2xl border border-[#d4af37]/40 relative overflow-hidden">
                    
                    <!-- Background Glow -->
                    <div class="absolute -right-16 -top-16 w-64 h-64 bg-[#d4af37]/15 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="relative z-10 space-y-6">
                        <div>
                            <span class="inline-block px-3 py-1 rounded-full bg-red-950/80 text-[#d4af37] text-xs font-semibold border border-[#d4af37]/30 mb-2">
                                Form Konsultasi Praktis
                            </span>
                            <h3 class="font-serif-title text-2xl font-bold">
                                Mulai Konsultasi dengan Admin
                            </h3>
                            <p class="text-xs text-stone-300 mt-1 leading-relaxed">
                                Isi formulir ringkas di bawah ini, lalu sistem kami akan menyiapkan format chat resmi ke WhatsApp admin kami secara otomatis.
                            </p>
                        </div>

                        <form id="wa-generator-form" onsubmit="handleWaSubmit(event)" class="space-y-4">
                            <!-- Nama Lengkap -->
                            <div>
                                <label for="jamaah_name" class="block text-xs font-semibold uppercase tracking-wider text-stone-300 mb-1">
                                    Nama Lengkap / Panggilan:
                                </label>
                                <input type="text" 
                                       id="jamaah_name" 
                                       required
                                       placeholder="Contoh: Bapak H. Ahmad"
                                       class="w-full px-4 py-3 rounded-xl bg-red-950/80 border border-red-800/80 text-white placeholder-stone-400 text-sm focus:outline-none focus:border-[#d4af37] focus:ring-1 focus:ring-[#d4af37] transition">
                            </div>

                            <!-- Layanan yang Diminati -->
                            <div>
                                <label for="jamaah_service" class="block text-xs font-semibold uppercase tracking-wider text-stone-300 mb-1">
                                    Layanan yang Ingin Dikonsultasikan:
                                </label>
                                <select id="jamaah_service" 
                                        class="w-full px-4 py-3 rounded-xl bg-red-950/80 border border-red-800/80 text-white text-sm focus:outline-none focus:border-[#d4af37] focus:ring-1 focus:ring-[#d4af37] transition">
                                    <option value="Bimbingan Ibadah Haji Reguler">Bimbingan Ibadah Haji Reguler (KBIHU)</option>
                                    <option value="Paket Umrah Reguler 9 Hari (PT Khairah Berkah Mandiri)">Paket Umrah Reguler 9 Hari (PT Khairah Berkah Mandiri)</option>
                                    <option value="Paket Umrah Spesial Ramadhan (PT Khairah Berkah Mandiri)">Paket Umrah Spesial Ramadhan (PT Khairah Berkah Mandiri)</option>
                                    <option value="Paket Umrah Plus Wisata Halal (PT Khairah Berkah Mandiri)">Paket Umrah Plus Wisata Halal (PT Khairah Berkah Mandiri)</option>
                                    <option value="Konsultasi Pendaftaran Porsi Haji & Tabungan Haji">Konsultasi Pendaftaran Porsi Haji & Tabungan Haji</option>
                                </select>
                            </div>

                            <!-- Pertanyaan / Catatan -->
                            <div>
                                <label for="jamaah_notes" class="block text-xs font-semibold uppercase tracking-wider text-stone-300 mb-1">
                                    Pertanyaan / Rencana Keberangkatan (Opsional):
                                </label>
                                <textarea id="jamaah_notes" 
                                          rows="3" 
                                          placeholder="Tuliskan pertanyaan Anda atau rencana tahun keberangkatan..."
                                          class="w-full px-4 py-3 rounded-xl bg-red-950/80 border border-red-800/80 text-white placeholder-stone-400 text-sm focus:outline-none focus:border-[#d4af37] focus:ring-1 focus:ring-[#d4af37] transition"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" 
                                    class="w-full py-4 px-6 rounded-xl text-sm font-bold text-[#2a0508] bg-gradient-to-r from-[#f5d97a] via-[#d4af37] to-[#c59e2b] hover:from-[#fae498] hover:to-[#dfb536] shadow-xl shadow-black/20 transition duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                </svg>
                                <span>Kirim Konsultasi ke WhatsApp Admin</span>
                            </button>
                        </form>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<script>
    function handleWaSubmit(event) {
        event.preventDefault();
        const name = document.getElementById('jamaah_name').value.trim();
        const service = document.getElementById('jamaah_service').value;
        const notes = document.getElementById('jamaah_notes').value.trim();
        const phone = "{{ $kbihu['contact']['phone_wa'] }}";

        let text = `Assalamu'alaikum KBIHU Multazam Jadid At Thariq,\n\nSaya ingin berkonsultasi:\n- Nama: ${name}\n- Layanan: ${service}`;
        if (notes) {
            text += `\n- Catatan/Pertanyaan: ${notes}`;
        }
        text += `\n\nMohon informasi dan panduan selanjutnya. Terima kasih.`;

        const waUrl = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;
        window.open(waUrl, '_blank');
    }
</script>
