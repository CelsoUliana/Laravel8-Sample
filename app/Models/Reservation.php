<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['id', 'room_id', 'customer_id', 'check_in', 'check_out'];
    use HasFactory;

    function room(){
        return $this->belongsTo(Room::class);
    }

    function customer(){
        return $this->belongsTo(customer::class);
    }
}
