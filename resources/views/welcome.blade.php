@extends('layout')
@section('content')
{{-- BIDANG SECTION --}}

<section id="home" class="relative h-screen overflow-hidden flex items-center px-28">

    <!-- Background Video -->
    <video
        autoplay
        muted
        loop
        playsinline
        class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="{{ asset('video/hmjti-bg.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung video.
    </video>

    <!-- Overlay gradasi biru -->
    <div class="absolute inset-0 
                bg-gradient-to-r 
                from-blue-900/80 
                via-blue-800/60 
                to-transparent
                z-10">
    </div>

    <div class="absolute bottom-24 left-1/2 -translate-x-1/2
            z-20 flex flex-col items-center text-center text-white">

        <h3 class="italic font-semibold text-4xl mb-6">
            "Salam Satu Frekuensi"
        </h3>


        <!-- Scroll Icon -->
        <a href="#tentang" class="flex flex-col items-center group">
            <span class="text-sm mb-2 opacity-80">
                Scroll ke bawah
            </span>
            <i class="fa-solid fa-chevron-down text-3xl 
                  animate-bounce 
                  group-hover:text-blue-300 transition">
            </i>
        </a>

    </div>

</section>


{{-- ABOUT SECTION --}}
<section id="about" class="bg-slate-100 px-6 lg:px-28 py-20">
    <div class="max-w-7xl mx-auto text-center">
        <span class="block text-sm uppercase tracking-widest text-blue-600 mb-3">
            Tentang Kami
        </span>

        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-8">
            HMJ <span class="text-blue-700">Teknologi Informasi</span><br>
            Politeknik Negeri Bali
        </h3>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed">
            Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJ TI) Politeknik Negeri Bali
            merupakan organisasi kemahasiswaan yang menjadi wadah pengembangan potensi,
            aspirasi, serta kreativitas mahasiswa di bidang akademik maupun non-akademik.
            HMJ TI berperan aktif dalam menyelenggarakan kegiatan yang mendukung
            peningkatan kompetensi, solidaritas, dan profesionalisme mahasiswa Teknologi Informasi.
        </p>
    </div>
</section>

{{-- BIDANG SECTION --}}
<section id="bidang" class="relative py-20 px-6 lg:px-28 bg-slate-50 overflow-hidden">

    {{-- BACKGROUND VARIATION --}}
    <!-- Gradient Blobs -->
    <div class="absolute -top-32 -left-32 w-[520px] h-[520px] bg-blue-300/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 -right-32 w-[420px] h-[420px] bg-sky-300/30 rounded-full blur-3xl"></div>

    <!-- Subtle Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(59,130,246,0.05)_1px,transparent_1px),linear-gradient(to_bottom,rgba(59,130,246,0.05)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>

    {{-- CONTENT WRAPPER --}}
    <div class="relative z-10">

        {{-- HEADING --}}
        <div class="text-center mb-14">
            <span class="block text-sm uppercase tracking-widest text-blue-600 mb-3">
                Struktur Organisasi
            </span>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                Bidang - Bidang
                <span class="block text-blue-700">HMJ Teknologi Informasi</span>
            </h3>
        </div>

        {{-- LIST BIDANG (TAB) --}}
        <div class="flex flex-wrap justify-center gap-3 mb-16">
            @foreach($bidangs as $bidang)
                <button
                    id="btn{{ $bidang['number'] }}"
                    onclick="bidangSort({{ $bidang['number'] }})"
                    class="btn-bidang px-5 py-2 rounded-full text-sm font-semibold
                        border border-blue-600
                        {{ $bidang['number'] == 1
                            ? 'bg-blue-600 text-white shadow-md'
                            : 'text-blue-600 hover:bg-blue-50' }}
                        transition-all duration-300">
                    {{ $bidang['name'] }}
                </button>
            @endforeach
        </div>

        {{-- CONTENT BIDANG --}}
        @foreach($bidangs as $bidang)
            <div
                id="bidang{{ $bidang['number'] }}"
                class="content-bidang {{ $bidang['number'] == 1 ? 'grid' : 'hidden' }}
                       grid-cols-1 lg:grid-cols-2 gap-12 items-start">

                {{-- INFO BIDANG --}}
                <div class="flex flex-col justify-center h-full font-[Poppins] animate-fade-slide">
                    <h4 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-8">
                        Informasi & Program Kerja
                        <span class="block text-blue-600 mt-2">
                            {{ $bidang['name'] }}
                        </span>
                    </h4>

                    <p class="text-gray-600 text-lg md:text-xl leading-relaxed text-justify max-w-xl">
                        {{ $bidang['description'] }}
                    </p>
                </div>

                {{-- PROKER --}}
                <div class="flex flex-col gap-4">
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
<section id="blog" class="py-20 px-6 lg:px-28 bg-slate-50 font-[Poppins]">

    {{-- HEADING --}}
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
        <div>
            <span class="text-sm uppercase tracking-widest text-blue-600">
                After Event
            </span>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                HMJ <span class="text-blue-700">Teknologi Informasi</span>
            </h3>
        </div>

        <p class="text-gray-600 max-w-md">
            Dokumentasi dan cerita singkat kegiatan HMJ Teknologi Informasi Politeknik Negeri Bali.
        </p>
    </div>

    {{-- BLOG LAYOUT --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        {{-- FEATURED BLOG --}}
        @if(count($blogs) > 0)
        <div class="lg:col-span-2">
            <div class="group bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-full flex flex-col">

                <div class="relative aspect-video overflow-hidden">
                    <img src="{{ $blogs[0]['thumbnail'] }}"
                         alt="{{ $blogs[0]['title'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                    <span class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-4 py-1 rounded-full">
                        Featured Event
                    </span>
                </div>

                <div class="p-8 flex flex-col grow">
                    <h4 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        {{ $blogs[0]['title'] }}
                    </h4>

                    <p class="text-gray-600 leading-relaxed line-clamp-3 mb-6">
                        {{ $blogs[0]['content'] }}
                    </p>

                    <a href="{{ route('blog-details', $blogs[0]['slug']) }}"
                       class="mt-auto inline-flex items-center gap-3 text-blue-600 font-semibold hover:gap-5 transition-all">
                        Baca Selengkapnya
                        <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
        @endif

        {{-- LIST BLOG --}}
        <div class="flex flex-col gap-6">
            @foreach($blogs as $index => $blog)
                @if($index > 0)
                <div class="group flex gap-4 bg-white p-4 rounded-2xl shadow-sm hover:shadow-md transition-all">

                    <div class="w-28 h-20 rounded-xl overflow-hidden shrink-0">
                        <img src="{{ $blog['thumbnail'] }}"
                             alt="{{ $blog['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <div class="flex flex-col">
                        <h5 class="text-base font-semibold text-gray-800 line-clamp-2">
                            {{ $blog['title'] }}
                        </h5>

                        <a href="{{ route('blog-details', $blog['slug']) }}"
                           class="mt-2 text-sm text-blue-600 font-medium hover:underline">
                            Lihat Detail →
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- PAGINATION --}}
    <div id="pagination-js" class="mt-16 flex justify-center items-center gap-2">
        {{-- generated by JS --}}
    </div>
</section>

@endsection