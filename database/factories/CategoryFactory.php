<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        $categories = [
            'Romance', 'Stylos', 'Cahiers', 'Couverts', 'Romans', 'Livres', 'Ensemble géométrique', 'Accessoires'
        ];

        return [
            'nom' => $this->faker->unique()->randomElement($categories),
            'couverture' => $this->faker->imageUrl(),
        ];
    }
}
