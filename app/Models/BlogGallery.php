<?php

namespace App\Models; 
use Illuminate\Database\Eloquent\Model;

class BlogGallery extends Model
{ 
    protected $table = 'blog_gallery';
    protected $fillable = ['blog_id', 'photo', 'description'];
    
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
