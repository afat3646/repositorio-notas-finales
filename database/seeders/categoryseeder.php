<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([  
            'name' => 'test',
            'color' => 'ff0000',
            'created_at'=> date_create_from_format('d/m/y', '30/10/24')->format('Y-m-d H:i:s'),
            'updated_at'=> now()->format('Y-m-d H:i:s')

        ]);
        
    }
}
