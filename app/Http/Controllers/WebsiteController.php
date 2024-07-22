<?php

namespace App\Http\Controllers;

use Alimranahmed\LaraOCR\Facades\LaraOCR;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Article;
use App\Models\ArticleClick;
use Illuminate\Support\Facades\DB;
use App\Services\TrendingArticleService;
use Illuminate\Support\Facades\Request as FacadesRequest;



class WebsiteController extends Controller
{

    protected $trendingArticleService;

    // Injecter le service dans le contrôleur
    public function __construct(TrendingArticleService $trendingArticleService)
    {
        $this->trendingArticleService = $trendingArticleService;
    }

    public function index()
    {
        // Utiliser le service pour obtenir les articles tendances
        $trendingArticles = $this->trendingArticleService->getTrendingArticles();

        $categories = Category::take(6)->get();
        $allCategories = category::all();
        $articles = Article::all();
        
        $articlesSecondMains = Article::where('second_mains', true)->get();

        // Créer un tableau pour stocker les articles de chaque catégorie
        $categoriesWithArticles = [];

        foreach ($categories as $category) {
            // Récupérer les articles de chaque catégorie
            $categoriesWithArticles[$category->id] = $category->articles()->take(5)->get();
        }
        return view('index', compact('categories', 'articles','articlesSecondMains','categoriesWithArticles', 'allCategories', 'trendingArticles'));

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

    public function articles(Request $request)
    {
        $trendingArticles = $this->trendingArticleService->getTrendingArticles();

        $countNouveau = Article::where('second_mains', 0)->count();
        $countOccasion = Article::where('second_mains', 1)->count();

        $articlesSecondMains = Article::where('second_mains', true)->get();


        $categories = Category::take(6)->get();
        $allCategories = category::all();

        // Récupérer le terme de recherche depuis la requête GET
        $searchTerm = $request->input('search');
        $categorie_id = $request->input('categorie_id');


       // Initialisez la requête de base
        $query = Article::query();

        // Ajoutez la condition de recherche
        if ($searchTerm) {
            $query->where(function ($q) use ($searchTerm) {
                $q->where('nom', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%');
            });
        }

        // Ajoutez la condition de catégorie si elle est présente
        if (!empty($categorie_id)) {
            $query->where('categorie_id', $categorie_id);
        }

    // Récupérez les articles paginés
    $articles = $query->paginate(9);

        $nbrArticle = Article::all();

        // Créer un tableau pour stocker les articles de chaque catégorie
        $categoriesWithArticles = [];

        foreach ($categories as $category) {
            // Récupérer les articles de chaque catégorie
            $categoriesWithArticles[$category->id] = $category->articles()->take(5)->get();
        }
        return view('articles', compact('categories', 'countNouveau', 'countOccasion', 'articles','articlesSecondMains','categoriesWithArticles','nbrArticle', 'allCategories', 'trendingArticles' ));

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
        // Enregistrer le clic de l'utilisateur
        $ipAddress = FacadesRequest::ip();
        ArticleClick::create([
            'article_id' => $id,
            'ip_address' => $ipAddress,
        ]);

        
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

    public function showArticle($articleId)
    {
        // Enregistrer le clic de l'utilisateur
        $ipAddress = FacadesRequest::ip();
        ArticleClick::create([
            'article_id' => $articleId,
            'ip_address' => $ipAddress,
        ]);

        // Afficher l'article
        $article = Article::findOrFail($articleId);
        return view('articles.show', compact('article'));
    }

    
}
