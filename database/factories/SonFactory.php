<?php

namespace Database\Factories;

use App\Models\associates;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SonFactory extends Factory
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
            'fullname'=>$name,
            'cellphone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->text(),
            'dni'=>$this->faker->text(),
            'age'=>$this->faker->date(),
            'associate_id'=>associates::all()->random()->id,

        ];
    }
}
