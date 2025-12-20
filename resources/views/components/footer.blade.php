<footer class="bg-gradient-to-r from-blue-900 via-blue-700 to-sky-500 text-white pt-16 pb-8 font-[Poppins]">
    <div class="container mx-auto px-8 lg:px-28">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3 rounded-lg w-fit">
                    <img src="{{ asset('img/logo-hmjti.png') }}" alt="Logo HMJTI" class="h-12 w-auto">
                    <div class="flex flex-col">
                        <span class="text-sm font-bold uppercase leading-tight">HMJ Teknologi Informasi</span>
                        <span class="text-[10px] text-blue-200 uppercase tracking-widest">KBM Politeknik Negeri Bali</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm leading-relaxed mt-2">
                    Wadah aspirasi dan kreativitas mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Bali. Menuju organisasi yang inovatif dan kolaboratif.
                </p>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-6 border-b-2 border-blue-500 w-fit">Tautan Penting</h4>
                <ul class="flex flex-col gap-3 text-sm text-blue-100">
                    <li><a href="/" class="hover:text-white hover:translate-x-2 transition-all inline-block">Beranda</a></li>
                    <li><a href="#tentang" class="hover:text-white hover:translate-x-2 transition-all inline-block">Tentang Kami</a></li>
                    <li><a href="#bidang" class="hover:text-white hover:translate-x-2 transition-all inline-block">Struktur Bidang</a></li> 
                    <li><a href="/blog" class="hover:text-white hover:translate-x-2 transition-all inline-block">Berita & Blog</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-6 border-b-2 border-blue-500 w-fit">Hubungi Kami</h4>
                <div class="flex flex-col gap-4 text-sm text-blue-100">
                    <div class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-blue-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Jl. Kampus Bukit Jimbaran, Kuta Selatan, Badung, Bali - 80364</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>hmjteknologiinformasi@pnb.ac.id</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>+62 812 3456 7890</span>
                    </div>
                </div>
            </div>

            <div>
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
                <div class="w-full h-32 bg-blue-800/50 rounded-lg overflow-hidden relative border border-blue-700">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.865570077146!2d115.1593!3d-8.7984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDcnNTQuMiJTIDExNcKwMDknMzMuNSJF!5e0!3m2!1sen!2sid!4v1621500000000!5m2!1sen!2sid" 
                        class="absolute inset-0 w-full h-full grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-500" 
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>

        <div class="border-t border-blue-800 pt-8 text-center">
            <p class="text-xs text-blue-300">
                &copy; {{ date('Y') }} HMJ Teknologi Informasi Politeknik Negeri Bali. All rights reserved. 
                <br class="md:hidden"> 
                Created by Dandy & Yoga.
            </p>
        </div>
    </div>
</footer>