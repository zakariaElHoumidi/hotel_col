<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomType extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
