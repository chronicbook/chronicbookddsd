<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auteur;

class auteurcontrolleur extends Controller
{
    public function listeauteur(){
        
        $lister_auteur=auteur::orderBY("id","asc")->get();
        return view('pages_admins.liste_auteurs' , compact("lister_auteur"));
    }
}
