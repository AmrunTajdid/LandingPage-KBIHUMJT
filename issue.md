# Spesifikasi & Rencana Implementasi: Landing Page KBIHU Multazam Jadid At Thariq

> **Status:** Disepakati & Siap Diimplementasikan  
> **Arah Desain:** *Editorial Islamic Prestige* (Modern, Elegan, Responsif, Bebas dari kesan template AI generik)

---

## 1. Profil & Informasi Riil KBIHU

* **Nama Entitas:** KBIHU (Kelompok Bimbingan Ibadah Haji dan Umrah) Multazam Jadid At Thariq
* **Layanan Utama:**
  1. **Jasa Bimbingan Ibadah Haji:** Bimbingan manasik intensif pra-keberangkatan, fiqih haji sesuai sunnah, hingga pendampingan langsung di Tanah Suci (Armuzna) oleh pembimbing bersertifikasi resmi.
  2. **Penyelenggaraan Paket Umrah:** Program umrah berkualitas & berizin resmi bekerja sama dengan **PT Khairah Berkah Mandiri**.
* **Keunggulan Utama (Trust Point):** Pembimbing bersertifikasi resmi Kementerian Agama & berpengalaman bertahun-tahun mendampingi jamaah.
* **Kontak & Domisili Resmi:**
  * **WhatsApp Resmi:** `+62 813-1577-0146` (`6281315770146`)
  * **Alamat Sekretariat:** Jl. Rawa Bebek Rt 12 Rw 01 No.58, Pulogebang, Cakung, Jakarta Timur
  * **Penyimpanan Konfigurasi:** Terpusat di `config/kbihu.php` dan didukung variabel `.env`.

---

## 2. Struktur Organisasi & Key People

Data kepengurusan resmi sesuai dokumen struktural:

| Jabatan | Nama Pejabat | Keterangan & Peran |
| :--- | :--- | :--- |
| **Pembina** | **H. Mohammad Shodiq, M.Pd.I** | Dewan Pengarah & Pembina Utama KBIHU |
| **Ketua KBIHU** | **Hj. Ayani, S.Pd.I** | Pimpinan Operasional & Manajemen KBIHU |
| **Pengawas** | **Yudi Azhari** | Pengawas Mutu & Tata Kelola Organisasi |
| **Pembimbing I** | **H. Mohammad Shodiq, M.Pd.I** | **Pembimbing Bersertifikasi Resmi Kemenag** & Berpengalaman |
| **Pembimbing II** | **Hj. Ayani, S.Pd.I** | **Pembimbing Bersertifikasi Resmi Kemenag** & Berpengalaman |
| **Sekretaris** | **Amrun Tajdid, S.T** | Administrasi Pendaftaran & Pelayanan Jamaah |
| **Bendahara** | **Della Shafira Azhari, S.AP** | Keuangan & Administrasi Setoran |
| **Anggota / Humas** | **Thariq Fitratullah** | Hubungan Masyarakat & Media Informasi |

---

## 3. Desain Sistem & Panduan "Anti-AI Look"

Untuk memastikan website terlihat autentik, berwibawa, dan tidak seperti buatan AI:

1. **Palet Warna "Editorial Islamic Prestige":**
   * *Deep Emerald Green:* `#064e3b` / `#022c22` (Mewakili ketenangan, nilai islami, dan kewibawaan).
   * *Warm Rich Gold:* `#D4AF37` / `#B48328` / `#F59E0B` (Aksen emas terinspirasi dari ornamen bintang 8 sudut, kiswah pintu Ka'bah, dan lintasan pesawat pada logo).
   * *Background & Cards:* `#FAFAF9` (Stone-50) & `#FFFFFF` dengan bayangan lembut (*soft realistic elevation*, bukan glow neon).
   * *Teks & Kontras:* Slate Dark `#0F172A` untuk kenyamanan membaca maksimal bagi jamaah dari segala usia.
2. **Kombinasi Tipografi:**
   * **Heading / Judul:** *Playfair Display* / *Cinzel* (Karakter serif elegan, prestisius, dan berwibawa).
   * **Body / Teks Isi:** *Plus Jakarta Sans* (Sangat tajam, modern, bersih, dan nyaman dibaca di layar HP).
3. **Ornamen & Sentuhan Humanis:**
   * Kaligrafi Bismillah subtle SVG pada pembuka.
   * Pemisah seksi menggunakan ornamen geometris bintang 8 sudut emas yang anggun.
   * Bahasa Indonesia yang ramah, syar'i, dan menyentuh hati jamaah (*bukan jargon AI seperti "revolusi spiritual canggih"*).

---

## 4. Struktur Seksi Halaman (Landing Page Blueprint)

```
[ Topbar Info Kontak ] -> Nomor WA & Alamat Cakung, Jaktim
[ Sticky Navbar ] -> Logo, Nav Links, Tombol WhatsApp Cepat
[ Hero Section ] -> Headline Berwibawa + Trust Badges Bersertifikasi Kemenag + CTA
[ About & Sinergi Kemitraan ] -> Profil KBIHU + Logo Kemitraan PT Khairah Berkah Mandiri
[ Dual-Service Hub (Tabs) ] -> Tab 1: Bimbingan Haji | Tab 2: Paket Umrah Kerjasama
[ Certified Mentors Spotlight ] -> Profil Detail H. Mohammad Shodiq & Hj. Ayani + Sertifikasi
[ Struktur Organisasi & Lightbox ] -> Kartu Tim + Modal Dokumen Asli Bagan
[ 6 Pilar Keunggulan ] -> Alasan Memilih KBIHU (Manasik, Syar'i, Legalitas, Kekeluargaan)
[ Alur Bimbingan & Pendaftaran ] -> 4 Langkah Mudah Menuju Tanah Suci
[ FAQ Interaktif ] -> Pertanyaan Calon Jamaah & Keluarga
[ Lokasi & Sekretariat ] -> Alamat Lengkap Rawa Bebek Pulogebang Cakung + Direct WA CTA
[ Footer ] -> Identitas Lengkap, Legalitas Kemitraan & Hak Cipta
[ Floating WhatsApp Widget ] -> Bantuan Konsultasi Cepat (Sticky Bottom-Right)
```

---

## 5. Rencana Arsitektur Teknis Laravel

* **Konfigurasi Terpusat:** `config/kbihu.php`
  * Menyimpan nomor WA (`6281315770146`), alamat, nama pengurus, daftar kurikulum manasik, paket umrah kemitraan PT Khairah Berkah Mandiri, dan FAQ.
* **Controller:** `app/Http/Controllers/LandingPageController.php`
  * Mengirim data terstruktur ke view.
* **Views & Components:**
  * `resources/views/landing.blade.php`: Halaman utama.
  * Modular Blade Components di `resources/views/components/` untuk kemudahan maintenance.
* **Aset:**
  * Logo: `public/images/logo.png` (Transparan tanpa background putih)
  * Bagan Struktur: `public/images/struktur-organisasi.jpg`
  * Google Fonts: Playfair Display & Plus Jakarta Sans.
  * Tailwind CSS v4 via Vite.

---

## 6. Checklist Eksekusi Implementasi

- [x] Wawancara mendalam & kesepakatan desain (`/grill-me`).
- [x] Penyusunan berkas acuan `issue.md` terinci.
- [x] **Langkah 1:** Pembuatan file konfigurasi `config/kbihu.php`.
- [x] **Langkah 2:** Pembuatan `LandingPageController.php` & pengaturan rute `routes/web.php`.
- [x] **Langkah 3:** Pengaturan Tailwind CSS v4, Font (Playfair Display & Plus Jakarta Sans), dan ornamen kustom.
- [x] **Langkah 4:** Pembuatan komponen Blade (Hero, Dual-Service Hub, Mentors, Organization Lightbox, FAQ, CTA).
- [x] **Langkah 5:** Integrasi Generator Link WhatsApp & Floating Widget.
- [x] **Langkah 6:** Build aset Vite (`npm run build`) dan pengujian responsivitas serta feature test.
