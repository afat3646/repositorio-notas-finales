<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Folder;
use Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\folder>
 */
class folderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            Folder::create([
                'name' => fake()->name(),
                'Created' => now(),
                'Updated' => now()
                
            ])
        ];
    }
}
