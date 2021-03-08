<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{

    // $rooms = $this->rooms;
    
    // $roomsApiArr = array();
    // $customerApi
    
    // /*
    //     Generation an API-link like PokeAPI or SWAPI.
    //     Not sure if this is recommended... prob not.
    //     Commented in return is a nested Json that contains the rooms.
    // */
    // foreach($rooms as $room){
    //     array_push($apiArr, request()->getHttpHost() . Config('enum.apiRooms') . $room->id);
    // }


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

            //'room' => new RoomResource($this->room),
            //'customer' => new CustomerResource($this->customer),

            'room_url' => request()->getHttpHost() . Config('enum.apiRooms') . $this->room_id,
            'customer_url' => request()->getHttpHost() . Config('enum.apiCustomers') . $this->customer_id,

            //'room_id' => $this->room_id,
            //'customer_id' => $this->customer_id,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
        ];
    }
}
