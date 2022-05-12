<?php

namespace Database\Factories;

use App\Models\assistances;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fines>
 */
class FinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'monto'=>$this->faker->randomNumber(5),
            'assistance_id'=>assistances::all()->random()->id,

        ];
    }
}
