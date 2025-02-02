<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
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

        return view('backend.pages.products.create', compact('categories', 'sousCategories'));
    }

    // public function store(Request $request)
    // {

    //     $validated = $request->validate([
    //         'categorie_id' => 'required|exists:categories,id',
    //         'categories' => 'required|array', 
    //         'categories.*' => 'exists:categories,id', 
            
    //         'tag_name' => 'nullable|string|max:255',
    //         'sous-categories' => 'nullable|array', 
    //         'sous-categories.*' => 'exists:sous-categories,id',

    //         'nom' => 'required|string|max:255',
    //         'prix' => 'required|numeric',

    //         'description' => 'nullable|string',
    //         'images' => 'nullable|array',
    //         'images.*' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    //         'couleurs' => 'nullable|array',
    //         'couverture' => 'required|image|mimes:jpg,png,jpeg|max:2048',
    //         'second_mains' => 'required|boolean',


    //         'is_promotion' => 'nullable|boolean', 
    //         'promotion_type' => 'nullable|in:none,percentage,fixed',  
    //         'promotion_value' => 'nullable|numeric|min:0',  
    //         'promotion_start' => 'nullable|date|before_or_equal:promotion_end',  
    //         'promotion_end' => 'nullable|date|after_or_equal:promotion_start',  
    
    //         'status' => 'required|in:published,draft,inactive', 
    //         'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    
            
    
            
    
    
    //     ], [
    //         'name.required' => 'Le nom de l\'article est requis.',
    //         'name.unique' => 'Un article avec ce nom existe déjà.',
    //         'name.string' => 'Le nom de l\'article doit être une chaîne de caractères.',
    //         'name.max' => 'Le nom de l\'article ne peut pas dépasser 255 caractères.',
    //         'description.string' => 'La description doit être une chaîne de caractères.',
    //         'price.required' => 'Le prix est requis.',
    //         'price.numeric' => 'Le prix doit être un nombre.',
    
    //         'images.*.nullable' => 'Les images sont optionnelles.',
    //         'images.*.image' => 'Les fichiers doivent être des images (JPEG, PNG, JPG).',
    //         'images.*.mimes' => 'Les images doivent être au format JPEG, PNG ou JPG.',
    //         'images.*.max' => 'Les images ne peuvent pas dépasser 2 Mo.',
    //         'couverture.nullable' => 'L\'image de couverture est optionnelle.',
    //         'couverture.image' => 'L\'image de couverture doit être une image (JPEG, PNG, JPG).',
    //         'couverture.mimes' => 'L\'image de couverture doit être au format JPEG, PNG ou JPG.',
    //         'couverture.max' => 'L\'image de couverture ne peut pas dépasser 2 Mo.',
    //         'status.required' => 'Le statut de l\'article est requis.',
    //         'status.in' => 'Le statut doit être l\'un des suivants : publié, brouillon ou inactif.',
    
    //         'categories.required' => 'Le catégorie de l\'article est requis.',
    //         'tags.required' => 'Le tags de l\'article est requis.',
    
    //         'promotion_type.in' => 'Le type de promotion doit être "none", "percentage" ou "fixed".',
    //         'promotion_value.numeric' => 'La valeur de la promotion doit être un nombre.',
    //         'promotion_value.min' => 'La valeur de la promotion doit être positive.',
    //         'promotion_start.date' => 'La date de début de la promotion doit être une date valide.',
    //         'promotion_start.before_or_equal' => 'La date de début doit être antérieure ou égale à la date de fin.',
    //         'promotion_end.date' => 'La date de fin de la promotion doit être une date valide.',
    //         'promotion_end.after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début.',
    //         'store_id.required' => "L'id du magasin est requis",
    
    //     ]);


    //     $request->validate([
            

    //     ]);

    //     // Enregistrement de l'article
    //     $article = new Article();
    //     $article->categorie_id = $request->categorie_id;
    //     $article->nom = $request->nom;
    //     $article->surnoms = $request->surnoms;
    //     $article->prix = $request->prix;
    //     $article->taille_format = $request->taille_format;
    //     $article->description = $request->description;
    //     $article->second_mains = $request->boolean('second_mains'); // Assurez-vous que la valeur est booléenne


    //     // Enregistrement des couleurs choisies
    //     // $article->couleurs = $request->couleurs ?? [];

    //     // Enregistrement de la couverture
    //     if ($request->hasFile('couverture')) {
    //         $coverImage = $request->file('couverture');
    //         $coverFileName = time() . '_' . $coverImage->getClientOriginalName();
    //         $coverImage->move(public_path('images/articles'), $coverFileName);
    //         $article->couverture = $coverFileName;
    //     }

    //     // Gestion des images
    //     if ($request->hasFile('images')) {
    //         $imagePaths = [];
    //         foreach ($request->file('images') as $image) {
    //             $fileName = time() . '_' . $image->getClientOriginalName();
    //             $image->move(public_path('images/articles'), $fileName);
    //             $imagePaths[] = $fileName;
    //         }
    //         $article->images = json_encode($imagePaths); // Convertir en JSON pour stocker dans la base de données
    //     } else {
    //         $article->images = json_encode([]); // Assurez-vous que le champ n'est pas null
    //     }

    //     $article->save();

    //     return redirect()->route('articles.create')->with('success', 'Article ajouté avec succès.');
    // }

    public function store(Request $request)
    {
        // dd($request);
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
            'store_id.required' => "L'id du magasin est requis",

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

            // Enregistrer les variations
            // if ($request->has('variations')) {
            //     foreach ($request->input('variations') as $variation) {
            //         Variation::create([
            //             'article_id' => $article->id,
            //             'type' => $variation['type'],
            //             'value' => $variation['value'],
            //         ]);
            //     }
            // }

            if ($request->hasFile('couverture')) {
                $couverture = $request->file('couverture');
                $couvertureName = $article->id . '_couverture.' . $couverture->getClientOriginalExtension();

                

                $couverturePath = $couverture->storeAs('images/articles/couverture', $couvertureName, 'public');
                
                

                $article->couverture = 'images/articles/couverture/' . $couvertureName;
                $article->save();
            }       
            
            // if ($request->hasFile('couverture')) {
            //     $couverture = $request->file('couverture');
            //     $couverturePath = 'images/articles/couverture/' . $article->id . '_couverture.webp';

            //     // Convertir l'image en WebP
            //     $image = Image::make($couverture)->encode('webp', 90); // Qualité de 90
            //     Storage::disk('public')->put($couverturePath, $image);

            //     $article->couverture = $couverturePath;
            //     $article->save();
            // }


            if ($request->hasFile('images')) {
                // foreach ($request->file('images') as $image) {
                //     // Générer un nom unique pour chaque image
                //     $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                    
                //     // Utilisez storeAs pour spécifier le nom du fichier et son emplacement
                //     $imagePath = $image->storeAs('images/articles', $imageName, 'public');
                    
                //     DB::table('product_image')->insert([
                //         'article_id' => $article->id,
                //         'image_path' => 'storage/images/articles/' . $imageName, // Enregistrez le chemin relatif dans la base de données
                //         'created_at' => now(),
                //         'updated_at' => now(),
                //     ]);
                // }

                // foreach ($request->file('images') as $imageFile) {
                //     $imagePath = 'images/articles/' . uniqid() . '.webp';

                //     // Convertir chaque image en WebP
                //     $image = Image::make($imageFile)->encode('webp', 90); // Qualité de 90
                //     Storage::disk('public')->put($imagePath, $image);

                //     DB::table('product_image')->insert([
                //         'article_id' => $article->id,
                //         'image_path' => $imagePath,
                //         'created_at' => now(),
                //         'updated_at' => now(),
                //     ]);
                // }
            } else {
                return redirect()->back()->with('error', 'Aucune image n\'a été envoyée.');
            }

            return redirect()->route('admin.articles.create')->with('success', 'Article mis à jour avec succès!');

        } catch (\Exception $e) {
            return response()->json(['error' => 'Une erreur est survenue : ' . $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        // Récupérez l'article depuis la base de données
        $article = Article::findOrFail($id);
        

        // Récupérez toutes les catégories pour le formulaire de sélection
        $categories = Category::all();

        // Retournez la vue d'édition avec les données nécessaires
        return view('administration.pages.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie_id' => 'required|exists:categories,id',
            'nom' => 'required|string|max:255',
            'surnoms' => 'nullable|string',
            'prix' => 'required|numeric',
            // 'couleurs' => 'nullable|array',
            'taille_format' => 'nullable|string|max:255',
            // 'en_stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'second_mains' => 'required|boolean',
            'couverture' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',


        ]);

        // Récupérez l'article à mettre à jour
        $article = Article::findOrFail($id);

        // Mettez à jour les champs de l'article avec les données du formulaire
        $article->categorie_id = $request->categorie_id;
        $article->nom = $request->nom;
        $article->surnoms = $request->surnoms;
        $article->prix = $request->prix;
        // $article->couleurs = json_encode($request->couleurs);
        $article->taille_format = $request->taille_format;
        // $article->en_stock = $request->en_stock;
        $article->description = $request->description;
        $article->second_mains = $request->boolean('second_mains'); // Assurez-vous que la valeur est booléenne

        // Traitement de la couverture
        if ($request->hasFile('couverture')) {
            $coverImage = $request->file('couverture');
            $coverFileName = time() . '_' . $coverImage->getClientOriginalName();
            $coverImage->move(public_path('images/articles'), $coverFileName);
            $article->couverture = $coverFileName;
        }
        
       // Gestion des images
        $existingImages = json_decode($article->images, true) ?? []; // Conservez les images existantes

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $fileName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/articles'), $fileName);
                $existingImages[] = $fileName;
            }
        }

        $article->images = json_encode($existingImages); // Conservez toutes les images

        // Enregistrez les modifications dans la base de données
        $article->save();

        // Redirigez avec un message de succès
        return redirect()->route('admin.articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy($id)
    {
        // Récupérez l'article à supprimer
        $article = Article::findOrFail($id);

        // Supprimez l'article de la base de données
        $article->delete();

        // Redirigez avec un message de succès
        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
