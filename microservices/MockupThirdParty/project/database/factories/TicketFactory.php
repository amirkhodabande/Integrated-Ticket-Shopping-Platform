<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['Flight', 'Train']),
            'price' => $this->faker->numberBetween(50, 200),
            'date' => $this->faker->dateTimeThisYear(),
            'capacity' => $this->faker->numberBetween(100, 250),
            'origin' => $this->faker->country(),
            'destination' => $this->faker->country()
        ];
    }
}
