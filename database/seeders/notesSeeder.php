<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notes;

class notesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Notes::create([
            'Title' => 'pendientes',
            'Content' => 'limpiar, acomodar, acomodar escritorio',
            'Subtitle' => 'Pendientes escolares',
            'Created' => now(),
            'Updated' => now()
            
        ]);
    }
}
