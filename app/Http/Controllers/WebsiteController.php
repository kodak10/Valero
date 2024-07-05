<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
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
        $request->validate([
            'image' => 'required|image',
        ]);

        // Enregistrement de l'image téléchargée
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Chemin complet vers l'image enregistrée
        $imageFullPath = storage_path('app/public/' . $imagePath);

        try {
            // Utilisation d'un outil OCR pour extraire le texte de l'image
            $process = new Process(['tesseract', $imageFullPath, 'stdout']);
            $process->run();

            // Vérification des erreurs éventuelles
            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }

            // Texte extrait de l'image
            $extractedText = trim($process->getOutput());

            // Recherche des articles basée sur le texte extrait (exemple simplifié)
            $articles = Article::where('nom', 'like', '%' . $extractedText . '%')->get();

            // Retourner la vue avec les articles trouvés
            return view('search-results', compact('articles'));

        } catch (ProcessFailedException $exception) {
            // Gérer l'exception en affichant un message d'erreur approprié
            return back()->withError('Erreur lors de l\'extraction du texte de l\'image. Veuillez réessayer.');
        }
    }
}
