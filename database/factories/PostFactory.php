<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
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
            'slug'=>Str::slug($name),
            'extract'=>$this->faker->text(12),
            'body'=>$this->faker->text(12),
            'status'=>$this->faker->randomElement([2,3,4]),
            'user_id'=>User::all()->random()->id,


        ];
    }
}
