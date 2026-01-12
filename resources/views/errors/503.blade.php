@extends('layout')
@section('title', '503 - Server Maintaince')

@section('content')
<section class="h-[80vh] flex flex-col items-center justify-center bg-slate-50 relative overflow-hidden font-[Poppins]">
    {{-- Background Decoration --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-300/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>

    <div class="relative z-10 text-center px-6 animate-fade-slide"> 
        <h1 class="text-9xl font-extrabold text-blue-900/10 select-none tracking-widest">
            503
        </h1>
        
        <div class="-mt-16 lg:-mt-20">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Sedang Pemeliharaan
            </h2>
            <p class="text-gray-500 text-lg max-w-lg mx-auto mb-10 leading-relaxed text-balance">
                Kami sedang melakukan pemeliharaan rutin untuk meningkatkan layanan HMJ TI. Kami akan segera kembali dalam beberapa saat. Terima kasih atas kesabaran Anda.
            </p> 
        </div>
    </div>
</section>
@endsection
