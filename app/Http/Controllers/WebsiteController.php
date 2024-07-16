<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Alimranahmed\LaraOCR\Facades\LaraOCR;


use Symfony\Component\Process\Exception\ProcessFailedException;

use Symfony\Component\Process\Process;

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

    // Utilisation de Tesseract OCR pour extraire le texte de l'image
    $text = (new TesseractOCR($imageFullPath))->run();

    // Recherche des articles basée sur le texte extrait
    $articles = Article::where('nom', 'like', '%' . $text . '%')
        ->orWhere('description', 'like', '%' . $text . '%')
        ->get();

    // Retourner la vue avec les articles trouvés
   // return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');

   return view('search-results', compact('articles'));
    //return view('search-results', compact('articles'));
    //return redirect()->route('searchImageView', compact('articles'));
    //return redirect()->route('searchImageview', compact('articles'))->with('success', 'Article mis à jour avec succès.');
    
}

    
}
