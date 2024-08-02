<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Créer un utilisateur spécifique
        User::create([
            'name' => 'Atchin parfait',
            'email' => 'kodak@gmail.com',
            'password' => Hash::make('password'), // Utiliser Hash pour crypter le mot de passe
        ]);

        // Créer des utilisateurs aléatoires
        User::factory()->count(10)->create();
    }
}
