<header class="fixed bg-white shadow-sm border-b border-gray-200 font-[poppins] z-50 w-full">
    <div class="mx-auto px-4 md:px-14 lg:px-26">
        <div class="flex justify-between items-center pt-4 pb-2">
            
            <div class="flex items-center space-x-4">
                <img src="{{ asset('img/logo-hmjti.png') }}" alt="HMJTI PNB" class="h-10 md:h-14 w-auto">
                <div class="hidden md:block border-l-2 border-gray-400 h-10 mr-4"></div>
                <div class="flex flex-col">
                    <span class="text-gray-900 text-[10px] md:text-xs tracking-widest uppercase">HIMPUNAN MAHASISWA JURUSAN</span>
                    <span class="text-lg md:text-2xl font-semibold text-blue-600 tracking-tighter uppercase">TEKNOLOGI INFORMASI</span>
                </div>
            </div>

            <nav class="hidden lg:flex space-x-4 items-center">
                <a href="{{ route('welcome')}}" class="text-blue-950 font-medium hover:text-blue-700 px-3 py-1 rounded-xl transition">Beranda</a>
                <a href="/#profil" class="text-blue-950 font-medium hover:text-blue-700 px-3 py-1 rounded-xl transition">Profil</a>
                <a href="/#programkerja" class="text-blue-950 font-medium hover:text-blue-700 px-3 py-1 rounded-xl transition">Program Kerja</a>
                <a href="/#prestasi" class="text-blue-950 font-medium hover:text-blue-700 px-3 py-1 rounded-xl transition">Prestasi</a>
                <a href="{{ route('blog-all') }}" class="text-blue-950 font-medium hover:text-blue-700 px-3 py-1 rounded-xl transition">Blog & Informasi</a>
                
                <button class="text-blue-950 hover:text-blue-700 pl-4">
                    <i class="fa-solid fa-magnifying-glass text-xl"></i>
                </button>
            </nav>

            <div class="lg:hidden flex items-center">
                <button id="mobile-menu-button" class="text-blue-950 focus:outline-none p-2">
                    <i class="fa-solid fa-bars text-2xl" id="menu-icon"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 shadow-lg absolute w-full left-0 transition-all duration-300">
        <div class="flex flex-col p-4 space-y-4">
            <a href="{{ route('welcome')}}" class="text-blue-950 font-medium hover:bg-blue-50 px-4 py-2 rounded-lg">Beranda</a>
            <a href="/#profil" class="text-blue-950 font-medium hover:bg-blue-50 px-4 py-2 rounded-lg">Profil</a>
            <a href="/#programkerja" class="text-blue-950 font-medium hover:bg-blue-50 px-4 py-2 rounded-lg">Program Kerja</a>
            <a href="/#prestasi" class="text-blue-950 font-medium hover:bg-blue-50 px-4 py-2 rounded-lg">Prestasi</a>
            <a href="{{ route('blog-all') }}" class="text-blue-950 font-medium hover:bg-blue-50 px-4 py-2 rounded-lg">Blog & Informasi</a>
            <hr>
            <div class="flex items-center px-4 py-2">
                <i class="fa-solid fa-magnifying-glass mr-3 text-blue-950"></i>
                <span class="text-blue-950 font-medium">Cari Informasi...</span>
            </div>
        </div>
    </div>
</header>