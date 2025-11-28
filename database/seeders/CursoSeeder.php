<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $curso = new Curso();
        // $curso->name = "Prueba y Calidad de Software";
        // $curso->description = "Asignatura  de Ingenería de Sistema e Informatica";
        // $curso->category = "Desarrollo web";      
        // $curso->save();

        // $curso2 = new Curso();
        // $curso2->name = "Programacion Orientada a Objetos";
        // $curso2->description = "Asignatura  de Ingenería de Sistema e Informatica";
        // $curso2->category = "Desarrollo de Software";      
        // $curso2->save();

        Curso::factory(50)->create();
    }
}
