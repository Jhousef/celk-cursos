<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'jhousef@hotmail.com'],
            ['name' => 'jhousef', 'email' => 'jhousef@hotmail.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'joao@hotmail.com'],
            ['name' => 'Joao', 'email' => 'joao@hotmail.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'ana@hotmail.com'],
            ['name' => 'Ana', 'email' => 'ana@hotmail.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'gabrielly@hotmail.com'],
            ['name' => 'Gabrielly', 'email' => 'gabrielly@hotmail.com', 'password' => '123456A#']
        );
    }
}
