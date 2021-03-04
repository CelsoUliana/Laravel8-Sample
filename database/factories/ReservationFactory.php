<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_id' => \App\Models\Room::inRandomOrder()->first()->id,
            'customer_id' => \App\Models\Customer::inRandomOrder()->first()->id,
            'check_in' => $this->faker->dateTimeBetween('now'),
            'check_out' => $this->faker->dateTimeBetween('now', '+1 years')
        ];
    }
}
