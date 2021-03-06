<?php

namespace App\Http\Resources;

use Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'is_booked' => $this->is_booked,
            'description' => $this->description,
            'room_type' => new RoomTypeResource($this->roomType)
        ];
    }
}
