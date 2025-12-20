<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <!-- Created by Dandy Pradnyana & Yoga Dinanta --> 
        <title>{{ config('app.name', 'HMJ Teknologi Informasi PNB') }}</title> 
        <link rel="shortcut icon" href="{{ asset('img/logo-hmjti.png') }}" type="image/x-icon"> 

        {{-- Meta Tag --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content="Himpunan Mahasiswa Jurusan Teknologi Informasi, Keluarga Besar Mahasiswa, Politeknik Negeri Bali"> 
    </head>
    <body class="w-full"> 
        @include('components.navbar')
            @yield('content')   
        @include('components.footer')
    </body> 
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <script src="{{ asset('js/fontaws.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</html>