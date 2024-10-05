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
            'mail' => 'test@example.com',
            'password' => 'xhdrbz',
            'remember_toke' => 'JAOUAH10198',
            'Created'=>'10/08/2024 ',
            'Updated'=>'10/10/2024'
        ]);
    }
}