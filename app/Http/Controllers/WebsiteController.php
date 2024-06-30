<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::all();
        $articlesSecondMains = Article::where('second_mains', 1)->get();

        // Créer un tableau pour stocker les articles de chaque catégorie
        $categoriesWithArticles = [];

        foreach ($categories as $category) {
            // Récupérer les articles de chaque catégorie
            $categoriesWithArticles[$category->id] = $category->articles()->take(5)->get();
        }
        return view('index', compact('categories', 'articles','articlesSecondMains','categoriesWithArticles'));

    }

    public function contact()
    {
        return view('contact');
    }

    public function my_account()
    {
        return view('account');
    }

    public function adminDashboard()
    {
        return view('administrateur/home');
    }
}
