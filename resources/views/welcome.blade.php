@extends('layout') 
@section('content')   
    {{-- BIDANG SECTION --}}
    <section id="home" class="bg-slate-50 h-screen flex items-center justify-center px-28 gap-8">
        <div class="w-3/5 flex flex-col gap-4">
            <h1 class="text-5xl text-gray-900 font-bold">HIMPUNAN MAHASISWA JURUSAN <span class="text-blue-700">TEKNOLOGI INFORMASI</span></h1>
            <h3 class="text-gray-800 italic font-semibold text-4xl">"Salam Satu Frekuensi"</h3>
            <p class="text-lg text-gray-950 text-justify">Wadah kolaborasi dan inovasi mahasiswa TI untuk mengeksplorasi potensi, mengasah kreativitas, dan membangun masa depan teknologi yang inklusif bersama HMJ Teknologi Informasi Politeknik Negeri Bali.</p>
            <div class="mt-4">
                <a href="#tentang" class="font-medium rounded-md px-6 py-3 border-2 text-blue-700 border-blue-700 hover:bg-blue-800 hover:text-white cursor-pointer inline-block text-xl">
                    Lihat Selengkapnya <i class="fa-solid fa-chevron-down"></i>
                </a> 
            </div>
        </div>
        <div class="w-2/5 flex items-center justify-center">
            <img class="w-9/10" src="{{ asset('img/logo-hmjti.png') }}" alt="HMJ Teknologi Informasi">
        </div>
    </section>
    {{-- ABOUT SECTION --}}
    <section class="bg-slate-100 flex flex-col items-center justify-center px-28 py-12 gap-8">
        <h3 class="text-center text-gray-900 text-4xl font-bold">Tentang <br><span class="text-blue-700">HMJ Teknologi Informasi</span></h3>
        <p class="text-justify text-lg text-gray-950">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi placeat maxime quo suscipit! Earum, nam quibusdam. Minima nesciunt alias quisquam neque maiores adipisci blanditiis, ullam, similique veritatis excepturi quod, sit impedit repellat dolores numquam iusto. Neque atque officiis, dolores nihil obcaecati suscipit quasi, quia ad nemo facilis maxime maiores reiciendis a tempora sed, magnam ab aspernatur. Voluptates deleniti consectetur nisi, provident incidunt nesciunt odio optio dolor, enim amet, placeat iure odit fuga ab tenetur omnis ullam. Amet earum perferendis, beatae expedita saepe vero deleniti reiciendis excepturi eius ullam iure aperiam quas cupiditate cum, et aut aliquam mollitia illum qui. Eligendi, cupiditate exercitationem aspernatur sapiente quod ipsum voluptas animi cum. Impedit sapiente sunt enim omnis velit recusandae in similique quas reiciendis pariatur, ut ab corrupti fugit maxime laudantium? Illum ipsa maiores nesciunt sint? Mollitia et dicta esse natus eligendi provident, cupiditate quisquam facere perspiciatis minima, recusandae molestias voluptatem voluptate libero optio.</p>
    </section>
    {{-- BIDANG SECTION --}}
    <section id="bidang" class="py-12 px-28 bg-slate-50 flex flex-col items-center justify-center">
        <h3 class="text-center text-gray-900 text-4xl font-bold">Bidang - Bidang <br><span class="text-blue-700">HMJ Teknologi Informasi</span></h3>
        
        {{-- LIST BIDANG --}}
        <div class="flex gap-4 mt-8 mb-12">
            @foreach($bidangs as $bidang)
                <div id="btn{{ $bidang['number'] }}" 
                    class="btn-bidang px-3 py-2 rounded-md text-lg font-medium cursor-pointer border-2 border-blue-700 text-blue-700 {{ $bidang['number'] == 1 ? 'bg-blue-700 text-slate-100' : ''}} transition-all duration-300 " 
                    onclick="bidangSort({{ $bidang['number'] }})">
                    {{ $bidang['name'] }}
                </div>
            @endforeach 
        </div>

        {{-- INFORMASI BIDANG & PROKER --}}
        @foreach($bidangs as $bidang) 
            <div id="bidang{{ $bidang['number']}}" class="content-bidang {{ $bidang['number'] == 1 ? 'flex' : 'hidden' }} items-center gap-8 w-full"> 
                {{-- Info Bidang --}}
                <div class="lg:w-4/9"> 
                    <h2 class="text-4xl font-semibold text-gray-900 leading-tight mb-6">
                        Informasi & Program Kerja Bidang <span class="text-blue-600">{{ $bidang['name'] }}</span>
                    </h2>
                    <p class="text-gray-500 text-lg text-justify leading-relaxed">
                        {{ $bidang['description'] }}
                    </p>
                </div>
                {{-- Proker Bidang --}}    
                <div class="lg:w-5/9 flex flex-col gap-4 w-full">   
                    @foreach($bidang['prokers'] as $index => $proker)  
                        <details name="proker-bidang-{{ $bidang['number'] }}" 
                                class="group bg-slate-50 rounded-2xl p-2 border border-transparent open:border-blue-100 open:bg-white transition-all duration-300"
                                {{ $index == 0 ? 'open' : '' }}>
                            <summary class="flex items-center justify-between list-none px-4 py-1 cursor-pointer">
                                <span class="text-xl font-bold text-gray-800">{{ $proker['display_name']}}</span>
                                <div class="w-10 h-10 bg-white group-open:bg-blue-600 group-open:text-white rounded-full flex items-center justify-center shadow-sm transition-colors">
                                    <i class="fa-solid fa-chevron-down group-open:rotate-180"></i>
                                </div>
                            </summary>
                            <div class="px-4 pb-4 text-gray-500 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                {{ $proker['description'] }}
                            </div>
                        </details>
                    @endforeach 
                </div> 
            </div> 
        @endforeach
    </section> 
    {{-- BLOG SECTION --}}
    <section id="blog" class="py-12 px-28 bg-slate-50">
        <h3 class="text-gray-900 text-4xl text-center font-bold mb-8">After Event <span class="text-blue-700">HMJ Teknologi Informasi</span></h3>

        {{-- GRID BLOG --}}
        <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($blogs as $index => $blog)  
                @php $page = floor($index / 6) + 1; @endphp
                
                <div class="blog-item bg-white p-4 pb-8 rounded-md shadow-md flex flex-col h-full transition-all duration-300" 
                    data-page="{{ $page }}">
                    
                    <div class="w-full overflow-hidden aspect-video rounded-sm">
                        <img class="w-full h-full object-cover" src="{{ $blog['thumbnail'] }}" alt="{{ $blog['title'] }}">
                    </div> 

                    <div class="mt-2 px-2 flex flex-col grow gap-2">
                        <div class="flex items-center min-h-12"> 
                            <h5 class="text-2xl text-blue-700 font-semibold line-clamp-2">{{ $blog['title'] }}</h5>  
                        </div>
                        <p class="text-gray-600 text-base line-clamp-2 grow">{{ $blog['content'] }}</p> 
                        
                        <div class="mt-4">
                            <a href="{{ route('blog-details', $blog['slug']) }}" class="float-right inline-block bg-blue-700 hover:bg-blue-800 px-6 py-2 text-white rounded-md transition-colors font-medium">
                                Lihat Blog
                            </a>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>

        {{-- PAGINATION CONTAINER --}}
        <div id="pagination-js" class="mt-12 flex justify-center items-center gap-2">
            {{-- Tombol akan di-generate oleh JS --}}
        </div>
    </section>
@endsection
