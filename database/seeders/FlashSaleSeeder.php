<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlashSale;
use App\Models\Article;

class FlashSaleSeeder extends Seeder
{
    public function run()
    {
        // Assurez-vous qu'il y a des articles dans la base de données
        $articles = Article::all();

        if ($articles->count() == 0) {
            // Si aucun article n'est trouvé, créez-en quelques-uns d'abord
            \App\Models\Article::factory()->count(10)->create();
            $articles = Article::all();
        }

        foreach ($articles as $article) {
            FlashSale::factory()->count(2)->create([
                'article_id' => $article->id,
            ]);
        }
    }
}
