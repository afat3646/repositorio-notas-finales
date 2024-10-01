<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\Folderl;

class Folder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Folderl::create([
            
            'Tittle' => 'Chona',
            'Subtitle' => 'por que baila tanto?',
            'color' => 'fffff0'
            
        ]);
    }
}
