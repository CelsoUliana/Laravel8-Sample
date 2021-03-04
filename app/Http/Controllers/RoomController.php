<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Http\Resources\RoomResource;

class RoomController extends Controller
{
    public function index(){
        return RoomResource::collection(Room::all());
    }
}
