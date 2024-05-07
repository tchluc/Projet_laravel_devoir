<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'contenu' => 'required|string|max:255',
        ]);

        $comment = new Commentaire();
        $comment->contenu = $request->contenu;
        $comment->id_universite = $id;
        $comment->id_users = auth()->id();
        $comment->save();

        return redirect()->route('university.show', $id)->with('success', 'Comment added successfully.');
    }
}
