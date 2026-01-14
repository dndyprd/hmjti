<?php

namespace App\Http\Controllers;

use App\Models\Blog; 
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{    
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

        return $query->get()->map(fn($blog) => self::formatBlogData($blog));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $blogs = self::getData(null, $search);   
        return view('blogs', ['blogs' => $blogs]);   
    }

    public function show($slug)
    {
        try {
            $blog = Blog::where('slug', $slug)
                ->where('status', 'published')
                ->with(['prokers:id,slug,name', 'blog_gallery:blog_id,photo'])
                ->firstOrFail(); 

            $formattedBlog = self::formatBlogData($blog);
            
            return view('blog-details', ['blog' => $formattedBlog]);
        } catch (Exception $e) {  
            return response()->view('notfound', [], 404);
        }
    }  
    
    public static function formatBlogData($blog)
    {
        $startDate = Carbon::parse($blog->start_date);
        $endDate = Carbon::parse($blog->end_date);
        
        $date = $startDate->eq($endDate) 
            ? $startDate->translatedFormat('d F Y') 
            : $startDate->translatedFormat('d F Y') . ' - ' . $endDate->translatedFormat('d F Y'); 

        $cleanText = html_entity_decode(strip_tags($blog->content));
        
        return (object) [ 
            'title'        => $blog->title,
            'thumbnail'    => asset('storage/' . $blog->thumbnail), 
            'slug'         => $blog->slug, 
            'content'      => $blog->content,
            'excerpt'      => Str::limit($cleanText, 85),
            'long_excerpt' => Str::limit($cleanText, 260),
            'date'         => $date, 
            'proker_name'  => $blog->prokers->name ?? 'Umum',  
            'gallery'      => $blog->blog_gallery->map(fn($item) => asset('storage/' . $item->photo))->toArray(), 
        ];
    } 
}