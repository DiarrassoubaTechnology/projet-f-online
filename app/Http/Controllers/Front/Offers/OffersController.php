<?php

namespace App\Http\Controllers\Front\Offers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OffersController extends Controller
{
    //page offres
    public function indexFunction() {
        $title = "Nos Offres";

        $filecss = "offers";

        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.offers.index', compact('title','filecss'));
    }
}
