<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criar o usuário admin padrão
        User::create([
            'name' => 'Admin',
            'email' => 'admin@biblioteca.com',
            'password' => Hash::make('admin123'), // Senha padrão
            'role' => 'admin',
        ]);

        // Opcionalmente, crie mais alguns usuários de exemplo
        User::create([
            'name' => 'Bibliotecario',
            'email' => 'bibliotecario@biblioteca.com',
            'password' => Hash::make('password123'),
            'role' => 'bibliotecario',
        ]);

        User::create([
            'name' => 'Cliente',
            'email' => 'cliente@biblioteca.com',
            'password' => Hash::make('password123'),
            'role' => 'cliente',
        ]);
    }
}
