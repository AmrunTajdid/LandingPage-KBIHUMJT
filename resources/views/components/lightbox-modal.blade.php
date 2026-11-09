<!-- Lightbox Modal untuk Bagan Struktur Organisasi -->
<div id="structure-modal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6" aria-modal="true" role="dialog">
    <div class="relative bg-white rounded-3xl max-w-4xl w-full p-4 sm:p-6 shadow-2xl border border-[#d4af37]/40 transform transition-all">
        
        <!-- Modal Header -->
        <div class="flex items-center justify-between pb-4 border-b border-stone-200">
            <div>
                <span class="text-xs font-bold text-emerald-800 uppercase tracking-wider">Dokumen Resmi</span>
                <h3 class="font-serif-title text-lg sm:text-xl font-bold text-slate-900">
                    Bagan Struktur Organisasi KBIHU Multazam Jadid At Thariq
                </h3>
            </div>
            <button type="button" 
                    onclick="closeStructureModal()" 
                    class="w-9 h-9 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-700 flex items-center justify-center transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Image Container -->
        <div class="my-4 overflow-hidden rounded-2xl bg-stone-50 border border-stone-200 p-2 sm:p-4 flex items-center justify-center">
            <img src="{{ asset('images/struktur-organisasi.jpg') }}" 
                 alt="Bagan Struktur Organisasi KBIHU Multazam Jadid At Thariq" 
                 class="w-full h-auto max-h-[75vh] object-contain rounded-lg shadow-sm">
        </div>

        <!-- Modal Footer -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-3 pt-3 border-t border-stone-200 text-xs text-stone-500">
            <p>KBIHU Multazam Jadid At Thariq &bull; Cakung, Jakarta Timur</p>
            <button type="button" 
                    onclick="closeStructureModal()" 
                    class="px-5 py-2 rounded-xl bg-stone-100 hover:bg-stone-200 text-slate-800 font-semibold transition">
                Tutup Jendela
            </button>
        </div>

    </div>
</div>

<script>
    function openStructureModal() {
        document.getElementById('structure-modal').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeStructureModal() {
        document.getElementById('structure-modal').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    // Close on backdrop click
    document.getElementById('structure-modal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeStructureModal();
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeStructureModal();
        }
    });
</script>
