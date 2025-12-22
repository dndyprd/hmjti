<!DOCTYPE html>
<!-- Created by Dandy Pradnyana & Yoga Dinanta --> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        {{-- Meta Tag --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content="Himpunan Mahasiswa Jurusan Teknologi Informasi, Keluarga Besar Mahasiswa, Politeknik Negeri Bali">
        
        <title>{{ config('app.name', 'HMJ Teknologi Informasi PNB') }}</title> 
        <link rel="shortcut icon" href="{{ asset('img/logo-hmjti.png') }}" type="image/x-icon"> 
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
    @stack('scripts')
</html>