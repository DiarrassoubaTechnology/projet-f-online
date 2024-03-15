<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    // page accueil
    public function accueil() {

        $title = "Accueil";

        $swiper = "true";

        // Recuperation de la liste type de  formation
        $list_Catformation = DB::table('categorie_formation')->where('cat_f_status', 1)->limit(5)->get()->toArray();

        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.accueil.index', compact('title','swiper','list_Catformation'));
        
    }

    // page connexion
    public function loginFunction() {

        $title = "Connexion";

        $showFileLogin = "Yes";

        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.auth.login', compact('title','showFileLogin'));
        
    }

    // page inscription
    public function registerFunction() {

        $title = "Inscription";

        $showFileLogin = "Yes";
        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.auth.register', compact('title','showFileLogin'));
        
    }

    // page blog
    public function blogFunction() {

        $title = "Le blog - Toute l'actualité de la formation en ligne.";

        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.blog.index', compact('title'));
        
    }

    // page partnaire
    public function partnairesFunction() {

        $title = "Nos partnaires";

        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.partnaire.index', compact('title'));
        
    }
}
