<section id="faq" class="py-20 lg:py-28 bg-[#FAFAF9] relative border-t border-stone-200">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center space-y-4 mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-100 text-rose-950 text-xs font-semibold tracking-wide">
                <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                <span>Tanya Jawab</span>
            </div>
            
            <h2 class="font-serif-title text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">
                Pertanyaan yang Sering Diajukan (FAQ)
            </h2>
            
            <p class="text-stone-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                Temukan jawaban seputar pendaftaran porsi haji, proses manasik, dan paket umrah kemitraan PT Khairah Berkah Mandiri.
            </p>
        </div>

        <!-- FAQ Accordion List -->
        <div class="space-y-4">
            @foreach($kbihu['faqs'] as $idx => $faq)
                <div class="faq-item bg-white rounded-2xl border border-stone-200/90 overflow-hidden shadow-sm transition duration-200">
                    <button type="button" 
                            onclick="toggleFaq({{ $idx }})"
                            class="w-full px-6 py-5 text-left flex items-center justify-between gap-4 focus:outline-none hover:bg-stone-50 transition">
                        <span class="font-bold text-slate-900 text-sm sm:text-base leading-snug">
                            {{ $faq['q'] }}
                        </span>
                        <div id="faq-icon-{{ $idx }}" class="w-8 h-8 rounded-full bg-rose-50 text-rose-950 flex items-center justify-center shrink-0 transition-transform duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    
                    <div id="faq-content-{{ $idx }}" class="hidden px-6 pb-6 pt-2 text-xs sm:text-sm text-stone-600 leading-relaxed border-t border-stone-100 bg-stone-50/50">
                        {{ $faq['a'] }}
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Still have questions CTA -->
        <div class="mt-12 text-center p-8 rounded-3xl bg-[#4a070f] text-white relative overflow-hidden shadow-xl border border-[#d4af37]/30">
            <h4 class="font-serif-title text-xl font-bold mb-2">Masih Memiliki Pertanyaan Lain?</h4>
            <p class="text-xs sm:text-sm text-stone-200 max-w-xl mx-auto mb-6">
                Tim layanan informasi dan humas kami siap menjawab dan memberikan konsultasi ramah untuk Anda dan keluarga.
            </p>
            <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin bertanya lebih lanjut seputar bimbingan di KBIHU Multazam Jadid At Thariq') }}" 
               target="_blank"
               class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-xs sm:text-sm font-bold text-[#2a0508] bg-gradient-to-r from-[#f5d97a] via-[#d4af37] to-[#c59e2b] hover:from-[#fae498] hover:to-[#dfb536] shadow transition">
                <span>Hubungi Admin KBIHU Sekarang</span>
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<script>
    function toggleFaq(index) {
        const content = document.getElementById(`faq-content-${index}`);
        const icon = document.getElementById(`faq-icon-${index}`);
        const isHidden = content.classList.contains('hidden');

        // Close other FAQs
        document.querySelectorAll('[id^="faq-content-"]').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('[id^="faq-icon-"]').forEach(el => el.classList.remove('rotate-180', 'bg-[#4a070f]', 'text-white'));

        if (isHidden) {
            content.classList.remove('hidden');
            icon.classList.add('rotate-180', 'bg-[#4a070f]', 'text-white');
        }
    }
</script>
