<?php

namespace App\Http\Controllers;

use App\Models\Blog; 
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

class BlogController extends Controller
{    
    /**
     * METHOD GET DATA
     */
    public static function getData($limit = null, $search = null)
    {
        $query = Blog::select([
                'id', 'title', 'thumbnail', 'slug', 'content', 
                'start_date', 'end_date', 'status', 'proker_id'
            ])
            ->with(['prokers:id,slug,name', 'blog_gallery:blog_id,photo'])
            ->where('status', 'published')  
            ->orderBy('start_date', 'desc');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        if ($limit) {
            $query->limit($limit);
        }

        $blogs = $query->get();
 
        return $blogs->map(function($blog) {
            return self::formatBlogData($blog);
        });
    }

    /**
     * BLOG (AFTER EVENT)
     */
    public function index(\Illuminate\Http\Request $request)
    {
        $search = $request->input('search');
        $blogs = self::getData(null, $search);   
        return view('blogs', [ 
            'blogs' => $blogs
        ]);   
    }

    /**
     * DETAIL BLOG
     */
    public function show($slug)
    {
        try {
            $blog = Blog::select([
                    'id', 'title', 'thumbnail', 'slug', 'content', 
                    'start_date', 'end_date', 'status', 'proker_id'
                ])
                ->where('slug', $slug)
                ->with(['prokers:id,slug,name', 'blog_gallery:blog_id,photo'])
                ->firstOrFail(); 

            // Format Data Blog Detail
            $blog = $this->formatBlogData($blog);
            
            return view('blog-details', ['blogs' => $blog]);
        } catch (ModelNotFoundException $e) { 
            return response()->json(['error' => 'Blog tidak ditemukan'], 404);
        } catch (Exception $e) {  
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }  
    
    /**
     * METHOD FORMAT DATA BLOG
     */
    public static function formatBlogData($blog)
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

        $cleanText = html_entity_decode(strip_tags($blog->content));
        
        return [ 
            'title' => $blog->title,
            'thumbnail' => asset('storage/' . $blog->thumbnail), 
            'slug' => $blog->slug, 
            'content' => $blog->content,
            'excerpt' => Str::limit($cleanText, 80),
            'long_excerpt' => Str::limit($cleanText, 260),
            'date' => $date, 
            'proker' => $blog->prokers->slug ?? 'Tidak ada proker',  
            'gallery'   => $blog->blog_gallery->map(function ($item) {
                return asset('storage/' . $item->photo);
            })->toArray(), 
        ];
    } 
}