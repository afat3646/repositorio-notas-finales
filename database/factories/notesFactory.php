<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\notes>
 */
class notesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->title(),
            'Content'=>fake()->realText(2000,5),
            'Subtitle'=>fake()->title(),
            'Created' => now(),
            'Updated' => now(),
        ];
    }
}