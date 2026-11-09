<?php

return [
    /*
    |--------------------------------------------------------------------------
    | KBIHU Multazam Jadid At Thariq Configuration
    |--------------------------------------------------------------------------
    */
    'name' => 'KBIHU Multazam Jadid At Thariq',
    'short_name' => 'KBIHU Multazam',
    'tagline' => 'Membimbing Sepenuh Hati Menuju Haji Mabrur & Umrah Berkah Sesuai Sunnah',
    'partner' => [
        'name' => 'PT Khairah Berkah Mandiri',
        'type' => 'Penyelenggara Perjalanan Ibadah Umrah (PPIU) Resmi',
        'description' => 'Mitra resmi KBIHU Multazam Jadid At Thariq dalam penyediaan paket perjalanan umrah dengan kepastian jadwal, tiket, akomodasi hotel, dan legalitas Kementerian Agama RI.'
    ],

    // Kontak Resmi
    'contact' => [
        'phone_display' => '+62 813-1577-0146',
        'phone_wa' => '6281315770146',
        'email' => 'info@kbihumultazam.com',
        'address' => 'Jl. Rawa Bebek Rt 12 Rw 01 No.58, Pulogebang, Cakung, Jakarta Timur',
        'city' => 'Jakarta Timur, DKI Jakarta',
        'gmaps_search' => 'Jl. Rawa Bebek Rt 12 Rw 01 No.58, Pulogebang, Cakung, Jakarta Timur',
        'operational_hours' => 'Senin – Sabtu: 08.00 – 17.00 WIB'
    ],

    // Pembimbing Bersertifikasi (Featured Spotlight)
    'certified_mentors' => [
        [
            'name' => 'H. Mohammad Shodiq, M.Pd.I',
            'role' => 'Pembimbing I & Pembina KBIHU',
            'certification' => 'Sertifikat Pembimbing Ibadah Haji Kemenag RI',
            'experience' => 'Berpengalaman mendampingi jamaah haji & umrah lebih dari 15 tahun',
            'quote' => 'Menuntun setiap langkah jamaah agar memahami esensi manasik, bukan sekadar rutinitas, demi menggapai derajat haji yang mabrur.'
        ],
        [
            'name' => 'Hj. Ayani, S.Pd.I',
            'role' => 'Pembimbing II & Ketua KBIHU',
            'certification' => 'Sertifikat Pembimbing Ibadah Haji Kemenag RI',
            'experience' => 'Pakar bimbingan fiqih haji wanita dan pendampingan jamaah lansia',
            'quote' => 'Melayani jamaah dengan pendekatan kekeluargaan dan kasih sayang, memastikan kenyamanan serta kekhusyukan ibadah di Tanah Suci.'
        ]
    ],

    // Struktur Organisasi Lengkap
    'organization_structure' => [
        [
            'role' => 'Pembina',
            'name' => 'H. Mohammad Shodiq, M.Pd.I',
            'badge' => 'Dewan Pembina',
            'desc' => 'Pengarah kebijakan syariah dan pembinaan kurikulum bimbingan manasik.'
        ],
        [
            'role' => 'Ketua KBIHU',
            'name' => 'Hj. Ayani, S.Pd.I',
            'badge' => 'Pimpinan',
            'desc' => 'Koordinator operasional, pelayanan jamaah, dan pelaksanaan program bimbingan.'
        ],
        [
            'role' => 'Pengawas',
            'name' => 'Yudi Azhari',
            'badge' => 'Pengawas',
            'desc' => 'Pengawasan tata kelola, mutu pelayanan, dan akuntabilitas organisasi.'
        ],
        [
            'role' => 'Pembimbing I',
            'name' => 'H. Mohammad Shodiq, M.Pd.I',
            'badge' => 'Bersertifikasi Resmi',
            'desc' => 'Bimbingan fiqih ibadah haji, manasik intensif, dan pendampingan di Tanah Suci.'
        ],
        [
            'role' => 'Pembimbing II',
            'name' => 'Hj. Ayani, S.Pd.I',
            'badge' => 'Bersertifikasi Resmi',
            'desc' => 'Bimbingan fiqih ibadah, fiqih wanita, serta pendampingan jamaah lansia.'
        ],
        [
            'role' => 'Sekretaris',
            'name' => 'Amrun Tajdid, S.T',
            'badge' => 'Administrasi',
            'desc' => 'Pengelolaan pendaftaran, data jamaah, surat-menyurat, dan koordinasi Kemenag.'
        ],
        [
            'role' => 'Bendahara',
            'name' => 'Della Shafira Azhari, S.AP',
            'badge' => 'Keuangan',
            'desc' => 'Pencatatan keuangan yang transparan, administrasi biaya, dan pelaporan akuntabel.'
        ],
        [
            'role' => 'Anggota / Humas',
            'name' => 'Thariq Fitratullah',
            'badge' => 'Hubungan Masyarakat',
            'desc' => 'Layanan informasi jamaah, komunikasi publik, dan dokumentasi kegiatan.'
        ]
    ],

    // Program Bimbingan Ibadah Haji
    'haji_program' => [
        'title' => 'Program Bimbingan Ibadah Haji Reguler',
        'subtitle' => 'Bimbingan intensif komprehensif mulai dari tanah air, selama di Armuzna, hingga kepulangan.',
        'features' => [
            'Bimbingan Manasik Teori & Praktik di miniatur Ka\'bah berskala luas.',
            'Pendampingan langsung oleh Pembimbing Bersertifikasi Kemenag RI di Arafah, Muzdalifah, & Mina (Armuzna).',
            'Bimbingan khusus fiqih wanita (haid, thaharah, thawaf ifadhah) dipandu Hj. Ayani, S.Pd.I.',
            'Pelayanan prioritas dan pendampingan sabar untuk jamaah lanjut usia (lansia) dan risiko tinggi.',
            'Kekeluargaan regu dan rombongan yang solid, saling menjaga dan membantu.',
            'Materi panduan doa praktis, buku panduan manasik, dan seragam batik KBIHU.'
        ],
        'manasik_curriculum' => [
            [
                'step' => '01',
                'title' => 'Fiqih Haji & Umrah Sesuai Sunnah',
                'desc' => 'Memahami rukun, wajib, larangan ihram, dan jenis pelaksanaan haji (Tamattu, Ifrad, Qiran).'
            ],
            [
                'step' => '02',
                'title' => 'Simulasi Praktik Lapangan (Outdoor Manasik)',
                'desc' => 'Praktik thawaf, sa\'i, tahallul, mengenakan kain ihram, serta simulasi lontar jumrah.'
            ],
            [
                'step' => '03',
                'title' => 'Fiqih Wanita & Fiqih Keringanan (Rukhshah)',
                'desc' => 'Panduan ibadah bagi jamaah wanita, tata cara shalat dalam perjalanan, dan kondisi darurat.'
            ],
            [
                'step' => '04',
                'title' => 'Kesiapan Fisik & Tips Sehat di Tanah Suci',
                'desc' => 'Pembekalan manajemen stamina menghadapi cuaca ekstrem di Makkah dan Madinah.'
            ],
            [
                'step' => '05',
                'title' => 'Pendampingan Penuh di Armuzna',
                'desc' => 'Dipimpin langsung oleh pembimbing sertifikasi saat wukuf di Arafah, mabit di Muzdalifah, dan melontar di Mina.'
            ]
        ]
    ],

    // Paket Umrah Kerjasama dengan PT Khairah Berkah Mandiri
    'umrah_packages' => [
        [
            'id' => 'umrah-reguler-9-hari',
            'name' => 'Paket Umrah Reguler 9 Hari',
            'duration' => '9 Hari',
            'category' => 'Favorit Jamaah',
            'tag' => 'Kerjasama PT Khairah Berkah Mandiri',
            'desc' => 'Program umrah ideal dengan waktu efisien, beribadah khusyuk di Masjidil Haram dan Masjid Nabawi.',
            'facilities' => [
                'Tiket Pesawat PP (Direct / Transit nyaman)',
                'Hotel Berbintang Makkah & Madinah dekat pelataran masjid',
                'Visa Umrah Resmi & Asuransi Perjalanan',
                'Makan 3x Sehari Fullboard Menu Cita Rasa Indonesia',
                'Bus AC Pariwisata Eksekutif selama di Arab Saudi',
                'Muthawwif / Tour Leader Berilmu & Berpengalaman',
                'Ziarah Kota Makkah & Madinah (Jabal Rahmah, Uhud, Quba, dll)',
                'Air Zamzam (sesuai ketentuan otoritas penerbangan)',
                'Perlengkapan Umrah Lengkap (Koper, Kain Ihram/Mukena, Batik, Tas Paspor)'
            ],
            'notes' => 'Jadwal keberangkatan berkala setiap bulan. Hubungi admin untuk jadwal terdekat.'
        ],
        [
            'id' => 'umrah-ramadhan-itikaf',
            'name' => 'Paket Umrah Spesial Ramadhan',
            'duration' => '12 – 15 Hari',
            'category' => 'Musim Spesial',
            'tag' => 'Kerjasama PT Khairah Berkah Mandiri',
            'desc' => 'Meraih keutamaan pahala setara haji bersama Rasulullah SAW di bulan suci Ramadhan serta itikaf di sepuluh malam terakhir.',
            'facilities' => [
                'Pilihan Awal, Tengah, atau Lailatul Qadar (Akhir Ramadhan)',
                'Hotel Nyaman dekat Masjidil Haram untuk kemudahan itikaf',
                'Menu Sahur & Iftar Prasmanan Indonesia',
                'Kajian Tadabbur Al-Qur\'an & Bimbingan Ibadah Malam',
                'Handling Bandara Soekarno-Hatta & Jeddah/Madinah',
                'Visa Umrah & Asuransi Resmi Kemenag',
                'Perlengkapan Eksklusif KBIHU x PT Khairah Berkah Mandiri'
            ],
            'notes' => 'Kuota terbatas setiap tahunnya. Pendaftaran disarankan jauh hari.'
        ],
        [
            'id' => 'umrah-plus-wisata-halal',
            'name' => 'Paket Umrah Plus Wisata Halal',
            'duration' => '12 – 14 Hari',
            'category' => 'Spiritual & Edukasi',
            'tag' => 'Kerjasama PT Khairah Berkah Mandiri',
            'desc' => 'Perjalanan ibadah umrah dipadukan dengan napak tilas kejayaan peradaban Islam di Turki / Dubai / Mesir / Thaif.',
            'facilities' => [
                'Wisata Edukasi Sejarah Islam & City Tour Negara Tujuan',
                'Akomodasi Hotel Bintang 4 / Bintang 5',
                'Tour Guide Lokal Berbahasa Indonesia & Muthawwif Resmi',
                'Tiket Masuk Objek Wisata Halal Sesuai Itinerary',
                'Transportasi Eksklusif & Makan Halal Terjamin',
                'Perlengkapan Lengkap & Manasik Pra-Keberangkatan'
            ],
            'notes' => 'Tersedia pilihan destinasi: Turki, Thaif, atau Dubai.'
        ]
    ],

    // 6 Pilar Keunggulan
    'advantages' => [
        [
            'title' => 'Pembimbing Bersertifikasi Resmi',
            'desc' => 'Dibimbing langsung oleh pembimbing yang memiliki lisensi sertifikasi resmi dari Kementerian Agama RI dan keilmuan fiqih yang kokoh.',
            'icon' => 'award'
        ],
        [
            'title' => 'Sesuai Tuntunan Sunnah',
            'desc' => 'Rangkaian bimbingan ibadah berpegang teguh pada Al-Qur\'an dan As-Sunnah yang shahih tanpa bid\'ah yang memberatkan jamaah.',
            'icon' => 'book-open'
        ],
        [
            'title' => 'Mitra Resmi PT Khairah Berkah Mandiri',
            'desc' => 'Paket umrah terjamin kepastian tiket, visa, dan hotelnya melalui penyelenggara resmi berizin Kementerian Agama.',
            'icon' => 'shield-check'
        ],
        [
            'title' => 'Pendampingan Intensif di Tanah Suci',
            'desc' => 'Pembimbing tidak meninggalkan jamaah; mendampingi langsung dari tahapan manasik, Armuzna, hingga kembali ke tanah air.',
            'icon' => 'users'
        ],
        [
            'title' => 'Pelayanan Ramah & Peduli Lansia',
            'desc' => 'Suasana kekeluargaan yang hangat, sabar, dan memberikan perhatian khusus pada jamaah lanjut usia serta risiko tinggi.',
            'icon' => 'heart-handshake'
        ],
        [
            'title' => 'Transparan, Amanah & Terpercaya',
            'desc' => 'Pengelolaan administrasi yang jelas, akuntabel, dan transparan tanpa ada biaya tersembunyi yang merugikan jamaah.',
            'icon' => 'check-badge'
        ]
    ],

    // FAQ (Tanya Jawab Seputar Haji & Umrah)
    'faqs' => [
        [
            'q' => 'Apakah saya bisa mendaftar di KBIHU jika belum memiliki Nomor Porsi Haji?',
            'a' => 'Tentu bisa. Tim sekretariat KBIHU Multazam Jadid At Thariq siap membantu dan mendampingi Anda dalam prosedur pembukaan tabungan haji di bank syariah hingga pendaftaran nomor porsi resmi di Kementerian Agama.'
        ],
        [
            'q' => 'Mengapa saya perlu bergabung dengan KBIHU untuk keberangkatan Haji?',
            'a' => 'Ibadah haji adalah ibadah fisik dan keilmuan yang membutuhkan pemahaman mendalam. Dengan bergabung bersama KBIHU kami, Anda mendapatkan pelatihan manasik berkala (teori dan simulasi praktik nyata), bimbingan kesehatan, serta pendampingan langsung pembimbing bersertifikasi selama di Armuzna (Arafah, Muzdalifah, Mina).'
        ],
        [
            'q' => 'Bagaimana kerjasama antara KBIHU dengan PT Khairah Berkah Mandiri untuk Umrah?',
            'a' => 'KBIHU Multazam Jadid At Thariq bekerjasama secara resmi dengan PT Khairah Berkah Mandiri sebagai PPIU berizin resmi Kemenag RI. Kerjasama ini memastikan seluruh aspek legalitas, visa, tiket pesawat, dan akomodasi terjamin 100%, sementara bimbingan ibadahnya dipandu langsung oleh tim pembimbing KBIHU kami.'
        ],
        [
            'q' => 'Bagaimana pendampingan bagi calon jamaah yang berusia lanjut (lansia)?',
            'a' => 'Kami memiliki komitmen pelayanan penuh kasih sayang untuk jamaah lansia. Pembimbing kami, khususnya Hj. Ayani, S.Pd.I, sangat berpengalaman mendampingi jamaah sepuh, menyediakan pemahaman rukhshah (keringanan) syariat, dan membantu pengaturan fasilitas kursi roda bila diperlukan.'
        ],
        [
            'q' => 'Di mana lokasi pelaksanaan manasik haji KBIHU Multazam Jadid At Thariq?',
            'a' => 'Pertemuan manasik teori dilaksanakan di sekretariat/aula bimbingan kami di Rawa Bebek, Pulogebang, Cakung, Jakarta Timur, serta simulasi praktik akbar di miniatur Ka\'bah berskala luas.'
        ],
        [
            'q' => 'Bagaimana cara berkonsultasi atau mendaftar?',
            'a' => 'Anda dapat langsung menghubungi nomor WhatsApp resmi kami di +62 813-1577-0146 atau berkunjung langsung ke kantor sekretariat kami di Jl. Rawa Bebek Rt 12 Rw 01 No.58, Pulogebang, Cakung, Jakarta Timur.'
        ]
    ]
];
