<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Liste des couleurs à ajouter
        $colors = [
            ['name' => 'Rouge', 'code' => 'rgba(255, 0, 0, 1)'],
            ['name' => 'Bleu', 'code' => 'rgba(0, 0, 255, 1)'],
            ['name' => 'Vert', 'code' => 'rgba(0, 255, 0, 1)'],
            ['name' => 'Jaune', 'code' => 'rgba(255, 255, 0, 1)'],
            ['name' => 'Orange', 'code' => 'rgba(255, 165, 0, 1)'],
            ['name' => 'Violet', 'code' => 'rgba(128, 0, 128, 1)'],
            ['name' => 'Rose', 'code' => 'rgba(255, 192, 203, 1)'],
            ['name' => 'Noir', 'code' => 'rgba(0, 0, 0, 1)'],
            ['name' => 'Blanc', 'code' => 'rgba(255, 255, 255, 1)'],
            ['name' => 'Gris', 'code' => 'rgba(128, 128, 128, 1)'],
            ['name' => 'Marron', 'code' => 'rgba(165, 42, 42, 1)'],
            ['name' => 'Turquoise', 'code' => 'rgba(64, 224, 208, 1)'],
            ['name' => 'Beige', 'code' => 'rgba(245, 245, 220, 1)'],
            ['name' => 'Or', 'code' => 'rgba(255, 215, 0, 1)'],
            ['name' => 'Argent', 'code' => 'rgba(192, 192, 192, 1)'],
        ];


        // Insérer les couleurs dans la table
        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
