<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            
            'name' => 'Richard',
            'Username' => 'Ruser',
            'email' => 'test@example.com',
            'password' => 'xhdrbz',
            'remember_token' => 'JAOUAH10198',
            'Created' => date_create_from_format('d-m-Y', '10-08-2024')->format('Y-m-d'), 
            'updated_at' => now(),
            
        ]);
    }
}