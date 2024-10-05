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
            'user_id' => '1',
            'category_created_at'=>'30/10/24',
            'category_updated_at'

        ]);
        
    }
}
