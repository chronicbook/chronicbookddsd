<?php

namespace App\Http\Controllers;

use App\Models\livre;
use Illuminate\Http\Request;

class livrescontrolleur extends Controller
{
    public function listerlivre (){

        $lister_livres=livre::orderBY("TITRE","asc")->get();
        return view("pages_admins.liste_livres_auteurs",compact("lister_livres"));
    }
}
