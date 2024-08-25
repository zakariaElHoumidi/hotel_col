<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $fillable = [
        'hotel_id',
        'firstName',
        'lastName',
        'email',
        'phone_number',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
