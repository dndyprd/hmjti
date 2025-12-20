<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<header class="bg-white shadow-sm border-b border-gray-200 font-[poppins]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-24">
            
            <div class="flex items-center space-x-4">
                <img src="{{ asset('img/logo-hmjti.png') }}" alt="HMJTI PNB" class="h-16 w-auto">
                <div class="border-l-4 border-blue-900 h-16 mx-2"></div>
                <div class="flex flex-col">
                    <span class="text-gray-500 text-xs tracking-widest uppercase">Jurusan Teknologi</span>
                    <span class="text-2xl font-bold text-gray-800 tracking-tighter">INFORMASI</span>
                </div>
            </div>

            <nav class="hidden lg:flex space-x-6 items-center">
                <a href="#" class="text-blue-950 font-medium hover:bg-blue-200 px-2 py-2 rounded-xl transition">Beranda</a>
                <a href="#" class="text-blue-950 font-medium hover:bg-blue-200 px-2 py-2 rounded-xl transition">Profil</a>
                <a href="#" class="text-blue-950 font-medium hover:bg-blue-200 px-2 py-2 rounded-xl transition">Program Kerja</a>
                <a href="#" class="text-blue-950 font-medium hover:bg-blue-200 px-2 py-2 rounded-xl transition">Riset & Prestasi</a>
                <a href="#" class="text-blue-950 font-medium hover:bg-blue-200 px-2 py-2 rounded-xl transition">Blog & Informasi</a>
                
                <button class="text-blue-950 hover:text-blue-700 pl-4">
                    <i class="fa-solid fa-magnifying-glass text-xl"></i>
                </button>
            </nav>

            <div class="lg:hidden flex items-center">
                <button class="text-blue-950 focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
</header>