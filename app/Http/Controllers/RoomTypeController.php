<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Http\Resources\RoomTypeResource;

class RoomTypeController extends Controller
{
    public function index(){
        return RoomTypeResource::collection(RoomType::all());
    }
}
