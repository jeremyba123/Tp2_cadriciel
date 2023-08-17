<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;

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

    public function list() {
        return view('faits.list');
    }

    public function create() {
        return view('faits.create');
    }


}
