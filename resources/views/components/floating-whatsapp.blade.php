<div class="fixed bottom-6 right-6 z-50 flex flex-col items-end space-y-2">
    
    <!-- Greeting Tooltip Bubble -->
    <div id="wa-tooltip" class="hidden sm:flex items-center gap-2 bg-white text-slate-800 text-xs py-2 px-3.5 rounded-2xl shadow-xl border border-stone-200/90 animate-bounce" style="animation-duration: 3s;">
        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
        <span class="font-medium">Butuh info porsi Haji & Umrah? Chat Admin kami!</span>
        <button type="button" onclick="document.getElementById('wa-tooltip').remove()" class="text-stone-400 hover:text-stone-600 ml-1 text-xs font-bold">&times;</button>
    </div>

    <!-- WhatsApp Floating Action Button -->
    <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum KBIHU Multazam Jadid At Thariq, saya ingin konsultasi seputar Bimbingan Haji / Paket Umrah.') }}" 
       target="_blank" 
       rel="noopener noreferrer"
       aria-label="Chat WhatsApp Admin KBIHU"
       class="w-14 h-14 rounded-full bg-emerald-600 hover:bg-emerald-500 text-white shadow-2xl flex items-center justify-center transition duration-300 transform hover:scale-110 border-2 border-white ring-4 ring-emerald-600/20 group">
        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
        </svg>
    </a>
</div>
