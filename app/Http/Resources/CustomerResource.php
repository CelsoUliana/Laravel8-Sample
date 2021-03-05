<?php

namespace App\Http\Resources;

use Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $reservations = $this->reservations;
        $apiArr = array();
        
        /*
            Generation an API-link like PokeAPI or SWAPI.
            Not sure if this is recommended... prob not.
            Commented in return is a nested Json that contains the reservations.
        */
        foreach($reservations as $reservation){
           array_push($apiArr, request()->getHttpHost() . Config('enum.apiReservations') . $reservation->id);
        }

        return [
            //'id' => $this->id,
            'email' => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'reservations_url' => $apiArr
            //'reservations' => $this->reservations
        ];
    }
}
