<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [ 
            
            [
                'title' => 'Pembukaan MIPA MIKRO x PASTI 2024',
                'thumbnail' => 'img/blogs/pembukaan-mipa-mikro-x-pasti-2024_20251218_032839.jpeg',
                'slug' => 'pembukaan-mipa-mikro-x-pasti-2024',
                'content' => 'Kegiatan kolaborasi HMJ Teknologi Informasi dan Teknik Elektro, pembukaan program kerja kelompok belajar ilmiah jurusan teknologi informasi dan teknik elektro bertema "Learn to Evolve with Technology". Berlaksana di Ruang Widya Guna, Politeknik Negeri Bali pada tanggal 16 Maret 2024.

Menghadirkan Dr. I Made Gede Sunarya, S.Kom., M.Cs. sebagai pemateri utama dan Hafidz Aby Pratama sebagai pemateri yang membawakan materi terkait program kerja PASTI ini. Program kerja ini diketuai oleh Ni Kadek Sita Ayu Suwari.',
                'start_date' => '2024-03-16',
                'end_date' => '2024-03-16',
                'proker_id' => 2,
                'status' => 'archived',
            ], 
            [
                'title' => 'Pengenalan Kehidupan Kampus Mahasiswa Baru Teknologi Informasi 2024',
                'thumbnail' => 'img/blogs/pengenalan-kehidupan-kampus-mahasiswa-baru-teknologi-informasi-2024_20251218_035258.jpeg',
                'slug' => 'pengenalan-kehidupan-kampus-mahasiswa-baru-teknologi-informasi-2024',
                'content' => 'Kegiatan pengenalan kehidupan kampus kepada mahasiswa baru khususnya di Jurusan Teknologi Informasi. Berlaksana di Politeknik Negeri Bali mulai dari tanggal 26 Agustus hingga 28 Agustus 2024.

Setelah melakukan PKKMB di GOR Jasdam Udayana selama 2 hari, mahasiswa teknologi informasi berkumpul sesuai dengan jurusan masing-masing, mendengarkan peraturan - peraturan yang terdapat di Politeknik Negeri Bali, dan pengenalan petinggi di Jurusan Teknologi Informasi. Program kerja ini dipegang oleh I Komang Ariya Mahardika.',
                'start_date' => '2024-08-26',
                'end_date' => '2024-08-28',
                'proker_id' => 1,
                'status' => 'archived',
            ], 
            [
                'title' => 'PNB IT Competition #16 x ECO 2024',
                'thumbnail' => 'img/blogs/pnb-it-competition-16-x-eco-2024_20251218_040917.jpeg',
                'slug' => 'pnb-it-competition-16-x-eco-2024',
                'content' => 'Kegiatan kolaborasi antara HMJ Teknologi Informasi dan Teknik Elektro, menciptakan kegiatan perlombaan berskala nasional bertema "Milenials Innovation in Renewable Technology as Pillar in Building the Digital Era with Full Environmental Awareness". Berlaksana di Gedung Widya Padma, Politeknik Negeri Bali mulai dari tanggal 11 Oktober 2024 hingga 13 Oktober 2024.

Menghadirkan berbagai macam jenis lomba yang berkaitan dengan teknologi informasi seperti Desain Website, Poster, UI/UX, Programming, Jaringan Komputer, Sumobot, Line Follower, Pengembangan Bisnis TI, Internet of Things dan Mobile Legends. Program kerja ini diketuai oleh I Gede Wisnu Tangkas Gapara.',
                'start_date' => '2024-10-11',
                'end_date' => '2024-10-13',
                'proker_id' => 5,
                'status' => 'archived',
            ],  
            [
                'title' => 'Regenerasi Pemimpin Teknologi Informasi 2024',
                'thumbnail' => 'img/blogs/regenerasi-pemimpin-teknologi-informasi-2024_20251218_054017.jpeg',
                'slug' => 'regenerasi-pemimpin-teknologi-informasi-2024',
                'content' => 'Kegiatan pemilihan Ketua Himpunan Mahasiswa Jurusan Teknologi Informasi periode 2025 dengan tema "Menciptakan Pemimpin Berkualitas dan Berwawasan Luas dengan Menjunjung Tinggi Semangat Demokrasi dan Kekeluargaan". Berlaksana di Gedung EA, Politeknik Negeri Bali pada tanggal 27 September 2024.

Pada kegiatan Repetisi menghadirkan tiga kandidat Ketua Himpunan Mahasiswa Jurusan Teknologi Informasi. Kandidat nomor urut 1 yaitu I Made Haryo Winangun, kandidat nomor urut 2 yaitu I Putu Gede Putra Aryana, dan kandidat nomor urut 3 yaitu I Kadek Dwi Cahyana. Kandidat terpilih sebagai Ketua Himpunan Mahasiswa Jurusan Teknologi Informasi periode 2025 adalah kandidat dengan nomor urut 3, yaitu I Kadek Dwi Cahyana. Program kerja ini diketuai oleh Ni Putu Bulan Klara Diyani Bastian.',
                'start_date' => '2024-09-27',
                'end_date' => '2024-09-27',
                'proker_id' => 10,
                'status' => 'archived',
            ],
            [
                'title' => 'Pembukaan Prestasi Aktif Mahasiswa Teknologi informasi 2025',
                'thumbnail' => 'img/blogs/pembukaan-prestasi-aktif-mahasiswa-teknologi-informasi-2025_20251218_032839.jpeg',
                'slug' => 'pembukaan-prestasi-aktif-mahasiswa-teknologi-informasi-2025',
                'content' => 'Kegiatan pembukaan program kerja kelompok belajar ilmiah jurusan teknologi informasi bertema "Learn, Innovate and Advance  in the Technology". Berlaksana di Ruang Widya Guna, Politeknik Negeri Bali pada tanggal 8 Maret 2025.

Menghadirkan Ir. I Dewa Made Adi Baskara Joni, S.Kom. M.Kom., Ph.D  sebagai pemateri yang membawakan materi terkait AI (Artificial Intelegence) dan Ni Kadek Sita Ayu Suwari sebagai pemateri yang membawakan materi terkait program kerja PASTI ini. Program kerja ini diketuai oleh Sarif Hidayatullah.',
                'start_date' => '2025-03-08',
                'end_date' => '2025-03-08',
                'proker_id' => 2,
                'status' => 'published',
            ],  
            [
                'title' => 'Pelepasan Calon Wisudawan Jurusan Teknologi Informasi 2025',
                'thumbnail' => 'img/blogs/pelepasan-calon-wisudawan-jurusan-teknologi-informasi-2025_20251218_002442.jpeg',
                'slug' => 'pelepasan-calon-wisudawan-jurusan-teknologi-informasi-2025',
                'content' => 'Kegiatan Pelepasan Calon Wisudawan Mahasiswa Jurusan Teknologi Informasi bertema "Eternal in Memory, Walking Untethered". Berlaksana di Gedung Widya Padma, Politeknik Negeri Bali pada tanggal 17 September 2025.

Menyiapkan pelepasan calon wisudawan bagi mahasiswa semester 6 Manajemen Informatika angkatan 2022, dan mahasiswa semester 8 Teknologi Rekayasa Perangkat Lunak angkatan 2021. Program kerja ini diketuai oleh I Putu Prema Mahesa Priyambadha.',
                'start_date' => '2025-09-17',
                'end_date' => '2025-09-17',
                'proker_id' => 8,
                'status' => 'published', 
            ], 
            [
                'title' => 'Seminar & Workshop TechInfinity 2025',
                'thumbnail' => 'img/blogs/techinfinity-2025_20251217_222842.jpeg',
                'slug' => 'techinfinity-2025',
                'content' => 'Kegiatan Seminar dan Workshop bertema "Unlock Game Worlds with Construct 3: Step into Game Development". Berlaksana di Ruang Widya Guna, Politeknik Negeri Bali pada tanggal 21 September 2025.

Menghadirkan Gede Tanok Arta Wijaya atau akrab yang dikenal Bagus De sebagai pemateri yang membawakan materi seminar dan workshop tentang game developer menggunakan Construct 3. Program kerja ini diketuai oleh I Putu Dandy Pradnyana.',
                'start_date' => '2025-09-21',
                'end_date' => '2025-09-21',
                'proker_id' => 3,
                'status' => 'published',
            ], 
            [
                'title' => 'Pengenalan Kehidupan Kampus Mahasiswa Baru Teknologi Informasi 2025',
                'thumbnail' => 'img/blogs/pengenalan-kehidupan-kampus-mahasiswa-baru-teknologi-informasi-2025_20251218_035258.jpeg',
                'slug' => 'pengenalan-kehidupan-kampus-mahasiswa-baru-teknologi-informasi-2025',
                'content' => 'Kegiatan pengenalan kehidupan kampus kepada mahasiswa baru khususnya di Jurusan Teknologi Informasi. Berlaksana di Politeknik Negeri Bali mulai dari tanggal 28 Agustus hingga 30 Agustus 2025.

Setelah melakukan PKKMB di GOR Jasdam Udayana selama 2 hari, mahasiswa teknologi informasi berkumpul sesuai dengan jurusan masing-masing, mendengarkan peraturan - peraturan yang terdapat di Politeknik Negeri Bali, dan pengenalan petinggi di Jurusan Teknologi Informasi. Program kerja ini dipegang oleh I Gede Satya Budi Dharma Wiguna.',
                'start_date' => '2025-08-28',
                'end_date' => '2025-08-30',
                'proker_id' => 1,
                'status' => 'published',
            ], 
            [
                'title' => 'PNB IT Competition #17 2025',
                'thumbnail' => 'img/blogs/pnb-it-competition-17-2025_20251218_024108.jpeg',
                'slug' => 'pnb-it-competition-17-2025',
                'content' => 'Kegiatan perlombaan berskala nasional bertema "Innovate the Future: Transforming Ideas into Technology". Berlaksana di Gedung Widya Padma, Politeknik Negeri Bali mulai dari tanggal 24 Oktober 2025 hingga 26 Oktober 2025.

Menghadirkan berbagai macam jenis lomba yang berkaitan dengan teknologi informasi seperti Desain Website, Poster, UI/UX, Programming, Jaringan Komputer, Sumobot dan Mobile Legends. Program kerja ini diketuai oleh Lunny Daffalia Santoso.',
                'start_date' => '2025-10-24',
                'end_date' => '2025-10-26',
                'proker_id' => 5,
                'status' => 'published', 
            ], 
            [
                'title' => 'Regenerasi Pemimpin Teknologi Informasi 2025',
                'thumbnail' => 'img/blogs/regenerasi-pemimpin-teknologi-informasi-2025_20251218_054017.jpeg',
                'slug' => 'regenerasi-pemimpin-teknologi-informasi-2025',
                'content' => 'Kegiatan pemilihan Ketua Himpunan Mahasiswa Jurusan Teknologi Informasi periode 2026 dengan tema "Mencetak Pemimipin yang Inovatif, Tangguh, Beretika, dan Siap Menghadapi Tantangan Masa Depan". Berlaksana di Gedung PUT, Politeknik Negeri Bali pada tanggal 9 November 2025.

Pada kegiatan Repetisi kali ini menghadirkan tiga kandidat Ketua Himpunan Mahasiswa Jurusan Teknologi Informasi. Kandidat nomor urut 1 yaitu I Gede Adhitya Bimantara, kandidat nomor urut 2 yaitu I Gusti Ngurah Agung Surya Saktiana Putra, dan kandidat nomor urut 3 yaitu I Putu Dandy Pradnyana. Kandidat terpilih sebagai Ketua Himpunan Mahasiswa Jurusan Teknologi Informasi periode 2026 adalah kandidat dengan nomor urut 1, yaitu I Gede Adhitya Bimantara. Program kerja ini diketuai oleh I Kadek Krisna Kurniawan',
                'start_date' => '2025-11-09',
                'end_date' => '2025-11-09',
                'proker_id' => 10,
                'status' => 'published',
            ],
        ];

        foreach ($blogs as $blog) { 
            if (empty($blog['slug'])) {
                $blog['slug'] = Str::slug($blog['title']);
            }

            Blog::updateOrCreate(
                ['slug' => $blog['slug']],
                $blog
            );
        }
    }
}