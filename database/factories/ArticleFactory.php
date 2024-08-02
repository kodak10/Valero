<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $noms = [
            'Roman d\'amour', 'Stylo bille', 'Cahier de notes', 'Couverture en cuir', 'Roman policier', 
            'Livre éducatif', 'Ensemble géométrique complet', 'Accessoire de bureau'
        ];

        return [
            'categorie_id' => Category::factory(),
            'nom' => $this->faker->randomElement($noms),
            'surnoms' => $this->faker->words(3, true),
            'prix' => $this->faker->randomFloat(2, 1, 50),
            'taille_format' => $this->faker->randomElement(['Petit', 'Moyen', 'Grand']),
            'description' => $this->faker->paragraph,
            'images' => $this->faker->imageUrl(),
            'second_mains' => $this->faker->boolean,
        ];
    }
}
