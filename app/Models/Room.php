<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['is_booked', 'description', 'room_type_id'];
    use HasFactory;
    function roomType(){
        return $this->BelongsTo(RoomType::class);
    }
}
