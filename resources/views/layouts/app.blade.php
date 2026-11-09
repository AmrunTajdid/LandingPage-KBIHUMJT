<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ $title ?? 'KBIHU Multazam Jadid At Thariq | Bimbingan Haji & Paket Umrah Resmi' }}</title>
    <meta name="description" content="Kelompok Bimbingan Ibadah Haji dan Umrah (KBIHU) Multazam Jadid At Thariq. Dibimbing langsung oleh pembimbing bersertifikasi resmi Kemenag RI. Paket Umrah resmi bekerjasama dengan PT Khairah Berkah Mandiri.">
    <meta name="keywords" content="KBIHU Multazam Jadid At Thariq, Bimbingan Haji, Paket Umrah, PT Khairah Berkah Mandiri, Manasik Haji, Pembimbing Haji Bersertifikasi, Jakarta Timur">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="KBIHU Multazam Jadid At Thariq | Bimbingan Haji & Paket Umrah">
    <meta property="og:description" content="Membimbing sepenuh hati menuju kemabruran haji & umrah berkah sesuai sunnah bersama pembimbing bersertifikasi resmi.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Google Fonts: Playfair Display, Cinzel, Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-heading {
            font-family: 'Cinzel', 'Playfair Display', serif;
        }
        .font-serif-title {
            font-family: 'Playfair Display', Georgia, serif;
        }
        .font-body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        svg {
            display: inline-block;
            vertical-align: middle;
        }
        svg.w-3\.5 { width: 0.875rem; height: 0.875rem; }
        svg.w-4 { width: 1rem; height: 1rem; }
        svg.w-5 { width: 1.25rem; height: 1.25rem; }
        svg.w-6 { width: 1.5rem; height: 1.5rem; }
        svg.w-7 { width: 1.75rem; height: 1.75rem; }
        svg.w-8 { width: 2rem; height: 2rem; }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body class="font-body bg-[#FAFAF9] text-slate-800 antialiased selection:bg-[#d4af37]/30 selection:text-red-950">

    <!-- Topbar Info -->
    @include('components.topbar')

    <!-- Sticky Navigation -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Floating WhatsApp Widget -->
    @include('components.floating-whatsapp')

    <!-- Lightbox Modal untuk Bagan Struktur -->
    @include('components.lightbox-modal')

</body>
</html>
