<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $rooms = $this->rooms;
        $apiArr = array();
        
        /*
            Generation an API-link like PokeAPI or SWAPI.
            Not sure if this is recommended... prob not.
            Commented in return is a nested Json that contains the rooms.
        */
        foreach($rooms as $room){
           array_push($apiArr, request()->getHttpHost() . Config('enum.apiRooms') . $room->id);
        }

        return [
            'id' => $this->id,
            'description' => $this->description,
            'type' => $this->type,
            'price' => number_format($this->price / 100, 2),
            'rooms_url' => $apiArr,
            //'rooms_data' => $this->rooms
        ];
    }
}
