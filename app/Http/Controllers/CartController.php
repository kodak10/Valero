<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
        ]);

        $article = Article::find($request->article_id);

        $cart = session()->get('cart', []);

        if (isset($cart[$article->id])) {
            $cart[$article->id]['quantity']++;
        } else {
            $cart[$article->id] = [
                'name' => $article->nom,
                'quantity' => 1,
                'price' => $article->prix,
                'photo' => $article->photo,
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Article ajouté au panier!');
    }

    public function destroy($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Article retiré du panier!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }
}
