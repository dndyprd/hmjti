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
                'description' => '',
                'bidang_id' => 1
            ],
            [
                'name' => 'Prestasi Aktif Mahasiswa Teknologi Informasi',
                'slug' => 'PASTI', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kelompok belajar ilmiah di Jurusan Teknologi Informasi. Program kerja ini bertujuan untuk menciptakan mahasiswa yang berprestasi aktif khususnya dalam bidang akademik terkait dunia teknologi informasi.',
                'bidang_id' => 2
            ],
            [
                'name' => 'Teknologi Tanpa Batas',
                'slug' => 'TECHINFINITY', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kegiatan seminar dan workshop terkait dunia teknologi yang berskalah nasional. Program kerja ini sendiri memiliki tujuan untuk meningkatkan keterampilan mahasiswa di bidang teknologi.',
                'bidang_id' => 2
            ],
            [
                'name' => 'Official Account',
                'slug' => 'OA', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang mengurusi segala agenda terkait penyebaran informasi dan rekapan kegiatan di Jurusan Teknologi Informasi, baik melalui website atau sosial media seperti Instagram, TikTok, YouTube, WhatsApp atau website.',
                'bidang_id' => 2
            ],
            [
                'name' => 'Politeknik Negeri Bali Information Techology Competition',
                'slug' => 'PNB ITC', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menyediakan kegiatan perlombaan terkait teknologi informasi yang berskala nasional.',
                'bidang_id' => 2
            ], 
            [
                'name' => 'Pekan Olahraga Seni Mahasiswa',
                'slug' => 'PORSENIMA', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kegiatan pekan olahraga dan seni bagi mahasiswa antar mahasiswa di Politeknik Negeri Bali.',
                'bidang_id' => 3
            ], 
            [
                'name' => 'Creative Competition of Information Technology',
                'slug' => 'CCIT', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kegiatan pekan olahraga dan seni bagi mahasiswa antar mahasiswa di Politeknik Negeri Bali.',
                'bidang_id' => 3
            ],
            [
                'name' => 'Pelepasan Calon Wisudawan',
                'slug' => 'PCW', 
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menyiapkan pelepasn calon wisudawan di Jurusan Teknologi Informasi.',
                'bidang_id' => 3
            ],
            [
                'name' => 'Merangkul Persahabatan Teknologi Informasi',
                'slug' => 'MERPATI', 
                'description' => '',
                'bidang_id' => 4
            ],
            [
                'name' => 'Regenerasi Pemimpin Teknologi Informasi',
                'slug' => 'REPETISI', 
                'description' => '',
                'bidang_id' => 4
            ],
            [
                'name' => 'Bina Desa',
                'slug' => 'BINA DESA', 
                'description' => '',
                'bidang_id' => 4
            ],
            [
                'name' => 'Aspirasi',
                'slug' => 'ASPIRASI', 
                'description' => '',
                'bidang_id' => 4
            ], 
            [
                'name' => 'Inventaris',
                'slug' => 'INVENTARIS', 
                'description' => '',
                'bidang_id' => 4
            ],
            [
                'name' => 'Baju dan Jaket',
                'slug' => 'BAJU DAN JAKET', 
                'description' => '',
                'bidang_id' => 4
            ],
            [
                'name' => 'Merchendaise',
                'slug' => 'MERCHENDAISE', 
                'description' => '',
                'bidang_id' => 4
            ],
        ];

        foreach ($prokers as $proker) {
            Proker::create($proker);
        }
    }
}
?>