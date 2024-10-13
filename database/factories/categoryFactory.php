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
            'name' => fake()->name(),
            'color' => str_replace('#','', fake()->hexColor()),
            'user_id' => fake()->randomNumber(),
            'created_at' => fake()->dateTimeBetween('2023-01-01', '2024-12-31')->format('Y-m-d H:i:s'),
            'updated_at'=> now()->format('Y-m-d H:i:s')
        ];
    }
}
