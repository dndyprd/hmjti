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
                'status' => 'published',
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
                'status' => 'published',
            ], 
            [
                'title' => 'PNB IT Competition #16 x ECO 2024',
                'thumbnail' => 'img/blogs/pnb-it-competition-16-x-eco-2024_20251218_040917.jpeg',
                'slug' => 'pnb-it-competition-16-x-eco-2024',
                'content' => 'Kegiatan kolaborasi antara HMJ Teknologi Informasi dan Teknik Elektro, menciptakan kegiatan perlombaan berskala nasional bertema "Milenials Innovation in Renewable Technology as Pillar in Building the Digital Era with Full Environmental Awareness". Berlaksana di Gedung Widya Padma, Politeknik Negeri Bali mulai dari tanggal 11 Oktober 2024 hingga 13 Oktober 2024.

Menghadirkan berbagai macam jenis lomba yang berkaitan dengan teknologi informasi seperti Desain Website, Poster, UI/UX, Programming, Jaringan Komputer, Sumobot, Line Follower, Pengembangan Bisnis TI, Internet of Things dan Mobile Legends. Program kerja ini diketuai oleh I Gede Wisnu Tangkas Gapara.',
                'start_date' => '2024-10-11',
                'end_date' => '2024-10-13',
                'proker_id' => 4,
                'status' => 'published',
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
                'status' => 'published',
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
                'title' => 'Seminar dan Workshop Game Development TechInfinity 2025',
                'thumbnail' => 'img/blogs/techinfinity-2025_20251217_222842.jpeg',
                'slug' => 'seminar-dan-workshop-game-development-techinfinity-2025',
                'content' => '<p>Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJ TI) Politeknik Negeri Bali sukses menyelenggarakan kegiatan Seminar dan Workshop bertajuk <em>&quot;Unlock Game Worlds with Construct 3: Step into Game Development&quot;</em>. Acara yang berfokus pada edukasi pengembangan permainan digital ini berlangsung di Ruang Widya Guna, Politeknik Negeri Bali  dan juga daring melalui Zoom pada tanggal 21 September 2025.</p><p>Kegiatan diawali dengan sesi pembukaan oleh pembawa acara (MC), yang kemudian dilanjutkan dengan laporan dari <strong>I Putu Dandy Pradnyana</strong> selaku Ketua Panitia pelaksana. Dalam laporannya, Dandy menyampaikan sambutan beserta tujuan utama program kerja ini, yang dimana untuk membekali mahasiswa dengan keterampilan teknis di bidang industri kreatif, khususnya pengembangan game. Acara dibuka secara resmi melalui sambutan dari perwakilan Jurusan Teknologi Informasi yang sekaligus melakukan prosesi pemukulan gong sebagai simbolis dimulainya kegiatan secara formal.</p><h3><strong>Sesi Seminar: Pengenalan Industri Game</strong></h3><p>Memasuki agenda inti, kegiatan diambil alih oleh <strong>Ni Putu Candra Artania Putri</strong> selaku moderator yang akan membawakan acara dengan semi-formal dan menghadirkan <strong>Gede Tanok Arta Wijaya</strong>, atau yang akrab disapa <strong>Bagus De</strong>, sebagai pemateri pada TechInfinity kali ini. Pada sesi seminar, Bagus De memaparkan materi komprehensif mengenai fundamental pengembangan game (<em>game development</em>). Materi tersebut mencakup:</p><ul><li><p><strong>Definisi dan Fundamental</strong>: Penjelasan mengenai apa itu <em>game development</em> dan bagaimana ekosistem industri game saat ini.</p></li><li><p><strong>Manfaat Pengembangan Game</strong>: Membahas potensi karier serta manfaat pengembangan logika dan kreativitas melalui pembuatan game.</p></li><li><p><strong>Perangkat Pengembangan</strong>: Pengenalan berbagai alat (<em>tools</em>) pendukung, dengan fokus utama pada penggunaan <em>engine</em> Construct 3 yang efisien bagi pengembang pemula maupun profesional.</p></li></ul><h3><strong>Sesi Workshop: Implementasi Praktis</strong></h3><p>Setelah sesi pemaparan teori, kegiatan dilanjutkan dengan workshop praktik secara langsung. Para peserta dipandu untuk mengimplementasikan teori yang telah didapat dengan membangun sebuah game bertema <em>&quot;Flappy Bird&quot;</em> menggunakan platform Construct 3. Dalam sesi ini, peserta mempelajari logika pemrogaman visual, pengaturan aset, hingga mekanisme <em>gameplay</em> dasar.</p><h3></h3><p>Sebagai penutup rangkaian workshop, panitia melakukan peninjauan terhadap hasil karya para peserta. Kegiatan diakhiri dengan pemilihan tim dengan hasil pengembangan game terbaik berdasarkan aspek fungsionalitas dan kreativitas. Tim terpilih kemudian diberikan apresiasi berupa hadiah sebagai bentuk penghargaan atas hasil kerja keras mereka selama workshop berlangsung. Setelah penyerahan hadiah acara ditutup oleh MC dan diakhiri dengan sesi foto bersama</p><p>Melalui kegiatan ini, diharapkan para peserta dapat terus mengembangkan minat dan bakat mereka di bidang teknologi informasi, khususnya dalam memperkuat SDM lokal yang kompeten di industri pengembangan game Indonesia.</p>',
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
                'title' => 'Perlombaan PNB IT Competition #17 2025',
                'thumbnail' => 'img/blogs/pnb-it-competition-17-2025_20251218_024108.jpeg',
                'slug' => 'pnb-it-competition-17-2025',
                'content' => '<p>Himpunan Mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Bali telah melaksanakan kegiatan tahunan PNB IT Competition #17. Acara berskala nasional ini mengusung tema &quot;<em>Innovate the Future: Transforming Ideas into Technology</em>&quot; dan berlangsung selama tiga hari, mulai tanggal 24 hingga 26 Oktober 2025. Kegiatan yang berpusat di Gedung Widya Padma ini diketuai oleh Lunny Daffalia Santoso. PNB ITC #17 bertujuan untuk menjadi wadah bagi mahasiswa dan pelajar dalam mengembangkan potensi di bidang teknologi informasi melalui tujuh cabang perlombaan.</p><p><strong>Rangkaian Kegiatan Hari Pertama (24 Oktober 2025) </strong><br>Kegiatan hari pertama diawali dengan seremoni pembukaan yang ditandai secara simbolis dengan penancapan maskot PNB ITC #17. Setelah pembukaan selesai, rangkaian perlombaan langsung dimulai pada beberapa lokasi:</p><ul><li><p>Gedung Widya Padma: Babak penyisihan untuk kategori lomba Sumobot.</p></li><li><p>Gedung EB: Pelaksanaan lomba Programming</p></li><li><p>Gedung EC : Jaringan Komputer (Jarkom).</p></li></ul><p><strong>Rangkaian Kegiatan Hari Kedua (25 Oktober 2025)</strong><br>Pada hari kedua, perlombaan berfokus pada bidang desain dan kompetisi tim yang bertempat di:</p><ul><li><p>Gedung EC: Pelaksanaan lomba UI/UX Design.</p></li><li><p>Gedung EB: Pelaksanaan lomba Desain Website.</p></li><li><p>Gedung Widya Padma: Pertandingan babak Final untuk kategori Mobile Legends (MLBB).</p></li></ul><p><strong>Rangkaian Kegiatan Hari Ketiga (26 Oktober 2025)</strong><br>Hari terakhir merupakan babak final untuk beberapa kategori sisa serta penutupan acara:</p><ul><li><p>Gedung EC: Pelaksanaan lomba Desain Poster.</p></li><li><p>Gedung Widya Padma: Babak final Sumobot.</p></li></ul><p>Rangkaian PNB ITC #17 resmi ditutup setelah seluruh perlombaan selesai. Prosesi penutupan dilakukan dengan pencabutan maskot, yang kemudian dilanjutkan dengan agenda pengumuman juara untuk seluruh kategori lomba. Perlombaan ini menghadirkan talenta-talenta hebat yang diharapkan dapat berkontribusi signifikan bagi kemajuan teknologi di Indonesia di masa mendatang.</p><table><tbody><tr><th rowspan="1" colspan="1" data-colwidth="205"><p>Kategori Lomba</p></th><th rowspan="1" colspan="1" data-colwidth="264"><p>Juara 1</p></th><th rowspan="1" colspan="1" data-colwidth="258"><p>Juara 2</p></th><th rowspan="1" colspan="1" data-colwidth="255"><p>Juara 3</p></th><th rowspan="1" colspan="1"><p>Best Fighter / Favorit</p></th></tr><tr><td rowspan="1" colspan="1" data-colwidth="205"><p>Sumobot</p></td><td rowspan="1" colspan="1" data-colwidth="264"><p>Corvus | Aitu Kokoro</p></td><td rowspan="1" colspan="1" data-colwidth="258"><p>Corvus | Aitu Prunus</p></td><td rowspan="1" colspan="1" data-colwidth="255"><p>UDUN_TURU</p></td><td rowspan="1" colspan="1"><p>BARIS</p></td></tr><tr><td rowspan="1" colspan="1" data-colwidth="205"><p>Programming</p></td><td rowspan="1" colspan="1" data-colwidth="264"><p>Anak Agung Made Krishna Mahendrayana</p></td><td rowspan="1" colspan="1" data-colwidth="258"><p>Nyoman Wiprayanka</p></td><td rowspan="1" colspan="1" data-colwidth="255"><p>I Putu Pranata Ari Wiguna</p></td><td rowspan="1" colspan="1"><p>-</p></td></tr><tr><td rowspan="1" colspan="1" data-colwidth="205"><p>Jaringan Komputer</p></td><td rowspan="1" colspan="1" data-colwidth="264"><p>Alvin Zaidan Faizal Putra<br>Azmi Fauzan Akbar</p></td><td rowspan="1" colspan="1" data-colwidth="258"><p>Muhammad Fathurrizqy Fadlillah<br>Pasha El Zami</p></td><td rowspan="1" colspan="1" data-colwidth="255"><p>Andhika Alif Putra Yani<br>Haydar Abshor Budiman</p></td><td rowspan="1" colspan="1"><p>-</p></td></tr><tr><td rowspan="1" colspan="1" data-colwidth="205"><p>MLBB</p></td><td rowspan="1" colspan="1" data-colwidth="264"><p>UPN Escanor</p></td><td rowspan="1" colspan="1" data-colwidth="258"><p>WIHOPE</p></td><td rowspan="1" colspan="1" data-colwidth="255"><p>DWISMAN</p></td><td rowspan="1" colspan="1"><p>-</p></td></tr><tr><td rowspan="1" colspan="1" data-colwidth="205"><p>Desain UI/UX</p></td><td rowspan="1" colspan="1" data-colwidth="264"><p>Hura</p></td><td rowspan="1" colspan="1" data-colwidth="258"><p>BioSphereX</p></td><td rowspan="1" colspan="1" data-colwidth="255"><p>HiCore</p></td><td rowspan="1" colspan="1"><p>-</p></td></tr><tr><td rowspan="1" colspan="1" data-colwidth="205"><p>Desain Poster</p></td><td rowspan="1" colspan="1" data-colwidth="264"><p>Panji Firmansyah</p></td><td rowspan="1" colspan="1" data-colwidth="258"><p>Gede Kamajaya Nur Sangkara Samudra</p></td><td rowspan="1" colspan="1" data-colwidth="255"><p>Ni Komang Wulan Vini Aprilia</p></td><td rowspan="1" colspan="1"><p>Putu Renita Rayi Nariswari</p></td></tr><tr><td rowspan="1" colspan="1" data-colwidth="205"><p>Desain Website</p></td><td rowspan="1" colspan="1" data-colwidth="264"><p>Dewa Made Angga Wibawa</p></td><td rowspan="1" colspan="1" data-colwidth="258"><p>I Kadek Risky Raju Danendra</p></td><td rowspan="1" colspan="1" data-colwidth="255"><p>I Ketut Krisna Putra Sinatria</p></td><td rowspan="1" colspan="1"><p>-</p></td></tr></tbody></table>',
                'start_date' => '2025-10-24',
                'end_date' => '2025-10-26',
                'proker_id' => 4,
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