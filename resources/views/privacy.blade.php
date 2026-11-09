@extends('layouts.app')

@section('content')
<div class="bg-[#FAFAF9] min-h-screen">
    <!-- Header Hero Section -->
    <section class="relative bg-gradient-to-b from-[#2a0508] via-[#4a070f] to-[#36050a] text-white pt-14 pb-20 md:pt-16 md:pb-24 overflow-hidden border-b border-red-950/70">
        <!-- Subtle Pattern Background -->
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#d4af37]/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <!-- Breadcrumbs -->
            <nav class="inline-flex items-center gap-2 text-xs font-medium text-stone-300 mb-6 bg-red-950/70 px-4 py-1.5 rounded-full border border-red-900/80">
                <a href="{{ route('home') }}" class="hover:text-[#d4af37] transition flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span>Beranda</span>
                </a>
                <span class="text-rose-400">/</span>
                <span class="text-[#d4af37]">Kebijakan Privasi</span>
            </nav>

            <span class="block text-xs uppercase tracking-widest text-[#d4af37] font-semibold mb-2">Transparansi & Amanah Data Jamaah</span>
            <h1 class="font-heading text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4">
                Kebijakan Privasi
            </h1>
            <p class="text-sm sm:text-base text-stone-200 max-w-2xl mx-auto leading-relaxed">
                Komitmen perlindungan dan kerahasiaan data pribadi calon jamaah haji dan umrah KBIHU Multazam Jadid At Thariq serta kemitraan resmi bersama PT Khairah Berkah Mandiri.
            </p>
            <p class="text-xs text-stone-400 mt-4">
                Terakhir diperbarui: <strong>{{ date('d F Y') }}</strong>
            </p>
        </div>
    </section>

    <!-- Main Content Policy Container -->
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="bg-white rounded-3xl p-6 sm:p-10 md:p-12 shadow-xl border border-stone-200/80 space-y-10 text-slate-800">
            
            <!-- Opening Notice -->
            <div class="p-5 rounded-2xl bg-rose-50/70 border border-rose-200 flex items-start gap-3.5">
                <div class="w-8 h-8 rounded-xl bg-[#4a070f] text-[#d4af37] flex items-center justify-center shrink-0 mt-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <div class="text-xs sm:text-sm text-rose-950 leading-relaxed">
                    <strong>Prinsip Amanah:</strong> KBIHU Multazam Jadid At Thariq menjunjung tinggi privasi dan kehormatan data seluruh calon jamaah dan keluarga. Seluruh data yang Anda percayakan kepada kami hanya digunakan untuk keperluan bimbingan ibadah haji dan pemrosesan paket umrah resmi, dengan kepatuhan penuh terhadap <strong>UU No. 27 Tahun 2022 tentang Pelindungan Data Pribadi (UU PDP)</strong> serta regulasi Kementerian Agama Republik Indonesia.
                </div>
            </div>

            <!-- Section 1: Pengelola Data -->
            <div class="space-y-3">
                <div class="flex items-center gap-2.5">
                    <span class="w-7 h-7 rounded-lg bg-[#4a070f] text-[#d4af37] text-xs font-bold flex items-center justify-center">1</span>
                    <h2 class="font-heading text-lg sm:text-xl font-bold text-slate-900">Identitas Pengelola Data</h2>
                </div>
                <div class="text-sm text-slate-700 leading-relaxed pl-9 space-y-2">
                    <p>
                        Pengelola data pribadi di situs dan layanan ini adalah:
                    </p>
                    <ul class="list-disc pl-5 space-y-1 text-slate-600">
                        <li><strong>Nama Entitas:</strong> KBIHU (Kelompok Bimbingan Ibadah Haji dan Umrah) Multazam Jadid At Thariq</li>
                        <li><strong>Alamat Sekretariat:</strong> {{ $kbihu['contact']['address'] }}</li>
                        <li><strong>WhatsApp Layanan:</strong> {{ $kbihu['contact']['phone_display'] }}</li>
                        <li><strong>Mitra Resmi Ibadah Umrah:</strong> {{ $kbihu['partner']['name'] }} (Penyelenggara Perjalanan Ibadah Umrah - PPIU Resmi Berizin Kemenag RI)</li>
                    </ul>
                </div>
            </div>

            <!-- Section 2: Data yang Dikumpulkan -->
            <div class="space-y-3">
                <div class="flex items-center gap-2.5">
                    <span class="w-7 h-7 rounded-lg bg-[#4a070f] text-[#d4af37] text-xs font-bold flex items-center justify-center">2</span>
                    <h2 class="font-heading text-lg sm:text-xl font-bold text-slate-900">Kategori Data Pribadi yang Dikumpulkan</h2>
                </div>
                <div class="text-sm text-slate-700 leading-relaxed pl-9 space-y-3">
                    <p>Kami hanya mengumpulkan data yang relevan dan dibutuhkan untuk kelancaran pendaftaran serta bimbingan ibadah, meliputi:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 pt-1">
                        <div class="p-3.5 rounded-xl bg-stone-50 border border-stone-200">
                            <h3 class="font-bold text-xs text-slate-900 mb-1">Data Kontak Awal</h3>
                            <p class="text-xs text-slate-600">Nama lengkap, nomor telepon / WhatsApp aktif, alamat domisili, dan alamat email saat konsultasi.</p>
                        </div>
                        <div class="p-3.5 rounded-xl bg-stone-50 border border-stone-200">
                            <h3 class="font-bold text-xs text-slate-900 mb-1">Dokumen Resmi Pendaftaran</h3>
                            <p class="text-xs text-slate-600">Nomor Induk Kependudukan (NIK), salinan KTP, Kartu Keluarga, dan Nomor Porsi Haji (SPPH Kemenag) untuk bimbingan haji.</p>
                        </div>
                        <div class="p-3.5 rounded-xl bg-stone-50 border border-stone-200">
                            <h3 class="font-bold text-xs text-slate-900 mb-1">Dokumen Keberangkatan Umrah</h3>
                            <p class="text-xs text-slate-600">Buku Paspor asli/salinan, pas foto jamaah latar putih, serta kartu/sertifikat vaksinasi sesuai regulasi penerbangan dan Kerajaan Arab Saudi.</p>
                        </div>
                        <div class="p-3.5 rounded-xl bg-stone-50 border border-stone-200">
                            <h3 class="font-bold text-xs text-slate-900 mb-1">Catatan Khusus Kesehatan & Lansia</h3>
                            <p class="text-xs text-slate-600">Informasi pendamping lansia atau kondisi kesehatan tertentu demi memastikan keselamatan dan kenyamanan selama manasik serta di Tanah Suci.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Tujuan Penggunaan Data -->
            <div class="space-y-3">
                <div class="flex items-center gap-2.5">
                    <span class="w-7 h-7 rounded-lg bg-[#4a070f] text-[#d4af37] text-xs font-bold flex items-center justify-center">3</span>
                    <h2 class="font-heading text-lg sm:text-xl font-bold text-slate-900">Tujuan Pemrosesan Data Pribadi</h2>
                </div>
                <div class="text-sm text-slate-700 leading-relaxed pl-9 space-y-2">
                    <p>Data yang kami peroleh digunakan semata-mata untuk:</p>
                    <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                        <li>Memproses registrasi bimbingan manasik haji pra-keberangkatan hingga kepulangan.</li>
                        <li>Koordinasi pemesanan tiket penerbangan, visa umrah, dan kamar hotel bersama mitra resmi kami, <strong>PT Khairah Berkah Mandiri</strong>.</li>
                        <li>Mengirimkan jadwal manasik, pengumuman kelompok terbang (kloter), dan panduan ibadah melalui WhatsApp atau telepon resmi.</li>
                        <li>Verifikasi keabsahan data jamaah pada sistem Kementerian Agama RI (SISKOHAT/Siskopatuh).</li>
                        <li>Menjaga silaturahmi alumni jamaah KBIHU setelah menyelesaikan rangkaian ibadah.</li>
                    </ul>
                </div>
            </div>

            <!-- Section 4: Larangan Penjualan Data & Pembagian Pihak Ketiga -->
            <div class="space-y-3">
                <div class="flex items-center gap-2.5">
                    <span class="w-7 h-7 rounded-lg bg-[#4a070f] text-[#d4af37] text-xs font-bold flex items-center justify-center">4</span>
                    <h2 class="font-heading text-lg sm:text-xl font-bold text-slate-900">Kerahasiaan & Kemitraan Terpercaya</h2>
                </div>
                <div class="text-sm text-slate-700 leading-relaxed pl-9 space-y-2">
                    <p class="font-medium text-slate-800">
                        KBIHU Multazam Jadid At Thariq TIDAK PERNAH dan TIDAK AKAN menjual, menyewakan, atau menyalahgunakan data pribadi jamaah kepada pihak ketiga untuk kepentingan iklan komersial luar.
                    </p>
                    <p class="text-slate-600">
                        Penerusan data hanya dilakukan secara terbatas dan sah kepada:
                    </p>
                    <ul class="list-disc pl-5 space-y-1 text-slate-600">
                        <li><strong>PT Khairah Berkah Mandiri:</strong> Selaku mitra PPIU berizin resmi untuk penerbitan visa, tiket, dan manifest akomodasi ibadah umrah.</li>
                        <li><strong>Instansi Pemerintah:</strong> Kementerian Agama RI, Kementerian Kesehatan, dan Imigrasi sesuai amanat perundang-undangan haji dan umrah.</li>
                        <li><strong>Pihak Otoritas Penyelenggara di Arab Saudi:</strong> Muassasah / Syarikah dan perhotelan berizin untuk penyediaan tenda Armuzna, bus shalawat, serta kamar hotel.</li>
                    </ul>
                </div>
            </div>

            <!-- Section 5: Keamanan & Penyimpanan -->
            <div class="space-y-3">
                <div class="flex items-center gap-2.5">
                    <span class="w-7 h-7 rounded-lg bg-[#4a070f] text-[#d4af37] text-xs font-bold flex items-center justify-center">5</span>
                    <h2 class="font-heading text-lg sm:text-xl font-bold text-slate-900">Keamanan & Masa Penyimpanan Data</h2>
                </div>
                <div class="text-sm text-slate-700 leading-relaxed pl-9 space-y-2">
                    <p class="text-slate-600">
                        Kami menerapkan standar pengamanan administratif dan teknis untuk mencegah akses tanpa hak, kehilangan, atau kebocoran data. Dokumen fisik (seperti berkas fotokopi) disimpan dalam arsip sekretariat yang terkunci, sedangkan data digital dilindungi enkripsi standar industri.
                    </p>
                    <p class="text-slate-600">
                        Data disimpan selama masa persiapan bimbingan, pelaksanaan ibadah, serta masa retensi arsip legalitas yang diwajibkan oleh regulasi penyelenggaraan haji dan umrah.
                    </p>
                </div>
            </div>

            <!-- Section 6: Hak Jamaah -->
            <div class="space-y-3">
                <div class="flex items-center gap-2.5">
                    <span class="w-7 h-7 rounded-lg bg-[#4a070f] text-[#d4af37] text-xs font-bold flex items-center justify-center">6</span>
                    <h2 class="font-heading text-lg sm:text-xl font-bold text-slate-900">Hak Anda Sebagai Pemilik Data</h2>
                </div>
                <div class="text-sm text-slate-700 leading-relaxed pl-9 space-y-2">
                    <p class="text-slate-600">Berdasarkan UU Pelindungan Data Pribadi, setiap calon jamaah memiliki hak untuk:</p>
                    <ul class="list-disc pl-5 space-y-1 text-slate-600">
                        <li>Mendapatkan kejelasan mengenai tujuan pemrosesan data pribadinya.</li>
                        <li>Mengakses, memperbaiki, atau memperbarui informasi yang keliru (misal: perbaikan ejaan nama pada paspor atau nomor telepon).</li>
                        <li>Meminta penarikan atau penghapusan kontak dari daftar pesan pengumuman jika tidak lagi menggunakan layanan bimbingan KBIHU.</li>
                    </ul>
                </div>
            </div>

            <!-- Section 7: Cookie Situs -->
            <div class="space-y-3">
                <div class="flex items-center gap-2.5">
                    <span class="w-7 h-7 rounded-lg bg-[#4a070f] text-[#d4af37] text-xs font-bold flex items-center justify-center">7</span>
                    <h2 class="font-heading text-lg sm:text-xl font-bold text-slate-900">Penggunaan Cookie & Teknologi Web</h2>
                </div>
                <div class="text-sm text-slate-700 leading-relaxed pl-9">
                    <p class="text-slate-600">
                        Situs web kami hanya menggunakan cookie teknis dasar yang diperlukan untuk menjaga keamanan sesi, kecepatan loading, dan keutuhan fungsi navigasi halaman. Kami tidak mengumpulkan data pelacakan yang merugikan privasi Anda.
                    </p>
                </div>
            </div>

            <!-- Section 8: Hubungi Kami -->
            <div class="pt-6 border-t border-stone-200">
                <div class="rounded-2xl bg-gradient-to-br from-[#4a070f] to-[#200406] p-6 sm:p-8 text-white flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div class="space-y-2 text-center sm:text-left">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#d4af37]">Ada Pertanyaan Terkait Data Anda?</span>
                        <h3 class="font-heading text-lg sm:text-xl font-bold">Layanan Pengaduan & Informasi Privasi</h3>
                        <p class="text-xs text-stone-300 max-w-md">
                            Sekretariat KBIHU Multazam Jadid At Thariq siap melayani klarifikasi data dan pertanyaan Anda dengan sepenuh hati.
                        </p>
                    </div>
                    <div class="shrink-0">
                        <a href="https://wa.me/{{ $kbihu['contact']['phone_wa'] }}?text={{ urlencode('Assalamu\'alaikum, saya ingin bertanya perihal kebijakan privasi & data pendaftaran di KBIHU Multazam Jadid At Thariq') }}" 
                           target="_blank"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-xs font-bold text-[#2a0508] bg-gradient-to-r from-[#f5d97a] via-[#d4af37] to-[#c59e2b] hover:from-[#fae498] hover:to-[#dfb536] shadow-lg transition">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                            <span>Hubungi Admin Privasi</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Back to Home Link -->
            <div class="text-center pt-2">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-rose-950 hover:text-red-900 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span>Kembali ke Halaman Utama</span>
                </a>
            </div>

        </div>
    </section>
</div>
@endsection
