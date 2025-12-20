<?php
namespace Database\Seeders;
 
use App\Models\Proker;
use Illuminate\Database\Seeder;

class ProkerSeeder extends Seeder
{
    public function run(): void
    {
        $prokers = [ 
            [
                'name' => 'Pengenalan Kehidupan Kampus Mahasiswa Baru',
                'slug' => 'PKKMB', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi pengenalan kehidupan kampus bagi mahasiswa baru di Jurusan Teknologi Informasi.',
            ],
            [
                'name' => 'Prestasi Aktif Mahasiswa Teknologi Informasi',
                'slug' => 'PASTI', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kelompok belajar ilmiah di Jurusan Teknologi Informasi. Program kerja ini bertujuan untuk menciptakan mahasiswa yang berprestasi aktif khususnya dalam bidang akademik terkait dunia teknologi informasi.',
                'bidang_id' => 1
            ],
            [
                'name' => 'Teknologi Tanpa Batas',
                'slug' => 'TECHINFINITY', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kegiatan seminar dan workshop terkait dunia teknologi yang berskalah nasional. Program kerja ini sendiri memiliki tujuan untuk meningkatkan keterampilan mahasiswa di bidang teknologi.',
                'bidang_id' => 1
            ],
            [
                'name' => 'PNB Information Techology Competition',
                'slug' => 'PNB ITC', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menyediakan kegiatan perlombaan terkait teknologi informasi yang berskala nasional.',
                'bidang_id' => 1
            ], 
            [
                'name' => 'Official Account',
                'slug' => 'OA', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang mengurusi segala agenda terkait penyebaran informasi dan rekapan kegiatan di Jurusan Teknologi Informasi, baik melalui website atau sosial media seperti Instagram, TikTok, YouTube, WhatsApp atau website.',
                'bidang_id' => 1
            ],
            [
                'name' => 'Pekan Olahraga Seni Mahasiswa',
                'slug' => 'PORSENIMA', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kegiatan pekan olahraga dan seni bagi mahasiswa antar mahasiswa di Politeknik Negeri Bali.',
                'bidang_id' => 2
            ], 
            [
                'name' => 'Creative Competition of Information Technology',
                'slug' => 'CCIT', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kegiatan pekan olahraga dan seni bagi mahasiswa antar mahasiswa di Politeknik Negeri Bali.',
                'bidang_id' => 2
            ],
            [
                'name' => 'Pelepasan Calon Wisudawan',
                'slug' => 'PCW', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menyiapkan pelepasn calon wisudawan di Jurusan Teknologi Informasi.',
                'bidang_id' => 2
            ],
            [
                'name' => 'Bina Desa',
                'slug' => 'BINA DESA', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang bergerak pada pengabdian kepada masyarakat dengan menciptakan sebuah inovasi pada desa yang sedang dibantu.',
                'bidang_id' => 3
            ],
            [
                'name' => 'Regenerasi Pemimpin Teknologi Informasi',
                'slug' => 'REPETISI', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menyiapkan pemilihan ketua Himpunan Mahasiswa Jurusan Teknologi Informarsi untuk periode selanjutnya.',
                'bidang_id' => 3
            ],
            [
                'name' => 'Baju, Jaket dan Merchandise',
                'slug' => 'BAJU, JAKET DAN MERCHANDISE', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menjual baju, jaket dan merchendaise yang dimiliki oleh Jurusan Teknologi Informasi.',
                'bidang_id' => 3
            ], 
            [
                'name' => 'Merangkul Persahabatan Teknologi Informasi',
                'slug' => 'MERPATI', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang mengadakan kegiatan makrab antara mahasiswa di Jurusan Teknologi Informasi khususnya mahasiswa baru.',
                'bidang_id' => 3
            ],
            [
                'name' => 'Aspirasi',
                'slug' => 'ASPIRASI', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi aspirasi-aspirasi dan pendapat mahasiswa untuk Himpunan atau Jurusan Teknologi Informasi.',
                'bidang_id' => 3
            ], 
            [
                'name' => 'Inventaris',
                'slug' => 'INVENTARIS', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menyediakan peminjaman barang-barang yang dimiliki oleh Himpunan Mahasiswa Jurusan Teknologi Informasi.',
                'bidang_id' => 3
            ],
        ];

        foreach ($prokers as $proker) {
            Proker::create($proker);
        }
    }
}
?>