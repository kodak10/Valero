<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Color;
use App\Models\SousCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::with(['categories', 'sousCategories'])
        ->orderBy('created_at', 'desc')  
        ->get();  

        return view('backend.pages.products.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all(); 
        $sousCategories = SousCategorie::all(); 
        $colors = Color::all();

        return view('backend.pages.products.create', compact('categories', 'sousCategories', 'colors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:articles|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'is_promotion' => 'nullable|boolean', 
            'promotion_type' => 'nullable|in:none,percentage,fixed',  
            'promotion_value' => 'nullable|numeric|min:0',  
            'promotion_start' => 'nullable|date|before_or_equal:promotion_end',  
            'promotion_end' => 'nullable|date|after_or_equal:promotion_start',  

            'status' => 'required|in:published,draft,inactive', 
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'couverture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

            'categories' => 'required|array', 
            'categories.*' => 'exists:categories,id', 

            'tag_name' => 'nullable|string|max:255',
            'tags' => 'nullable|array', 
            'tags.*' => 'exists:sub_categories,id',
            'second_mains' => 'required',
            'colors' => 'array', // Les couleurs sont optionnelles

        ], [
            'name.required' => 'Le nom de l\'article est requis.',
            'name.unique' => 'Un article avec ce nom existe déjà.',
            'name.string' => 'Le nom de l\'article doit être une chaîne de caractères.',
            'name.max' => 'Le nom de l\'article ne peut pas dépasser 255 caractères.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'price.required' => 'Le prix est requis.',
            'price.numeric' => 'Le prix doit être un nombre.',

            'images.*.nullable' => 'Les images sont optionnelles.',
            'images.*.image' => 'Les fichiers doivent être des images (JPEG, PNG, JPG).',
            'images.*.mimes' => 'Les images doivent être au format JPEG, PNG ou JPG.',
            'images.*.max' => 'Les images ne peuvent pas dépasser 2 Mo.',
            'couverture.nullable' => 'L\'image de couverture est optionnelle.',
            'couverture.image' => 'L\'image de couverture doit être une image (JPEG, PNG, JPG).',
            'couverture.mimes' => 'L\'image de couverture doit être au format JPEG, PNG ou JPG.',
            'couverture.max' => 'L\'image de couverture ne peut pas dépasser 2 Mo.',
            'status.required' => 'Le statut de l\'article est requis.',
            'status.in' => 'Le statut doit être l\'un des suivants : publié, brouillon ou inactif.',

            'categories.required' => 'Le catégorie de l\'article est requis.',
            'tags.required' => 'Le tags de l\'article est requis.',

            'promotion_type.in' => 'Le type de promotion doit être "none", "percentage" ou "fixed".',
            'promotion_value.numeric' => 'La valeur de la promotion doit être un nombre.',
            'promotion_value.min' => 'La valeur de la promotion doit être positive.',
            'promotion_start.date' => 'La date de début de la promotion doit être une date valide.',
            'promotion_start.before_or_equal' => 'La date de début doit être antérieure ou égale à la date de fin.',
            'promotion_end.date' => 'La date de fin de la promotion doit être une date valide.',
            'promotion_end.after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début.',

        ]);


        try {
            $article = new Article();
            $article->name = $request->input('name');
            $article->description = $request->input('description');
            $article->price = $request->input('price');
            $article->quantite = $request->input('quantite');

            $article->status = $request->input('status');

            $article->is_promotion = $request->input('is_promotion', false); // Valeur par défaut false si non fourni
            $article->promotion_type = $request->input('promotion_type');
            $article->promotion_value = $request->input('promotion_value', 0); // Valeur par défaut 0 si non fourni
            $article->promotion_start = $request->input('promotion_start');
            $article->promotion_end = $request->input('promotion_end');
            $article->second_mains = $request->input('second_mains');

            $article->slug = Str::slug($article->name, '-');

            $article->save();

            // Attacher les catégories à l'article
            $article->categories()->attach($request->input('categories'));

            // Attacher les tags à l'article
            if ($request->has('tags')) {
                $article->sousCategories()->attach($validated['tags']);
            }

            // Associer les couleurs sélectionnées à l'article
            if ($request->has('colors')) {
                $article->colors()->attach($request->input('colors'));
            }

            if ($request->hasFile('couverture')) {
                $couverture = $request->file('couverture');
                $couvertureName = $article->id . '_couverture.' . $couverture->getClientOriginalExtension();

                $couverturePath = $couverture->storeAs('images/articles/couverture', $couvertureName, 'public');
                
                $article->couverture = 'images/articles/couverture/' . $couvertureName;
                $article->save();
            }       
            
            // if ($request->hasFile('images')) {
            //     foreach ($request->file('images') as $image) {
            //         // Générer un nom unique pour chaque image
            //         $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                    
            //         // Utilisez storeAs pour spécifier le nom du fichier et son emplacement
            //         $imagePath = $image->storeAs('images/articles', $imageName, 'public');
                    
            //         DB::table('product_image')->insert([
            //             'article_id' => $article->id,
            //             'image_path' => 'storage/images/articles/' . $imageName, // Enregistrez le chemin relatif dans la base de données
            //             'created_at' => now(),
            //             'updated_at' => now(),
            //         ]);
            //     }
                
            // }

            return redirect()->route('admin.articles.create')->with('success', 'Article créer avec succès!');

        } catch (\Exception $e) {
            return response()->json(['error' => 'Une erreur est survenue : ' . $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        // Récupérez l'article depuis la base de données
        $article = Article::with('categories','sousCategories')->findOrFail($id);


        // Récupérez toutes les catégories pour le formulaire de sélection
        $categories = Category::all();
        $tags = SousCategorie::all();
        $colors = Color::all();
        // Retournez la vue d'édition avec les données nécessaires
        return view('backend.pages.products.edit', compact('article', 'categories', 'tags', 'colors'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'is_promotion' => 'nullable|boolean', 
            'promotion_type' => 'nullable|in:none,percentage,fixed',  
            'promotion_value' => 'nullable|numeric|min:0',  
            'promotion_start' => 'nullable|date|before_or_equal:promotion_end',  
            'promotion_end' => 'nullable|date|after_or_equal:promotion_start',  

            'status' => 'required|in:published,draft,inactive', 
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'couverture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

            'categories' => 'required|array', 
            'categories.*' => 'exists:categories,id', 

            'tag_name' => 'nullable|string|max:255',
            'tags' => 'nullable|array', 
            'tags.*' => 'exists:sub_categories,id',
            'second_mains' => 'required',
        ], [
            'name.required' => 'Le nom de l\'article est requis.',
            'name.unique' => 'Un article avec ce nom existe déjà.',
            'name.string' => 'Le nom de l\'article doit être une chaîne de caractères.',
            'name.max' => 'Le nom de l\'article ne peut pas dépasser 255 caractères.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'price.required' => 'Le prix est requis.',
            'price.numeric' => 'Le prix doit être un nombre.',

            'images.*.nullable' => 'Les images sont optionnelles.',
            'images.*.image' => 'Les fichiers doivent être des images (JPEG, PNG, JPG).',
            'images.*.mimes' => 'Les images doivent être au format JPEG, PNG ou JPG.',
            'images.*.max' => 'Les images ne peuvent pas dépasser 2 Mo.',
            'couverture.nullable' => 'L\'image de couverture est optionnelle.',
            'couverture.image' => 'L\'image de couverture doit être une image (JPEG, PNG, JPG).',
            'couverture.mimes' => 'L\'image de couverture doit être au format JPEG, PNG ou JPG.',
            'couverture.max' => 'L\'image de couverture ne peut pas dépasser 2 Mo.',
            'status.required' => 'Le statut de l\'article est requis.',
            'status.in' => 'Le statut doit être l\'un des suivants : publié, brouillon ou inactif.',

            'categories.required' => 'Le catégorie de l\'article est requis.',
            'tags.required' => 'Le tags de l\'article est requis.',

            'promotion_type.in' => 'Le type de promotion doit être "none", "percentage" ou "fixed".',
            'promotion_value.numeric' => 'La valeur de la promotion doit être un nombre.',
            'promotion_value.min' => 'La valeur de la promotion doit être positive.',
            'promotion_start.date' => 'La date de début de la promotion doit être une date valide.',
            'promotion_start.before_or_equal' => 'La date de début doit être antérieure ou égale à la date de fin.',
            'promotion_end.date' => 'La date de fin de la promotion doit être une date valide.',
            'promotion_end.after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début.',
    
        ]);
        
        $isPromotion = $request->has('is_promotion') ? 1 : 0;


        // Mettre à jour les données de l'article
        $article->update([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'is_promotion' => 1,
            'promotion_type' => $request->promotion_type,
            'promotion_value' => $request->promotion_value,
            'promotion_start' => $request->promotion_start,
            'promotion_end' => $request->promotion_end,
            'second_mains' => $request->second_mains,

        ]);


        if ($request->hasFile('couverture')) {
            // Générer un nom unique pour l'image
            $imageName = time() . '.' . $request->couverture->getClientOriginalExtension();

            // Enregistrer l'image dans `storage/app/public/images/articles`
            $imagePath = $request->couverture->storeAs('images/articles', $imageName, 'public');

            // Mettre à jour le chemin de l'image dans la base de données
            $article->couverture = 'images/articles/' . $imageName;
        }

        // Gestion des autres images supplémentaires
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         // Générer un nom unique pour chaque image
        //         $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        //         $imagePath = $image->storeAs('images/articles', $imageName, 'public');
                
        //         // Enregistrer l'image dans la table pivot 'product_image'
        //         DB::table('product_image')->insert([
        //             'article_id' => $article->id,
        //             'image_path' => 'storage/images/articles/' . $imageName,
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ]);
        //     }
        // }
        
        $article->categories()->sync($request->categories);

        $article->SousCategories()->sync($request->tags);

        $article->colors()->sync($request->colors);

        $article->save();

        return redirect()->route('admin.articles.index')->with('success', 'Article mis à jour avec succès!');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
