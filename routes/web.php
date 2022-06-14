<?php

use App\Http\Controllers\auteurcontrolleur;
use Illuminate\Support\Facades\Route;

    Route::get('/', function(){
        return view('pages.welcome');
    })->name('app_home');

    Route::get('/accueil_auteurs',function(){
        return view('pages_auteurs.index');
    })->name('accueil_auteurs');

    Route::get('/livre_auteurs',function(){
        return view('pages_auteurs.livre');
    })->name('livre_auteurs');

    Route::get('/liste_livre_auteurs',function(){
        return view('pages_auteurs.liste_livres');
    })->name('liste_livre_auteurs');

    Route::get('/liste_histoires_auteurs',function(){
        return view('pages_auteurs.liste_histoires');
    })->name('liste_histoires_auteurs');

    Route::get('/histoire_auteurs',function(){
        return view('pages_auteurs.histoire');
    })->name('histoire_auteurs');

    Route::get('/accueil_admin',function(){
        return view('pages_admins.accueil');
    })->name('accueil_admin');

    Route::get('/ajout_auteur',function(){
        return view('pages_admins.ajout_auteur');
    })->name('ajout_auteur');

    Route::get('/lister_auteur',[auteurcontrolleur::class,"listeauteur"])->name('lister_auteurs');

    Route::get('/lister_livre_auteur',function(){
        return view('pages_admins.liste_livres_auteurs');
    })->name('lister_livre_auteurs');

    Route::get('/lister_histoires_auteurs',function(){
        return view('pages_admins.liste_histoire_auteurs');
    })->name('lister_histoires_auteurs');

    Route::get('/inscriptions' , function(){
        return view('pages.inscription');
    })->name('inscriptions');

    Route::get('/nos_auteurs', function(){
        return view('pages.nos_auteurs');
    })->name('nos_auteurs');

    Route::get('/connexion' , function(){
        return view('pages.connexion');
    })->name('connexion');