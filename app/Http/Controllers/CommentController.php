<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth; // Ajoutez cette ligne


class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
            'comment' => 'required|string|max:1000',
            'rating' => 'required|integer|between:1,5', // Validation pour la notation
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'article_id' => $request->article_id,
            'comment' => $request->comment,
            'rating' => $request->rating, // Assurez-vous que ce champ existe dans la table comments
        ]);

        return back()->with('success', 'Commentaire ajouté avec succès.');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        if (Auth::id() !== $comment->user_id) {
            return back()->withErrors('Vous ne pouvez pas supprimer ce commentaire.');
        }
        $comment->delete();
        return back()->with('success', 'Commentaire supprimé avec succès.');
    }
}


