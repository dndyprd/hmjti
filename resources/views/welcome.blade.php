@extends('layout') 

@section('content')
{{-- HOME SECTION --}} 
<section id="home" class="relative h-screen overflow-hidden flex items-center"> 
    {{-- Background Image --}} 
    @if(isset($blogs[1]))
    <img class="absolute inset-0 w-full h-full object-cover grayscale z-0" 
         src="{{ $blogs[1]->thumbnail }}" 
         alt="HMJ Teknologi Informasi">
    @endif
    
    <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/80 via-blue-800/60 to-transparent z-10"></div>

    <div class="absolute bottom-24 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center text-center text-white">
        <h3 class="italic font-semibold text-4xl mb-4">"Salam Satu Frekuensi"</h3>
        <a href="#profil" class="flex flex-col items-center group">
            <span class="text-base mb-8 uppercase border-2 border-white hover:bg-white hover:text-blue-700 rounded-xl px-4 py-2">
                Scroll ke bawah
            </span>
            <i class="fa-solid fa-chevron-down text-2xl animate-bounce group-hover:text-blue-300 transition"></i>
        </a> 
    </div>
</section>

{{-- ABOUT & BIDANG SECTION --}} 

{{-- BLOG SECTION --}}
<section id="blog" class="py-20 px-6 lg:px-28 bg-slate-50 font-[Poppins]">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
        <div>
            <span class="text-sm uppercase tracking-widest text-blue-600">After Event</span>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                HMJ <span class="text-blue-700">Teknologi Informasi</span>
            </h3>
        </div>
        <p class="text-gray-600 max-w-md md:text-right">
            Dokumentasi dan cerita singkat kegiatan HMJ Teknologi Informasi Politeknik Negeri Bali.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        {{-- FEATURED BLOG --}}
        @if(count($blogs) > 0)
        <div class="lg:col-span-2"> 
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                <div class="relative aspect-video overflow-hidden">
                    <img src="{{ $blogs[0]->thumbnail }}"
                         alt="{{ $blogs[0]->title }}"
                         class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-500">
                    <span class="absolute top-4 left-4 bg-blue-600 text-white text-sm font-semibold px-4 py-1 rounded-lg">
                        Featured Event
                    </span>
                </div>
        
                <div class="p-8 flex flex-col grow">
                    <h4 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        {{ $blogs[0]->title }}
                    </h4>
                    <p class="text-gray-600 leading-relaxed line-clamp-3 mb-6">
                        {{ $blogs[0]->long_excerpt }}
                    </p>
                    
                    <div class="mt-auto inline-flex items-center gap-3 text-blue-600 font-semibold">
                        {{-- Gunakan class 'after:absolute after:inset-0' untuk membuat area klik memenuhi kartu --}}
                        <a href="{{ route('blog-details', $blogs[0]->slug) }}" class="after:absolute after:inset-0 hover:gap-5 transition-all flex items-center gap-3">
                            Baca Selengkapnya
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
        @endif

        {{-- LIST BLOG --}}
        <div class="flex flex-col gap-6">
            @foreach($blogs as $index => $blog)
                @if($index > 0)
                {{-- Ganti <a> menjadi <div> dan beri posisi relative --}}
                <div class="group relative flex gap-4 bg-white p-4 rounded-2xl shadow-sm hover:shadow-md transition-all">
                    <div class="w-28 h-20 rounded-xl overflow-hidden shrink-0">
                        <img src="{{ $blog->thumbnail }}"
                             alt="{{ $blog->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-base font-semibold text-gray-800 line-clamp-2">
                            {{ $blog->title }}
                        </h5>
                        <div class="mt-2 text-sm text-blue-600 font-medium">
                            {{-- Stretched link di sini juga --}}
                            <a href="{{ route('blog-details', $blog->slug) }}" class="after:absolute after:inset-0 hover:underline inline-flex items-center gap-1">
                                Lihat Detail
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            
            <a href="{{ route('blog-all')}}" class="bg-blue-700 hover:bg-blue-800 text-white inline-flex items-center justify-center gap-2 hover:gap-4 transition duration-300 rounded-lg py-2 text-center">
                Lihat Informasi Lainnya <i class="fa-solid fa-arrow-right text-sm"></i>
            </a>
        </div>
    </div>
</section> 
@endsection