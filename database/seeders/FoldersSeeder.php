<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Folder;

class FoldersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Folder::create([
            'name' => 'Pedro',
            'Created' => date_create_from_format('d/m/y', '30/10/24')->format('Y-m-d H:i:s'),
            'Updated' =>  now()->format('Y-m-d H:i:s')
        ]);
    }
}
