<?php

namespace Database\Factories;

use App\Models\activities;
use App\Models\assistances;
use App\Models\fines;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaymentFactory extends Factory
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
            'activity_id'=>activities::all()->random()->id,
            'fine_id'=>fines::all()->random()->id,



        ];
    }
}
