@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')

    <!-- About Section & Legalitas Kemitraan -->
    @include('components.about')

    <!-- Dual-Service Hub (Bimbingan Haji & Paket Umrah PT Khairah Berkah Mandiri) -->
    @include('components.dual-service-hub')

    <!-- Spotlight Pembimbing Bersertifikasi Kemenag RI -->
    @include('components.certified-mentors')

    <!-- Struktur Organisasi & Lightbox Bagan Asli -->
    @include('components.organization-structure')

    <!-- 6 Pilar Keunggulan -->
    @include('components.advantages')

    <!-- 4 Langkah Alur Pendaftaran -->
    @include('components.steps')

    <!-- Tanya Jawab (FAQ) -->
    @include('components.faq')

    <!-- Kontak, Sekretariat, & Form WhatsApp Generator -->
    @include('components.contact-section')
@endsection
