@extends('layout')

@section('content')
{{-- HERO SECTION --}}
<section class="relative h-[55vh] flex items-center justify-center overflow-hidden">
    {{-- Background Image dengan Overlay --}}
    <div class="absolute inset-0 z-0">
        @if(isset($blogs[0]))
            <img src="{{ $blogs[0]->thumbnail }}" class="grayscale w-full h-full object-cover" alt="Blogs HMJ Teknologi Informasi PNB">
        @else
            <img src="{{ asset('img/home.webp') }}" class="grayscale w-full h-full object-cover" alt="Blogs HMJ Teknologi Informasi PNB">
        @endif
        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/80 via-blue-800/60 to-transparent z-10"></div>
    </div>

    {{-- Hero Content --}}
    <div class="relative text-center px-6 lg:px-28 z-20 mt-12">
        <span class="px-4 py-1 bg-blue-600 text-white text-xs md:text-md font-semibold rounded-xl uppercase tracking-wider">
            Blog & Informasi
        </span>
        <h1 class="text-4xl lg:text-6xl font-bold text-white my-2 leading-tight max-w-4xl">
            HMJ Teknologi Informasi
        </h1> 
        <p class="text-white text-sm md:text-base lg:text-lg">Dokumentasi dan cerita singkat kegiatan HMJ Teknologi Informasi Politeknik Negeri Bali.</p>
    </div>
</section>

{{-- CONTENT SECTION --}}
<section id="blog" class="relative py-12 lg:py-16 px-8 lg:px-32 overflow-x-hidden"> 
    {{-- BACKGROUND VARIATION --}} 
    <div class="absolute top-0 -left-32 w-[520px] h-[520px] bg-blue-300/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 -right-32 w-[420px] h-[420px] bg-sky-300/30 rounded-full blur-3xl"></div>

    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(59,130,246,0.05)_1px,transparent_1px),linear-gradient(to_bottom,rgba(59,130,246,0.05)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>
 
    <div class="relative z-10">
    {{-- GRID BLOG --}}
        @if($blogs->count() < 1)
            <div class="text-slate-900">Tidak Ada Blog</div>
        @else
            <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($blogs as $index => $blog)  
                    @php $page = floor($index / 6) + 1; @endphp
                    
                    <div class="blog-item group bg-white p-4 pb-8 rounded-md shadow-md flex flex-col h-full transition-all duration-300" 
                        data-page="{{ $page }}">
                        
                        <div class="w-full overflow-hidden aspect-video rounded-sm">
                            <img class="group-hover:scale-105 transition duration-200 w-full h-full object-cover" 
                                src="{{ $blog->thumbnail }}" loading="lazy"
                                alt="{{ $blog->title }}">
                        </div> 

                        <div class="mt-2 px-2 flex flex-col grow gap-2">
                            <div class="flex items-center min-h-12"> 
                                <h5 class="text-2xl text-blue-700 font-semibold line-clamp-2">{{ $blog->title }}</h5>  
                            </div>
                            <p class="text-gray-600 text-base grow">{{ $blog->excerpt }}</p> 
                            
                            <div class="mt-4">
                                <a href="{{ route('blog-details', $blog->slug) }}" class="float-right inline-block bg-blue-700 hover:bg-blue-800 px-6 py-2 text-white rounded-md transition-colors font-medium">
                                    Lihat Detail →
                                </a>
                            </div>
                        </div> 
                    </div>
                @endforeach
            </div>
            
            <div id="pagination-js" class="mt-12 flex justify-center items-center gap-2">
                {{-- Tombol akan di-generate oleh JS --}}
            </div>
        @endif
    </div>
</section> 
@endsection 

@push('scripts')
    <script src="{{ asset('/js/blogs.js')}}"></script> 
@endpush