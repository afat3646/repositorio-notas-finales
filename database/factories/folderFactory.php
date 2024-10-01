<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            Folderl::create([
            
                'Tittle' => 'Chona',
                'Subtitle' => 'por que baila tanto?',
                'color' => 'fffff0'
                
            ])
        ];
    }
}
