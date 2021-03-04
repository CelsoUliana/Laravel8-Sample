<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Resources\ReservationResource;

class ReservationController extends Controller
{
    public function index(){
        return ReservationResource::collection(Reservation::all());
    }
}
