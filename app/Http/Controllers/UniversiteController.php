<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Critere;
use App\Models\Universite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniversiteController extends Controller
{

        public function create()
        {
            return view('admin.university.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'nom' => ['required','string','max:255'],
                'site_web' => ['required','string','max:255'],
                'localisation' => ['required','string','max:255'],
                'description' => ['required','string','max:255'],
                'image' => 'image','mimes:jpeg,png,jpg,gif','max:2048',
            ]);

            $university = new Universite();
            $university->nom = $request->nom;
            $university->site_web = $request->site_web;
            $university->localisation = $request->localisation;
            $university->description = $request->description;

            
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/universities'), $imageName);
                $university->image = 'images/universities/' . $imageName;
            }
        

            $university->save();

            return view('admin.university.create')->with('success', 'University created successfully.');
        }
    
        public function show($id)
        {
            $university = Universite::findOrFail($id);
            $criteres = Critere::all();
            $comments = Commentaire::where('id_universite', $id)->paginate(10);
            $user = User::all();

            $moyenneNotes = $university->moyenneNotes();
            
            
        
            return view('admin.university.show', compact('university', 'comments', 'criteres' , 'moyenneNotes',));
        }
}
