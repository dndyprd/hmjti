<?php

namespace App\Http\Controllers;

use App\Models\Blog; 
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;  

class BlogController extends Controller
{ 
    /**
     * LANDING PAGE
     */
    public function index()
    {
        try { 
            $blogs = Blog::select([
                    'id', 'title', 'thumbnail', 'slug', 'content', 
                    'start_date', 'end_date', 'status', 'created_at', 'proker_id'
                ])
                ->with(['prokers:id,slug,name']) 
                ->where('status', 'published')  
                ->orderBy('created_at', 'desc')
                ->limit(6) 
                ->get();
            
            // Format data untuk ditampilkan di view
            $formattedBlogs = $blogs->map(function ($blog) {
                return $this->formatBlogData($blog);
            });
            
            return view('landing', [
                'blogs' => $formattedBlogs,
                'title' => 'Artikel Terbaru'
            ]);
            
        } catch (Exception $e) {  
            return view('welcome', [
                'blogs' => [],
                'title' => 'Artikel Terbaru',
                'error' => 'Terjadi kesalahan saat memuat artikel'
            ]);
        }
    }
    
    /**
     * HALAMAN SEMUA BLOG   
     */
    public function allBlogs()
    {
        try {
            $blogs = Blog::select([
                    'id', 'title', 'thumbnail', 'slug', 'content', 
                    'start_date', 'end_date', 'status', 'proker_id'
                ])
                ->with(['prokers:id,slug,name']) 
                ->where('status', 'published')
                ->orderBy('start_date', 'desc')
                ->paginate(9);  
            
            return view('blogs', [
                'blogs' => $blogs,
                'title' => 'Semua Artikel'
            ]);
            
        } catch (Exception $e) {  
            return back()->with('error', 'Terjadi kesalahan saat memuat blog');
        }
    }
    
    /**
     * DETAIL BLOG
     */
    public function show($slug)
    {
        try {
            $blog = Blog::select([
                        'title', 'thumbnail', 'content', 
                        'start_date', 'end_date', 'proker_id'
                    ])
                ->where('slug', $slug)
                ->with(['prokers:id,slug,name', 'blog_gallery:blog_id,photo'])
                ->first(); 
            
            // Format tanggal untuk view
            $startDate = Carbon::parse($blog->start_date);
            $endDate = Carbon::parse($blog->end_date);
            
            if ($startDate->eq($endDate)) {
                $formattedDate = $startDate->translatedFormat('d F Y');
            } else {
                $formattedDate = $startDate->translatedFormat('d F Y') . ' - ' . 
                                $endDate->translatedFormat('d F Y');
            }
            
            // Tambahkan data tambahan ke blog
            $blog->formatted_date = $formattedDate;
            $blog->full_thumbnail = asset($blog->thumbnail); 

            return view('blogs.show', compact('blog'));
            
        } catch (ModelNotFoundException $e) { 
            abort(404, 'Blog tidak ditemukan');
        } catch (Exception $e) {  
            abort(500, 'Terjadi kesalahan server');
        }
    }
    
    /**
     * METHOD FORMAT DATA BLOG
     */
    private function formatBlogData($blog)
    {
        // Format tanggal
        $startDate = Carbon::parse($blog->start_date);
        $endDate = Carbon::parse($blog->end_date);
        
        // Custom Tanggal
        if ($startDate->eq($endDate)) { 
            $date = $startDate->translatedFormat('d F Y');  
        } else { 
            $date = $startDate->translatedFormat('d F Y') . ' - ' . 
                    $endDate->translatedFormat('d F Y'); 
        }
        
        // Potong content untuk excerpt
        $excerpt = strlen($blog->content) > 150 
            ? substr(strip_tags($blog->content), 0, 150) . '...' 
            : strip_tags($blog->content);
        
        return [
            'id' => $blog->id,
            'title' => $blog->title,
            'thumbnail' => asset($blog->thumbnail), 
            'slug' => $blog->slug,
            'excerpt' => $excerpt,
            'content' => $blog->content,
            'date' => $date,
            'status' => $blog->status, 
            'proker' => $blog->prokers->name ?? $blog->prokers->slug ?? 'Tidak ada proker',  
            'created_at' => Carbon::parse($blog->created_at)->translatedFormat('d F Y'), 
        ];
    }
}