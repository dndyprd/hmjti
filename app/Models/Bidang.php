<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Bidang extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'number'
    ];

    public function prokers()
    {
        return $this->hasMany(Proker::class, 'bidang_id');
    }

    protected static function boot()
    {
        parent::boot(); 
    }
}
?>