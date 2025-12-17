<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Proker extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'description', 'responsible',
        'start_date', 'end_date', 'status', 'color', 'order'
    ];

    // RELASI KE TABLE BLOG
    public function blogs(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class, 'blog_proker');
    }

    // AUTO GENERATE SLUG
    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($proker) {
            if (empty($proker->slug)) {
                $proker->slug = Str::slug($proker->name);
            }
        });
        
        static::updating(function ($proker) {
            if ($proker->isDirty('abbreviation')) {
                $proker->slug = Str::slug($proker->name);
            }
        });
    }
}
?>