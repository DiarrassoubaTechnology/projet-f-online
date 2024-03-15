<?php

namespace App\Http\Controllers\Front\Thematique;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThematiquesController extends Controller
{
    //page categorie
    public function indexFunction() {
        $title = "Nos Thematiques";

        
        // Recuperation de la liste Thematiques
        $list_Thematiques = DB::table('formation')->leftJoin('type_formations', 'formation.tformation_id', '=', 'type_formations.id')->where('type_formations.status', 1)->where('formation.status', 1)->get()->toArray();


        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.thematiques.index', compact('title','list_Thematiques'));
    }
}
