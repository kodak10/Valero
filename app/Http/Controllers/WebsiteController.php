<?php

namespace App\Http\Controllers;

use Alimranahmed\LaraOCR\Facades\LaraOCR;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Article;



class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::take(6)->get();
        $allCategories = category::all();
        $articles = Article::all();
        
        $articlesSecondMains = Article::where('second_mains', 1)->get();

        // Créer un tableau pour stocker les articles de chaque catégorie
        $categoriesWithArticles = [];

        foreach ($categories as $category) {
            // Récupérer les articles de chaque catégorie
            $categoriesWithArticles[$category->id] = $category->articles()->take(5)->get();
        }
        return view('index', compact('categories', 'articles','articlesSecondMains','categoriesWithArticles', 'allCategories'));

    }

    public function details()
    {
        $categories = Category::take(6)->get();
        $allCategories = category::all();
        $articles = Article::all();
        
        $articlesSecondMains = Article::where('second_mains', 1)->get();

        // Créer un tableau pour stocker les articles de chaque catégorie
        $categoriesWithArticles = [];

        foreach ($categories as $category) {
            // Récupérer les articles de chaque catégorie
            $categoriesWithArticles[$category->id] = $category->articles()->take(5)->get();
        }
        return view('articles-details', compact('categories', 'articles','articlesSecondMains','categoriesWithArticles', 'allCategories'));

    }

    public function articles()
    {
         // Nombre d'articles Nouveaux
         $countNouveau = Article::where('second_mains', 0)->count();

         // Nombre d'articles Seconde main
         $countOccasion = Article::where('second_mains', 1)->count();

        $categories = Category::take(6)->get();
        $allCategories = category::all();

        $articles = Article::paginate(9); // Paginate with 9 articles per page

        
        $articlesSecondMains = Article::where('second_mains', 1)->get();

        // Créer un tableau pour stocker les articles de chaque catégorie
        $categoriesWithArticles = [];

        foreach ($categories as $category) {
            // Récupérer les articles de chaque catégorie
            $categoriesWithArticles[$category->id] = $category->articles()->take(5)->get();
        }
        return view('articles', compact('categories', 'countNouveau', 'countOccasion', 'articles','articlesSecondMains','categoriesWithArticles', 'allCategories'));

    }

    public function contact()
    {
        $allCategories = Category::all();

        return view('contact', compact('allCategories'));
    }

    public function my_account()
    {
        $allCategories = Category::take(6)->get();

        return view('account', compact('allCategories'));
    }

    public function adminDashboard()
    {
        return view('administrateur/home');
    }

    public function searchByImage(Request $request)
    {
        // Valider que l'image a été correctement téléchargée
        $request->validate([
            'image' => 'required|image',
        ]);
    
        // Récupérer le fichier image téléchargé
        $image = $request->file('image');
    
        // Générer un nom de fichier unique pour l'image
        $fileName = uniqid('image_') . '.' . $image->getClientOriginalExtension();
        
        // Déplacer l'image vers le répertoire public/images/search avec un nom de fichier unique
        $image->move(public_path('images/search'), $fileName);
    
        // Chemin complet vers l'image enregistrée
        $imageFullPath = public_path('images/search/' . $fileName);
    
        // Utilisation de LaraOCR pour extraire le texte de l'image
        $text = LaraOCR::scan($imageFullPath);
    
        // Recherche des articles basée sur le texte extrait
        $articles = Article::where('nom', 'like', '%' . $text . '%')
            ->orWhere('description', 'like', '%' . $text . '%')
            ->get();
    
        // Retourner la vue avec les articles trouvés
        return view('search-results', compact('articles'));
    }
    
    public function images()
    {
        return view('lara_ocr.upload_image');
    }

    public function articlesDetails($id)
    {
        $allCategories = Category::take(6)->get();

        $article = Article::findOrFail($id); // Récupère l'article par son ID

        return view('articles-details', compact('article', 'allCategories'));
    }

    public function filterByCategory(Request $request)
    {

        // Nombre d'articles Nouveaux
        $countNouveau = Article::where('second_mains', 0)->count();

        // Nombre d'articles Seconde main
        $countOccasion = Article::where('second_mains', 1)->count();

        $categorie_id = $request->input('categorie_id');
        $query = Article::query();

        if ($categorie_id) {
            $query->where('categorie_id', $categorie_id);
        }

        $articles = $query->paginate(9); // Pagination avec 9 articles par page
        $allCategories = Category::all();

        return view('articles', compact('articles', 'allCategories', 'countNouveau','countOccasion'));
    }

    public function searchText(Request $request)
    {
        $query = $request->input('search');
        $articles = Article::where('nom', 'like', "%$query%")->get();

         // Nombre d'articles Nouveaux
         $countNouveau = Article::where('second_mains', 0)->count();

         // Nombre d'articles Seconde main
         $countOccasion = Article::where('second_mains', 1)->count();

        $allCategories = Category::all();

        return view('articles', compact('articles', 'allCategories', 'countNouveau','countOccasion'));
    }
    
}
