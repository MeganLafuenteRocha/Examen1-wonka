<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario de prueba
        // User::factory()->create([
        //     'name' => 'Willy Wonka',
        //     'email' => 'wonka@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        $this->call([
            // MarcaSeeder::class,
            ProductoSeeder::class,
        ]);
    }
}
