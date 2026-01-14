@extends('layout') 

@section('content')
{{-- HOME SECTION --}} 
<section id="home" class="relative h-[65vh] md:h-screen overflow-hidden flex items-center"> 
    {{-- Background Image --}}  
    <img class="absolute inset-0 w-full h-full object-cover grayscale z-0" 
         src="{{ asset('img/home.jpeg') }}" 
         alt="HMJ Teknologi Informasi"> 
    
    <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/80 via-blue-800/60 to-transparent z-10"></div>

    <div class="absolute bottom-24 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center text-center text-white">
        <h3 class="italic font-semibold text-xl md:text-3xl xl:text-4xl mb-4">"Salam Satu Frekuensi"</h3>
        <a href="#profil" class="flex flex-col items-center group">
            <span class="text-sm md:text-base mb-8 uppercase border-2 border-white hover:bg-white hover:text-blue-700 rounded-xl px-4 py-2">
                Scroll ke bawah
            </span>
            <i class="fa-solid fa-chevron-down text-2xl animate-bounce group-hover:text-blue-300 transition"></i>
        </a> 
    </div>
</section>

{{-- ABOUT SECTION --}}
<section id="profil" class="bg-slate-50 px-6 md:px-16 lg:px-32 py-16 md:py-24 xl:py-32">
    <div class="max-w-7xl mx-auto text-center">
        <span class="block text-sm md:text-base uppercase tracking-widest text-blue-600 mb-4">
            Tentang Kami
        </span>

        <h3 class="text-2xl md:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight mb-8">
            HMJ <span class="text-blue-700">Teknologi Informasi</span><br>
            Politeknik Negeri Bali
        </h3>

        <p class="text-gray-700 text-base md:text-lg xl:text-xl leading-relaxed max-w-5xl mx-auto">
            Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJ TI) Politeknik Negeri Bali
            merupakan organisasi kemahasiswaan yang menjadi wadah pengembangan potensi,
            aspirasi, serta kreativitas mahasiswa di bidang akademik maupun non-akademik.
            HMJ TI berperan aktif dalam menyelenggarakan kegiatan yang mendukung
            peningkatan kompetensi, solidaritas, dan profesionalisme mahasiswa Teknologi Informasi.
        </p>
    </div>
</section>

{{-- BIDANG SECTION --}}
<section id="programkerja" class="relative py-24 xl:py-32 px-6 md:px-16 lg:px-32 bg-slate-50 overflow-x-hidden">

    {{-- BACKGROUND VARIATION --}} 
    <div class="absolute top-0 -left-32 w-[520px] h-[520px] bg-blue-300/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 -right-32 w-[420px] h-[420px] bg-sky-300/30 rounded-full blur-3xl"></div>

    <!-- Subtle Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(59,130,246,0.05)_1px,transparent_1px),linear-gradient(to_bottom,rgba(59,130,246,0.05)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>

    {{-- CONTENT WRAPPER --}}
    <div class="relative z-10 max-w-7xl mx-auto">

        {{-- HEADING --}}
        <div class="text-center mb-6 md:mb-8">
            <span class="block text-xs md:text-sm lg:text-base uppercase tracking-widest text-blue-600 mb-2">
                Struktur Organisasi
            </span>
            <h3 class="text-2xl md:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                Bidang - Bidang <br>HMJ 
                <span class="text-blue-700"> Teknologi Informasi</span>
            </h3>
        </div>

        {{-- LIST BIDANG (TAB) --}}
        <div class="flex flex-wrap justify-center gap-3 mb-8 md:mb-16">
            @foreach($bidangs as $bidang)
                <button
                    id="btn{{ $bidang['number'] }}"
                    onclick="bidangSort({{ $bidang['number'] }})"
                    class="btn-bidang px-6 py-2.5 rounded-xl text-xs md:text-base font-semibold
                        border border-blue-700 cursor-pointer
                        {{ $bidang['number'] == 1
                            ? 'bg-blue-700 text-slate-100'
                            : 'text-blue-700 ' }}
                        transition-all duration-300">
                    {{ $bidang['name'] }}
                </button>
            @endforeach
        </div>

        {{-- CONTENT BIDANG --}}
        @foreach($bidangs as $bidang)
            <div id="bidang{{ $bidang['number'] }}"
                class="content-bidang {{ $bidang['number'] == 1 ? 'flex' : 'hidden' }} flex-col lg:flex-row gap-10 md:gap-14 lg:gap-20 items-center">

                {{-- INFO BIDANG --}}
                <div class="lg:w-4/7 flex flex-col justify-center font-[poppins] animate-fade-slide">
                    <h4 class="text-2xl md:text-3xl xl:text-4xl font-extrabold text-gray-900 mb-6 md:mb-10">
                        Informasi & Program Kerja<br>
                        <span class="text-blue-600 mt-2 block">
                            {{ $bidang['name'] }}
                        </span>
                    </h4>

                    <p class="text-gray-600 text-base md:text-base xl:text-lg leading-relaxed text-justify">
                        {{ $bidang['description'] }}
                    </p>
                </div>

                {{-- PROKER --}}
                <div class="lg:w-3/7 flex flex-col gap-5 w-full">
                    @foreach($bidang['prokers'] as $index => $proker)
                        <details
                            name="proker-bidang-{{ $bidang['number'] }}"
                            class="group bg-white rounded-2xl border border-gray-100 shadow-sm
                                   open:shadow-md transition-all duration-300"
                            {{ $index == 0 ? 'open' : '' }}>

                            {{-- SUMMARY --}}
                            <summary class="flex items-center justify-between px-6 py-4 cursor-pointer list-none
                                             hover:bg-slate-50 rounded-2xl transition">
                                <span class="text-lg font-semibold text-gray-800">
                                    {{ $proker['display_name'] }}
                                </span>

                                <span
                                    class="w-9 h-9 rounded-full bg-blue-50 text-blue-600
                                           flex items-center justify-center
                                           group-open:bg-blue-600 group-open:text-white
                                           transition-all duration-300">
                                    <i class="fa-solid fa-chevron-down group-open:rotate-180 transition-transform"></i>
                                </span>
                            </summary>

                            {{-- CONTENT --}}
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed border-t border-gray-100">
                                {{ $proker['description'] }}
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</section>

{{-- BLOG SECTION --}}
<section id="blog" class="py-24 xl:py-32 px-6 md:px-16 lg:px-32 bg-slate-50 font-[Poppins]">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 md:gap-8 mb-10 md:mb-16">
        <div>
            <span class="text-sm md:text-base uppercase tracking-widest text-blue-600">After Event</span>
            <h3 class="text-2xl md:text-3xl xl:text-4xl font-bold text-gray-900 mt-2">
                HMJ <span class="text-blue-700">Teknologi Informasi</span>
            </h3>
        </div>
        <p class="text-gray-600 max-w-md md:text-right text-base md:text-lg">
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
        
                <div class="p-6 md:p-8 xl:p-10 flex flex-col grow">
                    <h4 class="text-lg md:text-xl xl:text-2xl font-bold text-gray-900 mb-4">
                        {{ $blogs[0]->title }}
                    </h4>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed line-clamp-3 mb-8">
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

@push('scripts')
    <script src="{{ asset('js/welcome.js') }}"></script> 
@endpush