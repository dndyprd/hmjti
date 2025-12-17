<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'content', 'date', 'location',
        'thumbnail', 'status', 'view_count'
    ];

    protected $casts = [
        'date' => 'date',
    ];

    // RELASI KE TABLE PROKER
    public function prokers(): BelongsToMany
    {
        return $this->belongsToMany(Proker::class, 'blog_proker');
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