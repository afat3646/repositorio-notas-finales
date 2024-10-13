<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Folder;
use App\Models\Notes;
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
           // categoryseeder::class,
            userSeeder :: class,
            //FoldersSeeder ::class,
            notesSeeder::class
            
        ]);
        //Category::factory(100)->create();
        User::factory(100)->create();
       // Folder ::factory(10)->create();
        Notes ::factory(100)->create();

        
    }
}
