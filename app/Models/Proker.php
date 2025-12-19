<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Proker extends Model
{
    use SoftDeletes;

    protected $table = 'prokers';
    protected $fillable = [
        'name', 'slug', 'description', 'bidang_id' 
    ];

    // RELASI KE TABLE BIDANS
    public function bidang(): BelongsTo
    {
        return $this->belongsTo(Bidang::class);
    }

    // RELASI KE TABLE BLOG 
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'proker_id');
    }
}
?>