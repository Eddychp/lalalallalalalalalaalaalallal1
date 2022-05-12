<?php

namespace Database\Factories;

use App\Models\associates;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->sentence();
        return [
            'name'=>$name,
            'status'=>$this->faker->randomElement([1,3,5]),

            'associate_id'=>associates::all()->random()->id,

        ];
    }
}
