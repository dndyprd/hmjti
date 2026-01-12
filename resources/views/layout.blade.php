<!DOCTYPE html>
<!-- Created by Dandy Pradnyana & Yoga Dinanta --> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        {{-- Meta Tag --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        
        <meta name="description" content="@yield('meta_description', 'Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJ TI) Politeknik Negeri Bali merupakan organisasi kemahasiswaan yang menjadi wadah pengembangan potensi')"> 
        <meta name="keywords" content="HMJ TI, HMJ Teknologi Informasi, HMJ Teknologi Informasi PNB, HMJ TI PNB, HMJ TI KBM PNB, Politeknik Negeri Bali, Himpunan Mahasiswa Jurusan Teknologi Informasi, PNB, @yield('additional_keywords')">  
        
        <meta property="og:title" content="@yield('title')">
        <meta property="og:url" content="{{ url()->current() }}"> 
        <meta property="og:image" content="@yield('meta_image', asset('img/logo-hmjti.png'))">
        <meta name="twitter:image" content="@yield('meta_image', asset('img/logo-hmjti.png'))"> 
        <meta itemprop="image" content="{{ asset('img/logo-hmjti.png') }}">
        <meta name="google-site-verification" content="J2GC4ibLJc5asAj7f8RKaNZOddaS2V3Uy8MRKrYOpXo" />
        
        <title>@yield('title', 'HMJ Teknologi Informasi PNB')</title> 
        
        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{ asset('img/logo-hmjti.png') }}">
        <link rel="shortcut icon" href="{{ asset('img/logo-hmjti.png') }}" type="image/x-icon"> 
        <link rel="apple-touch-icon" href="{{ asset('img/logo-hmjti.png') }}">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])  
    </head>
    <style>
        @keyframes fadeSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-slide {
            animation: fadeSlideUp 0.6s ease-out both;
        }

    </style>
    <body class="w-full"> 
        @include('components.navbar')
            @yield('content')   
        @include('components.footer')
    </body> 
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <script src="{{ asset('js/fontaws.js') }}"></script> 
    <script src="{{ asset('js/navbar.js') }}"></script>
    @stack('scripts')
</html>