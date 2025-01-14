<?php

namespace Database\Factories;
use App\Article;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'department' => $this->faker->company(),
            'phone_number' => $this->faker->numerify('123456'),
        ];
    }
}
