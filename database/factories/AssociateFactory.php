<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AssociateFactoeyFactory extends Factory
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
            'lastname'=>$this->faker->lastName(),
            'birthdate'=>$this->faker->gmdate(),
            'dni'=>$this->faker->number(),
            'cellphone'=>$this->faker->phoneNumber(),
            'degree'=>$this->faker->text(2),
            'email'=>$this->faker->text(5),
            'civile_status'=>$this->faker->text(5),
            'user_id'=>User::all()->random()->id,

        ];
    }
}
