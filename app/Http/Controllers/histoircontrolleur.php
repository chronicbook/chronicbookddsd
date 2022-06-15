<?php

namespace App\Http\Controllers;

use App\Models\histoire;
use Illuminate\Http\Request;

class histoircontrolleur extends Controller
{
    public function listerhistoire (){

        $lister_histoire=histoire::orderBY("TITRE","asc")->get();
        return view("pages_admins.liste_histoire_auteurs",compact("lister_histoire"));
    }

    public function listehistoirepourlesauteurs(){

       
        $lister_histoire=histoire::orderBY("TITRE","asc")->get();
        return view("pages_auteurs.liste_histoires",compact("lister_histoire")); 
    }
}
