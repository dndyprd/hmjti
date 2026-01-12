@extends('layout')

@section('title', 'HMJ Teknologi Informasi PNB - ' . $blog->title)
@section('meta_description', $blog->long_excerpt)
@section('additional_keywords', $blog->proker_name . ', ' . $blog->title)
@section('meta_image', $blog->thumbnail)

@section('content')
<section class="relative h-[75vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ $blog->thumbnail }}" class="w-full h-full object-cover" alt="{{ $blog->title }}">
        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/80 via-blue-800/60 to-transparent z-10"></div>
    </div>

    <div class="relative text-center px-6 lg:px-28 z-20 mt-12">
        <span class="px-4 py-1 bg-blue-600 text-white text-sm font-semibold rounded-full uppercase tracking-wider">
            {{ $blog->proker_name }}
        </span>

        <h1 class="text-4xl lg:text-6xl font-bold text-white mt-4 mb-6 leading-tight max-w-4xl mx-auto">
            {{ $blog->title }}
        </h1>

        <div class="flex items-center justify-center text-gray-200 gap-4 text-lg">
            <span class="flex items-center gap-2 bg-blue-500 px-4 py-2 rounded-2xl shadow-2xl">
                <i class="fa-regular fa-calendar"></i>
                {{ $blog->date }}
            </span>
        </div>
    </div>
</section>

<section class="py-16 px-6 lg:px-64 bg-white font-[Poppins]">
    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed text-justify">
        {!! $blog->content !!}
    </div>
</section>

<section class="py-16 px-6 lg:px-28 bg-slate-50 overflow-hidden">
    <div class="flex items-center justify-between mb-10">
        <div>
            <h3 class="text-3xl font-bold text-gray-900">Dokumentasi Kegiatan</h3>
            <p class="text-gray-500 mt-2">Momen keseruan selama acara berlangsung</p>
        </div>

        <div class="flex gap-3">
            <button onclick="prevSlide()" class="w-12 h-12 rounded-full border-2 border-blue-700 text-blue-700 hover:bg-blue-700 hover:text-white transition-all flex items-center justify-center">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button onclick="nextSlide()" class="w-12 h-12 rounded-full border-2 border-blue-700 text-blue-700 hover:bg-blue-700 hover:text-white transition-all flex items-center justify-center">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <div class="relative overflow-hidden">
        <div id="slider-track" class="flex transition-transform duration-500 ease-out">
            @foreach($blog->gallery as $url)
                <div class="slider-item p-3 min-w-full md:min-w-[50%] lg:min-w-[33.333%]">
                    <div class="h-64 lg:h-80 rounded-xl overflow-hidden shadow-md">
                        <img src="{{ $url }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" alt="Gallery {{ $blog->title }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/blog-details.js') }}"></script> 
@endpush