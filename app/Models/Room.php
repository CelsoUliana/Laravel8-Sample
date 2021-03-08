<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $attributes = [
        'is_booked' => 0,
        'description' => 'No description'
    ];

    protected $fillable = ['is_booked', 'description', 'room_type_id'];

    function roomType(){
        return $this->BelongsTo(RoomType::class);
    }
}
