<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use App\Models\Article;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'article_id' => 'required|exists:articles,id',
    ]);

    $article = Article::find($request->article_id);

    $wishlist = session()->get('wishlist', []);

    if (isset($wishlist[$article->id])) {
        // Article déjà dans la liste de souhaits
        return back()->with('error', 'Cet article est déjà dans vos souhaits.');
    }

    $wishlist[$article->id] = [
        'name' => $article->nom,
        'price' => $article->prix,
        'photo' => $article->photo,
    ];

    session()->put('wishlist', $wishlist);

    return back()->with('success', 'Article ajouté à vos souhaits!');
}

public function destroy($id)
    {
        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$id])) {
            unset($wishlist[$id]);
            session()->put('wishlist', $wishlist);
            return back()->with('success', 'Article retiré de vos souhaits.');
        }

        return back()->with('error', 'L\'article que vous essayez de supprimer n\'existe pas dans vos souhaits.');
    }

}
