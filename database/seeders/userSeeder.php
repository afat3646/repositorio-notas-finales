<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\User;

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
            'password' => 'xhdrbz'
        ]);
    }
}