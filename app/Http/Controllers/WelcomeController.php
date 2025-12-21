<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\BlogController;
use App\Models\Bidang;
use Exception; 

class WelcomeController extends Controller
{ 
    public function index()
    {
        try { 
            // DATA BIDANG & PROKER 
            $bidangs = Bidang::select([
                    'id', 'name', 'number', 'description' 
                ])
                ->with('prokers:bidang_id,name,slug,description')  
                ->orderBy('number', 'asc')
                ->get();
            
            $bidangs = $bidangs->map(function ($bidang) {
                $bidang->prokers = $bidang->prokers->map(function ($proker) {
                    // HAPUS SPASI DAN JADIKAN LOWERCASE 
                    $cleanName = strtolower(str_replace(' ', '', $proker->name));
                    $cleanSlug = strtolower(str_replace(' ', '', $proker->slug));

                    // CHECK SLUG DAN NAMA PROKER
                    if (!str_contains($cleanName, $cleanSlug)) {
                        $proker->display_name = strtoupper($proker->slug) . " (" . $proker->name . ")";
                    } else {
                        $proker->display_name = $proker->slug;
                    }
                    
                    return $proker;
                });

                return $bidang;
            });

            // DATA BLOG 
            $blogs = BlogController::getData(6);
            
            return view('welcome', [
                'bidangs' => $bidangs,
                'blogs' => $blogs
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
