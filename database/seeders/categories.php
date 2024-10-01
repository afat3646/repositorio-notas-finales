<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'test',
            'color' => 'FFFFF0',
            'user_id' 

        ]);
        Category::create([
            'name' => 'urgente',
            'color' => 'FGFFF0',
            'user_id' 

        ]);
        Category::create([
            'name' => 'pendiente',
            'color' => 'FFFAS0',
            'user_id' 

        ]);
        Category::create([
            'name' => 'tareas',
            'color' => 'HJFFF0',
            'user_id' 

        ]);
        Category::create([
            'name' => 'Juegos',
            'color' => 'FFHJSF0',
            'user_id' 

        ]);
    }
}
