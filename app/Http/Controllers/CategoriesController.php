<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('administration.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('administration.pages.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_categorie' => 'required|string|max:255',
            'couverture' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Enregistrez la catégorie
        $category = new Category();
        $category->nom = $request->name_categorie;
        if ($request->hasFile('couverture')) {
            $fileName = time().'.'.$request->couverture->extension();
            $request->couverture->move(public_path('images/articles/couvertures'), $fileName);
            $category->couverture = 'images/categories/couverture/' . $fileName;
        }
        $category->save();

        return redirect()->route('admin.articles.create')->with('success', 'Catégorie ajoutée avec succès.');
    }

    public function edit(Category $category)
    {
        return view('administration.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'couverture' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $category->nom = $request->nom;
        if ($request->hasFile('couverture')) {
            $fileName = time() . '.' . $request->couverture->extension();
            $request->couverture->move(public_path('images/articles/couvertures'), $fileName);
            $category->couverture = $fileName;
        }
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
