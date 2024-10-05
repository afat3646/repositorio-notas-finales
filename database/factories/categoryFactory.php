<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'color' => str_replace('#','', fake()->hexColor()),
            'user_id' => fake()->number(100),
            'category_created_at' => fake()->time(),
            'category_updated_at'=> fake()->time()
        ];
    }
}
