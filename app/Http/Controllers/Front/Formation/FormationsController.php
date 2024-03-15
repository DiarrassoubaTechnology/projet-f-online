<?php

namespace App\Http\Controllers\Front\Formation;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FormationsController extends Controller
{
    //page categorie
    public function indexFunction() {
        $title = "Nos Formations";

        $seeAll = "yes";
        
        // Recuperation de la liste type de  formation
        $list_Catformation = DB::table('categorie_formation')->where('cat_f_status', 1)->get()->toArray();

        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.formations.index', compact('title','list_Catformation','seeAll'));
    }
}
