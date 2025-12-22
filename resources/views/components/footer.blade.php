<footer class="bg-gradient-to-tl from-blue-950 via-blue-800 to-blue-700 text-white pt-16 pb-8 font-[Poppins]">
    <div class="container mx-auto px-8 lg:px-28">
        <div class="flex flex-col md:flex-row gap-12 mb-12">
            
            <div class="md:w-2/7 flex flex-col gap-4">
                <div class="flex items-center gap-3 rounded-lg w-fit">
                    <img src="{{ asset('img/logo-hmjti.png') }}" alt="Logo HMJTI" class="h-12 w-auto">
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold uppercase leading-tight">Himpunan Mahasiswa Jurusan</span>
                        <span class="text-[10px] text-blue-200 uppercase tracking-widest">Teknologi Informasi</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm leading-relaxed mt-2">
                    Wadah aspirasi dan kreativitas mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Bali. Menuju organisasi yang inovatif dan kolaboratif.
                </p>
            </div>

            <div class="md:w-1/7">
                <h4 class="text-lg font-bold mb-6 border-b-2 border-blue-500 w-fit">Tautan Penting</h4>
                <ul class="flex flex-col gap-3 text-sm text-blue-100">
                    <li><a href="/" class="hover:text-white hover:translate-x-2 transition-all inline-block">Beranda</a></li>
                    <li><a href="#tentang" class="hover:text-white hover:translate-x-2 transition-all inline-block">Tentang Kami</a></li>
                    <li><a href="#bidang" class="hover:text-white hover:translate-x-2 transition-all inline-block">Struktur Bidang</a></li> 
                    <li><a href="/blog" class="hover:text-white hover:translate-x-2 transition-all inline-block">Berita & Blog</a></li>
                </ul>
            </div>

            <div class="md:w-2/7">
                <h4 class="text-lg font-bold mb-6 border-b-2 border-blue-500 w-fit">Hubungi Kami</h4>
                <div class="flex flex-col gap-4 text-sm text-blue-100">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Jl. Kampus Bukit Jimbaran, Kuta Selatan, Badung, Bali - 80364</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope"></i>
                        <span>hmjteknologiinformasi@pnb.ac.id</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-phone"></i>
                        <span>+62 812 3456 7890</span>
                    </div>
                </div>
            </div>

            <div class="md:w-2/7">
                <div class="flex gap-4 justify-between">
                    <h4 class="text-lg font-bold mb-6 border-b-2 border-blue-500 w-fit">Ikuti Kami</h4>
                    <div class="flex gap-4 mb-6">
                        <a href="#" class="h-10 w-10 bg-white/10 flex items-center justify-center rounded-full hover:bg-blue-600 transition">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="h-10 w-10 bg-white/10 flex items-center justify-center rounded-full hover:bg-blue-600 transition">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                        <a href="#" class="h-10 w-10 bg-white/10 flex items-center justify-center rounded-full hover:bg-blue-600 transition">
                            <i class="fab fa-tiktok text-xl"></i>
                        </a>
                    </div> 
                </div> 
                <div class="w-full h-32 bg-blue-800/50 rounded-lg overflow-hidden relative border border-blue-700">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d828.8852295863894!2d115.16202741736684!3d-8.798765622885352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244c13ee9d753%3A0x6c05042449b50f81!2sPoliteknik%20Negeri%20Bali!5e0!3m2!1sen!2sid!4v1766238297592!5m2!1sen!2sid" 
                        class="absolute inset-0 w-full h-full" 
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>

        <div class="border-t border-blue-700 pt-8 text-center">
            <p class="text-sm text-blue-100">
                HMJ Teknologi Informasi Politeknik Negeri Bali &copy; {{ date('Y') }}. All rights reserved. 
                <br class="md:hidden"> 
                Created by <span><a href="https://www.instagram.com/dndyprd/">Dandy</a></span> & <span><a href="https://www.instagram.com/yogadinantakom/">Yoga.</a></span>
            </p>
        </div>
    </div>
</footer>