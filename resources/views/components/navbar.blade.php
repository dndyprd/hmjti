<nav class="bg-white border-b border-gray-100 fixed w-full top-0 z-50 shadow-sm">
    <div class="container mx-auto px-4 py-3 lg:px-8">
        <div class="flex items-center justify-between">
            
            <a href="{{ route('welcome') }}" class="flex items-center gap-3">
                <img src="{{ asset('img/logo-hmjti.png') }}" alt="Logo HMJTI" class="h-12 w-auto">
                <div class="flex flex-col">
                    <span class="text-lg font-semibold text-blue-700 leading-tight uppercase tracking-tight">
                        HMJ Teknologi Informasi
                    </span>
                    <span class="text-xs font-medium text-gray-500">
                        KBM Politeknik Negeri Bali
                    </span>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-8 text-base font-medium text-gray-700">
                <a href="/" class="hover:text-blue-600 transition">Beranda</a>
                <a href="#tentang" class="hover:text-blue-600 transition">Tentang</a>
                <a href="#bidang" class="hover:text-blue-600 transition">Bidang</a> 
                <a href="#blog" class="hover:text-blue-600 transition">Blog</a>
            </div>

            <div class="flex items-center gap-5"> 

                <a href="#kontak" class="hidden sm:inline-block bg-blue-600 text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-blue-700 hover:shadow-lg transition-all transform active:scale-95">
                    Hubungi Kami
                </a>

                <button class="md:hidden text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</nav>