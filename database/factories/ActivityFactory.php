<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->sentence();
        return[
            'name'=>$name,
            'description'=>$this->faker->text(12),
            'datetime'=>$this->faker->dateTime(),
            'status'=>$this->faker->randomElement([2,1,4]),
            'user_id'=>User::all()->random()->id,
        ];



    }
}
