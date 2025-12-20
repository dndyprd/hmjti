<?php

namespace App\Http\Controllers;

use App\Models\Blog; 
use App\Http\Controllers\BlogController;
use App\Models\Bidang;
use Exception; 

class WelcomeController extends Controller
{ 
    public function index()
    {
        try { 
            /** 
             * DATA BIDANG & PROKER
             */
            $bidangs = Bidang::select([
                    'id', 'name', 'number', 'description' 
                ])
                ->with('prokers:bidang_id,name,slug,description')  
                ->orderBy('number', 'asc')
                ->get();
            
            $formattedBidangs = $bidangs->map(function ($bidang) {
                $bidang->prokers = $bidang->prokers->map(function ($proker) {
                    // HAPUS SPASI DAN JADIKAN LOWERCASE 
                    $cleanName = strtolower(str_replace(' ', '', $proker->name));
                    $cleanSlug = strtolower(str_replace(' ', '', $proker->slug));

                    // CHECK SLUG DAN NAMA PROKER
                    if (!str_contains($cleanName, $cleanSlug)) {
                        $proker->display_name = strtoupper($proker->slug) . " (" . $proker->name . ")";
                    } else {
                        $proker->display_name = $proker->name;
                    }
                    
                    return $proker;
                });

                return $bidang;
            });

            /** 
             * DATA BLOG
             */
            $blogs = Blog::select([
                    'id', 'title', 'thumbnail', 'slug', 'content', 
                    'start_date', 'end_date', 'status', 'proker_id'
                ])
                ->with(['prokers:id,slug,name', 'blog_gallery:blog_id,photo'])
                ->where('status', 'published')  
                ->orderBy('start_date', 'desc')
                ->get();
            
            // Format Blog
            $formattedBlogs = $blogs->map(function ($blog) {
                return BlogController::formatBlogData($blog);
            });
            
            return view('welcome', [
                'bidangs' => $formattedBidangs,
                'blogs' => $formattedBlogs
            ]);  
        } catch (Exception $e) {  
            return view('welcome', [
                'blogs' => [],
                'title' => 'Artikel Terbaru',
                'error' => 'Terjadi kesalahan saat memuat artikel'
            ]);
        }
    }
}
