<?php

namespace Database\Seeders;

use App\Models\Bidang;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    public function run(): void
    {
        $bidangs = [
            [
                'name' => 'Inti',
                'description' => 'Inti Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi seluruh bidang-bidang yang terdapat di Himpunan Mahasiswa Jurusan Teknologi Informasi.',
                'number' => 0
            ],
            [
                'name' => 'Penalaran dan Keilmuan',
                'description' => 'Bidang Penalaran dan Keilmuan merupakan salah satu bidang di Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi segala bentuk kegiatan mahasiswa yang berhubungan dengan prestasi dan kegiatan akademik terkait dunia teknologi bagi mahasiswa.',
                'number' => 1
            ],
            [
                'name' => 'Minat dan Bakat',
                'description' => 'Bidang Minat dan Bakat merupakan salah satu bidang di Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi segala bentuk kegiatan mahasiswa yang berhubungan dengan minat dan bakat para mahasiswa, khususnya di bidang non-akademik.',
                'number' => 2
            ],
            [
                'name' => 'Pengabdian Masyarakat dan Kesejahteraan Mahasiswa',
                'description' => 'Bidang Pengabdian Masyarakat dan Kesejahteraan Mahasiswa merupakan salah satu bidang di Himpunan Mahasiswa Jurusan Teknologi Informasi yang menaungi segala bentuk kegiatan pengabdian kepada masyarakat luas, serta menaungi kesejahteraan mahasiswa di Jurusan Teknologi Informasi.',
                'number' => 3
            ], 
        ];

        foreach ($bidangs as $bidang) {
            Bidang::create($bidang);
        }
    }
}
