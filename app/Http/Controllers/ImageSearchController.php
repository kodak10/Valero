<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use thiagoalessio\TesseractOCR\TesseractOCR;
use App\Services\TrendingArticleService;

class ImageSearchController extends Controller
{

    protected $trendingArticleService;

    // Injecter le service dans le contrôleur
    public function __construct(TrendingArticleService $trendingArticleService)
    {
        $this->trendingArticleService = $trendingArticleService;
    }

    public function showForm()
    {
        $allCategories = Category::all(); // Récupérer toutes les catégories

        return view('image-search-form', compact('allCategories'));
    }

    public function search(Request $request)
    {
        $trendingArticles = $this->trendingArticleService->getTrendingArticles();

        $imagePath = $request->file('image')->store('images');

        // Chemin complet vers l'image
        $fullPath = storage_path('app/' . $imagePath);

        // Initialisez TesseractOCR
        $ocr = new TesseractOCR($fullPath);
        $ocr->lang('eng');
        $ocr->psm(6);

        // Exécutez l'OCR pour extraire le texte
        $text = $ocr->run();

        // Nettoyez le texte
        $cleanedText = trim(preg_replace('/\s+/', ' ', $text));

        // Recherchez les articles dans la base de données
        $articles = Article::where('nom', 'like', '%' . $cleanedText . '%')->get();

        $allCategories = Category::all(); // Récupérer toutes les catégories
        $countNouveau = Article::where('second_mains', 0)->count();
        $countOccasion = Article::where('second_mains', 1)->count();
        $articlesSecondMains = Article::where('second_mains', true)->get();

         // Récupérez les articles paginés
        $articles = Article::paginate(9);

        $nbrArticle = Article::all();
        $trendingArticles = $this->trendingArticleService->getTrendingArticles();

        // Passez les résultats à la vue
        //return view('search-results', compact('articles', 'allCategories'));

        return view('articles', compact('articles', 'allCategories', 'countNouveau', 'countOccasion', 'articlesSecondMains', 'articles', 'nbrArticle','trendingArticles'));
    }
}
