<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Http\Resources\RoomTypeResource;

class RoomTypeApiController extends Controller
{
    public function index(){
        return RoomTypeResource::collection(RoomType::all());
    }

    public function show(RoomType $roomtype){
        return new RoomTypeResource($roomtype);
    }

    public function store(Request $request){

        // $request->price = $request->price * 100.0;
        // $request->price = (int) $request->price;

        $validated = $request->validate([
            'description' => 'required|max:255',
            'type' => 'required|max:255',
            'price' => 'required|Integer'
        ]);

        $roomtype = RoomType::Create($validated);

        return response()->json(new RoomTypeResource($roomtype), 201);
    }

    public function update(RoomType $roomtype, Request $request){

        $validated = $request->validate([
            'description' => 'max:255',
            'type' => 'max:255',
            'price' => 'integer'
        ]);

        //$request->price *= 100;

        $roomtype->update($validated);

        return response()->json(new RoomTypeResource($roomtype), 200);
    }

    public function delete(RoomType $roomtype){

        $roomtype->delete();

        return response()->json(null, 204);
    }

}
