<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this ->call(CursoSeeder::class);
        Curso::factory(50)->create();
        $this->call(UserSeeder::class);
        
    }
}
