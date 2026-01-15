<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingEvent extends Model
{
    protected $table = 'calendar_bookings';

    protected $fillable = [
        'title',
        'description',
        'starts_at',
        'ends_at',
        'location',
        'user_id',
        'contact_name',
        'contact_phone',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}