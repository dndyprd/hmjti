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
                'name' => 'PASTI (Prestasi Aktif Mahasiswa Teknologi Informasi)',
                'abbreviation' => 'pasti',
                'thumbnail' => 'pasti.png',
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kelompok belajar ilmiah di Jurusan Teknologi Informasi. Program kerja ini bertujuan untuk menciptakan mahasiswa yang berprestasi aktif khususnya dalam bidang akademik terkait dunia teknologi informasi.',
                'bidang_id' => 1
            ],
            [
                'name' => 'TechInfinity (Teknologi Tanpa Batas)',
                'abbreviation' => 'techinfinity',
                'thumbnail' => 'techinfinity.png',
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi kegiatan seminar dan workshop terkait dunia teknologi yang berskalah nasional. Program kerja ini sendiri memiliki tujuan untuk meningkatkan keterampilan mahasiswa di bidang teknologi.',
                'bidang_id' => 1
            ],
            [
                'name' => 'OA (Official Account)',
                'abbreviation' => 'oa',
                'thumbnail' => 'oa.png',
                'description' => 'Program kerja Himpunan Mahasiswa Jurusan Teknologi Informasi yang mengurusi segala agenda terkait penyebaran informasi di Jurusan Teknologi Informasi, ',
                'bidang_id' => 1
            ],
            
        ];

        foreach ($prokers as $proker) {
            Proker::create($proker);
        }
    }
}
?>