<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Blog extends Model
{
    use SoftDeletes;

    protected $table = 'blogs'; 
    protected $fillable = [
        'title', 'thumbnail', 'content', 'start_date', 'end_date', 'proker_id', 'status'
    ];

    // RELASI KE TABLE PROKER
    public function prokers() 
    {
        return $this->belongsTo(Proker::class, 'proker_id');
    }

    // RELASI KE TABLE GALLERY
    public function gallery()
    {
        return $this->hasMany(BlogGallery::class, 'blog_id');
    }

    // AUTO GENEREATE SLUG
    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }
}
?>