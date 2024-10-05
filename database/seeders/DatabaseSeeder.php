<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Folder;

use Database\Factories\categoryFactory;
use Database\Factories\folderFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        
        $this->call([
            //categoryseeder::class,
            userSeeder :: class
            
        ]);
        //Category::factory(100)->create;
        //Category:: factory(10);
        User::factory(100);

        
    }
}
