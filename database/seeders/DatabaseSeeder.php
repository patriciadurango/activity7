<?php

namespace Database\Seeders;

// Es importante importar el modelo Course
use App\Models\Course; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Ejecutar primero los Seeders (Kits y Usuarios)
        $this->call([
            KitSeeder::class,
            UserSeeder::class,
        ]);

        // 2. Ejecutar el Factory para crear los 100 cursos de prueba
        Course::factory(100)->create();
    }
}