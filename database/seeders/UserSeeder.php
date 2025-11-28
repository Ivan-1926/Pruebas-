<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Mime\Email;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creando al administrador
        $user = new User();
        $user-> name = "Admin";
        $user->email = 'admin@admin.com';
        $user->password = '123456789';
        $user->save();
    }
}
