<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SousCategorie as ModelsSousCategorie;
use Illuminate\Http\Request;

class SousCategorie extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('administration.pages.sousCategories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('administration.pages.sousCategories.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:sub_categories,name',
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Le nom de la catégorie est obligatoire.',
            'name.unique' => 'Cette sous catégorie existe déjà.',
            'image_path.required' => 'L\'image de la sous catégorie est obligatoire.',
            'image_path.image' => 'Le fichier doit être une image.',
            'image_path.mimes' => 'Seules les extensions JPEG, PNG, et JPG sont autorisées.',
            'image_path.max' => 'La taille de l\'image ne doit pas dépasser 2 Mo.',
        ]);

        // dd($validatedData);
       $imagePath = null;
       if ($request->hasFile('image_path')) {
           $imagePath = $request->file('image_path')->store('images/sousCategories', 'public');
       }

       // Enregistrement de la catégorie
       ModelsSousCategorie::create([
           'name' => $validatedData['name'],
           'image_path' => $imagePath,
       ]);

        return redirect()->route('admin.articles.create')->with('success', 'Sous-catégorie créée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('administration.pages.sousCategories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
