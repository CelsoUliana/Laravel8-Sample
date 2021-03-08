<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EditRoomRequest;
use App\Http\Requests\CreateRoomRequest;
use App\Models\Room;
use App\Http\Resources\RoomResource;

class RoomApiController extends Controller
{
    public function index(){
        return RoomResource::collection(Room::all());
    }

    public function show(Room $room){
        return new RoomResource($room);
    }

    public function store(CreateRoomRequest $request){
        
        $validated = $request->validated();

        $room = Room::Create($validated);

        return response()->json(new RoomResource($room), 201);
    }

    public function update(Room $room, EditRoomRequest $request){
        $validated = $request->validated();

        $room->update($validated);

        return response()->json(new RoomResource($room), 200);
    }

    public function delete(Room $room){
        $room->delete();

        return response()->json(null, 204);
    }
}
