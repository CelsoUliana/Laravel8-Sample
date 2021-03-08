<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Http\Requests\EditRoomTypeRequest;
use App\Http\Requests\CreateRoomTypeRequest;
use App\Http\Resources\RoomTypeResource;

class RoomTypeApiController extends Controller
{
    public function index(){
        return RoomTypeResource::collection(RoomType::all());
    }

    public function show(RoomType $roomtype){
        return new RoomTypeResource($roomtype);
    }

    public function store(CreateRoomTypeRequest $request){

        $validated = $request->validated();

        $roomtype = RoomType::Create($validated);

        return response()->json(new RoomTypeResource($roomtype), 201);
    }

    public function update(RoomType $roomtype, EditRoomTypeRequest $request){

        $validated = $request->validated();

        $roomtype->update($validated);

        return response()->json(new RoomTypeResource($roomtype), 200);
    }

    public function delete(RoomType $roomtype){

        $roomtype->delete();

        return response()->json(null, 204);
    }

}
