<?php

namespace App\Http\Controllers\Api;

use App\Models\Room;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReservationResource;
use App\Http\Requests\EditReservationRequest;
use App\Http\Requests\CreateReservationRequest;

class ReservationApiController extends Controller
{
    public function index(){
        return ReservationResource::collection(Reservation::all());
    }

    public function show(Reservation $reservation){
        return new ReservationResource($reservation);
    }

    public function store(CreateReservationRequest $request){
        $validated = $request->validated();
        $room = Room::findOrFail($request->room_id);

        if($room->is_booked){
            return response()->json(['message' => 'room already booked'], 400);
        }

        $reservation = Reservation::Create($validated);
        $reservation->room->is_booked = true;
        $reservation->room->save();

        return response()->json(new ReservationResource($reservation), 201);
    }

    public function update(Reservation $reservation, EditReservationRequest $request){
        $validated = $request->validated();

        /*
            Also business logic to set is_booked to false set new one to true...
            This is ok, for now.
        */
        $reservation->update($validated);

        return response()->json(new ReservationResource($reservation), 200);
    }

    public function delete(Reservation $reservation){
        $reservation->delete();

        return response()->json(null, 204);
    }
}
