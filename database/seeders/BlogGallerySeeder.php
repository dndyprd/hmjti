<?php

namespace Database\Seeders;

use App\Models\BlogGallery;
use Illuminate\Database\Seeder;

class BlogGallerySeeder extends Seeder
{
    public function run(): void
    {
        $gallerys = [  
            [ 
                'blog_id' => 6,
                'photo' => 'img/blogs/gallery/pelepasan-calon-wisudawan-jurusan-teknologi-informasi-2025_20251219_134839_694557b79c740.jpeg',
            ],  
            [ 
                'blog_id' => 6,
                'photo' => 'img/blogs/gallery/pelepasan-calon-wisudawan-jurusan-teknologi-informasi-2025_20251219_134839_694557b79df79.jpeg',
            ],  
            [ 
                'blog_id' => 6,
                'photo' => 'img/blogs/gallery/pelepasan-calon-wisudawan-jurusan-teknologi-informasi-2025_20251219_134839_694557b79f0dd.jpeg',
            ],  
            [ 
                'blog_id' => 6,
                'photo' => 'img/blogs/gallery/pelepasan-calon-wisudawan-jurusan-teknologi-informasi-2025_20251219_134839_694557b7a05d9.jpeg',
            ], 
            [ 
                'blog_id' => 7,
                'photo' => 'img/blogs/gallery/seminar-workshop-techinfinity-2025_20251219_134530_694556fae45cf.jpeg',
            ], 
            [ 
                'blog_id' => 7,
                'photo' => 'img/blogs/gallery/seminar-workshop-techinfinity-2025_20251219_134530_694556fae32ae.jpeg',
            ], 
            [ 
                'blog_id' => 7,
                'photo' => 'img/blogs/gallery/seminar-workshop-techinfinity-2025_20251219_134530_694556fada2ed.jpg',
            ], 
            [ 
                'blog_id' => 7,
                'photo' => 'img/blogs/gallery/seminar-workshop-techinfinity-2025_20251219_134530_694556fae1d84.jpeg',
            ], 
            [ 
                'blog_id' => 7,
                'photo' => 'img/blogs/gallery/seminar-workshop-techinfinity-2025_20251219_134530_694556fae05a2.jpeg',
            ],
            [ 
                'blog_id' => 9,
                'photo' => 'img/blogs/gallery/pnb-it-competition-17-2025_20251219_090519_6945154f5849c.jpeg',
            ],
            [ 
                'blog_id' => 9,
                'photo' => 'img/blogs/gallery/pnb-it-competition-17-2025_20251219_090519_6945154f59e37.jpeg',
            ],
            [ 
                'blog_id' => 9,
                'photo' => 'img/blogs/gallery/pnb-it-competition-17-2025_20251219_090519_6945154f5b251.jpeg',
            ],
            [ 
                'blog_id' => 9,
                'photo' => 'img/blogs/gallery/pnb-it-competition-17-2025_20251219_090519_6945154f5ca5f.jpeg',
            ],
        ];

        foreach ($gallerys as $gallery) {
            BlogGallery::create($gallery);
        }
    }
}
