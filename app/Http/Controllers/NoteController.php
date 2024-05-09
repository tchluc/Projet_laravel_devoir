<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Critere;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    public function create()
        {
            return view('admin.FormulaireCritere');
        }

        public function show()
        {
            $criteres = DB::table('criteres')->get();
            return view('admin.listeCriteres', ['criteres' => $criteres]);
        }
    
        public function storeCritere(Request $request)
        {
            $request->validate([
                'nom' => ['required','string','max:255'],
                'description' => ['required','string','max:255'],
            ]);

            $critere = new Critere();
            $critere->nom = $request->nom;
            $critere->description = $request->description;
            $critere->save();

            return redirect('admin.FormulaireCritere')->with('success', 'University created successfully.');
        }

        public function store(Request $request, $universiteId)
        {
            // Valider les données du formulaire
            $request->validate([
                'comment' => 'required|string',
            ]);
        
            // Enregistrer le commentaire
            $commentaire = new Commentaire();
            $commentaire->contenu = $request->input('comment');
            $commentaire->id_universite = $universiteId; // L'ID de l'université
            $commentaire->id_users = auth()->user()->id; // L'ID de l'utilisateur connecté
            $commentaire->save();
        
            // Enregistrer les notes des critères
            foreach ($request->all() as $key => $value) {
                if (strpos($key, 'critere') !== false) {
                    $critereId = substr($key, 7); // Récupérer l'ID du critère à partir du nom du champ
                    $note = new Note();
                    $note->id_users = auth()->user()->id; // L'ID de l'utilisateur connecté
                    $note->id_universite = $universiteId; 
                    $note->id_critere = $critereId;
                    $note->value = $value;
                    $note->save();
                }
            }
        
            return redirect('admin.university.show');
        }

        public function destroy($id)
        {
            $deleted = DB::table('criteres')->where('id', '=', $id)->delete();
            
        }
}
