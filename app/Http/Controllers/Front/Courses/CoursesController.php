<?php

namespace App\Http\Controllers\Front\Courses;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //page Cours
    public function indexFunction($libelle) {
        $title = "Nos courses";

        $sousTitle = $libelle;

        
        // Recuperation du cours
        $list_courss = DB::table('formation')->leftJoin('type_formations', 'formation.tformation_id', '=', 'type_formations.id')->where('formation.formation_libelle', $libelle)->where('type_formations.status', 1)->where('formation.status', 1)->get()->toArray();

        // Recuperation prerequis
        $list_prerequis = DB::table('formation')
        ->leftJoin('prerequis', 'prerequis.formation_id', '=', 'formation.id')
        ->where('formation.formation_libelle', $libelle)
        ->where('formation.status', 1)->get()->toArray();

        // Recuperation objectif
        $list_objectifs = DB::table('formation')
        ->leftJoin('objectif_pedagogique', 'objectif_pedagogique.formation_id', '=', 'formation.id')
        ->where('formation.formation_libelle', $libelle)
        ->where('formation.status', 1)->get()->toArray();

        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.courses.index', compact('title','sousTitle','list_courss','list_prerequis','list_objectifs'));
    }

    //page Cours
    public function moduleFunction($libelle, $title) {
        $title = "Nos courses";

        $sousTitle = $libelle.' - apprenez les bases du langage Python';

        // L'utilisateur n'est pas authentifié (déconnecté)
        return view('pages.front.courses.cours', compact('title','sousTitle'));
    }
}
