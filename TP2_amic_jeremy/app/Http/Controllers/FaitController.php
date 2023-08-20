<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaitController extends Controller
{
     /**
     * Affiche la liste des employés
     *
     * @return View
     */
    public function index() {

        // La relation "position" est chargée à l'avance pour éviter le problème N+1
        $faits = Fait::inRandomOrder()->first();

        return view("faits.index", [
            "faits" => $faits
        ]);
    }

    public function list()
    {
        $faits = Fait::all();

        return view('faits.list', [
            'faits' => $faits
        ]);
    }

    public function create() {
        return view('faits.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'contenu' => 'required'
        ], [
            'contenu.required' => 'Veuillez remplir le champ.'
        ]);    
        Fait::create([
            'contenu' => $request->contenu
        ]);
    
        return redirect()->route('faits.list')->with('success', 'Votre fait à bien été ajouté.');
    } 

    public function destroy($id)
    {
        $fait = Fait::findOrFail($id);
        $fait->delete();
    
        return redirect()->route('faits.list')->with('success', 'Votre fait a été supprimé.');
    }
}
