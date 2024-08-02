<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;


class AssociatedProductsSeeder extends Seeder
{
    public function run()
    {
        $products = Article::all();
        
        // Associe chaque produit avec quelques autres produits
        foreach ($products as $product) {
            $associated = $products->where('id', '!=', $product->id)->random(2); // Associe avec 2 produits différents
            $product->associatedProducts()->attach($associated);
        }
    }
}
