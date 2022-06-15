<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auteur;

class auteurcontrolleur extends Controller
{
    public function listeauteur(){
        
        $lister_auteur=auteur::orderBY("NOM_AUTEUR","asc")->get();
        return view("pages_admins.liste_auteurs" , compact("lister_auteur"));
    }

    

    public function ajoutauteur(){
        
        return view("pages_admins.ajout_auteur");
    }
    public function store(Request $request){

                    
         $post = new auteur();

      $post->NOM_AUTEUR=$request->nom;
      $post->PRENOM_AUTEUR=$request->prenom;
      $post->LOGIN_AUTEUR=$request->login;
      $post->TEL_AUTEUR=$request->tel;
      $post->EMAIL_AUTEUR=$request->email;
      $post->REFERENCE_AUTEUR=$request->reference;
      $post->VILLE_AUTEUR=$request->ville;
      $post->PWD_AUTEUR=$request->pwd;
      $post->PROFIL_AUTEUR=$request->profile;
      $post->save(); 
/* 
        auteur::ajout_auteur([
                'NOM_AUTEUR'=>$request->nom,
              'PRENOM_AUTEUR'=>$request->prenom,
              'LOGIN_AUTEUR'=>$request->login,
              'TEL_AUTEUR'=>$request->tel,
              'EMAIL_AUTEUR'=>$request->email,
              'REFERENCE_AUTEUR'=>$request->reference,
              'VILLE_AUTEUR'=>$request->ville,
              'PROFIL_AUTEUR'=>$request->pwd,
              'profile'=>$request->profile,

        ]); */
        dd('post crée');
   
    }
}
